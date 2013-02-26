<?php

namespace Suiviprojet\AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Suiviprojet\AdministrateurBundle\Entity\Client;
use Suiviprojet\AdministrateurBundle\Form\ClientType;
use Suiviprojet\AdministrateurBundle\Entity\Projet;
use Suiviprojet\AdministrateurBundle\Form\ProjetType;

class AdministrateurController extends Controller {

    public function creationProjetAction() {
       
        $projet = new Projet();
        //creatForm() utilise le composant Form pour construire un formulaire à partir du ProjetType passé en argument
        $form = $this->createForm(new ProjetType, $projet);
        // récupération la requête
        $request = $this->get('request');
       
        // vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') { 
            
            $form->bind($request);

            if ($form->isvalid()) {

                //enregistrement de l'objet $Projet dans la base de données
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($projet);
                $entityManager->flush();
            }
        }
        return $this->render('SuiviprojetAdministrateurBundle:Admin:creationProjet.html.twig', array('form' => $form->createView(),
                ));
    }

    public function creationCompteClientAction() {

        $client = new Client();
        $form = $this->createForm(new ClientType, $client);
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            var_dump($client);
            $form->bind($request);
            if ($form->isvalid()) {

                
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

    public function afficheConnexionVueAction() {

        $request = $this->getRequest();
        $connexion = $request->get('connexion');


        //Si on clique pour charger un autre projet
        if ($connexion) {

            $client = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Client")->findBy(array('identifiantconnection' => $request->get('identifiant'), 'passwordconnection' => $request->get('password')));

            if (empty($client)) {

                $developpeur = $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Developper")->findBy(array('login' => $request->get('identifiant'), 'password' => $request->get('password')));

                if (!empty($developpeur)) {
                    $session = $this->get('request')->getSession();
                    $session->set('identifiant', $request->get('identifiant'));
                    $session->set('id', $developpeur[0]->getIddevelopper());

                    if($developpeur[0]->getRole() == 'admin'){
                        $session->set('role','admin');
                    } else {
                        $session->set('role','dev');
                    }
                }
            } else {
                $session = $this->get('request')->getSession();
                $session->set('identifiant', $request->get('identifiant'));
                $session->set('id', $client[0]->getIdclient());
                $session->set('role', 'user');
            }

            if (!empty($client) || !empty($developpeur)) {
                return $this->render('SuiviprojetAdministrateurBundle:Admin:accueilVue.html.twig', array());
            } else {
                echo 'Revoir les identifiants <br/><br/>';
            }
        }
        return $this->render('SuiviprojetAdministrateurBundle:Admin:connexionVue.html.twig', array());
    }
    
    public function afficheDeconnexionVueAction() {

        $session = $this->get('request')->getSession();
        $session->set('identifiant', '');
        $session->set('id', '');
        $session->set('role', '');
        
        // redirige vers la page de visualisation du client nouvellement créé
        return $this->redirect($this->generateUrl('suiviprojet_administrateur_connexion'));
        //return $this->render('SuiviprojetAdministrateurBundle:Admin:connexionVue.html.twig', array());
    }

}
?>

