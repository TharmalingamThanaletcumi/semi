<?php

namespace Sio\SemiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Responses;
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route("/participant")
 */
class ParticipantController extends Controller
{
	/**
	 * @Route("/index/{name}" , name="_participant_index")
	 * @Template()
	 */
	public function indexAction($name)
	{
		
		return array('name' => $name );
	}
	
	
	/**
	 * @Route("/liste/" , name="_participant_liste")
	 * @Template()
	 */
	public function listeParticipantsAction()
	{
		$lesParticipants = $this->getDoctrine()
			->getRepository('SioSemiBundle:Participant')
			->findAllParticipant();
			
			return array('lesParticipants' =>  $lesParticipants);
	
	}
	
	/**
	 * @Route("/nombre/" , name="_participant_nombre")
	 * @Template()
	 */
	public function nombreParticipantsAction()
	{
		$nombreParticipants = $this->getDoctrine()
			->getRepository('SioSemiBundle:Participant')
			->findNbParticipant();
			
			return array('nombreParticipants' =>  $nombreParticipants);
	
	}
	
	
	
}
