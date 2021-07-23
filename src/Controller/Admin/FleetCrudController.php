<?php

namespace App\Controller\Admin;

use App\Entity\Fleet;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FleetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Fleet::class;
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