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
class ParticipantController extends Controller {
	/**
	 * @Route("/index/{name}" , name="_participant_index")
	 * @Template()
	 */
	public function indexAction($name) {

		return array('name' => $name);
	}

	/**
	 * @Route("/liste/" , name="_participant_liste")
	 * @Template()
	 */
	public function listeParticipantsAction() {
		$lesParticipants = $this -> getDoctrine() -> getRepository('SioSemiBundle:Participant') -> findAllParticipant();

		return array('lesParticipants' => $lesParticipants);

	}

	/**
	 * @Route("/nombre/" , name="_participant_nombre")
	 * @Template()
	 */
	public function NombreParticipantsAction() {
		$nombreParticipants = $this -> getDoctrine() -> getRepository('SioSemiBundle:Participant') -> findNbParticipant();

		return array('NombreParticipants' => $nombreParticipants);

	}

	/**
	 * @Route("/login/" , name="_login")
	 * @Template()
	 */
	public function loginAction(Request $request) {

		$form = $this -> createFormBuilder() 
		-> add('email', 'text') 
		-> add('cleSeminaire', 'integer') 
		-> add('save', 'submit') -> getForm();

		$form -> handleRequest($request);
		// Ensuite, cet objet est validé. (voir syst. de validation)
		if (/*$form -> isPost() &&*/ $form -> isValid()) {
				
			$email = $form -> get('email') -> getData();
			$CleSeminaire = $form -> get('cleSeminaire') -> getData();
			
			$verificationMail = $this -> getDoctrine() -> getRepository('SioSemiBundle:Participant') -> verificationMail($email);
			
			if ($verificationMail){
				return $this->redirect($this->generateUrl('_participant_liste'));
			}
			else 
				{return array('formulaire' => $form -> createView());}
		}

		return array('formulaire' => $form -> createView());
	}

}
