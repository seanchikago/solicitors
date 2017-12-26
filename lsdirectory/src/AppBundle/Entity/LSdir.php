<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LSdir
 *
 * @ORM\Table(name="l_sdir")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LSdirRepository")
 */
class LSdir
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="office", type="string", length=255)
     */
    private $office;

    /**
     * @var string
     *
     * @ORM\Column(name="Address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="Postcode", type="string", length=255)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="Country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="Telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Phonenumber", type="string", length=255)
     */
    private $phonenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Faxnumber", type="string", length=255)
     */
    private $faxnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Website", type="string", length=255)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Address2", type="string", length=255)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="DXaddress", type="string", length=255)
     */
    private $dXaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="AreasofLaw", type="text")
     */
    private $areasofLaw;

    /**
     * @var string
     *
     * @ORM\Column(name="Languages", type="string", length=255)
     */
    private $languages;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreated", type="datetime")
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateModified", type="datetime")
     */
    private $dateModified;

    /**
     * @var float
     *
     * @ORM\Column(name="Latitude", type="float")
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="Longtude", type="string", length=255)
     */
    private $longtude;

    /**
     * @var string
     *
     * @ORM\Column(name="imgurl", type="string", length=255)
     */
    private $imgurl;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return LSdir
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
     * Set office
     *
     * @param string $office
     *
     * @return LSdir
     */
    public function setOffice($office)
    {
        $this->office = $office;

        return $this;
    }

    /**
     * Get office
     *
     * @return string
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return LSdir
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return LSdir
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return LSdir
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return LSdir
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     *
     * @return LSdir
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set faxnumber
     *
     * @param string $faxnumber
     *
     * @return LSdir
     */
    public function setFaxnumber($faxnumber)
    {
        $this->faxnumber = $faxnumber;

        return $this;
    }

    /**
     * Get faxnumber
     *
     * @return string
     */
    public function getFaxnumber()
    {
        return $this->faxnumber;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return LSdir
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return LSdir
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address2
     *
     * @param string $address2
     *
     * @return LSdir
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set dXaddress
     *
     * @param string $dXaddress
     *
     * @return LSdir
     */
    public function setDXaddress($dXaddress)
    {
        $this->dXaddress = $dXaddress;

        return $this;
    }

    /**
     * Get dXaddress
     *
     * @return string
     */
    public function getDXaddress()
    {
        return $this->dXaddress;
    }

    /**
     * Set areasofLaw
     *
     * @param string $areasofLaw
     *
     * @return LSdir
     */
    public function setAreasofLaw($areasofLaw)
    {
        $this->areasofLaw = $areasofLaw;

        return $this;
    }

    /**
     * Get areasofLaw
     *
     * @return string
     */
    public function getAreasofLaw()
    {
        return $this->areasofLaw;
    }

    /**
     * Set languages
     *
     * @param string $languages
     *
     * @return LSdir
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return string
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return LSdir
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return LSdir
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return LSdir
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longtude
     *
     * @param string $longtude
     *
     * @return LSdir
     */
    public function setLongtude($longtude)
    {
        $this->longtude = $longtude;

        return $this;
    }

    /**
     * Get longtude
     *
     * @return string
     */
    public function getLongtude()
    {
        return $this->longtude;
    }

    /**
     * Set imgurl
     *
     * @param string $imgurl
     *
     * @return LSdir
     */
    public function setImgurl($imgurl)
    {
        $this->imgurl = $imgurl;

        return $this;
    }

    /**
     * Get imgurl
     *
     * @return string
     */
    public function getImgurl()
    {
        return $this->imgurl;
    }
}

