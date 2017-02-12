<?php

namespace Main\TripBundle\Controller;

use Main\TripBundle\Entity\TripCity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tripcity controller.
 *
 */
class TripCityController extends Controller
{
    /**
     * Lists all tripCity entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tripCities = $em->getRepository('MainTripBundle:TripCity')->findAll()->orderBy('cityOrder' , 'ASC');

        return $this->render('tripcity/index.html.twig', array(
            'tripCities' => $tripCities,
        ));
    }

    /**
     * Creates a new tripCity entity.
     *
     */
    public function newAction(Request $request)
    {
        $tripCity = new Tripcity();
        $form = $this->createForm('Main\TripBundle\Form\TripCityType', $tripCity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tripCity);
            $em->flush($tripCity);

            return $this->redirectToRoute('admin_trip_city_show', array('id' => $tripCity->getId()));
        }

        return $this->render('tripcity/new.html.twig', array(
            'tripCity' => $tripCity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tripCity entity.
     *
     */
    public function showAction(TripCity $tripCity)
    {
        $deleteForm = $this->createDeleteForm($tripCity);

        return $this->render('tripcity/show.html.twig', array(
            'tripCity' => $tripCity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tripCity entity.
     *
     */
    public function editAction(Request $request, TripCity $tripCity)
    {
        $deleteForm = $this->createDeleteForm($tripCity);
        $editForm = $this->createForm('Main\TripBundle\Form\TripCityType', $tripCity);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_trip_city_edit', array('id' => $tripCity->getId()));
        }

        return $this->render('tripcity/edit.html.twig', array(
            'tripCity' => $tripCity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tripCity entity.
     *
     */
    public function deleteAction(Request $request, TripCity $tripCity)
    {
        $form = $this->createDeleteForm($tripCity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tripCity);
            $em->flush($tripCity);
        }

        return $this->redirectToRoute('admin_trip_city_index');
    }

    /**
     * Creates a form to delete a tripCity entity.
     *
     * @param TripCity $tripCity The tripCity entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TripCity $tripCity)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_trip_city_delete', array('id' => $tripCity->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
