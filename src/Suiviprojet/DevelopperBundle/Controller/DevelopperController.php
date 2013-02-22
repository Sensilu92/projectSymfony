<?php

namespace suiviProjet\DevelopperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('suiviProjetDevelopperBundle:Default:index.html.twig', array('name' => $name));
    }
}
