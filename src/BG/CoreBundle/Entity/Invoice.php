<?php

namespace BG\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice
 *
 * @ORM\Entity(repositoryClass="BG\CoreBundle\Repository\InvoiceRepository")
 */
class Invoice
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
   * @ORM\Column(name="ref", type="integer")
   */
  private $ref;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="date", type="datetime")
   */
  private $date;

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
   * @var Status
   *
   * @ORM\OneToOne(targetEntity="BG\CoreBundle\Entity\Status" , cascade={"persist", "remove"})
   * @ORM\JoinColumn(name="status", referencedColumnName="id", onDelete="CASCADE")
   */
  private $status;

  /**
   * @var Customer
   *
   * @ORM\ManyToOne(targetEntity="BG\CoreBundle\Entity\Customer" , cascade={"persist", "remove"})
   */
  private $customer;

  /**
   * @var Service
   *
   * @ORM\ManyToMany(targetEntity="BG\CoreBundle\Entity\Service", cascade={"persist", "remove"})
   */
  private $services;

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
     * Set ref.
     *
     * @param int $ref
     *
     * @return Invoice
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref.
     *
     * @return int
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Invoice
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set engRate.
     *
     * @param float $engRate
     *
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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

    /**
     * Set status.
     *
     * @param \BG\CoreBundle\Entity\Status|null $status
     *
     * @return Invoice
     */
    public function setStatus(\BG\CoreBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return \BG\CoreBundle\Entity\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set customer.
     *
     * @param \BG\CoreBundle\Entity\Customer|null $customer
     *
     * @return Invoice
     */
    public function setCustomer(\BG\CoreBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer.
     *
     * @return \BG\CoreBundle\Entity\Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Add service.
     *
     * @param \BG\CoreBundle\Entity\Service $service
     *
     * @return Invoice
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
}
