<?php

namespace App\Controller\Admin;

use App\Entity\InfoNumber;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InfoNumberCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InfoNumber::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
