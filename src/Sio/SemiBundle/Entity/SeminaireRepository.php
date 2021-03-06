<?php

namespace Sio\SemiBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SeminaireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SeminaireRepository extends EntityRepository
{
		public function findAllSeminaire() 
		{
			$em = $this -> getEntityManager();
			$query = $em -> createQuery("SELECT sem FROM SioSemiBundle:Seminaire sem ");
			return $query -> getResult();
		}
		
		public function verificationCleSeminaire($CleSeminaire) 
		{
			$em = $this -> getEntityManager();
			$query = $em -> createQuery("SELECT sem.cle FROM SioSemiBundle:Seminaire sem WHERE sem.cle ='$CleSeminaire'");
			return $query -> getSingleScalarResult();
		}
		
}
