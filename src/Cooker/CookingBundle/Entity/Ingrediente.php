<?php
// src/Cooker/CookingBundle/Entity/Ingrediente.php
namespace Cooker\CookingBundle\Entity;
/*
php app/console doctrine:schema:update --force
php app/console doctrine:schema:validate*/
/*
http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/association-mapping.html
*/
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
* Cooker\CookingBundle\Entity\Ingrediente 
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="Cooker\CookingBundle\Entity\IngredienteRepository")
* @ORM\HasLifecycleCallbacks()
*/

class Ingrediente
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
     * @ORM\ManyToMany(targetEntity="Receta", inversedBy="ingredientes")
     * @ORM\JoinColumn(name="receta_id", referencedColumnName="id")
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
     * @return Ingrediente
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
     * @return Ingrediente
     */
    public function setRecetas(\Cooker\CookingBundle\Entity\Receta $recetas = null)
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
