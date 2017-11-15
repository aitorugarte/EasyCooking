<?php
// src/Cooker/CookingBundle/Entity/Ingrediente.php
namespace Cooker\CookingBundle\Entity;
/*php app/console doctrine:schema:update --force
php app/console doctrine:schema:validate*/
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
* @ORM\Entity
* @ORM\Table(name="Ingrediente")
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
     * @ORM\ManyToOne(targetEntity="Receta", inversedBy="ingredientes")
     * @ORM\JoinColumn(name="receta_id", referencedColumnName="id")
     */
    private $receta;

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
     * @param  \Cooker\CookingBundle\Entity\Receta $receta
     * @return Ingrediente
     */
    public function setReceta(\Cooker\CookingBundle\Entity\Receta $receta = null)
    {
        $this->receta = $receta;

        return $this;
    }

    /**
     * Get receta
     *
     * @return \Cooker\CookingBundle\Entity\Receta 
     */
    public function getReceta()
    {
        return $this->receta;
    }


}
