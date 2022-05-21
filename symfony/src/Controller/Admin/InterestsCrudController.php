<?php

namespace App\Controller\Admin;

use App\Entity\Interests;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class InterestsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Interests::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('linkIcon'),
        ];
    }
}
