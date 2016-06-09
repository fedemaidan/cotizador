<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_df98ed5b502d828ce983553909f6c8adf53263da80fe625316a46fefd14a9bef extends Twig_Template
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
        $__internal_6be9f16d2eb4b86870d6fa07b29cdbdc82dc6468387766813fd9adc781a360e2 = $this->env->getExtension("native_profiler");
        $__internal_6be9f16d2eb4b86870d6fa07b29cdbdc82dc6468387766813fd9adc781a360e2->enter($__internal_6be9f16d2eb4b86870d6fa07b29cdbdc82dc6468387766813fd9adc781a360e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6be9f16d2eb4b86870d6fa07b29cdbdc82dc6468387766813fd9adc781a360e2->leave($__internal_6be9f16d2eb4b86870d6fa07b29cdbdc82dc6468387766813fd9adc781a360e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
