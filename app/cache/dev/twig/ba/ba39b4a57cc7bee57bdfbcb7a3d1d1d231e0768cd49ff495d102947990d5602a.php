<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3ad77f7c27ce19ae75aab6798981cfee724ca01d9533240421a7d674a587cf27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e912de384e86529b044922a824b5473d395796e51ee598a8ee8ee6f829852e2 = $this->env->getExtension("native_profiler");
        $__internal_7e912de384e86529b044922a824b5473d395796e51ee598a8ee8ee6f829852e2->enter($__internal_7e912de384e86529b044922a824b5473d395796e51ee598a8ee8ee6f829852e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e912de384e86529b044922a824b5473d395796e51ee598a8ee8ee6f829852e2->leave($__internal_7e912de384e86529b044922a824b5473d395796e51ee598a8ee8ee6f829852e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8f2d776dfa8426249f0926ed8bb2844830816ef0e5af73e02aa9eaff35a7ad7 = $this->env->getExtension("native_profiler");
        $__internal_f8f2d776dfa8426249f0926ed8bb2844830816ef0e5af73e02aa9eaff35a7ad7->enter($__internal_f8f2d776dfa8426249f0926ed8bb2844830816ef0e5af73e02aa9eaff35a7ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f8f2d776dfa8426249f0926ed8bb2844830816ef0e5af73e02aa9eaff35a7ad7->leave($__internal_f8f2d776dfa8426249f0926ed8bb2844830816ef0e5af73e02aa9eaff35a7ad7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f2e3e5e7b5088f3fee28027f6e89fbce2da912b2c96801972f8a0b3b003234eb = $this->env->getExtension("native_profiler");
        $__internal_f2e3e5e7b5088f3fee28027f6e89fbce2da912b2c96801972f8a0b3b003234eb->enter($__internal_f2e3e5e7b5088f3fee28027f6e89fbce2da912b2c96801972f8a0b3b003234eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f2e3e5e7b5088f3fee28027f6e89fbce2da912b2c96801972f8a0b3b003234eb->leave($__internal_f2e3e5e7b5088f3fee28027f6e89fbce2da912b2c96801972f8a0b3b003234eb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6780c42be8234d8aaff2baaf1052d5fc694e6c08b9cb44c9ccf487795b1c7ae5 = $this->env->getExtension("native_profiler");
        $__internal_6780c42be8234d8aaff2baaf1052d5fc694e6c08b9cb44c9ccf487795b1c7ae5->enter($__internal_6780c42be8234d8aaff2baaf1052d5fc694e6c08b9cb44c9ccf487795b1c7ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6780c42be8234d8aaff2baaf1052d5fc694e6c08b9cb44c9ccf487795b1c7ae5->leave($__internal_6780c42be8234d8aaff2baaf1052d5fc694e6c08b9cb44c9ccf487795b1c7ae5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
