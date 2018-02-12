<?php

namespace BG\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BG\CoreBundle\Entity\Quote;
use BG\CoreBundle\Entity\Customer;
use BG\CoreBundle\Entity\Advancement;
use BG\CoreBundle\Entity\Service;
use BG\CoreBundle\Entity\Plan;
use BG\CoreBundle\Entity\Parameters;

class LoadQuote implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
      //PARAMETERS
      $params = new Parameters(8,12,0.21);
      $manager->persist($params);

      //CREATE CUSTOMERS
      $customer = new Customer();
      $customer->setFirstName("Billy")->setLastName("Bob")->setCompanyName("BillyBobCompany")->setAddress("16, rue billy")->setPostcode(63000)->setCity("BillyCity");
      $manager->persist($customer);

      $manager->flush();

      //CREATE ADVANCEMENT
      $adv = new Advancement();
      $adv2 = new Advancement();

      $adv3 = new Advancement();
      $adv4 = new Advancement();

      //CREATE SERVICE
      $service1 = new Service();
      $service2 = new Service();
      $service1->setDrawing("Descente de charges")->setLevel("DDC")->setBuilding(1)->setEngTime(10)->setDrawTime(5)->addState($adv)->addState($adv2);
      $service2->setDrawing("Coffrage")->setLevel("Voile par passes")->setBuilding(2)->setEngTime(15)->setDrawTime(7)->addState($adv3)->addState($adv4);
      $manager->persist($service1);
      $manager->persist($service2);

      //CREATE QUOTE
      $quote = new Quote($params->getEngRate(), $params->getDrawRate(), $params->getVat());
      $quote->setCustomer($customer);
      $quote->addService($service1);
      $quote->addService($service2);
      $manager->persist($quote);

      $manager->flush();
  }
}
