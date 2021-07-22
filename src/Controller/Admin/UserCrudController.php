<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('ID')->hideOnForm(),
            TextField::new('lastName'),
            TextField::new('firstName'),
            DateField::new('birthDate'),
            TextField::new('email'),
            TextField::new('password'),
            TextField::new('phoneNumber'),
            TextField::new('Adress'),
            TextField::new('City'),
            TextField::new('zipCode'),
            TextField::new('country'),

        ];
    }
}
