<?php

namespace Sio\SemiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/gestionnaire")
 */
class GestionnaireController extends Controller
{
    /**
     * @Route("/export")
     * @Template()
     */
    public function exportAction()
    {
    	return array();
    }
	
	/**
     * @Route("/liste" , name="_gestionnaire_liste")
     * @Template()
     */
    public function listeAction()
	{
		$lesSeminaires = $this->getDoctrine()
			->getRepository('SioSemiBundle:Seminaire')
			->findAllSeminaire();
			
			return array('lesSeminaires' =>  $lesSeminaires);
	
	}
}
