<?php

namespace App\Controller;

use App\Entity\Cars;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class CarsController extends AbstractController
{
    /**
     * @Route("/cars", name="cars")
     */
    public function index(): Response
    {


        // on appelle la liste de tous les cars
        $cars = $this->getDoctrine()->getRepository(Cars::class)->findAll();



        return $this->render('cars/index.html.twig', [
            'cars' => $cars,
        ]);
    }
}
