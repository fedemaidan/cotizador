<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_24e63f47fdc3416f75282cee0ec64ab70001d09c342bf439524d4be9428da45c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_3513df6f97fc25b9766248a6fef0ca8fcb4039d798dceeefb9da9482e8423e12 = $this->env->getExtension("native_profiler");
        $__internal_3513df6f97fc25b9766248a6fef0ca8fcb4039d798dceeefb9da9482e8423e12->enter($__internal_3513df6f97fc25b9766248a6fef0ca8fcb4039d798dceeefb9da9482e8423e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3513df6f97fc25b9766248a6fef0ca8fcb4039d798dceeefb9da9482e8423e12->leave($__internal_3513df6f97fc25b9766248a6fef0ca8fcb4039d798dceeefb9da9482e8423e12_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dd7eb2164d33a9a3ddf08981d7004caf44e3478a91308a8d79293f3d7d12d23 = $this->env->getExtension("native_profiler");
        $__internal_7dd7eb2164d33a9a3ddf08981d7004caf44e3478a91308a8d79293f3d7d12d23->enter($__internal_7dd7eb2164d33a9a3ddf08981d7004caf44e3478a91308a8d79293f3d7d12d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7dd7eb2164d33a9a3ddf08981d7004caf44e3478a91308a8d79293f3d7d12d23->leave($__internal_7dd7eb2164d33a9a3ddf08981d7004caf44e3478a91308a8d79293f3d7d12d23_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_62defc450e3f579cb2053edc60fc041f776bcc88b497d9ce41f1289a350f6eb5 = $this->env->getExtension("native_profiler");
        $__internal_62defc450e3f579cb2053edc60fc041f776bcc88b497d9ce41f1289a350f6eb5->enter($__internal_62defc450e3f579cb2053edc60fc041f776bcc88b497d9ce41f1289a350f6eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_62defc450e3f579cb2053edc60fc041f776bcc88b497d9ce41f1289a350f6eb5->leave($__internal_62defc450e3f579cb2053edc60fc041f776bcc88b497d9ce41f1289a350f6eb5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
