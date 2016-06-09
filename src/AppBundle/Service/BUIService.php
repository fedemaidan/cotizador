<?php

namespace AppBundle\Service;


use Doctrine\ORM\EntityManager;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\DependencyInjection\Container;
use AppBundle\Entity\Presupuesto;
use AppBundle\Entity\Obra;
use AppBundle\Entity\Rango;
use AppBundle\Entity\Categoria;
use AppBundle\Entity\Concepto;
use AppBundle\Entity\DetallePresupuesto;
use SensioLabs\Security\Exception\RuntimeException;
use GuzzleHttp\Client;

class BUIService {

	private $container;
    
    /**
    *
    * @var EntityManager
    */
    private $em;

    private $url;

    


    public function __construct( Container $container, EntityManager $entityManager )
    {
        $this->container = $container;
        $this->em = $entityManager;
        $this->url = $this->container->getParameter('bui_api');


    }

    public function generarBoletaUnicaInteligente($presupuestoId) {

        $curl = curl_init();
        $presupuesto = $this->container->get('primary_service')->damePresupuestoById($presupuestoId);
        $array = $this->generarArray($presupuesto);
        $json = json_encode($array);
        $json = str_replace("\u00ed\u00ad", "í", $json) ;
        echo $json;
        $url = $this->url."Generar";


        curl_setopt_array($curl, array(
          CURLOPT_PORT => "6748",
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $json,
          CURLOPT_HTTPHEADER => array(
            "authorization: Basic cm1vbmljYXQ6MjAxNjA1MjMxMzQwNzExOA==",
            "cache-control: no-cache",
            "content-type: application/json",
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          echo $response;
        }
        return $response; 
    }

    public function actualizarIdsConceptos() {
        
        $var = $this->ejecutarLlamadaApi("getConceptos", null, false);
        $var = json_decode($var->getBody());
        
        foreach ($var as $key => $value) {
            $value->Codigo;
            $conceptos = $this->em->getRepository(Concepto::ORM_ENTITY)->findByCodigo($value->Codigo);
            
            foreach ($conceptos as $key2 => $con) {
                if (isset($value->Detalles[0])){
                    $con->setItemIdBUI($value->Detalles[0]->ItemID);
                    $con->setIdBUI($value->Detalles[0]->ID);
                }
            }
            
        }

        $this->em->flush();
        
        return true;
    }



    private function ejecutarLlamadaApi($metodo, $array = null, $post = false) {
        
        $url = $this->url.$metodo;

        $user = $this->container->getParameter('user_bui');
        $password = $this->container->getParameter('password_bui');
        
        $client = new Client(['base_uri' => $this->url ]);

        try {
            if ($post) {
                $res =  $client->post(
                    $url,
                    [
                    
                    'body' => $array,
                    'auth' => [$user, $password]
                ]);
            }
            else {
                $res =  $client->get(
                    $url,
                    [
                    'auth' => [$user, $password]
                    
                ]);    
            }
            
        }
        catch(\GuzzleHttp\Ring\Exception\ConnectException $e) {
            throw new RuntimeException("Error de conexion, volvera a intentar en un rato", 1);
        }
        catch(\GuzzleHttp\Exception\ServerException $e) {
            var_dump($e->getMessage());die;
            throw new RuntimeException("Error en el servidor, volvera a intentar en un rato", 1);
        }
        catch(\GuzzleHttp\Exception\TransferException $e) {
            var_dump($e->getMessage());die;
            throw new RuntimeException("Error en el general de transferencia de datos con el servidor, volvera a intentar en un rato", 1);
        }

        return $res;
    }


    public function generarArray($presupuesto) {

        $result = array();
        $cuitJson = $this->jsonCuit();
        
    	$detalles = $this->container->get('primary_service')->dameDetallesDelPresupuestos($presupuesto);

        $conceptos = array();

    	$contribuyente["TipoPersona"] = "Fisica"; //seleccion propia
    	$contribuyente["TipoDocumento"] = $cuitJson;
    	$contribuyente["Documento"] = str_replace("-", "", $presupuesto->getCuitDirector()); //seleccion propia
    	$contribuyente["Nombre"] = $presupuesto->getNombreDirector(); //seleccion propia
    	$contribuyente["Direccion"] = $presupuesto->getDomicilioDirector(); //seleccion propia
    	$contribuyente["Piso"] = ""; //seleccion propia
    	$contribuyente["Departamento"] = ""; //seleccion propia
    	$contribuyente["Localidad"] = $presupuesto->getLocalidadDirector();
    	$contribuyente["CodigoPostal"] = $presupuesto->getCodigoPostalDirector(); //TODO
    	// $contribuyente["Fecha"] = $presupuesto->getFecha();
    	$contribuyente["Email"] = $presupuesto->getMail();

    	foreach ($detalles as $det) {
            $conceptoObj = $det->getConcepto();
            $concepto["ID"] = $conceptoObj->getItemIdBUI();
            $concepto["ItemID"] = $conceptoObj->getItemIdBUI(); 
    		$concepto["Codigo"] = $conceptoObj->getCodigo(); 
    		$concepto["Descripcion"] = $conceptoObj->getDescripcion(); 
    		$concepto["Cantidad"] = $det->getCantidadPrincipal();
    		$concepto["Importe"] = $det->getImpuesto();
            $concepto["Total"] = $det->getImpuesto();
    		$concepto["Vigencia"] = 30;
    	    $concepto["Detalles"] = 
            [
                "ID" => $conceptoObj->getIdBUI(),
                "ItemID" => $conceptoObj->getItemIdBUI(),
                "Nombre" => "Superficie",
                "Descripcion" => null,
                "Valor"=> 1
            ];
            $conceptos[] = $concepto;
    	}

    	$array["DependenciaID"] = "00000000-0000-0000-0000-000000000000";
		$array["Contribuyente"] = $contribuyente;
    	$array["VencimientoDependencia"] = "";
    	$array["Conceptos"] = $conceptos;
    	$array["IDTramiteDependencia"] = null;
    	$array["NroExpediente"] = null;
    	$array["Observacion"] = null;
        
        
    	return $array;
 
    }

    private function jsonCuit() {
        $res = $this->ejecutarLlamadaApi("GetTiposDeDocumento");
        $res = json_decode($res->getBody());

       foreach ($res as $doc) {
            if ($doc->Codigo == "CUIT"){
                return array("ID" => $doc->ID, "Codigo" => "CUIT", "Descripcion" => $doc->Descripcion);
            }
        }
    }
}