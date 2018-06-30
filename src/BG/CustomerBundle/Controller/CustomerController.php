<?php

namespace BG\CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use BG\CustomerBundle\Entity\Customer;
use BG\CustomerBundle\Form\OptionsType;
use BG\CustomerBundle\Form\CustomerType;

class CustomerController extends Controller
{
    public function optionsAction()
    {
        return $this->render('@BGCustomer/options.html.twig', [
            'form' => $form = $this->get('form.factory')->create(OptionsType::class)->createView()
        ]);
    }

    public function newAction(Request $request)
    {
        $customer = new Customer();

        $form = $this->get('form.factory')->create(CustomerType::class, $customer);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Client enregistré.');

            return $this->redirectToRoute('BG_CoreBundle');
        }

        return $this->render('@BGCustomer/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function modifyAction(Request $request, int $id)
    {
        $customer = $this->getDoctrine()->getManager()->getRepository('BGCustomerBundle:Customer')->find($id);

        $form = $this->get('form.factory')->create(CustomerType::class, $customer);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Client modifié.');

            return $this->redirectToRoute('BG_CoreBundle');
        }

        return $this->render('@BGCustomer/modify.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function getAction()
    {
        foreach($this->getDoctrine()->getManager()->getRepository('BGCustomerBundle:Customer')->findByIsCloned(0) as $customer)
            $data[] = [
                'id' => $customer->getId(),
                'text' => $customer->__toString()
            ];
        return new JsonResponse($data);
    }
}
