<?php

namespace App\Controller\Admin;

use App\Entity\Gears;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class GearsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Gears::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('gear', 'Boîte de vitesse'),

        ];
    }
}
