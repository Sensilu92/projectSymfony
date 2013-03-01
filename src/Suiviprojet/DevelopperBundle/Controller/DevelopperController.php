<?php

namespace suiviProjet\DevelopperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Suiviprojet\AdministrateurBundle\Entity\Notice;
use Suiviprojet\AdministrateurBundle\Entity\CraJournalier;
use Suiviprojet\AdministrateurBundle\Entity\CraHebdomadaire;

class DevelopperController extends Controller {
    
    public function afficheCraHebdomadaireVueAction(){
        
        if($this->getRequest()->getSession()->get('identifiant') != ''){
            
            $request = $this->getRequest();
            $nouveau=$request->get('nouveau');
            $projet=$this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findAll();
            $developpeurs=$this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Developper")->findAll();
       
            //Si on clique pour créer un nouveau cra
            if($nouveau){
                if($request->get('dateD') == '' || $request->get('dateF') == '' || $request->get('dev') == ''){
                   return $this->render('suiviProjetDevelopperBundle:Developper:craHebdomadaire.html.twig',
                                 array('message'=>'Sélectionner la date de début, de fin (lundi à vendredi) et le développeur', 'developpeurs'=>$developpeurs));
               } else {
                   
                   $craH = new CraHebdomadaire();
                   $craH->setDateDebut(new \DateTime($request->get('dateD')));
                   $craH->setDateFin(new \DateTime($request->get('dateF')));
                   $dev=$this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Developper")->findOneBy(array('nom'=>$request->get('dev')));
                   $craH->addDevelopperdevelopper($dev);
                   
                   //On crée les crajournalier pour avoir la 
                   $tabCraJ = array();
                   for($index=0; $index<5; $index++){
                       
                       //Incrémenter la date
//                       var_dump($request->get('dateD'));
//                      $date = strtotime("+".$index." day", strtotime($request->get('dateD')));
//                      
                      //$listDate[] = $date;
                       //var_dump($t);
                       
                        $cra = new CraJournalier();
                        $cra->setDate( new \DateTime($request->get('dateD')));
                        $cra->setProjet("");
                        $cra->setClient("");
                        $cra->setTache("");
                        $cra->setStatut("");
                        $cra->setCommentaire("");
                        $tabCraJ[] = $cra;
                   }
                    for ($i = 0; $i < count($tabCraJ); $i++){
                        $craH->addCraJournaliercraJournalier($tabCraJ[$i]);
                    } 
                      for ($i = 0; $i < count($tabCraJ); $i++){
                        $this->getDoctrine()->getManager()->persist($tabCraJ[$i]);
                    }           
                   $this->getDoctrine()->getManager()->persist($craH);
                   
                   $this->getDoctrine()->getManager()->flush();
                   $cra=$this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:CraHebdomadaire")->findAll();
                   
                    return $this->render('suiviProjetDevelopperBundle:Developper:craHebdomadaire.html.twig',
                                 array('projet'=>$projet, 'cra'=>$cra, 'developpeurs'=>$developpeurs));
               }
            
            } else {
            
                //Affichage de tous les cra hebdo
                $cra=$this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:CraHebdomadaire")->findAll();
                return $this->render('suiviProjetDevelopperBundle:Developper:craHebdomadaire.html.twig', array('projet'=>$projet, 'cra'=>$cra, 'developpeurs'=>$developpeurs));
            } 
            
        } else {
            return $this->redirect($this->generateUrl('suiviprojet_administrateur_connexion'));
        }
    }
    
    public function afficheCraIndividuelVueAction(){
       
        if($this->getRequest()->getSession()->get('identifiant') != ''){
         
            $request = $this->getRequest();
            $statut = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:StatutSprint")->findAll();
            $tache = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:UserStorie")->findAll();
            $client = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Client")->findAll();
            $projet = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Projet")->findAll();
            $craHebdo = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:CraHebdomadaire")->findBy(array('idcraHebdomadaire'=>$request->get('idcraHebdomadaire')));
           
            $craJournalier = array();
            
            //Si on a cliqué sur un cra hebdomadaire
            if($request->get('idcraHebdomadaire') != NULL){
        
                $allCraJournalier =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:CraJournalier")->findAll();
                
                 foreach ($allCraJournalier as $value) {
                     
                     foreach ($value->getCraHebdomadairecraHebdomadaire() as $v){;
                      
                        if($v->getIdcraHebdomadaire() == $this->getRequest()->get('idcraHebdomadaire')){
                            
                            $craJournalier[]=$value;
                        }
                    }
                 }
                 if($request->get('enregistrer')){
                     
                      $tabCra = array();
                      
                      for ($index = 0; $index < 5; $index++) {
                
                        if($request->get('ajouter'.$index)){
                            
                            if($request->get('projet'.$index) != '' && $request->get('client'.$index) != '' &&
                            $request->get('tache'.$index) != '' && $request->get('statut'.$index) != '' && $request->get('commentaire'.$index)){
                        
                                //On regarde si le cra existe déja sinon on le crée
                                if(empty($craJournalier) || !(isset($craJournalier[$index]))){
                                    
                                    $cra = new CraJournalier();
                                } else {
                                    $cra = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:CraJournalier")->findOneBy(array('idcraJournalier'=>$craJournalier[$index]->getIdcraJournalier()));
                                } 
                                $cra->setDate(new \DateTime($request->get('date'.$index)));
                                $cra->setProjet($request->get('projet'.$index));
                                $cra->setClient($request->get('client'.$index));
                                $cra->setTache($request->get('tache'.$index));
                                $cra->setStatut($request->get('statut'.$index));
                                $cra->setCommentaire($request->get('commentaire'.$index));
                                $cra->addCraHebdomadairecraHebdomadaire($craHebdo[0]);
                                $tabCra[] = $cra;
                                
                            } else {
                                return $this->render('suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig',
                                    array('message'=>"Tous les élément de la ligne doivent être renseigné"));
                            }
                        }
                    }
                    for ($i = 0; $i < count($tabCra); $i++){
                        $this->getDoctrine()->getManager()->persist($tabCra[$i]);
                    } 
                    $this->getDoctrine()->getManager()->flush();
                    
                    //return $this->redirect($this->generateUrl('suivi_projet_developper_cra'));
                    $listDate = array();
                    
                    for($index=0; $index<5; $index++){
                        
                        $date = strtotime("+".$index." day", $craHebdo[0]->getDateDebut()->format('dmY'));
                        $listDate[] = $date;
                   }
                   
                    return $this->render('suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig',
                                    array('projet'=>$projet, 'statut'=>$statut, 'client'=>$client, 'tache'=>$tache, 'listDate'=>$listDate, 'craJournalier'=>$craJournalier));
                    
                 } else {
                    $listDate = array();
                    
                    for($index=0; $index<5; $index++){
                        
                        $date = strtotime("+".$index." day", $craHebdo[0]->getDateDebut()->format('dmY'));
                        $listDate[] = $date;
                   }
                    return $this->render('suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig',
                                    array('projet'=>$projet, 'statut'=>$statut, 'client'=>$client, 'tache'=>$tache, 'listDate'=>$listDate, 'craJournalier'=>$craJournalier));
                }    
            }
        } else {
            return $this->redirect($this->generateUrl('suiviprojet_administrateur_connexion'));
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
                $this->getDoctrine()->getManager()->flush();
                
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
