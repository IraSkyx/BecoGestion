<?php

namespace BG\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BG\CoreBundle\Repository\BaseServiceRepository;

/**
 * Building
 *
 * @ORM\Table(name="building")
 * @ORM\Entity(repositoryClass="BG\CoreBundle\Repository\BuildingRepository")
 */
class Building
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
     * @ORM\Column(name="num", type="integer")
     */
    private $num;

    /**
     * @var int
     *
     * @ORM\Column(name="floors", type="integer")
     */
    private $floors;

    /**
     * @var int
     *
     * @ORM\Column(name="basements", type="integer")
     */
    private $basements;

    /**
     * @var BaseService
     *
     * @ORM\ManyToMany(targetEntity="BG\CoreBundle\Entity\BaseService", cascade={"persist", "remove"})
     */
    private $services;

    /**
     * Constructor
     */
    public function __construct()
    {
      $this->floors = 0;
      $this->basements = 0;
      $this->services = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * From base
     */
    public static function fromBase($baseServices)
    {
      $building = new Building();
      $building->setNum(1);
      foreach($baseServices as $service)
        $building->addService(Service::fromBase($service));
      return $building;
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
     * Set num.
     *
     * @param int $num
     *
     * @return Building
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num.
     *
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Add service.
     *
     * @param \BG\CoreBundle\Entity\BaseService $service
     *
     * @return Building
     */
    public function addService(\BG\CoreBundle\Entity\BaseService $service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * Remove service.
     *
     * @param \BG\CoreBundle\Entity\BaseService $service
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeService(\BG\CoreBundle\Entity\BaseService $service)
    {
        return $this->services->removeElement($service);
    }

    /**
     * Set services.
     *
     * @param \Doctrine\Common\Collections\Collection $services
     *
     * @return Building
     */
    public function setServices($services)
    {
        $this->services = $services;

        return $this;
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
     * Set floors.
     *
     * @param int $floors
     *
     * @return Building
     */
    public function setFloors($floors)
    {
        $this->floors = $floors;

        return $this;
    }

    /**
     * Get floors.
     *
     * @return int
     */
    public function getFloors()
    {
        return $this->floors;
    }

    /**
     * Set basements.
     *
     * @param int $basements
     *
     * @return Building
     */
    public function setBasements($basements)
    {
        $this->basements = $basements;

        return $this;
    }

    /**
     * Get basements.
     *
     * @return int
     */
    public function getBasements()
    {
        return $this->basements;
    }
}
