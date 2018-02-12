<?php

namespace BG\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\HasLifecycleCallbacks()
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
     * @ORM\Column(name="code", type="integer")
     */
    private $code;

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
     * @var int
     *
     * @ORM\Column(name="grade", type="integer")
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="drawing", type="string", length=255)
     */
    private $drawing;

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
        $this->billed = 0;
        $this->grade = 0;
        $this->states = new \Doctrine\Common\Collections\ArrayCollection();
        $this->addState(new \BG\CoreBundle\Entity\Advancement());
    }

    /**
     * @ORM\PostPersist
     */
    public function insertNewPlans(LifecycleEventArgs $args)
    {
      $entity = $args->getObject();
      $em = $args->getObjectManager();

      if($em->getRepository('BGCoreBundle:Plan')->exist($entity->getCode(), $entity->getLevel(), $entity->getDrawing()) == false)
      {
        $plan = new Plan($entity->getCode(), $entity->getLevel(), $entity->getDrawing());
        $em->persist($plan);
        $em->flush();
      }
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
     * Set code.
     *
     * @param int $code
     *
     * @return Service
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code.
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
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
     * Set level.
     *
     * @param string $level
     *
     * @return Service
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level.
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set drawing.
     *
     * @param string $drawing
     *
     * @return Service
     */
    public function setDrawing($drawing)
    {
        $this->drawing = $drawing;

        return $this;
    }

    /**
     * Get drawing.
     *
     * @return string
     */
    public function getDrawing()
    {
        return $this->drawing;
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
        $res = $this->states->removeElement($state);
        if($this->states->isEmpty())
          $this->addState(new Advancement());
        return $res;
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

    /**
     * Set states.
     *
     * @param \Doctrine\Common\Collections\Collection $states
     *
     * @return Service
     */
    public function setStates(\Doctrine\Common\Collections\Collection $states)
    {
        $this->states = $states;

        return $this;
    }

    /**
     * Get current max state.
     *
     * @return int
     */
    public function getMaxState() : int
    {
      $max = 0;
      foreach($this->getStates() as $state)
        if($state->getValue() > $max)
          $max = $state->getValue();
      return $max;
    }

    /**
     * To String.
     *
     * @return string
     */
    public function __toString()
    {
      return "{$this->level} - {$this->drawing}";
    }
}
