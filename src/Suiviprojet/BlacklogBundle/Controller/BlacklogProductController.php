<?php

namespace Suiviprojet\BlacklogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlacklogProductController extends Controller{
 
    public function afficheUserStoriesVueAction(){

        if($this->getRequest()->getSession()->get('identifiant') != ''){

            $request = $this->getRequest();
            $charger=$request->get('charger'); 
            $enregistrer=$request->get('enregistrer');
            $projet=$this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findAll();
        
        if($this->getRequest()->getSession()->get('role') == 'user'){
            
            $projet = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findBy(array('clientclient' => $this->getRequest()->getSession()->get('id')));
        }
        
        $priorite = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Priorite")->findAll();
      
        //Si on clique pour charger un autre projet
        if($charger){ 
            
            $projetTmp =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findBy(array('nom'=>$request->get('projet')));
            $userStories = $this->getDoctrine()->getRepository('Suiviprojet\AdministrateurBundle\Entity\UserStorie')->findBy(array('idprojet'=>$projetTmp));
            
            return $this->render('blacklogProductBundle:Blacklog:creationUserStories.html.twig',
                                 array('projet' => $projet ,'userStories'=>$userStories,'priorite'=>$priorite,'id' => $projetTmp));

       //Si on clique sur "enregistrer"
       } else if($enregistrer){
           
            //Ajout dans la db
            $userStory = new \Suiviprojet\AdministrateurBundle\Entity\UserStorie();
            $projetTmp1 = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findBy(array('nom'=>$request->get('projet')));
            $userStory->setIdprojet($projetTmp1[0]);
            $userStory->setFonctionnalite($request->get('fonction'));
            $userStory->setRole($request->get('role'));
            $userStory->setAction($request->get('action'));
            $userStory->setBut($request->get('but'));
            $prioriteTmp =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Priorite")->findBy(array('nom'=>$request->get('priorite')));
            $userStory->setPrioritepriorite($prioriteTmp[0]);
            //Créer un statut 'non assigné' par défaut pour statutbacklog et 'à faire' pour statut sprint
            $statutBacklog =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:StatutBacklog")->findBy(array('intitule'=>"non assigné"));
            $userStory->setStatutBacklogstatutBacklog($statutBacklog[0]);
            $statutSprint =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:StatutSprint")->findBy(array('intitule'=>"à faire"));
            $userStory->setStatutSprintstatutSprint($statutSprint[0]);
            $userStory->setPoints(0);
            
            $this->getDoctrine()->getManager()->persist($userStory);
            $this->getDoctrine()->getManager()->flush();
            
             $userStories = $this->getDoctrine()->getRepository('Suiviprojet\AdministrateurBundle\Entity\UserStorie')->findBy(array('idprojet'=>$projetTmp1));
             
            return $this->render('blacklogProductBundle:Blacklog:creationUserStories.html.twig',
                                 array('projet' => $projet ,'userStories'=>$userStories,'priorite'=>$priorite));

       
       //Affichage du 1er projet par défaut avec ses user stories
       } else {
            $userStories = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->findBy(array('idprojet' => $projet[0]->getIdProjet(1)));
            
            return $this->render('blacklogProductBundle:Blacklog:creationUserStories.html.twig',
                                 array('projet' => $projet ,'userStories'=>$userStories,'priorite'=>$priorite));
       }
        }else{
                    // redirige vers la page de visualisation du client nouvellement créé
        return $this->redirect($this->generateUrl('suiviprojet_administrateur_connexion'));
           // return $this->render('SuiviprojetAdministrateurBundle:Admin:connexionVue.html.twig', array());
        }
    }
    
    public function afficheUserStoriesTechniqueVueAction($idUserStorie){
       if($this->getRequest()->getSession()->get('identifiant') != ''){
        $request = $this->getRequest();
        $id=$request->get('ajoutDetailTechnique'); 
       
        if(isset ($id)){
         
            //Ajout dans la db
            $userStoryTech = new \Suiviprojet\AdministrateurBundle\Entity\UserStoriesTechnique();
            $userStory = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->find($idUserStorie);
            $userStoryTech->setUserStorieUserStorie($userStory);
            $userStoryTech->setDescriptionTechnique($request->get('description'));
            
            $this->getDoctrine()->getManager()->persist($userStoryTech);
            //Ajoute d'un coup tout les éléments qui ont été mis dans un persist
            $this->getDoctrine()->getManager()->flush();
        } 
        
         $userStoriesTechnique = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStoriesTechnique")->findBy(array('userStorieUserStorie' => $idUserStorie));
         
        return $this->render('blacklogProductBundle:Blacklog:creationUserStoriesTechnique.html.twig', 
                              array('userStoriesTechnique'=>$userStoriesTechnique,'idUserStory' => $idUserStorie));
     }else{
        // redirige vers la page de visualisation du client nouvellement créé
        return $this->redirect($this->generateUrl('suiviprojet_administrateur_connexion'));
           // return $this->render('SuiviprojetAdministrateurBundle:Admin:connexionVue.html.twig', array());
        }  
    }

}

?>
