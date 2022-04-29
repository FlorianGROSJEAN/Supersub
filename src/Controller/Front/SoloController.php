<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SoloController extends AbstractController
{
    /**
     * @Route("/solo", name="solo")
     */
    public function index(): Response
    {
        return $this->render('front/home/solo.html.twig', [
            'controller_name' => 'SoloController',
        ]);
    }
}
