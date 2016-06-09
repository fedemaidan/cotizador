<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presupuesto
 *
 * @ORM\Table(name="presupuesto")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PresupuestoRepository")
 */
class Presupuesto
{

    const ORM_ENTITY = "AppBundle:Presupuesto";

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
     * @ORM\Column(name="fecha", type="string", length=255, nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_director", type="string", length=255)
     */
    private $nombreDirector;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_propietario", type="string", length=255)
     */
    private $nombrePropietario;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit_director", type="string", length=255)
     */
    private $cuitDirector;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit_propietario", type="string", length=255)
     */
    private $cuitPropietario;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_presupuesto", type="string", length=255, nullable=true)
     */
    private $tipoPresupuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="firma", type="string", length=255, nullable=true)
     */
    private $firma;

    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", length=255, nullable=true)
     */
    private $matricula;

    /**
     * @var string
     *
     * @ORM\Column(name="consejo", type="string", length=255, nullable=true)
     */
    private $consejo;


    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=255, nullable=true)
     */
    private $ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="seccion", type="string", length=255, nullable=true)
     */
    private $seccion;

    /**
     * @var string
     *
     * @ORM\Column(name="manzana", type="string", length=255, nullable=true)
     */
    private $manzana;

    /**
     * @var string
     *
     * @ORM\Column(name="parcela", type="string", length=255, nullable=true)
     */
    private $parcela;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=255, nullable=true)
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilioDirector", type="string", length=255, nullable=true)
     */
    private $domicilioDirector;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal_director", type="string", length=255, nullable=true)
     */
    private $codigoPostalDirector;

    /**
     * @var string
     *
     * @ORM\Column(name="localidadDirector", type="string", length=255, nullable=true)
     */
    private $localidadDirector;

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
     * Set fecha
     *
     * @param string $fecha
     * @return Presupuesto
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return string 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Presupuesto
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Presupuesto
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set tipoPresupuesto
     *
     * @param string $tipoPresupuesto
     * @return Presupuesto
     */
    public function setTipoPresupuesto($tipoPresupuesto)
    {
        $this->tipoPresupuesto = $tipoPresupuesto;

        return $this;
    }

    /**
     * Get tipoPresupuesto
     *
     * @return string 
     */
    public function getTipoPresupuesto()
    {
        return $this->tipoPresupuesto;
    }

    /**
     * Set nombreDirector
     *
     * @param string $nombreDirector
     * @return Presupuesto
     */
    public function setNombreDirector($nombreDirector)
    {
        $this->nombreDirector = $nombreDirector;

        return $this;
    }

    /**
     * Get nombreDirector
     *
     * @return string 
     */
    public function getNombreDirector()
    {
        return $this->nombreDirector;
    }

    /**
     * Set nombrePropietario
     *
     * @param string $nombrePropietario
     * @return Presupuesto
     */
    public function setNombrePropietario($nombrePropietario)
    {
        $this->nombrePropietario = $nombrePropietario;

        return $this;
    }

    /**
     * Get nombrePropietario
     *
     * @return string 
     */
    public function getNombrePropietario()
    {
        return $this->nombrePropietario;
    }

    /**
     * Set cuitDirector
     *
     * @param string $cuitDirector
     * @return Presupuesto
     */
    public function setCuitDirector($cuitDirector)
    {
        $this->cuitDirector = $cuitDirector;

        return $this;
    }

    /**
     * Get cuitDirector
     *
     * @return string 
     */
    public function getCuitDirector()
    {
        return $this->cuitDirector;
    }

    /**
     * Set cuitPropietario
     *
     * @param string $cuitPropietario
     * @return Presupuesto
     */
    public function setCuitPropietario($cuitPropietario)
    {
        $this->cuitPropietario = $cuitPropietario;

        return $this;
    }

    /**
     * Get cuitPropietario
     *
     * @return string 
     */
    public function getCuitPropietario()
    {
        return $this->cuitPropietario;
    }

    /**
     * Set firma
     *
     * @param string $firma
     * @return Presupuesto
     */
    public function setFirma($firma)
    {
        $this->firma = $firma;

        return $this;
    }

    /**
     * Get firma
     *
     * @return string 
     */
    public function getFirma()
    {
        return $this->firma;
    }

    /**
     * Set matricula
     *
     * @param string $matricula
     * @return Presupuesto
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return string 
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set consejo
     *
     * @param string $consejo
     * @return Presupuesto
     */
    public function setConsejo($consejo)
    {
        $this->consejo = $consejo;

        return $this;
    }

    /**
     * Get consejo
     *
     * @return string 
     */
    public function getConsejo()
    {
        return $this->consejo;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Presupuesto
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set seccion
     *
     * @param string $seccion
     * @return Presupuesto
     */
    public function setSeccion($seccion)
    {
        $this->seccion = $seccion;

        return $this;
    }

    /**
     * Get seccion
     *
     * @return string 
     */
    public function getSeccion()
    {
        return $this->seccion;
    }

    /**
     * Set manzana
     *
     * @param string $manzana
     * @return Presupuesto
     */
    public function setManzana($manzana)
    {
        $this->manzana = $manzana;

        return $this;
    }

    /**
     * Get manzana
     *
     * @return string 
     */
    public function getManzana()
    {
        return $this->manzana;
    }

    /**
     * Set parcela
     *
     * @param string $parcela
     * @return Presupuesto
     */
    public function setParcela($parcela)
    {
        $this->parcela = $parcela;

        return $this;
    }

    /**
     * Get parcela
     *
     * @return string 
     */
    public function getParcela()
    {
        return $this->parcela;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     * @return Presupuesto
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string 
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set domicilioDirector
     *
     * @param string $domicilioDirector
     *
     * @return Presupuesto
     */
    public function setDomicilioDirector($domicilioDirector)
    {
        $this->domicilioDirector = $domicilioDirector;

        return $this;
    }

    /**
     * Get domicilioDirector
     *
     * @return string
     */
    public function getDomicilioDirector()
    {
        return $this->domicilioDirector;
    }

    /**
     * Set codigoPostalDirector
     *
     * @param string $codigoPostalDirector
     *
     * @return Presupuesto
     */
    public function setCodigoPostalDirector($codigoPostalDirector)
    {
        $this->codigoPostalDirector = $codigoPostalDirector;

        return $this;
    }

    /**
     * Get codigoPostalDirector
     *
     * @return string
     */
    public function getCodigoPostalDirector()
    {
        return $this->codigoPostalDirector;
    }

    /**
     * Set localidadDirector
     *
     * @param string $localidadDirector
     *
     * @return Presupuesto
     */
    public function setLocalidadDirector($localidadDirector)
    {
        $this->localidadDirector = $localidadDirector;

        return $this;
    }

    /**
     * Get localidadDirector
     *
     * @return string
     */
    public function getLocalidadDirector()
    {
        return $this->localidadDirector;
    }
}
