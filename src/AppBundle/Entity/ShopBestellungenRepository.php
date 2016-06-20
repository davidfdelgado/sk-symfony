<?php
	
	// src/AppBundle/Entity/ShopBestellungenRepository.php
	
	namespace AppBundle\Entity;
	
	use Doctrine\ORM\EntityRepository;
	
	class ShopBestellungenRepository extends EntityRepository
	{
	    public function findAlltoo($art = null){
		    
		    $arr = $this->getEntityManager(); 
		    
		    if($art){
			   $query = $arr->createQuery( 'SELECT b FROM AppBundle:SHOPBestellungen b WHERE b.bArt = '.$art.'  ORDER BY b.bCreated DESC ')->setMaxResults(100);
		    } else {
			   $query = $arr->createQuery( 'SELECT b FROM AppBundle:ShopBestellungen b ORDER BY b.bCreated DESC ')->setMaxResults(100);
		    }
		    
		    $res = $query->getResult(); 
		    
	      	$results = array();
	      	
		  	foreach($arr as $key=>$el)
	        {
		        $el['0']->pv_anzahl = $el['anzahl'];
		        
            	$results[] = $el['0'];
        	}
            return $res;
	    }	    
	}