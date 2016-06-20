<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopArtikelKategorie
 *
 * @ORM\Table(name="SHOP_Artikel_Kategorie")
 * @ORM\Entity
 */
class ShopArtikelKategorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_oid", type="integer", nullable=false)
     */
    private $aKOid;

    /**
     * @var string
     *
     * @ORM\Column(name="a_k_name", type="string", length=64, nullable=false)
     */
    private $aKName;

    /**
     * @var string
     *
     * @ORM\Column(name="a_k_name_kurz", type="string", length=12, nullable=false)
     */
    private $aKNameKurz;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_vtext", type="integer", nullable=false)
     */
    private $aKVtext;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_vtext_en", type="integer", nullable=false)
     */
    private $aKVtextEn;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_rtext", type="integer", nullable=false)
     */
    private $aKRtext;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_rtext_en", type="integer", nullable=false)
     */
    private $aKRtextEn;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_rabatt1", type="integer", nullable=false)
     */
    private $aKRabatt1;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_rabatt2", type="integer", nullable=false)
     */
    private $aKRabatt2;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_k_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aKId;



    /**
     * Set aKOid
     *
     * @param integer $aKOid
     *
     * @return ShopArtikelKategorie
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
     * Set aKName
     *
     * @param string $aKName
     *
     * @return ShopArtikelKategorie
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
     * Set aKNameKurz
     *
     * @param string $aKNameKurz
     *
     * @return ShopArtikelKategorie
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
     * Set aKVtext
     *
     * @param integer $aKVtext
     *
     * @return ShopArtikelKategorie
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
     * Set aKVtextEn
     *
     * @param integer $aKVtextEn
     *
     * @return ShopArtikelKategorie
     */
    public function setAKVtextEn($aKVtextEn)
    {
        $this->aKVtextEn = $aKVtextEn;

        return $this;
    }

    /**
     * Get aKVtextEn
     *
     * @return integer
     */
    public function getAKVtextEn()
    {
        return $this->aKVtextEn;
    }

    /**
     * Set aKRtext
     *
     * @param integer $aKRtext
     *
     * @return ShopArtikelKategorie
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
     * Set aKRtextEn
     *
     * @param integer $aKRtextEn
     *
     * @return ShopArtikelKategorie
     */
    public function setAKRtextEn($aKRtextEn)
    {
        $this->aKRtextEn = $aKRtextEn;

        return $this;
    }

    /**
     * Get aKRtextEn
     *
     * @return integer
     */
    public function getAKRtextEn()
    {
        return $this->aKRtextEn;
    }

    /**
     * Set aKRabatt1
     *
     * @param integer $aKRabatt1
     *
     * @return ShopArtikelKategorie
     */
    public function setAKRabatt1($aKRabatt1)
    {
        $this->aKRabatt1 = $aKRabatt1;

        return $this;
    }

    /**
     * Get aKRabatt1
     *
     * @return integer
     */
    public function getAKRabatt1()
    {
        return $this->aKRabatt1;
    }

    /**
     * Set aKRabatt2
     *
     * @param integer $aKRabatt2
     *
     * @return ShopArtikelKategorie
     */
    public function setAKRabatt2($aKRabatt2)
    {
        $this->aKRabatt2 = $aKRabatt2;

        return $this;
    }

    /**
     * Get aKRabatt2
     *
     * @return integer
     */
    public function getAKRabatt2()
    {
        return $this->aKRabatt2;
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
}
