<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_34d3fb40a0578aa08e1a85ecf8fa465b663cec0a6e933b9aa51b34882fc92b79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_253af9763c48f360572a9e3d9c7e8fd6a302f190387ec5cd5e4127d240c80f43 = $this->env->getExtension("native_profiler");
        $__internal_253af9763c48f360572a9e3d9c7e8fd6a302f190387ec5cd5e4127d240c80f43->enter($__internal_253af9763c48f360572a9e3d9c7e8fd6a302f190387ec5cd5e4127d240c80f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_253af9763c48f360572a9e3d9c7e8fd6a302f190387ec5cd5e4127d240c80f43->leave($__internal_253af9763c48f360572a9e3d9c7e8fd6a302f190387ec5cd5e4127d240c80f43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2922b4368df7d10be1877e37b4cf9310b1db44639816875a6d147ad78019ee2 = $this->env->getExtension("native_profiler");
        $__internal_f2922b4368df7d10be1877e37b4cf9310b1db44639816875a6d147ad78019ee2->enter($__internal_f2922b4368df7d10be1877e37b4cf9310b1db44639816875a6d147ad78019ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f2922b4368df7d10be1877e37b4cf9310b1db44639816875a6d147ad78019ee2->leave($__internal_f2922b4368df7d10be1877e37b4cf9310b1db44639816875a6d147ad78019ee2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_28e67ca8c6f4129f9eeff8e211f54de5d606ed8c5ba0320069be70f233c6470c = $this->env->getExtension("native_profiler");
        $__internal_28e67ca8c6f4129f9eeff8e211f54de5d606ed8c5ba0320069be70f233c6470c->enter($__internal_28e67ca8c6f4129f9eeff8e211f54de5d606ed8c5ba0320069be70f233c6470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_28e67ca8c6f4129f9eeff8e211f54de5d606ed8c5ba0320069be70f233c6470c->leave($__internal_28e67ca8c6f4129f9eeff8e211f54de5d606ed8c5ba0320069be70f233c6470c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ce4afffc8b22a5b47e6cfe1ccac051d76f5817ba4b7ca73f27e33a6ac9b4a00 = $this->env->getExtension("native_profiler");
        $__internal_9ce4afffc8b22a5b47e6cfe1ccac051d76f5817ba4b7ca73f27e33a6ac9b4a00->enter($__internal_9ce4afffc8b22a5b47e6cfe1ccac051d76f5817ba4b7ca73f27e33a6ac9b4a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9ce4afffc8b22a5b47e6cfe1ccac051d76f5817ba4b7ca73f27e33a6ac9b4a00->leave($__internal_9ce4afffc8b22a5b47e6cfe1ccac051d76f5817ba4b7ca73f27e33a6ac9b4a00_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
