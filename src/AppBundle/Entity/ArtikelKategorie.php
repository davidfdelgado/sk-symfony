<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArtikelKategorie
 *
 * @ORM\Table(name="ARTIKEL_Kategorie", uniqueConstraints={@ORM\UniqueConstraint(name="Artikelkurz", columns={"a_k_oid", "a_k_name_kurz"})}, indexes={@ORM\Index(name="a_k_art", columns={"a_k_art"}), @ORM\Index(name="a_k_anbieter_id", columns={"a_k_anbieter_id"})})
 * @ORM\Entity
 */
class ArtikelKategorie
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="a_k_aktiv", type="boolean", nullable=false)
     */
    private $aKAktiv = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_oid", type="integer", nullable=false)
     */
    private $aKOid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="a_k_ansicht", type="boolean", nullable=false)
     */
    private $aKAnsicht = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_druck", type="integer", nullable=false)
     */
    private $aKDruck = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="a_k_anbieter", type="string", length=64, nullable=false)
     */
    private $aKAnbieter;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_anbieter_id", type="integer", nullable=false)
     */
    private $aKAnbieterId;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_konto", type="integer", nullable=true)
     */
    private $aKKonto;

    /**
     * @var string
     *
     * @ORM\Column(name="a_k_name", type="string", length=64, nullable=false)
     */
    private $aKName;

    /**
     * @var string
     *
     * @ORM\Column(name="a_k_name_en", type="string", length=64, nullable=false)
     */
    private $aKNameEn;

    /**
     * @var string
     *
     * @ORM\Column(name="a_k_name_kurz", type="string", length=12, nullable=false)
     */
    private $aKNameKurz;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_sort", type="integer", nullable=false)
     */
    private $aKSort;

    /**
     * @var string
     *
     * @ORM\Column(name="a_k_ueberschrift", type="string", length=64, nullable=false)
     */
    private $aKUeberschrift;

    /**
     * @var string
     *
     * @ORM\Column(name="a_k_ueberschrift_en", type="string", length=64, nullable=false)
     */
    private $aKUeberschriftEn;

    /**
     * @var string
     *
     * @ORM\Column(name="a_k_beschreibung", type="string", length=2048, nullable=false)
     */
    private $aKBeschreibung;

    /**
     * @var string
     *
     * @ORM\Column(name="a_k_beschreibung_en", type="string", length=2048, nullable=true)
     */
    private $aKBeschreibungEn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="a_k_time", type="boolean", nullable=false)
     */
    private $aKTime = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="a_k_dauer", type="time", nullable=false)
     */
    private $aKDauer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="a_k_voucher", type="boolean", nullable=false)
     */
    private $aKVoucher = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="a_k_vertrieb", type="boolean", nullable=false)
     */
    private $aKVertrieb = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="a_k_position_darst", type="boolean", nullable=false)
     */
    private $aKPositionDarst = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_abrechnung", type="integer", nullable=true)
     */
    private $aKAbrechnung = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_vtext", type="integer", nullable=false)
     */
    private $aKVtext;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_rtext", type="integer", nullable=false)
     */
    private $aKRtext;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_mwst", type="integer", nullable=false)
     */
    private $aKMwst = '19';

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aKId;

    /**
     * @var \AppBundle\Entity\ArtikelKategorieArt
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ArtikelKategorieArt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="a_k_art", referencedColumnName="a_a_id")
     * })
     */
    private $aKArt;



    /**
     * Set aKAktiv
     *
     * @param boolean $aKAktiv
     *
     * @return ArtikelKategorie
     */
    public function setAKAktiv($aKAktiv)
    {
        $this->aKAktiv = $aKAktiv;

        return $this;
    }

    /**
     * Get aKAktiv
     *
     * @return boolean
     */
    public function getAKAktiv()
    {
        return $this->aKAktiv;
    }

    /**
     * Set aKOid
     *
     * @param integer $aKOid
     *
     * @return ArtikelKategorie
     */
    public function setAKOid($aKOid)
    {
        $this->aKOid = $aKOid;

        return $this;
    }

    /**
     * Get aKOid
     *
     * @return integer
     */
    public function getAKOid()
    {
        return $this->aKOid;
    }

    /**
     * Set aKAnsicht
     *
     * @param boolean $aKAnsicht
     *
     * @return ArtikelKategorie
     */
    public function setAKAnsicht($aKAnsicht)
    {
        $this->aKAnsicht = $aKAnsicht;

        return $this;
    }

    /**
     * Get aKAnsicht
     *
     * @return boolean
     */
    public function getAKAnsicht()
    {
        return $this->aKAnsicht;
    }

    /**
     * Set aKDruck
     *
     * @param integer $aKDruck
     *
     * @return ArtikelKategorie
     */
    public function setAKDruck($aKDruck)
    {
        $this->aKDruck = $aKDruck;

        return $this;
    }

    /**
     * Get aKDruck
     *
     * @return integer
     */
    public function getAKDruck()
    {
        return $this->aKDruck;
    }

    /**
     * Set aKAnbieter
     *
     * @param string $aKAnbieter
     *
     * @return ArtikelKategorie
     */
    public function setAKAnbieter($aKAnbieter)
    {
        $this->aKAnbieter = $aKAnbieter;

        return $this;
    }

    /**
     * Get aKAnbieter
     *
     * @return string
     */
    public function getAKAnbieter()
    {
        return $this->aKAnbieter;
    }

    /**
     * Set aKAnbieterId
     *
     * @param integer $aKAnbieterId
     *
     * @return ArtikelKategorie
     */
    public function setAKAnbieterId($aKAnbieterId)
    {
        $this->aKAnbieterId = $aKAnbieterId;

        return $this;
    }

    /**
     * Get aKAnbieterId
     *
     * @return integer
     */
    public function getAKAnbieterId()
    {
        return $this->aKAnbieterId;
    }

    /**
     * Set aKKonto
     *
     * @param integer $aKKonto
     *
     * @return ArtikelKategorie
     */
    public function setAKKonto($aKKonto)
    {
        $this->aKKonto = $aKKonto;

        return $this;
    }

    /**
     * Get aKKonto
     *
     * @return integer
     */
    public function getAKKonto()
    {
        return $this->aKKonto;
    }

    /**
     * Set aKName
     *
     * @param string $aKName
     *
     * @return ArtikelKategorie
     */
    public function setAKName($aKName)
    {
        $this->aKName = $aKName;

        return $this;
    }

    /**
     * Get aKName
     *
     * @return string
     */
    public function getAKName()
    {
        return $this->aKName;
    }

    /**
     * Set aKNameEn
     *
     * @param string $aKNameEn
     *
     * @return ArtikelKategorie
     */
    public function setAKNameEn($aKNameEn)
    {
        $this->aKNameEn = $aKNameEn;

        return $this;
    }

    /**
     * Get aKNameEn
     *
     * @return string
     */
    public function getAKNameEn()
    {
        return $this->aKNameEn;
    }

    /**
     * Set aKNameKurz
     *
     * @param string $aKNameKurz
     *
     * @return ArtikelKategorie
     */
    public function setAKNameKurz($aKNameKurz)
    {
        $this->aKNameKurz = $aKNameKurz;

        return $this;
    }

    /**
     * Get aKNameKurz
     *
     * @return string
     */
    public function getAKNameKurz()
    {
        return $this->aKNameKurz;
    }

    /**
     * Set aKSort
     *
     * @param integer $aKSort
     *
     * @return ArtikelKategorie
     */
    public function setAKSort($aKSort)
    {
        $this->aKSort = $aKSort;

        return $this;
    }

    /**
     * Get aKSort
     *
     * @return integer
     */
    public function getAKSort()
    {
        return $this->aKSort;
    }

    /**
     * Set aKUeberschrift
     *
     * @param string $aKUeberschrift
     *
     * @return ArtikelKategorie
     */
    public function setAKUeberschrift($aKUeberschrift)
    {
        $this->aKUeberschrift = $aKUeberschrift;

        return $this;
    }

    /**
     * Get aKUeberschrift
     *
     * @return string
     */
    public function getAKUeberschrift()
    {
        return $this->aKUeberschrift;
    }

    /**
     * Set aKUeberschriftEn
     *
     * @param string $aKUeberschriftEn
     *
     * @return ArtikelKategorie
     */
    public function setAKUeberschriftEn($aKUeberschriftEn)
    {
        $this->aKUeberschriftEn = $aKUeberschriftEn;

        return $this;
    }

    /**
     * Get aKUeberschriftEn
     *
     * @return string
     */
    public function getAKUeberschriftEn()
    {
        return $this->aKUeberschriftEn;
    }

    /**
     * Set aKBeschreibung
     *
     * @param string $aKBeschreibung
     *
     * @return ArtikelKategorie
     */
    public function setAKBeschreibung($aKBeschreibung)
    {
        $this->aKBeschreibung = $aKBeschreibung;

        return $this;
    }

    /**
     * Get aKBeschreibung
     *
     * @return string
     */
    public function getAKBeschreibung()
    {
        return $this->aKBeschreibung;
    }

    /**
     * Set aKBeschreibungEn
     *
     * @param string $aKBeschreibungEn
     *
     * @return ArtikelKategorie
     */
    public function setAKBeschreibungEn($aKBeschreibungEn)
    {
        $this->aKBeschreibungEn = $aKBeschreibungEn;

        return $this;
    }

    /**
     * Get aKBeschreibungEn
     *
     * @return string
     */
    public function getAKBeschreibungEn()
    {
        return $this->aKBeschreibungEn;
    }

    /**
     * Set aKTime
     *
     * @param boolean $aKTime
     *
     * @return ArtikelKategorie
     */
    public function setAKTime($aKTime)
    {
        $this->aKTime = $aKTime;

        return $this;
    }

    /**
     * Get aKTime
     *
     * @return boolean
     */
    public function getAKTime()
    {
        return $this->aKTime;
    }

    /**
     * Set aKDauer
     *
     * @param \DateTime $aKDauer
     *
     * @return ArtikelKategorie
     */
    public function setAKDauer($aKDauer)
    {
        $this->aKDauer = $aKDauer;

        return $this;
    }

    /**
     * Get aKDauer
     *
     * @return \DateTime
     */
    public function getAKDauer()
    {
        return $this->aKDauer;
    }

    /**
     * Set aKVoucher
     *
     * @param boolean $aKVoucher
     *
     * @return ArtikelKategorie
     */
    public function setAKVoucher($aKVoucher)
    {
        $this->aKVoucher = $aKVoucher;

        return $this;
    }

    /**
     * Get aKVoucher
     *
     * @return boolean
     */
    public function getAKVoucher()
    {
        return $this->aKVoucher;
    }

    /**
     * Set aKVertrieb
     *
     * @param boolean $aKVertrieb
     *
     * @return ArtikelKategorie
     */
    public function setAKVertrieb($aKVertrieb)
    {
        $this->aKVertrieb = $aKVertrieb;

        return $this;
    }

    /**
     * Get aKVertrieb
     *
     * @return boolean
     */
    public function getAKVertrieb()
    {
        return $this->aKVertrieb;
    }

    /**
     * Set aKPositionDarst
     *
     * @param boolean $aKPositionDarst
     *
     * @return ArtikelKategorie
     */
    public function setAKPositionDarst($aKPositionDarst)
    {
        $this->aKPositionDarst = $aKPositionDarst;

        return $this;
    }

    /**
     * Get aKPositionDarst
     *
     * @return boolean
     */
    public function getAKPositionDarst()
    {
        return $this->aKPositionDarst;
    }

    /**
     * Set aKAbrechnung
     *
     * @param integer $aKAbrechnung
     *
     * @return ArtikelKategorie
     */
    public function setAKAbrechnung($aKAbrechnung)
    {
        $this->aKAbrechnung = $aKAbrechnung;

        return $this;
    }

    /**
     * Get aKAbrechnung
     *
     * @return integer
     */
    public function getAKAbrechnung()
    {
        return $this->aKAbrechnung;
    }

    /**
     * Set aKVtext
     *
     * @param integer $aKVtext
     *
     * @return ArtikelKategorie
     */
    public function setAKVtext($aKVtext)
    {
        $this->aKVtext = $aKVtext;

        return $this;
    }

    /**
     * Get aKVtext
     *
     * @return integer
     */
    public function getAKVtext()
    {
        return $this->aKVtext;
    }

    /**
     * Set aKRtext
     *
     * @param integer $aKRtext
     *
     * @return ArtikelKategorie
     */
    public function setAKRtext($aKRtext)
    {
        $this->aKRtext = $aKRtext;

        return $this;
    }

    /**
     * Get aKRtext
     *
     * @return integer
     */
    public function getAKRtext()
    {
        return $this->aKRtext;
    }

    /**
     * Set aKMwst
     *
     * @param integer $aKMwst
     *
     * @return ArtikelKategorie
     */
    public function setAKMwst($aKMwst)
    {
        $this->aKMwst = $aKMwst;

        return $this;
    }

    /**
     * Get aKMwst
     *
     * @return integer
     */
    public function getAKMwst()
    {
        return $this->aKMwst;
    }

    /**
     * Get aKId
     *
     * @return integer
     */
    public function getAKId()
    {
        return $this->aKId;
    }

    /**
     * Set aKArt
     *
     * @param \AppBundle\Entity\ArtikelKategorieArt $aKArt
     *
     * @return ArtikelKategorie
     */
    public function setAKArt(\AppBundle\Entity\ArtikelKategorieArt $aKArt = null)
    {
        $this->aKArt = $aKArt;

        return $this;
    }

    /**
     * Get aKArt
     *
     * @return \AppBundle\Entity\ArtikelKategorieArt
     */
    public function getAKArt()
    {
        return $this->aKArt;
    }
}
