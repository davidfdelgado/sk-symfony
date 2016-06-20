<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AgenturUser;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
	    
		// $em = $this->getDoctrine()->getManager();
					
	  //  $auuser = $em->getRepository('AppBundle:AgenturUser')->find(12);
	    
	    
        // replace this example code with whatever you need
        return $this->render('@AppBundle/default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
