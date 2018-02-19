<?php

namespace BG\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BG\BillBundle\Entity\Invoice;

/**
 * Quote
 *
 * @ORM\Table(name="quote")
 * @ORM\Entity(repositoryClass="BG\CoreBundle\Repository\QuoteRepository")
 */
class Quote
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

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
     * @var integer
     *
     * @ORM\Column(name="delay", type="integer")
     */
    private $delay;

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
     */
    private $status;

    /**
     * @var Customer
     *
     * @ORM\ManyToOne(targetEntity="BG\CoreBundle\Entity\Customer" , cascade={"persist"})
     */
    private $customer;

    /**
     * @var Building
     *
     * @ORM\ManyToMany(targetEntity="BG\CoreBundle\Entity\Building", cascade={"persist", "remove"})
     */
    private $buildings;

    /**
     * Constructor
     */
    public function __construct($engRate, $drawRate, $vat)
    {
        $this->engRate = $engRate;
        $this->drawRate = $drawRate;
        $this->vat = $vat;
        $this->delay = 30;

        $this->status = new Status("warning", "En attente");
        $this->date = new \DateTime();
        $this->buildings = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function billService(Service $service) : Service
    {
      //OPERATIONS
      $advancement = $service->getMaxState();
      $engPrice = $service->getEngTime()*$this->getEngRate();
      $drawPrice = $service->getDrawTime()*$this->getDrawRate();
      $subtotal = ($engPrice+$drawPrice)*($advancement/100);
      $total = $subtotal-$service->getBilled();
      $service->setBilled($subtotal);

      //COPY
      $serv = new Service();
      $serv->setCode($service->getCode());
      $serv->setBuilding($service->getBuilding());
      $serv->setBilled($total);
      $serv->setEngTime($service->getEngTime());
      $serv->setDrawTime($service->getDrawTime());
      $serv->setGrade($service->getGrade());
      $serv->setLevel($service->getLevel());
      $serv->setDrawing($service->getDrawing());
      $serv->setStates(new \Doctrine\Common\Collections\ArrayCollection());

      return $serv;
    }

    public function generateInvoice() : Invoice
    {
      $invoice = new Invoice();
      $invoice->setRef($this->getId());
      $invoice->setCreationDate(new \DateTime('NOW'));
      $invoice->setPayementDate(new \DateTime('NOW'));
      $invoice->getPayementDate()->modify('+30 days');
      $invoice->setEngRate($this->getEngRate());
      $invoice->setDrawRate($this->getDrawRate());
      $invoice->setVat($this->getVat());
      $invoice->setStatus(new Status("warning","En attente"));
      $invoice->setCustomer(Customer::clone($this->getCustomer()));

      foreach($this->getServices() as $service)
        $invoice->addService($this->billService($service));

      return $invoice;
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
     * Set name.
     *
     * @param string $name
     *
     * @return Quote
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
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Quote
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
     * @return Quote
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
     * @return Quote
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
     * @return Quote
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
     * @param string $status
     *
     * @return Quote
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string
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
     * @return Quote
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
     * Add building.
     *
     * @param \BG\CoreBundle\Entity\Building $buildings
     *
     * @return Quote
     */
    public function addService(\BG\CoreBundle\Entity\Building $building)
    {
        $this->buildings[] = $building;

        return $this;
    }

    /**
     * Remove building.
     *
     * @param \BG\CoreBundle\Entity\Building $building
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeService(\BG\CoreBundle\Entity\Building $building)
    {
        return $this->buildings->removeElement($building);
    }

    /**
     * Get buildings.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBuildings()
    {
        return $this->buildings;
    }

    /**
     * Set delay.
     *
     * @param int $delay
     *
     * @return Quote
     */
    public function setDelay($delay)
    {
        $this->delay = $delay;

        return $this;
    }

    /**
     * Get delay.
     *
     * @return int
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * Add building.
     *
     * @param \BG\CoreBundle\Entity\Building $building
     *
     * @return Quote
     */
    public function addBuilding(\BG\CoreBundle\Entity\Building $building)
    {
        $this->buildings[] = $building;

        return $this;
    }

    /**
     * Remove building.
     *
     * @param \BG\CoreBundle\Entity\Building $building
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeBuilding(\BG\CoreBundle\Entity\Building $building)
    {
        return $this->buildings->removeElement($building);
    }
}
