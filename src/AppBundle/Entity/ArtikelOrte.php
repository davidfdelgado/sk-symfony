<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArtikelOrte
 *
 * @ORM\Table(name="ARTIKEL_Orte", uniqueConstraints={@ORM\UniqueConstraint(name="a_o_name_kurz", columns={"a_o_name_kurz"})})
 * @ORM\Entity
 */
class ArtikelOrte
{
    /**
     * @var string
     *
     * @ORM\Column(name="a_o_name", type="string", length=64, nullable=false)
     */
    private $aOName;

    /**
     * @var string
     *
     * @ORM\Column(name="a_o_name_kurz", type="string", length=12, nullable=false)
     */
    private $aONameKurz;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="a_o_created", type="datetime", nullable=false)
     */
    private $aOCreated = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="a_o_created_u", type="integer", nullable=false)
     */
    private $aOCreatedU;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="a_o_update", type="datetime", nullable=false)
     */
    private $aOUpdate = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="a_o_update_u", type="integer", nullable=false)
     */
    private $aOUpdateU;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_o_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aOId;



    /**
     * Set aOName
     *
     * @param string $aOName
     *
     * @return ArtikelOrte
     */
    public function setAOName($aOName)
    {
        $this->aOName = $aOName;

        return $this;
    }

    /**
     * Get aOName
     *
     * @return string
     */
    public function getAOName()
    {
        return $this->aOName;
    }

    /**
     * Set aONameKurz
     *
     * @param string $aONameKurz
     *
     * @return ArtikelOrte
     */
    public function setAONameKurz($aONameKurz)
    {
        $this->aONameKurz = $aONameKurz;

        return $this;
    }

    /**
     * Get aONameKurz
     *
     * @return string
     */
    public function getAONameKurz()
    {
        return $this->aONameKurz;
    }

    /**
     * Set aOCreated
     *
     * @param \DateTime $aOCreated
     *
     * @return ArtikelOrte
     */
    public function setAOCreated($aOCreated)
    {
        $this->aOCreated = $aOCreated;

        return $this;
    }

    /**
     * Get aOCreated
     *
     * @return \DateTime
     */
    public function getAOCreated()
    {
        return $this->aOCreated;
    }

    /**
     * Set aOCreatedU
     *
     * @param integer $aOCreatedU
     *
     * @return ArtikelOrte
     */
    public function setAOCreatedU($aOCreatedU)
    {
        $this->aOCreatedU = $aOCreatedU;

        return $this;
    }

    /**
     * Get aOCreatedU
     *
     * @return integer
     */
    public function getAOCreatedU()
    {
        return $this->aOCreatedU;
    }

    /**
     * Set aOUpdate
     *
     * @param \DateTime $aOUpdate
     *
     * @return ArtikelOrte
     */
    public function setAOUpdate($aOUpdate)
    {
        $this->aOUpdate = $aOUpdate;

        return $this;
    }

    /**
     * Get aOUpdate
     *
     * @return \DateTime
     */
    public function getAOUpdate()
    {
        return $this->aOUpdate;
    }

    /**
     * Set aOUpdateU
     *
     * @param integer $aOUpdateU
     *
     * @return ArtikelOrte
     */
    public function setAOUpdateU($aOUpdateU)
    {
        $this->aOUpdateU = $aOUpdateU;

        return $this;
    }

    /**
     * Get aOUpdateU
     *
     * @return integer
     */
    public function getAOUpdateU()
    {
        return $this->aOUpdateU;
    }

    /**
     * Get aOId
     *
     * @return integer
     */
    public function getAOId()
    {
        return $this->aOId;
    }
}
