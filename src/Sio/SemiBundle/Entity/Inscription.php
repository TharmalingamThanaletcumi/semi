<?php

namespace Sio\SemiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Inscription
* @ORM\Table(name="inscription")
* @ORM\Entity(repositoryClass="Sio\SemiBundle\Entity\InscriptionRepository")
*/
class Inscription
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dateInscr", type="integer")
     */
    private $dateInscr;




    /**
     * Set dateInscr
     *
     * @param integer $dateInscr
     * @return Inscription
     */
    public function setDateInscr($dateInscr)
    {
        $this->dateInscr = $dateInscr;
    
        return $this;
    }

    /**
     * Get dateInscr
     *
     * @return integer 
     */
    public function getDateInscr()
    {
        return $this->dateInscr;
    }
}