<?php

namespace Suiviprojet\SprintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SprintController extends Controller {
    
    public function afficheTableauDeBordSprintVueAction(){
        //Selectionner tous les sprints en fonction d'un projet
        $request = $this->getRequest();
        $charger = $request->get('charger'); 
        $projet =  $this->getDoctrine()->getRepository("blacklogProductBundle:Projet")->findAll();
        
        //Si c'est un client afficher juste les sprints lié à ses projets
        if($this->getRequest()->getSession()->get('role') == 'user'){
            
            $projet = $this->getDoctrine()->getRepository("blacklogProductBundle:Projet")->findBy(array('clientclient' => $this->getRequest()->getSession()->get('id')));
    
        } else {
            
        }
        
        //$projet =  $this->getDoctrine()->getRepository("blacklogProductBundle:Projet")->findAll();
        $sprint =  $this->getDoctrine()->getRepository("blacklogProductBundle:Sprint")->findAll();

        //Si on clique pour charger un autre projet
        if($charger){ //if (isset($charger))

            $projetTmp =  $this->getDoctrine()->getRepository("blacklogProductBundle:Projet")->findBy(array('nom'=>$request->get('projet')));
            $sprintTmp =  $this->getDoctrine()->getRepository("blacklogProductBundle:Sprint")->findBy(array('idsprint'=>$request->get('sprint')));
            $userStoryTmp = $this->getDoctrine()->getRepository("blacklogProductBundle:UserStorie")->findBy(array('idprojet'=>$projetTmp[0]->getIdprojet())); 

            $tableauSprint = array();
            foreach ($userStoryTmp as $value) { //Récupère les users storie

                foreach ($value->getSprintsprint() as $v) {
                   // var_dump($v);
                    if($v->getIdsprint() == $sprintTmp[0]->getIdsprint()){
                        $tableauSprint[] = $v;
                    }
                }
            }

            $tableauSprint3 = array();
             foreach ($tableauSprint as $value) {
                 //if($value->getIdsprint() == 1){
                 $tableauSprint3[] = $value->getUserStorieUserStorie();
                 //var_dump($tableauSprint3);
                    // echo $value;
                //}
                
            }
       
          return $this->render('SprintBundle:Sprint:tableauDeBordSprintVue.html.twig', array('projet' => $projet, 'sprint' => $sprint, 'sprintTab' => $tableauSprint[0]));  
       }
        return $this->render('SprintBundle:Sprint:tableauDeBordSprintVue.html.twig', array('projet' => $projet, 'sprint' => $sprint));
    }
}

?>
