<?php

namespace Suiviprojet\BlacklogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of BlacklogProductController
 *
 * @author admin
 */
class BlacklogProductController extends Controller{
    //put your code here
    public function testAction($name){
        return $this->render('blacklogProductBundle:Default:index.html.twig',array('name'=>$name));
    }
}

?>
