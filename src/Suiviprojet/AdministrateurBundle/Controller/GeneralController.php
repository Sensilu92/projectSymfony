<?php

namespace Suiviprojet\AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeneralController extends Controller {

    public function isConnectedAction($url) {
       
        if($this->getRequest()->getSession()->get('identifiant') != ''){
            return $this->generateUrl($url);
        } else {
            echo'test';
             return $this->generateUrl('suiviprojet_administrateur_connexion');
        }
        return $this->generateUrl('suiviprojet_administrateur_connexion');
    }
}
?>


