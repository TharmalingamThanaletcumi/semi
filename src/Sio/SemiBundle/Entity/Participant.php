<?php

namespace Sio\SemiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Participant
* @ORM\Table(name="participant")
* @ORM\Entity(repositoryClass="Sio\SemiBundle\Entity\ParticipantRepository")
*/
class Participant
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

	/**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;
	
	/**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=150)
     */
    private $mail;
	
	/**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=30)
     */
    private $titre;
	
	/**
     * @var string
     *
     * @ORM\Column(name="resAdministrative", type="string", length=80)
     */
    private $resAdministrative;
	
	/**
     * @var string
     *
     * @ORM\Column(name="resFamilliale", type="string", length=80)
     */
    private $resFamilliale;
	
	/**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=50)
     */
    private $role;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="lastUpdate", type="integer")
     */
    private $lastUpdate;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="dateCrea", type="integer")
     */
    private $dateCrea;
	
	
	
	
	


    

    /**
     * Set id
     *
     * @param integer $id
     * @return Participant
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
     * Set nom
     *
     * @param string $nom
     * @return Participant
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
     * @return Participant
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
     * Set mail
     *
     * @param string $mail
     * @return Participant
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Participant
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set resAdministrative
     *
     * @param string $resAdministrative
     * @return Participant
     */
    public function setResAdministrative($resAdministrative)
    {
        $this->resAdministrative = $resAdministrative;
    
        return $this;
    }

    /**
     * Get resAdministrative
     *
     * @return string 
     */
    public function getResAdministrative()
    {
        return $this->resAdministrative;
    }

    /**
     * Set resFamilliale
     *
     * @param string $resFamilliale
     * @return Participant
     */
    public function setResFamilliale($resFamilliale)
    {
        $this->resFamilliale = $resFamilliale;
    
        return $this;
    }

    /**
     * Get resFamilliale
     *
     * @return string 
     */
    public function getResFamilliale()
    {
        return $this->resFamilliale;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Participant
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
     * Set lastUpdate
     *
     * @param integer $lastUpdate
     * @return Participant
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
    
        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return integer 
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set dateCrea
     *
     * @param integer $dateCrea
     * @return Participant
     */
    public function setDateCrea($dateCrea)
    {
        $this->dateCrea = $dateCrea;
    
        return $this;
    }

    /**
     * Get dateCrea
     *
     * @return integer 
     */
    public function getDateCrea()
    {
        return $this->dateCrea;
    }
}