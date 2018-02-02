<?php

namespace BG\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use BG\CoreBundle\Entity\Quote;
use BG\CoreBundle\Entity\Customer;
use BG\CoreBundle\Entity\Advancement;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use BG\CoreBundle\Form\AdvancementType;
use BG\CoreBundle\Form\QuoteType;
use Symfony\Component\HttpFoundation\JsonResponse;

class CoreController extends Controller
{
  public function homeAction()
  {
    return $this->render('@BGCore/Core/home.html.twig', array(
      "quotes" => $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Quote')->findAllByStatus(array("En attente", "En cours"))
    ));
  }

  public function archivesAction()
  {
    return $this->render('@BGCore/Core/home.html.twig', array(
      'quotes' => $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Quote')->findAllByStatus(array("Terminé", "Annulé"))
    ));
  }

  public function billStackAction()
  {
    return $this->render('@BGCore/Core/billstack.html.twig', array(
      'bills' => $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:StackedBill')->findAll()
    ));
  }

  public function getPlansAction()
  {
    foreach($this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Plan')->findAll() as $plan)
      $data[] = array(
        'id' => $plan->getId(),
        'text' => $plan->__toString(),
      );
    return new JsonResponse($data);
  }

  public function getCustomersAction()
  {
    foreach($this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Customer')->findAll() as $customer)
      $data[] = array(
        'id' => $customer->getId(),
        'text' => $customer->__toString(),
      );
    return new JsonResponse($data);
  }

  public function newQuoteAction(Request $request)
  {
    $quote = new Quote();

    $form = $this->get('form.factory')->create(QuoteType::class, $quote);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($quote);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Devis bien enregistrée.');

      return $this->redirectToRoute('BG_CoreBundle_home');
    }

    return $this->render('@BGCore/Core/quote.html.twig', array(
      'form' => $form->createView(),
      'customers' => $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Customer')->findAll(),
      'parameters' => $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Parameters')->find(1),
      'title' => 'AJOUTER UN DEVIS'
    ));
  }

  public function modifyQuoteAction(int $id, Request $request)
  {
    $quote = $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Quote')->find($id);

    $form = $this->get('form.factory')->create(QuoteType::class, $quote);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($quote);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Devis bien enregistrée.');

      return $this->redirectToRoute('BG_CoreBundle_home');
    }

    return $this->render('@BGCore/Core/quote.html.twig', array(
      'form' => $form->createView(),
      'customers' => $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Customer')->findAll(),
      'parameters' => $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Parameters')->find(1),
      'title' => 'MODIFIER LE DEVIS'
    ));
  }

  public function customersAction()
  {
    return $this->render('@BGCore/Core/customers.html.twig', array(
      'customers' => array()
    ));
  }

  public function plansAction()
  {
    return $this->render('@BGCore/Core/plans.html.twig', array(
      'plans' => array()
    ));
  }

  public function settingsAction()
  {
    return $this->render('@BGCore/Core/settings.html.twig', array(
      'settings' => array()
    ));
  }

  public function addStateAction(int $id, int $sid)
  {
    $adv = new Advancement();
    $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Service')->find($sid)->addState(
      $adv->setValue($this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Service')->findMaxAdvancement($sid)->getValue())
    );
    $this->getDoctrine()->getManager()->flush();
    return $this->redirectToRoute('BG_CoreBundle_service', array('id' => $id, 'sid' => $sid));
  }

  public function removeStateAction(int $id, int $sid, int $aid)
  {
    $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Service')->find($sid)->removeState(
      $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Advancement')->find($aid)
    );
    $this->getDoctrine()->getManager()->flush();
    return $this->redirectToRoute('BG_CoreBundle_service', array('id' => $id, 'sid' => $sid));
  }

  public function viewAction(int $id)
  {
    return $this->render('@BGCore/Core/view.html.twig', array(
      'quote' => $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Quote')->find($id)
    ));
  }

  public function serviceAction(int $id, int $sid, Request $request)
  {
    $max = $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Service')->findMaxAdvancement($sid);

    $form = $this->get('form.factory')->create(AdvancementType::class, $max);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($max);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Avancement bien enregistrée.');

      return $this->redirectToRoute('BG_CoreBundle_service', array('id' => $id, 'sid' => $sid));
    }

    return $this->render('BGCoreBundle:Core:service.html.twig', array(
      'form' => $form->createView(),
      'id' => $id,
      'max' => $max,
      'service' => $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Service')->find($sid)
    ));
  }

  public function changeStatusAction(int $id, string $status)
  {
    $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Quote')->changeStatus($id, $status);
    return $this->redirectToRoute('BG_CoreBundle_view', array('id' => $id));
  }
}
