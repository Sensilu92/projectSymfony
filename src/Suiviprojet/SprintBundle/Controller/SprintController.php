<?php

namespace Suiviprojet\SprintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SprintController extends Controller {
    
    public function afficheTableauDeBordSprintVueAction(){
        //Selectionner tous les sprints en fonction d'un projet
        $nbUserStorie = 0;
        //$userStories = array();
        $request = $this->getRequest();
        $charger = $request->get('charger');
        $enregistrer = $request->get('enregistrer'); 
        $projet =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findAll();
        
        //Si c'est un client afficher juste les sprints lié à ses projets
        if($this->getRequest()->getSession()->get('role') == 'user'){
            
            $projet = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findBy(array('clientclient' => $this->getRequest()->getSession()->get('id')));
    
        } else {
            
        }
        
        //$projet =  $this->getDoctrine()->getRepository("blacklogProductBundle:Projet")->findAll();
        $sprint =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Sprint")->findAll();

        //Si on clique pour charger un autre projet
        if($charger){ //if (isset($charger))

            $projetTmp =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findBy(array('nom'=>$request->get('projet')));
            $sprintTmp =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Sprint")->findBy(array('idsprint'=>$request->get('sprint')));
            $userStoryTmp = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->findBy(array('idprojet'=>$projetTmp[0]->getIdprojet())); 

//            $tableauSprint = array();
//            foreach ($userStoryTmp as $value) { //Récupère les users storie
//
//                foreach ($value->getSprintsprint() as $v) {
//                   // var_dump($v);
//                    if($v->getIdsprint() == $sprintTmp[0]->getIdsprint()){
//                        $tableauSprint[] = $v;
//                        
////                        foreach($v->getUserStorieUserStorie() as $t){
////                            var_dump($t->getFonctionnalite());
////                        }
//                        
//                    }
//                }
//            }
//            
            //$userStories = array();
            foreach ($sprintTmp as $value) { 

                foreach ($value->getUserStorieUserStorie() as $userStory) {
                    $userStories[] = $userStory;
                }
            }
            $nbUserStorie = count($userStories);

          return $this->render('SprintBundle:Sprint:tableauDeBordSprintVue.html.twig', array('projet' => $projet, 'sprint' => $sprint, 'userStories' => $userStories));  //'sprintTab' => $tableauSprint[0]
       
          
       } else if($enregistrer){ //if (isset($charger))

            $projetTmp =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findBy(array('nom'=>$request->get('projet')));
            
            // Modification des statuts des user stories après validation par le client
          // $userStories = $this->getDoctrine()->getRepository('SuiviprojetAdministrateurBundle:UserStorie')->findBy(array('idprojet'=>$projetTmp[0]->getIdprojet()));
            $allStatut = $this->getDoctrine()->getRepository('SuiviprojetAdministrateurBundle:Statut')->findAll();
            $sprintTmp =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Sprint")->findBy(array('idsprint'=>$request->get('sprint')));
            $userStoryTmp = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->findBy(array('idprojet'=>$projetTmp[0]->getIdprojet())); 

//            $tableauSprint = array();
//            foreach ($userStoryTmp as $value) { //Récupère les users storie
//
//                foreach ($value->getSprintsprint() as $v) {
//                   // var_dump($v);
//                    if($v->getIdsprint() == $sprintTmp[0]->getIdsprint()){
//                        $tableauSprint[] = $v;
//                        
////                        foreach($v->getUserStorieUserStorie() as $t){
////                            var_dump($t->getFonctionnalite());
////                        }
//                        
//                    }
//                }
//            }
//            
            //$userStories = array();
            foreach ($sprintTmp as $value) { 

                foreach ($value->getUserStorieUserStorie() as $userStory) {
                    $userStories[] = $userStory;
                }
            }
            $nbUserStorie = count($userStories);
            
            for ($index = 0; $index < count($userStories); $index++) {
                $u1 = $this->getDoctrine()->getRepository('SuiviprojetAdministrateurBundle:UserStorie')->findBy(array('idUserStorie'=>$userStories[$index]->getIdUserStorie()));
              $u=$u1[0];
   
                var_dump($request->get('valider'.$userStories[$index]->getIdUserStorie()));
                if($request->get('valider'.$userStories[$index]->getIdUserStorie())){
                  
                    $stat = $this->getDoctrine()->getRepository('SuiviprojetAdministrateurBundle:Statut')->findBy(array('intitule'=>'terminé'));
                $u->setStatutstatut($stat[0]);
              
           
                } else if($request->get('afaire'.$userStories[$index]->getIdUserStorie())){
                  
                    $stat = $this->getDoctrine()->getRepository('SuiviprojetAdministrateurBundle:Statut')->findBy(array('intitule'=>'en cours'));
                $u->setStatutstatut($stat[0]);
         
           
                }
                     $this->getDoctrine()->getManager()->persist($u);
                
            }
               $this->getDoctrine()->getManager()->flush();
//            foreach ($listUserStories as $userStory) {
//                
//                
//                //$stage = document.getElementById('à faire').checked;
//                //var_dump($stage);
//                $statut = $this->getDoctrine()->getRepository('SuiviprojetAdministrateurBundle:Statut')->findBy(array('intitule'=>'terminé'));
//               // $userStory->setStatutstatut($statut);
//                //$this->getDoctrine()->getManager()->persist($userStory);
//            }
//           // $this->getDoctrine()->getManager()->flush(); 
            var_dump($userStories);
            
            
            //$userStoryTmp = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->findBy(array('idprojet'=>$projetTmp[0]->getIdprojet())); 
return $this->render('SprintBundle:Sprint:tableauDeBordSprintVue.html.twig', array('projet' => $projet, 'sprint' => $sprint, 'userStories' => $userStories));  //'sprintTab' => $tableauSprint[0]
       }
       
        return $this->render('SprintBundle:Sprint:tableauDeBordSprintVue.html.twig', array('projet' => $projet, 'sprint' => $sprint));
    }
}

?>
