<?php

namespace App\Controller\Admin;

use App\Entity\Director;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DirectorCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Director::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('first_name', 'Prénom'),
            TextField::new('last_name', 'Nom'),
            // Autres champs comme nécessaires
        ];
    }
    
}
