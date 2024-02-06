<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Entity\SousCategorie;
use App\Repository\CategorieRepository;
use App\Services\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(CategorieRepository $repo): Response
    {
        $categories = $repo->findAll();

        return $this->render('catalogue/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/categorie/{categorie}', name: 'app_categorie')]
    public function categorie(Categorie $categorie): Response
    {
        // dd($categorie);

        return $this->render('catalogue/categorie.html.twig', [
            'categorie' => $categorie
        ]);
    }

    #[Route('/produits/{sousCategorie}', name: 'app_produits')]
    public function produits(SousCategorie $sousCategorie): Response
    {
        // dd($categorie);

        return $this->render('catalogue/produits.html.twig', [
            'sousCategorie' => $sousCategorie
        ]);
    }

    #[Route('/produit/{produit}', name: 'app_produit')]
    public function produit(Produit $produit): Response
    {
        // dd($categorie);

        return $this->render('catalogue/produit.html.twig', [
            'produit' => $produit
        ]);
    }

    #[Route('/admin', name: 'app_admin')]
    public function admin(): Response
    {

        return new Response("page admin");
    }

    #[Route('/profile', name: 'app_profile')]
    public function profile(): Response
    {

        return new Response("page profile");
    }

    public function panier(Panier $service_panier): Response
    {

        return $this->render(
            'catalogue/panier_quantite.html.twig',
                ['quantite' => $service_panier->quantite()]
        );
    }
}
