<?php

namespace App\Controller;

use App\Entity\Tohirol;
use App\Form\TohirolType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */

    public function index(): Response
    {
        $data=$this->getDoctrine()->getRepository(Tohirol::class)->findAll();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
'list' =>$data

        ]);

    }

       /**
     * @Route("/create", name="create")
     */

      public function create(Request $request) {

$tohirol=new Tohirol();
$form =$this->createForm(TohirolType::class, $tohirol);
$form->handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {
    $em = $this->getDoctrine()->getManager();
    $em->persist($tohirol);
    $em->flush();
    $this->addFlash('notice', 'Амжилттай нэмэгдлээ ');

return $this->redirectToRoute('index');

}

return $this->render('index/create.html.twig', ['form' => $form->createView()]);

      }


/**
 * @Route("/update/ {id}", name="update")
 */
 public function update(Request $request, $id){
$tohirol=$this->getDoctrine()->getRepository(Tohirol::class)->find($id);
$form =$this->createForm(TohirolType::class,$tohirol);
$form->handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {
    $em = $this->getDoctrine()->getManager();
    $em->persist($tohirol);
    $em->flush();
    $this->addFlash('notice', 'Амжилттай засагдлаа ');
return $this->redirectToRoute('index');
 }

return $this->render('index/update.html.twig', ['form' => $form->createView()]);

 }

/**
 * @Route("/delete/ {id}", name="delete")
 */


 
 public function delete($id){
$data=$this->getDoctrine()->getRepository(Tohirol::class)->find($id);
$em = $this->getDoctrine()->getManager();
$em->remove($data);
$em->flush();
$this->addFlash('notice', 'Амжилттай устгалаа ');
return $this->redirectToRoute('index');
 }
}
