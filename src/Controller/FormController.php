<?php

namespace App\Controller;

use App\Form\InputForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class FormController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index()
    {
        $form = $this->createForm(InputForm::class);
        return $this->render('base.html.twig', [
            'form' => $form
        ]);
    }
}
