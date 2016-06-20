<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopBausteine
 *
 * @ORM\Table(name="SHOP_Bausteine")
 * @ORM\Entity
 */
class ShopBausteine
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="h_art", type="boolean", nullable=false)
     */
    private $hArt;

    /**
     * @var string
     *
     * @ORM\Column(name="h_name", type="string", length=64, nullable=false)
     */
    private $hName;

    /**
     * @var string
     *
     * @ORM\Column(name="h_text", type="text", length=65535, nullable=false)
     */
    private $hText;

    /**
     * @var string
     *
     * @ORM\Column(name="h_text_en", type="text", length=65535, nullable=false)
     */
    private $hTextEn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="h_hinweis", type="boolean", nullable=false)
     */
    private $hHinweis = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="h_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hId;



    /**
     * Set hArt
     *
     * @param boolean $hArt
     *
     * @return ShopBausteine
     */
    public function setHArt($hArt)
    {
        $this->hArt = $hArt;

        return $this;
    }

    /**
     * Get hArt
     *
     * @return boolean
     */
    public function getHArt()
    {
        return $this->hArt;
    }

    /**
     * Set hName
     *
     * @param string $hName
     *
     * @return ShopBausteine
     */
    public function setHName($hName)
    {
        $this->hName = $hName;

        return $this;
    }

    /**
     * Get hName
     *
     * @return string
     */
    public function getHName()
    {
        return $this->hName;
    }

    /**
     * Set hText
     *
     * @param string $hText
     *
     * @return ShopBausteine
     */
    public function setHText($hText)
    {
        $this->hText = $hText;

        return $this;
    }

    /**
     * Get hText
     *
     * @return string
     */
    public function getHText()
    {
        return $this->hText;
    }

    /**
     * Set hTextEn
     *
     * @param string $hTextEn
     *
     * @return ShopBausteine
     */
    public function setHTextEn($hTextEn)
    {
        $this->hTextEn = $hTextEn;

        return $this;
    }

    /**
     * Get hTextEn
     *
     * @return string
     */
    public function getHTextEn()
    {
        return $this->hTextEn;
    }

    /**
     * Set hHinweis
     *
     * @param boolean $hHinweis
     *
     * @return ShopBausteine
     */
    public function setHHinweis($hHinweis)
    {
        $this->hHinweis = $hHinweis;

        return $this;
    }

    /**
     * Get hHinweis
     *
     * @return boolean
     */
    public function getHHinweis()
    {
        return $this->hHinweis;
    }

    /**
     * Get hId
     *
     * @return integer
     */
    public function getHId()
    {
        return $this->hId;
    }
}
