<?php

namespace BG\QuoteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BG\BillBundle\Entity\Bill;
use BG\CustomerBundle\Entity\Customer;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Quote
 *
 * @ORM\Table(name="quote")
 * @ORM\Entity(repositoryClass="BG\QuoteBundle\Repository\QuoteRepository")
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
      $bill->setRef($this->getId());
      $bill->setName($this->getName());
      $bill->setCreationDate(new \DateTime('NOW'));
      $bill->setPayementDate(new \DateTime('NOW'));
      $bill->getPayementDate()->modify('+'.$this->getDelay().' days');
      $bill->setEngRate($this->getEngRate());
      $bill->setDrawRate($this->getDrawRate());
      $bill->setVat($this->getVat());
      $bill->setStatus(new Status("warning","En attente"));
      $bill->setCustomer(Customer::clone($this->getCustomer()));

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
        $building = $this->getBuildings()->first();
        $service = $building ->getServices()->first();
        while(($value - $this->getTotal()) % $this->getEngRate() != 0)
        {
            if($service->getEngTime() - 0.1 > 0 && $service->getDrawTime() - 0.1 > 0)
            {
                $service->setEngTime($service->getEngTime() - 0.1);
                if($this->getTotal() < $value)
                    return;
                $service->setDrawTime($service->getDrawTime() - 0.1);
                if($this->getTotal() < $value)
                    return;
            }
            else
            {
                $service = $building->getServices()->next();
                if($service == NULL)
                { 
                    $building = $this->getBuildings()->next();
                    if($building == NULL)
                        return;
                    $service = $building->getServices()->first();
                }
            }           
        }
    }

    /**
     * Adjust the total to a specific value.
     *
     */
    public function adjust(int $value)
    {
        $service = $this->getBuildings()->first()->getServices()->first();
        $service->setEngTime(0);
        $delta = $value - $this->getTotal();
        $service->setEngTime($delta/$this->getEngRate());
        throw new \Exception("Delta: ".$delta." / Res: ". ($delta/$this->getEngRate()));
    }

    /**
     * Floor all the service prices.
     *
     */
    public function floor()
    {
        foreach($this->getBuildings() as $building)
        {
            foreach($building->getServices() as $service)
            {
                $service->setEngTime(floor($service->getEngTime()));
                $service->setDrawTime(floor($service->getDrawTime()));
            }
        }
    }

    /**
     * Round the total to a specific value.
     *
     */
    public function round(int $value)
    {
        if($value > $this->getTotal())
            throw new \Exception("Veuillez indiquer une valeur inférieure au total");
      
        $this->reduce($value); 
        $this->floor(); 
        $this->adjust($value);

        if($value != $this->getTotal())
            throw new \Exception("Erreur: Impossible d'arrondir le devis " . $this->getTotal());
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
