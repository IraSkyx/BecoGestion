<?php

namespace BG\SlipBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;
use BG\QuoteBundle\Entity\Building;

/**
 * Slip
 *
 * @ORM\Table(name="slip")
 * @ORM\Entity(repositoryClass="BG\SlipBundle\Repository\SlipRepository")
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
     * @ORM\ManyToOne(targetEntity="BG\CustomerBundle\Entity\Customer")
     */
    private $customer;

    /**
     * @var Building
     *
     * @ORM\ManyToMany(targetEntity="BG\QuoteBundle\Entity\Building", cascade={"persist", "remove"})
     */
    private $buildings;

    /**
     * @var Representative
     *
     * @ORM\ManyToMany(targetEntity="BG\CustomerBundle\Entity\Representative", cascade={"persist"})
     * @ORM\OrderBy({"isBase" = "ASC"})
     */
    private $representatives;

    /**
     * Constructor
     */
    public function __construct()
    {
      $this->date = new \Datetime('NOW');
      $this->buildings = new \Doctrine\Common\Collections\ArrayCollection();
      $this->representatives = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Constructor from Quote
     */
    public static function fromQuote(\BG\QuoteBundle\Entity\Quote $quote)
    {
      $slip = new Slip();
      $slip->ref = $quote->getId();
      $slip->companyName = $quote->getCustomer()->getCompanyName();
      $slip->quoteName = $quote->getName();
      $slip->customer = $quote->getCustomer();

      foreach($quote->getBuildings() as $building)
      {
        $build = Building::cloneNoServices($building);
        foreach($building->getServices() as $service)
        {
          if($service->getIsUsed())
          {
            $build->addService($service);
          }
        }
        $slip->addBuilding($build);
      }

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
     * @param \BG\CustomerBundle\Entity\Customer $customer
     *
     * @return Slip
     */
    public function setCustomer(\BG\CustomerBundle\Entity\Customer $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer.
     *
     * @return \BG\CustomerBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Add building.
     *
     * @param \BG\QuoteBundle\Entity\Building $building
     *
     * @return Slip
     */
    public function addBuilding(\BG\QuoteBundle\Entity\Building $building)
    {
        $this->buildings[] = $building;

        return $this;
    }

    /**
     * Remove building.
     *
     * @param \BG\QuoteBundle\Entity\Building $building
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeBuilding(\BG\QuoteBundle\Entity\Building $building)
    {
        return $this->buildings->removeElement($building);
    }

    /**
     * Get buildings.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBuildings()
    {
        return $this->buildings;
    }

    /**
     * Add representative.
     *
     * @param \BG\CustomerBundle\Entity\Representative $representative
     *
     * @return Slip
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
}
