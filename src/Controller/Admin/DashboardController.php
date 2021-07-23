<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Cars;
use App\Entity\Rental;
use App\Entity\Brands;
use App\Entity\Engines;
use App\Entity\Gears;
use App\Entity\Fleet;
use App\Entity\Seats;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;




class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('RentCar');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::section('Utilisateurs');
        yield MenuItem::linkToCrud('Liste', 'fas fa-users', User::class);
        yield MenuItem::linkToCrud('Ajout', 'fas fa-user-plus', User::class)->setAction('new');

        yield MenuItem::section('Marques');
        yield MenuItem::linkToCrud('Liste', 'fas fa-truck-loading', brands::class);
        yield MenuItem::linkToCrud('Ajout', 'fas fa-user-plus', brands::class)->setAction('new');

        yield MenuItem::section('Boîte de vitesse');
        yield MenuItem::linkToCrud('Liste', 'fas fa-truck-loading', Gears::class);
        yield MenuItem::linkToCrud('Ajout', 'fas fa-user-plus', Gears::class)->setAction('new');


        yield MenuItem::section('Moteur');
        yield MenuItem::linkToCrud('Liste', 'fas fa-truck-loading', Engines::class);
        yield MenuItem::linkToCrud('Ajout', 'fas fa-user-plus', Engines::class)->setAction('new');


        yield MenuItem::section('Flotte');
        yield MenuItem::linkToCrud('Liste', 'fas fa-truck-loading', Fleet::class);
        yield MenuItem::linkToCrud('Ajout', 'fas fa-user-plus', Fleet::class)->setAction('new');


        yield MenuItem::section('Nombre de place');
        yield MenuItem::linkToCrud('Liste', 'fas fa-truck-loading', Seats::class);
        yield MenuItem::linkToCrud('Ajout', 'fas fa-user-plus', Seats::class)->setAction('new');

        yield MenuItem::section('Voitures');
        yield MenuItem::linkToCrud('Liste', 'fas fa-car', Cars::class);
        yield MenuItem::linkToCrud('Ajout', 'fas fa-user-plus', Cars::class)->setAction('new');

        yield MenuItem::section('Location : Rental');
        yield MenuItem::linkToCrud('Liste', 'fas fa-truck-loading', Rental::class);
        yield MenuItem::linkToCrud('Ajout', 'fas fa-user-plus', Rental::class)->setAction('new');
        // yield MenuItem::linkToCrud('Conferences', 'fa fa-map-marker', Conference::class);
        //yield MenuItem::linkToCrud('Comments', 'fa fa-comments', Comment::class);
        // yield MenuItem::linkToCrud('The Label', 'icon class', EntityClass::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        yield MenuItem::section('Déconnexion');
        yield MenuItem::linkToLogout('Déconnexion', 'fa fa-sign-out-alt');
    }
}
