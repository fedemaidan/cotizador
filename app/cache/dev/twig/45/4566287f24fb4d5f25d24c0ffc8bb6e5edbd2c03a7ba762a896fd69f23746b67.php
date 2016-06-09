<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5070fd9403bed3799e5f5e584c35172c7565da5d50d90dc55f4ff1db7ddc5db5 extends Twig_Template
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
        $__internal_e52e61aa44995ace34a89a5562f8261e053c7fe7ad9f1e46399cdd9d7502db8d = $this->env->getExtension("native_profiler");
        $__internal_e52e61aa44995ace34a89a5562f8261e053c7fe7ad9f1e46399cdd9d7502db8d->enter($__internal_e52e61aa44995ace34a89a5562f8261e053c7fe7ad9f1e46399cdd9d7502db8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e52e61aa44995ace34a89a5562f8261e053c7fe7ad9f1e46399cdd9d7502db8d->leave($__internal_e52e61aa44995ace34a89a5562f8261e053c7fe7ad9f1e46399cdd9d7502db8d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
