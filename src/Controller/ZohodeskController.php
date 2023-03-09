<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZohodeskController extends AbstractController
{
    #[Route('/zohodesk', name: 'app_zohodesk')]
    public function index(): Response
    {
        return $this->render('zohodesk/index.html.twig', [
            'controller_name' => 'ZohodeskController',
        ]);
    }
}
