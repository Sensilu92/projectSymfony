<?php

namespace Suiviprojet\AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdministrateurController extends Controller {

    public function creationProjetAction(){
        return $this->render('SuiviprojetAdministrateurBundle:Admin:creationProjet.html.twig', array());
    }
    
    public function creationCompteClientAction(){
        
       // $clients =  $this->getDoctrine()->getRepository("SuiviprojetAdministrateurBundle:Client")->findAll();
        //return $this->render('SuiviprojetAdministrateurBundle:Admin:creationCompteClient.html.twig', array('clients'=>$clients));
        
        $clients = new \Suiviprojet\AdministrateurBundle\Entity\Client();
      
        
        // récupération la requête
        $request = $this->get('request');
        // vérifie qu'elle est de type POST
       
        if ($request->getMethod() == 'POST') {
//             
            // la variable $client contient les valeurs entrées dans le formulaire 

           $client->setNomContact($request->get('nomContact'));
           $client->setSociete($request->get('societe'));
           $client->setPrenomContact($request->get('prenomContact'));
           $client->setNomContact($request->get('telephoneContact'));
           $client->setIdentifiantconnection($request->get('Identifiantconnection'));
           $client->setPasswordconnection($request->get('Passwordconnection'));
           
           var_dump($client);
            
                // On l'enregistre notre objet $client dans la base de données
                $entityManager = $this->getDoctrine()->getEntityManager();
                $entityManager->persist($client);
                $entityManager->flush();

                // redirige vers la page de visualisation du client nouvellement créé
              //  return $this->redirect($this->generateUrl('client_succes'));
            }
        
       

        return $this->render('SuiviprojetAdministrateurBundle:Admin:creationCompteClient.html.twig', array()
                );
    

    }
    
}

?>

