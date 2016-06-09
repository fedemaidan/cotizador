<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rango
 *
 * @ORM\Table(name="rango")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RangoRepository")
 */
class Rango
{

    const ORM_ENTITY = "AppBundle:Rango";


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
     * @ORM\Column(name="desde", type="integer")
     */
    private $desde;

    /**
     * @var string
     *
     * @ORM\Column(name="hasta", type="integer")
     */
    private $hasta;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="tasa", type="string", length=255)
     */
    private $tasa;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;


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
     * Set minimo
     *
     * @param integer $minimo
     * @return Rango
     */
    public function setMinimo($minimo)
    {
        $this->minimo = $minimo;

        return $this;
    }

    /**
     * Get minimo
     *
     * @return integer 
     */
    public function getMinimo()
    {
        return $this->minimo;
    }

    /**
     * Set hasta
     *
     * @param integer $hasta
     * @return Rango
     */
    public function setHasta($hasta)
    {
        $this->hasta = $hasta;

        return $this;
    }

    /**
     * Get hasta
     *
     * @return integer 
     */
    public function getHasta()
    {
        return $this->hasta;
    }

    /**
     * Set tasa
     *
     * @param string $tasa
     * @return Rango
     */
    public function setTasa($tasa)
    {
        $this->tasa = $tasa;

        return $this;
    }

    /**
     * Get tasa
     *
     * @return string 
     */
    public function getTasa()
    {
        return floatval($this->tasa);
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Rango
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set desde
     *
     * @param string $desde
     * @return Rango
     */
    public function setDesde($desde)
    {
        $this->desde = $desde;

        return $this;
    }

    /**
     * Get desde
     *
     * @return string 
     */
    public function getDesde()
    {
        return $this->desde;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Rango
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
