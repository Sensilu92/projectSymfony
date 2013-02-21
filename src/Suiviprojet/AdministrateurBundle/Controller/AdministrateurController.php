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
    
}

?>

