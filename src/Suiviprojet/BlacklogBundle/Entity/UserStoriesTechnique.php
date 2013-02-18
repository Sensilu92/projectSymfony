<?php

namespace Suiviprojet\BlacklogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserStoriesTechnique
 *
 * @ORM\Table(name="user_stories_technique")
 * @ORM\Entity
 */
class UserStoriesTechnique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_stories_technique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUserStoriesTechnique;

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
     * @ORM\Column(name="idStatusUS", type="integer", nullable=false)
     */
    private $idstatusus;

    /**
     * @var \Statut
     *
     * @ORM\ManyToOne(targetEntity="Statut")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idStatut", referencedColumnName="idStatut")
     * })
     */
    private $idstatut;

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
     * @var \UserStorie
     *
     * @ORM\ManyToOne(targetEntity="UserStorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_storie_id_user_storie", referencedColumnName="id_user_storie")
     * })
     */
    private $userStorieUserStorie;



    /**
     * Get idUserStoriesTechnique
     *
     * @return integer 
     */
    public function getIdUserStoriesTechnique()
    {
        return $this->idUserStoriesTechnique;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return UserStoriesTechnique
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
     * @return UserStoriesTechnique
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
     * @return UserStoriesTechnique
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
     * Set idstatusus
     *
     * @param integer $idstatusus
     * @return UserStoriesTechnique
     */
    public function setIdstatusus($idstatusus)
    {
        $this->idstatusus = $idstatusus;
    
        return $this;
    }

    /**
     * Get idstatusus
     *
     * @return integer 
     */
    public function getIdstatusus()
    {
        return $this->idstatusus;
    }

    /**
     * Set idstatut
     *
     * @param \Suiviprojet\BlacklogBundle\Entity\Statut $idstatut
     * @return UserStoriesTechnique
     */
    public function setIdstatut(\Suiviprojet\BlacklogBundle\Entity\Statut $idstatut = null)
    {
        $this->idstatut = $idstatut;
    
        return $this;
    }

    /**
     * Get idstatut
     *
     * @return \Suiviprojet\BlacklogBundle\Entity\Statut 
     */
    public function getIdstatut()
    {
        return $this->idstatut;
    }

    /**
     * Set prioritepriorite
     *
     * @param \Suiviprojet\BlacklogBundle\Entity\Priorite $prioritepriorite
     * @return UserStoriesTechnique
     */
    public function setPrioritepriorite(\Suiviprojet\BlacklogBundle\Entity\Priorite $prioritepriorite = null)
    {
        $this->prioritepriorite = $prioritepriorite;
    
        return $this;
    }

    /**
     * Get prioritepriorite
     *
     * @return \Suiviprojet\BlacklogBundle\Entity\Priorite 
     */
    public function getPrioritepriorite()
    {
        return $this->prioritepriorite;
    }

    /**
     * Set userStorieUserStorie
     *
     * @param \Suiviprojet\BlacklogBundle\Entity\UserStorie $userStorieUserStorie
     * @return UserStoriesTechnique
     */
    public function setUserStorieUserStorie(\Suiviprojet\BlacklogBundle\Entity\UserStorie $userStorieUserStorie = null)
    {
        $this->userStorieUserStorie = $userStorieUserStorie;
    
        return $this;
    }

    /**
     * Get userStorieUserStorie
     *
     * @return \Suiviprojet\BlacklogBundle\Entity\UserStorie 
     */
    public function getUserStorieUserStorie()
    {
        return $this->userStorieUserStorie;
    }
}