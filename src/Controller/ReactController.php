<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReactController extends AbstractController
{
    #[Route('/react', name: 'app_react')]
    public function index(): Response
    {
        return $this->render('react/index.html.twig', [
            'controller_name' => 'ReactController',
        ]);
    }

    #[Route('/', name: 'app_react2')]
    #[Route('/souscategories', name: 'app_react3')]
    #[Route('/listeproduits', name: 'app_react4')]
    #[Route('/detailsproduit', name: 'app_react5')]
    public function index2(): Response
    {
        return $this->render('react/index2.html.twig', [
            'controller_name' => 'ReactController',
        ]);
    }
}
