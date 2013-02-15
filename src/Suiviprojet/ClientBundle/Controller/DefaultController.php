<?php

namespace Suiviprojet\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ClientBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function testAction()
    {
        return $this->render('ClientBundle:Default:accesDevisVue.html.twig', array());
    }
}
