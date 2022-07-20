<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $siteVitrine = new Produit();
        $siteVitrine->setNom('Site vitrine');
        $siteVitrine->setDescription('Site vitrine pour un site vitrine');
        $siteVitrine->setDescriptionUne('Site vitrine pour un site vitrine');
        $siteVitrine->setDescriptionDeux('Site vitrine pour un site vitrine');
        $siteVitrine->setDescriptionTrois('Site vitrine pour un site vitrine');
        $siteVitrine->setDescriptionQuatre('Site vitrine pour un site vitrine');
        $siteVitrine->setDescriptionCinq('Site vitrine pour un site vitrine');
        $siteVitrine->setDescriptionSix('Site vitrine pour un site vitrine');
        $siteVitrine->setDescriptionSept('Site vitrine pour un site vitrine');
        $siteVitrine->setDescriptionHuit('Site vitrine pour un site vitrine');
        $siteVitrine->setPrix('100');
        $manager->persist($siteVitrine);

        $manager->flush();
    }
}
