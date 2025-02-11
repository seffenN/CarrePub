<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
 /**
     * @Route("/service", name="service")
     */
    public function service()
    {
        return $this->render('home/service.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
