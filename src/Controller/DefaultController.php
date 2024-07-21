<?php

namespace App\Controller;

use App\Entity\Habitat;
use App\Entity\Review;
use App\Form\HabitatCommentType;
use App\Form\HabitatType;
use App\Form\ReviewType;
use App\Repository\AnimalRepository;
use App\Repository\HabitatRepository;
use App\Repository\ReviewRepository;
use App\Repository\ScheduleRepository;
use App\Repository\ServiceRepository;
use App\Repository\VeterinaryReportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        ReviewRepository $reviewRepository,
        ScheduleRepository $scheduleRepository,
        ServiceRepository $serviceRepository,
        Request $request,
        EntityManagerInterface $em,
        HabitatRepository $habitatRepository,
        AnimalRepository $animalRepository,
    ): Response
    {
        $avisAAfficher = $reviewRepository->findBy(['valid' => true]);
        $schedules = $scheduleRepository->findAll();
        $services = $serviceRepository->findAll();
        $user = $this->getUser();
        $habitats = $habitatRepository->findAll();
        $animals = $animalRepository->findAll();



        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($review);
            $em->flush();

            $this->addFlash('success', 'Votre avis a été soumis et est en attente de validation.');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('default/index.html.twig', [
            'reviews' => $avisAAfficher,
            'form' => $form->createView(),
            'schedules' => $schedules,
            'user' => $user,
            'services' => $services,
            'habitats' => $habitats,
            'animals' => $animals
        ]);
    }

    #[Route('/habitat', name: 'app_habitat', methods: ['GET', 'POST'])]
    public function habitat(
        HabitatRepository $habitatRepository,
        AnimalRepository $animalRepository,
        VeterinaryReportRepository $veterinaryReportRepository,
        Request $request,
        EntityManagerInterface $em
    ): Response
    {
        $habitats = $habitatRepository->findAll();
        $animals = $animalRepository->findAll();
        $veterinaryReports = $veterinaryReportRepository->findAll();

        $formViews = [];
        if ($this->isGranted('ROLE_VETERINARIAN')) {
            foreach ($habitats as $habitat) {
                $form = $this->createForm(HabitatCommentType::class, $habitat);
                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {
                    $em->persist($habitat);
                    $em->flush();
                    $this->addFlash('success', 'Commentaire ajouté avec succes');
                    return $this->redirectToRoute('app_habitat');
                }
                $formViews[$habitat->getId()] = $form->createView();
            }
        }

        return $this->render('default/habitat.html.twig', [
            'habitats' => $habitats,
            'animals' => $animals,
            'veterinaryReports' => $veterinaryReports,
            'formViews' => $formViews
        ]);
    }

    #[Route('/habitat/{id}/animals', name: 'app_habitat_animals', methods: ['GET'])]
    public function getAnimalsByHabitat(
        Habitat $habitat,
        AnimalRepository $animalRepository,
        VeterinaryReportRepository $veterinaryReportRepository
    ): Response
    {
        $animals = $animalRepository->findBy(['habitat' => $habitat]);


        $animalData = [];
        foreach ($animals as $animal) {
            $veterinaryReports = $veterinaryReportRepository->findBy(['animal' => $animal]);

            $reportData = [];
            foreach ($veterinaryReports as $report) {
                $reportData[] = [
                    'id' => $report->getId(),
                    'health_status' => $report->getHealthStatus(),
                    'food' => $report->getFood(),
                    'food_weight' => $report->getFoodWeight(),
                    'report_date' => $report->getReportDate()->format('Y-m-d H:i:s'),
                    'detail' => $report->getDetail(),
                ];
            }

            $animalData[] = [
                'id' => $animal->getId(),
                'name' => $animal->getName(),
                'image' => $animal->getImage(),
                'veterinary_reports' => $reportData,
            ];
        }

        return $this->json([
            'habitat_name' => $habitat->getName(),
            'habitat_detail' => $habitat->getDescription(),
            'animals' =>$animalData,
        ]);
    }

    #[Route('/service', name: 'app_service')]
    public function service(ServiceRepository $serviceRepository): Response
    {
        $service = $serviceRepository->findAll();

        return $this->render('default/service.html.twig', [
            'service' => $service
        ]);
    }
}