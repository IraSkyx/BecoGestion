<?php

namespace BG\BillBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchivedBill
 *
 * @ORM\Entity(repositoryClass="BG\BillBundle\Repository\ArchivedBillRepository")
 */
class ArchivedBill
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
    * @ORM\Column(name="quote_id", type="integer")
    */
    private $quote_id;

    /**
    * @var string
    *
    * @ORM\Column(name="ref", type="string", length=255)
    */
    private $ref;

  /**
   * @var string
   *
   * @ORM\Column(name="name", type="string", length=255)
   */
  private $name;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="creation_date", type="datetime")
   */
  private $creationDate;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="payement_date", type="datetime")
   */
  private $payementDate;

  /**
   * @var boolean
   *
   * @ORM\Column(name="is_paid", type="boolean")
   */
  private $isPaid;

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
   * @ORM\OneToOne(targetEntity="BG\QuoteBundle\Entity\Status" , cascade={"persist", "remove"})
   * @ORM\JoinColumn(name="status", referencedColumnName="id", onDelete="CASCADE")
   */
  private $status;

  /**
   * @var Customer
   *
   * @ORM\ManyToOne(targetEntity="BG\CustomerBundle\Entity\Customer" , cascade={"persist", "remove"})
   */
  private $customer;

  /**
   * @var Service
   *
   * @ORM\ManyToMany(targetEntity="BG\QuoteBundle\Entity\Service", cascade={"persist", "remove"})
   */
  private $services;

  /**
   * Constructor
   */
  public function __construct(Bill $bill)
  {
    $this->quote_id = $bill->getQuoteId();
    $this->ref = $bill->getRef();
    $this->isPaid = false;
    $this->name = $bill->getName();
    $this->creationDate = $bill->getCreationDate();
    $this->payementDate = $bill->getPayementDate();
    $this->engRate = $bill->getEngRate();
    $this->drawRate = $bill->getDrawRate();
    $this->vat = $bill->getVat();
    $this->status = $bill->getStatus();
    $this->customer = $bill->getCustomer();
    $this->services = $bill->getServices();
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
     * Set quote_id.
     *
     * @param int $quote_id
     *
     * @return ArchivedBill
     */
    public function setQuoteId($quote_id)
    {
        $this->quote_id = $quote_id;

        return $this;
    }

    /**
     * Get quote_id.
     *
     * @return int
     */
    public function getQuoteId()
    {
        return $this->quote_id;
    }

    /**
     * Set ref.
     *
     * @param string $ref
     *
     * @return ArchivedBill
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref.
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set isPaid.
     *
     * @param bool $isPaid
     *
     * @return ArchivedBill
     */
    public function setIsPaid($isPaid)
    {
        $this->isPaid = $isPaid;

        return $this;
    }

    /**
     * Get isPaid.
     *
     * @return bool
     */
    public function getIsPaid()
    {
        return $this->isPaid;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return ArchivedBill
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set creation date.
     *
     * @param \DateTime $creationDate
     *
     * @return ArchivedBill
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creation date.
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set payement date.
     *
     * @param \DateTime $payementDate
     *
     * @return ArchivedBill
     */
    public function setPayementDate($payementDate)
    {
        $this->payementDate = $payementDate;

        return $this;
    }

    /**
     * Get payement date.
     *
     * @return \DateTime
     */
    public function getPayementDate()
    {
        return $this->payementDate;
    }

    /**
     * Set engRate.
     *
     * @param float $engRate
     *
     * @return ArchivedBill
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
     * @return ArchivedBill
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
     * @return ArchivedBill
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
     * @param \BG\QuoteBundle\Entity\Status|null $status
     *
     * @return ArchivedBill
     */
    public function setStatus(\BG\QuoteBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return \BG\QuoteBundle\Entity\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set customer.
     *
     * @param \BG\CustomerBundle\Entity\Customer|null $customer
     *
     * @return ArchivedBill
     */
    public function setCustomer(\BG\CustomerBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer.
     *
     * @return \BG\CustomerBundle\Entity\Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Add service.
     *
     * @param \BG\QuoteBundle\Entity\Service $service
     *
     * @return ArchivedBill
     */
    public function addService(\BG\QuoteBundle\Entity\Service $service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * Remove service.
     *
     * @param \BG\QuoteBundle\Entity\Service $service
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeService(\BG\QuoteBundle\Entity\Service $service)
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

    public function getTotalEt() {
      $sum = 0;
      foreach($this->getServices() as $service)
        $sum += $service->getBilled();
      return $sum;
    }
}
