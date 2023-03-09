<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AteraController extends AbstractController
{
    #[Route('/atera', name: 'app_atera')]
    public function index(): Response
    {
        return $this->render('atera/index.html.twig', [
            'controller_name' => 'AteraController',
        ]);
    }
}
