<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZendeskController extends AbstractController
{
    #[Route('/zendesk', name: 'app_zendesk')]
    public function index(): Response
    {
        return $this->render('zendesk/index.html.twig', [
            'controller_name' => 'ZendeskController',
        ]);
    }
}
