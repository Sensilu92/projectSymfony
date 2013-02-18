<?php

namespace Suiviprojet\BlacklogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of BlacklogProductController
 *
 * @author admin
 */
class BlacklogProductController extends Controller{
 
    public function testAction($name){
        return $this->render('blacklogProductBundle:Default:index.html.twig',array('name'=>$name));
    }
    
    public function selectAllAction(){
       
       // $projet =  $this->getDoctrine()->getRepository("blacklogProductBundle:Projet")->findAll();
        return $this->render('blacklogProductBundle:Blacklog:creationUserStories.html.twig', array(/*'projet' => $projet*/));
    }
    
    public function creationUserStoriesTechAction(){
       
   // $projet =  $this->getDoctrine()->getRepository("blacklogProductBundle:Projet")->findAll();
   // $statut = $this->getDoctrine()->getRepository("blacklogProductBundle:Statut")->findAll();
     
    return $this->render('blacklogProductBundle:Blacklog:creationUserStoriesTechnique.html.twig', array(/*'projet' => $projet*/));
    }
}

?>
