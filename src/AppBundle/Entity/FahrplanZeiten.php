<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FahrplanZeiten
 *
 * @ORM\Table(name="FAHRPLAN_Zeiten", uniqueConstraints={@ORM\UniqueConstraint(name="Zeit", columns={"fp_z_wt", "fp_z_bid", "fp_z_hid", "fp_z_runde"})}, indexes={@ORM\Index(name="fp_z_hid", columns={"fp_z_hid"}), @ORM\Index(name="fp_z_bid", columns={"fp_z_bid"})})
 * @ORM\Entity
 */
class FahrplanZeiten
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fp_z_typ", type="integer", nullable=false)
     */
    private $fpZTyp;

    /**
     * @var integer
     *
     * @ORM\Column(name="fp_z_wt", type="integer", nullable=false)
     */
    private $fpZWt;

    /**
     * @var integer
     *
     * @ORM\Column(name="fp_z_runde", type="integer", nullable=false)
     */
    private $fpZRunde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fp_z_time", type="time", nullable=false)
     */
    private $fpZTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="fp_z_status", type="integer", nullable=false)
     */
    private $fpZStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="fp_z_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fpZId;

    /**
     * @var \AppBundle\Entity\FahrplanBus
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FahrplanBus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fp_z_bid", referencedColumnName="fp_id")
     * })
     */
    private $fpZBid;

    /**
     * @var \AppBundle\Entity\FahrplanHaltestellen
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FahrplanHaltestellen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fp_z_hid", referencedColumnName="fp_h_id")
     * })
     */
    private $fpZHid;



    /**
     * Set fpZTyp
     *
     * @param integer $fpZTyp
     *
     * @return FahrplanZeiten
     */
    public function setFpZTyp($fpZTyp)
    {
        $this->fpZTyp = $fpZTyp;

        return $this;
    }

    /**
     * Get fpZTyp
     *
     * @return integer
     */
    public function getFpZTyp()
    {
        return $this->fpZTyp;
    }

    /**
     * Set fpZWt
     *
     * @param integer $fpZWt
     *
     * @return FahrplanZeiten
     */
    public function setFpZWt($fpZWt)
    {
        $this->fpZWt = $fpZWt;

        return $this;
    }

    /**
     * Get fpZWt
     *
     * @return integer
     */
    public function getFpZWt()
    {
        return $this->fpZWt;
    }

    /**
     * Set fpZRunde
     *
     * @param integer $fpZRunde
     *
     * @return FahrplanZeiten
     */
    public function setFpZRunde($fpZRunde)
    {
        $this->fpZRunde = $fpZRunde;

        return $this;
    }

    /**
     * Get fpZRunde
     *
     * @return integer
     */
    public function getFpZRunde()
    {
        return $this->fpZRunde;
    }

    /**
     * Set fpZTime
     *
     * @param \DateTime $fpZTime
     *
     * @return FahrplanZeiten
     */
    public function setFpZTime($fpZTime)
    {
        $this->fpZTime = $fpZTime;

        return $this;
    }

    /**
     * Get fpZTime
     *
     * @return \DateTime
     */
    public function getFpZTime()
    {
        return $this->fpZTime;
    }

    /**
     * Set fpZStatus
     *
     * @param integer $fpZStatus
     *
     * @return FahrplanZeiten
     */
    public function setFpZStatus($fpZStatus)
    {
        $this->fpZStatus = $fpZStatus;

        return $this;
    }

    /**
     * Get fpZStatus
     *
     * @return integer
     */
    public function getFpZStatus()
    {
        return $this->fpZStatus;
    }

    /**
     * Get fpZId
     *
     * @return integer
     */
    public function getFpZId()
    {
        return $this->fpZId;
    }

    /**
     * Set fpZBid
     *
     * @param \AppBundle\Entity\FahrplanBus $fpZBid
     *
     * @return FahrplanZeiten
     */
    public function setFpZBid(\AppBundle\Entity\FahrplanBus $fpZBid = null)
    {
        $this->fpZBid = $fpZBid;

        return $this;
    }

    /**
     * Get fpZBid
     *
     * @return \AppBundle\Entity\FahrplanBus
     */
    public function getFpZBid()
    {
        return $this->fpZBid;
    }

    /**
     * Set fpZHid
     *
     * @param \AppBundle\Entity\FahrplanHaltestellen $fpZHid
     *
     * @return FahrplanZeiten
     */
    public function setFpZHid(\AppBundle\Entity\FahrplanHaltestellen $fpZHid = null)
    {
        $this->fpZHid = $fpZHid;

        return $this;
    }

    /**
     * Get fpZHid
     *
     * @return \AppBundle\Entity\FahrplanHaltestellen
     */
    public function getFpZHid()
    {
        return $this->fpZHid;
    }
}
