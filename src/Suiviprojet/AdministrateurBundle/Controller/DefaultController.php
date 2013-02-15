<?php

namespace Suiviprojet\AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $client=  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Client")->findAll();
        return $this->render('SuiviprojetAdministrateurBundle:Default:index.html.twig', array('client' => $client));
    }
}
