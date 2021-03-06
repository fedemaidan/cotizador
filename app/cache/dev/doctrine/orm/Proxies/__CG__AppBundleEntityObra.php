<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Obra extends \AppBundle\Entity\Obra implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'categoria', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'tipoCalculo', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'tasa', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'minimo', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'rangoCodigo', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'tipoMedidaPrincipal', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'tipoMedidaAdicional', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'articulo18', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'articuloLey');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'categoria', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'tipoCalculo', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'tasa', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'minimo', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'rangoCodigo', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'tipoMedidaPrincipal', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'tipoMedidaAdicional', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'articulo18', '' . "\0" . 'AppBundle\\Entity\\Obra' . "\0" . 'articuloLey');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Obra $proxy) {
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
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', array($descripcion));

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', array());

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategoria($categoria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategoria', array($categoria));

        return parent::setCategoria($categoria);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoria', array());

        return parent::getCategoria();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoCalculo($tipoCalculo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoCalculo', array($tipoCalculo));

        return parent::setTipoCalculo($tipoCalculo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoCalculo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoCalculo', array());

        return parent::getTipoCalculo();
    }

    /**
     * {@inheritDoc}
     */
    public function setTasa($tasa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTasa', array($tasa));

        return parent::setTasa($tasa);
    }

    /**
     * {@inheritDoc}
     */
    public function getTasa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTasa', array());

        return parent::getTasa();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinimo($minimo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinimo', array($minimo));

        return parent::setMinimo($minimo);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinimo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinimo', array());

        return parent::getMinimo();
    }

    /**
     * {@inheritDoc}
     */
    public function setRango($rango)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRango', array($rango));

        return parent::setRango($rango);
    }

    /**
     * {@inheritDoc}
     */
    public function getRango()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRango', array());

        return parent::getRango();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoMedida($tipoMedida)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoMedida', array($tipoMedida));

        return parent::setTipoMedida($tipoMedida);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoMedida()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoMedida', array());

        return parent::getTipoMedida();
    }

    /**
     * {@inheritDoc}
     */
    public function setArticulo18($articulo18)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArticulo18', array($articulo18));

        return parent::setArticulo18($articulo18);
    }

    /**
     * {@inheritDoc}
     */
    public function getArticulo18()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticulo18', array());

        return parent::getArticulo18();
    }

    /**
     * {@inheritDoc}
     */
    public function setArticuloLey($articuloLey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArticuloLey', array($articuloLey));

        return parent::setArticuloLey($articuloLey);
    }

    /**
     * {@inheritDoc}
     */
    public function getArticuloLey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticuloLey', array());

        return parent::getArticuloLey();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoMedidaPrincipal($tipoMedidaPrincipal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoMedidaPrincipal', array($tipoMedidaPrincipal));

        return parent::setTipoMedidaPrincipal($tipoMedidaPrincipal);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoMedidaPrincipal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoMedidaPrincipal', array());

        return parent::getTipoMedidaPrincipal();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoMedidaAdicional($tipoMedidaAdicional)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoMedidaAdicional', array($tipoMedidaAdicional));

        return parent::setTipoMedidaAdicional($tipoMedidaAdicional);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoMedidaAdicional()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoMedidaAdicional', array());

        return parent::getTipoMedidaAdicional();
    }

    /**
     * {@inheritDoc}
     */
    public function setRangoCodigo($rangoCodigo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRangoCodigo', array($rangoCodigo));

        return parent::setRangoCodigo($rangoCodigo);
    }

    /**
     * {@inheritDoc}
     */
    public function getRangoCodigo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRangoCodigo', array());

        return parent::getRangoCodigo();
    }

}
