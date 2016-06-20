<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArtikelKategorieArt
 *
 * @ORM\Table(name="ARTIKEL_Kategorie_Art")
 * @ORM\Entity
 */
class ArtikelKategorieArt
{
    /**
     * @var string
     *
     * @ORM\Column(name="a_a_beschreibung", type="string", length=64, nullable=false)
     */
    private $aABeschreibung;

    /**
     * @var string
     *
     * @ORM\Column(name="a_a_google_marker_image", type="string", length=128, nullable=true)
     */
    private $aAGoogleMarkerImage;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_a_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aAId;



    /**
     * Set aABeschreibung
     *
     * @param string $aABeschreibung
     *
     * @return ArtikelKategorieArt
     */
    public function setAABeschreibung($aABeschreibung)
    {
        $this->aABeschreibung = $aABeschreibung;

        return $this;
    }

    /**
     * Get aABeschreibung
     *
     * @return string
     */
    public function getAABeschreibung()
    {
        return $this->aABeschreibung;
    }

    /**
     * Set aAGoogleMarkerImage
     *
     * @param string $aAGoogleMarkerImage
     *
     * @return ArtikelKategorieArt
     */
    public function setAAGoogleMarkerImage($aAGoogleMarkerImage)
    {
        $this->aAGoogleMarkerImage = $aAGoogleMarkerImage;

        return $this;
    }

    /**
     * Get aAGoogleMarkerImage
     *
     * @return string
     */
    public function getAAGoogleMarkerImage()
    {
        return $this->aAGoogleMarkerImage;
    }

    /**
     * Get aAId
     *
     * @return integer
     */
    public function getAAId()
    {
        return $this->aAId;
    }
}
