<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OptimisationDesTourn√©esController extends AbstractController
{
    #[Route('/optimisation/des/tourn/es', name: 'app_optimisation_des_tourn_es')]
    public function index(): Response
    {
        return $this->render('optimisation_des_tourn√©es/index.html.twig', [
            'controller_name' => 'OptimisationDesTourn√©esController',
        ]);
    }
}
