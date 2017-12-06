<?php 
// src/Cooker/CookingBundle/DataFixtures/ORM/LoadData.php

namespace Cooker\CookingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cooker\CookingBundle\Entity\Plato;

class LoadData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $plato = new Plato();
        $plato->setNombre('PlatoPrueba');
        $plato->setPlatos(null);

        $manager->persist($plato);
        $manager->flush();
    }
}