<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MondayController extends AbstractController
{
    #[Route('/monday', name: 'app_monday')]
    public function index(): Response
    {
        return $this->render('monday/index.html.twig', [
            'controller_name' => 'MondayController',
        ]);
    }
}
