<?php

namespace Suiviprojet\AdministrateurBundle\Controller;
//use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Suiviprojet\AdministrateurBundle\Entity\Client;
use Suiviprojet\AdministrateurBundle\Entity\Projet;


class AdministrateurController extends Controller {

    public function creationProjetAction(){
         $projet = new Projet();
 
        $form = $this->createFormBuilder($projet)
                ->add('nom', 'text')
                ->add('clientclient', 'entity',array('class'=>'SuiviprojetAdministrateurBundle:Client','property'=>'societe'))
                ->add('dateDebut', 'date')
                ->add('dateFin', 'date')
                ->getForm();
                
        var_dump($projet);

        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {

            // la variable $client contient les valeurs entrées dans le formulaire 
           
            $form->bind($request);
            if ($form->isvalid()) {

                // On l'enregistre notre objet $client dans la base de données
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($projet);
                $entityManager->flush();
            }
        }
        return $this->render('SuiviprojetAdministrateurBundle:Admin:creationProjet.html.twig', array('form' => $form->createView(),
                ));
    }
    
    public function creationCompteClientAction(){
        
     $client = new Client();
        //création du form builder via la méthode du controleur
        $form = $this->createFormBuilder($client)
                // ajout des champs qui seront disposé dans le formulaire
                ->add('societe', 'text')
                ->add('nomContact', 'text')
                ->add('prenomContact', 'text')
                ->add('telephoneContact', 'text')
                ->add('identifiantconnection', 'text')
                ->add('passwordconnection', 'password')
                ->getForm();
        // récupération la requête
        $request = $this->get('request');
        // vérifie qu'elle est de type POST

        if ($request->getMethod() == 'POST') {

            // la variable $client contient les valeurs entrées dans le formulaire 
            var_dump($client);
            $form->bind($request);
            if ($form->isvalid()) {

                // On l'enregistre notre objet $client dans la base de données
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($client);
                $entityManager->flush();

                // redirige vers la page de visualisation du client nouvellement créé
                //  return $this->redirect($this->generateUrl('client_succes'));
            }
        }


        return $this->render('SuiviprojetAdministrateurBundle:Admin:creationCompteClient.html.twig', array('form' => $form->createView(),
                ));

    }
    
    public function afficheConnexionVueAction(){
        
        $request = $this->getRequest();
        $connexion=$request->get('connexion'); 
        

        //Si on clique pour charger un autre projet
        if($connexion){ 
            
            $client =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Client")->findBy(array('identifiantconnection'=>$request->get('identifiant'),'passwordconnection'=>$request->get('password')));
       
            if(empty($client)){
                
                $developpeur =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Developper")->findBy(array('login'=>$request->get('identifiant'),'password'=>$request->get('password')));
            
                if(!empty($developpeur)){
                    $session = $this->get('request')->getSession();
                    $session->set('identifiant',$request->get('identifiant'));
                    $session->set('id',$developpeur[0]->getIddevelopper());
                    
//                    if($developpeur[0]->getRole() == 'admin'){
//                        $session->set('role','dev');
//                    } else {
//                        $session->set('role','admin');
//                    }
                }
                
            } else {
                $session = $this->get('request')->getSession();
                $session->set('identifiant',$request->get('identifiant'));
                $session->set('id',$client[0]->getIdclient());
                $session->set('role','user');
            }
            
            if(!empty($client) || !empty($developpeur)){
                return $this->render('SuiviprojetAdministrateurBundle:Admin:accueilVue.html.twig', array());
            } else{
                echo 'Revoir les identifiants <br/><br/>';
            }
            
        }
        return $this->render('SuiviprojetAdministrateurBundle:Admin:connexionVue.html.twig', array());
    }

    
}

?>

