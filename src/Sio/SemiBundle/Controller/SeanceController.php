<?php

namespace Sio\SemiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Responses;
use Symfony\Component\HttpFoundation\Request;




/**
 * @Route("/seance")
 */
class SeanceController extends Controller
{
    /**
	* @Route("/liste", name="_seance_liste")
	* @Template()
	*/ 
	public function listeAction()
	{
	$lesSeances = $this -> getDoctrine() 
						-> getRepository('SioSemiBundle:Seance') 
						-> findAllSeance();

		return array('lesSeances' => $lesSeances);
	
	}
	
	
	

}
