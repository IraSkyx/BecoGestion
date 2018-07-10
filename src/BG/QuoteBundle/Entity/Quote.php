<?php

namespace BG\QuoteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BG\BillBundle\Entity\Bill;
use BG\CustomerBundle\Entity\Customer;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\Validator\Constraints as Assert;
use BG\SlipBundle\Entity\Slip;

/**
 * Quote
 *
 * @ORM\Table(name="quote")
 * @ORM\Entity(repositoryClass="BG\QuoteBundle\Repository\QuoteRepository")
 * @ORM\HasLifecycleCallbacks()
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
     * @ORM\Column(name="ref", type="string", length=255, nullable=true)
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
     * @ORM\OneToOne(targetEntity="BG\QuoteBundle\Entity\Status" , cascade={"persist", "remove"})
     */
    private $status;

    /**
     * @var Customer
     *
     * @Assert\NotNull()
     * @ORM\ManyToOne(targetEntity="BG\CustomerBundle\Entity\Customer" , cascade={"persist"})
     */
    private $customer;

    /**
     * @var Building
     *
     * @ORM\ManyToMany(targetEntity="BG\QuoteBundle\Entity\Building", cascade={"persist", "remove"})
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
      $advancement = $service->getAdvancement();
      $engPrice = ($service->getEngTime()*8)*$this->getEngRate();
      $drawPrice = ($service->getDrawTime()*8)*$this->getDrawRate();
      $subtotal = ($engPrice+$drawPrice)*($advancement/100);
      $total = $subtotal-$service->getBilled();
      $service->setBilled($subtotal);

      //COPY
      $serv = new Service();
      $serv->setIsUsed($service->getIsUsed());
      $serv->setLevel($service->getLevel());
      $serv->setDrawing($service->getDrawing());
      $serv->setBilled($total);
      $serv->setEngTime($service->getEngTime());
      $serv->setDrawTime($service->getDrawTime());
      $serv->setGrade($service->getGrade());
      $serv->setAdvancement($service->getAdvancement());

      return $serv;
    }

    public function generateBill() : Bill
    {
      $bill = new Bill();
      $bill->setQuoteId($this->getId());
      $bill->setRef($this->getRef());
      $bill->setName($this->getName());
      $bill->setCreationDate(new \DateTime('NOW'));
      $bill->setPayementDate(new \DateTime('NOW'));
      $bill->getPayementDate()->modify('+'.$this->getDelay().' days');
      $bill->setEngRate($this->getEngRate());
      $bill->setDrawRate($this->getDrawRate());
      $bill->setVat($this->getVat());
      $bill->setStatus(new Status("warning","En attente de validation"));
      $bill->setCustomer($this->getCustomer()->getCompanyName());

      foreach($this->getBuildings() as $building)
      {
        foreach($building->getServices() as $service)
        {
          if($service->getIsUsed())
            $bill->addService($this->billService($service));
        }
        foreach($building->getSpecialServices() as $specialService){
          $bill->addService($this->billService($specialService));
        }
      }

      return $bill;
    }

    public function upgrade(Slip $slip) 
    {
        foreach($slip->getBuildings() as $building)
        {
            $services = $this->getBuildings()->get($building->getNum() - 1)->getServices();
            foreach($building->getServices() as $service)
            {
                if(implode("", $service->getLabels()) != "")
                {
                    $toUpgrade = $services->filter(function($entry) use ($service) {
                        return $entry->getLevel() == $service->getLevel() && $entry->getDrawing() == $service->getDrawing();
                    })->first();

                    if($toUpgrade != NULL)
                        $toUpgrade->setGrade($toUpgrade->getGrade() + 1);   
                }        
            }
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
     * @ORM\PostPersist 
     */
    public function setReference(LifecycleEventArgs $args)
    {
        $this->setRef(date('d') . "-" . date('m') . "-" . $this->getId());
        $args->getEntityManager()->flush();
    }

    /**
     * Set ref.
     *
     * @param string $ref
     *
     * @return Quote
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
     * @param \BG\CustomerBundle\Entity\Customer $customer
     *
     * @return Quote
     */
    public function setCustomer(\BG\CustomerBundle\Entity\Customer $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer.
     *
     * @return \BG\CustomerBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
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
     * @param \BG\QuoteBundle\Entity\Building $building
     *
     * @return Quote
     */
    public function addBuilding(\BG\QuoteBundle\Entity\Building $building)
    {
        $this->buildings[] = $building;

        return $this;
    }

    /**
     * Remove building.
     *
     * @param \BG\QuoteBundle\Entity\Building $building
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeBuilding(\BG\QuoteBundle\Entity\Building $building)
    {
        $array = $this->getBuildings();
        foreach($array->slice($array->indexOf($building)) as $build)
          $build->setNum($build->getNum() - 1);
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
     * Reduce the total price.
     *
     */
    public function reduce(int $value)
    {
      while($this->getTotal() > $value)
      {
        foreach($this->getBuildings() as $building)
        {
            foreach($building->getServices() as $service)
            {
                if($service->getEngTime() - 0.1 > 0)
                    $service->setEngTime($service->getEngTime() - 0.1);
                if($service->getDrawTime() - 0.1 > 0)
                    $service->setDrawTime($service->getDrawTime() - 0.1);
                if($this->getTotal() < $value)
                    return;
            }
        }
      }
    }

    /**
     * Round the total to a specific value.
     */
    public function round(int $value)
    {
        $this->reduce($value);

        foreach($this->getBuildings() as $building)
            foreach($building->getServices() as $service)
                $service->setEngTime($service->getEngTime() * $this->getEngRate());

        $this->setEngRate(1);   

        $delta = $value - $this->getTotal();
        $service = $this->getBuildings()->first()->getServices()->first();

        $service->setEngTime($service->getEngTime() + $delta/8);
    }

    /**
     * Revert the round. 
     */
    public function revert(int $engRate)
    {
        foreach($this->getBuildings() as $building)
            foreach($building->getServices() as $service)
            {
                $service->setEngTime(0);
                $service->setDrawTime(0);
            }             

        $this->setEngRate($engRate);   
    }

    /**
     * Get the total price of the quote.
     *
     * @return float
     */
    public function getTotal() : float
    {
      $total = 0;
      foreach($this->getBuildings() as $building)
        foreach($building->getServices() as $service)
          $total += (($service->getEngTime()*8)*$this->getEngRate()) + (($service->getDrawTime()*8)*$this->getDrawRate());
      return round($total);
    }
}
