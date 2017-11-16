<?php
// src/Cooker/CookingBundle/Controller/CookerController.php
/*
 * Controlador de todas las templates, un m�todo por cada una de ellas
 */
namespace Cooker\CookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CookController extends Controller
{

	public function principalAction()
	{
		$recetas = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->getLatestRecetas();

		return $this->render('CookerCookingBundle:Cook:principal.html.twig', array('recetas' => $recetas));
	}

	public function recetasAction()
	{
		$recetas = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->getLatestRecetas();

		return $this->render('CookerCookingBundle:Cook:recetas.html.twig', array('recetas' => $recetas));
	}

	public function ingredientesAction()
	{
		$recetas = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->getLatestRecetas();

		return $this->render('CookerCookingBundle:Cook:ingredientes.html.twig', array('recetas' => $recetas));
	}

	public function showAction($id)
	{
		$receta = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->find($id);
	
		if (!$receta) {
			throw $this->createNotFoundException('No se ha encontrado la receta.');
		}

		$comments = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Comment')->getCommentsForReceta($receta->getId());

		return $this->render('CookerCookingBundle:Cook:show.html.twig', array('receta' => $receta, 'comments' => $comments));
	}

	public function contactAction()
	{
	return $this->render('CookerCookingBundle:Cook:contact.html.twig');
	}

}
?>
