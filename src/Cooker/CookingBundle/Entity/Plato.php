<?php
// src/Cooker/CookingBundle/Entity/Plato.php
namespace Cooker\CookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
* Cooker\CookingBundle\Entity\Plato 
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="Cooker\CookingBundle\Entity\PlatoRepository")
* @ORM\HasLifecycleCallbacks()
*/

class Plato
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;

	/**
	* @ORM\Column(type="text")
	*/
	private $nombre;

	/**
    * @ORM\OneToMany(targetEntity="Receta", mappedBy="tipo_plato")
    */
    private $recetas;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Plato
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

	/**
     * Set receta
     *
     * @param  \Cooker\CookingBundle\Entity\Receta $recetas
     * @return Plato
     */
    public function setPlatos(\Cooker\CookingBundle\Entity\Receta $recetas = null)
    {
        $this->recetas = $recetas;

        return $this;
    }

    /**
     * Get recetas
     *
     * @return \Cooker\CookingBundle\Entity\Receta 
     */
    public function getRecetas()
    {
        return $this->recetas;
    }


}
