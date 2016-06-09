<?php

/* AppBundle:Cotizador:pdf.html.twig */
class __TwigTemplate_5dcc5fcfc9fbc2b0d2ff6bf3151be2d70e9568be1f89436af8fae16ed557fe45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1a3394da3a050bc25c26e7a8fbb93efedc0844c3b480570b2fc4e8ef0d88e6d = $this->env->getExtension("native_profiler");
        $__internal_f1a3394da3a050bc25c26e7a8fbb93efedc0844c3b480570b2fc4e8ef0d88e6d->enter($__internal_f1a3394da3a050bc25c26e7a8fbb93efedc0844c3b480570b2fc4e8ef0d88e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Cotizador:pdf.html.twig"));

        // line 1
        echo "<html>
<headers>
\t<meta name=\"tipo_contenido\"  content=\"text/html;\" http-equiv=\"content-type\" charset=\"utf-8\">
\t<style>
\t\t\tbody { font-family:'lucida grande', tahoma, verdana, arial, sans-serif; font-size:11px; }
\t\t\th1 { font-size: 15px; }
\t\t\ta { color: #548dc4; text-decoration: none; }
\t\t\ta:hover { text-decoration: underline; }
\t\t\ttable.testgrid { border-collapse: collapse; border: 1px solid #CCB; width: 100%; margin:10px }
\t\t\ttable.testgrid td, table.testgrid th { padding: 5px; border: 1px solid #E0E0E0; }
\t\t\ttable.testgrid th { background: #E5E5E5; text-align: left; }
\t\t\tinput.invalid { background: red; color: #FDFDFD; }
\t\t\ttable.tablaDatos td {
\t\t\t\twidth: 25%
\t\t\t}
\t\t\t.alpie {
\t\t\t\t  position: fixed;
\t\t\t\t  bottom: 0px;
\t\t\t\t  text-align: center;
\t\t\t\t}
\t\t</style>
</headers>
<body >

<h3>Datos director</h3>

<table class=\"tablaDatos\" style=\"width:100%;\" >
\t<tr>
\t\t<td>Nombre: ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presupuesto"]) ? $context["presupuesto"] : $this->getContext($context, "presupuesto")), "nombreDirector", array()), "html", null, true);
        echo "</td>
\t\t<td>Cuit: ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presupuesto"]) ? $context["presupuesto"] : $this->getContext($context, "presupuesto")), "cuitDirector", array()), "html", null, true);
        echo "</td>
\t\t<td>Matricula: ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presupuesto"]) ? $context["presupuesto"] : $this->getContext($context, "presupuesto")), "matricula", array()), "html", null, true);
        echo "</td>
\t\t<td></td>
\t</tr>
\t<tr>
\t\t<td>Mail: ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presupuesto"]) ? $context["presupuesto"] : $this->getContext($context, "presupuesto")), "mail", array()), "html", null, true);
        echo "</td>
\t\t<td>Teléfono: ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presupuesto"]) ? $context["presupuesto"] : $this->getContext($context, "presupuesto")), "telefono", array()), "html", null, true);
        echo "</td>
\t\t<td>Consejo: ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presupuesto"]) ? $context["presupuesto"] : $this->getContext($context, "presupuesto")), "consejo", array()), "html", null, true);
        echo "</td>
\t\t<td></td>
\t\t
\t</tr>
</table>

<h3>Datos propietario</h3>
<table class=\"tablaDatos\" style=\"width:100%;\" >\t
\t<tr>
\t\t<td>Nombre: ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presupuesto"]) ? $context["presupuesto"] : $this->getContext($context, "presupuesto")), "nombrePropietario", array()), "html", null, true);
        echo "</td>
\t\t<td>Cuit: ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presupuesto"]) ? $context["presupuesto"] : $this->getContext($context, "presupuesto")), "cuitPropietario", array()), "html", null, true);
        echo "</td>
\t\t<td>Domicilio: ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presupuesto"]) ? $context["presupuesto"] : $this->getContext($context, "presupuesto")), "domicilio", array()), "html", null, true);
        echo "</td>
\t\t<td></td>
\t</tr>
</table>

<h3>Datos obra</h3>
<table class=\"tablaDatos\" style=\"width:100%;\" >\t
\t<tr>
\t\t<td>Ubicación: ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presupuesto"]) ? $context["presupuesto"] : $this->getContext($context, "presupuesto")), "ubicacion", array()), "html", null, true);
        echo "</td>
\t\t<td>Sección: ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presupuesto"]) ? $context["presupuesto"] : $this->getContext($context, "presupuesto")), "seccion", array()), "html", null, true);
        echo "</td>
\t\t<td>Manzana: ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presupuesto"]) ? $context["presupuesto"] : $this->getContext($context, "presupuesto")), "manzana", array()), "html", null, true);
        echo "</td>
\t\t<td>Parcela: ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presupuesto"]) ? $context["presupuesto"] : $this->getContext($context, "presupuesto")), "parcela", array()), "html", null, true);
        echo "</td>
\t</tr>
</table>

<div id=\"tablecontent\" class=\"container\">

<table class=\"table testgrid\" >
\t<tr >
\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["array"]) ? $context["array"] : $this->getContext($context, "array")), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["columna"]) {
            // line 68
            echo "\t\t\t<th > ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["columna"], "label", array()), "html", null, true);
            echo "</th>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['columna'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t</tr>
\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["array"]) ? $context["array"] : $this->getContext($context, "array")), "data", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fila"]) {
            // line 72
            echo "\t\t<tr>
\t\t\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fila"], "columns", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 74
                echo "\t\t\t<td > ";
                echo twig_escape_filter($this->env, $context["col"], "html", null, true);
                echo "</td>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fila'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t<tr>
\t\t<td colspan=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["array"]) ? $context["array"] : $this->getContext($context, "array")), "metadata", array())), "html", null, true);
        echo "\" style=\"text-align: right\"
\t\t> Total: \$";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["final"]) ? $context["final"] : $this->getContext($context, "final")), "html", null, true);
        echo "</td>
\t</tr>
</table>
<div class=\"alpie\">
---------------<br>
\tFirma
</div>
</div>
</body>
</html>";
        
        $__internal_f1a3394da3a050bc25c26e7a8fbb93efedc0844c3b480570b2fc4e8ef0d88e6d->leave($__internal_f1a3394da3a050bc25c26e7a8fbb93efedc0844c3b480570b2fc4e8ef0d88e6d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Cotizador:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 80,  175 => 79,  172 => 78,  165 => 76,  156 => 74,  152 => 73,  149 => 72,  145 => 71,  142 => 70,  133 => 68,  129 => 67,  118 => 59,  114 => 58,  110 => 57,  106 => 56,  95 => 48,  91 => 47,  87 => 46,  75 => 37,  71 => 36,  67 => 35,  60 => 31,  56 => 30,  52 => 29,  22 => 1,);
    }
}
/* <html>*/
/* <headers>*/
/* 	<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">*/
/* 	<style>*/
/* 			body { font-family:'lucida grande', tahoma, verdana, arial, sans-serif; font-size:11px; }*/
/* 			h1 { font-size: 15px; }*/
/* 			a { color: #548dc4; text-decoration: none; }*/
/* 			a:hover { text-decoration: underline; }*/
/* 			table.testgrid { border-collapse: collapse; border: 1px solid #CCB; width: 100%; margin:10px }*/
/* 			table.testgrid td, table.testgrid th { padding: 5px; border: 1px solid #E0E0E0; }*/
/* 			table.testgrid th { background: #E5E5E5; text-align: left; }*/
/* 			input.invalid { background: red; color: #FDFDFD; }*/
/* 			table.tablaDatos td {*/
/* 				width: 25%*/
/* 			}*/
/* 			.alpie {*/
/* 				  position: fixed;*/
/* 				  bottom: 0px;*/
/* 				  text-align: center;*/
/* 				}*/
/* 		</style>*/
/* </headers>*/
/* <body >*/
/* */
/* <h3>Datos director</h3>*/
/* */
/* <table class="tablaDatos" style="width:100%;" >*/
/* 	<tr>*/
/* 		<td>Nombre: {{ presupuesto.nombreDirector }}</td>*/
/* 		<td>Cuit: {{ presupuesto.cuitDirector }}</td>*/
/* 		<td>Matricula: {{ presupuesto.matricula }}</td>*/
/* 		<td></td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>Mail: {{ presupuesto.mail }}</td>*/
/* 		<td>Teléfono: {{ presupuesto.telefono }}</td>*/
/* 		<td>Consejo: {{ presupuesto.consejo }}</td>*/
/* 		<td></td>*/
/* 		*/
/* 	</tr>*/
/* </table>*/
/* */
/* <h3>Datos propietario</h3>*/
/* <table class="tablaDatos" style="width:100%;" >	*/
/* 	<tr>*/
/* 		<td>Nombre: {{ presupuesto.nombrePropietario }}</td>*/
/* 		<td>Cuit: {{ presupuesto.cuitPropietario }}</td>*/
/* 		<td>Domicilio: {{ presupuesto.domicilio }}</td>*/
/* 		<td></td>*/
/* 	</tr>*/
/* </table>*/
/* */
/* <h3>Datos obra</h3>*/
/* <table class="tablaDatos" style="width:100%;" >	*/
/* 	<tr>*/
/* 		<td>Ubicación: {{ presupuesto.ubicacion }}</td>*/
/* 		<td>Sección: {{ presupuesto.seccion }}</td>*/
/* 		<td>Manzana: {{ presupuesto.manzana }}</td>*/
/* 		<td>Parcela: {{ presupuesto.parcela }}</td>*/
/* 	</tr>*/
/* </table>*/
/* */
/* <div id="tablecontent" class="container">*/
/* */
/* <table class="table testgrid" >*/
/* 	<tr >*/
/* 		{% for columna in array.metadata   %}*/
/* 			<th > {{ columna.label }}</th>*/
/* 		{% endfor %}*/
/* 	</tr>*/
/* 	{% for fila in array.data   %}*/
/* 		<tr>*/
/* 			{% for col in fila.columns   %}*/
/* 			<td > {{ col }}</td>*/
/* 			{% endfor %}*/
/* 		</tr>*/
/* 	{% endfor %}*/
/* 	<tr>*/
/* 		<td colspan="{{ array.metadata|length }}" style="text-align: right"*/
/* 		> Total: ${{ final }}</td>*/
/* 	</tr>*/
/* </table>*/
/* <div class="alpie">*/
/* ---------------<br>*/
/* 	Firma*/
/* </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
