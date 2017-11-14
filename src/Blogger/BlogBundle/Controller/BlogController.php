<?php
// src/Blogger/BlogBundle/Controller/BlogController.php
namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{

	public function listAction()
	{
		$recetas = $this->get('doctrine')->getManager()->getRepository('BloggerBlogBundle:Receta')->getLatestRecetas();

		return $this->render('BloggerBlogBundle:Blog:list.html.twig', array('recetas' => $recetas));
	}

	public function showAction($id)
	{
		$receta = $this->get('doctrine')->getManager()->getRepository('BloggerBlogBundle:Receta')->find($id);
	
		if (!$receta) {
			throw $this->createNotFoundException('No se ha encontrado la receta.');
		}

		$comments = $this->get('doctrine')->getManager()->getRepository('BloggerBlogBundle:Comment')->getCommentsForReceta($receta->getId());

		return $this->render('BloggerBlogBundle:Blog:show.html.twig', array('receta' => $receta, 'comments' => $comments));
	}


	public function contactAction()
	{
	return $this->render('BloggerBlogBundle:Blog:contact.html.twig');
	}

}
?>
