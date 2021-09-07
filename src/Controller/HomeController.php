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
       $data=$this->getDoctrine()->getRepository(Tohirol::class)->findAll();
        return $this->render('home/index.html.twig',[
            // 'controller_name' => 'HomeController',
            'list' => $data

        ]);
    }

    
}
