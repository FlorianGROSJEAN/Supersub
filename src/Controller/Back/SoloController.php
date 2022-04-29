<?php

namespace App\Controller\Back;

use App\Entity\Solo;
use App\Form\SoloType;
use App\Repository\SoloRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/back/solo")
 */
class SoloController extends AbstractController
{
    /**
     * @Route("/", name="solo_index", methods={"GET"})
     */
    public function index(SoloRepository $soloRepository): Response
    {
        return $this->render('back/solo/index.html.twig', [
            'solos' => $soloRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="solo_new", methods={"GET", "POST"})
     */
    public function new(Request $request, SoloRepository $soloRepository): Response
    {
        $solo = new Solo();
        $form = $this->createForm(SoloType::class, $solo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $soloRepository->add($solo);
            return $this->redirectToRoute('app_back_solo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/solo/new.html.twig', [
            'solo' => $solo,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="solo_show", methods={"GET"})
     */
    public function show(Solo $solo): Response
    {
        return $this->render('back/solo/show.html.twig', [
            'solo' => $solo,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="solo_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Solo $solo, SoloRepository $soloRepository): Response
    {
        $form = $this->createForm(SoloType::class, $solo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $soloRepository->add($solo);
            return $this->redirectToRoute('app_back_solo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/solo/edit.html.twig', [
            'solo' => $solo,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="solo_delete", methods={"POST"})
     */
    public function delete(Request $request, Solo $solo, SoloRepository $soloRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$solo->getId(), $request->request->get('_token'))) {
            $soloRepository->remove($solo);
        }

        return $this->redirectToRoute('app_back_solo_index', [], Response::HTTP_SEE_OTHER);
    }
}
