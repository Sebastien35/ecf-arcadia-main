<?php

namespace App\Controller;

use App\Entity\Schedule;
use App\Form\ScheduleType;
use App\Repository\ScheduleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/admin/schedule', name: 'app_schedule_')]
class ScheduleController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(ScheduleRepository $scheduleRepository): Response
    {
        return $this->render('schedule/index.html.twig', [
            'schedules' => $scheduleRepository->findAll()
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        ScheduleRepository$scheduleRepository,
        EntityManagerInterface $em
    ): Response
    {

        $schedule = new Schedule();
        $form = $this->createForm(ScheduleType::class, $schedule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $existingSchedule = $scheduleRepository->findOneBy(['day' => $schedule->getDay()]);

            if ($existingSchedule) {
                return $this->redirectToRoute('app_schedule_edit', ['id' => $existingSchedule->getId()]);
            }

            $em->persist($schedule);
            $em->flush();

            return $this->redirectToRoute('app_schedule_index');
        }

        return $this->render('schedule/new.html.twig', [
            'schedule' => $schedule,
            'form' =>$form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Schedule $schedule, EntityManagerInterface  $em): Response
    {
        $form = $this->createForm(ScheduleType::class, $schedule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('app_schedule_index');
        }

        return $this->render('schedule/edit.html.twig', [
            'schedule' => $schedule,
            'form' =>$form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Schedule $schedule, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$schedule->getId(), $request->request->get('_token'))) {
            $em->remove($schedule);
            $em->flush();
        }

        return $this->redirectToRoute('app_schedule_index');
    }

}
