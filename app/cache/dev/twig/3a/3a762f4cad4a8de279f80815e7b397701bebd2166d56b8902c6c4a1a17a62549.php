<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_dd1afef0a3888a78cb8c02e5ba70f030fbbe0bc56b2b32aa063c1ca39d1f8517 extends Twig_Template
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
        $__internal_f8d8268a2abcedbc6df20951f7ab544c94c6f179ebda2f6e4295d5238d6cc9f4 = $this->env->getExtension("native_profiler");
        $__internal_f8d8268a2abcedbc6df20951f7ab544c94c6f179ebda2f6e4295d5238d6cc9f4->enter($__internal_f8d8268a2abcedbc6df20951f7ab544c94c6f179ebda2f6e4295d5238d6cc9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f8d8268a2abcedbc6df20951f7ab544c94c6f179ebda2f6e4295d5238d6cc9f4->leave($__internal_f8d8268a2abcedbc6df20951f7ab544c94c6f179ebda2f6e4295d5238d6cc9f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
