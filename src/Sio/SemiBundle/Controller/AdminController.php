<?php

namespace Sio\SemiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Responses;
use Symfony\Component\HttpFoundation\Request;




/**
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
	* @Route("/nom/{name}", name="_admin_nom")
	* @Template()
	*/ 
	public function indexAction($name)
	{
	
	return array('name'=> $name);
	}
	
	
	

}
