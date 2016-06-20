<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopGsFunktion
 *
 * @ORM\Table(name="SHOP_GS_Funktion", indexes={@ORM\Index(name="gs_f_zu_kat", columns={"gs_f_zu_kat"}), @ORM\Index(name="gs_f_zu_ort", columns={"gs_f_zu_ort"}), @ORM\Index(name="gs_f_leistung", columns={"gs_f_leistung"})})
 * @ORM\Entity
 */
class ShopGsFunktion
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="gs_f_status", type="boolean", nullable=false)
     */
    private $gsFStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gs_f_gueltig_bis", type="datetime", nullable=false)
     */
    private $gsFGueltigBis;

    /**
     * @var integer
     *
     * @ORM\Column(name="gs_f_wt", type="integer", nullable=false)
     */
    private $gsFWt;

    /**
     * @var string
     *
     * @ORM\Column(name="gs_f_beschreibung", type="string", length=255, nullable=false)
     */
    private $gsFBeschreibung;

    /**
     * @var string
     *
     * @ORM\Column(name="gs_f_beschreibung_intern", type="string", length=255, nullable=false)
     */
    private $gsFBeschreibungIntern;

    /**
     * @var string
     *
     * @ORM\Column(name="gs_f_euro", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $gsFEuro;

    /**
     * @var integer
     *
     * @ORM\Column(name="gs_f_proz", type="integer", nullable=false)
     */
    private $gsFProz;

    /**
     * @var integer
     *
     * @ORM\Column(name="gs_f_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gsFId;

    /**
     * @var \AppBundle\Entity\ArtikelKategorie
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ArtikelKategorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gs_f_leistung", referencedColumnName="a_k_id")
     * })
     */
    private $gsFLeistung;

    /**
     * @var \AppBundle\Entity\ArtikelKategorie
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ArtikelKategorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gs_f_zu_kat", referencedColumnName="a_k_id")
     * })
     */
    private $gsFZuKat;

    /**
     * @var \AppBundle\Entity\ArtikelOrte
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ArtikelOrte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gs_f_zu_ort", referencedColumnName="a_o_id")
     * })
     */
    private $gsFZuOrt;



    /**
     * Set gsFStatus
     *
     * @param boolean $gsFStatus
     *
     * @return ShopGsFunktion
     */
    public function setGsFStatus($gsFStatus)
    {
        $this->gsFStatus = $gsFStatus;

        return $this;
    }

    /**
     * Get gsFStatus
     *
     * @return boolean
     */
    public function getGsFStatus()
    {
        return $this->gsFStatus;
    }

    /**
     * Set gsFGueltigBis
     *
     * @param \DateTime $gsFGueltigBis
     *
     * @return ShopGsFunktion
     */
    public function setGsFGueltigBis($gsFGueltigBis)
    {
        $this->gsFGueltigBis = $gsFGueltigBis;

        return $this;
    }

    /**
     * Get gsFGueltigBis
     *
     * @return \DateTime
     */
    public function getGsFGueltigBis()
    {
        return $this->gsFGueltigBis;
    }

    /**
     * Set gsFWt
     *
     * @param integer $gsFWt
     *
     * @return ShopGsFunktion
     */
    public function setGsFWt($gsFWt)
    {
        $this->gsFWt = $gsFWt;

        return $this;
    }

    /**
     * Get gsFWt
     *
     * @return integer
     */
    public function getGsFWt()
    {
        return $this->gsFWt;
    }

    /**
     * Set gsFBeschreibung
     *
     * @param string $gsFBeschreibung
     *
     * @return ShopGsFunktion
     */
    public function setGsFBeschreibung($gsFBeschreibung)
    {
        $this->gsFBeschreibung = $gsFBeschreibung;

        return $this;
    }

    /**
     * Get gsFBeschreibung
     *
     * @return string
     */
    public function getGsFBeschreibung()
    {
        return $this->gsFBeschreibung;
    }

    /**
     * Set gsFBeschreibungIntern
     *
     * @param string $gsFBeschreibungIntern
     *
     * @return ShopGsFunktion
     */
    public function setGsFBeschreibungIntern($gsFBeschreibungIntern)
    {
        $this->gsFBeschreibungIntern = $gsFBeschreibungIntern;

        return $this;
    }

    /**
     * Get gsFBeschreibungIntern
     *
     * @return string
     */
    public function getGsFBeschreibungIntern()
    {
        return $this->gsFBeschreibungIntern;
    }

    /**
     * Set gsFEuro
     *
     * @param string $gsFEuro
     *
     * @return ShopGsFunktion
     */
    public function setGsFEuro($gsFEuro)
    {
        $this->gsFEuro = $gsFEuro;

        return $this;
    }

    /**
     * Get gsFEuro
     *
     * @return string
     */
    public function getGsFEuro()
    {
        return $this->gsFEuro;
    }

    /**
     * Set gsFProz
     *
     * @param integer $gsFProz
     *
     * @return ShopGsFunktion
     */
    public function setGsFProz($gsFProz)
    {
        $this->gsFProz = $gsFProz;

        return $this;
    }

    /**
     * Get gsFProz
     *
     * @return integer
     */
    public function getGsFProz()
    {
        return $this->gsFProz;
    }

    /**
     * Get gsFId
     *
     * @return integer
     */
    public function getGsFId()
    {
        return $this->gsFId;
    }

    /**
     * Set gsFLeistung
     *
     * @param \AppBundle\Entity\ArtikelKategorie $gsFLeistung
     *
     * @return ShopGsFunktion
     */
    public function setGsFLeistung(\AppBundle\Entity\ArtikelKategorie $gsFLeistung = null)
    {
        $this->gsFLeistung = $gsFLeistung;

        return $this;
    }

    /**
     * Get gsFLeistung
     *
     * @return \AppBundle\Entity\ArtikelKategorie
     */
    public function getGsFLeistung()
    {
        return $this->gsFLeistung;
    }

    /**
     * Set gsFZuKat
     *
     * @param \AppBundle\Entity\ArtikelKategorie $gsFZuKat
     *
     * @return ShopGsFunktion
     */
    public function setGsFZuKat(\AppBundle\Entity\ArtikelKategorie $gsFZuKat = null)
    {
        $this->gsFZuKat = $gsFZuKat;

        return $this;
    }

    /**
     * Get gsFZuKat
     *
     * @return \AppBundle\Entity\ArtikelKategorie
     */
    public function getGsFZuKat()
    {
        return $this->gsFZuKat;
    }

    /**
     * Set gsFZuOrt
     *
     * @param \AppBundle\Entity\ArtikelOrte $gsFZuOrt
     *
     * @return ShopGsFunktion
     */
    public function setGsFZuOrt(\AppBundle\Entity\ArtikelOrte $gsFZuOrt = null)
    {
        $this->gsFZuOrt = $gsFZuOrt;

        return $this;
    }

    /**
     * Get gsFZuOrt
     *
     * @return \AppBundle\Entity\ArtikelOrte
     */
    public function getGsFZuOrt()
    {
        return $this->gsFZuOrt;
    }
}
