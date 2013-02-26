<?php

namespace Suiviprojet\AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CraHebdomadaire
 *
 * @ORM\Table(name="cra_hebdomadaire")
 * @ORM\Entity
 */
class CraHebdomadaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcra_hebdomadaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcraHebdomadaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=45, nullable=true)
     */
    private $commentaire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CraJournalier", inversedBy="craHebdomadairecraHebdomadaire")
     * @ORM\JoinTable(name="cra_hebdomadaire_has_cra_journalier",
     *   joinColumns={
     *     @ORM\JoinColumn(name="cra_hebdomadaire_idcra_hebdomadaire", referencedColumnName="idcra_hebdomadaire")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="cra_journalier_idcra_journalier", referencedColumnName="idcra_journalier")
     *   }
     * )
     */
    private $craJournaliercraJournalier;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Developper", inversedBy="craHebdomadairecraHebdomadaire")
     * @ORM\JoinTable(name="developper_has_cra_hebdomadaire",
     *   joinColumns={
     *     @ORM\JoinColumn(name="cra_hebdomadaire_idcra_hebdomadaire", referencedColumnName="idcra_hebdomadaire")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="developper_idDevelopper", referencedColumnName="idDevelopper")
     *   }
     * )
     */
    private $developperdevelopper;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->craJournaliercraJournalier = new \Doctrine\Common\Collections\ArrayCollection();
        $this->developperdevelopper = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idcraHebdomadaire
     *
     * @return integer 
     */
    public function getIdcraHebdomadaire()
    {
        return $this->idcraHebdomadaire;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return CraHebdomadaire
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    
        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return CraHebdomadaire
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    
        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return CraHebdomadaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Add craJournaliercraJournalier
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\CraJournalier $craJournaliercraJournalier
     * @return CraHebdomadaire
     */
    public function addCraJournaliercraJournalier(\Suiviprojet\AdministrateurBundle\Entity\CraJournalier $craJournaliercraJournalier)
    {
        $this->craJournaliercraJournalier[] = $craJournaliercraJournalier;
    
        return $this;
    }

    /**
     * Remove craJournaliercraJournalier
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\CraJournalier $craJournaliercraJournalier
     */
    public function removeCraJournaliercraJournalier(\Suiviprojet\AdministrateurBundle\Entity\CraJournalier $craJournaliercraJournalier)
    {
        $this->craJournaliercraJournalier->removeElement($craJournaliercraJournalier);
    }

    /**
     * Get craJournaliercraJournalier
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCraJournaliercraJournalier()
    {
        return $this->craJournaliercraJournalier;
    }

    /**
     * Add developperdevelopper
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\Developper $developperdevelopper
     * @return CraHebdomadaire
     */
    public function addDevelopperdevelopper(\Suiviprojet\AdministrateurBundle\Entity\Developper $developperdevelopper)
    {
        $this->developperdevelopper[] = $developperdevelopper;
    
        return $this;
    }

    /**
     * Remove developperdevelopper
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\Developper $developperdevelopper
     */
    public function removeDevelopperdevelopper(\Suiviprojet\AdministrateurBundle\Entity\Developper $developperdevelopper)
    {
        $this->developperdevelopper->removeElement($developperdevelopper);
    }

    /**
     * Get developperdevelopper
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDevelopperdevelopper()
    {
        return $this->developperdevelopper;
    }
}