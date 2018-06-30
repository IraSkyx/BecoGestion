<?php

namespace BG\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="BG\CustomerBundle\Repository\CustomerRepository")
 */
class Customer
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
     * @ORM\Column(name="company_name", type="string", length=255)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var int
     *
     * @ORM\Column(name="postcode", type="integer")
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone", type="integer")
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var integer
     *
     * @ORM\Column(name="siren", type="integer")
     */
    private $siren;

    /**
     * @var integer
     *
     * @ORM\Column(name="intra", type="integer")
     */
    private $intra;

    /**
     * @var Representative
     *
     * @ORM\ManyToMany(targetEntity="BG\CustomerBundle\Entity\Representative", cascade={"persist", "remove"})
     */
    private $representatives;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_cloned", type="boolean")
     */
    private $isCloned;

    /**
     * Deep clone method.
     * @return Customer
     */
    public static function clone(Customer $customer) : Customer
    {
      $new = new Customer();
      return $new
      ->setCompanyName($customer->getCompanyName())
      ->setAddress($customer->getAddress())
      ->setPostcode($customer->getPostcode())
      ->setCity($customer->getCity())
      ->setPhone($customer->getPhone())
      ->setMail($customer->getMail())
      ->setSiren($customer->getSiren())
      ->setIntra($customer->getIntra())
      ->setIsCloned(true);
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->representatives = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set companyName.
     *
     * @param string $companyName
     *
     * @return Customer
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set address.
     *
     * @param string $address
     *
     * @return Customer
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postcode.
     *
     * @param int $postcode
     *
     * @return Customer
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode.
     *
     * @return int
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set city.
     *
     * @param string $city
     *
     * @return Customer
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set phone.
     *
     * @param int $phone
     *
     * @return Customer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mail.
     *
     * @param string $mail
     *
     * @return Customer
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail.
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set siren.
     *
     * @param int $siren
     *
     * @return Customer
     */
    public function setSiren($siren)
    {
        $this->siren = $siren;

        return $this;
    }

    /**
     * Get siren.
     *
     * @return int
     */
    public function getSiren()
    {
        return $this->siren;
    }

    /**
     * Set intra.
     *
     * @param int $intra
     *
     * @return Customer
     */
    public function setIntra($intra)
    {
        $this->intra = $intra;

        return $this;
    }

    /**
     * Get intra.
     *
     * @return int
     */
    public function getIntra()
    {
        return $this->intra;
    }

    /**
     * Add representative.
     *
     * @param \BG\CustomerBundle\Entity\Representative $representative
     *
     * @return Customer
     */
    public function addRepresentative(\BG\CustomerBundle\Entity\Representative $representative)
    {
        $this->representatives[] = $representative;

        return $this;
    }

    /**
     * Remove representative.
     *
     * @param \BG\CustomerBundle\Entity\Representative $representative
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeRepresentative(\BG\CustomerBundle\Entity\Representative $representative)
    {
        return $this->representatives->removeElement($representative);
    }

    /**
     * Get representatives.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRepresentatives()
    {
        return $this->representatives;
    }

    /**
     * Set isCloned.
     *
     * @param bool $isCloned
     *
     * @return Customer
     */
    public function setIsCloned($isCloned)
    {
        $this->isCloned = $isCloned;
        return $this;
    }
    /**
     * Get isCloned.
     *
     * @return bool
     */
    public function getIsCloned()
    {
        return $this->isCloned;
    }

    /**
     * To string.
     *
     * @return string
     */
    public function __toString()
    {
      return "{$this->companyName}";
    }
}
