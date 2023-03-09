<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContratDeMaintenanceController extends AbstractController
{
    #[Route('/contrat/de/maintenance', name: 'app_contrat_de_maintenance')]
    public function index(): Response
    {
        return $this->render('contrat_de_maintenance/index.html.twig', [
            'controller_name' => 'ContratDeMaintenanceController',
        ]);
    }
}
