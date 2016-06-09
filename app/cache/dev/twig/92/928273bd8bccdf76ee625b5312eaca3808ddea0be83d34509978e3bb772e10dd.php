<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2e7c735bd4bee28d3d8664931080135ce3921891500f2cbeb7499cfbafb67e51 extends Twig_Template
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
        $__internal_f592acd37535e2814f61938eb29224c376469d960c62c31322e2b068199542af = $this->env->getExtension("native_profiler");
        $__internal_f592acd37535e2814f61938eb29224c376469d960c62c31322e2b068199542af->enter($__internal_f592acd37535e2814f61938eb29224c376469d960c62c31322e2b068199542af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f592acd37535e2814f61938eb29224c376469d960c62c31322e2b068199542af->leave($__internal_f592acd37535e2814f61938eb29224c376469d960c62c31322e2b068199542af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
