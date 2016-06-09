<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Obra;
use AppBundle\Entity\Concepto;
use Doctrine\ORM\Mapping as ORM;

/**
 * ConceptoObra
 *
 * @ORM\Table(name="concepto_obra")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConceptoObraRepository")
 */
class ConceptoObra
{
    const ORM_ENTITY = "AppBundle:ConceptoObra";
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    *
    * @var integer
    * @ORM\ManyToOne(targetEntity="Concepto")
    * 
    */
       
    private $concepto;

    /**
    *
    * @var integer
    * @ORM\ManyToOne(targetEntity="Obra")
    * 
    */
       
    private $obra;

    /**
     * @var string
     *
     * @ORM\Column(name="secuencia", type="string", length=255)
     */
    private $secuencia;


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
     * Set concepto
     *
     * @param \AppBundle\Entity\Concepto $concepto
     *
     * @return ConceptoObra
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

    /**
     * Set obra
     *
     * @param \AppBundle\Entity\Obra $obra
     *
     * @return ConceptoObra
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
     * Set secuencia
     *
     * @param string $secuencia
     *
     * @return ConceptoObra
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
}
