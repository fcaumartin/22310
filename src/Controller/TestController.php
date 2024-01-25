<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ContactType;
use App\Form\ProduitType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/add_product', name: 'add_product')]
    public function add_product(Request $request, EntityManagerInterface $manager): Response
    {
        $produit = new Produit();

        $form = $this->createForm(ProduitType::class, $produit);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $manager->persist($produit);
            $manager->flush();

            return $this->redirectToRoute("app_accueil");
        }

        return $this->render('test/add_product.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(Request $request): Response
    {

        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            dd($form->getData());

            return $this->redirectToRoute("app_accueil");
        }

        return $this->render('test/contact.html.twig', [
            'form' => $form,
        ]);
    }
}
