<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Obra;
use Doctrine\ORM\Mapping as ORM;

/**
 * DetallePresupuesto
 *
 * @ORM\Table(name="detalle_presupuesto")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DetallePresupuestoRepository")
 */
class DetallePresupuesto
{
    const ORM_ENTITY = "AppBundle:DetallePresupuesto";
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Presupuesto")
     * @ORM\JoinColumn(name="prespuesto_id", referencedColumnName="id")
     */
    private $presupuesto;

    /**
     * @var bool
     *
     * @ORM\Column(name="articulo11", type="boolean")
     */
    private $articulo11;

    /**
     * @var bool
     *
     * @ORM\Column(name="articulo12", type="boolean", nullable=true)
     */
    private $articulo12;

    /**
     * @var bool
     *
     * @ORM\Column(name="articulo6", type="boolean", nullable=true)
     */
    private $articulo6;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidadPrincipal", type="integer")
     */
    private $cantidadPrincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoMedidaPrincipal", type="string", length=255)
     */
    private $tipoMedidaPrincipal;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidadAdicional", type="integer", nullable=true)
     */
    private $cantidadAdicional;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoMedidaAdicional", type="string", length=255, nullable=true)
     */
    private $tipoMedidaAdicional;

    /**
     * @var int
     *
     * @ORM\Column(name="total", type="integer", nullable=true)
     */
    private $total;

    /**
     * @var bool
     *
     * @ORM\Column(name="articulo18", type="boolean", nullable=true)
     */
    private $articulo18;

    /**
     * @var bool
     *
     * @ORM\Column(name="articulo_ley", type="boolean", nullable=true)
     */
    private $articuloLey;

    /**
     * @var int
     *
     * @ORM\Column(name="impuesto", type="integer", nullable=true)
     */
    private $impuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="recargo", type="string", length=255, nullable=true)
     */
    private $recargo;

    /**
     * @var string
     *
     * @ORM\Column(name="descuento", type="string", length=255,nullable=true)
     */
    private $descuento;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Obra")
     * @ORM\JoinColumn(name="obra_id", referencedColumnName="id")
     */
    private $obra;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Concepto")
     * @ORM\JoinColumn(name="concepto_id", referencedColumnName="id")
     */
    private $concepto;


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
     * Set numero
     *
     * @param integer $numero
     * @return DetallePresupuesto
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set articulo11
     *
     * @param boolean $articulo11
     * @return DetallePresupuesto
     */
    public function setArticulo11($articulo11)
    {
        $this->articulo11 = $articulo11;

        return $this;
    }

    /**
     * Get articulo11
     *
     * @return boolean 
     */
    public function getArticulo11()
    {
        return $this->articulo11;
    }

    /**
     * Set articulo12
     *
     * @param boolean $articulo12
     * @return DetallePresupuesto
     */
    public function setArticulo12($articulo12)
    {
        $this->articulo12 = $articulo12;

        return $this;
    }

    /**
     * Get articulo12
     *
     * @return boolean 
     */
    public function getArticulo12()
    {
        return $this->articulo12;
    }

    /**
     * Set articulo6
     *
     * @param boolean $articulo6
     * @return DetallePresupuesto
     */
    public function setArticulo6($articulo6)
    {
        $this->articulo6 = $articulo6;

        return $this;
    }

    /**
     * Get articulo6
     *
     * @return boolean 
     */
    public function getArticulo6()
    {
        return $this->articulo6;
    }

    /**
     * Set cantidadPrincipal
     *
     * @param integer $cantidadPrincipal
     * @return DetallePresupuesto
     */
    public function setCantidadPrincipal($cantidadPrincipal)
    {
        $this->cantidadPrincipal = $cantidadPrincipal;

        return $this;
    }

    /**
     * Get cantidadPrincipal
     *
     * @return integer 
     */
    public function getCantidadPrincipal()
    {
        return $this->cantidadPrincipal;
    }

    /**
     * Set tipoMedidaPrincipal
     *
     * @param string $tipoMedidaPrincipal
     * @return DetallePresupuesto
     */
    public function setTipoMedidaPrincipal($tipoMedidaPrincipal)
    {
        $this->tipoMedidaPrincipal = $tipoMedidaPrincipal;

        return $this;
    }

    /**
     * Get tipoMedidaPrincipal
     *
     * @return string 
     */
    public function getTipoMedidaPrincipal()
    {
        return $this->tipoMedidaPrincipal;
    }

    /**
     * Set cantidadAdicional
     *
     * @param integer $cantidadAdicional
     * @return DetallePresupuesto
     */
    public function setCantidadAdicional($cantidadAdicional)
    {
        $this->cantidadAdicional = $cantidadAdicional;

        return $this;
    }

    /**
     * Get cantidadAdicional
     *
     * @return integer 
     */
    public function getCantidadAdicional()
    {
        return $this->cantidadAdicional;
    }

    /**
     * Set tipoMedidaAdicional
     *
     * @param string $tipoMedidaAdicional
     * @return DetallePresupuesto
     */
    public function setTipoMedidaAdicional($tipoMedidaAdicional)
    {
        $this->tipoMedidaAdicional = $tipoMedidaAdicional;

        return $this;
    }

    /**
     * Get tipoMedidaAdicional
     *
     * @return string 
     */
    public function getTipoMedidaAdicional()
    {
        return $this->tipoMedidaAdicional;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return DetallePresupuesto
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set articulo18
     *
     * @param boolean $articulo18
     * @return DetallePresupuesto
     */
    public function setArticulo18($articulo18)
    {
        $this->articulo18 = $articulo18;

        return $this;
    }

    /**
     * Get articulo18
     *
     * @return boolean 
     */
    public function getArticulo18()
    {
        return $this->articulo18;
    }

    /**
     * Set impuesto
     *
     * @param integer $impuesto
     * @return DetallePresupuesto
     */
    public function setImpuesto($impuesto)
    {
        $this->impuesto = $impuesto;

        return $this;
    }

    /**
     * Get impuesto
     *
     * @return integer 
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * Set recargo
     *
     * @param string $recargo
     * @return DetallePresupuesto
     */
    public function setRecargo($recargo)
    {
        $this->recargo = $recargo;

        return $this;
    }

    /**
     * Get recargo
     *
     * @return string 
     */
    public function getRecargo()
    {
        return $this->recargo;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     * @return DetallePresupuesto
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }


    /**
     * Set presupuesto
     *
     * @param Presupuesto $presupuesto
     * @return DetallePresupuesto
     */
    public function setPresupuesto($presupuesto)
    {
        $this->presupuesto = $presupuesto;

        return $this;
    }

    /**
     * Get presupuesto
     *
     * @return Presupuesto 
     */
    public function getPresupuesto()
    {
        return $this->presupuesto;
    }

    /**
     * Set articuloLey
     *
     * @param boolean $articuloLey
     * @return DetallePresupuesto
     */
    public function setArticuloLey($articuloLey)
    {
        $this->articuloLey = $articuloLey;

        return $this;
    }

    /**
     * Get articuloLey
     *
     * @return boolean 
     */
    public function getArticuloLey()
    {
        return $this->articuloLey;
    }

    /**
     * Set tipoCalculo
     *
     * @param string $tipoCalculo
     * @return DetallePresupuesto
     */
    public function setTipoCalculo($tipoCalculo)
    {
        $this->tipoCalculo = $tipoCalculo;

        return $this;
    }

    /**
     * Get tipoCalculo
     *
     * @return string 
     */
    public function getTipoCalculo()
    {
        return $this->tipoCalculo;
    }

    /**
     * Set obra
     *
     * @param Obra $obra
     * @return DetallePresupuesto
     */
    public function setObra(\AppBundle\Entity\Obra $obra)
    {
        $this->obra = $obra;

        return $this;
    }

    /**
     * Get obra
     *
     * @return Obra 
     */
    public function getObra()
    {
        return $this->obra;
    }

    /**
     * Set concepto
     *
     * @param \AppBundle\Entity\Concepto $concepto
     *
     * @return DetallePresupuesto
     */
    public function setConcepto(\AppBundle\Entity\Concepto $concepto = null)
    {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return \AppBundle\Entity\Concepto
     */
    public function getConcepto()
    {
        return $this->concepto;
    }
}
