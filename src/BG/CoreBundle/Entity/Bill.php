<?php

namespace BG\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bill
 *
 * @ORM\Entity(repositoryClass="BG\CoreBundle\Repository\BillRepository")
 */
class Bill extends Quote
{
  /**
   * @var int
   *
   * @ORM\Column(name="ref", type="integer")
   */
  private $ref;

  public function __construct(Quote $quote)
  {
    $this
    ->setDate($quote->getDate())
    ->setEngRate($quote->getEngRate())
    ->setDrawRate($quote->getDrawRate())
    ->setVat($quote->getVat())
    ->setStatus(Status::clone($quote->getStatus()))
    ->setCustomer(Customer::clone($quote->getCustomer()));

    $this->ref = $quote->getId();

    foreach($quote->getServices() as $service)
      $this->addService(new SimpleService($service, $quote->getDrawRate(), $quote->getEngRate()));
  }

    /**
     * Set ref.
     *
     * @param int $ref
     *
     * @return Bill
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
}
