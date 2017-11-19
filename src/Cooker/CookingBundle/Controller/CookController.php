<?php
// src/Cooker/CookingBundle/Controller/CookerController.php
/*
 * Controlador de todas las templates, un método por cada una de ellas
 */
namespace Cooker\CookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CookController extends Controller
{
	
	/*
	 * Cargamos las 3 últimas recetas añadidas
	 */
	public function principalAction()
	{
		$recetas = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->getSomeRecetas(2);
		
		return $this->render('CookerCookingBundle:Cook:principal.html.twig', array('recetas' => $recetas));
	}

	/*
	 * Cargamos todas las recetas almacenadas
	 */
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

		$comentarios = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Comentario')->getComentariosForReceta($receta->getId());

		return $this->render('CookerCookingBundle:Cook:show.html.twig', array('receta' => $receta, 'comentarios' => $comentarios));
	}

	public function contactAction()
	{
	return $this->render('CookerCookingBundle:Cook:contact.html.twig');
	}

}
?>
