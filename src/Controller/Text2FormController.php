<?php

namespace App\Controller;


use App\Form\FormText2Type;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Text2FormController extends AbstractController
{
    #[Route('/text2_form', name: 'app_text2_form')]
    public function index(): Response
    {
        $form = $this->createForm(FormText2Type::class);
        return $this->renderForm('text2_form/index.html.twig', [
            'monformulaire'=>$form
        ]);
    }
}
