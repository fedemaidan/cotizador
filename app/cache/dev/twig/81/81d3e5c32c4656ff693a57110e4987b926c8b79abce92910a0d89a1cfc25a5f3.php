<?php

/* AppBundle:Cotizador:inicio.html.twig */
class __TwigTemplate_f446360024c7acbae6a6e2de8437f3dcf5c55ec2b4ac12ce45b5c147373a1a66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Cotizador:inicio.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
            'controllerCss' => array($this, 'block_controllerCss'),
            'controllerJs' => array($this, 'block_controllerJs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d42e6782699dabf4dcbd5de0386a53a4ed3fad4004e1e8762bb499d432b3411c = $this->env->getExtension("native_profiler");
        $__internal_d42e6782699dabf4dcbd5de0386a53a4ed3fad4004e1e8762bb499d432b3411c->enter($__internal_d42e6782699dabf4dcbd5de0386a53a4ed3fad4004e1e8762bb499d432b3411c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Cotizador:inicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d42e6782699dabf4dcbd5de0386a53a4ed3fad4004e1e8762bb499d432b3411c->leave($__internal_d42e6782699dabf4dcbd5de0386a53a4ed3fad4004e1e8762bb499d432b3411c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_869e85ad291165b2bee39c2a249369aa51c79116d8ab3422409e4033d44a7111 = $this->env->getExtension("native_profiler");
        $__internal_869e85ad291165b2bee39c2a249369aa51c79116d8ab3422409e4033d44a7111->enter($__internal_869e85ad291165b2bee39c2a249369aa51c79116d8ab3422409e4033d44a7111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Cotizador:inicio";
        
        $__internal_869e85ad291165b2bee39c2a249369aa51c79116d8ab3422409e4033d44a7111->leave($__internal_869e85ad291165b2bee39c2a249369aa51c79116d8ab3422409e4033d44a7111_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_4bcef6d6b0b04a61f25669eb42e285550e038b5f3b90c68b962752c94538acbe = $this->env->getExtension("native_profiler");
        $__internal_4bcef6d6b0b04a61f25669eb42e285550e038b5f3b90c68b962752c94538acbe->enter($__internal_4bcef6d6b0b04a61f25669eb42e285550e038b5f3b90c68b962752c94538acbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo " Carga de presupuesto";
        
        $__internal_4bcef6d6b0b04a61f25669eb42e285550e038b5f3b90c68b962752c94538acbe->leave($__internal_4bcef6d6b0b04a61f25669eb42e285550e038b5f3b90c68b962752c94538acbe_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e666272eae3c283b73a2e87857873b031eaa883f7f4f27e941b73c4cd6b4f50 = $this->env->getExtension("native_profiler");
        $__internal_9e666272eae3c283b73a2e87857873b031eaa883f7f4f27e941b73c4cd6b4f50->enter($__internal_9e666272eae3c283b73a2e87857873b031eaa883f7f4f27e941b73c4cd6b4f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"page-header col-md-12\" >
\t\t<h1>Datos director</h1>
\t\t<p> Debe completar todos los campos</p>
\t\t<div class=\"form-group col-md-4\">
\t\t\t<label for=\"nombreDirector\"> Nombre </label>
\t\t\t<input \tclass=\"form-control\"  id=\"nombreDirector\" type=\"text\"  ";
        // line 12
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "nombreDirector", array()), "html", null, true);
            echo "\" ";
        }
        echo ">
\t\t\t</input>
\t\t</div>
\t\t<div class=\"form-group col-md-4\">
\t\t\t<label for=\"cuitDirector\"> Cuit </label>
\t\t\t<input \tclass=\"form-control\"  id=\"cuitDirector\" type=\"text\"  ";
        // line 17
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "cuitDirector", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t\t</div>
\t\t<div class=\"form-group col-md-4\">
\t\t\t<label for=\"matricula\"> Matricula </label>
\t\t\t<input \tclass=\"form-control\"  id=\"matricula\" type=\"text\"  
\t\t\t";
        // line 22
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "matricula", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t\t</div>
\t\t<div class=\"form-group col-md-4\">
\t\t\t<label for=\"telefono\"> Teléfono </label>
\t\t\t<input \tclass=\"form-control\"  id=\"telefono\" type=\"text\"  
\t\t\t";
        // line 27
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "telefono", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t\t</div>
\t\t<div class=\"form-group col-md-4\">
\t\t\t<label for=\"mail\"> Mail </label>
\t\t\t<input \tclass=\"form-control\"  id=\"mail\" type=\"text\"  
\t\t\t";
        // line 32
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "mail", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t\t</div>
\t\t<div class=\"form-group col-md-4\">
\t\t\t<label for=\"consejo\"> Consejo </label>
\t\t\t<input \tclass=\"form-control\"  id=\"consejo\" type=\"text\"
\t\t\t";
        // line 37
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "consejo", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t\t</div>
\t\t<div class=\"form-group col-md-4\">
\t\t\t<label for=\"domicilioDirector\"> Domicilio </label>
\t\t\t<input \tclass=\"form-control\"  id=\"domicilioDirector\" type=\"text\"
\t\t\t";
        // line 42
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "domicilioDirector", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t\t</div>
\t\t<div class=\"form-group col-md-4\">
\t\t\t<label for=\"cpDirector\"> Código Postal </label>
\t\t\t<input \tclass=\"form-control\"  id=\"cpDirector\" type=\"text\"
\t\t\t";
        // line 47
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "cpDirector", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t\t</div>
\t\t<div class=\"form-group col-md-4\">
\t\t\t<label for=\"localidad\"> Localidad </label>
\t\t\t<input \tclass=\"form-control\"  id=\"localidad\" type=\"text\"
\t\t\t";
        // line 52
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "localidad", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t\t</div>



\t<h1>Datos propietario</h1>
\t<p> Debe completar todos los campos</p>
\t<div class=\"form-group col-md-4\">
\t\t<label for=\"nombrePropietario\"> Nombre </label>
\t\t<input \tclass=\"form-control\"  id=\"nombrePropietario\" type=\"text\" 
\t\t";
        // line 62
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "nombrePropietario", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t</div>
\t<div class=\"form-group col-md-4\">
\t\t<label for=\"cuitPropietario\"> Cuit </label>
\t\t<input \tclass=\"form-control\"  id=\"cuitPropietario\" type=\"text\"  
\t\t";
        // line 67
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "cuitPropietario", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t</div>
\t<div class=\"form-group col-md-4\">
\t\t<label for=\"domicilioPropietario\"> Domicilio </label>
\t\t<input \tclass=\"form-control\"  id=\"domicilioPropietario\" type=\"text\" 
\t\t";
        // line 72
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "domicilioPropietario", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t</div>

\t<h1>Datos obra</h1>
\t<p> Debe completar todos los campos</p>
\t<div class=\"form-group col-md-4\">
\t\t<label for=\"ubicacion\"> Ubicación </label>
\t\t<input \tclass=\"form-control\"  id=\"ubicacion\" type=\"text\"  
\t\t";
        // line 80
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "ubicacion", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t</div>
\t<div class=\"form-group col-md-2\">
\t\t<label for=\"seccion\"> Sección </label>
\t\t<input \tclass=\"form-control\"  id=\"seccion\" type=\"text\"  
\t\t";
        // line 85
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "seccion", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t</div>
\t<div class=\"form-group col-md-2\">
\t\t<label for=\"manzana\"> Manzana </label>
\t\t<input \tclass=\"form-control\"  id=\"manzana\" type=\"text\"  
\t\t";
        // line 90
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "manzana", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t</div>
\t<div class=\"form-group col-md-2\">
\t\t<label for=\"parcela\"> Parcela </label>
\t\t<input \tclass=\"form-control\"  id=\"parcela\" type=\"text\" 
\t\t";
        // line 95
        if (array_key_exists("datos", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "parcela", array()), "html", null, true);
            echo "\" ";
        }
        echo "></input>
\t</div>
\t<div class=\"form-group col-md-2\">
\t\t<label for=\"tipo\"> Tipo de presupuesto </label>
\t\t<select class=\"form-control\"  id=\"tipo\" type=\"text\">
\t\t<option value=\"\">Seleccionar ..</option>
\t\t";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipos"]) ? $context["tipos"] : $this->getContext($context, "tipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
            // line 102
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "id", array()), "html", null, true);
            echo "\"
\t\t\t";
            // line 103
            if (array_key_exists("datos", $context)) {
                echo " 
\t\t\t";
                // line 104
                if (($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "tipo", array()) == $this->getAttribute($context["tipo"], "id", array()))) {
                    echo " selected";
                }
                echo "\t
\t\t\t";
            }
            // line 105
            echo "\t
\t\t\t>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "nombre", array()), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t</select>
\t</div>

\t<div class=\"form-group text-right\">
\t\t<button class=\"btn btn-success\" onclick=\"confirmarDatosDelPresupuesto()\" id =\"confirmar\" data-url=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["urlConfirmar"]) ? $context["urlConfirmar"] : $this->getContext($context, "urlConfirmar")), "html", null, true);
        echo "\"> Siguiente</button>
\t</div>
</div>


<div class=\"col-md-12 itemsContext\" hidden>
\t<div class=\"nuevoItem col-md-12\">
\t<h1>Items</h1>
\t<div class=\"form-group col-md-4\">
\t\t<select \tclass=\"form-control\"  id=\"categoria\" type=\"text\"  data-parent=\"\">
\t\t</select>
\t\t</div>
\t<div class=\"form-group col-md-4\">
\t\t<select \tclass=\"form-control\"  id=\"obra\"  type=\"text\"  placeholder=\"Obra...\" ></select>\t
\t\t</div>
\t<div class=\"form-group col-md-4\">
\t\t<button class=\"btn btn-info \" style=\"width:100%;\" onclick=\"add()\"> Agregar</button>
\t\t</div>
\t</div>

\t<div id=\"tablecontent\" data-url=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["urlDatos"]) ? $context["urlDatos"] : $this->getContext($context, "urlDatos")), "html", null, true);
        echo "\"></div>

\t<div class=\"form-group text-right\">
\t\t\t<button class=\"btn btn-info\" onclick=\"volverPrespuesto()\" id =\"confirmar\" data-url=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["urlConfirmar"]) ? $context["urlConfirmar"] : $this->getContext($context, "urlConfirmar")), "html", null, true);
        echo "\"> Atrás</button>
\t\t\t<button class=\"btn btn-success\" onclick=\"confirmar()\" id =\"confirmar\" data-url=\"";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["urlConfirmar"]) ? $context["urlConfirmar"] : $this->getContext($context, "urlConfirmar")), "html", null, true);
        echo "\"> Confirmar</button>
\t</div>

</div>

<div class=\"form-group text-center col-md-12 generadorPDF\" hidden>
\t\t<h1>Validar captcha</h1>
\t\t<div class=\"form-group text-center\" style=\"margin-top:20px;\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-addon secure-code-refresh\" title=\"Click para recargar el codigo\"><span class=\"glyphicon glyphicon-refresh\"></span></span>
\t\t\t\t<img src=\"";
        // line 146
        echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("secure_code") . "?") . twig_random($this->env, 1000)), "html", null, true);
        echo "\" class=\" secure-code-src col-md-12\" alt=\"Codigo de seguridad\" title=\"Codigo de seguridad\" class=\"secure-code-src\"/>
\t\t\t\t<p id=\"mensajeCaptcha\"></p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group text-center\">
\t\t\t<input type=\"text\" id=\"captcha\" size=\"10\" class=\"form-control\" placeholder=\"Ingrese el codigo de la imagen\" required name=\"_captcha\" style=\"margin-top:10px\" autocomplete=\"off\">
\t\t</div>

\t\t<div class=\"form-group text-right\">
\t\t\t<button class=\"btn btn-info\" onclick=\"volverItems()\" id=\"\" > Atrás</button>
\t\t\t<button class=\"btn btn-success\" onclick=\"generarPDF()\" id =\"generarPDF\" data-url=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["urlConfirmar"]) ? $context["urlConfirmar"] : $this->getContext($context, "urlConfirmar")), "html", null, true);
        echo "\"> 
\t\t\tGenerar PDF</button>
\t\t\t<button class=\"btn btn-success\" id=\"btnBoleta\" onclick=\"generarBoleta()\" disabled> Generar boleta </button>
\t</div>

\t</div>
";
        
        $__internal_9e666272eae3c283b73a2e87857873b031eaa883f7f4f27e941b73c4cd6b4f50->leave($__internal_9e666272eae3c283b73a2e87857873b031eaa883f7f4f27e941b73c4cd6b4f50_prof);

    }

    // line 165
    public function block_controllerCss($context, array $blocks = array())
    {
        $__internal_fa660a44ced59b278cd57a16e57e81de1e6829db63d1a4164861d39d542e941c = $this->env->getExtension("native_profiler");
        $__internal_fa660a44ced59b278cd57a16e57e81de1e6829db63d1a4164861d39d542e941c->enter($__internal_fa660a44ced59b278cd57a16e57e81de1e6829db63d1a4164861d39d542e941c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controllerCss"));

        // line 166
        echo "\t\t<style>
\t\t\tbody { font-family:'lucida grande', tahoma, verdana, arial, sans-serif; font-size:11px; }
\t\t\th1 { font-size: 15px; }
\t\t\ta { color: #548dc4; text-decoration: none; }
\t\t\ta:hover { text-decoration: underline; }
\t\t\ttable.testgrid { border-collapse: collapse; border: 1px solid #CCB; width: 100%; margin:10px }
\t\t\ttable.testgrid td, table.testgrid th { padding: 5px; border: 1px solid #E0E0E0; }
\t\t\ttable.testgrid th { background: #E5E5E5; text-align: left; }
\t\t\tinput.invalid { background: red; color: #FDFDFD; }
\t\t\ttd { text-align: center; }
\t\t</style>
\t\t
";
        
        $__internal_fa660a44ced59b278cd57a16e57e81de1e6829db63d1a4164861d39d542e941c->leave($__internal_fa660a44ced59b278cd57a16e57e81de1e6829db63d1a4164861d39d542e941c_prof);

    }

    // line 180
    public function block_controllerJs($context, array $blocks = array())
    {
        $__internal_47b251ecbbb168e90643a21cca6b8a97cb2e02f78c7fb2157188ab0813ec4ecb = $this->env->getExtension("native_profiler");
        $__internal_47b251ecbbb168e90643a21cca6b8a97cb2e02f78c7fb2157188ab0813ec4ecb->enter($__internal_47b251ecbbb168e90643a21cca6b8a97cb2e02f78c7fb2157188ab0813ec4ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controllerJs"));

        // line 181
        echo "
\t
        <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        ";
        // line 185
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "073fb1e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_073fb1e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/073fb1e_part_1_editablegrid_1.js");
            // line 186
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "073fb1e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_073fb1e_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/073fb1e_part_1_editablegrid_charts_2.js");
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "073fb1e_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_073fb1e_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/073fb1e_part_1_editablegrid_charts_ofc_3.js");
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "073fb1e_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_073fb1e_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/073fb1e_part_1_editablegrid_editors_4.js");
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "073fb1e_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_073fb1e_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/073fb1e_part_1_editablegrid_renderers_5.js");
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "073fb1e_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_073fb1e_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/073fb1e_part_1_editablegrid_utils_6.js");
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "073fb1e_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_073fb1e_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/073fb1e_part_1_editablegrid_validators_7.js");
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "073fb1e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_073fb1e") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/073fb1e.js");
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 188
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "387daca_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_387daca_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/387daca_bootstrap3-typeahead.min_1.js");
            // line 189
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
 ";
        } else {
            // asset "387daca"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_387daca") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/387daca.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
 ";
        }
        unset($context["asset_url"]);
        // line 191
        echo " 
";
        // line 192
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3de1b25_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3de1b25_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/3de1b25_cotizador_1.js");
            // line 193
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "3de1b25"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3de1b25") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/3de1b25.js");
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 195
        echo "\t\t
\t\t
";
        
        $__internal_47b251ecbbb168e90643a21cca6b8a97cb2e02f78c7fb2157188ab0813ec4ecb->leave($__internal_47b251ecbbb168e90643a21cca6b8a97cb2e02f78c7fb2157188ab0813ec4ecb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Cotizador:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 195,  510 => 193,  506 => 192,  503 => 191,  489 => 189,  484 => 188,  434 => 186,  430 => 185,  426 => 184,  422 => 183,  418 => 181,  412 => 180,  393 => 166,  387 => 165,  373 => 157,  359 => 146,  346 => 136,  342 => 135,  336 => 132,  313 => 112,  307 => 108,  299 => 106,  296 => 105,  289 => 104,  285 => 103,  280 => 102,  276 => 101,  263 => 95,  251 => 90,  239 => 85,  227 => 80,  212 => 72,  200 => 67,  188 => 62,  171 => 52,  159 => 47,  147 => 42,  135 => 37,  123 => 32,  111 => 27,  99 => 22,  87 => 17,  75 => 12,  68 => 7,  62 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AppBundle:Cotizador:inicio{% endblock %}*/
/* */
/* {% block pageTitle %} Carga de presupuesto{% endblock %}*/
/* {% block body %}*/
/* <div class="page-header col-md-12" >*/
/* 		<h1>Datos director</h1>*/
/* 		<p> Debe completar todos los campos</p>*/
/* 		<div class="form-group col-md-4">*/
/* 			<label for="nombreDirector"> Nombre </label>*/
/* 			<input 	class="form-control"  id="nombreDirector" type="text"  {% if datos is defined %} value="{{ datos.nombreDirector }}" {% endif %}>*/
/* 			</input>*/
/* 		</div>*/
/* 		<div class="form-group col-md-4">*/
/* 			<label for="cuitDirector"> Cuit </label>*/
/* 			<input 	class="form-control"  id="cuitDirector" type="text"  {% if datos is defined %} value="{{ datos.cuitDirector}}" {% endif %}></input>*/
/* 		</div>*/
/* 		<div class="form-group col-md-4">*/
/* 			<label for="matricula"> Matricula </label>*/
/* 			<input 	class="form-control"  id="matricula" type="text"  */
/* 			{% if datos is defined%} value="{{ datos.matricula}}" {% endif %}></input>*/
/* 		</div>*/
/* 		<div class="form-group col-md-4">*/
/* 			<label for="telefono"> Teléfono </label>*/
/* 			<input 	class="form-control"  id="telefono" type="text"  */
/* 			{% if datos is defined%} value="{{ datos.telefono}}" {% endif %}></input>*/
/* 		</div>*/
/* 		<div class="form-group col-md-4">*/
/* 			<label for="mail"> Mail </label>*/
/* 			<input 	class="form-control"  id="mail" type="text"  */
/* 			{% if datos is defined%} value="{{ datos.mail}}" {% endif %}></input>*/
/* 		</div>*/
/* 		<div class="form-group col-md-4">*/
/* 			<label for="consejo"> Consejo </label>*/
/* 			<input 	class="form-control"  id="consejo" type="text"*/
/* 			{% if datos is defined%} value="{{ datos.consejo}}" {% endif %}></input>*/
/* 		</div>*/
/* 		<div class="form-group col-md-4">*/
/* 			<label for="domicilioDirector"> Domicilio </label>*/
/* 			<input 	class="form-control"  id="domicilioDirector" type="text"*/
/* 			{% if datos is defined%} value="{{ datos.domicilioDirector}}" {% endif %}></input>*/
/* 		</div>*/
/* 		<div class="form-group col-md-4">*/
/* 			<label for="cpDirector"> Código Postal </label>*/
/* 			<input 	class="form-control"  id="cpDirector" type="text"*/
/* 			{% if datos is defined%} value="{{ datos.cpDirector}}" {% endif %}></input>*/
/* 		</div>*/
/* 		<div class="form-group col-md-4">*/
/* 			<label for="localidad"> Localidad </label>*/
/* 			<input 	class="form-control"  id="localidad" type="text"*/
/* 			{% if datos is defined%} value="{{ datos.localidad}}" {% endif %}></input>*/
/* 		</div>*/
/* */
/* */
/* */
/* 	<h1>Datos propietario</h1>*/
/* 	<p> Debe completar todos los campos</p>*/
/* 	<div class="form-group col-md-4">*/
/* 		<label for="nombrePropietario"> Nombre </label>*/
/* 		<input 	class="form-control"  id="nombrePropietario" type="text" */
/* 		{% if datos is defined%} value="{{ datos.nombrePropietario}}" {% endif %}></input>*/
/* 	</div>*/
/* 	<div class="form-group col-md-4">*/
/* 		<label for="cuitPropietario"> Cuit </label>*/
/* 		<input 	class="form-control"  id="cuitPropietario" type="text"  */
/* 		{% if datos is defined%} value="{{ datos.cuitPropietario}}" {% endif %}></input>*/
/* 	</div>*/
/* 	<div class="form-group col-md-4">*/
/* 		<label for="domicilioPropietario"> Domicilio </label>*/
/* 		<input 	class="form-control"  id="domicilioPropietario" type="text" */
/* 		{% if datos is defined%} value="{{ datos.domicilioPropietario}}" {% endif %}></input>*/
/* 	</div>*/
/* */
/* 	<h1>Datos obra</h1>*/
/* 	<p> Debe completar todos los campos</p>*/
/* 	<div class="form-group col-md-4">*/
/* 		<label for="ubicacion"> Ubicación </label>*/
/* 		<input 	class="form-control"  id="ubicacion" type="text"  */
/* 		{% if datos is defined%} value="{{ datos.ubicacion}}" {% endif %}></input>*/
/* 	</div>*/
/* 	<div class="form-group col-md-2">*/
/* 		<label for="seccion"> Sección </label>*/
/* 		<input 	class="form-control"  id="seccion" type="text"  */
/* 		{% if datos is defined%} value="{{ datos.seccion}}" {% endif %}></input>*/
/* 	</div>*/
/* 	<div class="form-group col-md-2">*/
/* 		<label for="manzana"> Manzana </label>*/
/* 		<input 	class="form-control"  id="manzana" type="text"  */
/* 		{% if datos is defined%} value="{{ datos.manzana}}" {% endif %}></input>*/
/* 	</div>*/
/* 	<div class="form-group col-md-2">*/
/* 		<label for="parcela"> Parcela </label>*/
/* 		<input 	class="form-control"  id="parcela" type="text" */
/* 		{% if datos is defined%} value="{{ datos.parcela}}" {% endif %}></input>*/
/* 	</div>*/
/* 	<div class="form-group col-md-2">*/
/* 		<label for="tipo"> Tipo de presupuesto </label>*/
/* 		<select class="form-control"  id="tipo" type="text">*/
/* 		<option value="">Seleccionar ..</option>*/
/* 		{% for tipo in tipos   %}*/
/* 			<option value="{{ tipo.id }}"*/
/* 			{% if datos is defined%} */
/* 			{% if datos.tipo == tipo.id%} selected{% endif %}	*/
/* 			{% endif %}	*/
/* 			>{{ tipo.nombre }}</option>*/
/* 		{% endfor %}*/
/* 		</select>*/
/* 	</div>*/
/* */
/* 	<div class="form-group text-right">*/
/* 		<button class="btn btn-success" onclick="confirmarDatosDelPresupuesto()" id ="confirmar" data-url="{{ urlConfirmar }}"> Siguiente</button>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* <div class="col-md-12 itemsContext" hidden>*/
/* 	<div class="nuevoItem col-md-12">*/
/* 	<h1>Items</h1>*/
/* 	<div class="form-group col-md-4">*/
/* 		<select 	class="form-control"  id="categoria" type="text"  data-parent="">*/
/* 		</select>*/
/* 		</div>*/
/* 	<div class="form-group col-md-4">*/
/* 		<select 	class="form-control"  id="obra"  type="text"  placeholder="Obra..." ></select>	*/
/* 		</div>*/
/* 	<div class="form-group col-md-4">*/
/* 		<button class="btn btn-info " style="width:100%;" onclick="add()"> Agregar</button>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div id="tablecontent" data-url="{{ urlDatos }}"></div>*/
/* */
/* 	<div class="form-group text-right">*/
/* 			<button class="btn btn-info" onclick="volverPrespuesto()" id ="confirmar" data-url="{{ urlConfirmar }}"> Atrás</button>*/
/* 			<button class="btn btn-success" onclick="confirmar()" id ="confirmar" data-url="{{ urlConfirmar }}"> Confirmar</button>*/
/* 	</div>*/
/* */
/* </div>*/
/* */
/* <div class="form-group text-center col-md-12 generadorPDF" hidden>*/
/* 		<h1>Validar captcha</h1>*/
/* 		<div class="form-group text-center" style="margin-top:20px;">*/
/* 			<div class="input-group">*/
/* 				<span class="input-group-addon secure-code-refresh" title="Click para recargar el codigo"><span class="glyphicon glyphicon-refresh"></span></span>*/
/* 				<img src="{{ path('secure_code') ~ '?' ~ random(1000) }}" class=" secure-code-src col-md-12" alt="Codigo de seguridad" title="Codigo de seguridad" class="secure-code-src"/>*/
/* 				<p id="mensajeCaptcha"></p>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group text-center">*/
/* 			<input type="text" id="captcha" size="10" class="form-control" placeholder="Ingrese el codigo de la imagen" required name="_captcha" style="margin-top:10px" autocomplete="off">*/
/* 		</div>*/
/* */
/* 		<div class="form-group text-right">*/
/* 			<button class="btn btn-info" onclick="volverItems()" id="" > Atrás</button>*/
/* 			<button class="btn btn-success" onclick="generarPDF()" id ="generarPDF" data-url="{{ urlConfirmar }}"> */
/* 			Generar PDF</button>*/
/* 			<button class="btn btn-success" id="btnBoleta" onclick="generarBoleta()" disabled> Generar boleta </button>*/
/* 	</div>*/
/* */
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block controllerCss %}*/
/* 		<style>*/
/* 			body { font-family:'lucida grande', tahoma, verdana, arial, sans-serif; font-size:11px; }*/
/* 			h1 { font-size: 15px; }*/
/* 			a { color: #548dc4; text-decoration: none; }*/
/* 			a:hover { text-decoration: underline; }*/
/* 			table.testgrid { border-collapse: collapse; border: 1px solid #CCB; width: 100%; margin:10px }*/
/* 			table.testgrid td, table.testgrid th { padding: 5px; border: 1px solid #E0E0E0; }*/
/* 			table.testgrid th { background: #E5E5E5; text-align: left; }*/
/* 			input.invalid { background: red; color: #FDFDFD; }*/
/* 			td { text-align: center; }*/
/* 		</style>*/
/* 		*/
/* {% endblock %}*/
/* */
/* {% block controllerJs %}*/
/* */
/* 	*/
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', {"callback": "fos.Router.setData"}) }}"></script>*/
/*         {% javascripts '@AppBundle/Resources/public/js/editablegrid/*' %}*/
/*     		<script src="{{ asset_url }}"></script>*/
/* 		{% endjavascripts %}*/
/* 		{% javascripts '@AppBundle/Resources/public/js/bootstrap3-typeahead.min.js' %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*  {% endjavascripts %}*/
/*  */
/* {% javascripts '@AppBundle/Resources/public/js/cotizador.js' %}*/
/*     		<script src="{{ asset_url }}"></script>*/
/* 		{% endjavascripts %}*/
/* 		*/
/* 		*/
/* {% endblock %}*/
/*         */
