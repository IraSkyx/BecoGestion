<?php

namespace BG\QuoteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseService
 *
 * @ORM\Table(name="base_service")
 * @ORM\Entity(repositoryClass="BG\QuoteBundle\Repository\BaseServiceRepository")
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
     * @param string|null $level
     *
     * @return BaseService
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
}
