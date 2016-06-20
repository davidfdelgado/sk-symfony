<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopWarenkorb
 *
 * @ORM\Table(name="SHOP_Warenkorb", indexes={@ORM\Index(name="nr", columns={"nr"}), @ORM\Index(name="artikelnummer", columns={"artikelnummer"})})
 * @ORM\Entity
 */
class ShopWarenkorb
{
    /**
     * @var integer
     *
     * @ORM\Column(name="wc_s_id", type="integer", nullable=false)
     */
    private $wcSId;

    /**
     * @var string
     *
     * @ORM\Column(name="nr", type="string", length=50, nullable=false)
     */
    private $nr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="artikelnummer", type="string", length=50, nullable=true)
     */
    private $artikelnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="aid", type="string", length=16, nullable=false)
     */
    private $aid;

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
     * @var integer
     *
     * @ORM\Column(name="menge", type="integer", nullable=true)
     */
    private $menge;

    /**
     * @var string
     *
     * @ORM\Column(name="preis", type="string", length=10, nullable=true)
     */
    private $preis;

    /**
     * @var string
     *
     * @ORM\Column(name="rabatt", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $rabatt = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum", type="datetime", nullable=true)
     */
    private $datum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatetime", type="datetime", nullable=false)
     */
    private $updatetime = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set wcSId
     *
     * @param integer $wcSId
     *
     * @return ShopWarenkorb
     */
    public function setWcSId($wcSId)
    {
        $this->wcSId = $wcSId;

        return $this;
    }

    /**
     * Get wcSId
     *
     * @return integer
     */
    public function getWcSId()
    {
        return $this->wcSId;
    }

    /**
     * Set nr
     *
     * @param string $nr
     *
     * @return ShopWarenkorb
     */
    public function setNr($nr)
    {
        $this->nr = $nr;

        return $this;
    }

    /**
     * Get nr
     *
     * @return string
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Set artikelnummer
     *
     * @param string $artikelnummer
     *
     * @return ShopWarenkorb
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
     * Set aid
     *
     * @param string $aid
     *
     * @return ShopWarenkorb
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return string
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ShopWarenkorb
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
     * @return ShopWarenkorb
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
     * Set menge
     *
     * @param integer $menge
     *
     * @return ShopWarenkorb
     */
    public function setMenge($menge)
    {
        $this->menge = $menge;

        return $this;
    }

    /**
     * Get menge
     *
     * @return integer
     */
    public function getMenge()
    {
        return $this->menge;
    }

    /**
     * Set preis
     *
     * @param string $preis
     *
     * @return ShopWarenkorb
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
     * Set rabatt
     *
     * @param string $rabatt
     *
     * @return ShopWarenkorb
     */
    public function setRabatt($rabatt)
    {
        $this->rabatt = $rabatt;

        return $this;
    }

    /**
     * Get rabatt
     *
     * @return string
     */
    public function getRabatt()
    {
        return $this->rabatt;
    }

    /**
     * Set datum
     *
     * @param \DateTime $datum
     *
     * @return ShopWarenkorb
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set updatetime
     *
     * @param \DateTime $updatetime
     *
     * @return ShopWarenkorb
     */
    public function setUpdatetime($updatetime)
    {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Get updatetime
     *
     * @return \DateTime
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
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
