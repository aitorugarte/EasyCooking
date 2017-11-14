<?php
// src/Blogger/BlogBundle/Entity/Ingrediente.php
namespace Blogger\BlogBundle\Entity;
/*php app/console doctrine:schema:update --force*/
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
* @ORM\Entity
* @ORM\Table(name="Ingrediente")
* @ORM\Table()
* @ORM\Entity(repositoryClass="Blogger\BlogBundle\Entity\IngredienteRepository")
* @ORM\HasLifecycleCallbacks()
*/

class Ingrediente
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	* @ORM\Column(type="text")
	*/
	protected $nombre;

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

}
