<?php

namespace App\Controller\Admin;

use App\Entity\Cars;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use phpDocumentor\Reflection\Types\Float_;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CarsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cars::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('imageFile')
                ->setFormType(VichImageType::class)
                ->hideOnIndex(),
            ImageField::new('image')
                ->setBasePath('/assets/img/')
                ->onlyOnIndex(),
            TextField::new('registrationNumber', 'Numéro d\'immatriculation'),
            AssociationField::new('brands', 'Marques'),
            AssociationField::new('fleets', 'Flotte'),
            AssociationField::new('gears', 'Boîte de vitesse'),
            AssociationField::new('seats', 'Nombre de places'),
            BooleanField::new('availability', 'Disponibilité'),
            MoneyField::new('price', 'prix')->setCurrency('EUR'),
            AssociationField::new('engine', 'Moteur'),


        ];
    }
}
