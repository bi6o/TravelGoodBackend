<?php

namespace Main\CityBundle\Controller;

use Main\CityBundle\Entity\CustomerCity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * CustomerCity controller.
 */
class CustomerCityController extends Controller
{
    /**
     * Lists all customerCity entities.
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $customerCities = $em->getRepository('MainCityBundle:CustomerCity')->findAll();

        foreach ($customerCities as $customerCity) {
            $customer = $this->findCustomerOfCity($customerCity);

            if ($customer != null) {
                $customerCity->setCustomer($customer);
            }
        }

        return $this->render('customercity/index.html.twig', array(
            'customerCities' => $customerCities,
        ));
    }

    /**
     * Creates a new customerCity entity.
     */
    public function newAction(Request $request)
    {
        $customerCity = new Customercity();
        $form = $this->createForm('Main\CityBundle\Form\CustomerCityType', $customerCity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($customerCity);
            $em->flush($customerCity);

            return $this->redirectToRoute('admin_customer_city_show', array('id' => $customerCity->getId()));
        }

        return $this->render('customercity/new.html.twig', array(
            'customerCity' => $customerCity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a customerCity entity.
     */
    public function showAction(CustomerCity $customerCity)
    {
        $deleteForm = $this->createDeleteForm($customerCity);

        $customerCity->setCustomer($this->findCustomerOfCity($customerCity));

        return $this->render('customercity/show.html.twig', array(
            'customerCity' => $customerCity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    private function findCustomerOfCity(CustomerCity $customerCity)
    {
        if ($customerCity->getCustomer() !== null) {
            return $customer = $this->getDoctrine()->getRepository('MainBackendBundle:Customer')->find($customerCity->getCustomer()->getId());
        }

        return null;
    }

    /**
     * Displays a form to edit an existing customerCity entity.
     */
    public function editAction(Request $request, CustomerCity $customerCity)
    {
        $deleteForm = $this->createDeleteForm($customerCity);
        $editForm = $this->createForm('Main\CityBundle\Form\CustomerCityType', $customerCity);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_customer_city_edit', array('id' => $customerCity->getId()));
        }

        return $this->render('customercity/edit.html.twig', array(
            'customerCity' => $customerCity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a customerCity entity.
     */
    public function deleteAction(Request $request, CustomerCity $customerCity)
    {
        $form = $this->createDeleteForm($customerCity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($customerCity);
            $em->flush($customerCity);
        }

        return $this->redirectToRoute('admin_customer_city_index');
    }

    /**
     * Creates a form to delete a customerCity entity.
     *
     * @param CustomerCity $customerCity The customerCity entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CustomerCity $customerCity)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_customer_city_delete', array('id' => $customerCity->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
