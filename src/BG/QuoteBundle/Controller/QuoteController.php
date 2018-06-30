<?php

namespace BG\QuoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BG\QuoteBundle\Form\QuoteType;
use BG\QuoteBundle\Entity\Quote;
use BG\QuoteBundle\Entity\Building;
use BG\QuoteBundle\Form\QuoteInvoiceType;

class QuoteController extends Controller
{
    public function newAction(Request $request, int $nbBuilding)
    {
        $parameters = $this->getDoctrine()->getManager()->getRepository('BGCoreBundle:Parameters')->find(1);
        $quote = new Quote($parameters->getEngRate(), $parameters->getDrawRate(), $parameters->getVat());

        for($i = 1; $i <= $nbBuilding; ++$i)
            $quote->addBuilding(Building::fromBase($i, $this->getDoctrine()->getManager()->getRepository('BGQuoteBundle:BaseService')->findAll()));

        $form = $this->get('form.factory')->create(QuoteType::class, $quote);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($quote);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Devis enregistré.');

            return $this->redirectToRoute('BG_CoreBundle');
        }

        return $this->render('@BGQuote/new.html.twig', [
            'form' => $form->createView(),
            'nbBuilding' => $nbBuilding,
            'parameters' => $parameters
        ]);
    }

    public function modifyAction(Request $request, int $id)
    {
        $quote = $this->getDoctrine()->getManager()->getRepository('BGQuoteBundle:Quote')->find($id);

        $form = $this->get('form.factory')->create(QuoteType::class, $quote);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($quote);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Devis modifié.');

            return $this->redirectToRoute('BG_QuoteBundle_view', [
                'id' => $id
            ]);
        }

        return $this->render('@BGQuote/modify.html.twig', [
            'form' => $form->createView(),
            'id' => $id
        ]);
    }

    public function viewAction(int $id)
    {
        $quote = $this->getDoctrine()->getManager()->getRepository('BGQuoteBundle:Quote')->find($id);

        return $this->render('@BGQuote/view.html.twig', [
            'quote' => $quote,
            'total' => $quote->getTotal()
        ]);
    }

    public function archivesAction()
    {
        return $this->render('@BGCore/home.html.twig', [
            'quotes' => $this->getDoctrine()->getManager()->getRepository('BGQuoteBundle:Quote')->findAllByStatus(["Terminé", "Annulé"])
        ]);
    }

    public function changeAction(Request $request, int $id, string $status)
    {
        $this->getDoctrine()->getManager()->getRepository('BGQuoteBundle:Quote')->changeStatus($id, $status);
        $request->getSession()->getFlashBag()->add('notice', 'Statut modifié.');
        return $this->redirectToRoute('BG_QuoteBundle_view', ['id' => $id]);
    }

    public function changeBuildingsAction(int $id, int $bid, string $action)
    {
        $quote = $this->getDoctrine()->getManager()->getRepository('BGQuoteBundle:Quote')->find($id);

        if(count($quote->getBuildings()) == 0)
            $quote->addBuilding(Building::fromBase(1, $this->getDoctrine()->getManager()->getRepository('BGQuoteBundle:BaseService')->findAll()));
        else if($action == 'add')
            $quote->addBuilding(Building::fromBase(count($quote->getBuildings())+1, $quote->getBuildings()[count($quote->getBuildings())-1]->getServices()));
        else if($action == 'remove')
            $quote->removeBuilding($quote->getBuildings()[$bid-1]);

        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute('BG_QuoteBundle_modify', ['id' => $id]);
    }

    public function advancementAction(Request $request, int $id)
    {
        $quote = $this->getDoctrine()->getManager()->getRepository('BGQuoteBundle:Quote')->find($id);

        $form = $this->get('form.factory')->create(QuoteInvoiceType::class, $quote);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) 
        {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('BG_QuoteBundle_view', ['id' => $id]);
        }

        return $this->render('@BGQuote/advancement.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function roundAction(int $id, int $value)
    {
        $em = $this->getDoctrine()->getManager();
        $em->getRepository('BGQuoteBundle:Quote')->find($id)->round($value);
        $em->flush();
        return $this->redirectToRoute('BG_QuoteBundle_view', [
            'id' => $id
        ]);
    }
}