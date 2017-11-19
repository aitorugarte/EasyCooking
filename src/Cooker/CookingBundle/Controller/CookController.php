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
		$recetas = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->getRecetas();
		
		return $this->render('CookerCookingBundle:Cook:principal.html.twig', array('recetas' => $recetas));
	}

	public function recetasAction()
	{
		$recetas = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->getLatestRecetas();

		return $this->render('CookerCookingBundle:Cook:recetas.html.twig', array('recetas' => $recetas));
	}

	public function ingredientesAction()
	{
		$ingredientes = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Ingrediente')->getAllIngredientes();

		return $this->render('CookerCookingBundle:Cook:ingredientes.html.twig', array('ingredientes' => $ingredientes));
	}

	public function showAction($id)
	{
		$receta = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->find($id);
		
		if (!$receta) {
			throw $this->createNotFoundException('No se ha encontrado la receta.');
		}

		$ingredientes = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Ingrediente')->getIngredientesBy($id);

		$comentarios = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Comentario')->getComentariosForReceta($receta->getId());

		return $this->render('CookerCookingBundle:Cook:show.html.twig', array('receta' => $receta, 'comentarios' => $comentarios, 'ingredientes' => $ingredientes));
	}

	public function contactAction()
	{
	return $this->render('CookerCookingBundle:Cook:contact.html.twig');
	}

	public function show2Action($id)
	{
		$receta = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->getRecetasBy($id);
	    $ingrediente = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Ingrediente')->find($id);

		if (!$receta) {
			throw $this->createNotFoundException('No se ha encontrado la receta.');
		}

		return $this->render('CookerCookingBundle:Cook:show2.html.twig', array('recetas' => $receta, 'ingrediente' => $ingrediente));
	
	}
}
?>
