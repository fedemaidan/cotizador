<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoriaRepository")
 */
class Categoria
{
    const ORM_ENTITY = "AppBundle:Categoria";
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;


    /**
     * @var bool
     *
     * @ORM\Column(name="tipo_obra", type="boolean", nullable=true)
     */
    private $tipoObra;

    /**
     * @var bool
     *
     * @ORM\Column(name="tipo_plan_unico", type="boolean", nullable=true)
     */
    private $tipoPlanUnico;

    /**
     * @var bool
     *
     * @ORM\Column(name="tipo_instalaciones", type="boolean", nullable=true)
     */
    private $tipoInstalaciones;

    /**
     * @var bool
     *
     * @ORM\Column(name="tipo_transferencia", type="boolean", nullable=true)
     */
    private $tipoTransferencia;

    /**
     * @var bool
     *
     * @ORM\Column(name="orden", type="integer")
     */
    private $orden;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Categoria
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set tipoObra
     *
     * @param boolean $tipoObra
     * @return Categoria
     */
    public function setTipoObra($tipoObra)
    {
        $this->tipoObra = $tipoObra;

        return $this;
    }

    /**
     * Get tipoObra
     *
     * @return boolean 
     */
    public function getTipoObra()
    {
        return $this->tipoObra;
    }

    /**
     * Set tipoPlanUnico
     *
     * @param boolean $tipoPlanUnico
     * @return Categoria
     */
    public function setTipoPlanUnico($tipoPlanUnico)
    {
        $this->tipoPlanUnico = $tipoPlanUnico;

        return $this;
    }

    /**
     * Get tipoPlanUnico
     *
     * @return boolean 
     */
    public function getTipoPlanUnico()
    {
        return $this->tipoPlanUnico;
    }

    /**
     * Set tipoInstalaciones
     *
     * @param boolean $tipoInstalaciones
     * @return Categoria
     */
    public function setTipoInstalaciones($tipoInstalaciones)
    {
        $this->tipoInstalaciones = $tipoInstalaciones;

        return $this;
    }

    /**
     * Get tipoInstalaciones
     *
     * @return boolean 
     */
    public function getTipoInstalaciones()
    {
        return $this->tipoInstalaciones;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return Categoria
     */
    public function setOrder($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set tipoTransferencia
     *
     * @param boolean $tipoTransferencia
     * @return Categoria
     */
    public function setTipoTransferencia($tipoTransferencia)
    {
        $this->tipoTransferencia = $tipoTransferencia;

        return $this;
    }

    /**
     * Get tipoTransferencia
     *
     * @return boolean 
     */
    public function getTipoTransferencia()
    {
        return $this->tipoTransferencia;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return Categoria
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }
}
