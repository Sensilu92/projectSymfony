<?php

namespace Suiviprojet\AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CraJournalier
 *
 * @ORM\Table(name="cra_journalier")
 * @ORM\Entity
 */
class CraJournalier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcra_journalier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcraJournalier;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="projet", type="string", length=45, nullable=false)
     */
    private $projet;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=45, nullable=false)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="tache", type="string", length=45, nullable=false)
     */
    private $tache;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=45, nullable=false)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=45, nullable=false)
     */
    private $commentaire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CraHebdomadaire", mappedBy="craJournaliercraJournalier")
     */
    private $craHebdomadairecraHebdomadaire;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->craHebdomadairecraHebdomadaire = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idcraJournalier
     *
     * @return integer 
     */
    public function getIdcraJournalier()
    {
        return $this->idcraJournalier;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return CraJournalier
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set projet
     *
     * @param string $projet
     * @return CraJournalier
     */
    public function setProjet($projet)
    {
        $this->projet = $projet;
    
        return $this;
    }

    /**
     * Get projet
     *
     * @return string 
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Set client
     *
     * @param string $client
     * @return CraJournalier
     */
    public function setClient($client)
    {
        $this->client = $client;
    
        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set tache
     *
     * @param string $tache
     * @return CraJournalier
     */
    public function setTache($tache)
    {
        $this->tache = $tache;
    
        return $this;
    }

    /**
     * Get tache
     *
     * @return string 
     */
    public function getTache()
    {
        return $this->tache;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return CraJournalier
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return CraJournalier
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
     * Add craHebdomadairecraHebdomadaire
     *
     * @param \Suiviprojet\AdministrateurBundle\Entity\CraHebdomadaire $craHebdomadairecraHebdomadaire
     * @return CraJournalier
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
}