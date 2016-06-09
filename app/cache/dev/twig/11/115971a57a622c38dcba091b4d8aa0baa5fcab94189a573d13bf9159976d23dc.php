<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_88ccc532fe1246c7a407faa8bf9e0cf1e69679b3e93ad0cb7704f82712ac3b6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c65c40f94bbadb6dbc52d00b565978498c30c113cca53a5f94e9e5e40505c5ab = $this->env->getExtension("native_profiler");
        $__internal_c65c40f94bbadb6dbc52d00b565978498c30c113cca53a5f94e9e5e40505c5ab->enter($__internal_c65c40f94bbadb6dbc52d00b565978498c30c113cca53a5f94e9e5e40505c5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c65c40f94bbadb6dbc52d00b565978498c30c113cca53a5f94e9e5e40505c5ab->leave($__internal_c65c40f94bbadb6dbc52d00b565978498c30c113cca53a5f94e9e5e40505c5ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_69816b086467b386d8ebba864a0fa37f3ac095aadbdb70c953ac6db04314f5a5 = $this->env->getExtension("native_profiler");
        $__internal_69816b086467b386d8ebba864a0fa37f3ac095aadbdb70c953ac6db04314f5a5->enter($__internal_69816b086467b386d8ebba864a0fa37f3ac095aadbdb70c953ac6db04314f5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_69816b086467b386d8ebba864a0fa37f3ac095aadbdb70c953ac6db04314f5a5->leave($__internal_69816b086467b386d8ebba864a0fa37f3ac095aadbdb70c953ac6db04314f5a5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea07234641ca64793f83908d5586cd264e9d75411e308b1c03dfbe9f672c31d7 = $this->env->getExtension("native_profiler");
        $__internal_ea07234641ca64793f83908d5586cd264e9d75411e308b1c03dfbe9f672c31d7->enter($__internal_ea07234641ca64793f83908d5586cd264e9d75411e308b1c03dfbe9f672c31d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ea07234641ca64793f83908d5586cd264e9d75411e308b1c03dfbe9f672c31d7->leave($__internal_ea07234641ca64793f83908d5586cd264e9d75411e308b1c03dfbe9f672c31d7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fe848a5e417a0f4b7130431f12b3d7691539dea58ec84f192d65dc5711035b1 = $this->env->getExtension("native_profiler");
        $__internal_2fe848a5e417a0f4b7130431f12b3d7691539dea58ec84f192d65dc5711035b1->enter($__internal_2fe848a5e417a0f4b7130431f12b3d7691539dea58ec84f192d65dc5711035b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2fe848a5e417a0f4b7130431f12b3d7691539dea58ec84f192d65dc5711035b1->leave($__internal_2fe848a5e417a0f4b7130431f12b3d7691539dea58ec84f192d65dc5711035b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
