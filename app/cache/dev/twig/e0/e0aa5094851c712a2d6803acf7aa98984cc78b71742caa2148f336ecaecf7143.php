<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_44ecb1b01ab6e5b56945fe2ed667d964369233ccf01abf0a480037415b621455 extends Twig_Template
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
        $__internal_3719561ffc7e1f6a9bc0e65c928c9cd84bbdf908d3faec92b443b77157d25e4a = $this->env->getExtension("native_profiler");
        $__internal_3719561ffc7e1f6a9bc0e65c928c9cd84bbdf908d3faec92b443b77157d25e4a->enter($__internal_3719561ffc7e1f6a9bc0e65c928c9cd84bbdf908d3faec92b443b77157d25e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3719561ffc7e1f6a9bc0e65c928c9cd84bbdf908d3faec92b443b77157d25e4a->leave($__internal_3719561ffc7e1f6a9bc0e65c928c9cd84bbdf908d3faec92b443b77157d25e4a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
