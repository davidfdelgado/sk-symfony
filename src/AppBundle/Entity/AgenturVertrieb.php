<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgenturVertrieb
 *
 * @ORM\Table(name="AGENTUR_Vertrieb")
 * @ORM\Entity
 */
class AgenturVertrieb
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="av_art", type="boolean", nullable=true)
     */
    private $avArt = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="av_status", type="boolean", nullable=false)
     */
    private $avStatus = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="av_kid", type="integer", nullable=false)
     */
    private $avKid;

    /**
     * @var string
     *
     * @ORM\Column(name="av_hotelname", type="string", length=64, nullable=false)
     */
    private $avHotelname;

    /**
     * @var string
     *
     * @ORM\Column(name="av_ansprechpartner", type="string", length=32, nullable=false)
     */
    private $avAnsprechpartner;

    /**
     * @var string
     *
     * @ORM\Column(name="av_email", type="string", length=64, nullable=false)
     */
    private $avEmail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="av_zahlungsziel", type="boolean", nullable=false)
     */
    private $avZahlungsziel = '14';

    /**
     * @var boolean
     *
     * @ORM\Column(name="av_checkin_email", type="boolean", nullable=false)
     */
    private $avCheckinEmail = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="av_afl_status", type="boolean", nullable=false)
     */
    private $avAflStatus = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="av_afl_id", type="string", length=10, nullable=false)
     */
    private $avAflId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="av_created", type="datetime", nullable=false)
     */
    private $avCreated = 'CURRENT_TIMESTAMP';

    /**
     * @var boolean
     *
     * @ORM\Column(name="av_stempel", type="boolean", nullable=true)
     */
    private $avStempel = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="av_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $avId;



    /**
     * Set avArt
     *
     * @param boolean $avArt
     *
     * @return AgenturVertrieb
     */
    public function setAvArt($avArt)
    {
        $this->avArt = $avArt;

        return $this;
    }

    /**
     * Get avArt
     *
     * @return boolean
     */
    public function getAvArt()
    {
        return $this->avArt;
    }

    /**
     * Set avStatus
     *
     * @param boolean $avStatus
     *
     * @return AgenturVertrieb
     */
    public function setAvStatus($avStatus)
    {
        $this->avStatus = $avStatus;

        return $this;
    }

    /**
     * Get avStatus
     *
     * @return boolean
     */
    public function getAvStatus()
    {
        return $this->avStatus;
    }

    /**
     * Set avKid
     *
     * @param integer $avKid
     *
     * @return AgenturVertrieb
     */
    public function setAvKid($avKid)
    {
        $this->avKid = $avKid;

        return $this;
    }

    /**
     * Get avKid
     *
     * @return integer
     */
    public function getAvKid()
    {
        return $this->avKid;
    }

    /**
     * Set avHotelname
     *
     * @param string $avHotelname
     *
     * @return AgenturVertrieb
     */
    public function setAvHotelname($avHotelname)
    {
        $this->avHotelname = $avHotelname;

        return $this;
    }

    /**
     * Get avHotelname
     *
     * @return string
     */
    public function getAvHotelname()
    {
        return $this->avHotelname;
    }

    /**
     * Set avAnsprechpartner
     *
     * @param string $avAnsprechpartner
     *
     * @return AgenturVertrieb
     */
    public function setAvAnsprechpartner($avAnsprechpartner)
    {
        $this->avAnsprechpartner = $avAnsprechpartner;

        return $this;
    }

    /**
     * Get avAnsprechpartner
     *
     * @return string
     */
    public function getAvAnsprechpartner()
    {
        return $this->avAnsprechpartner;
    }

    /**
     * Set avEmail
     *
     * @param string $avEmail
     *
     * @return AgenturVertrieb
     */
    public function setAvEmail($avEmail)
    {
        $this->avEmail = $avEmail;

        return $this;
    }

    /**
     * Get avEmail
     *
     * @return string
     */
    public function getAvEmail()
    {
        return $this->avEmail;
    }

    /**
     * Set avZahlungsziel
     *
     * @param boolean $avZahlungsziel
     *
     * @return AgenturVertrieb
     */
    public function setAvZahlungsziel($avZahlungsziel)
    {
        $this->avZahlungsziel = $avZahlungsziel;

        return $this;
    }

    /**
     * Get avZahlungsziel
     *
     * @return boolean
     */
    public function getAvZahlungsziel()
    {
        return $this->avZahlungsziel;
    }

    /**
     * Set avCheckinEmail
     *
     * @param boolean $avCheckinEmail
     *
     * @return AgenturVertrieb
     */
    public function setAvCheckinEmail($avCheckinEmail)
    {
        $this->avCheckinEmail = $avCheckinEmail;

        return $this;
    }

    /**
     * Get avCheckinEmail
     *
     * @return boolean
     */
    public function getAvCheckinEmail()
    {
        return $this->avCheckinEmail;
    }

    /**
     * Set avAflStatus
     *
     * @param boolean $avAflStatus
     *
     * @return AgenturVertrieb
     */
    public function setAvAflStatus($avAflStatus)
    {
        $this->avAflStatus = $avAflStatus;

        return $this;
    }

    /**
     * Get avAflStatus
     *
     * @return boolean
     */
    public function getAvAflStatus()
    {
        return $this->avAflStatus;
    }

    /**
     * Set avAflId
     *
     * @param string $avAflId
     *
     * @return AgenturVertrieb
     */
    public function setAvAflId($avAflId)
    {
        $this->avAflId = $avAflId;

        return $this;
    }

    /**
     * Get avAflId
     *
     * @return string
     */
    public function getAvAflId()
    {
        return $this->avAflId;
    }

    /**
     * Set avCreated
     *
     * @param \DateTime $avCreated
     *
     * @return AgenturVertrieb
     */
    public function setAvCreated($avCreated)
    {
        $this->avCreated = $avCreated;

        return $this;
    }

    /**
     * Get avCreated
     *
     * @return \DateTime
     */
    public function getAvCreated()
    {
        return $this->avCreated;
    }

    /**
     * Set avStempel
     *
     * @param boolean $avStempel
     *
     * @return AgenturVertrieb
     */
    public function setAvStempel($avStempel)
    {
        $this->avStempel = $avStempel;

        return $this;
    }

    /**
     * Get avStempel
     *
     * @return boolean
     */
    public function getAvStempel()
    {
        return $this->avStempel;
    }

    /**
     * Get avId
     *
     * @return integer
     */
    public function getAvId()
    {
        return $this->avId;
    }
}
