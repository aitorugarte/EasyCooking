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
		$platos = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Plato')->getPlatos();

		return $this->render('CookerCookingBundle:Cook:principal.html.twig', array('recetas' => $recetas, 'platos' => $platos));
	}

	public function recetasAction()
	{
		$recetas = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->getRecetas();

		return $this->render('CookerCookingBundle:Cook:recetas.html.twig', array('recetas' => $recetas));
	}

	public function ingredientesAction()
	{
		$ingredientes = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Ingrediente')->getAllIngredientes();

		return $this->render('CookerCookingBundle:Cook:ingredientes.html.twig', array('ingredientes' => $ingredientes));
	}

	public function platosAction(){
	
		$platos = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Plato')->getPlatos();
		$recetas = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->getRecetasOrdenadas();

		return $this->render('CookerCookingBundle:Cook:platos.html.twig', array('platos' => $platos, 'recetas' => $recetas));
	}

	public function showRecetaAction($id)
	{
		$receta = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->find($id);
		
		if (!$receta) {
			throw $this->createNotFoundException('No se ha encontrado la receta.');
		}

		$ingredientes = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Ingrediente')->getIngredientesBy($id);

		$comentarios = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Comentario')->getComentariosForReceta($receta->getId());

		$otrasrecetas = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->recetasRelacionadas($receta->getTipo_plato());

		return $this->render('CookerCookingBundle:Cook:showReceta.html.twig', array('receta' => $receta, 'comentarios' => $comentarios, 'ingredientes' => $ingredientes, 'otrasrecetas' => $otrasrecetas));
	}

	public function showIngrAction($id)
	{
		$receta = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->getRecetasBy($id);
	    $ingrediente = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Ingrediente')->find($id);

		if (!$receta) {
			throw $this->createNotFoundException('No se ha encontrado la receta.');
		}

		return $this->render('CookerCookingBundle:Cook:showIngr.html.twig', array('recetas' => $receta, 'ingrediente' => $ingrediente));
	}

	public function showPlatoAction($id)
	{
		$plato = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Plato')->find($id);
		$recetas = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->getRecetasPlato($id);

		if (!$plato) {
			throw $this->createNotFoundException('No se ha encontrado el plato.');
		}

		return $this->render('CookerCookingBundle:Cook:showPlato.html.twig', array('plato' => $plato, 'recetas' => $recetas));
	}

	public function contactAction()
	{
	return $this->render('CookerCookingBundle:Cook:contact.html.twig');
	}
}
?>
