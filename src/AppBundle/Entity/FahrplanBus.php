<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FahrplanBus
 *
 * @ORM\Table(name="FAHRPLAN_Bus")
 * @ORM\Entity
 */
class FahrplanBus
{
    /**
     * @var string
     *
     * @ORM\Column(name="fp_bez", type="string", length=64, nullable=false)
     */
    private $fpBez;

    /**
     * @var integer
     *
     * @ORM\Column(name="fp_wt", type="integer", nullable=false)
     */
    private $fpWt = '8';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fp_status", type="boolean", nullable=false)
     */
    private $fpStatus = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_hinweiss", type="string", length=128, nullable=true)
     */
    private $fpHinweiss;

    /**
     * @var integer
     *
     * @ORM\Column(name="fp_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fpId;



    /**
     * Set fpBez
     *
     * @param string $fpBez
     *
     * @return FahrplanBus
     */
    public function setFpBez($fpBez)
    {
        $this->fpBez = $fpBez;

        return $this;
    }

    /**
     * Get fpBez
     *
     * @return string
     */
    public function getFpBez()
    {
        return $this->fpBez;
    }

    /**
     * Set fpWt
     *
     * @param integer $fpWt
     *
     * @return FahrplanBus
     */
    public function setFpWt($fpWt)
    {
        $this->fpWt = $fpWt;

        return $this;
    }

    /**
     * Get fpWt
     *
     * @return integer
     */
    public function getFpWt()
    {
        return $this->fpWt;
    }

    /**
     * Set fpStatus
     *
     * @param boolean $fpStatus
     *
     * @return FahrplanBus
     */
    public function setFpStatus($fpStatus)
    {
        $this->fpStatus = $fpStatus;

        return $this;
    }

    /**
     * Get fpStatus
     *
     * @return boolean
     */
    public function getFpStatus()
    {
        return $this->fpStatus;
    }

    /**
     * Set fpHinweiss
     *
     * @param string $fpHinweiss
     *
     * @return FahrplanBus
     */
    public function setFpHinweiss($fpHinweiss)
    {
        $this->fpHinweiss = $fpHinweiss;

        return $this;
    }

    /**
     * Get fpHinweiss
     *
     * @return string
     */
    public function getFpHinweiss()
    {
        return $this->fpHinweiss;
    }

    /**
     * Get fpId
     *
     * @return integer
     */
    public function getFpId()
    {
        return $this->fpId;
    }
}
