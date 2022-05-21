<?php

namespace App\Controller\Admin;

use App\Entity\InfoNumber;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class InfoNumberCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InfoNumber::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            IntegerField::new('number'),
            TextField::new('linkIcon'),
        ];
    }
    
}
