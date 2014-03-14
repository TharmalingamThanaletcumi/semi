<?php

namespace Sio\SemiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Seance
* @ORM\Table(name="seance")
* @ORM\Entity(repositoryClass="Sio\SemiBundle\Entity\SeanceRepository")
*/
class Seance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;
	
	/**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=150)
     */
    private $libelle;
	
	/**
     * @var string
     *
     * @ORM\Column(name="intervenants", type="string", length=300)
     */
    private $intervenants;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbMax", type="integer")
     */
    private $nbMax;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="dateHeureDebut", type="integer")
     */
    private $dateHeureDebut;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="dateHeureFin", type="integer")
     */
    private $dateHeureFin;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="numRelatif", type="integer")
     */
    private $numRelatif;
	



    /**
     * Set id
     *
     * @param integer $id
     * @return Seance
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Seance
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set intervenants
     *
     * @param string $intervenants
     * @return Seance
     */
    public function setIntervenants($intervenants)
    {
        $this->intervenants = $intervenants;
    
        return $this;
    }

    /**
     * Get intervenants
     *
     * @return string 
     */
    public function getIntervenants()
    {
        return $this->intervenants;
    }

    /**
     * Set nbMax
     *
     * @param integer $nbMax
     * @return Seance
     */
    public function setNbMax($nbMax)
    {
        $this->nbMax = $nbMax;
    
        return $this;
    }

    /**
     * Get nbMax
     *
     * @return integer 
     */
    public function getNbMax()
    {
        return $this->nbMax;
    }

    /**
     * Set dateHeureDebut
     *
     * @param integer $dateHeureDebut
     * @return Seance
     */
    public function setDateHeureDebut($dateHeureDebut)
    {
        $this->dateHeureDebut = $dateHeureDebut;
    
        return $this;
    }

    /**
     * Get dateHeureDebut
     *
     * @return integer 
     */
    public function getDateHeureDebut()
    {
        return $this->dateHeureDebut;
    }

    /**
     * Set dateHeureFin
     *
     * @param integer $dateHeureFin
     * @return Seance
     */
    public function setDateHeureFin($dateHeureFin)
    {
        $this->dateHeureFin = $dateHeureFin;
    
        return $this;
    }

    /**
     * Get dateHeureFin
     *
     * @return integer 
     */
    public function getDateHeureFin()
    {
        return $this->dateHeureFin;
    }

    /**
     * Set numRelatif
     *
     * @param integer $numRelatif
     * @return Seance
     */
    public function setNumRelatif($numRelatif)
    {
        $this->numRelatif = $numRelatif;
    
        return $this;
    }

    /**
     * Get numRelatif
     *
     * @return integer 
     */
    public function getNumRelatif()
    {
        return $this->numRelatif;
    }
}