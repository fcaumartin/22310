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

    #[Route(
        '/{react_route}', 
        name: 'app_react2', 
        requirements: ["react_route"=>"^.+"], 
        defaults: ["react_route"=> null]
    )]
    public function index2(): Response
    {
        return $this->render('react/index2.html.twig', [
            'controller_name' => 'ReactController',
        ]);
    }
}
