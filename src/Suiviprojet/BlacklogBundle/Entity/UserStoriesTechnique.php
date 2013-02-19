<?php

namespace Suiviprojet\BlacklogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserStoriesTechnique
 *
 * @ORM\Table(name="user_stories_technique")
 * @ORM\Entity
 */
class UserStoriesTechnique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_stories_technique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUserStoriesTechnique;

    /**
     * @var string
     *
     * @ORM\Column(name="description_technique", type="text", nullable=false)
     */
    private $descriptionTechnique;

    /**
     * @var \UserStorie
     *
     * @ORM\ManyToOne(targetEntity="UserStorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_storie_id_user_storie", referencedColumnName="id_user_storie")
     * })
     */
    private $userStorieUserStorie;



    /**
     * Get idUserStoriesTechnique
     *
     * @return integer 
     */
    public function getIdUserStoriesTechnique()
    {
        return $this->idUserStoriesTechnique;
    }

    /**
     * Set descriptionTechnique
     *
     * @param string $descriptionTechnique
     * @return UserStoriesTechnique
     */
    public function setDescriptionTechnique($descriptionTechnique)
    {
        $this->descriptionTechnique = $descriptionTechnique;
    
        return $this;
    }

    /**
     * Get descriptionTechnique
     *
     * @return string 
     */
    public function getDescriptionTechnique()
    {
        return $this->descriptionTechnique;
    }

    /**
     * Set userStorieUserStorie
     *
     * @param \Suiviprojet\BlacklogBundle\Entity\UserStorie $userStorieUserStorie
     * @return UserStoriesTechnique
     */
    public function setUserStorieUserStorie(\Suiviprojet\BlacklogBundle\Entity\UserStorie $userStorieUserStorie = null)
    {
        $this->userStorieUserStorie = $userStorieUserStorie;
    
        return $this;
    }

    /**
     * Get userStorieUserStorie
     *
     * @return \Suiviprojet\BlacklogBundle\Entity\UserStorie 
     */
    public function getUserStorieUserStorie()
    {
        return $this->userStorieUserStorie;
    }
}