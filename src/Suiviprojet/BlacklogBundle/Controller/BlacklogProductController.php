<?php

namespace Suiviprojet\BlacklogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of BlacklogProductController
 *
 * @author admin
 */
class BlacklogProductController extends Controller{
 
    public function testAction($name){
        return $this->render('blacklogProductBundle:Default:index.html.twig',array('name'=>$name));
    }
    
    public function afficheUserStoriesVueAction(){

        $request = $this->getRequest();
        $id=$request->get('charger'); 
        $projet =  $this->getDoctrine()->getRepository("blacklogProductBundle:Projet")->findAll();
        $priorite = $this->getDoctrine()->getRepository("blacklogProductBundle:Priorite")->findAll();
        
        //Si on clique pour charger un autre projet
        if(isset ($id)){

            $projet =  $this->getDoctrine()->getRepository("blacklogProductBundle:Projet")->findby(array('idprojet'=>$request->get('projet')));
            $userStories = $this->getDoctrine()->getRepository('Suiviprojet\BlacklogBundle\Entity\UserStorie')->findby(array('idprojet'=>$request->get('projet')));

            return $this->render('blacklogProductBundle:Blacklog:creationUserStories.html.twig', array('projet' => $projet,'userStories' => $userStories,'priorite'=>$priorite));
         
       //Affichage du 1er projet par défaut avec ses user stories
       } else {
            $projet =  $this->getDoctrine()->getRepository("blacklogProductBundle:Projet")->findAll();
            $userStories = $this->getDoctrine()->getRepository("blacklogProductBundle:UserStorie")->findAll();
     
        return $this->render('blacklogProductBundle:Blacklog:creationUserStories.html.twig', array('projet' => $projet , 
                                                                                                   'userStories'=>$userStories,
                                                                                                   'priorite'=>$priorite));
           
            //$projet =  $this->getDoctrine()->getRepository("blacklogProductBundle:Projet")->find($request->get('projet'));
            //$userStories = $this->getDoctrine()->getRepository('Suiviprojet\BlacklogBundle\Entity\UserStorie')->findby(array('idprojet'=>$projet->getId()));
            return $this->render('blacklogProductBundle:Blacklog:creationUserStories.html.twig', array(/*'projet' => $projet*,'userStories' => $userStories*/));
       }
    }
    
    public function afficheUserStoriesTechniqueVueAction($idUserStorie){
       
        $userStoriesTechnique = $this->getDoctrine()->getRepository("blacklogProductBundle:UserStoriesTechnique")->findBy(array('userStorieUserStorie' => $idUserStorie));
        return $this->render('blacklogProductBundle:Blacklog:creationUserStoriesTechnique.html.twig', array('userStoriesTechnique'=>$userStoriesTechnique));
    }
    
    //
     public function test2Action(){
     
     $request = $this->getRequest();
     $id=$request->get('enregistrer'); 
     
      if(isset ($id)){
          //Ajout de la user storie dans la db
         
         //Inserer des données
        $userStories = new \Suiviprojet\BlacklogBundle\Entity\UserStorie();
        $userStories->setFonctionnalite($request->get('fonction'));
        $projet = new \Suiviprojet\BlacklogBundle\Entity\Projet();
        $projet->setIdprojet($this->getDoctrine()->getRepository('Suiviprojet\BlacklogBundle\Entity\Projet')->find($request->get('projet')));
       
        //$projet = getDoctrine()->getRepository('SuiviprojetBlacklogBundle:Projet')->find($request->get('projet'));
        //$projet->
        $userStories->setIdprojet($projet->getIdprojet());
        $this->getDoctrine()->getManager()->persist($userStories);
//        //Ajoute d'un coup tout les éléments qui ont été mis dans un persist
        $this->getDoctrine()->getManager()->flush();
        
        //On récupère toutes les user storie par rapport au projet
        $q=Doctrine_Query::create()
           ->select('a.codearticle',
                    'a.ref',
                    'a.designationarticle',
                'a.designationlongarticle',
                'a.stockreel',
                'a.minStock',
                'a.stocktheorique',
                'a.gestionstock',
                  'a.bloque',
                    'r.libellerayon')
           ->from('Articles a')
           ->leftJoin('a.Rayon r')
           ->where('r.coderayon = ?', 'a.codearticle')
           ->andWhere('a.GestionStock=?','1')
           ->andWhere('a.Stockreel <=?','a.MinStock');
         return $q->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
        
        //Récupération de tous les éléments dans une entité
        //$this->getDoctrine()->getRepository('InstaBlogBundle:Eleve')->findAll();
        //
        //Récupérer un élément précis = ->find()
        //Récupérer tout les éléments qui correspondantent à ce qu'on cherche = ->findBy()
        //Récupérer le premier élément qui correspondant à ce qu'on cherche = ->findBy()
        //
        //La on récupère le nom de l'élève dont l'id est 2 
        //return $this->getDoctrine()->getRepository('InstaBlogBundle:Eleve')->find(2)->getEleveNom();
           return $this->render('blacklogProductBundle:Blacklog:creationUserStories.html.twig', array());
       } else {
           return $this->render('blacklogProductBundle:Blacklog:creationUserStoriesTechnique.html.twig', array('projet'=>$request->get('projet'), 'fonction'=>$request->get('fonction')));
       }

    
    }
}

?>
