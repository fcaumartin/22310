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

        $sc2 = new SousCategorie();
        $sc2->setNom("Guitares Acoustiques");
        $sc2->setImage("https://picsum.photos/300/200");
        //$sc2->setCategorie($c1);
        $c1->addSousCategory($sc2);
        $manager->persist($sc2);

        $sc3 = new SousCategorie();
        $sc3->setNom("Basses Electriques");
        $sc3->setImage("https://picsum.photos/300/200");
        //$sc3->setCategorie($c1);
        $c1->addSousCategory($sc3);
        $manager->persist($sc3);

        $sc4 = new SousCategorie();
        $sc4->setNom("Basses acoustiques");
        $sc4->setImage("https://picsum.photos/300/200");
        //$sc4->setCategorie($c1);
        $c1->addSousCategory($sc4);
        $manager->persist($sc4);

        $sc5 = new SousCategorie();
        $sc5->setNom("55555555");
        $sc5->setImage("https://picsum.photos/300/200");
        //$sc5->setCategorie($c1);
        $c1->addSousCategory($sc5);
        $manager->persist($sc5);

        $p1 = new Produit();
        $p1->setLibelle("Guitare qui joue vite...");
        $p1->setDescription("et fort...");
        $p1->setImage("https://picsum.photos/300/200");
        $p1->setPrix(99.99);
        $p1->setSousCategorie($sc1);
        $manager->persist($p1);

        $p2 = new Produit();
        $p2->setLibelle("Guitare2 qui joue vite...");
        $p2->setDescription("et fort...");
        $p2->setImage("https://picsum.photos/300/200");
        $p2->setPrix(99.99);
        $p2->setSousCategorie($sc1);
        $manager->persist($p2);

        $p3 = new Produit();
        $p3->setLibelle("Guitare3 qui joue vite...");
        $p3->setDescription("et fort...");
        $p3->setImage("https://picsum.photos/300/200");
        $p3->setPrix(99.99);
        $p3->setSousCategorie($sc1);
        $manager->persist($p3);

        $p4 = new Produit();
        $p4->setLibelle("Guitare qui joue vite...");
        $p4->setDescription("et fort...");
        $p4->setImage("https://picsum.photos/300/200");
        $p4->setPrix(99.99);
        $p4->setSousCategorie($sc1);
        $manager->persist($p4);
        
        $c2 = new Categorie();
        $c2->setNom("Piano");
        $c2->setImage("https://picsum.photos/300/200");
        $manager->persist($c2);
        
        $c3 = new Categorie();
        $c3->setNom("Batteries");
        $c3->setImage("https://picsum.photos/300/200");
        $manager->persist($c3);

        $c4 = new Categorie();
        $c4->setNom("444");
        $c4->setImage("https://picsum.photos/300/200");
        $manager->persist($c4);

        $c5 = new Categorie();
        $c5->setNom("555");
        $c5->setImage("https://picsum.photos/300/200");
        $manager->persist($c5);

        $c6 = new Categorie();
        $c6->setNom("666");
        $c6->setImage("https://picsum.photos/300/200");
        $manager->persist($c6);

        $c7 = new Categorie();
        $c7->setNom("777");
        $c7->setImage("https://picsum.photos/300/200");
        $manager->persist($c7);
        

        $manager->flush();
    }
}
