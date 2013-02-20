<?php

namespace Suiviprojet\AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdministrateurController extends Controller {

    public function creationProjetAction(){
        return $this->render('SuiviprojetAdministrateurBundle:Admin:creationProjet.html.twig', array());
    }
    
    public function creationCompteClientAction(){
        
        $clients =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Client")->findAll();
        return $this->render('SuiviprojetAdministrateurBundle:Admin:creationCompteClient.html.twig', array('clients'=>$clients));
    }
    
}

?>

