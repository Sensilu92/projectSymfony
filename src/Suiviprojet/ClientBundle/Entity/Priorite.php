<?php

namespace Suiviprojet\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Priorite
 *
 * @ORM\Table(name="priorite")
 * @ORM\Entity
 */
class Priorite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpriorite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpriorite;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=45, nullable=false)
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;



    /**
     * Get idpriorite
     *
     * @return integer 
     */
    public function getIdpriorite()
    {
        return $this->idpriorite;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     * @return Priorite
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    
        return $this;
    }

    /**
     * Get couleur
     *
     * @return string 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Priorite
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
}