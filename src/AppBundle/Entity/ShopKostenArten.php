<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKostenArten
 *
 * @ORM\Table(name="SHOP_Kosten_Arten")
 * @ORM\Entity
 */
class ShopKostenArten
{
    /**
     * @var string
     *
     * @ORM\Column(name="xa_bezeichnung", type="string", length=64, nullable=false)
     */
    private $xaBezeichnung;

    /**
     * @var string
     *
     * @ORM\Column(name="xa_netto", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $xaNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="xa_brutto", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $xaBrutto;

    /**
     * @var integer
     *
     * @ORM\Column(name="xa_mwst", type="integer", nullable=false)
     */
    private $xaMwst;

    /**
     * @var integer
     *
     * @ORM\Column(name="xa_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $xaId;



    /**
     * Set xaBezeichnung
     *
     * @param string $xaBezeichnung
     *
     * @return ShopKostenArten
     */
    public function setXaBezeichnung($xaBezeichnung)
    {
        $this->xaBezeichnung = $xaBezeichnung;

        return $this;
    }

    /**
     * Get xaBezeichnung
     *
     * @return string
     */
    public function getXaBezeichnung()
    {
        return $this->xaBezeichnung;
    }

    /**
     * Set xaNetto
     *
     * @param string $xaNetto
     *
     * @return ShopKostenArten
     */
    public function setXaNetto($xaNetto)
    {
        $this->xaNetto = $xaNetto;

        return $this;
    }

    /**
     * Get xaNetto
     *
     * @return string
     */
    public function getXaNetto()
    {
        return $this->xaNetto;
    }

    /**
     * Set xaBrutto
     *
     * @param string $xaBrutto
     *
     * @return ShopKostenArten
     */
    public function setXaBrutto($xaBrutto)
    {
        $this->xaBrutto = $xaBrutto;

        return $this;
    }

    /**
     * Get xaBrutto
     *
     * @return string
     */
    public function getXaBrutto()
    {
        return $this->xaBrutto;
    }

    /**
     * Set xaMwst
     *
     * @param integer $xaMwst
     *
     * @return ShopKostenArten
     */
    public function setXaMwst($xaMwst)
    {
        $this->xaMwst = $xaMwst;

        return $this;
    }

    /**
     * Get xaMwst
     *
     * @return integer
     */
    public function getXaMwst()
    {
        return $this->xaMwst;
    }

    /**
     * Get xaId
     *
     * @return integer
     */
    public function getXaId()
    {
        return $this->xaId;
    }
}
