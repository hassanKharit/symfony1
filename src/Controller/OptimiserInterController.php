<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OptimiserInterController extends AbstractController
{
    #[Route('/optimiser/inter', name: 'app_optimiser_inter')]
    public function index(): Response
    {
        return $this->render('optimiser_inter/index.html.twig', [
            'controller_name' => 'OptimiserInterController',
        ]);
    }
}
