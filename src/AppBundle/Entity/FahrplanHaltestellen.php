<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FahrplanHaltestellen
 *
 * @ORM\Table(name="FAHRPLAN_Haltestellen")
 * @ORM\Entity
 */
class FahrplanHaltestellen
{
    /**
     * @var string
     *
     * @ORM\Column(name="fp_h_hinweiss", type="string", length=256, nullable=false)
     */
    private $fpHHinweiss;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fp_h_typ", type="boolean", nullable=false)
     */
    private $fpHTyp = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fp_h_status", type="boolean", nullable=false)
     */
    private $fpHStatus = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_h_bez", type="string", length=64, nullable=false)
     */
    private $fpHBez;

    /**
     * @var integer
     *
     * @ORM\Column(name="fp_h_nummer", type="integer", nullable=false)
     */
    private $fpHNummer;

    /**
     * @var float
     *
     * @ORM\Column(name="fp_h_lan", type="float", precision=10, scale=6, nullable=false)
     */
    private $fpHLan = '53.552265';

    /**
     * @var float
     *
     * @ORM\Column(name="fp_h_lon", type="float", precision=10, scale=6, nullable=false)
     */
    private $fpHLon = '10.008699';

    /**
     * @var integer
     *
     * @ORM\Column(name="fp_h_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fpHId;



    /**
     * Set fpHHinweiss
     *
     * @param string $fpHHinweiss
     *
     * @return FahrplanHaltestellen
     */
    public function setFpHHinweiss($fpHHinweiss)
    {
        $this->fpHHinweiss = $fpHHinweiss;

        return $this;
    }

    /**
     * Get fpHHinweiss
     *
     * @return string
     */
    public function getFpHHinweiss()
    {
        return $this->fpHHinweiss;
    }

    /**
     * Set fpHTyp
     *
     * @param boolean $fpHTyp
     *
     * @return FahrplanHaltestellen
     */
    public function setFpHTyp($fpHTyp)
    {
        $this->fpHTyp = $fpHTyp;

        return $this;
    }

    /**
     * Get fpHTyp
     *
     * @return boolean
     */
    public function getFpHTyp()
    {
        return $this->fpHTyp;
    }

    /**
     * Set fpHStatus
     *
     * @param boolean $fpHStatus
     *
     * @return FahrplanHaltestellen
     */
    public function setFpHStatus($fpHStatus)
    {
        $this->fpHStatus = $fpHStatus;

        return $this;
    }

    /**
     * Get fpHStatus
     *
     * @return boolean
     */
    public function getFpHStatus()
    {
        return $this->fpHStatus;
    }

    /**
     * Set fpHBez
     *
     * @param string $fpHBez
     *
     * @return FahrplanHaltestellen
     */
    public function setFpHBez($fpHBez)
    {
        $this->fpHBez = $fpHBez;

        return $this;
    }

    /**
     * Get fpHBez
     *
     * @return string
     */
    public function getFpHBez()
    {
        return $this->fpHBez;
    }

    /**
     * Set fpHNummer
     *
     * @param integer $fpHNummer
     *
     * @return FahrplanHaltestellen
     */
    public function setFpHNummer($fpHNummer)
    {
        $this->fpHNummer = $fpHNummer;

        return $this;
    }

    /**
     * Get fpHNummer
     *
     * @return integer
     */
    public function getFpHNummer()
    {
        return $this->fpHNummer;
    }

    /**
     * Set fpHLan
     *
     * @param float $fpHLan
     *
     * @return FahrplanHaltestellen
     */
    public function setFpHLan($fpHLan)
    {
        $this->fpHLan = $fpHLan;

        return $this;
    }

    /**
     * Get fpHLan
     *
     * @return float
     */
    public function getFpHLan()
    {
        return $this->fpHLan;
    }

    /**
     * Set fpHLon
     *
     * @param float $fpHLon
     *
     * @return FahrplanHaltestellen
     */
    public function setFpHLon($fpHLon)
    {
        $this->fpHLon = $fpHLon;

        return $this;
    }

    /**
     * Get fpHLon
     *
     * @return float
     */
    public function getFpHLon()
    {
        return $this->fpHLon;
    }

    /**
     * Get fpHId
     *
     * @return integer
     */
    public function getFpHId()
    {
        return $this->fpHId;
    }
}
