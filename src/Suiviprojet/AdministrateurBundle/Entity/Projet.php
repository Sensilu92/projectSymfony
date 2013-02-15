<?php

namespace Suiviprojet\AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity
 */
class Projet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idprojet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprojet;

    /**
     * @var string
     *
     * @ORM\Column(name="idclient", type="string", length=45, nullable=true)
     */
    private $idclient;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_idClient", referencedColumnName="idClient")
     * })
     */
    private $clientclient;



    /**
     * Get idprojet
     *
     * @return integer 
     */
    public function getIdprojet()
    {
        return $this->idprojet;
    }

    /**
     * Set idclient
     *
     * @param string $idclient
     * @return Projet
     */
    public function setIdclient($idclient)
    {
        $this->idclient = $idclient;
    
        return $this;
    }

    /**
     * Get idclient
     *
     * @return string 
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set clientclient
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\Client $clientclient
     * @return Projet
     */
    public function setClientclient(\Suiviprojet\AdministrateurBundle\Entity\Client $clientclient = null)
    {
        $this->clientclient = $clientclient;
    
        return $this;
    }

    /**
     * Get clientclient
     *
     * @return \Suiviprojet\AdministrateurBundle\Entity\Client 
     */
    public function getClientclient()
    {
        return $this->clientclient;
    }
}