<?php

/* @App/Cotizador/pdf2 */
class __TwigTemplate_e5d4bc6e3aa9e670b312b301f769ed45bd82fb4615fda07cb36997035bc09baf extends Twig_Template
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
        $__internal_908769cd0b758dd4717cb2f1b581c71b23a1f52c112bbf228fa7d41b79e00275 = $this->env->getExtension("native_profiler");
        $__internal_908769cd0b758dd4717cb2f1b581c71b23a1f52c112bbf228fa7d41b79e00275->enter($__internal_908769cd0b758dd4717cb2f1b581c71b23a1f52c112bbf228fa7d41b79e00275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Cotizador/pdf2"));

        // line 1
        echo "<html>
<headers>
<link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bastrap3/favicon.png"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bastrap3/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bastrap3/bastrap.css"), "html", null, true);
        echo "\">


<body style =\"\">

<div id=\"tablecontent\" >

<table class=\"table\" style=
\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t    max-width: 100%;
\t\t\t\t\t    margin-bottom: 20px;
\t\t\t\t\t    background-color: transparent;
\t\t\t\t\t    white-space: normal;
\t\t\t\t\t    line-height: normal;
\t\t\t\t\t    font-weight: normal;
\t\t\t\t\t    font-size: medium;
\t\t\t\t\t    font-variant: normal;
\t\t\t\t\t    font-style: normal;
\t\t\t\t\t    color: -webkit-text;
\t\t\t\t\t    text-align: start;
\t\t\t\t\t    display: table;
\t\t\t\t\t    border-color: grey;
\t\t\t\t\t    
\t\t\t\t\t    \">
\t<tr style = \"display: table-row;
\t\t\t\t vertical-align: inherit;
\t\t\t\t border-color: inherit;
\t\t\t\t font-family: OpenSans, Helvetica, Arial, sans-serif;
\t\t\t\t    \"
\t>
\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["array"]) ? $context["array"] : $this->getContext($context, "array")), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["columna"]) {
            // line 36
            echo "\t\t\t<th
\t\t\t\tstyle=\"border-top: solid 1px #ccc;padding: 8px;line-height: 1.42857143; vertical-align: top;text-align: left;font-weight: bold;    display: table-cell;\"
\t\t\t> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["columna"], "label", array()), "html", null, true);
            echo "</th>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['columna'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t</tr>
\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["array"]) ? $context["array"] : $this->getContext($context, "array")), "data", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fila"]) {
            // line 42
            echo "\t\t<tr>
\t\t\t";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fila"], "columns", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 44
                echo "\t\t\t<td
\t\t\t\tstyle=\"border-top: solid 1px #ccc;padding: 8px;line-height: 1.42857143;vertical-align: top;display: table-cell;\"
\t\t\t> ";
                // line 46
                echo twig_escape_filter($this->env, $context["col"], "html", null, true);
                echo "</td>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fila'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t<tr>
\t\t<td
\t\t\tstyle=\"border-top: solid 1px #ccc;padding: 8px;line-height: 1.42857143;vertical-align: top;display: table-cell;\"

\t\t\tcolspan=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["array"]) ? $context["array"] : $this->getContext($context, "array")), "metadata", array())), "html", null, true);
        echo "\"
\t\t> Total: ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["final"]) ? $context["final"] : $this->getContext($context, "final")), "html", null, true);
        echo "</td>
\t</tr>
</table>
</div>
</body>
</html>";
        
        $__internal_908769cd0b758dd4717cb2f1b581c71b23a1f52c112bbf228fa7d41b79e00275->leave($__internal_908769cd0b758dd4717cb2f1b581c71b23a1f52c112bbf228fa7d41b79e00275_prof);

    }

    public function getTemplateName()
    {
        return "@App/Cotizador/pdf2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 55,  122 => 54,  116 => 50,  109 => 48,  101 => 46,  97 => 44,  93 => 43,  90 => 42,  86 => 41,  83 => 40,  75 => 38,  71 => 36,  67 => 35,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/* <headers>*/
/* <link rel="shortcut icon" type="image/png" href="{{ asset('bastrap3/favicon.png') }}"/>*/
/*         <link rel="stylesheet" href="{{ asset('bastrap3/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('bastrap3/bastrap.css') }}">*/
/* */
/* */
/* <body style ="">*/
/* */
/* <div id="tablecontent" >*/
/* */
/* <table class="table" style=*/
/* 						width: 100%;*/
/* 					    max-width: 100%;*/
/* 					    margin-bottom: 20px;*/
/* 					    background-color: transparent;*/
/* 					    white-space: normal;*/
/* 					    line-height: normal;*/
/* 					    font-weight: normal;*/
/* 					    font-size: medium;*/
/* 					    font-variant: normal;*/
/* 					    font-style: normal;*/
/* 					    color: -webkit-text;*/
/* 					    text-align: start;*/
/* 					    display: table;*/
/* 					    border-color: grey;*/
/* 					    */
/* 					    ">*/
/* 	<tr style = "display: table-row;*/
/* 				 vertical-align: inherit;*/
/* 				 border-color: inherit;*/
/* 				 font-family: OpenSans, Helvetica, Arial, sans-serif;*/
/* 				    "*/
/* 	>*/
/* 		{% for columna in array.metadata   %}*/
/* 			<th*/
/* 				style="border-top: solid 1px #ccc;padding: 8px;line-height: 1.42857143; vertical-align: top;text-align: left;font-weight: bold;    display: table-cell;"*/
/* 			> {{ columna.label }}</th>*/
/* 		{% endfor %}*/
/* 	</tr>*/
/* 	{% for fila in array.data   %}*/
/* 		<tr>*/
/* 			{% for col in fila.columns   %}*/
/* 			<td*/
/* 				style="border-top: solid 1px #ccc;padding: 8px;line-height: 1.42857143;vertical-align: top;display: table-cell;"*/
/* 			> {{ col }}</td>*/
/* 			{% endfor %}*/
/* 		</tr>*/
/* 	{% endfor %}*/
/* 	<tr>*/
/* 		<td*/
/* 			style="border-top: solid 1px #ccc;padding: 8px;line-height: 1.42857143;vertical-align: top;display: table-cell;"*/
/* */
/* 			colspan="{{ array.metadata|length }}"*/
/* 		> Total: {{ final }}</td>*/
/* 	</tr>*/
/* </table>*/
/* </div>*/
/* </body>*/
/* </html>*/
