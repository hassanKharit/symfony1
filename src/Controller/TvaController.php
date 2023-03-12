<?php

namespace App\Controller;

use App\Form\TvaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TvaController extends AbstractController
{
    #[Route('/tva', name: 'app_tva')]
    public function index(Request $request): Response
    {
        $form=$this->createForm(TvaType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form -> isValid()) {
            $data = $form -> getData();
            $data ['tva']=$data['prix']*0.2;
            return $this->render('tva/traitement.htmi.twig',[
                'mes_donnes' => $data
            ]);
            
        }

        return $this->renderForm('tva/index.html.twig', [
            'le_form_tva' => $form
        ]);
    }
}
