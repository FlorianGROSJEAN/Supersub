<?php

namespace App\Controller\Front;

use App\Repository\SoloRepository;
use App\Repository\WorkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SoloController extends AbstractController
{
    /**
     * @Route("/solo", name="solo")
     */
    public function index(SoloRepository $soloRepository): Response
    {
        return $this->render('front/home/solo.html.twig', [
            'solos' => $soloRepository->findAll(),
        ]);
    }
}
