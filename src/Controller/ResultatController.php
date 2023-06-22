<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request; 

class ResultatController extends AbstractController
{
    
    public function index(Request $request): Response
    {
        
        $value = 0 ; 
        $nombre_a = $request->get('nombre-a') ; 
        $nombre_b = $request->get('nombre-b') ; 
        $signe = $request->get('signe') ; 
        
        if (isset($signe)) {
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
        break ; 
        default : 
        $value ="Veuiller entrer une signe" ;
        }
    }

        return $this->render('resultat/index.html.twig', [ 'resultat'=>$value

        ]);
    }
}

