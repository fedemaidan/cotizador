<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="concepto")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConceptoRepository")
 */

class Concepto
{
	const ORM_ENTITY = "AppBundle:Concepto";

	/**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="idBUI", type="string", length=255)
     */
    private $idBUI;

    /**
     * @var string
     *
     * @ORM\Column(name="itemIdBUI", type="string", length=255)
     */
    private $itemIdBUI;
    

    /**
     * @var string
     *
     * @ORM\Column(name="secuencia", type="string", length=255)
     */
    private $secuencia;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Obra")
     */

    private $obra;






    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Concepto
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Concepto
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

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Concepto
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
     * Set secuencia
     *
     * @param string $secuencia
     *
     * @return Concepto
     */
    public function setSecuencia($secuencia)
    {
        $this->secuencia = $secuencia;

        return $this;
    }

    /**
     * Get secuencia
     *
     * @return string
     */
    public function getSecuencia()
    {
        return $this->secuencia;
    }

    /**
     * Set obra
     *
     * @param \AppBundle\Entity\Obra $obra
     *
     * @return Concepto
     */
    public function setObra(\AppBundle\Entity\Obra $obra = null)
    {
        $this->obra = $obra;

        return $this;
    }

    /**
     * Get obra
     *
     * @return \AppBundle\Entity\Obra
     */
    public function getObra()
    {
        return $this->obra;
    }

    /**
     * Set idBUI
     *
     * @param string $idBUI
     *
     * @return Concepto
     */
    public function setIdBUI($idBUI)
    {
        $this->idBUI = $idBUI;

        return $this;
    }

    /**
     * Get idBUI
     *
     * @return string
     */
    public function getIdBUI()
    {
        return $this->idBUI;
    }

    /**
     * Set itemIdBUI
     *
     * @param string $itemIdBUI
     *
     * @return Concepto
     */
    public function setItemIdBUI($itemIdBUI)
    {
        $this->itemIdBUI = $itemIdBUI;

        return $this;
    }

    /**
     * Get itemIdBUI
     *
     * @return string
     */
    public function getItemIdBUI()
    {
        return $this->itemIdBUI;
    }
}
