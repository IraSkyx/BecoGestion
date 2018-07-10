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
     * @ORM\Column(name="quote_id", type="integer")
     */
    private $quote_id;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
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
     * @var Building
     *
     * @ORM\ManyToMany(targetEntity="BG\QuoteBundle\Entity\Building", cascade={"persist", "remove"})
     */
    private $buildings;

    /**
     * @var string|null
     *
     * @ORM\Column(name="representatives", type="simple_array", nullable=true)
     */
    private $representatives;

    /**
     * Constructor
     */
    public function __construct()
    {
      $this->date = new \Datetime('NOW');
      $this->buildings = new \Doctrine\Common\Collections\ArrayCollection();
      $this->representatives = array();
    }

    /**
     * Constructor from Quote
     */
    public static function fromQuote(\BG\QuoteBundle\Entity\Quote $quote)
    {
      $slip = new Slip();
      $slip->quote_id = $quote->getId();
      $slip->ref = $quote->getRef();
      $slip->companyName = $quote->getCustomer()->getCompanyName();
      $slip->quoteName = $quote->getName();

      foreach($quote->getBuildings() as $building)
      {
        $build = Building::cloneNoServices($building);
        foreach($building->getServices() as $service)
            if($service->getIsUsed())
                $build->addService($service->clone());
        $slip->addBuilding($build);
      }

      foreach($quote->getCustomer()->getRepresentatives() as $representative)
        $slip->addRepresentative($representative->__toString());

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
     * Set quote_id.
     *
     * @param int $quote_id
     *
     * @return Slip
     */
    public function setQuoteId($quote_id)
    {
        $this->quote_id = $quote_id;

        return $this;
    }

    /**
     * Get quote_id.
     *
     * @return int
     */
    public function getQuoteId()
    {
        return $this->quote_id;
    }

    /**
     * Set ref.
     *
     * @param string $ref
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
     * @return string
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
     * Set representatives.
     *
     * @param array|null $representatives
     *
     * @return Service
     */
    public function setRepresentatives($representatives = null)
    {
        $this->representatives = $representatives;

        return $this;
    }

    /**
     * Get representatives.
     *
     * @return array|null
     */
    public function getRepresentatives()
    {
        return $this->representatives;
    }

    public function addRepresentative(string $value)
    {
      $this->representatives[] = $value;
    }
}
