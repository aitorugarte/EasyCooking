<?php 
// src/Cooker/CookingBundle/DataFixtures/ORM/LoadPlato.php

namespace Cooker\CookingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cooker\CookingBundle\Entity\Plato;
use Cooker\CookingBundle\Entity\Receta;
use Cooker\CookingBundle\Entity\Ingrediente;

	/**
     * 
     * @param ObjectManager $manager
     */
class LoadDatos implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
	  // $this->createPlato($manager);
	}

	public function createPlato(ObjectManager $manager){
	    $plato = new Plato();
        $plato->setNombre('Tipo');

        $manager->persist($plato);
		//Creamos la receta
		$this->createReceta($manager, $plato);

        $manager->persist($plato);

        $manager->flush();

	}

	public function createReceta(ObjectManager $manager, Plato $plato){
	
		$receta = new Receta();
		$receta->setNombre('Receta1');
		$receta->setDetalles('Blabla');
		$receta->setDate(new \DateTime());
		$receta->setImagen('Imagen1');
		$receta->setTipo_plato($plato);

		//$manager->persist($receta);

		//Creamos el Ingrediente
		$this->createIngrediente($manager, $receta);

		$manager->persist($receta);

		$manager->flush();

	}

	public function createIngrediente(ObjectManager $manager, Receta $receta){

		$ingrediente = new Ingrediente();
		$ingrediente->setNombre('Ingrediente1');

		$ingrediente->addRecetas($receta);
		
		$manager->persist($ingrediente);
		
		//$manager->flush();

	}

}