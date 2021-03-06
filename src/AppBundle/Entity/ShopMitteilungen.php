<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopMitteilungen
 *
 * @ORM\Table(name="SHOP_Mitteilungen", indexes={@ORM\Index(name="m_bid", columns={"m_bid"}), @ORM\Index(name="m_art", columns={"m_art"})})
 * @ORM\Entity
 */
class ShopMitteilungen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="m_bid", type="integer", nullable=false)
     */
    private $mBid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="m_created", type="datetime", nullable=false)
     */
    private $mCreated = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="m_value", type="text", length=65535, nullable=false)
     */
    private $mValue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="m_art", type="boolean", nullable=false)
     */
    private $mArt;

    /**
     * @var integer
     *
     * @ORM\Column(name="m_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mId;



    /**
     * Set mBid
     *
     * @param integer $mBid
     *
     * @return ShopMitteilungen
     */
    public function setMBid($mBid)
    {
        $this->mBid = $mBid;

        return $this;
    }

    /**
     * Get mBid
     *
     * @return integer
     */
    public function getMBid()
    {
        return $this->mBid;
    }

    /**
     * Set mCreated
     *
     * @param \DateTime $mCreated
     *
     * @return ShopMitteilungen
     */
    public function setMCreated($mCreated)
    {
        $this->mCreated = $mCreated;

        return $this;
    }

    /**
     * Get mCreated
     *
     * @return \DateTime
     */
    public function getMCreated()
    {
        return $this->mCreated;
    }

    /**
     * Set mValue
     *
     * @param string $mValue
     *
     * @return ShopMitteilungen
     */
    public function setMValue($mValue)
    {
        $this->mValue = $mValue;

        return $this;
    }

    /**
     * Get mValue
     *
     * @return string
     */
    public function getMValue()
    {
        return $this->mValue;
    }

    /**
     * Set mArt
     *
     * @param boolean $mArt
     *
     * @return ShopMitteilungen
     */
    public function setMArt($mArt)
    {
        $this->mArt = $mArt;

        return $this;
    }

    /**
     * Get mArt
     *
     * @return boolean
     */
    public function getMArt()
    {
        return $this->mArt;
    }

    /**
     * Get mId
     *
     * @return integer
     */
    public function getMId()
    {
        return $this->mId;
    }
}
