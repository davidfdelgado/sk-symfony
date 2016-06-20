<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopArtikel
 *
 * @ORM\Table(name="SHOP_Artikel", uniqueConstraints={@ORM\UniqueConstraint(name="artikelnummer", columns={"artikelnummer"})})
 * @ORM\Entity
 */
class ShopArtikel
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="t_aktiv", type="boolean", nullable=false)
     */
    private $tAktiv = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="t_rabatt_aktiv", type="boolean", nullable=false)
     */
    private $tRabattAktiv = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="kategorie", type="string", length=10, nullable=true)
     */
    private $kategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="artikelnummer", type="string", length=30, nullable=true)
     */
    private $artikelnummer;

    /**
     * @var integer
     *
     * @ORM\Column(name="art", type="integer", nullable=false)
     */
    private $art;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="name_en", type="string", length=100, nullable=false)
     */
    private $nameEn;

    /**
     * @var string
     *
     * @ORM\Column(name="beschreibung", type="text", length=65535, nullable=true)
     */
    private $beschreibung;

    /**
     * @var string
     *
     * @ORM\Column(name="beschreibung_en", type="text", length=65535, nullable=false)
     */
    private $beschreibungEn;

    /**
     * @var string
     *
     * @ORM\Column(name="preis", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $preis;

    /**
     * @var string
     *
     * @ORM\Column(name="preisorig", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $preisorig = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sk_aktiv", type="boolean", nullable=false)
     */
    private $skAktiv = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="sk_preis", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $skPreis = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="sk_preisorig", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $skPreisorig = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="bild", type="string", length=30, nullable=true)
     */
    private $bild;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=5, nullable=true)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="day", type="boolean", nullable=false)
     */
    private $day = '0';

    /**
     * @var array
     *
     * @ORM\Column(name="unikat", type="simple_array", nullable=false)
     */
    private $unikat;

    /**
     * @var integer
     *
     * @ORM\Column(name="mwst", type="integer", nullable=false)
     */
    private $mwst;

    /**
     * @var integer
     *
     * @ORM\Column(name="vtext", type="integer", nullable=false)
     */
    private $vtext;

    /**
     * @var integer
     *
     * @ORM\Column(name="vtext_en", type="integer", nullable=false)
     */
    private $vtextEn;

    /**
     * @var integer
     *
     * @ORM\Column(name="rtext", type="integer", nullable=false)
     */
    private $rtext;

    /**
     * @var integer
     *
     * @ORM\Column(name="rtext_en", type="integer", nullable=false)
     */
    private $rtextEn;

    /**
     * @var string
     *
     * @ORM\Column(name="t_link", type="string", length=64, nullable=true)
     */
    private $tLink;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set tAktiv
     *
     * @param boolean $tAktiv
     *
     * @return ShopArtikel
     */
    public function setTAktiv($tAktiv)
    {
        $this->tAktiv = $tAktiv;

        return $this;
    }

    /**
     * Get tAktiv
     *
     * @return boolean
     */
    public function getTAktiv()
    {
        return $this->tAktiv;
    }

    /**
     * Set tRabattAktiv
     *
     * @param boolean $tRabattAktiv
     *
     * @return ShopArtikel
     */
    public function setTRabattAktiv($tRabattAktiv)
    {
        $this->tRabattAktiv = $tRabattAktiv;

        return $this;
    }

    /**
     * Get tRabattAktiv
     *
     * @return boolean
     */
    public function getTRabattAktiv()
    {
        return $this->tRabattAktiv;
    }

    /**
     * Set kategorie
     *
     * @param string $kategorie
     *
     * @return ShopArtikel
     */
    public function setKategorie($kategorie)
    {
        $this->kategorie = $kategorie;

        return $this;
    }

    /**
     * Get kategorie
     *
     * @return string
     */
    public function getKategorie()
    {
        return $this->kategorie;
    }

    /**
     * Set artikelnummer
     *
     * @param string $artikelnummer
     *
     * @return ShopArtikel
     */
    public function setArtikelnummer($artikelnummer)
    {
        $this->artikelnummer = $artikelnummer;

        return $this;
    }

    /**
     * Get artikelnummer
     *
     * @return string
     */
    public function getArtikelnummer()
    {
        return $this->artikelnummer;
    }

    /**
     * Set art
     *
     * @param integer $art
     *
     * @return ShopArtikel
     */
    public function setArt($art)
    {
        $this->art = $art;

        return $this;
    }

    /**
     * Get art
     *
     * @return integer
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ShopArtikel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set nameEn
     *
     * @param string $nameEn
     *
     * @return ShopArtikel
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;

        return $this;
    }

    /**
     * Get nameEn
     *
     * @return string
     */
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * Set beschreibung
     *
     * @param string $beschreibung
     *
     * @return ShopArtikel
     */
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;

        return $this;
    }

    /**
     * Get beschreibung
     *
     * @return string
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    /**
     * Set beschreibungEn
     *
     * @param string $beschreibungEn
     *
     * @return ShopArtikel
     */
    public function setBeschreibungEn($beschreibungEn)
    {
        $this->beschreibungEn = $beschreibungEn;

        return $this;
    }

    /**
     * Get beschreibungEn
     *
     * @return string
     */
    public function getBeschreibungEn()
    {
        return $this->beschreibungEn;
    }

    /**
     * Set preis
     *
     * @param string $preis
     *
     * @return ShopArtikel
     */
    public function setPreis($preis)
    {
        $this->preis = $preis;

        return $this;
    }

    /**
     * Get preis
     *
     * @return string
     */
    public function getPreis()
    {
        return $this->preis;
    }

    /**
     * Set preisorig
     *
     * @param string $preisorig
     *
     * @return ShopArtikel
     */
    public function setPreisorig($preisorig)
    {
        $this->preisorig = $preisorig;

        return $this;
    }

    /**
     * Get preisorig
     *
     * @return string
     */
    public function getPreisorig()
    {
        return $this->preisorig;
    }

    /**
     * Set skAktiv
     *
     * @param boolean $skAktiv
     *
     * @return ShopArtikel
     */
    public function setSkAktiv($skAktiv)
    {
        $this->skAktiv = $skAktiv;

        return $this;
    }

    /**
     * Get skAktiv
     *
     * @return boolean
     */
    public function getSkAktiv()
    {
        return $this->skAktiv;
    }

    /**
     * Set skPreis
     *
     * @param string $skPreis
     *
     * @return ShopArtikel
     */
    public function setSkPreis($skPreis)
    {
        $this->skPreis = $skPreis;

        return $this;
    }

    /**
     * Get skPreis
     *
     * @return string
     */
    public function getSkPreis()
    {
        return $this->skPreis;
    }

    /**
     * Set skPreisorig
     *
     * @param string $skPreisorig
     *
     * @return ShopArtikel
     */
    public function setSkPreisorig($skPreisorig)
    {
        $this->skPreisorig = $skPreisorig;

        return $this;
    }

    /**
     * Get skPreisorig
     *
     * @return string
     */
    public function getSkPreisorig()
    {
        return $this->skPreisorig;
    }

    /**
     * Set bild
     *
     * @param string $bild
     *
     * @return ShopArtikel
     */
    public function setBild($bild)
    {
        $this->bild = $bild;

        return $this;
    }

    /**
     * Get bild
     *
     * @return string
     */
    public function getBild()
    {
        return $this->bild;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return ShopArtikel
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set day
     *
     * @param boolean $day
     *
     * @return ShopArtikel
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return boolean
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set unikat
     *
     * @param array $unikat
     *
     * @return ShopArtikel
     */
    public function setUnikat($unikat)
    {
        $this->unikat = $unikat;

        return $this;
    }

    /**
     * Get unikat
     *
     * @return array
     */
    public function getUnikat()
    {
        return $this->unikat;
    }

    /**
     * Set mwst
     *
     * @param integer $mwst
     *
     * @return ShopArtikel
     */
    public function setMwst($mwst)
    {
        $this->mwst = $mwst;

        return $this;
    }

    /**
     * Get mwst
     *
     * @return integer
     */
    public function getMwst()
    {
        return $this->mwst;
    }

    /**
     * Set vtext
     *
     * @param integer $vtext
     *
     * @return ShopArtikel
     */
    public function setVtext($vtext)
    {
        $this->vtext = $vtext;

        return $this;
    }

    /**
     * Get vtext
     *
     * @return integer
     */
    public function getVtext()
    {
        return $this->vtext;
    }

    /**
     * Set vtextEn
     *
     * @param integer $vtextEn
     *
     * @return ShopArtikel
     */
    public function setVtextEn($vtextEn)
    {
        $this->vtextEn = $vtextEn;

        return $this;
    }

    /**
     * Get vtextEn
     *
     * @return integer
     */
    public function getVtextEn()
    {
        return $this->vtextEn;
    }

    /**
     * Set rtext
     *
     * @param integer $rtext
     *
     * @return ShopArtikel
     */
    public function setRtext($rtext)
    {
        $this->rtext = $rtext;

        return $this;
    }

    /**
     * Get rtext
     *
     * @return integer
     */
    public function getRtext()
    {
        return $this->rtext;
    }

    /**
     * Set rtextEn
     *
     * @param integer $rtextEn
     *
     * @return ShopArtikel
     */
    public function setRtextEn($rtextEn)
    {
        $this->rtextEn = $rtextEn;

        return $this;
    }

    /**
     * Get rtextEn
     *
     * @return integer
     */
    public function getRtextEn()
    {
        return $this->rtextEn;
    }

    /**
     * Set tLink
     *
     * @param string $tLink
     *
     * @return ShopArtikel
     */
    public function setTLink($tLink)
    {
        $this->tLink = $tLink;

        return $this;
    }

    /**
     * Get tLink
     *
     * @return string
     */
    public function getTLink()
    {
        return $this->tLink;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
