<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AgenturUser;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VorgaengeController extends Controller
{

    public function indexAction(Request $request)
    {
	    
		$em = $this->getDoctrine()->getManager();
					
		$allvorgaenge = $em->getRepository('AppBundle:ShopBestellungen')->findAlltoo();
	    
	    $table_vorgange['head'] = array();
	    $table_vorgange['body'] = array();
	    
	    $table_vorgange['head'][]	=	"Id";
	    $table_vorgange['head'][]	=	"Rechnungsnummer";
	    $table_vorgange['head'][]	=	"Art";
	    $table_vorgange['head'][]	=	"Status";
	    $table_vorgange['head'][]	=	"Erstellt";
	    
	    foreach($allvorgaenge as $v){
			$zeile = array();
			
			$zeile[] = $v->getNr();
			$zeile[] = $v->getBRnnr();
			$zeile[] = $v->getBArtLabel();
			$zeile[] = $v->getBBezahltLabel();
			$zeile[] = $v->getBCreated()->format('d.m.Y H:i');
			
			
		    $table_vorgange['body'][]	=	$zeile;
	
	    }
	    
        // replace this example code with whatever you need
 
        $theme = array();
        	
        	$col = array();
        			
	        		$table = array();
	        		$table[] = array('type' => 'table', 'class' => 'table table-striped dataTable', 'content' => $table_vorgange);
	        		
        		$box = array();
        		$box[] = array('type' => 'div', 'class' => 'box', 'title' => 'Alle Vorgänge in einer Übersicht', 'content' => 'asdasd', 'data' => $table);
				
        	$col[] = array('type' => 'div', 'class' => 'col-md-12', 'content' => 'col1', 'data' => $box);
        	
        $theme[] = array('type' => 'div', 'class' => 'row', 'content' => '', 'data' => $col);

        return $this->render('AvanzuAdminThemeBundle:default:index.html.twig', array('theme' => $theme));
    }
    
    public function indexRechnungenAction(Request $request)
    {
	    
		$em = $this->getDoctrine()->getManager();
					
		$allvorgaenge = $em->getRepository('AppBundle:ShopBestellungen')->findAlltoo(3);
	    
	    $table_vorgange['head'] = array();
	    $table_vorgange['body'] = array();
	    
	    $table_vorgange['head'][]	=	"Id";
	    $table_vorgange['head'][]	=	"Rechnungsnummer";
	    $table_vorgange['head'][]	=	"Art";
	    $table_vorgange['head'][]	=	"Status";
	    $table_vorgange['head'][]	=	"Erstellt";
	    
	    foreach($allvorgaenge as $v){
			$zeile = array();
			
			$zeile[] = $v->getNr();
			$zeile[] = $v->getBRnnr();
			$zeile[] = $v->getBArtLabel();
			$zeile[] = $v->getBBezahltLabel();
			$zeile[] = $v->getBCreated()->format('d.m.Y H:i');
			
			
		    $table_vorgange['body'][]	=	$zeile;
	
	    }
	    
        // replace this example code with whatever you need
 
        $theme = array();
        	
        	$col = array();
        			
	        		$table = array();
	        		$table[] = array('type' => 'table', 'class' => 'table table-striped dataTable', 'content' => $table_vorgange);
	        		
        		$box = array();
        		$box[] = array('type' => 'div', 'class' => 'box', 'title' => 'Alle Rechnungen in einer Übersicht', 'content' => '', 'data' => $table);
				
        	$col[] = array('type' => 'div', 'class' => 'col-md-12', 'content' => 'col1', 'data' => $box);
        	
        $theme[] = array('type' => 'div', 'class' => 'row', 'content' => '', 'data' => $col);

        return $this->render('AvanzuAdminThemeBundle:default:index.html.twig', array('theme' => $theme));
    }
    
    public function indexAnfragenAction(Request $request)
    {
	    
		$em = $this->getDoctrine()->getManager();
					
		$allvorgaenge = $em->getRepository('AppBundle:ShopBestellungen')->findAlltoo(1);
	    
	    $table_vorgange['head'] = array();
	    $table_vorgange['body'] = array();
	    
	    $table_vorgange['head'][]	=	"Id";
	    $table_vorgange['head'][]	=	"Rechnungsnummer";
	    $table_vorgange['head'][]	=	"Art";
	    $table_vorgange['head'][]	=	"Status";
	    $table_vorgange['head'][]	=	"Erstellt";
	    
	    foreach($allvorgaenge as $v){
			$zeile = array();
			
			$zeile[] = $v->getNr();
			$zeile[] = $v->getBRnnr();
			$zeile[] = $v->getBArtLabel();
			$zeile[] = $v->getBBezahltLabel();
			$zeile[] = $v->getBCreated()->format('d.m.Y H:i');
			
			
		    $table_vorgange['body'][]	=	$zeile;
	
	    }
	    
        // replace this example code with whatever you need
 
        $theme = array();
        	
        	$col = array();
        			
	        		$table = array();
	        		$table[] = array('type' => 'table', 'class' => 'table table-striped dataTable', 'content' => $table_vorgange);
	        		
        		$box = array();
        		$box[] = array('type' => 'div', 'class' => 'box', 'title' => 'Alle Anfragen in einer Übersicht', 'content' => '', 'data' => $table);
				
        	$col[] = array('type' => 'div', 'class' => 'col-md-12', 'content' => 'col1', 'data' => $box);
        	
        $theme[] = array('type' => 'div', 'class' => 'row', 'content' => '', 'data' => $col);

        return $this->render('AvanzuAdminThemeBundle:default:index.html.twig', array('theme' => $theme));
    }
    
    public function indexAngeboteAction(Request $request)
    {
	    
		$em = $this->getDoctrine()->getManager();
					
		$allvorgaenge = $em->getRepository('AppBundle:ShopBestellungen')->findAlltoo(2);
	    
	    $table_vorgange['head'] = array();
	    $table_vorgange['body'] = array();
	    
	    $table_vorgange['head'][]	=	"Id";
	    $table_vorgange['head'][]	=	"Rechnungsnummer";
	    $table_vorgange['head'][]	=	"Art";
	    $table_vorgange['head'][]	=	"Status";
	    $table_vorgange['head'][]	=	"Erstellt";
	    
	    foreach($allvorgaenge as $v){
			$zeile = array();
			
			$zeile[] = $v->getNr();
			$zeile[] = $v->getBRnnr();
			$zeile[] = $v->getBArtLabel();
			$zeile[] = $v->getBBezahltLabel();
			$zeile[] = $v->getBCreated()->format('d.m.Y H:i');
			
			
		    $table_vorgange['body'][]	=	$zeile;
	
	    }
	    
        // replace this example code with whatever you need
 
        $theme = array();
        	
        	$col = array();
        			
	        		$table = array();
	        		$table[] = array('type' => 'table', 'class' => 'table table-striped dataTable', 'content' => $table_vorgange);
	        		
        		$box = array();
        		$box[] = array('type' => 'div', 'class' => 'box', 'title' => 'Alle Angebote in einer Übersicht', 'content' => '', 'data' => $table);
				
        	$col[] = array('type' => 'div', 'class' => 'col-md-12', 'content' => 'col1', 'data' => $box);
        	
        $theme[] = array('type' => 'div', 'class' => 'row', 'content' => '', 'data' => $col);

        return $this->render('AvanzuAdminThemeBundle:default:index.html.twig', array('theme' => $theme));
    }
}
