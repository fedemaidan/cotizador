<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f7bd2ca4f6d88f4cb4d2262dd4640f60fba0d4a7cf22dbef78741e537dea8452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adce112bf163bd7b53300bca42bd77363e2dac4d117bbcceaed3265fd1ef3cb4 = $this->env->getExtension("native_profiler");
        $__internal_adce112bf163bd7b53300bca42bd77363e2dac4d117bbcceaed3265fd1ef3cb4->enter($__internal_adce112bf163bd7b53300bca42bd77363e2dac4d117bbcceaed3265fd1ef3cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_adce112bf163bd7b53300bca42bd77363e2dac4d117bbcceaed3265fd1ef3cb4->leave($__internal_adce112bf163bd7b53300bca42bd77363e2dac4d117bbcceaed3265fd1ef3cb4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3f7bf5e8e9f623cee4d950365c8dcf58454f169b590f35023d68bb9e6132dfd = $this->env->getExtension("native_profiler");
        $__internal_c3f7bf5e8e9f623cee4d950365c8dcf58454f169b590f35023d68bb9e6132dfd->enter($__internal_c3f7bf5e8e9f623cee4d950365c8dcf58454f169b590f35023d68bb9e6132dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c3f7bf5e8e9f623cee4d950365c8dcf58454f169b590f35023d68bb9e6132dfd->leave($__internal_c3f7bf5e8e9f623cee4d950365c8dcf58454f169b590f35023d68bb9e6132dfd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
