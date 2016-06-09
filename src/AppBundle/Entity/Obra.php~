<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Obra
 *
 * @ORM\Table(name="obra")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ObraRepository")
 */
class Obra
{

    const ORM_ENTITY = "AppBundle:Obra";

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
     * @var int
     * @ORM\ManyToOne(targetEntity="Categoria")
     */

    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoCalculo", type="string", length=255)
     */
    private $tipoCalculo;

    /**
     * @var string
     *
     * @ORM\Column(name="tasa", type="string", length=255)
     */
    private $tasa;

    /**
     * @var string
     *
     * @ORM\Column(name="minimo", type="string", length=255)
     */
    private $minimo;

    /**
     * @ORM\Column(name="rango_codigo", type="string", length=255, nullable=true)
     */
    private $rangoCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoMedidaPrincipal", type="string", length=255)
     */
    private $tipoMedidaPrincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoMedidaAdicional", type="string", length=255, nullable=true)
     */
    private $tipoMedidaAdicional;

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
     * @return Obra
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
     * Set categoria
     *
     * @param \stdClass $categoria
     * @return Obra
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \stdClass 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set tipoCalculo
     *
     * @param string $tipoCalculo
     * @return Obra
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
     * Set tasa
     *
     * @param string $tasa
     * @return Obra
     */
    public function setTasa($tasa)
    {
        $this->tasa = $tasa;

        return $this;
    }

    /**
     * Get tasa
     *
     * @return float 
     */
    public function getTasa()
    {
        return floatval($this->tasa);
    }

    /**
     * Set minimo
     *
     * @param string $minimo
     * @return Obra
     */
    public function setMinimo($minimo)
    {
        $this->minimo = $minimo;

        return $this;
    }

    /**
     * Get minimo
     *
     * @return string 
     */
    public function getMinimo()
    {
        return $this->minimo;
    }

    /**
     * Set rango
     *
     * @param \stdClass $rango
     * @return Obra
     */
    public function setRango($rango)
    {
        $this->rango = $rango;

        return $this;
    }

    /**
     * Get rango
     *
     * @return \stdClass 
     */
    public function getRango()
    {
        return $this->rango;
    }

    /**
     * Set tipoMedida
     *
     * @param string $tipoMedida
     * @return Obra
     */
    public function setTipoMedida($tipoMedida)
    {
        $this->tipoMedida = $tipoMedida;

        return $this;
    }

    /**
     * Get tipoMedida
     *
     * @return string 
     */
    public function getTipoMedida()
    {
        return $this->tipoMedida;
    }

    /**
     * Set articulo18
     *
     * @param boolean $articulo18
     * @return Obra
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
     * Set articuloLey
     *
     * @param boolean $articuloLey
     * @return Obra
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
     * Set tipoMedidaPrincipal
     *
     * @param string $tipoMedidaPrincipal
     * @return Obra
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
     * Set tipoMedidaAdicional
     *
     * @param string $tipoMedidaAdicional
     * @return Obra
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
     * Set rangoCodigo
     *
     * @param string $rangoCodigo
     * @return Obra
     */
    public function setRangoCodigo($rangoCodigo)
    {
        $this->rangoCodigo = $rangoCodigo;

        return $this;
    }

    /**
     * Get rangoCodigo
     *
     * @return string 
     */
    public function getRangoCodigo()
    {
        return $this->rangoCodigo;
    }
}
