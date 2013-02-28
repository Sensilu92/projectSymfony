<?php

namespace suiviProjet\DevelopperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Suiviprojet\AdministrateurBundle\Entity\Notice;

class DevelopperController extends Controller {
    
    public function afficheCraHebdomadaireVueAction()
    {
        if($this->getRequest()->getSession()->get('identifiant') != ''){
            
            $request = $this->getRequest();
            $nouveau=$request->get('nouveau');
            $projet=$this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findAll();
       
            //Si on clique pour créer un nouveau cra
            if($nouveau){
                return $this->redirect($this->generateUrl('suivi_projet_developper_cra_individuel' ));
            
            } else {
            
                //Affichage de tous les cra hebdo
                $cra=$this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:CraHebdomadaire")->findAll();
                return $this->render('suiviProjetDevelopperBundle:Developper:craHebdomadaire.html.twig', array('projet'=>$projet, 'cra'=>$cra));
            } 
            
        }else
            return $this->redirect($this->generateUrl('suiviprojet_administrateur_connexion'));
    }
    
    public function afficheCraIndividuelVueAction(){
       
        if($this->getRequest()->getSession()->get('identifiant') != ''){
         
            $statut =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:StatutSprint")->findAll();
            $tache =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->findAll();
            $client =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Client")->findAll();
            $projet =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findAll();
            $craJournalier = array();
            
            //Si on a cliqué sur un cra hebdomadaire
            if($this->getRequest()->get('idcraHebdomadaire') != NULL){
                var_dump($this->getRequest()->get('idcraHebdomadaire'));
                  //Sélection de tous les projets
        
                $allCraJournalier =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:CraJournalier")->findAll();
                
                 foreach ($allCraJournalier as $value) {
                     
                     foreach ($value->getCraHebdomadairecraHebdomadaire() as $v){;
                      
                        if($v->getIdcraHebdomadaire() == $this->getRequest()->get('idcraHebdomadaire')){
                            
                            $craJournalier[]=$value;
                        }
                    }
                 }
                    
                 return $this->render('suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig',
                                 array('craJournalier'=>$craJournalier, 'statut'=>$statut, 'projet'=>$projet, 'tache'=>$tache, 'client'=>$client));
                 
           } else {
     
                $request = $this->getRequest();
                $creer = $request->get('creer');
                $modifier = $request->get('modifier');
                $generer = $request->get('generer');
        
                if($creer){
            
//            $tabCra = array();
//            for ($index = 0; $index < 4; $index++) {
//                
//               // if($request->get('projet'.$index) != ''){
//                    $cra = new \Suiviprojet\AdministrateurBundle\Entity\CraJournalier();
//                    $t = date("d/m/Y", strtotime($request->get('date'.$index)));
//                    $cra->setDate(strtotime($request->get('date'.$index)));
//                    $cra->setIntitule("");
//                    $cra->setClient($request->get('client'.$index));
//                    $cra->setTache($request->get('tache'.$index));
//                    $cra->setStatut($request->get('statut'.$index));
//                    $tabCra[] = $cra;
//               // }
//            }
//            for ($i = 0; $i <1; $i++){
//                $this->getDoctrine()->getManager()->persist($tabCra[$i]);
//            } 
//            
//            $this->getDoctrine()->getManager()->flush();
              } else if($modifier){
                        
           } else if( $generer){
               
               if($request->get('dateD') == '' || $request->get('dateF') == ''){
                   return $this->render('suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig',
                                 array('message'=>'Sélectionner une semaine'));
               } else
               $listDate = array();
                for($index=0; $index<5; $index++){
                $date = strtotime("+".$index." day", strtotime($request->get('dateD'))); 
                var_dump($date);
                $listDate[] = date("d/m/Y", $date);
                
                return $this->render('suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig',
                                 array('projet'=>$projet, 'client'=>$client,
                                       'tache'=>$tache, 'statut'=>$statut, 'listDate'=>$listDate));
                }
               
               
           }
        
//        $clients =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Client")->findAll();
//        $userStories =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->findAll();
//        $statuts =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:StatutSprint")->findAll();

        //Passer la date de début
        return $this->render('suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig',
                                 array('projet'=>$projet/*, 'date'=>$request->get('date')*/, 'client'=>$client,
                                       'tache'=>$tache, 'statut'=>$statut));
            
       /* return $this->render('suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig',
                                array('projet'=>$projet));*/
    
         }
    } else {
         return $this->render('SuiviprojetAdministrateurBundle:Admin:connexionVue.html.twig', array()); 
     }
    }
    
    public function afficheCreationNoticeVueAction(){
        
         if($this->getRequest()->getSession()->get('identifiant') != ''){

            $request = $this->getRequest();
            $enregistrer=$request->get('enregistrer');
            $charger=$request->get('charger');
            $projet=$this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findAll();

            //Si le client arrive a accéder à a la page malgrès la session, on le redirige vers la vue
            //de consultation de notice
//        if($this->getRequest()->getSession()->ge et('role') == 'user'){
//            
//            $projet = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findBy(array('clientclient' => $this->getRequest()->getSession()->get('id')));
//        }

       //Si on clique sur "enregistrer"
            if($enregistrer){
           
                //Ajout dans la db
                $notice = new Notice();
                $projetTmp = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findOneBy(array('nom'=>$request->get('projet')));
                $notice->setTitre($request->get('titre'));
                $notice->setFonctionnalite($request->get('fonctionnalite'));
//                $notice->setExplication(addslashes($request->get('detail')));
                $notice->setExplication($request->get('detail'));
                $notice->setProjetprojet($projetTmp);
                $this->getDoctrine()->getManager()->persist($notice);
               // $this->getDoctrine()->getManager()->flush();
                
                $allNotices = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Notice")->findAll();
                
                $notices = array();
                foreach ($allNotices as $value) {
                    if($value->getProjetprojet()->getIdprojet() == $projetTmp->getIdprojet()){
                        $notices[] = $value;
                    }
                }
             
                return $this->render('suiviProjetDevelopperBundle:Developper:creationNoticeVue.html.twig',
                                 array('projet' => $projet , 'currentProjet'=>$projetTmp, 'notices'=>$notices));

       
             //Si on clique sur Charger
            } else if($charger){
                $currentProjet = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findOneBy(array('nom'=>$request->get('projet'))); 
                $allNotices = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Notice")->findAll();
                
                $notices = array();
                foreach ($allNotices as $value) {
                    if($value->getProjetprojet()->getIdprojet() == $currentProjet->getIdprojet()){
                        $notices[] = $value;
                    }
                }
                return $this->render('suiviProjetDevelopperBundle:Developper:creationNoticeVue.html.twig',
                                 array('projet' => $projet, 'currentProject'=>$projet[0], 'notices'=>$notices));
            
            //Affichage du 1er projet par défaut avec ses notices
            } else {
                return $this->render('suiviProjetDevelopperBundle:Developper:creationNoticeVue.html.twig',
                                 array('projet' => $projet, 'currentProject'=>$projet[0]));
            }
        
        // S'il n'y a pas de session, redirection vers la page de connexion
        } else {
            return $this->redirect($this->generateUrl('suiviprojet_administrateur_connexion'));
        }
        
    }
    
    public function afficheConsultationNoticeVueAction($idNotice){
        
         if($this->getRequest()->getSession()->get('identifiant') != ''){

            $request = $this->getRequest();
            $charger=$request->get('charger');
            $projet=$this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findAll();
            $theNotice = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Notice")->find($idNotice);
            //Si on clique sur "charger"
            if($charger){
           
                //Récupération de toutes les notices disponible pour le projet
                $projetTmp = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findBy(array('nom'=>$request->get('projet')));
                $allNotices = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Notice")->findAll();
                
                if(!empty($theNotice)){
                    return $this->render('suiviProjetDevelopperBundle:Developper:consulteNoticeVue.html.twig',
                                 array('projet' => $projet ,'currentProjet'=>$projetTmp[0], 'notices'=>$allNotices, 'theNotice'=>$theNotice[0]));
                    
                } else {
                     return $this->render('suiviProjetDevelopperBundle:Developper:consulteNoticeVue.html.twig',
                                 array('projet' => $projet ,'currentProjet'=>$projetTmp[0], 'notices'=>$allNotices));
                }
       
            //Affichage du 1er projet par défaut avec ses user stories
            } else {
                if(!empty($theNotice)){
                    return $this->render('suiviProjetDevelopperBundle:Developper:consulteNoticeVue.html.twig',
                                 array('projet' => $projet, 'theNotice'=>$theNotice));
                    
                } else {
                     return $this->render('suiviProjetDevelopperBundle:Developper:consulteNoticeVue.html.twig',
                                 array('projet' => $projet));
                }
                
            }
        
        // S'il n'y a pas de session, redirection vers la page de connexion
        } else {
            return $this->redirect($this->generateUrl('suiviprojet_administrateur_connexion'));
        }
    }
    
}
