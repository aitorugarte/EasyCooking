<?php
// src/Cooker/CookingBundle/DataFixtures/ORM/LoadDatos.php

namespace Cooker\CookingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cooker\CookingBundle\Entity\Plato;
use Cooker\CookingBundle\Entity\Receta;
use Cooker\CookingBundle\Entity\Ingrediente;
use Cooker\CookingBundle\Entity\Comentario;

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
		/*
		* Creamos 2 recetas
		*/
	    for($i = 1; $i <= 2; $i++) {
            $this->createRecetas($manager, $i);
        }

	}

    public function createRecetas(ObjectManager $manager, $num)
	{

		$receta = new Receta();
		$receta->setNombre('Receta' . $num);
		$receta->setDetalles('Blabla' . $num);
		$receta->setDate(new \DateTime());
		$receta->setImagen('Imagen' . $num);
		//Añadimos el tipo de plato
		$this->createPlatos($manager, $receta, $num);
		//Añadimos 2 ingredientes
		 for($i = 1; $i <= 2; $i++) {
            $this->createIngredientes($manager, $receta, $num * 10 + $i);
        }
		//Añadimos 2 comentarios
		for($i = 1; $i <= 2; $i++) {
            $this->createComentarios($manager, $receta, $num * 10 + $i);
        }

		$manager->persist($receta);
		$manager->flush();
		
	}

	public function createIngredientes(ObjectManager $manager, Receta $receta, $num)
	{

		$ingrediente = new Ingrediente();
		$ingrediente->setNombre('Ingrediente' . $num);
		$manager->persist($ingrediente);

		$receta->addIngredientes($ingrediente);
	
	}

	public function createPlatos(ObjectManager $manager, Receta $receta, $num)
	{
		$plato = new Plato();
		$plato->setNombre('Plato' . $num);
		$manager->persist($plato);

		$receta->setTipo_plato($plato);

	}

	public function createComentarios(ObjectManager $manager, Receta $receta, $num)
	{
		$comentario = new comentario();
		$comentario->setUpdatedValue();
		$comentario->setUsuario('Usuario' . $num);
		$comentario->setComentario('Comentario' . $num);
		$comentario->setApproved(true);
		$comentario->setCreated(new \DateTime());
		$manager->persist($comentario);

		$receta->addComentario($comentario);

	}

}