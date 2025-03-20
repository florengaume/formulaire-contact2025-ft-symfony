<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FormulaireContactController extends AbstractController
{
    #[Route('/', name: 'app_formulaire_contact')]
    public function index(): Response
    {
        return $this->render('formulaire_contact/index.html.twig', [
            'controller_name' => 'FormulaireContactController',
        ]);
    }
}
