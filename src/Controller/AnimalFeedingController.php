<?php

namespace App\Controller;

use App\Entity\AnimalFeeding;
use App\Form\AnimalFeedingType;
use App\Repository\AnimalFeedingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('employee/animal/feeding', name: 'app_animal_feeding_')]
class AnimalFeedingController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(AnimalFeedingRepository $animalFeedingRepository): Response
    {
        return $this->render('animal_feeding/index.html.twig', [
            'animal_feedings' => $animalFeedingRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $animalFeeding = new AnimalFeeding();
        $form = $this->createForm(AnimalFeedingType::class, $animalFeeding);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($animalFeeding);
            $entityManager->flush();

            return $this->redirectToRoute('app_animal_feeding_index');
        }

        return $this->render('animal_feeding/new.html.twig', [
            'animal_feeding' => $animalFeeding,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(AnimalFeeding $animalFeeding): Response
    {
        return $this->render('animal_feeding/show.html.twig', [
            'animal_feeding' => $animalFeeding,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, AnimalFeeding $animalFeeding, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AnimalFeedingType::class, $animalFeeding);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_animal_feeding_index');
        }

        return $this->render('animal_feeding/edit.html.twig', [
            'animal_feeding' => $animalFeeding,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, AnimalFeeding $animalFeeding, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$animalFeeding->getId(), $request->request->get('_token'))) {
            $entityManager->remove($animalFeeding);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_animal_feeding_index');
    }


}
