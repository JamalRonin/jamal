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
        $siteVitrine->setDescription('Site vitrine responsive');
        $siteVitrine->setDescriptionUne('backoffice est personnalisé');
        $siteVitrine->setDescriptionDeux('suivis durant 12 mois');
        $siteVitrine->setDescriptionTrois('évolutif');
        $siteVitrine->setDescriptionQuatre('documenter');
        $siteVitrine->setDescriptionCinq('Propriétaire complètement sur votre boutique');
        $siteVitrine->setDescriptionSix(' Notifications de prise de contact par mail');
        $siteVitrine->setDescriptionSept('réponse aux clients automatique');
        $siteVitrine->setPrix('149 € sur 12 mois');
        $siteVitrine->setClass('bx bxl-chrome');
        $manager->persist($siteVitrine);

        $siteEcommerce = new Produit();
        $siteEcommerce->setNom('Site e-commerces');
        $siteEcommerce->setDescription('Site e-commerces responsive');
        $siteEcommerce->setDescriptionUne('backoffice est personnalisé');
        $siteEcommerce->setDescriptionDeux('suivis durant 12 mois');
        $siteEcommerce->setDescriptionTrois('évolutif');
        $siteEcommerce->setDescriptionQuatre('documenter');
        $siteEcommerce->setDescriptionCinq('Propriétaire complètement sur votre boutique');
        $siteEcommerce->setDescriptionSix(' Notification de panier, notification de page abandonner et achat par mail. ');
        $siteEcommerce->setDescriptionSept('réponse aux clients automatique');
        $siteEcommerce->setPrix('339 € sur 12 mois');
        $siteEcommerce->setClass('bx bxs-store-alt');
        $manager->persist($siteEcommerce);

        $freelance = new Produit();
        $freelance->setNom('FreeLance');
        $freelance->setDescription('Mise à disposition de mes compétences à la journée');
        $freelance->setPrix('359 € Jours');
        $freelance->setClass('bx bxs-hourglass');
        $manager->persist($freelance);


        $manager->flush();
    }
}
