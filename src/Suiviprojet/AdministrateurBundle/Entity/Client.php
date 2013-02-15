<?php

namespace Suiviprojet\AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idClient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclient;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiantConnection", type="string", length=45, nullable=true)
     */
    private $identifiantconnection;

    /**
     * @var string
     *
     * @ORM\Column(name="passwordConnection", type="string", length=45, nullable=true)
     */
    private $passwordconnection;



    /**
     * Get idclient
     *
     * @return integer 
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set identifiantconnection
     *
     * @param string $identifiantconnection
     * @return Client
     */
    public function setIdentifiantconnection($identifiantconnection)
    {
        $this->identifiantconnection = $identifiantconnection;
    
        return $this;
    }

    /**
     * Get identifiantconnection
     *
     * @return string 
     */
    public function getIdentifiantconnection()
    {
        return $this->identifiantconnection;
    }

    /**
     * Set passwordconnection
     *
     * @param string $passwordconnection
     * @return Client
     */
    public function setPasswordconnection($passwordconnection)
    {
        $this->passwordconnection = $passwordconnection;
    
        return $this;
    }

    /**
     * Get passwordconnection
     *
     * @return string 
     */
    public function getPasswordconnection()
    {
        return $this->passwordconnection;
    }
}