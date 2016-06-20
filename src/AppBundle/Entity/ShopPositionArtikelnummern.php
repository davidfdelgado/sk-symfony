<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopPositionArtikelnummern
 *
 * @ORM\Table(name="SHOP_Position_Artikelnummern", uniqueConstraints={@ORM\UniqueConstraint(name="pk_artikelnummer", columns={"pk_artikelnummer"})})
 * @ORM\Entity
 */
class ShopPositionArtikelnummern
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk_artikelnummer", type="string", length=32, nullable=false)
     */
    private $pkArtikelnummer;

    /**
     * @var integer
     *
     * @ORM\Column(name="pk_kategorie", type="integer", nullable=false)
     */
    private $pkKategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="pk_xa_id", type="integer", nullable=false)
     */
    private $pkXaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pk_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkId;



    /**
     * Set pkArtikelnummer
     *
     * @param string $pkArtikelnummer
     *
     * @return ShopPositionArtikelnummern
     */
    public function setPkArtikelnummer($pkArtikelnummer)
    {
        $this->pkArtikelnummer = $pkArtikelnummer;

        return $this;
    }

    /**
     * Get pkArtikelnummer
     *
     * @return string
     */
    public function getPkArtikelnummer()
    {
        return $this->pkArtikelnummer;
    }

    /**
     * Set pkKategorie
     *
     * @param integer $pkKategorie
     *
     * @return ShopPositionArtikelnummern
     */
    public function setPkKategorie($pkKategorie)
    {
        $this->pkKategorie = $pkKategorie;

        return $this;
    }

    /**
     * Get pkKategorie
     *
     * @return integer
     */
    public function getPkKategorie()
    {
        return $this->pkKategorie;
    }

    /**
     * Set pkXaId
     *
     * @param integer $pkXaId
     *
     * @return ShopPositionArtikelnummern
     */
    public function setPkXaId($pkXaId)
    {
        $this->pkXaId = $pkXaId;

        return $this;
    }

    /**
     * Get pkXaId
     *
     * @return integer
     */
    public function getPkXaId()
    {
        return $this->pkXaId;
    }

    /**
     * Get pkId
     *
     * @return integer
     */
    public function getPkId()
    {
        return $this->pkId;
    }
}
