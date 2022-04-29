<?php

namespace App\Controller\Back;

use App\Entity\Work;
use App\Form\WorkType;
use App\Repository\WorkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/back/work")
 */
class WorkController extends AbstractController
{
    /**
     * @Route("/", name="work_index", methods={"GET"})
     */
    public function index(WorkRepository $workRepository): Response
    {
        return $this->render('back/work/index.html.twig', [
            'works' => $workRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="work_new", methods={"GET", "POST"})
     */
    public function new(Request $request, WorkRepository $workRepository): Response
    {
        $work = new Work();
        $form = $this->createForm(WorkType::class, $work);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $workRepository->add($work);
            return $this->redirectToRoute('app_back_work_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/work/new.html.twig', [
            'work' => $work,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="work_show", methods={"GET"})
     */
    public function show(Work $work): Response
    {
        return $this->render('back/work/show.html.twig', [
            'work' => $work,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="work_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Work $work, WorkRepository $workRepository): Response
    {
        $form = $this->createForm(WorkType::class, $work);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $workRepository->add($work);
            return $this->redirectToRoute('app_back_work_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/work/edit.html.twig', [
            'work' => $work,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="work_delete", methods={"POST"})
     */
    public function delete(Request $request, Work $work, WorkRepository $workRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$work->getId(), $request->request->get('_token'))) {
            $workRepository->remove($work);
        }

        return $this->redirectToRoute('app_back_work_index', [], Response::HTTP_SEE_OTHER);
    }
}
