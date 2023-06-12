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
    public function index(Request $request ): Response
    {
      
        $value = 0 ; 
        $nombre_a = $request->get('nombre-a') ; 
        $nombre_b = $request->get('nombre-b') ; 
        $signe = $request->get('signe') ; 
        
        switch ($signe) 
        { 
        case '+' :
        $value = $nombre_a + $nombre_b ;
        break ;
        case '-' : 
        $value = $nombre_a - $nombre_b ;
        break ; 
        case '/' :
        $value = $nombre_a / $nombre_b ; 
        break ;
        case '*':   
            $value = $nombre_a * $nombre_b ;  
        default : 
        $value ="Veuiller entrer une signe" ;     
     }   


        return $this->render('homepage/index.html.twig', [
            'value' => $value 
        ]);
    }
}
