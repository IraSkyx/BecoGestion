<?php

namespace BG\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Entity(repositoryClass="BG\CoreBundle\Repository\ServiceRepository")
 */
class Service extends BaseService
{
    /**
     * @var int
     *
     * @ORM\Column(name="billed", nullable=true, type="integer")
     */
    private $billed;

    /**
     * @var float
     *
     * @ORM\Column(name="eng_time", nullable=true, type="float")
     */
    private $engTime;

    /**
     * @var float
     *
     * @ORM\Column(name="draw_time", nullable=true, type="float")
     */
    private $drawTime;

    /**
     * @var int
     *
     * @ORM\Column(name="grade", nullable=true, type="integer")
     */
    private $grade;

    /**
     * @var float
     *
     * @ORM\Column(name="advancement", nullable=true, type="float")
     */
    private $advancement;

    /**
     * Constructor
     */
    public function __construct()
    {
      $this->isUsed = false;
      $this->billed = 0;
      $this->engTime = 0;
      $this->drawTime = 0;
      $this->grade = 0;
      $this->advancement = 0;
    }

    /**
     * Constructor from Base
     */
    public static function fromBase(BaseService $serv)
    {
      $service = new Service();
      $service->setLevel($serv->getLevel());
      $service->setDrawing($serv->getDrawing());
      return $service;
    }

    /**
     * Set building.
     *
     * @param int $building
     *
     * @return Service
     */
    public function setBuilding($building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building.
     *
     * @return int
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set billed.
     *
     * @param int $billed
     *
     * @return Service
     */
    public function setBilled($billed)
    {
        $this->billed = $billed;

        return $this;
    }

    /**
     * Get billed.
     *
     * @return int
     */
    public function getBilled()
    {
        return $this->billed;
    }

    /**
     * Set engTime.
     *
     * @param float $engTime
     *
     * @return Service
     */
    public function setEngTime($engTime)
    {
        $this->engTime = $engTime;

        return $this;
    }

    /**
     * Get engTime.
     *
     * @return float
     */
    public function getEngTime()
    {
        return $this->engTime;
    }

    /**
     * Set drawTime.
     *
     * @param float $drawTime
     *
     * @return Service
     */
    public function setDrawTime($drawTime)
    {
        $this->drawTime = $drawTime;

        return $this;
    }

    /**
     * Get drawTime.
     *
     * @return float
     */
    public function getDrawTime()
    {
        return $this->drawTime;
    }

    /**
     * Set grade.
     *
     * @param int $grade
     *
     * @return Service
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade.
     *
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set advancement.
     *
     * @param float $advancement
     *
     * @return Service
     */
    public function setAdvancement($advancement)
    {
        $this->advancement = $advancement;

        return $this;
    }

    /**
     * Get advancement.
     *
     * @return float
     */
    public function getAdvancement()
    {
        return $this->advancement;
    }
}
