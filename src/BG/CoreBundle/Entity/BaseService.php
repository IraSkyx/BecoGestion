<?php

namespace BG\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseService
 *
 * @ORM\Entity(repositoryClass="BG\CoreBundle\Repository\BaseServiceRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"base" = "BaseService", "service" = "Service"})
 */
class BaseService
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
     * @ORM\Column(name="is_used", nullable=true, type="boolean")
     */
    private $isUsed;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255)
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="drawing", type="string", length=255)
     */
    private $drawing;

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
     * Set level.
     *
     * @param string $level
     *
     * @return BaseService
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
     * @return BaseService
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
     * To String.
     *
     * @return string
     */
    public function __toString()
    {
      return "{$this->level} - {$this->drawing}";
    }

    /**
     * Set isUsed.
     *
     * @param bool|null $isUsed
     *
     * @return BaseService
     */
    public function setIsUsed($isUsed = null)
    {
        $this->isUsed = $isUsed;

        return $this;
    }

    /**
     * Get isUsed.
     *
     * @return bool|null
     */
    public function getIsUsed()
    {
        return $this->isUsed;
    }
}
