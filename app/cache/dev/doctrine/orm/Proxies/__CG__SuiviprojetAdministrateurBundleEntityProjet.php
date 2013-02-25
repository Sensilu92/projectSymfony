<?php

namespace Proxies\__CG__\Suiviprojet\AdministrateurBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Projet extends \Suiviprojet\AdministrateurBundle\Entity\Projet implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getIdprojet()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idprojet"];
        }
        $this->__load();
        return parent::getIdprojet();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setDateDebut($dateDebut)
    {
        $this->__load();
        return parent::setDateDebut($dateDebut);
    }

    public function getDateDebut()
    {
        $this->__load();
        return parent::getDateDebut();
    }

    public function setDateFin($dateFin)
    {
        $this->__load();
        return parent::setDateFin($dateFin);
    }

    public function getDateFin()
    {
        $this->__load();
        return parent::getDateFin();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setClientclient(\Suiviprojet\AdministrateurBundle\Entity\Client $clientclient = NULL)
    {
        $this->__load();
        return parent::setClientclient($clientclient);
    }

    public function getClientclient()
    {
        $this->__load();
        return parent::getClientclient();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'idprojet', 'nom', 'dateDebut', 'dateFin', 'description', 'clientclient');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}