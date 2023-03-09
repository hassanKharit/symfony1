<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {

        $aprenant = "hassan";

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'name' => 'karit',
            'surname' => 'hassan',
            'age' => '44',
            'nom_aprenant' => $aprenant,





        ]);
    }
}
