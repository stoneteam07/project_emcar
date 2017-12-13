<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Proyecto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Proyecto controller.
 *
 * @Route("proyecto")
 */
class ProyectoController extends Controller
{
    /**
     * Lists all proyecto entities.
     *
     * @Route("/", name="proyecto_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $proyectos = $em->getRepository('AppBundle:Proyecto')->findAll();

        return $this->render('proyecto/index.html.twig', array(
            'proyectos' => $proyectos,
        ));
    }

    /**
     * Creates a new proyecto entity.
     *
     * @Route("/new", name="proyecto_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $proyecto = new Proyecto();
        $form = $this->createForm('AppBundle\Form\ProyectoType', $proyecto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $proyecto->setFechaCreacion(new \DateTime('now'));
            $em->persist($proyecto);
            $em->flush();

            return $this->redirectToRoute('proyecto_show', array('id' => $proyecto->getId()));
        }

        return $this->render('proyecto/new.html.twig', array(
            'proyecto' => $proyecto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a proyecto entity.
     *
     * @Route("/{id}", name="proyecto_show")
     * @Method("GET")
     */
    public function showAction(Proyecto $proyecto)
    {
        $deleteForm = $this->createDeleteForm($proyecto);

        return $this->render('proyecto/show.html.twig', array(
            'proyecto' => $proyecto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing proyecto entity.
     *
     * @Route("/{id}/edit", name="proyecto_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Proyecto $proyecto)
    {
        $deleteForm = $this->createDeleteForm($proyecto);
        $editForm = $this->createForm('AppBundle\Form\ProyectoType', $proyecto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('proyecto_edit', array('id' => $proyecto->getId()));
        }

        return $this->render('proyecto/edit.html.twig', array(
            'proyecto' => $proyecto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a proyecto entity.
     *
     * @Route("/{id}", name="proyecto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Proyecto $proyecto)
    {
        $form = $this->createDeleteForm($proyecto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($proyecto);
            $em->flush();
        }

        return $this->redirectToRoute('proyecto_index');
    }

    /**
     * Creates a form to delete a proyecto entity.
     *
     * @param Proyecto $proyecto The proyecto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Proyecto $proyecto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('proyecto_delete', array('id' => $proyecto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
