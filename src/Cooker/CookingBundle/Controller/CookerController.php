<?php
// src/Cooker/CookingBundle/Controller/CookerController.php
namespace Cooker\CookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CookerController extends Controller
{

	public function listAction()
	{
		$recetas = $this->get('doctrine')->getManager()->getRepository('CookerCookingBundle:Receta')->getLatestRecetas();

		return $this->render('CookerCookingBundle:Cook:list.html.twig', array('recetas' => $recetas));
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
