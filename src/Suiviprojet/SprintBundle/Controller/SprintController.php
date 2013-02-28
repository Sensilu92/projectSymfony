<?php

namespace Suiviprojet\SprintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Suiviprojet\AdministrateurBundle\Entity\Sprint;
use Suiviprojet\AdministrateurBundle\Entity\Equipe;

class SprintController extends Controller {
    
    public function afficheTableauDeBordSprintVueAction(){

        $request = $this->getRequest();
        $charger = $request->get('charger');
        $enregistrer = $request->get('enregistrer'); 
        
//        //Si c'est un client afficher juste les sprints lié à ses projets
//        if($this->getRequest()->getSession()->get('role') == 'user'){
//            $projet = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findBy(array('clientclient' => $this->getRequest()->getSession()->get('id')));
//        } else { 
//        }
        
        $sprint =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Sprint")->findAll();

        //Si on clique pour charger un autre sprint
        if($charger){ //if (isset($charger))

            $sprintTmp =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Sprint")->findBy(array('nom'=>$request->get('sprint')));
            $equipe =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Equipe")->findBy(array('idequipe'=>$sprintTmp[0]->getEquipeequipe()));
           
            $userStories = array();
            foreach ($sprintTmp as $value) { 
                foreach ($value->getUserStorieUserStorie() as $userStory) {
                    $userStories[] = $userStory;
                }
            }
            
            if( !empty($userStories)){
               $projet =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findBy(array('idprojet'=>$userStories[0]->getIdprojet()));
               return $this->render('SprintBundle:Sprint:tableauDeBordSprintVue.html.twig', array('projet' => $projet, 'sprint' => $sprint, 'userStories' => $userStories,
                                                                                                  'currentSprint' => $sprintTmp[0]->getNom(), 'listDev' => $equipe[0]->getDevelopperdevelopper()));
               
            } else{
              return $this->render('SprintBundle:Sprint:tableauDeBordSprintVue.html.twig', array('sprint' => $sprint, 'userStories' => $userStories, 'currentSprint' => $sprintTmp[0]->getNom()));
            }
          
        } else if($enregistrer){

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
       
        return $this->render('SprintBundle:Sprint:tableauDeBordSprintVue.html.twig', array('sprint' => $sprint));
    }
    
    public function afficheAssignationUserStoriesVueAction(){
        
        $request = $this->getRequest();
        $charger = $request->get('charger');
        $enregistrer = $request->get('valider'); 
        
//        //Si c'est un client afficher juste les sprints lié à ses projets
//        if($this->getRequest()->getSession()->get('role') == 'user'){
//            $projet = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findBy(array('clientclient' => $this->getRequest()->getSession()->get('id')));
//        } else { 
//        }
        
        $sprint =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Sprint")->findAll();
        $projet =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findAll();

        //Si on clique pour charger un autre projet
        if($charger){ //if (isset($charger))

            $sprintTmp =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Sprint")->findOneBy(array('nom'=>$request->get('sprint')));
            $equipe =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Equipe")->findBy(array('idequipe'=>$sprintTmp->getEquipeequipe()));
            $projetTmp =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findOneBy(array('nom'=>$request->get('projet')));
            $userStoriesTmp =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->findBy(array('idprojet'=>$projetTmp));
            
           //Sélection des userStories non assigné dans un projet
            $userStories = array();
            foreach ($userStoriesTmp as $userStory) { 
                if($userStory->getStatutBacklogstatutBacklog()->getIntitule() == 'non assigné'){
                    $userStories[] = $userStory;
                }
            }
            
            if( !empty($userStories)){
               return $this->render('SprintBundle:Sprint:assignationUserStoriesVue.html.twig', array('projet' => $projet, 'sprint' => $sprint, 'userStories' => $userStories,
                                                                                                  'currentSprint' => $sprintTmp->getNom(), 'currentProjet' => $projetTmp->getNom(), 'listDev' => $equipe[0]->getDevelopperdevelopper()));
               
            } else{
              return $this->render('SprintBundle:Sprint:assignationUserStoriesVue.html.twig', array('projet' => $projet, 'currentProjet' => $projetTmp[0]->getNom(), 'sprint' => $sprint, 'userStories' => $userStories, 'currentSprint' => $sprintTmp[0]->getNom()));
            }
          
        } else if($enregistrer){

            $projetTmp =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findOneBy(array('nom'=>$request->get('projet')));
            $userStoryTmp = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->findBy(array('idprojet'=>$projetTmp));
            $sprintTmp =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Sprint")->findOneBy(array('nom'=>$request->get('sprint')));
            
            for($index=0; $index<count($userStoryTmp); $index++){
                
                if($request->get('ajout'.$userStoryTmp[$index]->getIdUserStorie())){
                    
                    //Récupération de la user story dans la db pour modifier son statut
                    $userStory = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->findOneBy(array('idUserStorie'=>$userStoryTmp[$index]->getIdUserStorie())); 
                    $statB = $this->getDoctrine()->getRepository('SuiviprojetAdministrateurBundle:StatutBacklog')->findOneBy(array('intitule'=>'assigné'));
                    $statS = $this->getDoctrine()->getRepository('SuiviprojetAdministrateurBundle:StatutSprint')->findOneBy(array('intitule'=>'à faire'));
                    $userStory->setStatutSprintstatutSprint($statS);
                    $userStory->setStatutBacklogstatutBacklog($statB);
                    $userStory->addSprintsprint($sprintTmp);
                    
                    $equipe = $sprintTmp->getEquipeequipe();
                    foreach ($equipe->getDevelopperdevelopper() as $developper) {
                        
                        if($developper->getNom() == $request->get('dev'.$userStoryTmp[$index]->getIdUserStorie())){
                            $dev =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Developper")->findOneBy(array('nom'=>$developper->getNom()));
                            $userStory->addDevelopperdevelopper($dev);
                        }
                    }
                     $this->getDoctrine()->getManager()->persist($userStory);
                }
            }
            $this->getDoctrine()->getManager()->flush();
            
            //RECUPERER LES DEV
            $userStoriesTmp =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->findBy(array('idprojet'=>$projetTmp));
            
           //Sélection des userStories non assigné dans un projet
            $userStories = array();
            foreach ($userStoriesTmp as $userStory) { 
                if($userStory->getStatutBacklogstatutBacklog()->getIntitule() == 'non assigné'){
                    $userStories[] = $userStory;
                }
            }
            
            if( !empty($userStories)){
               return $this->render('SprintBundle:Sprint:assignationUserStoriesVue.html.twig', array('projet' => $projet, 'sprint' => $sprint, 'userStories' => $userStories,
                                                                                                  'currentSprint' => $sprintTmp->getNom(), 'currentProjet' => $projetTmp->getNom(), 'listDev' => $equipe->getDevelopperdevelopper()));
               
            } else{
              return $this->render('SprintBundle:Sprint:assignationUserStoriesVue.html.twig', array('projet' => $projet, 'currentProjet' => $projetTmp[0]->getNom(), 'sprint' => $sprint, 'userStories' => $userStories, 'currentSprint' => $sprintTmp[0]->getNom()));
            }
            //$userStoryTmp = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->findBy(array('idprojet'=>$projetTmp[0]->getIdprojet())); 
            //return $this->render('SprintBundle:Sprint:assignationUserStoriesVue.html.twig', array('projet' => $projet, 'sprint' => $sprint, 'userStories' => $userStoryTmp));  //'sprintTab' => $tableauSprint[0]
       }
       
        return $this->render('SprintBundle:Sprint:assignationUserStoriesVue.html.twig', array('sprint'=>$sprint, 'projet'=>$projet));
    }
    
    public function afficheCreationSprintVueAction(){
        
        if($this->getRequest()->getSession()->get('identifiant') != ''){
            
            $request = $this->getRequest();
            $creer = $request->get('creer');
            
            //Récupération de toute les équipes et développeur
             $equipes = $this->getDoctrine()->getRepository('SuiviprojetAdministrateurBundle:Equipe')->findAll();
             $developpeurs = $this->getDoctrine()->getRepository('SuiviprojetAdministrateurBundle:Developper')->findAll();
        
             if($creer){
                 //Si une équipe de la liste déroule est choisit on la récupère dans la db
                 //sinon on en crée une nouvelle
                 if($request->get('equipe') != ''){
                     //On récupère l'équipe qui est dans la db
                     $equipeTmp = $this->getDoctrine()->getRepository('SuiviprojetAdministrateurBundle:Equipe')->findBy(array('nom'=>$request->get('equipe')));
                     $equipe = $equipeTmp[0];
                     
                } else {
                    $equipe = new Equipe();
                    $equipe->setNom($request->get('nomEquipe'));
                    $equipe->setNbdifficulte($request->get('nbDifficulte'));
                    
                    for($index=0; $index<count($developpeurs); $index++){
                        
                        if($request->get('ajouter'.$developpeurs[$index]->getIddevelopper())){
                            
                            $equipe->addDevelopperdevelopper($developpeurs[$index]);
                        }
                    }
                    $this->getDoctrine()->getManager()->persist($equipe);
                 }
                 
                 //Création du sprint
                $sprint = new Sprint();
                $sprint->setNom($request->get('nom'));
                $sprint->setNbdifficultemax($request->get('nbDifficulte'));
                $sprint->setDatedebut(new \DateTime($request->get('dateD')));
                $sprint->setDatefin(new \DateTime($request->get('dateF')));
                $sprint->setEquipeequipe($equipe);
            
                $this->getDoctrine()->getManager()->persist($sprint);
                $this->getDoctrine()->getManager()->flush();
                
                $equipes = $this->getDoctrine()->getRepository('SuiviprojetAdministrateurBundle:Equipe')->findAll();
                return $this->render('SprintBundle:Sprint:creationSprintVue.html.twig', array('equipes'=>$equipes, 'developpeurs'=>$developpeurs));
            
             } else {
                return $this->render('SprintBundle:Sprint:creationSprintVue.html.twig', array('equipes'=>$equipes, 'developpeurs'=>$developpeurs));
             }
             
        } else {
            return $this->redirect($this->generateUrl('suiviprojet_administrateur_connexion'));
        }
    }
}

?>