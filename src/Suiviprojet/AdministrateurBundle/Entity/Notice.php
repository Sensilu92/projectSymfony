<?php

namespace Suiviprojet\AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notice
 *
 * @ORM\Table(name="notice")
 * @ORM\Entity
 */
class Notice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idnotice", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnotice;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=45, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctionnalite", type="string", length=45, nullable=false)
     */
    private $fonctionnalite;

    /**
     * @var string
     *
     * @ORM\Column(name="explication", type="text", nullable=false)
     */
    private $explication;

    /**
     * @var \Projet
     *
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="projet_idprojet", referencedColumnName="idprojet")
     * })
     */
    private $projetprojet;



    /**
     * Get idnotice
     *
     * @return integer 
     */
    public function getIdnotice()
    {
        return $this->idnotice;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Notice
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set fonctionnalite
     *
     * @param string $fonctionnalite
     * @return Notice
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
     * Set explication
     *
     * @param string $explication
     * @return Notice
     */
    public function setExplication($explication)
    {
        $this->explication = $explication;
    
        return $this;
    }

    /**
     * Get explication
     *
     * @return string 
     */
    public function getExplication()
    {
        return $this->explication;
    }

    /**
     * Set projetprojet
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\Projet $projetprojet
     * @return Notice
     */
    public function setProjetprojet(\Suiviprojet\AdministrateurBundle\Entity\Projet $projetprojet = null)
    {
        $this->projetprojet = $projetprojet;
    
        return $this;
    }

    /**
     * Get projetprojet
     *
     * @return \Suiviprojet\AdministrateurBundle\Entity\Projet 
     */
    public function getProjetprojet()
    {
        return $this->projetprojet;
    }
}