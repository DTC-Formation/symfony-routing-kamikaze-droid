<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request ; 

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * 
     * 
     */
    public function index(): Response {
     
    

        return $this->render('homepage/index.html.twig');
    }

}
