<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopBestellungen
 *
 * @ORM\Table(name="SHOP_Bestellungen", uniqueConstraints={@ORM\UniqueConstraint(name="b_rnnr", columns={"b_rnnr"})}, indexes={@ORM\Index(name="b_art", columns={"b_art"}), @ORM\Index(name="b_summe", columns={"b_summe"}), @ORM\Index(name="b_booked", columns={"b_booked"})})
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ShopBestellungenRepository")
 */
class ShopBestellungen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="b_kid", type="integer", nullable=false)
     */
    private $bKid;

    /**
     * @var integer
     *
     * @ORM\Column(name="b_bnr", type="integer", nullable=true)
     */
    private $bBnr;

    /**
     * @var string
     *
     * @ORM\Column(name="b_lang", type="string", length=8, nullable=true)
     */
    private $bLang;

    /**
     * @var string
     *
     * @ORM\Column(name="b_firma", type="string", length=3, nullable=false)
     */
    private $bFirma;

    /**
     * @var string
     *
     * @ORM\Column(name="b_rnnr", type="string", length=32, nullable=true)
     */
    private $bRnnr;

    /**
     * @var string
     *
     * @ORM\Column(name="b_ref", type="string", length=64, nullable=true)
     */
    private $bRef;

    /**
     * @var integer
     *
     * @ORM\Column(name="b_art", type="integer", nullable=true)
     */
    private $bArt;
    
    private $bArtLabel;

    /**
     * @var integer
     *
     * @ORM\Column(name="b_vid", type="integer", nullable=false)
     */
    private $bVid = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="b_datum", type="date", nullable=false)
     */
    private $bDatum;

    /**
     * @var string
     *
     * @ORM\Column(name="b_summe", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $bSumme;

    /**
     * @var integer
     *
     * @ORM\Column(name="b_bezahlart", type="integer", nullable=true)
     */
    private $bBezahlart;

    /**
     * @var boolean
     *
     * @ORM\Column(name="b_bezahlt", type="boolean", nullable=true)
     */
    private $bBezahlt = '0';
    
    private $bBezahltLabel;

    /**
     * @var integer
     *
     * @ORM\Column(name="b_bhinweis", type="integer", nullable=false)
     */
    private $bBhinweis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="b_esent", type="boolean", nullable=false)
     */
    private $bEsent;

    /**
     * @var integer
     *
     * @ORM\Column(name="b_user", type="integer", nullable=true)
     */
    private $bUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="b_created", type="datetime", nullable=false)
     */
    private $bCreated = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="b_booked", type="datetime", nullable=false)
     */
    private $bBooked = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="b_payed", type="datetime", nullable=false)
     */
    private $bPayed = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="b_frist", type="datetime", nullable=false)
     */
    private $bFrist = '0000-00-00 00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="b_frist_status", type="boolean", nullable=false)
     */
    private $bFristStatus = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="b_oview", type="integer", nullable=false)
     */
    private $bOview = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="b_calc", type="boolean", nullable=false)
     */
    private $bCalc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nr", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nr;



    /**
     * Set bKid
     *
     * @param integer $bKid
     *
     * @return ShopBestellungen
     */
    public function setBKid($bKid)
    {
        $this->bKid = $bKid;

        return $this;
    }

    /**
     * Get bKid
     *
     * @return integer
     */
    public function getBKid()
    {
        return $this->bKid;
    }

    /**
     * Set bBnr
     *
     * @param integer $bBnr
     *
     * @return ShopBestellungen
     */
    public function setBBnr($bBnr)
    {
        $this->bBnr = $bBnr;

        return $this;
    }

    /**
     * Get bBnr
     *
     * @return integer
     */
    public function getBBnr()
    {
        return $this->bBnr;
    }

    /**
     * Set bLang
     *
     * @param string $bLang
     *
     * @return ShopBestellungen
     */
    public function setBLang($bLang)
    {
        $this->bLang = $bLang;

        return $this;
    }

    /**
     * Get bLang
     *
     * @return string
     */
    public function getBLang()
    {
        return $this->bLang;
    }

    /**
     * Set bFirma
     *
     * @param string $bFirma
     *
     * @return ShopBestellungen
     */
    public function setBFirma($bFirma)
    {
        $this->bFirma = $bFirma;

        return $this;
    }

    /**
     * Get bFirma
     *
     * @return string
     */
    public function getBFirma()
    {
        return $this->bFirma;
    }

    /**
     * Set bRnnr
     *
     * @param string $bRnnr
     *
     * @return ShopBestellungen
     */
    public function setBRnnr($bRnnr)
    {
        $this->bRnnr = $bRnnr;

        return $this;
    }

    /**
     * Get bRnnr
     *
     * @return string
     */
    public function getBRnnr()
    {
        return $this->bRnnr;
    }

    /**
     * Set bRef
     *
     * @param string $bRef
     *
     * @return ShopBestellungen
     */
    public function setBRef($bRef)
    {
        $this->bRef = $bRef;

        return $this;
    }

    /**
     * Get bRef
     *
     * @return string
     */
    public function getBRef()
    {
        return $this->bRef;
    }

    /**
     * Set bArt
     *
     * @param boolean $bArt
     *
     * @return ShopBestellungen
     */
    public function setBArt($bArt)
    {
        $this->bArt = $bArt;

        return $this;
    }

    /**
     * Get bArt
     *
     * @return boolean
     */
    public function getBArt()
    {
        return $this->bArt;
    }
    /**
     * Get bArtLabel
     *
     * @return string
     */
    public function getBArtLabel()
    {
	    switch($this->bArt){
		    case 1:
		    	$label = 'Anfrage';
		    	break;
		    case 2: 
		    	$label = 'Angebot';
		    	break;
		    case 3:
		    	$label = 'Rechnung';
		    	break;
		    case 4:
		    	$label = 'Hotel';
		    	break;
		    default:
		    	$label = $this->bArt;
		    	break;
	    }
        return $label;
    }

    /**
     * Set bVid
     *
     * @param integer $bVid
     *
     * @return ShopBestellungen
     */
    public function setBVid($bVid)
    {
        $this->bVid = $bVid;

        return $this;
    }

    /**
     * Get bVid
     *
     * @return integer
     */
    public function getBVid()
    {
        return $this->bVid;
    }

    /**
     * Set bDatum
     *
     * @param \DateTime $bDatum
     *
     * @return ShopBestellungen
     */
    public function setBDatum($bDatum)
    {
        $this->bDatum = $bDatum;

        return $this;
    }

    /**
     * Get bDatum
     *
     * @return \DateTime
     */
    public function getBDatum()
    {
        return $this->bDatum;
    }

    /**
     * Set bSumme
     *
     * @param string $bSumme
     *
     * @return ShopBestellungen
     */
    public function setBSumme($bSumme)
    {
        $this->bSumme = $bSumme;

        return $this;
    }

    /**
     * Get bSumme
     *
     * @return string
     */
    public function getBSumme()
    {
        return $this->bSumme;
    }

    /**
     * Set bBezahlart
     *
     * @param integer $bBezahlart
     *
     * @return ShopBestellungen
     */
    public function setBBezahlart($bBezahlart)
    {
        $this->bBezahlart = $bBezahlart;

        return $this;
    }

    /**
     * Get bBezahlart
     *
     * @return integer
     */
    public function getBBezahlart()
    {
        return $this->bBezahlart;
    }

    /**
     * Set bBezahlt
     *
     * @param boolean $bBezahlt
     *
     * @return ShopBestellungen
     */
    public function setBBezahlt($bBezahlt)
    {
        $this->bBezahlt = $bBezahlt;

        return $this;
    }

    /**
     * Get bBezahlt
     *
     * @return boolean
     */
    public function getBBezahlt()
    {
        return $this->bBezahlt;
    }

    /**
     * Get bArtLabel
     *
     * @return string
     */
    public function getBBezahltLabel()
    {
	    switch($this->bArt){
		    case 3:
		    	if($this->bBezahlt){
			    	$label = 'bezahlt';	    	
		    	} else {
			    	$label = 'offen';
		    	}
		    	break;
			default:
				$label = '';
		    	break;
	    }
        return $label;
    }
    
    /**
     * Set bBhinweis
     *
     * @param integer $bBhinweis
     *
     * @return ShopBestellungen
     */
    public function setBBhinweis($bBhinweis)
    {
        $this->bBhinweis = $bBhinweis;

        return $this;
    }

    /**
     * Get bBhinweis
     *
     * @return integer
     */
    public function getBBhinweis()
    {
        return $this->bBhinweis;
    }

    /**
     * Set bEsent
     *
     * @param boolean $bEsent
     *
     * @return ShopBestellungen
     */
    public function setBEsent($bEsent)
    {
        $this->bEsent = $bEsent;

        return $this;
    }

    /**
     * Get bEsent
     *
     * @return boolean
     */
    public function getBEsent()
    {
        return $this->bEsent;
    }

    /**
     * Set bUser
     *
     * @param integer $bUser
     *
     * @return ShopBestellungen
     */
    public function setBUser($bUser)
    {
        $this->bUser = $bUser;

        return $this;
    }

    /**
     * Get bUser
     *
     * @return integer
     */
    public function getBUser()
    {
        return $this->bUser;
    }

    /**
     * Set bCreated
     *
     * @param \DateTime $bCreated
     *
     * @return ShopBestellungen
     */
    public function setBCreated($bCreated)
    {
        $this->bCreated = $bCreated;

        return $this;
    }

    /**
     * Get bCreated
     *
     * @return \DateTime
     */
    public function getBCreated()
    {
        return $this->bCreated;
    }

    /**
     * Set bBooked
     *
     * @param \DateTime $bBooked
     *
     * @return ShopBestellungen
     */
    public function setBBooked($bBooked)
    {
        $this->bBooked = $bBooked;

        return $this;
    }

    /**
     * Get bBooked
     *
     * @return \DateTime
     */
    public function getBBooked()
    {
        return $this->bBooked;
    }

    /**
     * Set bPayed
     *
     * @param \DateTime $bPayed
     *
     * @return ShopBestellungen
     */
    public function setBPayed($bPayed)
    {
        $this->bPayed = $bPayed;

        return $this;
    }

    /**
     * Get bPayed
     *
     * @return \DateTime
     */
    public function getBPayed()
    {
        return $this->bPayed;
    }

    /**
     * Set bFrist
     *
     * @param \DateTime $bFrist
     *
     * @return ShopBestellungen
     */
    public function setBFrist($bFrist)
    {
        $this->bFrist = $bFrist;

        return $this;
    }

    /**
     * Get bFrist
     *
     * @return \DateTime
     */
    public function getBFrist()
    {
        return $this->bFrist;
    }

    /**
     * Set bFristStatus
     *
     * @param boolean $bFristStatus
     *
     * @return ShopBestellungen
     */
    public function setBFristStatus($bFristStatus)
    {
        $this->bFristStatus = $bFristStatus;

        return $this;
    }

    /**
     * Get bFristStatus
     *
     * @return boolean
     */
    public function getBFristStatus()
    {
        return $this->bFristStatus;
    }

    /**
     * Set bOview
     *
     * @param integer $bOview
     *
     * @return ShopBestellungen
     */
    public function setBOview($bOview)
    {
        $this->bOview = $bOview;

        return $this;
    }

    /**
     * Get bOview
     *
     * @return integer
     */
    public function getBOview()
    {
        return $this->bOview;
    }

    /**
     * Set bCalc
     *
     * @param boolean $bCalc
     *
     * @return ShopBestellungen
     */
    public function setBCalc($bCalc)
    {
        $this->bCalc = $bCalc;

        return $this;
    }

    /**
     * Get bCalc
     *
     * @return boolean
     */
    public function getBCalc()
    {
        return $this->bCalc;
    }

    /**
     * Get nr
     *
     * @return integer
     */
    public function getNr()
    {
        return $this->nr;
    }
}
