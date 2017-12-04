<?php

namespace Proxies\__CG__\Cooker\CookingBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Receta extends \Cooker\CookingBundle\Entity\Receta implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Cooker\\CookingBundle\\Entity\\Receta' . "\0" . 'comentarios', '' . "\0" . 'Cooker\\CookingBundle\\Entity\\Receta' . "\0" . 'ingredientes', '' . "\0" . 'Cooker\\CookingBundle\\Entity\\Receta' . "\0" . 'tipo_plato', 'id', 'nombre', 'detalles', 'date', 'imagen');
        }

        return array('__isInitialized__', '' . "\0" . 'Cooker\\CookingBundle\\Entity\\Receta' . "\0" . 'comentarios', '' . "\0" . 'Cooker\\CookingBundle\\Entity\\Receta' . "\0" . 'ingredientes', '' . "\0" . 'Cooker\\CookingBundle\\Entity\\Receta' . "\0" . 'tipo_plato', 'id', 'nombre', 'detalles', 'date', 'imagen');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Receta $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setBody($detalles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBody', array($detalles));

        return parent::setBody($detalles);
    }

    /**
     * {@inheritDoc}
     */
    public function getDetalles($length = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetalles', array($length));

        return parent::getDetalles($length);
    }

    /**
     * {@inheritDoc}
     */
    public function setTipo_plato($tipo_plato)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipo_plato', array($tipo_plato));

        return parent::setTipo_plato($tipo_plato);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo_plato()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo_plato', array());

        return parent::getTipo_plato();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagen($imagen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagen', array($imagen));

        return parent::setImagen($imagen);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagen', array());

        return parent::getImagen();
    }

    /**
     * {@inheritDoc}
     */
    public function addComentario(\Cooker\CookingBundle\Entity\Comentario $comentarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComentario', array($comentarios));

        return parent::addComentario($comentarios);
    }

    /**
     * {@inheritDoc}
     */
    public function addIngredientes(\Cooker\CookingBundle\Entity\Ingrediente $ingredientes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIngredientes', array($ingredientes));

        return parent::addIngredientes($ingredientes);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComentario(\Cooker\CookingBundle\Entity\Comentario $comentarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComentario', array($comentarios));

        return parent::removeComentario($comentarios);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIngredientes(\Cooker\CookingBundle\Entity\Ingrediente $ingredientes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIngredientes', array($ingredientes));

        return parent::removeIngredientes($ingredientes);
    }

    /**
     * {@inheritDoc}
     */
    public function getComentarios()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComentarios', array());

        return parent::getComentarios();
    }

    /**
     * {@inheritDoc}
     */
    public function getIngredientes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIngredientes', array());

        return parent::getIngredientes();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
