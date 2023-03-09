<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LiveagentController extends AbstractController
{
    #[Route('/liveagent', name: 'app_liveagent')]
    public function index(): Response
    {
        return $this->render('liveagent/index.html.twig', [
            'controller_name' => 'LiveagentController',
        ]);
    }
}
