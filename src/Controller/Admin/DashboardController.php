<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Cars;
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
        return parent::index();
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

        yield MenuItem::section('Voitures');
        yield MenuItem::linkToCrud('Liste', 'fas fa-car', Cars::class);
        yield MenuItem::linkToCrud('Ajout', 'fas fa-car', Cars::class)->setAction('new');

        // yield MenuItem::linkToCrud('Conferences', 'fa fa-map-marker', Conference::class);
        //yield MenuItem::linkToCrud('Comments', 'fa fa-comments', Comment::class);
        // yield MenuItem::linkToCrud('The Label', 'icon class', EntityClass::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
