<?php

namespace Main\BackendBundle\Controller;

use Main\BackendBundle\Entity\Customer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\ArrayCollection;
use Main\CityBundle\Entity\CustomerCity;

/**
 * Customer controller.
 */
class CustomerController extends Controller
{
    /**
     * Lists all customer entities.
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $customers = $em->getRepository('MainBackendBundle:Customer')->findAll();

        return $this->render('customer/index.html.twig', array(
            'customers' => $customers,
        ));
    }

    /**
     * Creates a new customer entity.
     */
    public function newAction(Request $request)
    {
        $customer = new Customer();
        $form = $this->createForm('Main\BackendBundle\Form\CustomerType', $customer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->persist($customer->getInfo());
            $profilePicture = $customer->getInfo()->getProfilePicture();
            $profilePicture->setDateUploaded(new \DateTime());
            $profilePicture->setPhotoType('Profile Picture');
            $em->persist($profilePicture);
            $em->flush($customer);

            return $this->redirectToRoute('admin_customer_show', array('id' => $customer->getId()));
        }

        return $this->render('customer/new.html.twig', array(
            'customer' => $customer,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a customer entity.
     */
    public function showAction(Customer $customer)
    {
        $deleteForm = $this->createDeleteForm($customer);

        $customer = $this->initCollectionArrays($customer);

        $customerCities = $this->findCities($customer);

        $customer->setCustomerCities($customerCities);

        return $this->render('customer/show.html.twig', array(
            'customer' => $customer,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function initCollectionArrays(Customer $customer)
    {
        $customer->initCustomerCities();
        $customer->initCustomerAlbums();

        return $customer;
    }

    private function findCities(Customer $customer)
    {
        $customerCities = new ArrayCollection();
        $cities =
        $this->getDoctrine()->getRepository('MainCityBundle:CustomerCity')->findAll();

        foreach ($cities as $city) {
            if ($city->getPoint()->getCustomer() === $customer) {
                $customerCities->add($city);
            }
        }

        return $customerCities;
    }

    /**
     * Displays a form to edit an existing customer entity.
     */
    public function editAction(Request $request, Customer $customer)
    {
        $deleteForm = $this->createDeleteForm($customer);

        $customer = $this->initCollectionArrays($customer);

        $editForm = $this->createForm('Main\BackendBundle\Form\CustomerType', $customer);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_customer_edit', array('id' => $customer->getId()));
        }

        return $this->render('customer/edit.html.twig', array(
            'customer' => $customer,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a customer entity.
     */
    public function deleteAction(Request $request, Customer $customer)
    {
        $form = $this->createDeleteForm($customer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($customer);
            $em->flush($customer);
        }

        return $this->redirectToRoute('admin_customer_index');
    }

    /**
     * Creates a form to delete a customer entity.
     *
     * @param Customer $customer The customer entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Customer $customer)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_customer_delete', array('id' => $customer->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
