<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FreshdeskController extends AbstractController
{
    #[Route('/freshdesk', name: 'app_freshdesk')]
    public function index(): Response
    {
        return $this->render('freshdesk/index.html.twig', [
            'controller_name' => 'FreshdeskController',
        ]);
    }
}
