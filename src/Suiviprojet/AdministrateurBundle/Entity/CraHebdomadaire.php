<?php

namespace Suiviprojet\AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CraHebdomadaire
 *
 * @ORM\Table(name="cra_hebdomadaire")
 * @ORM\Entity
 */
class CraHebdomadaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcra_hebdomadaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcraHebdomadaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=45, nullable=false)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=45, nullable=false)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="tache", type="string", length=45, nullable=false)
     */
    private $tache;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=45, nullable=false)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="explications", type="string", length=45, nullable=false)
     */
    private $explications;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Developper", inversedBy="craHebdomadairecraHebdomadaire")
     * @ORM\JoinTable(name="developper_has_cra_hebdomadaire",
     *   joinColumns={
     *     @ORM\JoinColumn(name="cra_hebdomadaire_idcra_hebdomadaire", referencedColumnName="idcra_hebdomadaire")
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
     * Get idcraHebdomadaire
     *
     * @return integer 
     */
    public function getIdcraHebdomadaire()
    {
        return $this->idcraHebdomadaire;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return CraHebdomadaire
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return CraHebdomadaire
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    
        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set client
     *
     * @param string $client
     * @return CraHebdomadaire
     */
    public function setClient($client)
    {
        $this->client = $client;
    
        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set tache
     *
     * @param string $tache
     * @return CraHebdomadaire
     */
    public function setTache($tache)
    {
        $this->tache = $tache;
    
        return $this;
    }

    /**
     * Get tache
     *
     * @return string 
     */
    public function getTache()
    {
        return $this->tache;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return CraHebdomadaire
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set explications
     *
     * @param string $explications
     * @return CraHebdomadaire
     */
    public function setExplications($explications)
    {
        $this->explications = $explications;
    
        return $this;
    }

    /**
     * Get explications
     *
     * @return string 
     */
    public function getExplications()
    {
        return $this->explications;
    }

    /**
     * Add developperdevelopper
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\Developper $developperdevelopper
     * @return CraHebdomadaire
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