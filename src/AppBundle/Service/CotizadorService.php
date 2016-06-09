<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\DependencyInjection\Container;
use AppBundle\Entity\Presupuesto;
use AppBundle\Entity\Categoria;
use AppBundle\Entity\Concepto;
use AppBundle\Entity\ConceptoObra;
use AppBundle\Entity\Obra;
use AppBundle\Entity\Rango;
use AppBundle\Entity\DetallePresupuesto;
use SensioLabs\Security\Exception\RuntimeException;

class CotizadorService {

    private $container;
    
    /**
    *
    * @var EntityManager
    */
    private $em;

    private $metadata;

    public function __construct( Container $container, EntityManager $entityManager )
    {
        $this->container = $container;
        $this->em = $entityManager;
        $this->metadata = [
                ["name"=>"obra","label"=>"OBRA","datatype"=>"string","editable"=>false],
                ["name"=>"a11","label"=>"A. 11","datatype"=>"boolean","editable"=>true],
                ["name"=>"a12","label"=>"A. 12","datatype"=>"boolean","editable"=>true],
                ["name"=>"a6.3.1.2","label"=>"A. 6.3.1.2","datatype"=>"boolean","editable"=>true],
                ["name"=>"cantidad","label"=>"CANTIDAD","datatype"=>"integer","editable"=>true],
                ["name"=>"um","label"=>"UM","datatype"=>"string","editable"=>false],
                ["name"=>"cantidadA","label"=>"CANT. AD.","datatype"=>"string","editable"=>true],
                ["name"=>"uma","label"=>"UMA","datatype"=>"string","editable"=>false],
                ["name"=>"borrar","label"=>"DESCARTAR","datatype"=>"html","editable"=>false, "style" => "text-align: center;"]
            ];
    }

    public function validarPresupuesto($datosGenerales) {
        
        $arrayErrores = array();

        foreach ($datosGenerales as $key => $value) {
            if ($value == ""){
                $key = ucwords($key);
                $arrayErrores[] = " $key no cargado.";
            }
        }

        if(!filter_var($datosGenerales->mail, FILTER_VALIDATE_EMAIL)){
            $arrayErrores[] = " Mail no valido.";
        }
        
        if ( !$this->validarCuit($datosGenerales->cuitPropietario)) {
            $arrayErrores[] = " Cuit del propietario no valido.";
        }

        if ( !$this->validarCuit($datosGenerales->cuitDirector)) {
            $arrayErrores[] = " Cuit del director no valido.";
        }

        if (count($arrayErrores) > 0) {
            $msg = "";
            foreach ($arrayErrores as $key => $value) {
                $msg .= $value;
            }
            throw new RuntimeException($msg, 1);  
        }
    }

    public function cotizar($datosGenerales, $datos) 
    {
        $presupuesto = $this->guardarPresupuesto($datosGenerales);
        $total = $this->procesarPresupuesto($presupuesto, $datos);

        return array("presupuesto" => $presupuesto, "total" => $total, "datos" => $datos);
    }

    public function arrayDePresupuestoParaPDF($datos) 
    {
        $array = $this->datos($datos);
        $array["metadata"][8] = ["name"=>"impuesto","label"=>"IMPUESTO","datatype"=>"integer","editable"=>false];
        $array["metadata"][9] = ["name"=>"recargo","label"=>"RECARGO","datatype"=>"integer","editable"=>false];
        $array["metadata"][10] = ["name"=>"total","label"=>"TOTAL","datatype"=>"integer","editable"=>false];

        return $array;
    }  
    
    public function datos($datos) 
    {
        return $array = array("metadata"=> $this->metadata,"data"=>$datos);
    }
    
    public function dameTiposDePresupuesto() 
    {
        return $array = array( array("id" => "tipoObra", "nombre" => "Obra"),
                                array("id" => "tipoPlanUnico", "nombre" => "Plan unico"),
                                array("id" => "tipoInstalaciones", "nombre" => "Instalaciones"),
                                array("id" => "tipoTransferencia", "nombre" => "Transferencia"),
                                );
    }

    public function dameCategorias($tipo) {
        return $this->em->getRepository(Categoria::ORM_ENTITY)->getCategoriasComoArray($tipo);
    }

    public function dameObras($categoriaDescripcion) {
        $categoria = $this->em->getRepository(Categoria::ORM_ENTITY)->findOneByDescripcion($categoriaDescripcion);
        return $this->em->getRepository(Obra::ORM_ENTITY)->getObrasComoArray($categoria);
    }

    public function getObra($obraTxt) {
        return $this->em->getRepository(Obra::ORM_ENTITY)->findOneByDescripcion($obraTxt);
    }

    //////////////////////////////////////////////////////////////////////////
    private function guardarPresupuesto($datosGenerales) {
        
        $this->validarPresupuesto($datosGenerales);
        
        $presupuesto = new Presupuesto();
        //director
        $presupuesto->setNombreDirector($datosGenerales->nombreDirector);
        $presupuesto->setCuitDirector($datosGenerales->cuitDirector);
        $presupuesto->setMatricula($datosGenerales->matricula);
        $presupuesto->setLocalidadDirector($datosGenerales->localidad);
        $presupuesto->setCodigoPostalDirector($datosGenerales->cpDirector);
        $presupuesto->setDomicilioDirector($datosGenerales->domicilioDirector);
        $presupuesto->setMail($datosGenerales->mail);
        $presupuesto->setTelefono($datosGenerales->telefono);
        $presupuesto->setFecha(date('Y-m-d'));
        $presupuesto->setConsejo($datosGenerales->consejo);
        //propietario
        $presupuesto->setNombrePropietario($datosGenerales->nombrePropietario);
        $presupuesto->setCuitPropietario($datosGenerales->cuitPropietario);
        $presupuesto->setDomicilio($datosGenerales->domicilioPropietario);

        //obra
        $presupuesto->setUbicacion($datosGenerales->ubicacion);
        $presupuesto->setSeccion($datosGenerales->seccion);
        $presupuesto->setManzana($datosGenerales->manzana);
        $presupuesto->setParcela($datosGenerales->parcela);
        $presupuesto->setTipoPresupuesto($datosGenerales->tipo);

        $this->em->persist($presupuesto);

        return $presupuesto;
    }

    private function procesarPresupuesto($presupuesto, &$datos) {
        $total = 0;
        
        foreach ($datos as $key => $rowObra) {
            $this->procesarItemEnviado($rowObra, $presupuesto);
        }
        $this->em->flush();

        
        //completo datos para el pdf
        $detalles = $this->dameDetallesDelPresupuestos($presupuesto);
        
        foreach ($detalles as $key => $det) {

            
            
            $datos[$key]->columns[0] = $det->getObra()->getDescripcion();
            $datos[$key]->columns[1] = $det->getArticulo11();
            $datos[$key]->columns[2] = $det->getArticulo12();
            $datos[$key]->columns[3] = $det->getArticulo6();
            $datos[$key]->columns[4] = $det->getCantidadPrincipal();
            $datos[$key]->columns[5] = $det->getTipoMedidaPrincipal();
            $datos[$key]->columns[6] = $det->getCantidadAdicional();
            $datos[$key]->columns[7] = $det->getTipoMedidaAdicional();
            $datos[$key]->columns[8] = $det->getImpuesto();
            $datos[$key]->columns[9] = $det->getRecargo();
            $datos[$key]->columns[10] = $det->getTotal();
            $total += $det->getTotal();

            // if (!isset($datos[$key]->visible)) {
                $datos[$key]->visible = true;
                $datos[$key]->id = $key;
                $datos[$key]->originalIndex = $key;
            
        }

        return $total;
    }

     private function procesarDetalle($obra) {

        $this->calcularImpuesto($obra);
        $this->calcularRecargo($obra);
        $obra->setTotal($obra->getImpuesto() + $obra->getRecargo());

     }

     private function calcularRecargo($obra) {

        $recargo = 0;
        if ($obra->getArticulo11()) {
            $obra->setImpuesto(0);
            $recargo = 0;
        }
        
        if ($obra->getArticulo12()) {
            $impuesto = $obra->getImpuesto();
            $recargo += $impuesto * 5;
        }

        if ($obra->getArticulo6()) {
            $impuesto = $obra->getImpuesto();
            $recargo += $impuesto * 2.5;   
        }

        if ($obra->getObra()->getArticulo18()) {
            $recargo = $obra->getCantidadPrincipal() * 8.5;
        }

        $obra->setRecargo($recargo);
            
        // if ($obra->getArticuloLey())
        //     return 0;

        
     }

     private function detalleRangoPorPaso($codigo, $cantidadAdicional, $cantidad,  $minimo, $rowObra, $presupuesto) {
        
        $rangos = $this->em->getRepository(Rango::ORM_ENTITY)->rangoPorCodigo($codigo);
        $primero = true;
        $secuencia = 0;

        foreach ($rangos as $rango) {
            $secuencia++;
            $desde = $rango->getDesde();
            $hasta = $rango->getHasta();
            
            if ($hasta > $cantidadAdicional) {
                $hasta = $cantidadAdicional;
            }

            $impuesto =  $rango->getTasa() * $hasta;
            $impuesto = $primero ? $impuesto + $minimo : $impuesto;
            $impuestoFinal = $cantidad * $impuesto;

            $detalle = $this->crearDetallePresupuesto($rowObra, $presupuesto, $secuencia);
            $detalle->setCantidadPrincipal($cantidad);
            $detalle->setCantidadAdicional($hasta);
            $this->calcularTotal($detalle, $impuestoFinal);
            $this->em->persist($detalle);

            $cantidadAdicional -= $hasta;
            if ($hasta == $cantidadAdicional) {
                break;
            }
            $primero = false;
        }
     }

    private function calcularRangoPorPasoNuevo($codigo, $rowObra, $minimo, $presupuesto) {

        $rangos = $this->em->getRepository(Rango::ORM_ENTITY)->rangoPorCodigo($codigo);
        $primero = true;
        $cantidad = $rowObra->columns[4];
        $secuencia = 0;
        foreach ($rangos as $rango) {
            $secuencia++;
            $desde = $rango->getDesde();
            $hasta = $rango->getHasta();
            
            if ($hasta > $cantidad) {
                $hasta = $cantidad;
            }

            $impuesto =  $rango->getTasa() * $hasta;
            $impuesto = $primero ? $impuesto + $minimo : $impuesto;

            $detalle = $this->crearDetallePresupuesto($rowObra, $presupuesto, $secuencia);
            $detalle->setCantidadPrincipal($cantidad);
            $this->calcularTotal($detalle, $impuesto);
            $this->em->persist($detalle);

            $cantidad -= $hasta;
            if ($hasta == $cantidad) {
                break;
            }
            $primero = false;
        }

        return $impuesto;
    }


    private function calcularRangoPorPaso($codigo, $cantidad) {

        $rangos = $this->em->getRepository(Rango::ORM_ENTITY)->rangoPorCodigo($codigo);
        $impuesto = 0;

        foreach ($rangos as $rango) {
            $desde = $rango->getDesde();
            $hasta = $rango->getHasta();
            
            if ($hasta > $cantidad) {
                $hasta = $cantidad;
            }

            $impuesto +=  $rango->getTasa() * $hasta;

            $cantidad -= $hasta;
            if ($hasta == $cantidad) {
                break;
            }
        }

        return $impuesto;
     }

    private function validarCuit( $cuit ){
        $cuit = preg_replace( '/[^\d]/', '', (string) $cuit );
        if( strlen( $cuit ) != 11 ){
            return false;
        }
        $acumulado = 0;
        $digitos = str_split( $cuit );
        $digito = array_pop( $digitos );

        for( $i = 0; $i < count( $digitos ); $i++ ){
            $acumulado += $digitos[ 9 - $i ] * ( 2 + ( $i % 6 ) );
        }
        $verif = 11 - ( $acumulado % 11 );
        $verif = $verif == 11? 0 : $verif;

        return $digito == $verif;
    }

    public function dameDetallesDelPresupuestos($presupuesto) {
        return $this->em->getRepository(DetallePresupuesto::ORM_ENTITY)->findByPresupuesto($presupuesto);
    }

    public function damePresupuestoById($id) {
        return $this->em->getRepository(Presupuesto::ORM_ENTITY)->findOneById($id);
    }

    private function procesarItemEnviado($rowObra, $presupuesto) {

        $obra = $this->getObra($rowObra->columns[0]);

        $impuesto = 0;

        switch ($obra->getTipoCalculo()) {
            case 'sanitarios':
                //creo objeto detalle de presupuesto
                $detalle = $this->crearDetallePresupuesto($rowObra, $presupuesto);
                
                //busco rango acorde
                $rango = $this->em->getRepository(Rango::ORM_ENTITY)->rangoPorValorYCodigo($obra->getRangoCodigo(), $detalle->getCantidadPrincipal());

                //calculo importe
                $impuesto = $obra->getTasa() * $rango[0]->getTasa();
                $this->calcularTotal($detalle, $impuesto);

                $this->em->persist($detalle);

                break;
            
            case 'tasa por cantidad y rangos':
                $cantidad = $rowObra->columns[4];
                $cantidadAdicional = $rowObra->columns[6];
                $minimo = $obra->getMinimo();
                
                $this->detalleRangoPorPaso($obra->getRangoCodigo(), $cantidadAdicional, $cantidad, $minimo, $rowObra, $presupuesto);

                break;

            case 'tasaconminimo':

                $detalle = $this->crearDetallePresupuesto($rowObra, $presupuesto);
                
                $impuesto = max($detalle->getCantidadPrincipal() * $obra->getTasa(), $obra->getMinimo());
                $this->calcularTotal($detalle, $impuesto);

                $this->em->persist($detalle);
                
                break;

            case 'tasaxrangos':
                $tipoRango = $this->em->getRepository(Rango::ORM_ENTITY)->rangoTipo($obra->getRangoCodigo());

                if ($tipoRango == "paso"){
                    $this->calcularRangoPorPasoNuevo($obra->getRangoCodigo(), $rowObra, $obra->getMinimo(), $presupuesto);
                }
                else if ($tipoRango == "rangos") {
                    $detalle = $this->crearDetallePresupuesto($rowObra, $presupuesto);
                    $rango = $this->em->getRepository(Rango::ORM_ENTITY)->rangoPorValorYCodigo($obra->getRangoCodigo(), $detalle->getCantidadPrincipal());
                    $tasaRango = $rango[0]->getTasa();
                    $impuesto = $tasaRango * $detalle->getCantidadPrincipal();
                    $this->calcularTotal($detalle, $impuesto);
                    $this->em->persist($detalle);
                }
                
                break;

            case 'valor por cantidad y rangos':
                $detalle = $this->crearDetallePresupuesto($rowObra, $presupuesto);

                $cantidad = $detalle->getCantidadPrincipal();
                $cantidadAdicional = $detalle->getCantidadAdicional();
                $rango = $this->em->getRepository(Rango::ORM_ENTITY)->rangoPorValorYCodigo($obra->getRangoCodigo(), $cantidadAdicional);
                $tasaRango = $rango[0]->getTasa();
                $impuesto = $tasaRango * $cantidad;
                $this->calcularTotal($detalle, $impuesto);
                $this->em->persist($detalle);

                break;
        }
    }

    private function crearDetallePresupuesto($rowObra, $presupuesto, $secuencia = 1) {

            $obra = new DetallePresupuesto();
            $obra->setNumero(1);

            $obraFija = $this->getObra($rowObra->columns[0]);
            $obra->setObra($obraFija);
            $obra->setPresupuesto($presupuesto);
            
            $obra->setArticulo11($rowObra->columns[1]);
            $obra->setArticulo12($rowObra->columns[2]);
            $obra->setArticulo6($rowObra->columns[3]);
            
            if ($rowObra->columns[4])
                $obra->setCantidadPrincipal($rowObra->columns[4]);
            else 
                $obra->setCantidadPrincipal(0);
            
            $obra->setTipoMedidaPrincipal($rowObra->columns[5]);
            
            if ($rowObra->columns[6])
                $obra->setCantidadAdicional($rowObra->columns[6]);
            else 
                $obra->setCantidadAdicional(0);

            $obra->setTipoMedidaAdicional($rowObra->columns[7]);

            $concepto = $this->em->getRepository(ConceptoObra::ORM_ENTITY)->findOneBy(
                                                                        array('obra' => $obraFija->getId(), 'secuencia' => $secuencia)
                                                                    );
            
            $obra->setConcepto($concepto->getConcepto());

            return $obra;
 
    }

    private function calcularTotal($detalle, $impuesto){
        $detalle->setImpuesto($impuesto);
        $this->calcularRecargo($detalle);
        $detalle->setTotal($detalle->getImpuesto() + $detalle->getRecargo());       
    }

}