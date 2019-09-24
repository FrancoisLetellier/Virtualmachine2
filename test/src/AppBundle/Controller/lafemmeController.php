<?php

namespace AppBundle\Controller;

use AppBundle\Entity\lafemme;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Lafemme controller.
 *
 * @Route("lafemme")
 */
class lafemmeController extends Controller
{
    /**
     * Lists all lafemme entities.
     *
     * @Route("/", name="lafemme_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lafemmes = $em->getRepository('AppBundle:lafemme')->findAll();

        return $this->render('lafemme/index.html.twig', array(
            'lafemmes' => $lafemmes,
        ));
    }

    /**
     * Creates a new lafemme entity.
     *
     * @Route("/new", name="lafemme_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $lafemme = new Lafemme();
        $form = $this->createForm('AppBundle\Form\lafemmeType', $lafemme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lafemme);
            $em->flush();

            return $this->redirectToRoute('lafemme_show', array('id' => $lafemme->getId()));
        }

        return $this->render('lafemme/new.html.twig', array(
            'lafemme' => $lafemme,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a lafemme entity.
     *
     * @Route("/{id}", name="lafemme_show")
     * @Method("GET")
     */
    public function showAction(lafemme $lafemme)
    {
        $deleteForm = $this->createDeleteForm($lafemme);

        return $this->render('lafemme/show.html.twig', array(
            'lafemme' => $lafemme,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing lafemme entity.
     *
     * @Route("/{id}/edit", name="lafemme_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, lafemme $lafemme)
    {
        $deleteForm = $this->createDeleteForm($lafemme);
        $editForm = $this->createForm('AppBundle\Form\lafemmeType', $lafemme);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lafemme_edit', array('id' => $lafemme->getId()));
        }

        return $this->render('lafemme/edit.html.twig', array(
            'lafemme' => $lafemme,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a lafemme entity.
     *
     * @Route("/{id}", name="lafemme_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, lafemme $lafemme)
    {
        $form = $this->createDeleteForm($lafemme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lafemme);
            $em->flush();
        }

        return $this->redirectToRoute('lafemme_index');
    }

    /**
     * Creates a form to delete a lafemme entity.
     *
     * @param lafemme $lafemme The lafemme entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(lafemme $lafemme)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lafemme_delete', array('id' => $lafemme->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
