<?php
// src/Blogger/BlogBundle/Controller/CommentController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Comment;
use Blogger\BlogBundle\Form\CommentType;

/**
 * Comment controller.
 */
class CommentController extends Controller
{
    public function newAction($receta_id)
    {
        $receta = $this->getReceta($receta_id);

        $comment = new Comment();
        $comment->setReceta($receta);
        $form   = $this->createForm(new CommentType(), $comment);

        return $this->render('BloggerBlogBundle:Comment:form.html.twig', array('comment' => $comment,'form'   => $form->createView()));
    }

    public function createAction($receta_id)
    {
        $receta = $this->getReceta($receta_id);

        $comment  = new Comment();
        $comment->setReceta($receta);
        $request = $this->getRequest();
        $form = $this->createForm(new CommentType(), $comment);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirect($this->generateUrl('blogger_blog_show', array('id' => $comment->getReceta()->getId())) . '#comment-' . $comment->getId());
        }

        return $this->render('BloggerBlogBundle:Comment:create.html.twig', array('comment' => $comment, 'form' => $form->createView()));
    }

    protected function getReceta($receta_id)
    {
        $em = $this->getDoctrine()->getManager();

        $receta = $em->getRepository('BloggerBlogBundle:Receta')->find($receta_id);

        if (!$receta) {
            throw $this->createNotFoundException('Imposible de encontrar receta.');
        }

        return $receta;
    }
}
?>
