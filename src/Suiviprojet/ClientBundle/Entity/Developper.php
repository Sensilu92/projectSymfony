<?php

namespace Suiviprojet\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Developper
 *
 * @ORM\Table(name="developper")
 * @ORM\Entity
 */
class Developper
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDevelopper", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddevelopper;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=false)
     */
    private $password;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Equipe", mappedBy="developperdevelopper")
     */
    private $equipeequipe;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->equipeequipe = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get iddevelopper
     *
     * @return integer 
     */
    public function getIddevelopper()
    {
        return $this->iddevelopper;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Developper
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

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Developper
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Developper
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Developper
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Add equipeequipe
     *
     * @param \Suiviprojet\ClientBundle\Entity\Equipe $equipeequipe
     * @return Developper
     */
    public function addEquipeequipe(\Suiviprojet\ClientBundle\Entity\Equipe $equipeequipe)
    {
        $this->equipeequipe[] = $equipeequipe;
    
        return $this;
    }

    /**
     * Remove equipeequipe
     *
     * @param \Suiviprojet\ClientBundle\Entity\Equipe $equipeequipe
     */
    public function removeEquipeequipe(\Suiviprojet\ClientBundle\Entity\Equipe $equipeequipe)
    {
        $this->equipeequipe->removeElement($equipeequipe);
    }

    /**
     * Get equipeequipe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEquipeequipe()
    {
        return $this->equipeequipe;
    }
}