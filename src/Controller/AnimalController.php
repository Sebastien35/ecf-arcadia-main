<?php

namespace App\Controller;

use App\Document\AnimalView;
use App\Entity\Animal;
use App\Entity\Habitat;
use App\Entity\VeterinaryReport;
use App\Form\AnimalType;
use App\Repository\AnimalFeedingRepository;
use App\Repository\AnimalRepository;
use App\Repository\HabitatRepository;
use App\Repository\VeterinaryReportRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class AnimalController extends AbstractController
{
    #[Route('/veto/animal/', name: 'app_animal_index', methods: ['GET'])]
    public function index(AnimalRepository $animalRepository): Response
    {
        return $this->render('animal/index.html.twig', [
            'animals' => $animalRepository->findAll(),
        ]);
    }

    #[Route('/veto/animal/new', name: 'app_animal_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, HabitatRepository $habitatRepository, SluggerInterface $slugger): Response
    {
        $habitat = $habitatRepository->findOneBy([]);
        if (!$habitat) {
            throw $this->createNotFoundException('Aucun habitat trouvé, veuillez en créer un avant de créer un animal.');
        }

        $animal = new Animal($habitat);
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $images = $form->get('image')->getData();
            $imageNames = [];

            if ($images) {
                foreach ($images as $image) {
                    $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                    try {
                        $image->move(
                            $this->getParameter('images_directory'),
                            $newFilename
                        );
                        $this->addFlash('success', 'Image uploaded successfully.');
                    } catch (FileException $e) {
                        $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image.');
                        return $this->render('animal/new.html.twig', [
                            'animal' => $animal,
                            'form' => $form,
                        ]);
                    }
                    $imageNames [] = $newFilename;
                }
                $animal->setImage($imageNames);
            } else {
                $this->addFlash('error', 'No images found.');
            }

            $em->persist($animal);
            $em->flush();

            $this->addFlash('success', 'Animal created successfully with images.');

            return $this->redirectToRoute('app_animal_list');
        }

        return $this->render('animal/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/animal', name: 'app_animal_list')]
    public function list(
        EntityManagerInterface $em,
    ): Response
    {
        $animals = $em->getRepository(Animal::class)->findAll();

        return $this->render('animal/list.html.twig', [
            'animals' => $animals,
        ]);
    }


    #[Route('/veto/animal/{id}/edit', name: 'app_animal_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Animal $animal, EntityManagerInterface $em, SluggerInterface $slugger, HabitatRepository $habitatRepository): Response
    {
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $images = $form->get('image')->getData();
            $imageNames = [];



            $habitat = $form->get('habitat')->getData();
            if ($habitat && $habitat->getId()) {
                $animal->setHabitat($habitat);
            } else {
                $this->addFlash('error', 'Veuillez sélectionner un habitat valide.');
                return $this->render('animal/edit.html.twig', [
                    'form' => $form->createView(),
                    'animal' => $animal,
                ]);
            }

            if ($images) {
                foreach ($images as $image) {
                    $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                    try {
                        $image->move(
                            $this->getParameter('images_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image.');
                        return $this->render('animal/edit.html.twig', [
                            'form' => $form,
                            'animal' => $animal,
                        ]);
                    }
                    $imageNames[] = $newFilename;
                }
                $animal->setImage($imageNames);
            }

            $em->flush();

            return $this->redirectToRoute('app_animal_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('animal/edit.html.twig', [
            'animal' => $animal,
            'form' => $form,

        ]);
    }

    #[Route('/veto/animal/{id}/', name: 'app_animal_delete', methods: ['POST'])]
    public function delete(Request $request, Animal $animal, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $animal->getId(), $request->request->get('_token'))) {
            $em->remove($animal);
            $em->flush();
        }

        return $this->redirectToRoute('app_animal_index');
    }

    #[Route('/animal/{id}', name: 'app_animal_show', methods: ['GET'])]
    public function show(
        Animal $animal,
        DocumentManager $dm,
        VeterinaryReportRepository $veterinaryReportRepository,
        AnimalFeedingRepository $animalFeedingRepository
    ): Response
    {
        $animalView = $dm->getRepository(AnimalView::class)->findOneBy(['animalName' => $animal->getName()]);

        if (!$animalView) {
            $animalView = new AnimalView();
            $animalView->setAnimalName($animal->getName());
            $dm->persist($animalView);
        }

        $animalView->incrementViews();
        $dm->flush();

        $veterinaryReports = $veterinaryReportRepository->findBy(['animal' => $animal]);
        $animalFeedings = $animalFeedingRepository->findBy(['animal' => $animal]);

        return $this->render('animal/show.html.twig', [
            'animal' => $animal,
            'views' => $animalView->getViews(),
            'veterinaryReports' => $veterinaryReports,
            'animalFeedings' => $animalFeedings
        ]);
    }
}