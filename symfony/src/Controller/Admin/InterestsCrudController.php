<?php

namespace App\Controller\Admin;

use App\Entity\Interests;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InterestsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Interests::class;
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
