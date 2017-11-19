<?php
// src/Cooker/CookingBundle/Controller/ComentarioController.php

namespace Cooker\CookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cooker\CookingBundle\Entity\Comentario;
use Cooker\CookingBundle\Form\TipoComentario;

/**
 * Comentario controller.
 */
class ComentarioController extends Controller
{
    public function newAction($receta_id)
    {
        $receta = $this->getReceta($receta_id);

        $comentario = new Comentario();
        $comentario->setReceta($receta);
        $form   = $this->createForm(new TipoComentario(), $comentario);

        return $this->render('CookerCookingBundle:Comment:form.html.twig', array('comentario' => $comentario,'form'   => $form->createView()));
    }

    public function createAction($receta_id)
    {
        $receta = $this->getReceta($receta_id);

        $comentario  = new Comentario();
        $comentario->setReceta($receta);
        $request = $this->getRequest();
        $form = $this->createForm(new TipoComentario(), $comentario);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comentario);
            $em->flush();

            return $this->redirect($this->generateUrl('cooker_cook_show', array('id' => $comentario->getReceta()->getId())) . '#comentario-' . $comentario->getId());
        }

        return $this->render('CookerCookingBundle:Comentario:create.html.twig', array('comentario' => $comentario, 'form' => $form->createView()));
    }

    protected function getReceta($receta_id)
    {
        $em = $this->getDoctrine()->getManager();

        $receta = $em->getRepository('CookerCookingBundle:Receta')->find($receta_id);

        if (!$receta) {
            throw $this->createNotFoundException('Imposible de encontrar receta.');
        }

        return $receta;
    }
}
?>
