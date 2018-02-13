<?php

namespace BG\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Event\PreUpdateEventArgs;

/**
 * Parameters
 *
 * @ORM\Table(name="parameters")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="BG\CoreBundle\Repository\ParametersRepository")
 */
class Parameters
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
     * @var float
     *
     * @ORM\Column(name="eng_rate", type="float")
     */
    private $engRate;

    /**
     * @var float
     *
     * @ORM\Column(name="draw_rate", type="float")
     */
    private $drawRate;

    /**
     * @var float
     *
     * @ORM\Column(name="vat", type="float")
     */
    private $vat;

    /**
     * Constructor.
     *
     */
    public function __construct(float $engRate, float $drawRate, float $vat)
    {
      $this->engRate = $engRate;
      $this->drawRate = $drawRate;
      $this->vat = $vat;
    }

    /**
     * @ORM\PreUpdate
     */
    public function updateVat(PreUpdateEventArgs $args)
    {
      $entity = $args->getObject();
      $em = $args->getObjectManager();

      $vat = $entity->getVat();

      /*if ($args->hasChangedField('vat'))
      {
        $quotes = $em->getRepository('BGCoreBundle:Quote')->findAllByStatus(array('En attente', 'En cours'));
        foreach($quotes as $quote)
        {
          $quote->setVat($vat);
        }
        $em->flush();
      }*/
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
     * Set engRate.
     *
     * @param float $engRate
     *
     * @return Parameters
     */
    public function setEngRate($engRate)
    {
        $this->engRate = $engRate;

        return $this;
    }

    /**
     * Get engRate.
     *
     * @return float
     */
    public function getEngRate()
    {
        return $this->engRate;
    }

    /**
     * Set drawRate.
     *
     * @param float $drawRate
     *
     * @return Parameters
     */
    public function setDrawRate($drawRate)
    {
        $this->drawRate = $drawRate;

        return $this;
    }

    /**
     * Get drawRate.
     *
     * @return float
     */
    public function getDrawRate()
    {
        return $this->drawRate;
    }

    /**
     * Set vat.
     *
     * @param float $vat
     *
     * @return Parameters
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat.
     *
     * @return float
     */
    public function getVat()
    {
        return $this->vat;
    }
}
