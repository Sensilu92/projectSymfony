<?php

namespace Suiviprojet\BlacklogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sprint
 *
 * @ORM\Table(name="sprint")
 * @ORM\Entity
 */
class Sprint
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsprint", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsprint;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbDifficulteMax", type="integer", nullable=false)
     */
    private $nbdifficultemax;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date", nullable=false)
     */
    private $datefin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="UserStorie", mappedBy="sprintsprint")
     */
    private $userStorieUserStorie;

    /**
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipe_idEquipe", referencedColumnName="idEquipe")
     * })
     */
    private $equipeequipe;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userStorieUserStorie = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idsprint
     *
     * @return integer 
     */
    public function getIdsprint()
    {
        return $this->idsprint;
    }

    /**
     * Set nbdifficultemax
     *
     * @param integer $nbdifficultemax
     * @return Sprint
     */
    public function setNbdifficultemax($nbdifficultemax)
    {
        $this->nbdifficultemax = $nbdifficultemax;
    
        return $this;
    }

    /**
     * Get nbdifficultemax
     *
     * @return integer 
     */
    public function getNbdifficultemax()
    {
        return $this->nbdifficultemax;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Sprint
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    
        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Sprint
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    
        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Add userStorieUserStorie
     *
     * @param \Suiviprojet\BlacklogBundle\Entity\UserStorie $userStorieUserStorie
     * @return Sprint
     */
    public function addUserStorieUserStorie(\Suiviprojet\BlacklogBundle\Entity\UserStorie $userStorieUserStorie)
    {
        $this->userStorieUserStorie[] = $userStorieUserStorie;
    
        return $this;
    }

    /**
     * Remove userStorieUserStorie
     *
     * @param \Suiviprojet\BlacklogBundle\Entity\UserStorie $userStorieUserStorie
     */
    public function removeUserStorieUserStorie(\Suiviprojet\BlacklogBundle\Entity\UserStorie $userStorieUserStorie)
    {
        $this->userStorieUserStorie->removeElement($userStorieUserStorie);
    }

    /**
     * Get userStorieUserStorie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserStorieUserStorie()
    {
        return $this->userStorieUserStorie;
    }

    /**
     * Set equipeequipe
     *
     * @param \Suiviprojet\BlacklogBundle\Entity\Equipe $equipeequipe
     * @return Sprint
     */
    public function setEquipeequipe(\Suiviprojet\BlacklogBundle\Entity\Equipe $equipeequipe = null)
    {
        $this->equipeequipe = $equipeequipe;
    
        return $this;
    }

    /**
     * Get equipeequipe
     *
     * @return \Suiviprojet\BlacklogBundle\Entity\Equipe 
     */
    public function getEquipeequipe()
    {
        return $this->equipeequipe;
    }
}