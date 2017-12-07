<?php 
// src/Cooker/CookingBundle/DataFixtures/ORM/LoadDatos2.php

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
class LoadDatos2 implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
	   $this->createReceta($manager);
	}

	public function createReceta(ObjectManager $manager){
	
		$receta = new Receta();
		$receta->setNombre('Receta');
		$receta->setDetalles('Blabla');
		$receta->setDate(new \DateTime());
		$receta->setImagen('Imagen');
		//$receta->setTipo_plato(null);
		//$receta->addComentario(null);

		$manager->persist($receta);

		$manager->flush();
		
		$ingrediente = new Ingrediente();
		$ingrediente->setNombre('Ingrediente');
		
		$ingrediente->addRecetas($receta);
		$receta->addIngredientes($ingrediente);

		$manager->persist($ingrediente);
		
		$manager->flush();

	}

}