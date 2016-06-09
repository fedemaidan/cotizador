<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5ccd97195257109307d4feba7df31422fc4a5289853afa849e83048f3e76dc22 extends Twig_Template
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
        $__internal_0add88fd22c4629f2c8ea3b23177a4f8c96019a28a30dee89cb512d3432f0c8a = $this->env->getExtension("native_profiler");
        $__internal_0add88fd22c4629f2c8ea3b23177a4f8c96019a28a30dee89cb512d3432f0c8a->enter($__internal_0add88fd22c4629f2c8ea3b23177a4f8c96019a28a30dee89cb512d3432f0c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0add88fd22c4629f2c8ea3b23177a4f8c96019a28a30dee89cb512d3432f0c8a->leave($__internal_0add88fd22c4629f2c8ea3b23177a4f8c96019a28a30dee89cb512d3432f0c8a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
