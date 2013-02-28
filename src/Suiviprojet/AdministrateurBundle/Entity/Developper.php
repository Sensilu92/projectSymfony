<?php

namespace Suiviprojet\AdministrateurBundle\Entity;

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
     * @ORM\Column(name="role", type="string", length=45, nullable=false)
     */
    private $role;

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
     * @ORM\ManyToMany(targetEntity="CraHebdomadaire", mappedBy="developperdevelopper")
     */
    private $craHebdomadairecraHebdomadaire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Equipe", mappedBy="developperdevelopper")
     */
    private $equipeequipe;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="UserStorie", mappedBy="developperdevelopper")
     */
    private $userStorieUserStorie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->craHebdomadairecraHebdomadaire = new \Doctrine\Common\Collections\ArrayCollection();
        $this->equipeequipe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->userStorieUserStorie = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set role
     *
     * @param string $role
     * @return Developper
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
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
     * Add craHebdomadairecraHebdomadaire
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\CraHebdomadaire $craHebdomadairecraHebdomadaire
     * @return Developper
     */
    public function addCraHebdomadairecraHebdomadaire(\Suiviprojet\AdministrateurBundle\Entity\CraHebdomadaire $craHebdomadairecraHebdomadaire)
    {
        $this->craHebdomadairecraHebdomadaire[] = $craHebdomadairecraHebdomadaire;
    
        return $this;
    }

    /**
     * Remove craHebdomadairecraHebdomadaire
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\CraHebdomadaire $craHebdomadairecraHebdomadaire
     */
    public function removeCraHebdomadairecraHebdomadaire(\Suiviprojet\AdministrateurBundle\Entity\CraHebdomadaire $craHebdomadairecraHebdomadaire)
    {
        $this->craHebdomadairecraHebdomadaire->removeElement($craHebdomadairecraHebdomadaire);
    }

    /**
     * Get craHebdomadairecraHebdomadaire
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCraHebdomadairecraHebdomadaire()
    {
        return $this->craHebdomadairecraHebdomadaire;
    }

    /**
     * Add equipeequipe
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\Equipe $equipeequipe
     * @return Developper
     */
    public function addEquipeequipe(\Suiviprojet\AdministrateurBundle\Entity\Equipe $equipeequipe)
    {
        $this->equipeequipe[] = $equipeequipe;
    
        return $this;
    }

    /**
     * Remove equipeequipe
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\Equipe $equipeequipe
     */
    public function removeEquipeequipe(\Suiviprojet\AdministrateurBundle\Entity\Equipe $equipeequipe)
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

    /**
     * Add userStorieUserStorie
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\UserStorie $userStorieUserStorie
     * @return Developper
     */
    public function addUserStorieUserStorie(\Suiviprojet\AdministrateurBundle\Entity\UserStorie $userStorieUserStorie)
    {
        $this->userStorieUserStorie[] = $userStorieUserStorie;
    
        return $this;
    }

    /**
     * Remove userStorieUserStorie
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\UserStorie $userStorieUserStorie
     */
    public function removeUserStorieUserStorie(\Suiviprojet\AdministrateurBundle\Entity\UserStorie $userStorieUserStorie)
    {
        $this->userStorieUserStorie->removeElement($userStorieUserStorie);
    }

    /**
     * Get userStorieUserStorie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserStorieUserStorie()
    {
        return $this->userStorieUserStorie;
    }
}