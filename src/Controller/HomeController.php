<?php

namespace App\Controller;

use App\Entity\Tohirol;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */

    public function index(): Response
    {
       $query=$this->getDoctrine()->getRepository(Tohirol::class)->findAll();
       $even = array();
       $odd = array();
       $i=0;
       foreach($query as $data){
           $i++;
           if($i% 2 == 0){
               $even[] = $data;
           }
           else{
             $odd[] = $data;
           }
       }
        return $this->render('home/index.html.twig',[
            // 'controller_name' => 'HomeController',
            'even' => $even,
            'odd'=>$odd,
        ]);
    }
}
