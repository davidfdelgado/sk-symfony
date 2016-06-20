<?php

namespace AppBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;
use \DateTime;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * AgenturUser
 *
 * @ORM\Table(name="AGENTUR_User")
 * @ORM\Entity
 */
class AgenturUser implements UserInterface, EquatableInterface 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="au_art", type="integer", nullable=false)
     */
    private $auArt = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="au_typ", type="integer", nullable=false)
     */
    private $auTyp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="au_bn", type="string", length=32, nullable=false)
     */
    private $auBn;

    /**
     * @var string
     *
     * @ORM\Column(name="au_pw", type="string", length=32, nullable=false)
     */
    private $auPw;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="au_lastlogin", type="datetime", nullable=true)
     */
    private $auLastlogin;

    /**
     * @var string
     *
     * @ORM\Column(name="au_vorname", type="string", length=32, nullable=false)
     */
    private $auVorname;

    /**
     * @var string
     *
     * @ORM\Column(name="au_nachname", type="string", length=32, nullable=false)
     */
    private $auNachname;

    /**
     * @var integer
     *
     * @ORM\Column(name="au_vid", type="integer", nullable=false)
     */
    private $auVid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="au_created", type="datetime", nullable=false)
     */
    private $auCreated = 'CURRENT_TIMESTAMP';

    /**
     * @var boolean
     *
     * @ORM\Column(name="au_status", type="boolean", nullable=false)
     */
    private $auStatus = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="au_email", type="string", length=64, nullable=false)
     */
    private $auEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="au_telefon", type="string", length=32, nullable=true)
     */
    private $auTelefon;

    /**
     * @var boolean
     *
     * @ORM\Column(name="au_scan_all", type="boolean", nullable=false)
     */
    private $auScanAll = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="au_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $auId;

	/**
     * @var integer
     *
     * @ORM\Column(name="role", type="integer", options={"default":1})
     */
    private $role;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;


    /**
     * Set auArt
     *
     * @param integer $auArt
     *
     * @return AgenturUser
     */
    public function setAuArt($auArt)
    {
        $this->auArt = $auArt;

        return $this;
    }

    /**
     * Get auArt
     *
     * @return integer
     */
    public function getAuArt()
    {
        return $this->auArt;
    }

    /**
     * Set auTyp
     *
     * @param boolean $auTyp
     *
     * @return AgenturUser
     */
    public function setAuTyp($auTyp)
    {
        $this->auTyp = $auTyp;

        return $this;
    }

    /**
     * Get auTyp
     *
     * @return boolean
     */
    public function getAuTyp()
    {
        return $this->auTyp;
    }

    /**
     * Set auBn
     *
     * @param string $auBn
     *
     * @return AgenturUser
     */
    public function setAuBn($auBn)
    {
        $this->auBn = $auBn;

        return $this;
    }

    /**
     * Get auBn
     *
     * @return string
     */
    public function getAuBn()
    {
        return $this->auBn;
    }

    /**
     * Set auPw
     *
     * @param string $auPw
     *
     * @return AgenturUser
     */
    public function setAuPw($auPw)
    {
	    if(!is_null($auPw)) {
			$this->auPw = $auPw;
    	}

        return $this;
    }

    /**
     * Get auPw
     *
     * @return string
     */
    public function getAuPw()
    {
	    
        return $this->auPw;
    }

    /**
     * Set auLastlogin
     *
     * @param \DateTime $auLastlogin
     *
     * @return AgenturUser
     */
    public function setAuLastlogin($auLastlogin)
    {
        $this->auLastlogin = $auLastlogin;

        return $this;
    }

    /**
     * Get auLastlogin
     *
     * @return \DateTime
     */
    public function getAuLastlogin()
    {
        return $this->auLastlogin;
    }

    /**
     * Set auVorname
     *
     * @param string $auVorname
     *
     * @return AgenturUser
     */
    public function setAuVorname($auVorname)
    {
        $this->auVorname = $auVorname;

        return $this;
    }

    /**
     * Get auVorname
     *
     * @return string
     */
    public function getAuVorname()
    {
        return $this->auVorname;
    }

    /**
     * Set auNachname
     *
     * @param string $auNachname
     *
     * @return AgenturUser
     */
    public function setAuNachname($auNachname)
    {
        $this->auNachname = $auNachname;

        return $this;
    }

    /**
     * Get auNachname
     *
     * @return string
     */
    public function getAuNachname()
    {
        return $this->auNachname;
    }

    /**
     * Set auVid
     *
     * @param integer $auVid
     *
     * @return AgenturUser
     */
    public function setAuVid($auVid)
    {
        $this->auVid = $auVid;

        return $this;
    }

    /**
     * Get auVid
     *
     * @return integer
     */
    public function getAuVid()
    {
        return $this->auVid;
    }

    /**
     * Set auCreated
     *
     * @param \DateTime $auCreated
     *
     * @return AgenturUser
     */
    public function setAuCreated($auCreated)
    {
        $this->auCreated = $auCreated;

        return $this;
    }

    /**
     * Get auCreated
     *
     * @return \DateTime
     */
    public function getAuCreated()
    {
        return $this->auCreated;
    }

    /**
     * Set auStatus
     *
     * @param boolean $auStatus
     *
     * @return AgenturUser
     */
    public function setAuStatus($auStatus)
    {
        $this->auStatus = $auStatus;

        return $this;
    }

    /**
     * Get auStatus
     *
     * @return boolean
     */
    public function getAuStatus()
    {
        return $this->auStatus;
    }

    /**
     * Set auEmail
     *
     * @param string $auEmail
     *
     * @return AgenturUser
     */
    public function setAuEmail($auEmail)
    {
        $this->auEmail = $auEmail;

        return $this;
    }

    /**
     * Get auEmail
     *
     * @return string
     */
    public function getAuEmail()
    {
        return $this->auEmail;
    }

    /**
     * Set auTelefon
     *
     * @param string $auTelefon
     *
     * @return AgenturUser
     */
    public function setAuTelefon($auTelefon)
    {
        $this->auTelefon = $auTelefon;

        return $this;
    }

    /**
     * Get auTelefon
     *
     * @return string
     */
    public function getAuTelefon()
    {
        return $this->auTelefon;
    }

    /**
     * Set auScanAll
     *
     * @param boolean $auScanAll
     *
     * @return AgenturUser
     */
    public function setAuScanAll($auScanAll)
    {
        $this->auScanAll = $auScanAll;

        return $this;
    }

    /**
     * Get auScanAll
     *
     * @return boolean
     */
    public function getAuScanAll()
    {
        return $this->auScanAll;
    }

    /**
     * Get auId
     *
     * @return integer
     */
    public function getAuId()
    {
        return $this->auId;
    }
    

    /**
     * Set role
     *
     * @param integer $role
     * @return AppUsers
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return integer 
     */
    public function getRole()
    {
        return $this->role;
    }
    
    /**
     * Get roles
     */
    public function getRoles()
    {
	    switch($this->auArt) {
		    case 1: 
		    case 2: 
		    	$roles = "ROLE_USER";
		    	break;
		    case 3: 
		    	$roles = "ROLE_ADMIN";
		    	break;
			case 4: 
				$roles = "ROLE_SUPER_ADMIN";
		    	break;
			
	    }
        return array($roles);
    }
    
    public function isEqualTo(UserInterface $user)
    {
        if (!$user instanceof WebserviceUser) {
            return false;
		}
        if ($this->auPw !== $user->getPassword()) {
            return false;
		}
        if ($this->salt !== $user->getSalt()) {
            return false;
		}
        if ($this->auBn !== $user->getUsername()) {
            return false;
        }
        return true;
    }
    
    public function getSalt()
    {
        return null;
    }
    
    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return AppUsers
     */
    public function setIsActive($isActive)
    {
        $this->auStatus = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->auStatus;
    }
    
    public function setUsername($username)
    {
        $this->auBn = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->auBn;
    }
    
    public function getPassword()
    {
        return $this->auPw;
    }
    
    public function setPassword($password)
    {
        $this->auPw = $password;

        return $this;
    }
    
    public function eraseCredentials()
    {
    }
}
