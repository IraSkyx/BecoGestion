<?php

namespace BG\BillBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use BG\BillBundle\Entity\ArchivedBill;
use BG\BillBundle\Form\BillType;

class BillController extends Controller
{
  public function indexAction(Request $request)
  {
    $pagination = $this->get('knp_paginator')->paginate(
        $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Bill')->getFindAllByStatusQuery(["En attente de validation"]),
        $request->query->getInt('page', 1),
        10
    );

    return $this->render('@BGBill/home.html.twig', array('pagination' => $pagination));
  }

  public function archivesAction(Request $request)
  {
    $pagination = $this->get('knp_paginator')->paginate(
        $this->getDoctrine()->getManager()->getRepository('BGBillBundle:ArchivedBill')->getFindAllByStatusQuery(["Terminé"]),
        $request->query->getInt('page', 1),
        10
    );

    return $this->render('@BGBill/home.html.twig', array('pagination' => $pagination));
  }

  public function pendingAction(Request $request)
  {
    $pagination = $this->get('knp_paginator')->paginate(
        $this->getDoctrine()->getManager()->createQuery("SELECT b FROM BGBillBundle:ArchivedBill b WHERE b.isPaid = 0"),
        $request->query->getInt('page', 1),
        10
    );

    return $this->render('@BGBill/home.html.twig', array('pagination' => $pagination));
  }

  public function generateAction(int $id)
  {
    $quote = $this->getDoctrine()->getManager()->getRepository('BGQuoteBundle:Quote')->find($id);
    $bill = $quote->generateBill();

    $em = $this->getDoctrine()->getManager();
    $em->persist($bill);
    $em->flush();

    return $this->redirectToRoute('BG_BillBundle_view', ['id' => $bill->getId()]);
  }

  public function invalidateAction(int $id)
  {
    $em = $this->getDoctrine()->getManager();
    $bill = $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Bill')->find($id);
    $quote = $this->getDoctrine()->getManager()->getRepository('BGQuoteBundle:Quote')->find($bill->getQuoteId());

    if($bill->getStatus()->getMessage() == 'En attente')
    {
      foreach($quote->getBuildings() as $building)
        foreach($building->getServices() as $service)
          foreach($bill->getServices() as $inv_service)
            if($service->equals($inv_service))
              $service->setBilled($service->getBilled() - $inv_service->getBilled());

      $em->remove($bill);
      $em->flush();
    }

    return $this->redirectToRoute('BG_BillBundle');
  }

  public function pickAction(Request $request, int $id)
  {
    $bill = $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Bill')->find($id);

    $archivedBill = new ArchivedBill($bill);

    $form = $this->get('form.factory')->create(BillType::class, $bill);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) 
    {
      $em = $this->getDoctrine()->getManager();
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Facture enregistrée.');
      return $this->redirectToRoute('BG_BillBundle_validate', ['id' => $id]);
    }

    return $this->render('@BGBill/pick.html.twig', [
      'form' => $form->createView()
    ]);
  }

  public function paidAction(int $id)
  {
    $bill = $this->getDoctrine()->getManager()->getRepository('BGBillBundle:ArchivedBill')->find($id);
    $bill->setIsPaid(true);
    $bill->getStatus()->setType("success")->setMessage("Terminé");
    
    $this->getDoctrine()->getManager()->flush();

    return $this->redirectToRoute('BG_BillBundle_archives');
  }

  public function validateAction(int $id)
  {
    $bill = $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Bill')->find($id);

    if($bill->getStatus()->getMessage() == 'En attente')
    {
      $bill->getStatus()->setType("success")->setMessage("Terminé");
      $archivedBill = new ArchivedBill($bill);
      $em = $this->getDoctrine()->getManager();
      $em->persist($archivedBill);
      $em->remove($bill);
      $em->flush();
    }
    return $this->redirectToRoute('BG_BillBundle');
  }

  public function viewAction(int $id)
  {
    $bill = $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Bill')->find($id);
    $totalet = $bill->getTotalEt();

    $html = $this->renderView('@BGBill/view.html.twig', [
      'bill' => $bill,
      'totalet' => $totalet,
      'vat' => $totalet * $bill->getVat()
    ]);

    return new Response(
      $this->get('knp_snappy.pdf')->getOutputFromHtml($html, [
        'header-html' => $this->renderView('@BGBill/template/header.html.twig'),
        'footer-html' => $this->renderView('@BGBill/template/footer.html.twig')
      ]), 200, ['Content-Type' => 'application/pdf']);
  }

  public function productionAction(int $id)
  {
    $bill = $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Bill')->find($id);
    $totalet = $bill->getTotalEt();

    $html = $this->renderView('@BGBill/production.html.twig', [
      'bill' => $bill,
      'totalet' => $totalet,
      'vat' => $totalet * $bill->getVat()
    ]);

    return new Response(
      $this->get('knp_snappy.pdf')->getOutputFromHtml($html, [
        'header-html' => $this->renderView('@BGBill/template/header.html.twig'),
        'footer-html' => $this->renderView('@BGBill/template/footer.html.twig')
      ]), 200, ['Content-Type' => 'application/pdf']);
  }

  public function serviceAction(int $id)
  {
    $bill = $this->getDoctrine()->getManager()->getRepository('BGBillBundle:Bill')->find($id);
    $totalet = $bill->getTotalEt();

    $html = $this->renderView('@BGBill/service.html.twig', [
      'bill' => $bill,
      'totalet' => $totalet,
      'vat' => $totalet * $bill->getVat()
    ]);

    return new Response(
      $this->get('knp_snappy.pdf')->getOutputFromHtml($html, [
        'header-html' => $this->renderView('@BGBill/template/header.html.twig'),
        'footer-html' => $this->renderView('@BGBill/template/footer.html.twig')
      ]), 200, ['Content-Type' => 'application/pdf']);
  }
}
