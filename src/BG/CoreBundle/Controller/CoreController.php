<?php

namespace BG\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BG\CoreBundle\Form\ParametersType;

class CoreController extends Controller
{
  public function indexAction()
  {
    return $this->render('@BGCore/home.html.twig', [
      "quotes" => $this->getDoctrine()->getManager()->getRepository('BGQuoteBundle:Quote')->findAllByStatus(array("En attente", "En cours"))
    ]);
  }

  public function settingsAction(Request $request)
  {
    $parameters = $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Parameters')->find(1);

    $form = $this->get('form.factory')->create(ParametersType::class, $parameters);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) 
    {
      $em = $this->getDoctrine()->getManager();
      $em->persist($parameters);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Paramètres enregistrés.');

      return $this->redirectToRoute('BG_CoreBundle');
    }

    return $this->render('@BGCore/settings.html.twig', [
      'form' => $form->createView()
    ]);
  }
}
