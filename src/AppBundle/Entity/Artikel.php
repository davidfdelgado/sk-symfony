<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artikel
 *
 * @ORM\Table(name="ARTIKEL", uniqueConstraints={@ORM\UniqueConstraint(name="artikelnummer", columns={"a_artikelnummer", "a_kid", "a_art"})})
 * @ORM\Entity
 */
class Artikel
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="a_aktiv", type="boolean", nullable=false)
     */
    private $aAktiv = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="a_rabatt_aktiv", type="boolean", nullable=false)
     */
    private $aRabattAktiv = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="a_kid", type="integer", nullable=true)
     */
    private $aKid;

    /**
     * @var string
     *
     * @ORM\Column(name="a_artikelnummer", type="string", length=30, nullable=true)
     */
    private $aArtikelnummer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="a_art", type="boolean", nullable=false)
     */
    private $aArt;

    /**
     * @var string
     *
     * @ORM\Column(name="a_name", type="string", length=100, nullable=true)
     */
    private $aName;

    /**
     * @var string
     *
     * @ORM\Column(name="a_name_en", type="string", length=100, nullable=false)
     */
    private $aNameEn;

    /**
     * @var string
     *
     * @ORM\Column(name="a_preis", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $aPreis = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="a_preisorig", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $aPreisorig = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="a_sk_aktiv", type="boolean", nullable=false)
     */
    private $aSkAktiv = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="a_sk_preis", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $aSkPreis = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="a_sk_preisorig", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $aSkPreisorig = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="a_day", type="boolean", nullable=false)
     */
    private $aDay = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="a_vtext", type="integer", nullable=false)
     */
    private $aVtext;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_rtext", type="integer", nullable=false)
     */
    private $aRtext;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aId;



    /**
     * Set aAktiv
     *
     * @param boolean $aAktiv
     *
     * @return Artikel
     */
    public function setAAktiv($aAktiv)
    {
        $this->aAktiv = $aAktiv;

        return $this;
    }

    /**
     * Get aAktiv
     *
     * @return boolean
     */
    public function getAAktiv()
    {
        return $this->aAktiv;
    }

    /**
     * Set aRabattAktiv
     *
     * @param boolean $aRabattAktiv
     *
     * @return Artikel
     */
    public function setARabattAktiv($aRabattAktiv)
    {
        $this->aRabattAktiv = $aRabattAktiv;

        return $this;
    }

    /**
     * Get aRabattAktiv
     *
     * @return boolean
     */
    public function getARabattAktiv()
    {
        return $this->aRabattAktiv;
    }

    /**
     * Set aKid
     *
     * @param integer $aKid
     *
     * @return Artikel
     */
    public function setAKid($aKid)
    {
        $this->aKid = $aKid;

        return $this;
    }

    /**
     * Get aKid
     *
     * @return integer
     */
    public function getAKid()
    {
        return $this->aKid;
    }

    /**
     * Set aArtikelnummer
     *
     * @param string $aArtikelnummer
     *
     * @return Artikel
     */
    public function setAArtikelnummer($aArtikelnummer)
    {
        $this->aArtikelnummer = $aArtikelnummer;

        return $this;
    }

    /**
     * Get aArtikelnummer
     *
     * @return string
     */
    public function getAArtikelnummer()
    {
        return $this->aArtikelnummer;
    }

    /**
     * Set aArt
     *
     * @param boolean $aArt
     *
     * @return Artikel
     */
    public function setAArt($aArt)
    {
        $this->aArt = $aArt;

        return $this;
    }

    /**
     * Get aArt
     *
     * @return boolean
     */
    public function getAArt()
    {
        return $this->aArt;
    }

    /**
     * Set aName
     *
     * @param string $aName
     *
     * @return Artikel
     */
    public function setAName($aName)
    {
        $this->aName = $aName;

        return $this;
    }

    /**
     * Get aName
     *
     * @return string
     */
    public function getAName()
    {
        return $this->aName;
    }

    /**
     * Set aNameEn
     *
     * @param string $aNameEn
     *
     * @return Artikel
     */
    public function setANameEn($aNameEn)
    {
        $this->aNameEn = $aNameEn;

        return $this;
    }

    /**
     * Get aNameEn
     *
     * @return string
     */
    public function getANameEn()
    {
        return $this->aNameEn;
    }

    /**
     * Set aPreis
     *
     * @param string $aPreis
     *
     * @return Artikel
     */
    public function setAPreis($aPreis)
    {
        $this->aPreis = $aPreis;

        return $this;
    }

    /**
     * Get aPreis
     *
     * @return string
     */
    public function getAPreis()
    {
        return $this->aPreis;
    }

    /**
     * Set aPreisorig
     *
     * @param string $aPreisorig
     *
     * @return Artikel
     */
    public function setAPreisorig($aPreisorig)
    {
        $this->aPreisorig = $aPreisorig;

        return $this;
    }

    /**
     * Get aPreisorig
     *
     * @return string
     */
    public function getAPreisorig()
    {
        return $this->aPreisorig;
    }

    /**
     * Set aSkAktiv
     *
     * @param boolean $aSkAktiv
     *
     * @return Artikel
     */
    public function setASkAktiv($aSkAktiv)
    {
        $this->aSkAktiv = $aSkAktiv;

        return $this;
    }

    /**
     * Get aSkAktiv
     *
     * @return boolean
     */
    public function getASkAktiv()
    {
        return $this->aSkAktiv;
    }

    /**
     * Set aSkPreis
     *
     * @param string $aSkPreis
     *
     * @return Artikel
     */
    public function setASkPreis($aSkPreis)
    {
        $this->aSkPreis = $aSkPreis;

        return $this;
    }

    /**
     * Get aSkPreis
     *
     * @return string
     */
    public function getASkPreis()
    {
        return $this->aSkPreis;
    }

    /**
     * Set aSkPreisorig
     *
     * @param string $aSkPreisorig
     *
     * @return Artikel
     */
    public function setASkPreisorig($aSkPreisorig)
    {
        $this->aSkPreisorig = $aSkPreisorig;

        return $this;
    }

    /**
     * Get aSkPreisorig
     *
     * @return string
     */
    public function getASkPreisorig()
    {
        return $this->aSkPreisorig;
    }

    /**
     * Set aDay
     *
     * @param boolean $aDay
     *
     * @return Artikel
     */
    public function setADay($aDay)
    {
        $this->aDay = $aDay;

        return $this;
    }

    /**
     * Get aDay
     *
     * @return boolean
     */
    public function getADay()
    {
        return $this->aDay;
    }

    /**
     * Set aVtext
     *
     * @param integer $aVtext
     *
     * @return Artikel
     */
    public function setAVtext($aVtext)
    {
        $this->aVtext = $aVtext;

        return $this;
    }

    /**
     * Get aVtext
     *
     * @return integer
     */
    public function getAVtext()
    {
        return $this->aVtext;
    }

    /**
     * Set aRtext
     *
     * @param integer $aRtext
     *
     * @return Artikel
     */
    public function setARtext($aRtext)
    {
        $this->aRtext = $aRtext;

        return $this;
    }

    /**
     * Get aRtext
     *
     * @return integer
     */
    public function getARtext()
    {
        return $this->aRtext;
    }

    /**
     * Get aId
     *
     * @return integer
     */
    public function getAId()
    {
        return $this->aId;
    }
}
