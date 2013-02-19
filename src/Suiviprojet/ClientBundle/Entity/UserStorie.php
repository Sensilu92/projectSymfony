<?php

namespace Suiviprojet\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserStorie
 *
 * @ORM\Table(name="user_storie")
 * @ORM\Entity
 */
class UserStorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_storie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUserStorie;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctionnalite", type="string", length=45, nullable=false)
     */
    private $fonctionnalite;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=45, nullable=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="text", nullable=false)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="but", type="string", length=45, nullable=false)
     */
    private $but;

    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer", nullable=false)
     */
    private $points;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Sprint", inversedBy="userStorieUserStorie")
     * @ORM\JoinTable(name="user_storie_has_sprint",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_storie_id_user_storie", referencedColumnName="id_user_storie")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="sprint_idsprint", referencedColumnName="idsprint")
     *   }
     * )
     */
    private $sprintsprint;

    /**
     * @var \Projet
     *
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProjet", referencedColumnName="idprojet")
     * })
     */
    private $idprojet;

    /**
     * @var \Priorite
     *
     * @ORM\ManyToOne(targetEntity="Priorite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="priorite_idpriorite", referencedColumnName="idpriorite")
     * })
     */
    private $prioritepriorite;

    /**
     * @var \Statut
     *
     * @ORM\ManyToOne(targetEntity="Statut")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="statut_idStatut", referencedColumnName="idStatut")
     * })
     */
    private $statutstatut;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sprintsprint = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idUserStorie
     *
     * @return integer 
     */
    public function getIdUserStorie()
    {
        return $this->idUserStorie;
    }

    /**
     * Set fonctionnalite
     *
     * @param string $fonctionnalite
     * @return UserStorie
     */
    public function setFonctionnalite($fonctionnalite)
    {
        $this->fonctionnalite = $fonctionnalite;
    
        return $this;
    }

    /**
     * Get fonctionnalite
     *
     * @return string 
     */
    public function getFonctionnalite()
    {
        return $this->fonctionnalite;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return UserStorie
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return UserStorie
     */
    public function setAction($action)
    {
        $this->action = $action;
    
        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set but
     *
     * @param string $but
     * @return UserStorie
     */
    public function setBut($but)
    {
        $this->but = $but;
    
        return $this;
    }

    /**
     * Get but
     *
     * @return string 
     */
    public function getBut()
    {
        return $this->but;
    }

    /**
     * Set points
     *
     * @param integer $points
     * @return UserStorie
     */
    public function setPoints($points)
    {
        $this->points = $points;
    
        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Add sprintsprint
     *
     * @param \Suiviprojet\ClientBundle\Entity\Sprint $sprintsprint
     * @return UserStorie
     */
    public function addSprintsprint(\Suiviprojet\ClientBundle\Entity\Sprint $sprintsprint)
    {
        $this->sprintsprint[] = $sprintsprint;
    
        return $this;
    }

    /**
     * Remove sprintsprint
     *
     * @param \Suiviprojet\ClientBundle\Entity\Sprint $sprintsprint
     */
    public function removeSprintsprint(\Suiviprojet\ClientBundle\Entity\Sprint $sprintsprint)
    {
        $this->sprintsprint->removeElement($sprintsprint);
    }

    /**
     * Get sprintsprint
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSprintsprint()
    {
        return $this->sprintsprint;
    }

    /**
     * Set idprojet
     *
     * @param \Suiviprojet\ClientBundle\Entity\Projet $idprojet
     * @return UserStorie
     */
    public function setIdprojet(\Suiviprojet\ClientBundle\Entity\Projet $idprojet = null)
    {
        $this->idprojet = $idprojet;
    
        return $this;
    }

    /**
     * Get idprojet
     *
     * @return \Suiviprojet\ClientBundle\Entity\Projet 
     */
    public function getIdprojet()
    {
        return $this->idprojet;
    }

    /**
     * Set prioritepriorite
     *
     * @param \Suiviprojet\ClientBundle\Entity\Priorite $prioritepriorite
     * @return UserStorie
     */
    public function setPrioritepriorite(\Suiviprojet\ClientBundle\Entity\Priorite $prioritepriorite = null)
    {
        $this->prioritepriorite = $prioritepriorite;
    
        return $this;
    }

    /**
     * Get prioritepriorite
     *
     * @return \Suiviprojet\ClientBundle\Entity\Priorite 
     */
    public function getPrioritepriorite()
    {
        return $this->prioritepriorite;
    }

    /**
     * Set statutstatut
     *
     * @param \Suiviprojet\ClientBundle\Entity\Statut $statutstatut
     * @return UserStorie
     */
    public function setStatutstatut(\Suiviprojet\ClientBundle\Entity\Statut $statutstatut = null)
    {
        $this->statutstatut = $statutstatut;
    
        return $this;
    }

    /**
     * Get statutstatut
     *
     * @return \Suiviprojet\ClientBundle\Entity\Statut 
     */
    public function getStatutstatut()
    {
        return $this->statutstatut;
    }
}