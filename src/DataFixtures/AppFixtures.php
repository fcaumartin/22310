<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Entity\SousCategorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $c1 = new Categorie();
        $c1->setNom("Guitares");
        $c1->setImage("https://picsum.photos/300/200");
        $manager->persist($c1);

        $sc1 = new SousCategorie();
        $sc1->setNom("Guitares Electriques");
        $sc1->setImage("https://picsum.photos/300/200");
        //$sc1->setCategorie($c1);
        $c1->addSousCategory($sc1);
        $manager->persist($sc1);

        $p1 = new Produit();
        $p1->setLibelle("Guitare qui joue vite...");
        $p1->setDescription("et fort...");
        $p1->setImage("https://picsum.photos/300/200");
        $p1->setPrix(99.99);
        $p1->setSousCategorie($sc1);
        $manager->persist($p1);

        
        $c2 = new Categorie();
        $c2->setNom("Piano");
        $c2->setImage("https://picsum.photos/300/200");
        $manager->persist($c2);
        
        $c3 = new Categorie();
        $c3->setNom("Batteries");
        $c3->setImage("https://picsum.photos/300/200");
        $manager->persist($c3);
        

        $manager->flush();
    }
}
