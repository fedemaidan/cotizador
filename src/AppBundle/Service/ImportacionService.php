<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\DependencyInjection\Container;
use AppBundle\Entity\Presupuesto;
use AppBundle\Entity\Obra;
use AppBundle\Entity\Rango;
use AppBundle\Entity\ConceptoObra;
use AppBundle\Entity\Categoria;
use AppBundle\Entity\Concepto;
use AppBundle\Entity\DetallePresupuesto;
use Symfony\Component\Finder\Finder;
use AppBundle\Classes\PHPExcel\IOFactory;

class ImportacionService {

    const rowInicial = 2; 
	
	const categoria = 0;
	const puntoDeLaLey = 1;	
	const obra = 2;
	const unidadDeclarada = 3;
	const unidadDeclaradaAdicional = 4;
	const metodoDeCalculo = 5;
	const rango = 6;
	const tasa = 7;
	const tasaPorUnidad = 8;
	const impuestoMinimo = 9;
	const articulo18 = 10;

	private $container;
    
    /**
    *
    * @var EntityManager
    */
    private $em;
    private $arrayAux;
    private $contador;

    public function __construct( Container $container, EntityManager $entityManager )
    {
        $this->container = $container;
        $this->em = $entityManager;
        $this->arrayAux = array();
        $this->contador = 1;
    }

    /* 
        Carga inicial de las obras y categorias
    */


    public function cargaInicialDeObrasCSV($root = null)
    {
        return $this->accionMasivaCsv("", 'procesarObra',$root);
    }

    public function cargaInicialDeCategoriasCSV($root = null)
    {
        return $this->accionMasivaCsv("", 'porcesarCategoria',$root);
    }

    /* 
        Carga inicial de las obras y categorias
    */

    public function cargaInicialDeRangosCSV($root = null)
    {
        return $this->accionMasivaCsv("", 'procesarRango',$root);
    }

    /* 
        Carga inicial de conceptos
    */

    public function cargaInicialDeConceptosCSV($root = null)
    {
        return $this->accionMasivaCsv("", 'procesarConcepto',$root);
    }

    /* 
        Carga inicial de conceptos
    */

    public function cargaInicialDeRelacionConceptosObrasCSV($root = null)
    {
        return $this->accionMasivaCsv("", 'procesarRelacionConceptoObra',$root);
    }

    /*
        cambios masivos
    */

    public function accionMasivaCsv($carpeta, $funcion, $root = null, $moverArchivo = false)
    {
        $arrayReturn = array();
        $files = $this->archivosSegunTipo($carpeta, $root);

        foreach ($files as $file) {

            $archivo = $this->dameArchivo($file->getRealpath());
            $sheet = $archivo->getSheet(0); 
            $highestRow = $sheet->getHighestRow(); 
            $highestColumn = $sheet->getHighestColumn();

            for ($row = self::rowInicial ; $row <= $highestRow; $row++){ 
                
                //recupero fila
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,NULL,TRUE,FALSE);

                //ejecuto la accion
                $arrayReturn[] = $this->$funcion($rowData);
                
                if (($row % 100) == 0) {
                    //liberar objetos del persist
                    $this->em->flush();
                }
            }
            
            $this->em->flush();
        }
        
        return $arrayReturn;
    }

    /*
       
        SECCION DE FUNCIONES PRIVADAS DEL IMPORTACION SERVICE

    */


    private function dameArchivo($inputFileName) {
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objReader->setDelimiter(";");
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
               die('Error cargando archivo "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }

        return $objPHPExcel;
    }

    private function archivosSegunTipo($tipo, $root = null) {
    	
        $finder = new Finder();

        if ($root != null)
            return $finder->files()->in($root);
        else
            return $finder->files()->in('doc/'.$tipo);
    }

    private function procesarObra($rowData){


    	$datos = $rowData[0];

        $categoria = $this->em->getRepository(Categoria::ORM_ENTITY)->findOneByDescripcion($datos[self::categoria]);

        if (!$categoria) {
            $categoria = new Categoria();
            $categoria->setDescripcion($datos[self::categoria]);
            $this->em->persist($categoria);
            $this->em->flush();
        }
        
        $obra = new Obra();
        $obra->setDescripcion($datos[self::obra]);
        $obra->setCategoria($categoria);
        $obra->setTipoCalculo($datos[self::metodoDeCalculo]);
        $obra->setRangoCodigo($datos[self::rango]);
        $obra->setTasa(str_replace(',', '.',$datos[self::tasaPorUnidad]));
        $obra->setMinimo(str_replace(',', '.', $datos[self::impuestoMinimo]));
        $obra->setArticuloLey($datos[self::puntoDeLaLey]);
        $obra->setArticulo18($datos[self::articulo18]);
        $obra->setTipoMedidaPrincipal($datos[self::unidadDeclarada]);
        $obra->setTIpoMedidaAdicional($datos[self::unidadDeclaradaAdicional]);
        
        $this->em->persist($obra);
        return $obra->getDescripcion();

    }

    private function procesarRango($rowData) {

        $datos = $rowData[0];
        
        $hasta = -1;
        $posRango1 = 2;
        $cantidadRangosPosibles = 6;
        for ($posRangoX = $posRango1; $posRangoX < ($posRango1 + $cantidadRangosPosibles) ; $posRangoX++) {
            $posTasaX = $posRangoX + $cantidadRangosPosibles;


            $desde = $hasta + 1; // hasta anterior
            $hasta = $datos[$posRangoX];
            $tasa = $datos[$posTasaX];

            if ($hasta != null)
            {
                $rango = new Rango();
                $rango->setDesde($desde);
                $rango->setHasta($hasta);
                $rango->setCodigo($datos[0]);
                $rango->setTasa(str_replace(',', '.', $tasa));
                $rango->setTipo($datos[1]);

                $this->em->persist($rango);
            }
        }

        $this->em->flush();

        return $datos[0];
    }


    private function porcesarCategoria($rowData) {
        $datos = $rowData[0];
        $categoria = new Categoria();
        $categoria->setDescripcion($datos[0]);
        $categoria->setTipoObra($datos[1]);
        $categoria->setTipoPlanUnico($datos[2]);
        $categoria->setTipoInstalaciones($datos[3]);
        $categoria->setTipoTransferencia($datos[4]);
        $categoria->setOrden($datos[5]);
        $this->em->persist($categoria);
    }

    private function procesarConcepto($rowData) {
        $datos = $rowData[0];
        $this->contador++;       

        if (empty($datos[1]))
            return;
        

        $concepto = new Concepto();
        $concepto->setId($this->contador);
        $concepto->setCodigo($datos[4]);
        $concepto->setDescripcion($datos[2]);
        $concepto->setSecuencia($datos[1]);
        $this->em->persist($concepto);
    }

    private function procesarRelacionConceptoObra($rowData) {
        $datos = $rowData[0];
        $fila = $datos[26];
        $cantidad = $datos[28];

        $obra = $this->em->getRepository(Obra::ORM_ENTITY)->findOneByDescripcion($datos[11]);
        
        for ($i=1; $i <= $cantidad; $i++) { 
            $concepto = $this->em->getRepository(Concepto::ORM_ENTITY)->findOneById($fila);
            $concepto->setObra($obra);
            $concepto->setSecuencia($i);
            $conceptoObra = new ConceptoObra();
            $conceptoObra->setObra($obra);
            $conceptoObra->setConcepto($concepto);
            $conceptoObra->setSecuencia($i);
            $this->em->persist($conceptoObra);
            $fila++;
        }

    }

}