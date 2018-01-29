<?php

namespace BG\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BG\CoreBundle\Entity\Quote;
use BG\CoreBundle\Entity\Customer;
use BG\CoreBundle\Entity\Advancement;
use BG\CoreBundle\Entity\Service;
use BG\CoreBundle\Entity\Plan;

class LoadQuote implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
      //CREATE PLANS
      $myplan = new Plan();
      $myplan2 = new Plan();
      $myplan->setDrawing("Descente de charges")->setLevel("DDC");
      $myplan2->setDrawing("Coffrage")->setLevel("Voile par passes");
      $manager->persist($myplan);
      $manager->persist($myplan2);

      //CREATE CUSTOMERS
      $customer = new Customer();
      $customer->setFirstName("Billy")->setLastName("Bob")->setCompanyName("BillyBobCompany")->setAddress("16, rue billy")->setPostcode(63000)->setCity("BillyCity");
      $manager->persist($customer);

      //CREATE ADVANCEMENT
      $adv = new Advancement();
      $adv2 = new Advancement();

      $adv3 = new Advancement();
      $adv4 = new Advancement();

      //CREATE SERVICE
      $service1 = new Service();
      $service2 = new Service();
      $service1->setBuilding(1)->setEngTime(10)->setDrawTime(5)->setPlan($myplan)->addState($adv)->addState($adv2);
      $service2->setBuilding(2)->setEngTime(15)->setDrawTime(7)->setPlan($myplan2)->addState($adv3)->addState($adv4);
      $manager->persist($service1);
      $manager->persist($service2);

      //CREATE QUOTE
      $quote = new Quote();
      $quote->setCustomer($customer);
      $quote->addService($service1);
      $quote->addService($service2);
      $manager->persist($quote);

    $manager->flush();
  }
}
