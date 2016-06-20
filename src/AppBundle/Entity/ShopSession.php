<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopSession
 *
 * @ORM\Table(name="SHOP_Session", uniqueConstraints={@ORM\UniqueConstraint(name="w_id", columns={"w_id"}), @ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class ShopSession
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=32, nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="s_session", type="string", length=64, nullable=false)
     */
    private $sSession;

    /**
     * @var integer
     *
     * @ORM\Column(name="s_kid", type="integer", nullable=false)
     */
    private $sKid;

    /**
     * @var string
     *
     * @ORM\Column(name="s_lang", type="string", length=8, nullable=true)
     */
    private $sLang;

    /**
     * @var string
     *
     * @ORM\Column(name="s_rnnr", type="string", length=32, nullable=false)
     */
    private $sRnnr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="s_date", type="datetime", nullable=false)
     */
    private $sDate = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="s_rdatum", type="date", nullable=false)
     */
    private $sRdatum;

    /**
     * @var integer
     *
     * @ORM\Column(name="w_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wId;



    /**
     * Set id
     *
     * @param string $id
     *
     * @return ShopSession
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sSession
     *
     * @param string $sSession
     *
     * @return ShopSession
     */
    public function setSSession($sSession)
    {
        $this->sSession = $sSession;

        return $this;
    }

    /**
     * Get sSession
     *
     * @return string
     */
    public function getSSession()
    {
        return $this->sSession;
    }

    /**
     * Set sKid
     *
     * @param integer $sKid
     *
     * @return ShopSession
     */
    public function setSKid($sKid)
    {
        $this->sKid = $sKid;

        return $this;
    }

    /**
     * Get sKid
     *
     * @return integer
     */
    public function getSKid()
    {
        return $this->sKid;
    }

    /**
     * Set sLang
     *
     * @param string $sLang
     *
     * @return ShopSession
     */
    public function setSLang($sLang)
    {
        $this->sLang = $sLang;

        return $this;
    }

    /**
     * Get sLang
     *
     * @return string
     */
    public function getSLang()
    {
        return $this->sLang;
    }

    /**
     * Set sRnnr
     *
     * @param string $sRnnr
     *
     * @return ShopSession
     */
    public function setSRnnr($sRnnr)
    {
        $this->sRnnr = $sRnnr;

        return $this;
    }

    /**
     * Get sRnnr
     *
     * @return string
     */
    public function getSRnnr()
    {
        return $this->sRnnr;
    }

    /**
     * Set sDate
     *
     * @param \DateTime $sDate
     *
     * @return ShopSession
     */
    public function setSDate($sDate)
    {
        $this->sDate = $sDate;

        return $this;
    }

    /**
     * Get sDate
     *
     * @return \DateTime
     */
    public function getSDate()
    {
        return $this->sDate;
    }

    /**
     * Set sRdatum
     *
     * @param \DateTime $sRdatum
     *
     * @return ShopSession
     */
    public function setSRdatum($sRdatum)
    {
        $this->sRdatum = $sRdatum;

        return $this;
    }

    /**
     * Get sRdatum
     *
     * @return \DateTime
     */
    public function getSRdatum()
    {
        return $this->sRdatum;
    }

    /**
     * Get wId
     *
     * @return integer
     */
    public function getWId()
    {
        return $this->wId;
    }
}
