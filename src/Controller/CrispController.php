<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CrispController extends AbstractController
{
    #[Route('/crisp', name: 'app_crisp')]
    public function index(): Response
    {
        return $this->render('crisp/index.html.twig', [
            'controller_name' => 'CrispController',
        ]);
    }
}
