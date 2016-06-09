<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b4c842df885a047cb95f51e36b66311b8d61b5be19e486003a235e79c4ada80c extends Twig_Template
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
        $__internal_915a9a7371e019cd957f35277569e8d6277d10b46aa8bf57c906804c1748dd3d = $this->env->getExtension("native_profiler");
        $__internal_915a9a7371e019cd957f35277569e8d6277d10b46aa8bf57c906804c1748dd3d->enter($__internal_915a9a7371e019cd957f35277569e8d6277d10b46aa8bf57c906804c1748dd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_915a9a7371e019cd957f35277569e8d6277d10b46aa8bf57c906804c1748dd3d->leave($__internal_915a9a7371e019cd957f35277569e8d6277d10b46aa8bf57c906804c1748dd3d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
