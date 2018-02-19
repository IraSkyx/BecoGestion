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
use BG\CoreBundle\Entity\Service;
use BG\CoreBundle\Entity\Building;
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
      'invoices' => $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Invoice')->findAllByStatus(array("En attente"))
    ));
  }

  public function archivesInvoicesAction()
  {
    return $this->render('@BGBill/invoices.html.twig', array(
      'invoices' => $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Invoice')->findAllByStatus(array("Terminé")),
      'archives' => true
    ));
  }

  public function slipAction(int $id)
  {
    $slip = null;
    //$slip = $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Slip')->find($id);
    $html = $this->renderView('@BGBill/slip.html.twig', array(
      'slip' => $slip
    ));

    return new Response(
      $this->get('knp_snappy.pdf')->getOutputFromHtml($html, [
        'header-html' => $this->renderView('@BGBill/header.html.twig'),
        'footer-html' => $this->renderView('@BGBill/footer-slip.html.twig')
      ]),
      200,
      array(
          'Content-Type' => 'application/pdf'
      ));
  }

  public function slipsAction(int $id)
  {

  }

  public function generateSlipAction(int $id)
  {

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

    if($invoice->getStatus()->getMessage() == 'En attente')
    {
      foreach($quote->getServices() as $service)
        foreach($invoice->getServices() as $inv_service)
          if($service->equals($inv_service))
            $service->setBilled($service->getBilled() - $inv_service->getBilled());

      $em->remove($invoice);
      $em->flush();
    }

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

    if($invoice->getStatus()->getMessage() == 'En attente')
    {
      $invoice->getStatus()->setType("success")->setMessage("Terminé");
      $this->getDoctrine()->getManager()->flush();
    }

    return $this->redirectToRoute('BG_CoreBundle_invoices');
  }

  public function invoiceAction(int $id)
  {
    $invoice = $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Invoice')->find($id);
    $totalet = $invoice->getTotalEt();

    $html = $this->renderView('@BGBill/invoice.html.twig', array(
      'invoice' => $invoice,
      'totalet' => $totalet,
      'vat' => $totalet * $invoice->getVat()
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
    $quote->addBuilding(Building::fromBase($this->getDoctrine()->getManager()->getRepository('BGCoreBundle:BaseService')->findBase()));

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

      $request->getSession()->getFlashBag()->add('notice', 'Devis bien enregistré.');

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

  public function viewAction(int $id)
  {
    $quote = $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Quote')->find($id);

    return $this->render('@BGCore/Core/view.html.twig', array(
      'quote' => $quote
    ));
  }

  public function changeStatusAction(int $id, string $status)
  {
    $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Quote')->changeStatus($id, $status);
    $request->getSession()->getFlashBag()->add('notice', 'Statut bien modifié.');
    return $this->redirectToRoute('BG_CoreBundle_view', array('id' => $id));
  }
}
