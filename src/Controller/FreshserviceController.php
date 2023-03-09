<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FreshserviceController extends AbstractController
{
    #[Route('/freshservice', name: 'app_freshservice')]
    public function index(): Response
    {
        return $this->render('freshservice/index.html.twig', [
            'controller_name' => 'FreshserviceController',
        ]);
    }
}
