<?php

namespace BG\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use BG\CoreBundle\Entity\Quote;
use BG\CoreBundle\Entity\Bill;
use BG\CoreBundle\Entity\Customer;
use BG\CoreBundle\Entity\Advancement;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use BG\CoreBundle\Form\AdvancementType;
use BG\CoreBundle\Form\ParametersType;
use BG\CoreBundle\Form\QuoteType;
use BG\BillBundle\Form\InvoiceType;
use BG\CoreBundle\Form\CustomerChoiceType;
use BG\CoreBundle\Form\CustomerType;
use BG\BillBundle\Entity\Invoice;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;

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

  public function invoicesAction()
  {
    return $this->render('@BGBill/invoices.html.twig', array(
      'invoices' => $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Invoice')->findAllByStatus(array("En attente", "En cours"))
    ));
  }

  public function generateAction(int $id)
  {
    $quote = $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Quote')->find($id);
    $invoice = $quote->generateInvoice();

    $em = $this->getDoctrine()->getManager();
    $em->persist($invoice);
    $em->flush();

    return $this->redirectToRoute('BG_CoreBundle_invoice', array('id' => $invoice->getId()));
  }

  public function invalidateAction(int $id)
  {
    $em = $this->getDoctrine()->getManager();
    $invoice = $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Invoice')->find($id);
    $quote = $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Quote')->find($invoice->getRef());

    foreach($quote->getServices() as $service)
      foreach($invoice->getServices() as $inv_service)
        if($service->equals($inv_service))
          $service->setBilled($service->getBilled() - $inv_service->getBilled());

    $em->remove($invoice);
    $em->flush();

    return $this->redirectToRoute('BG_CoreBundle_invoices');
  }

  public function pickDateAction(Request $request, int $id)
  {
    $invoice = $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Invoice')->find($id);

    $form = $this->get('form.factory')->create(InvoiceType::class, $invoice);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Facture bien enregistrée.');

      return $this->redirectToRoute('BG_CoreBundle_validate', array('id' => $id));
    }

    return $this->render('@BGBill/pickdate.html.twig', array(
      'form' => $form->createView()
    ));
  }

  public function validateAction(int $id)
  {
    $invoice = $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Invoice')->find($id);
    $invoice->getStatus()->setType("success")->setMessage("Terminé");
    $this->getDoctrine()->getManager()->flush();

    return $this->redirectToRoute('BG_CoreBundle_invoices');
  }

  public function invoiceAction(int $id)
  {
    $invoice = $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Invoice')->find($id);
    $html = $this->renderView('@BGBill/invoice.html.twig', array(
      'invoice' => $invoice
    ));

    return new Response(
      $this->get('knp_snappy.pdf')->getOutputFromHtml($html, [
        'header-html' => $this->renderView('@BGBill/header.html.twig'),
        'footer-html' => $this->renderView('@BGBill/footer.html.twig')
      ]),
      200,
      array(
          'Content-Type' => 'application/pdf'
      ));
  }

  public function getPlansAction()
  {
    $data = null;
    foreach($this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Plan')->findAll() as $plan)
      $data[] = array(
        'id' => $plan->getId(),
        'text' => $plan->__toString()
      );
    return new JsonResponse($data);
  }

  public function getCustomersAction()
  {
    foreach($this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Customer')->findByIsCloned(0) as $customer)
      $data[] = array(
        'id' => $customer->getId(),
        'text' => $customer->__toString()
      );
    return new JsonResponse($data);
  }

  public function newQuoteAction(Request $request)
  {
    $params = $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Parameters')->find(1);
    $quote = new Quote($params->getEngRate(), $params->getDrawRate(), $params->getVat());

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
      'parameters' => $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Parameters')->find(1),
      'title' => 'AJOUTER UN DEVIS',
      'route' => 'BG_CoreBundle_home',
      'params' => []
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

      return $this->redirectToRoute('BG_CoreBundle_view', array('id' => $id));
    }

    return $this->render('@BGCore/Core/quote.html.twig', array(
      'form' => $form->createView(),
      'parameters' => $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Parameters')->find(1),
      'title' => 'MODIFIER LE DEVIS',
      'route' => 'BG_CoreBundle_view',
      'params' => ['id' => $id]
    ));
  }

  public function customersAction(Request $request, $action)
  {
    $customer = $action == 'add' ? new Customer() : $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Customer')->find($action);
    $customer->setIsCloned(0);

    $form = $this->get('form.factory')->create(CustomerType::class, $customer);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($customer);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Client bien enregistré.');

      return $this->redirectToRoute('BG_CoreBundle_home');
    }

    return $this->render('@BGCore/Core/customers.html.twig', array(
      'form' => $form->createView(),
      'title' => $action == 'add' ? 'AJOUTER UN CLIENT' : 'MODIFIER UN CLIENT'
    ));
  }

  public function customerAction()
  {
    return $this->render('@BGCore/Core/customer.html.twig', array(
      'form' => $form = $this->get('form.factory')->create(CustomerChoiceType::class)->createView()
    ));
  }

  /*public function plansAction()
  {
    return $this->render('@BGCore/choice.html.twig', array(
      'title' => 'Gestion des plans'
    ));
  }*/

  public function settingsAction(Request $request)
  {
    $parameters = $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Parameters')->find(1);

    $form = $this->get('form.factory')->create(ParametersType::class, $parameters);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($parameters);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Paramètres bien enregistrés.');

      return $this->redirectToRoute('BG_CoreBundle_home');
    }

    return $this->render('@BGCore/Core/settings.html.twig', array(
      'form' => $form->createView()
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
