<?php
// src/Cooker\CookingBundle/Entity/Receta.php
namespace Cooker\CookingBundle\Entity;
/*php app/console doctrine:schema:update --force*/
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
* @ORM\Entity
* @ORM\Table(name="receta")
* @ORM\Table()
* @ORM\Entity(repositoryClass="Cooker\CookingBundle\Entity\RecetaRepository")
* @ORM\HasLifecycleCallbacks()
*/

class Receta
{
    /**
    * @ORM\OneToMany(targetEntity="Comment", mappedBy="receta"))
    */
    private $comments;

	/**
	* @ORM\ManyToMany(targetEntity="Ingrediente", mappedBy="recetas"))
	*/
	private $ingredientes;

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
	* @ORM\Column(type="text")
	*/
	protected $detalles;

	/**
	* @ORM\Column(type="text")
	*/
	protected $tipo_plato;
	
	/**
	* @ORM\Column(type="date")
	*/
	protected $date;

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
     * @return Receta
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
     * Set detalles
     *
     * @param string $detalles
     * @return Receta
     */
    public function setBody($detalles)
    {
        $this->detalles = $detalles;

        return $this;
    }

    /**
     * Get detalles
     *
     * @return string 
     */
    public function getDetalles($length = null)
{
        if (false === is_null($length) && $length > 0 && strlen($this->detalles) > $length)
            return substr($this->detalles, 0, $length) . "(...)";
        else
            return $this->detalles;
    }

	  /**
     * Set tipo_plato
     *
     * @param string $tipo_plato
     * @return Receta
     */
    public function setTipo($tipo_plato)
    {
        $this->tipo_plato = $tipo_plato;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo_plato;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Receta
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
    
    public function __construct()
    {
    $this->comments = new ArrayCollection();
	$this->ingredientes = new ArrayCollection();

    $this->setDate(new \DateTime());
    }


    /**
     * Add comments
     *
     * @param \Cooker\CookingBundle\Entity\Comment $comments
     * @return Receta
     */
    public function addComment(\Cooker\CookingBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }
	
    /**
     * Add Ingredientes
     *
     * @param \Cooker\CookingBundle\Entity\Ingrediente $ingredientes
     * @return Receta
     */
    public function addIngredientes(\Cooker\CookingBundle\Entity\Ingrediente $ingredientes)
    {
        $this->ingredientes[] = $ingredientes;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Cooker\CookingBundle\Entity\Comment $comments
     */
    public function removeComment(\Cooker\CookingBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

	 /**
     * Remove ingredientes
     *
     * @param \Cooker\CookingBundle\Entity\Ingrediente $ingredientes
     */
    public function removeIngredientes(\Cooker\CookingBundle\Entity\Ingrediente $ingredientes)
    {
        $this->ingredientes->removeElement($ingredientes);
    }
    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }

	/**
     * Get Ingredientes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    public function __toString()
    {
        return $this->getNombre();
    }
}
