<?php

namespace App\Controller\Admin;

use App\Entity\About;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AboutCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return About::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
           
            TextField::new('job'),
            TextEditorField::new('saying'),
            TextField::new('birthday'),
            IntegerField::new('age'),
            IntegerField::new('phone'),
            TextField::new('city'),
            TextField::new('email'),
            TextField::new('freelance'),

        ];
    }
   
}
