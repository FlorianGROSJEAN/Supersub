<?php

namespace App\Controller\Front;

use App\Repository\WorkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorkController extends AbstractController
{
    /**
     * @Route("/", name="work")
     */
    public function index(WorkRepository $workRepository): Response
    {
        return $this->render('front/home/work.html.twig', [
            'works' => $workRepository->findAll(),
        ]);
    }
}
