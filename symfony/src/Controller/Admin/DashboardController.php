<?php

namespace App\Controller\Admin;

use App\Entity\About;
use App\Entity\InfoNumber;
use App\Entity\Interests;
use App\Entity\Nav;
use App\Entity\SocialLink;
use App\Entity\Team;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Symfony');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('About', 'fas fa-list', About::class);
        yield MenuItem::linkToCrud('InfoNumber', 'fas fa-list', InfoNumber::class);
        yield MenuItem::linkToCrud('Interests', 'fas fa-list' ,Interests::class);
        yield MenuItem::linkToCrud('Nav', 'fas fa-list', Nav::class);
        yield MenuItem::linkToCrud('Social', 'fas fa-list', SocialLink::class);
        yield MenuItem::linkToCrud('Team', 'fas fa-list', Team::class);


        
    }
}
