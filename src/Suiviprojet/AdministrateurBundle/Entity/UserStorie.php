<?php

namespace Suiviprojet\AdministrateurBundle\Entity;

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
     * Add sprintsprint
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\Sprint $sprintsprint
     * @return UserStorie
     */
    public function addSprintsprint(\Suiviprojet\AdministrateurBundle\Entity\Sprint $sprintsprint)
    {
        $this->sprintsprint[] = $sprintsprint;
    
        return $this;
    }

    /**
     * Remove sprintsprint
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\Sprint $sprintsprint
     */
    public function removeSprintsprint(\Suiviprojet\AdministrateurBundle\Entity\Sprint $sprintsprint)
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
     * @param \Suiviprojet\AdministrateurBundle\Entity\Projet $idprojet
     * @return UserStorie
     */
    public function setIdprojet(\Suiviprojet\AdministrateurBundle\Entity\Projet $idprojet = null)
    {
        $this->idprojet = $idprojet;
    
        return $this;
    }

    /**
     * Get idprojet
     *
     * @return \Suiviprojet\AdministrateurBundle\Entity\Projet 
     */
    public function getIdprojet()
    {
        return $this->idprojet;
    }
}