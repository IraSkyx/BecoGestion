<?php

namespace BG\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SimpleService
 *
 * @ORM\Table(name="simple_service")
 * @ORM\Entity(repositoryClass="BG\CoreBundle\Repository\SimpleServiceRepository")
 */
class SimpleService implements IService
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
     * @ORM\Column(name="code", type="integer", unique=true)
     */
    private $code;

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
     * @var int
     *
     * @ORM\Column(name="prod_price", type="float")
     */
    private $prodPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="serv_price", type="float")
     */
    private $servPrice;

    /**
     * Constructor
     *
     * @param IService $service
     */
    public function __construct(IService $service, float $drawRate, float $engRate)
    {
      $this->code = $service->getPlan()->getId();
      $this->level = $service->getPlan()->getLevel();
      $this->drawing = $service->getPlan()->getDrawing();
      $this->prodPrice = (($service->getMaxState()*($service->getDrawTime()*$drawRate))/100) + (($service->getMaxState()*($service->getEngTime()*$engRate))/100);
      $this->servPrice = $this->servPrice * 0.2;
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
     * @return SimpleService
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
     * Set level.
     *
     * @param string $level
     *
     * @return SimpleService
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
     * @return SimpleService
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
     * Set prodPrice.
     *
     * @param float $prodPrice
     *
     * @return SimpleService
     */
    public function setProdPrice($prodPrice)
    {
        $this->prodPrice = $prodPrice;

        return $this;
    }

    /**
     * Get prodPrice.
     *
     * @return float
     */
    public function getProdPrice()
    {
        return $this->prodPrice;
    }

    /**
     * Set servPrice.
     *
     * @param float $servPrice
     *
     * @return SimpleService
     */
    public function setServPrice($servPrice)
    {
        $this->servPrice = $servPrice;

        return $this;
    }

    /**
     * Get servPrice.
     *
     * @return float
     */
    public function getServPrice()
    {
        return $this->servPrice;
    }
}
