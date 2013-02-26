<?php

namespace Suiviprojet\AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatutBacklog
 *
 * @ORM\Table(name="statut_backlog")
 * @ORM\Entity
 */
class StatutBacklog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idstatut_backlog", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstatutBacklog;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=45, nullable=false)
     */
    private $intitule;



    /**
     * Get idstatutBacklog
     *
     * @return integer 
     */
    public function getIdstatutBacklog()
    {
        return $this->idstatutBacklog;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return StatutBacklog
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