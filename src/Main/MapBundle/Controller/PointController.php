<?php

namespace Main\MapBundle\Controller;

use Main\MapBundle\Entity\Point;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Point controller.
 *
 */
class PointController extends Controller
{
    /**
     * Lists all point entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $points = $em->getRepository('MainMapBundle:Point')->findAll();

        return $this->render('point/index.html.twig', array(
            'points' => $points,
        ));
    }

    /**
     * Creates a new point entity.
     *
     */
    public function newAction(Request $request)
    {
        $point = new Point();
        $form = $this->createForm('Main\MapBundle\Form\PointType', $point);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($point);
            $em->flush($point);

            return $this->redirectToRoute('admin_point_show', array('id' => $point->getId()));
        }

        return $this->render('point/new.html.twig', array(
            'point' => $point,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a point entity.
     *
     */
    public function showAction(Point $point)
    {
        $deleteForm = $this->createDeleteForm($point);

        return $this->render('point/show.html.twig', array(
            'point' => $point,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing point entity.
     *
     */
    public function editAction(Request $request, Point $point)
    {
        $deleteForm = $this->createDeleteForm($point);
        $editForm = $this->createForm('Main\MapBundle\Form\PointType', $point);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_point_edit', array('id' => $point->getId()));
        }

        return $this->render('point/edit.html.twig', array(
            'point' => $point,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a point entity.
     *
     */
    public function deleteAction(Request $request, Point $point)
    {
        $form = $this->createDeleteForm($point);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($point);
            $em->flush($point);
        }

        return $this->redirectToRoute('admin_point_index');
    }

    /**
     * Creates a form to delete a point entity.
     *
     * @param Point $point The point entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Point $point)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_point_delete', array('id' => $point->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
