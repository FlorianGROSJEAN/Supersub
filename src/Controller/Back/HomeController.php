<?php

namespace App\Controller\Back;

use App\Repository\SoloRepository;
use App\Repository\WorkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/back/", name="back_home")
     */
    public function index(WorkRepository $workRepository, SoloRepository $soloRepository): Response
    {
        return $this->render('back/home.html.twig', [
            'works' => $workRepository->findAll(),
            'solos' => $soloRepository->findAll(),
        ]);
    }
}
