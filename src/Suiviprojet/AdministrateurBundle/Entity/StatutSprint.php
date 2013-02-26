<?php

namespace Suiviprojet\AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatutSprint
 *
 * @ORM\Table(name="statut_sprint")
 * @ORM\Entity
 */
class StatutSprint
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idstatut_sprint", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstatutSprint;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=45, nullable=false)
     */
    private $intitule;



    /**
     * Get idstatutSprint
     *
     * @return integer 
     */
    public function getIdstatutSprint()
    {
        return $this->idstatutSprint;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return StatutSprint
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
}