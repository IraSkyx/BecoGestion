<?php

namespace BG\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Slip
 *
 * @ORM\Table(name="slip")
 * @ORM\Entity(repositoryClass="BG\CoreBundle\Repository\SlipRepository")
 */
class Slip
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
     * @var int
     *
     * @ORM\Column(name="ref", type="integer")
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=255)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="quote_name", type="string", length=255)
     */
    private $quoteName;

    /**
     * @var string
     *
     * @ORM\Column(name="followed_by", type="string", length=255)
     */
    private $followedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var Customer
     *
     * @ORM\ManyToOne(targetEntity="BG\CoreBundle\Entity\Customer")
     */
    private $customer;

    /**
     * @var Service
     *
     * @ORM\ManyToMany(targetEntity="BG\CoreBundle\Entity\Service")
     */
    private $services;

    /**
     * @var Representative
     *
    * @ORM\ManyToMany(targetEntity="BG\CoreBundle\Entity\Representative")
     */
    private $representatives;

    /**
     * Constructor
     */
    public function __construct()
    {
      $this->date = new \Datetime('NOW');
      $this->services = new \Doctrine\Common\Collections\ArrayCollection();
      $this->representatives = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Constructor from Quote
     */
    public static function fromQuote(Quote $quote)
    {
      $slip = new Slip();
      $slip->ref = $quote->getId();
      $slip->companyName = $quote->getCustomer()->getCompanyName();
      $slip->quoteName = $quote->getName();
      $slip->customer = $quote->getCustomer();

      foreach($quote->getBuildings() as $building)
        foreach($building->getServices() as $service)
          if($service->getIsUsed())
            $slip->addService($service);

      foreach($quote->getCustomer()->getRepresentatives() as $representative)
        $slip->addRepresentative($representative);

      return $slip;
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
     * Set ref.
     *
     * @param int $ref
     *
     * @return Slip
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref.
     *
     * @return int
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set companyName.
     *
     * @param string $companyName
     *
     * @return Slip
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
     * Set quoteName.
     *
     * @param string $quoteName
     *
     * @return Slip
     */
    public function setQuoteName($quoteName)
    {
        $this->quoteName = $quoteName;

        return $this;
    }

    /**
     * Get quoteName.
     *
     * @return string
     */
    public function getQuoteName()
    {
        return $this->quoteName;
    }

    /**
     * Set followedBy.
     *
     * @param string $followedBy
     *
     * @return Slip
     */
    public function setFollowedBy($followedBy)
    {
        $this->followedBy = $followedBy;

        return $this;
    }

    /**
     * Get followedBy.
     *
     * @return string
     */
    public function getFollowedBy()
    {
        return $this->followedBy;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Slip
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set customer.
     *
     * @param \BG\CoreBundle\Entity\Customer $customer
     *
     * @return Slip
     */
    public function setCustomer(\BG\CoreBundle\Entity\Customer $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer.
     *
     * @return \BG\CoreBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Add service.
     *
     * @param \BG\CoreBundle\Entity\Service $service
     *
     * @return Slip
     */
    public function addService(\BG\CoreBundle\Entity\Service $service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * Remove service.
     *
     * @param \BG\CoreBundle\Entity\Service $service
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeService(\BG\CoreBundle\Entity\Service $service)
    {
        return $this->services->removeElement($service);
    }

    /**
     * Get services.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Add representative.
     *
     * @param \BG\CoreBundle\Entity\Representative $representative
     *
     * @return Slip
     */
    public function addRepresentative(\BG\CoreBundle\Entity\Representative $representative)
    {
        $this->representatives[] = $representative;

        return $this;
    }

    /**
     * Remove representative.
     *
     * @param \BG\CoreBundle\Entity\Representative $representative
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeRepresentative(\BG\CoreBundle\Entity\Representative $representative)
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
}
