<?php

namespace App\Controller\Admin;

use App\Entity\Engines;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EnginesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Engines::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('engine', 'Moteur'),

        ];
    }
}
