<?php

namespace Sio\SemiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Responses;
use Symfony\Component\HttpFoundation\Request;

//use Acme\SemiBundle\Entity\Participant;



class AdminController extends Controller
{
    /**
	* @Route("/admin/", name="_admin")
	* @Template()
	*/ 
	public function indexAction()
	{
	$name = "kou kou soumaya";
	return array('name'=> $name);
	}
	
	
	

}
