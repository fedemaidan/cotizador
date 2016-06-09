<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a5771647080270b836661cf810546a0019aba090178a3b0b00b5af2cb5e9bc3a extends Twig_Template
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
        $__internal_32a3861887f574e4640b272b3d2016aa461e9f8ca598585d21f63b717c8e1117 = $this->env->getExtension("native_profiler");
        $__internal_32a3861887f574e4640b272b3d2016aa461e9f8ca598585d21f63b717c8e1117->enter($__internal_32a3861887f574e4640b272b3d2016aa461e9f8ca598585d21f63b717c8e1117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_32a3861887f574e4640b272b3d2016aa461e9f8ca598585d21f63b717c8e1117->leave($__internal_32a3861887f574e4640b272b3d2016aa461e9f8ca598585d21f63b717c8e1117_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
