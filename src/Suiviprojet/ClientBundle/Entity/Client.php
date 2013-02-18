<?php

namespace Suiviprojet\ClientBundle\Entity;

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
     * @ORM\Column(name="societe", type="string", length=25, nullable=false)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_contact", type="string", length=25, nullable=false)
     */
    private $nomContact;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_contact", type="string", length=25, nullable=false)
     */
    private $prenomContact;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone_contact", type="integer", nullable=false)
     */
    private $telephoneContact;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiantConnection", type="string", length=45, nullable=false)
     */
    private $identifiantconnection;

    /**
     * @var string
     *
     * @ORM\Column(name="passwordConnection", type="string", length=45, nullable=false)
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
     * Set societe
     *
     * @param string $societe
     * @return Client
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;
    
        return $this;
    }

    /**
     * Get societe
     *
     * @return string 
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set nomContact
     *
     * @param string $nomContact
     * @return Client
     */
    public function setNomContact($nomContact)
    {
        $this->nomContact = $nomContact;
    
        return $this;
    }

    /**
     * Get nomContact
     *
     * @return string 
     */
    public function getNomContact()
    {
        return $this->nomContact;
    }

    /**
     * Set prenomContact
     *
     * @param string $prenomContact
     * @return Client
     */
    public function setPrenomContact($prenomContact)
    {
        $this->prenomContact = $prenomContact;
    
        return $this;
    }

    /**
     * Get prenomContact
     *
     * @return string 
     */
    public function getPrenomContact()
    {
        return $this->prenomContact;
    }

    /**
     * Set telephoneContact
     *
     * @param integer $telephoneContact
     * @return Client
     */
    public function setTelephoneContact($telephoneContact)
    {
        $this->telephoneContact = $telephoneContact;
    
        return $this;
    }

    /**
     * Get telephoneContact
     *
     * @return integer 
     */
    public function getTelephoneContact()
    {
        return $this->telephoneContact;
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