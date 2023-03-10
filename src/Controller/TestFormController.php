<?php

namespace App\Controller;

use App\Form\FormTestType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestFormController extends AbstractController
{
    #[Route('/test_form', name: 'app_test_form')]
    public function index(Request $request): Response
    {

        // recuperer le formulaire dans une variable correspondant 
        // a FormTestType
        $dataform = $this->createForm(FormTestType::class);
        // on prend l'objet form qui va lire la request
        $dataform->handleRequest($request);
        // test si l'envoie en post et est valide est bien envoyé
        if ($dataform->isSubmitted() && $dataform->isValid()) {
             // creer une variable task qui est un tableau clé valeur
            // contenant les données envoyé en POST
            $data= $dataform->getData();
            // renvoie une twig contenant les données du form
            // avec la variable data
            return $this->render('test_form/traitement.html.twig', [
                    'mes_donnes'=>$data
            ]);
        }

        return $this->renderForm('test_form/index.html.twig', [
            'monformulaire'=>$dataform 
        ]);

            // dd($data);
        // return $this->render('test_form/index.html.twig', [
        //     'controller_name' => 'TestFormController',
        // ]);


        // $form = $this->createForm(FormTestType::class);
        // return $this->renderForm('test_form/index.html.twig', [
        //     'monformulaire'=>$form 
        // ]);
    }
}
?>