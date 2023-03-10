<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormTestController extends AbstractController
{
    #[Route('/form/test', name: 'app_form_test')]
    public function index(): Response
    {
        return $this->render('form_test/index.html.twig', [
            'controller_name' => 'FormTestController',
        ]);
    }
}
