<?php

namespace Suiviprojet\SprintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SprintBundle:Default:index.html.twig', array('name' => $name));
    }
}
