<?php

namespace RepareBundle\Controller;

use CarBundle\CarBundle;
use RepareBundle\Entity\Reparation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reparation controller.
 *
 */
class ReparationController extends Controller
{
    /**
     * Lists all reparation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reparations = $em->getRepository('RepareBundle:Reparation')->findAll();

        return $this->render('reparation/index.html.twig', array(
            'reparations' => $reparations,
        ));
    }

    /**
     * Creates a new reparation entity.
     *
     */
    public function newAction(Request $request)
    {
        $reparation = new Reparation();
        $form = $this->createForm('RepareBundle\Form\ReparationType', $reparation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $license = $form["license"]->getData();
            $license = $em->find('CarBundle:Car', $license);
            $id=$this->getDoctrine()->getManager()->find('CarBundle:Car', $license);
            $em->persist($reparation);
            $em->flush();


            return $this->redirectToRoute('reparation_show', array('id_rep' => $reparation->getIdRep()));

        }

        return $this->render('reparation/new.html.twig', array(
            'reparation' => $reparation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reparation entity.
     *
     */
    public function showAction(Reparation $reparation)
    {
        $deleteForm = $this->createDeleteForm($reparation);

        return $this->render('reparation/show.html.twig', array(
            'reparation' => $reparation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reparation entity.
     *
     */
    public function editAction(Request $request, Reparation $reparation)
    {
        $deleteForm = $this->createDeleteForm($reparation);
        $editForm = $this->createForm('RepareBundle\Form\ReparationType', $reparation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reparation_edit', array('id_rep' => $reparation->getIdRep()));
        }

        return $this->render('reparation/edit.html.twig', array(
            'reparation' => $reparation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reparation entity.
     *
     */
    public function deleteAction(Request $request, Reparation $reparation)
    {
        $form = $this->createDeleteForm($reparation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reparation);
            $em->flush();
        }

        return $this->redirectToRoute('reparation_index');
    }

    /**
     * Creates a form to delete a reparation entity.
     *
     * @param Reparation $reparation The reparation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reparation $reparation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reparation_delete', array('id_rep' => $reparation->getIdRep())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
