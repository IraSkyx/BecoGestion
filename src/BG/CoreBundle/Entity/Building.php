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
     * @var int
     *
     * @ORM\Column(name="garden_level", type="boolean")
     */
    private $gardenLevel;

    /**
     * @var Service
     *
     * @ORM\ManyToMany(targetEntity="BG\CoreBundle\Entity\Service", cascade={"persist", "remove"})
     */
    private $services;

    /**
     * @var Service
     *
     * @ORM\ManyToMany(targetEntity="BG\CoreBundle\Entity\Service", cascade={"persist", "remove"})
     * @ORM\JoinTable(name="building_special_services")
     */
    private $specialServices;

    /**
     * Constructor
     */
    public function __construct()
    {
      $this->floors = 0;
      $this->basements = 0;
      $this->gardenLevel = false;
      $this->services = new \Doctrine\Common\Collections\ArrayCollection();
      $this->specialServices = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * From base
     */
    public static function fromBase(int $num, $baseServices)
    {
      $building = new Building();
      $building->setNum($num);
      foreach($baseServices as $service)
        $building->addService(Service::fromBase($service));
      return $building;
    }

    /**
     * Clone without services
     */
    public static function cloneNoServices(Building $toClone)
    {
      $building = new Building();
      $building->setNum($toClone->getNum());
      $building->setFloors($toClone->getFloors());
      $building->setBasements($toClone->getBasements());
      $building->setGardenLevel($toClone->getGardenLevel());
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
     * @param \BG\CoreBundle\Entity\Service $service
     *
     * @return Building
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

    /**
     * Set gardenLevel.
     *
     * @param bool $gardenLevel
     *
     * @return Building
     */
    public function setGardenLevel($gardenLevel)
    {
        $this->gardenLevel = $gardenLevel;

        return $this;
    }

    /**
     * Get gardenLevel.
     *
     * @return bool
     */
    public function getGardenLevel()
    {
        return $this->gardenLevel;
    }

    /**
     * Add specialService.
     *
     * @param \BG\CoreBundle\Entity\Service $specialService
     *
     * @return Building
     */
    public function addSpecialService(\BG\CoreBundle\Entity\Service $specialService)
    {
        $this->specialServices[] = $specialService;

        return $this;
    }

    /**
     * Remove specialService.
     *
     * @param \BG\CoreBundle\Entity\Service $specialService
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSpecialService(\BG\CoreBundle\Entity\Service $specialService)
    {
        return $this->specialServices->removeElement($specialService);
    }

    /**
     * Get specialServices.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpecialServices()
    {
        return $this->specialServices;
    }
}
