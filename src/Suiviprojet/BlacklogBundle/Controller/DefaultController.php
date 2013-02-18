<?php

namespace Suiviprojet\BlacklogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('blacklogProductBundle:Default:index.html.twig', array('name' => $name));
    }
}
