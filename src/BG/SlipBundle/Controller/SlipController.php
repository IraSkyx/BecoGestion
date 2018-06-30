<?php

namespace BG\SlipBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BG\SlipBundle\Entity\Slip;
use BG\SlipBundle\Form\SlipType;
use BG\SlipBundle\Form\SlipLabelsType;
use BG\CustomerBundle\Entity\Representative;

class SlipController extends Controller
{
    public function indexAction(int $id)
    {
        $slips = $this->getDoctrine()->getManager()->getRepository('BGSlipBundle:Slip')->findByRef($id, ['date' => 'DESC']);
        return $this->render('@BGSlip/home.html.twig', array(
          'slips' => $slips,
          'quote' => $this->getDoctrine()->getManager()->getRepository('BGQuoteBundle:Quote')->find($id)
        ));
    }

    public function viewAction(int $id)
    {
        $html = $this->renderView('@BGSlip/slip.html.twig', [
            'slip' => $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Slip')->find($id)
        ]); 
        return new Response($this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, [ 'Content-Type' => 'application/pdf']);
    }

    public function generateAction(Request $request, int $id)
    {
        $quote = $this->getDoctrine()->getManager()->getRepository('BGQuoteBundle:Quote')->find($id);
        $slip = Slip::fromQuote($quote);

        foreach($this->getDoctrine()->getManager()->getRepository('BGCustomerBundle:Representative')->findByIsBase(true) as $repr)
            $slip->addRepresentative($repr);

        $form = $this->get('form.factory')->create(SlipType::class, $slip);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) 
        {
            $slip->addRepresentative(Representative::fromCustomer($slip->getCustomer()));
            $em = $this->getDoctrine()->getManager();
            $em->persist($slip);
            $em->flush();

            return $this->redirectToRoute('BG_SlipBundle_labels', [
                'id' => $slip->getId()
            ]);
        }

        return $this->render('@BGSlip/new.html.twig', [
        'form' => $form->createView(),
        'slip' => $slip
        ]);
    }

    public function labelsAction(Request $request, int $id)
    {
        $slip = $this->getDoctrine()->getManager()->getRepository('BGSlipBundle:Slip')->find($id);

        foreach($slip->getBuildings() as $building)
            foreach($building->getServices() as $service)
            {
                $service->setLabels(array());
                for($i = 0, $count = count($slip->getRepresentatives()); $i < $count; $i++)
                    $service->addLabel('');
            }

        $form = $this->get('form.factory')->create(SlipLabelsType::class, $slip);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($slip);
            $em->flush();

            return $this->redirectToRoute('BG_SlipBundle_view', ['id' => $slip->getId()]);
        }

        return $this->render('@BGSlip/labels.html.twig', array(
            'form' => $form->createView(),
            'slip' => $slip
        ));
    }
}
