<?php

namespace suiviProjet\DevelopperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DevelopperController extends Controller {
    
    public function afficheCraVueAction()
    {
        if($this->getRequest()->getSession()->get('identifiant') != ''){
        $request = $this->getRequest();
        $nouveau=$request->get('nouveau'); 
        $projet=$this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findAll();
      
        //Si on clique pour créer un nouveau cra
        if($nouveau){
            
            $clients =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Client")->findAll();
            $userStories =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->findAll();
            $statuts =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Statut")->findAll();

            //Passer la date de début
            
            return $this->render('suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig',
                                 array('projet'=>$projet/*, 'date'=>$request->get('date')*/, 'clients'=>$clients,
                                       'userStories'=>$userStories, 'statuts'=>$statuts));
        } else {
            
            //Affichage de tous les cra individuel
            $cra=$this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:CraHebdomadaire")->findAll();
            return $this->render('suiviProjetDevelopperBundle:Developper:cra.html.twig', array('projet'=>$projet, 'cra'=>$cra));
        }
    }
        else
        return $this->render('SuiviprojetAdministrateurBundle:Admin:connexionVue.html.twig', array());
    
    }
    
     public function afficheCraIndividuelVueAction(){
         
     if($this->getRequest()->getSession()->get('identifiant') != ''){
       //Sélection de tous les projets
        $projet =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findAll();

        $request = $this->getRequest();
        $enregistrer = $request->get('enregistrer');
        if($enregistrer){
            
            $tabCra = array();
            for ($index = 0; $index < 4; $index++) {
                
                if($request->get('projet'.$index) != ''){
                    $cra = new \Suiviprojet\AdministrateurBundle\Entity\CraHebdomadaire();
                    $t = date("d/m/Y", strtotime($request->get('date'.$index)));
                    var_dump(date("Y/m/d", strtotime($request->get('date'.$index))));
                    $cra->setDate(strtotime($request->get('date'.$index)));
                    $cra->setIntitule("");
                    $cra->setClient($request->get('client'.$index));
                    $cra->setTache($request->get('tache'.$index));
                    $cra->setStatut($request->get('statut'.$index));
                    $tabCra[] = $cra;
                }
            }
//            for ($i = 0; $i <1; $i++){
//                $this->getDoctrine()->getManager()->persist($tabCra[$i]);
//            } 
//            
//            $this->getDoctrine()->getManager()->flush();
        }
        
        $clients =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Client")->findAll();
        $userStories =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->findAll();
        $statuts =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Statut")->findAll();

        //Passer la date de début
        return $this->render('suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig',
                                 array('projet'=>$projet/*, 'date'=>$request->get('date')*/, 'clients'=>$clients,
                                       'userStories'=>$userStories, 'statuts'=>$statuts));
            
       /* return $this->render('suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig',
                                array('projet'=>$projet));*/
     } else {
         return $this->render('SuiviprojetAdministrateurBundle:Admin:connexionVue.html.twig', array()); 
     }
    }
}
