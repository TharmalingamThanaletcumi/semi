<?php

namespace Sio\SemiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\HttpFoundation\Responses;
use Symfony\Component\HttpFoundation\Request;

use Sio\SemiBundle\Entity\Participant;

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
		-> add('mail', 'email') 
		-> add('cle', 'password' )
		-> add('save', 'submit') -> getForm();

		$form -> handleRequest($request);
		// Ensuite, cet objet est validé. (voir syst. de validation)
		
		if ( $form -> isValid()) {
				
			$email = $form -> get('mail') -> getData();
			$CleSeminaire = $form -> get('cle') -> getData();
			
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
		
		$session = $request -> getSession();
		$form = $this -> createFormBuilder() 
		-> add('mail', 'email') 
		-> add('confirmation-mail','email')
		-> add('cle', 'password') 
		-> add('save', 'submit') -> getForm();

		$form -> handleRequest($request);
		
		if ( $form -> isValid()) {
			$email = $form -> get('mail') -> getData();
			$confirmationEmail = $form -> get('confirmation-mail') -> getData();
			$CleSeminaire = $form -> get('cle') -> getData();
			
			$verificationCleSeminaire = $this -> getDoctrine() -> getRepository('SioSemiBundle:Seminaire') -> verificationCleSeminaire($CleSeminaire);
			
			if($email==$confirmationEmail && $verificationCleSeminaire){
				$session-> set('mail',$email);
				$session-> save();
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
	 		$session = $request -> getSession();
			$mail = $session-> get('mail');
			//$participant = $this -> getDoctrine() -> getRepository('SioSemiBundle:Participant') -> findMailParticipant($mail);
			/*if(!$participant)
					$participant = new Participant();*/
		$listeTitre =array('Professeur','IA-IPR','IEN','Autre');
				
		 $form = $this -> createFormBuilder() 
		-> add('nom', 'text')
		-> add('prenom','text')
		-> add('mail', 'email')
		-> add('academie', 'entity', array('class' => 'Sio\SemiBundle\Entity\Academie', 'property' => 'nom', 'multiple' => false,'empty_value' => 'choisissez votre Academie','required' => false ))
		-> add('resAdministrative', 'text')
		-> add('resFamilliale', 'text')
		-> add('titre', 'choice', array('choices'  => $listeTitre))
		-> add('valider', 'submit') 
		-> getForm();
		
		$form -> handleRequest($request);
	
		if ( $form -> isValid()) {
				$participants = $this -> getDoctrine() -> getRepository('SioSemiBundle:Participant') -> findMailParticipant($mail);
				if(!$participants){
					$participant = new Participant();
					$participant->setNom( $form->get('nom')->getData());
					$participant->setPrenom( $form->get('prenom')->getData());
					$participant->setMail( $form->get('mail')->getData());
					$participant->setAcademie( $form->get('academie')->getData());
					$participant->setResAdministrative( $form->get('resAdministrative')->getData());
					$participant->setResFamilliale( $form->get('resFamilliale')->getData());
					$participant->setTitre( $form->get('titre')->getData());
					print_r($participant);
					
				    $em = $this->getDoctrine()->getManager();
					
				    $em->persist($participant);
				    $em->flush();
					return $this->redirect($this->generateUrl('_seance_liste'));
			
				}
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

