<?php

namespace Suiviprojet\BlacklogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe")
 * @ORM\Entity
 */
class Equipe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEquipe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idequipe;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbDifficulte", type="integer", nullable=true)
     */
    private $nbdifficulte;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Developper", inversedBy="equipeequipe")
     * @ORM\JoinTable(name="equipe_has_developper",
     *   joinColumns={
     *     @ORM\JoinColumn(name="equipe_idEquipe", referencedColumnName="idEquipe")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="developper_idDevelopper", referencedColumnName="idDevelopper")
     *   }
     * )
     */
    private $developperdevelopper;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->developperdevelopper = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idequipe
     *
     * @return integer 
     */
    public function getIdequipe()
    {
        return $this->idequipe;
    }

    /**
     * Set nbdifficulte
     *
     * @param integer $nbdifficulte
     * @return Equipe
     */
    public function setNbdifficulte($nbdifficulte)
    {
        $this->nbdifficulte = $nbdifficulte;
    
        return $this;
    }

    /**
     * Get nbdifficulte
     *
     * @return integer 
     */
    public function getNbdifficulte()
    {
        return $this->nbdifficulte;
    }

    /**
     * Add developperdevelopper
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\Developper $developperdevelopper
     * @return Equipe
     */
    public function addDevelopperdevelopper(\Suiviprojet\AdministrateurBundle\Entity\Developper $developperdevelopper)
    {
        $this->developperdevelopper[] = $developperdevelopper;
    
        return $this;
    }

    /**
     * Remove developperdevelopper
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\Developper $developperdevelopper
     */
    public function removeDevelopperdevelopper(\Suiviprojet\AdministrateurBundle\Entity\Developper $developperdevelopper)
    {
        $this->developperdevelopper->removeElement($developperdevelopper);
    }

    /**
     * Get developperdevelopper
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDevelopperdevelopper()
    {
        return $this->developperdevelopper;
    }
}