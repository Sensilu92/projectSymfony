<?php

namespace Suiviprojet\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FacturationDevisController extends Controller {
    
    public function consultdevisAction(){
        return $this->render('ClientBundle:Client:accesDevisVue.html.twig', array());
    }

}

?>
