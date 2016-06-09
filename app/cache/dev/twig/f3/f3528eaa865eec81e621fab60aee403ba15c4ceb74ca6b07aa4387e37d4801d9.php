<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2987f5be45b099539d23d9f8954973a8f6c4ed094889db24f2c5c69f7078a8a7 extends Twig_Template
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
        $__internal_d13a2e127d3489de014c70b5e09feb40b02bf4d6e0f30d6ab250d0fc206fcf4b = $this->env->getExtension("native_profiler");
        $__internal_d13a2e127d3489de014c70b5e09feb40b02bf4d6e0f30d6ab250d0fc206fcf4b->enter($__internal_d13a2e127d3489de014c70b5e09feb40b02bf4d6e0f30d6ab250d0fc206fcf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d13a2e127d3489de014c70b5e09feb40b02bf4d6e0f30d6ab250d0fc206fcf4b->leave($__internal_d13a2e127d3489de014c70b5e09feb40b02bf4d6e0f30d6ab250d0fc206fcf4b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
