<?php

namespace BG\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
   * @var boolean
   *
   * @ORM\Column(name="is_used", type="boolean")
   */
  private $isUsed;

  /**
   * @var string
   *
   * @ORM\Column(name="level", nullable=true, type="string", length=255)
   */
  private $level;

  /**
   * @var int
   *
   * @ORM\Column(name="drawing", type="string", length=255)
   */
  private $drawing;

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
   * @Assert\NotNull()
   */
  private $engTime;

  /**
   * @var float
   *
   * @ORM\Column(name="draw_time", type="float")
   * @Assert\NotNull()
   */
  private $drawTime;

  /**
   * @var int
   *
   * @ORM\Column(name="grade", type="integer")
   */
  private $grade;

  /**
   * @var float
   *
   * @ORM\Column(name="advancement", type="float")
   */
  private $advancement;

  /**
   * @var string|null
   *
   * @ORM\Column(name="labels", type="simple_array", nullable=true)
   */
  private $labels;

  /**
   * Constructor
   */
  public function __construct()
  {
    $this->isUsed = false;
    $this->billed = 0;
    $this->grade = 0;
    $this->advancement = 0;
  }

  /**
   * Constructor from Base
   */
  public static function fromBase($serv)
  {
    $service = new Service();
    $service->setLevel($serv->getLevel());
    $service->setDrawing($serv->getDrawing());
    if($serv instanceof Service)
      $service->setIsUsed($serv->getisUsed());
    return $service;
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
     * Set isUsed.
     *
     * @param bool $isUsed
     *
     * @return Service
     */
    public function setIsUsed($isUsed)
    {
        $this->isUsed = $isUsed;

        return $this;
    }

    /**
     * Get isUsed.
     *
     * @return bool
     */
    public function getIsUsed()
    {
        return $this->isUsed;
    }

    /**
     * Set level.
     *
     * @param string|null $level
     *
     * @return Service
     */
    public function setLevel($level = null)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level.
     *
     * @return string|null
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



    /**
     * Equals function.
     *
     * @return boolean
     */
    public function equals(Service $service)
    {
      return $this->getLevel() == $service->getLevel()
      && $this->getDrawing() == $service->getDrawing()
      && $this->getEngTime() == $service->getEngTime()
      && $this->getDrawTime() == $service->getDrawTime()
      && $this->getGrade() == $service->getGrade();
    }

    /**
     * Get price.
     *
     * @return float
     */
    public function getPrice(float $engRate, float $drawRate) : float
    {
      return (($this->getEngTime()*8)*$engRate) + (($this->getDrawTime()*8)*$drawRate);
    }

    /**
     * Adjust the price.
     *
     */
    public function adjust(float $expected, float $engRate, float $drawRate)
    {
      $engPrice = ($this->getEngTime()*8)*$engRate;
      $drawPrice = ($this->getDrawTime()*8)*$drawRate;
      $expectedEngPrice = $expected - $drawPrice;
      $this->setEngTime($expectedEngPrice/$engRate/8);
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

    /**
     * Set labels.
     *
     * @param array|null $labels
     *
     * @return Service
     */
    public function setLabels($labels = null)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Get labels.
     *
     * @return array|null
     */
    public function getLabels()
    {
        return $this->labels;
    }

    public function addLabel(string $value)
    {
      $this->labels[] = $value;
    }
}
