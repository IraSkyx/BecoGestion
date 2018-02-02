<?php

namespace BG\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="BG\CoreBundle\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="building", type="integer")
     */
    private $building;

    /**
     * @var int
     *
     * @ORM\Column(name="billed", type="integer")
     */
    private $billed;

    /**
     * @var float
     *
     * @ORM\Column(name="eng_time", type="float")
     */
    private $engTime;

    /**
     * @var float
     *
     * @ORM\Column(name="draw_time", type="float")
     */
    private $drawTime;

    /**
     * @var Plan
     *
     * @ORM\ManyToOne(targetEntity="BG\CoreBundle\Entity\Plan", cascade={"persist"})
     * @ORM\JoinColumn(nullable = false)
     */
    private $plan;

    /**
     * @var Advancement
     *
     * @ORM\ManyToMany(targetEntity="BG\CoreBundle\Entity\Advancement", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable = false)
     */
    private $states;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->billed=0;
        $this->states = new \Doctrine\Common\Collections\ArrayCollection();
        $this->addState(new \BG\CoreBundle\Entity\Advancement());
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
     * Set plan.
     *
     * @param \BG\CoreBundle\Entity\Plan $plan
     *
     * @return Service
     */
    public function setPlan(\BG\CoreBundle\Entity\Plan $plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan.
     *
     * @return \BG\CoreBundle\Entity\Plan
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Add state.
     *
     * @param \BG\CoreBundle\Entity\Advancement $state
     *
     * @return Service
     */
    public function addState(\BG\CoreBundle\Entity\Advancement $state)
    {
        $this->states[] = $state;

        return $this;
    }

    /**
     * Remove state.
     *
     * @param \BG\CoreBundle\Entity\Advancement $state
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeState(\BG\CoreBundle\Entity\Advancement $state)
    {
        return $this->states->removeElement($state);
    }

    /**
     * Get states.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStates()
    {
        return $this->states;
    }
}
