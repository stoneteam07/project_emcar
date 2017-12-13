<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FrecuenciaInforme;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Frecuenciainforme controller.
 *
 * @Route("frecuenciainforme")
 */
class FrecuenciaInformeController extends Controller
{
    /**
     * Lists all frecuenciaInforme entities.
     *
     * @Route("/", name="frecuenciainforme_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $frecuenciaInformes = $em->getRepository('AppBundle:FrecuenciaInforme')->findAll();

        return $this->render('frecuenciainforme/index.html.twig', array(
            'frecuenciaInformes' => $frecuenciaInformes,
        ));
    }

    /**
     * Creates a new frecuenciaInforme entity.
     *
     * @Route("/new", name="frecuenciainforme_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $frecuenciaInforme = new Frecuenciainforme();
        $form = $this->createForm('AppBundle\Form\FrecuenciaInformeType', $frecuenciaInforme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($frecuenciaInforme);
            $em->flush();

            return $this->redirectToRoute('frecuenciainforme_show', array('id' => $frecuenciaInforme->getId()));
        }

        return $this->render('frecuenciainforme/new.html.twig', array(
            'frecuenciaInforme' => $frecuenciaInforme,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a frecuenciaInforme entity.
     *
     * @Route("/{id}", name="frecuenciainforme_show")
     * @Method("GET")
     */
    public function showAction(FrecuenciaInforme $frecuenciaInforme)
    {
        $deleteForm = $this->createDeleteForm($frecuenciaInforme);

        return $this->render('frecuenciainforme/show.html.twig', array(
            'frecuenciaInforme' => $frecuenciaInforme,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing frecuenciaInforme entity.
     *
     * @Route("/{id}/edit", name="frecuenciainforme_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FrecuenciaInforme $frecuenciaInforme)
    {
        $deleteForm = $this->createDeleteForm($frecuenciaInforme);
        $editForm = $this->createForm('AppBundle\Form\FrecuenciaInformeType', $frecuenciaInforme);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('frecuenciainforme_edit', array('id' => $frecuenciaInforme->getId()));
        }

        return $this->render('frecuenciainforme/edit.html.twig', array(
            'frecuenciaInforme' => $frecuenciaInforme,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a frecuenciaInforme entity.
     *
     * @Route("/{id}", name="frecuenciainforme_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FrecuenciaInforme $frecuenciaInforme)
    {
        $form = $this->createDeleteForm($frecuenciaInforme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($frecuenciaInforme);
            $em->flush();
        }

        return $this->redirectToRoute('frecuenciainforme_index');
    }

    /**
     * Creates a form to delete a frecuenciaInforme entity.
     *
     * @param FrecuenciaInforme $frecuenciaInforme The frecuenciaInforme entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FrecuenciaInforme $frecuenciaInforme)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('frecuenciainforme_delete', array('id' => $frecuenciaInforme->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
