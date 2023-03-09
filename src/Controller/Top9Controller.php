<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Top9Controller extends AbstractController
{
    #[Route('/top9', name: 'app_top9')]
    public function index(): Response
    {
        return $this->render('top9/index.html.twig', [
            'controller_name' => 'Top9Controller',
        ]);
    }
}
