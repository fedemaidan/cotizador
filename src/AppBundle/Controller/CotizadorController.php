<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use SensioLabs\Security\Exception\RuntimeException;
class CotizadorController extends Controller
{
    /**
     * @Template
     * @Route("/", name="inicio", options={"expose"=true})
     */
    public function inicioAction(Request $request)
    {
        $datos = $request->get("datosGenerales",null);
        $datos = json_decode($datos);
        $return = $this->returnInicial();

        if ($datos) $return["datos"] = $datos;
        
        return $return;
    }

    /**
     * @Route("/datos", name="datos")
     */
    public function datosAction(Request $request)
    {
        $datos = $request->get("datos", array());
        $array = $this->container->get('primary_service')->datos($datos);
        return new Response(json_encode($array));
    }

    /**
     * @Route("/validarDatosGenerales", name="validarDatosGenerales", options={"expose"=true})
     */
    public function validarDatosGeneralesAction(Request $request)
    {
        try {
            $datosGenerales = $request->get("datosGenerales",null);
            $datosGenerales = json_decode($datosGenerales);
            $array = $this->container->get('primary_service')->validarPresupuesto($datosGenerales);
            return new Response(json_encode(array("result" => true)));
        }
        catch(RuntimeException $e) {
            $this->get("session")->getFlashBag()->set("error",$e->getMessage());   
            return new Response(json_encode(array("result" => false)));
        }
    }

    /**
     * @Route("/cotizar", name="cotizar", options={"expose"=true})
     */
    public function cotizarAction(Request $request)
    {

        try{
            $datos = $request->get('datos');
            $datos = json_decode($datos);
            $datosGenerales = $request->get('datosGenerales');
            
            $datosGenerales = json_decode($datosGenerales);
            $datosGenerales->captcha = strtoupper($datosGenerales->captcha);

            if(!isset($_SESSION['_captcha']) || !isset($datosGenerales->captcha)){
                $datosGenerales = json_encode($datosGenerales);
                throw new RuntimeException('Completar catpcha');
            }
            if ($datosGenerales->captcha != $_SESSION['_captcha'] ) {
                $datosGenerales = json_encode($datosGenerales);
                throw new RuntimeException('Completar catpcha');
            }
            
            $array = $this->container->get('primary_service')->cotizar($datosGenerales, $datos);
            $presupuesto = $array["presupuesto"];
            
            $return["presupuestoId"] = $presupuesto->getId();
            $return["datos"] = $array['datos'];
            $return["total"] = $array['total'];

            $response = new Response(json_encode($return));
            
         
        } 
        catch(RuntimeException $e) {
            $this->get("session")->getFlashBag()->set("error",$e->getMessage());   
            return $this->redirectToRoute('inicio' , array("datosGenerales" => $datosGenerales));
        }

        return $response;
  
    }


    /**
     * @Route("/generarPDF", name="generarPDF")
     */
    public function generarPDFAction(Request $request)
    {

        try{
            $datos = $request->get('datos');
            $datos = json_decode($datos);
            $datosGenerales = $request->get('datosGenerales');
            $presupuestoId = $request->get('presupuestoId');
            $total = $request->get('total');
            $presupuesto = $this->container->get('primary_service')->damePresupuestoById($presupuestoId);

            $datosGenerales = json_decode($datosGenerales);
            $datosGenerales->captcha = strtoupper($datosGenerales->captcha);

            if(!isset($_SESSION['_captcha']) || !isset($datosGenerales->captcha)){
                $datosGenerales = json_encode($datosGenerales);
                throw new RuntimeException('Completar catpcha');
            }
            if ($datosGenerales->captcha != $_SESSION['_captcha'] ) {
                $datosGenerales = json_encode($datosGenerales);
                throw new RuntimeException('Completar catpcha');
            }
            
            $arrayTabla = $this->container->get('primary_service')->arrayDePresupuestoParaPDF($datos) ;

            $html = $this->renderView('AppBundle:Cotizador:pdf.html.twig', array('array' => $arrayTabla, "final" => $total, 'presupuesto' => $presupuesto));

            $dompdf = $this->get('slik_dompdf');
            $dompdf->getpdf($html);
            $dompdf->stream("presupuesto.pdf");
            $pdfoutput = $dompdf->output();
            
            $response = new Response($pdfoutput);
            $response->headers->set('Content-Type', 'application/pdf');
            $response->headers->set('charset', 'utf-8');
            $response->headers->set('Content-Disposition', 'atatchment; filename=lala.pdf');
            
        } 
        catch(RuntimeException $e) {
            $this->get("session")->getFlashBag()->set("error",$e->getMessage());   
            return $this->redirectToRoute('inicio' , array("datosGenerales" => $datosGenerales));
        }

        return $response;
  
    }

    /**
     * @Route("/generarBoleta", name="generarBoleta", options={"expose"=true})
     */
    public function generarBoletaAction(Request $request)
    {

        try{
            $id = $request->get('presupuestoId');

            $array = $this->container->get('bui_service')->generarBoletaUnicaInteligente($id);
            $response = new Response();
         
        } 
        catch(RuntimeException $e) {
            $this->get("session")->getFlashBag()->set("error",$e->getMessage());   
            return $this->redirectToRoute('inicio');
        }

        return $response;
  
    }


    /**
     * @Route("/getCategoriasJSON", name="getCategoriasJSON", options={"expose"=true})
     */
    public function categoriasAction(Request $request)
    {
        $tipo = $request->get('tipo',null);
        $array = $this->container->get('primary_service')->dameCategorias($tipo);
        return new Response(json_encode($array));
  
    }

    /**
     * @Route("/getObrasJSON", name="getObrasJSON", options={"expose"=true})
     */
    public function obrasAction(Request $request)
    {
        $categoria = $request->get("categoria", null);
        $array = $this->container->get('primary_service')->dameObras($categoria);
        return new Response(json_encode($array));
  
    }
    
    /**
     * @Route("/getUnidad", name="unidad", options={"expose"=true})
     */
    public function unidadAction(Request $request)
    {
        $obra = $request->get("obra", null);
        $categoria = $request->get("categoria", null);

        $obraObj = $this->container->get('primary_service')->getObra($obra);

        $result = array("categoria" => $categoria, "obra" => $obra, "um" => $obraObj->getTipoMedidaPrincipal());
        
        if ($obraObj->getTipoMedidaAdicional()) {
            $result["uma"] = $obraObj->getTipoMedidaAdicional();
        }
        
        return new Response(json_encode($result));
    }

    /**
     * @Route("/validarCaptcha", name="validarCaptcha", options={"expose"=true})
     */
    public function validarCaptchaAction(Request $request)
    {
        $result["result"] = true;
        $captcha = strtoupper($request->get('captcha',null));
        
        if(!isset($_SESSION['_captcha']) || !isset($captcha)) {
            $result["result"] = false;
        }
        if ($captcha != $_SESSION['_captcha'] ) {
            $result["result"] = false;
        }

        return new Response(json_encode($result));
    }


    /**
     * @Route("/secure_code", name="secure_code", options={"expose"=true})
     */

     public function secureCodeAction(){
        $text_list = range("A", "Z");
        shuffle( $text_list );
        $key = "";
        for( $i=0; $i<=5; $i++ ){
            $key .= $text_list[$i];
        }

        $image = imagecreate(515,34);
        $background = imagecolorallocate($image, 238, 238, 238);
        $textcolor = imagecolorallocate($image, rand(100, 199), rand(100, 199), rand(100, 199));
        $randColor = imagecolorallocate($image, rand(200, 250), rand(200, 250), rand(200, 250));
        $white = imagecolorallocate($image, 255, 255, 255);
        $style = array($randColor, $randColor, $white, $white, $randColor, $randColor);
        $style2 = array($randColor, $textcolor, $randColor);

        imagesetstyle($image, $style);
        for($i = 0; $i <= 34; $i++){
            imageline($image, 515, $i, 0, $i, IMG_COLOR_STYLED);
        }

        imagesetstyle($image, $style2);
        for($i = 0; $i <= 34; $i++){
            imageline($image, 280, $i * 6, 220, $i * 6, IMG_COLOR_STYLED);
        }

        imagestring($image, 5, 225, 10, $key, $textcolor);
        header('Content-type: image/png');
        imagepng($image);
        imagedestroy($image);
        $_SESSION['_captcha'] = $key;
        exit();
    }

    private function returnInicial() {
        $urlDatos = $this->generateUrl("datos");
        $urlConfirmar = $this->generateUrl("generarPDF");
        $tipos = $this->container->get('primary_service')->dameTiposDePresupuesto();
        return array("urlDatos" => $urlDatos, "urlConfirmar" => $urlConfirmar, "tipos" => $tipos);
    }


}
