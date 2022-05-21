<?php

namespace App\Controller\Admin;

use App\Entity\Nav;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class NavCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Nav::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('classCss'),
            TextField::new('link'),
        ];
    }
}
