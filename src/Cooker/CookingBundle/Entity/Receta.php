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
    * @ORM\OneToMany(targetEntity="Comentario", mappedBy="receta"))
    */
    private $comentarios;

	/**
	* @ORM\ManyToMany(targetEntity="Ingrediente", mappedBy="recetas"))
	*/
	private $ingredientes;

    /**
    * @ORM\ManyToOne(targetEntity="Plato", inversedBy="recetas")
    * @ORM\JoinColumn(name="tipo_plato", referencedColumnName="id")
    */
	private $tipo_plato;
	
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
	* @ORM\Column(type="date")
	*/
	protected $date;
    
    /**
	* @ORM\Column(type="text")
	*/
	protected $imagen;


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
    public function setDetalles($detalles)
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
    public function setTipo_plato($tipo_plato)
    {
        $this->tipo_plato = $tipo_plato;

        return $this;
    }

    /**
     * Get tipo_plato
     *
     * @return string 
     */
    public function getTipo_plato()
    {
        return $this->tipo_plato;
    }

	 /**
     * Get tipoplato para el adminbundle que lo requiere
     *
     * @return string 
     */
    public function getTipoPlato()
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
    
    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Receta
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    public function __construct()
    {
    $this->comentarios = new ArrayCollection();
	$this->ingredientes = new ArrayCollection();

    $this->setDate(new \DateTime());
    }

    /**
     * Add comentarios
     *
     * @param \Cooker\CookingBundle\Entity\Comentario $comentarios
     * @return Receta
     */
    public function addComentario(\Cooker\CookingBundle\Entity\Comentario $comentarios)
    {
		$comentarios->setReceta($this);
        $this->comentarios[] = $comentarios;

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
        $ingredientes->addRecetas($this);
		$this->ingredientes[] = $ingredientes;

        return $this;
    }

    /**
     * Remove comentarios
     *
     * @param \Cooker\CookingBundle\Entity\Comentario $comentarios
     */
    public function removeComentario(\Cooker\CookingBundle\Entity\Comentario $comentarios)
    {
        $this->comentarios->removeElement($comentarios);
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
     * Get comentario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentarios()
    {
        return $this->comentarios;
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
