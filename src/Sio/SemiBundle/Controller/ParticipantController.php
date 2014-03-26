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

	public function nombreParticipantsAction()
	{
		$nombreParticipants = $this->getDoctrine()
			->getRepository('SioSemiBundle:Participant')
			->findNbParticipant();
			
			return array('nombreParticipants' =>  $nombreParticipants);
	
	}
	
	/**
	 * @Route("/login/" , name="_login")
	 * @Template()
	 */
	public function loginAction(Request $request) {
		
		$form = $this -> createFormBuilder() 
		-> add('email', 'email') 
		-> add('cleSeminaire', 'password' )
		-> add('save', 'submit') -> getForm();

		$form -> handleRequest($request);
		// Ensuite, cet objet est validé. (voir syst. de validation)
		
		if ( $form -> isValid()) {
				
			$email = $form -> get('email') -> getData();
			$CleSeminaire = $form -> get('cleSeminaire') -> getData();
			
			$verificationMail = $this -> getDoctrine() -> getRepository('SioSemiBundle:Participant') -> verificationMail($email);
			$verificationCleSeminaire = $this -> getDoctrine() -> getRepository('SioSemiBundle:Seminaire') -> verificationCleSeminaire($CleSeminaire);
			
			if ($verificationCleSeminaire){
				if ($verificationMail==1){
					return $this->redirect($this->generateUrl('_seance_liste'));
					
				}
				elseif($verificationMail==0) 
					{
						return $this->redirect($this->generateUrl('_validationMail')) ;
						
						
					}
			}	
		}
		

		return array('login' => $form -> createView());

	}

	/**
	 * @Route("/validationMail/" , name="_validationMail")
	 * @Template()
	 */
	public function validationMailAction(Request $request) {
		
		$form = $this -> createFormBuilder() 
		-> add('email', 'email') 
		-> add('confrimation-email','email')
		-> add('cleSeminaire', 'password') 
		-> add('save', 'submit') -> getForm();

		$form -> handleRequest($request);
		
		if ( $form -> isValid()) {
			$email = $form -> get('email') -> getData();
			$confrimationEmail = $form -> get('confrimation-email') -> getData();
			$CleSeminaire = $form -> get('cleSeminaire') -> getData();
			
			$verificationCleSeminaire = $this -> getDoctrine() -> getRepository('SioSemiBundle:Seminaire') -> verificationCleSeminaire($CleSeminaire);
			
			if($email==$confrimationEmail && $verificationCleSeminaire){
				return $this->redirect($this->generateUrl('_formulaireInscription'));
			}
		}
	
	return array('validationMail' => $form -> createView());

	}



	/**
	 * @Route("/formulaireInscription/" , name="_formulaireInscription")
	 * @Template()
	 */
	 public function formulaireInscriptionAction(Request $request)
	 {
		$listeTitre =array('Professeur','IA-IPR','IEN','Autre');
		 $form = $this -> createFormBuilder() 
		-> add('nom', 'text') 
		-> add('prenom','text')
		-> add('email', 'email')
		/*-> add('academie', 'choice', array('choices' => $lesAcadamie))*/
		-> add('Academie', 'entity', array('class' => 'Sio\SemiBundle\Entity\Academie', 'property' => 'nom', 'multiple' => false,'empty_value' => 'choisissez votre Academie','required' => false ))
		-> add('Ville-personnelle', 'text')
		-> add('Ville-administrative', 'text')
		-> add('titre', 'choice', array('choices'  => $listeTitre))
		-> add('valider', 'submit') -> getForm();
		
		$form -> handleRequest($request);
		if ( $form -> isValid()) {
			$nom = $form -> get('nom') -> getData();
			$prenom = $form -> get('prenom') -> getData();
			$email = $form -> get('email') -> getData();
			$academie = $form -> get('academie') -> getData();
			$villePers = $form -> get('Ville-personnelle') -> getData();
			$villeAdm = $form -> get('Ville-administrative') -> getData();
			/*$dateCrea = DateTimeZone*/
			$titre = $form -> get('titre') -> getData();
		}
		return array('inscription' => $form -> createView());
	 }

	/**
	 * @Route("/apropos/" , name="_apropos")
	 * @Template()
	 */
	public function aproposAction() {
		$name = "apropos";
		return array('name' => $name);
	}
	 
}

