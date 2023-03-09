<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OptimisationDesTournéesController extends AbstractController
{
    #[Route('/optimisation/des/tourn/es', name: 'app_optimisation_des_tourn_es')]
    public function index(): Response
    {
        return $this->render('optimisation_des_tournées/index.html.twig', [
            'controller_name' => 'OptimisationDesTournéesController',
        ]);
    }
}
