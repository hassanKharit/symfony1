<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClarilogController extends AbstractController
{
    #[Route('/clarilog', name: 'app_clarilog')]
    public function index(): Response
    {
        return $this->render('clarilog/index.html.twig', [
            'controller_name' => 'ClarilogController',
        ]);
    }
}
