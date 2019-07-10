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
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('home/about.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/project", name="project")
     */
    public function project()
    {
        return $this->render('home/project.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/pay", name="pay")
     */
    public function pay()
    {
        return $this->render('home/pay.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
