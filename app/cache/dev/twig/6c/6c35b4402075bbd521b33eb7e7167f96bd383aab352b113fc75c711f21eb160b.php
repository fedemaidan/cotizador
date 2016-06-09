<?php

/* ::base.html.twig */
class __TwigTemplate_26aed5da2b2d8b10931236f0625d93ff0c56a349675d4326b91975579f79ecfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'applicationCss' => array($this, 'block_applicationCss'),
            'bundleCss' => array($this, 'block_bundleCss'),
            'controllerCss' => array($this, 'block_controllerCss'),
            'actionCss' => array($this, 'block_actionCss'),
            'listaAcciones' => array($this, 'block_listaAcciones'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
            'applicationJs' => array($this, 'block_applicationJs'),
            'bundleJs' => array($this, 'block_bundleJs'),
            'controllerJs' => array($this, 'block_controllerJs'),
            'actionJs' => array($this, 'block_actionJs'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d482dff6e7745d931a8847e939edb075513a5e1ff7503dd105e7cf7d9f7f37ee = $this->env->getExtension("native_profiler");
        $__internal_d482dff6e7745d931a8847e939edb075513a5e1ff7503dd105e7cf7d9f7f37ee->enter($__internal_d482dff6e7745d931a8847e939edb075513a5e1ff7503dd105e7cf7d9f7f37ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"Sitio interno del Gobierno de la Ciudad de Buenos Aires.\">
        <meta name=\"author\" content=\"Gobierno de la Ciudad de Buenos Aires\">
        <meta http-equiv=\"Cache-control\" content=\"“no-cache\">
        <meta http-equiv=\"Cache-control\" content=\"“no-store\">
        <meta http-equiv=\"Cache-control\" content=\"must-revalidate\">
        <meta http-equiv=\"Cache-control\" content=\"private\">
        <META HTTP-EQUIV=\"PRAGMA\" CONTENT=\"NO-CACHE\">
        <title>Cotizador</title>
        <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bastrap3/favicon.png"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bastrap3/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bastrap3/bastrap.css"), "html", null, true);
        echo "\">
  
        <!--[if lt IE 9]>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bastrap3/ba-modernizr.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->

        ";
        // line 23
        $this->displayBlock('applicationCss', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('bundleCss', $context, $blocks);
        // line 25
        echo "        ";
        $this->displayBlock('controllerCss', $context, $blocks);
        // line 26
        echo "        ";
        $this->displayBlock('actionCss', $context, $blocks);
        // line 27
        echo "    </head>
    <body>

        <header class=\"navbar navbar-primary navbar-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6\">
                        <a class=\"navbar-brand bac-header\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\">Buenos Aires Ciudad</a>
                    </div>
                    <div class=\"col-md-6 col-sm-6\">
                        <h5 class=\"sub-brand\">En todo estás vos</h5>
                    </div>
                </div>
            </div>
        </header>

        <nav class=\"navbar navbar-default\" role=\"navigation\" style=\"background-color: rgb(0, 0, 0);\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-nav\">
                            <span class=\"sr-only\">Cambiar navegación</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    ";
        // line 53
        $this->displayBlock('listaAcciones', $context, $blocks);
        // line 58
        echo "                    </div>
                    
                </div>
            </div>
        </nav>

        <div class=\"container\">

        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 67
            echo "        <div class=\"alert alert-info\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>Info!</strong> ";
            // line 69
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 74
            echo "            <div class=\"alert alert-success\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Success!</strong> ";
            // line 76
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 81
            echo "        <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>Error!</strong> ";
            // line 83
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
        </div>

        <main class=\"main-container\" role=\"main\" style=\"padding-top:0\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h3 >";
        // line 93
        $this->displayBlock('pageTitle', $context, $blocks);
        echo "</h3>
                        ";
        // line 94
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "                    </div>
                </div>
            </div>
        </main>

        <footer>
            <div class=\"footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6\">
                            
                        </div>
                        <div class=\"col-md-6 col-sm-6\">
                            <div class=\"sub-brand\">
                                <!-- <p>Dirección General de Gobierno Electrónico<br />
                                <span class=\"text-muted\">Ministerio de Modernización</span></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        ";
        // line 117
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8b5d6d3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b5d6d3_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/8b5d6d3_jquery-1.11.1.min_1.js");
            // line 118
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "8b5d6d3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b5d6d3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/8b5d6d3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 120
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bastrap3/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bastrap3/ba-modernizr.js"), "html", null, true);
        echo "\"></script>
        <script> var appBaseUrl = '//";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "host", array()), "html", null, true);
        echo "'; </script>
        <script> var appEnvUrl = '";
        // line 123
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array()) == "dev")) {
            echo "/app_dev.php/";
        }
        echo "'; </script>
        ";
        // line 124
        $this->displayBlock('applicationJs', $context, $blocks);
        // line 125
        echo "        ";
        $this->displayBlock('bundleJs', $context, $blocks);
        // line 126
        echo "        ";
        $this->displayBlock('controllerJs', $context, $blocks);
        // line 127
        echo "        ";
        $this->displayBlock('actionJs', $context, $blocks);
        // line 128
        echo "    </body>
</html>
";
        
        $__internal_d482dff6e7745d931a8847e939edb075513a5e1ff7503dd105e7cf7d9f7f37ee->leave($__internal_d482dff6e7745d931a8847e939edb075513a5e1ff7503dd105e7cf7d9f7f37ee_prof);

    }

    // line 23
    public function block_applicationCss($context, array $blocks = array())
    {
        $__internal_9e5c1df04afdf83c7ba12eef6a54c08305212130504be3374545edde94e78b73 = $this->env->getExtension("native_profiler");
        $__internal_9e5c1df04afdf83c7ba12eef6a54c08305212130504be3374545edde94e78b73->enter($__internal_9e5c1df04afdf83c7ba12eef6a54c08305212130504be3374545edde94e78b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "applicationCss"));

        
        $__internal_9e5c1df04afdf83c7ba12eef6a54c08305212130504be3374545edde94e78b73->leave($__internal_9e5c1df04afdf83c7ba12eef6a54c08305212130504be3374545edde94e78b73_prof);

    }

    // line 24
    public function block_bundleCss($context, array $blocks = array())
    {
        $__internal_999a80d1276d5984b9cd635a791a63bba4f2d049fd366ef215ee96cd6486a042 = $this->env->getExtension("native_profiler");
        $__internal_999a80d1276d5984b9cd635a791a63bba4f2d049fd366ef215ee96cd6486a042->enter($__internal_999a80d1276d5984b9cd635a791a63bba4f2d049fd366ef215ee96cd6486a042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bundleCss"));

        
        $__internal_999a80d1276d5984b9cd635a791a63bba4f2d049fd366ef215ee96cd6486a042->leave($__internal_999a80d1276d5984b9cd635a791a63bba4f2d049fd366ef215ee96cd6486a042_prof);

    }

    // line 25
    public function block_controllerCss($context, array $blocks = array())
    {
        $__internal_b46ced63815a860cef5f85052a3a2cc4d2f4ff1cec87e5c98dbdb841a5e5a0f8 = $this->env->getExtension("native_profiler");
        $__internal_b46ced63815a860cef5f85052a3a2cc4d2f4ff1cec87e5c98dbdb841a5e5a0f8->enter($__internal_b46ced63815a860cef5f85052a3a2cc4d2f4ff1cec87e5c98dbdb841a5e5a0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controllerCss"));

        
        $__internal_b46ced63815a860cef5f85052a3a2cc4d2f4ff1cec87e5c98dbdb841a5e5a0f8->leave($__internal_b46ced63815a860cef5f85052a3a2cc4d2f4ff1cec87e5c98dbdb841a5e5a0f8_prof);

    }

    // line 26
    public function block_actionCss($context, array $blocks = array())
    {
        $__internal_c039ce335cf45ef457b1f6d6eb95653c981d2abdc1695a4f125f808b596efd34 = $this->env->getExtension("native_profiler");
        $__internal_c039ce335cf45ef457b1f6d6eb95653c981d2abdc1695a4f125f808b596efd34->enter($__internal_c039ce335cf45ef457b1f6d6eb95653c981d2abdc1695a4f125f808b596efd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actionCss"));

        
        $__internal_c039ce335cf45ef457b1f6d6eb95653c981d2abdc1695a4f125f808b596efd34->leave($__internal_c039ce335cf45ef457b1f6d6eb95653c981d2abdc1695a4f125f808b596efd34_prof);

    }

    // line 53
    public function block_listaAcciones($context, array $blocks = array())
    {
        $__internal_72425601fa8c0dcae16f695327fede7b786236c4a79b907ca1b29745939355e7 = $this->env->getExtension("native_profiler");
        $__internal_72425601fa8c0dcae16f695327fede7b786236c4a79b907ca1b29745939355e7->enter($__internal_72425601fa8c0dcae16f695327fede7b786236c4a79b907ca1b29745939355e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listaAcciones"));

        // line 54
        echo "                    <a class=\"navbar-brand \" ";
        if (preg_match("{[.]*/\$}", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getRequestUri", array()))) {
            echo " style=\"color: white;\" ";
        }
        echo " href=\"";
        echo $this->env->getExtension('routing')->getUrl("inicio");
        echo "\" title=\"Cotizador\">Cotizador ";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</a>
                        
                        
                    ";
        
        $__internal_72425601fa8c0dcae16f695327fede7b786236c4a79b907ca1b29745939355e7->leave($__internal_72425601fa8c0dcae16f695327fede7b786236c4a79b907ca1b29745939355e7_prof);

    }

    // line 93
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_5df8519f235b12d89915385a1dfe22f34ed9ad5a736e7b96e8e4838326592f84 = $this->env->getExtension("native_profiler");
        $__internal_5df8519f235b12d89915385a1dfe22f34ed9ad5a736e7b96e8e4838326592f84->enter($__internal_5df8519f235b12d89915385a1dfe22f34ed9ad5a736e7b96e8e4838326592f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        
        $__internal_5df8519f235b12d89915385a1dfe22f34ed9ad5a736e7b96e8e4838326592f84->leave($__internal_5df8519f235b12d89915385a1dfe22f34ed9ad5a736e7b96e8e4838326592f84_prof);

    }

    // line 94
    public function block_body($context, array $blocks = array())
    {
        $__internal_a56c412f3eeb4c4396bf0df7415a9dd6e2595d95426fc8605d1e7645af8b3e80 = $this->env->getExtension("native_profiler");
        $__internal_a56c412f3eeb4c4396bf0df7415a9dd6e2595d95426fc8605d1e7645af8b3e80->enter($__internal_a56c412f3eeb4c4396bf0df7415a9dd6e2595d95426fc8605d1e7645af8b3e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a56c412f3eeb4c4396bf0df7415a9dd6e2595d95426fc8605d1e7645af8b3e80->leave($__internal_a56c412f3eeb4c4396bf0df7415a9dd6e2595d95426fc8605d1e7645af8b3e80_prof);

    }

    // line 124
    public function block_applicationJs($context, array $blocks = array())
    {
        $__internal_47d0e65b49469a47702d5b7f0920a8e420d70de96489b3a28a4c6ea3ede2dc91 = $this->env->getExtension("native_profiler");
        $__internal_47d0e65b49469a47702d5b7f0920a8e420d70de96489b3a28a4c6ea3ede2dc91->enter($__internal_47d0e65b49469a47702d5b7f0920a8e420d70de96489b3a28a4c6ea3ede2dc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "applicationJs"));

        
        $__internal_47d0e65b49469a47702d5b7f0920a8e420d70de96489b3a28a4c6ea3ede2dc91->leave($__internal_47d0e65b49469a47702d5b7f0920a8e420d70de96489b3a28a4c6ea3ede2dc91_prof);

    }

    // line 125
    public function block_bundleJs($context, array $blocks = array())
    {
        $__internal_175e748ecbc284d53c02de2ecc342fdc522fd1012959ff064e8c7fd4961b08a3 = $this->env->getExtension("native_profiler");
        $__internal_175e748ecbc284d53c02de2ecc342fdc522fd1012959ff064e8c7fd4961b08a3->enter($__internal_175e748ecbc284d53c02de2ecc342fdc522fd1012959ff064e8c7fd4961b08a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bundleJs"));

        
        $__internal_175e748ecbc284d53c02de2ecc342fdc522fd1012959ff064e8c7fd4961b08a3->leave($__internal_175e748ecbc284d53c02de2ecc342fdc522fd1012959ff064e8c7fd4961b08a3_prof);

    }

    // line 126
    public function block_controllerJs($context, array $blocks = array())
    {
        $__internal_236c5473b749ec73a23c464691b7d2bf0f65723de284cbae6795e768a547a418 = $this->env->getExtension("native_profiler");
        $__internal_236c5473b749ec73a23c464691b7d2bf0f65723de284cbae6795e768a547a418->enter($__internal_236c5473b749ec73a23c464691b7d2bf0f65723de284cbae6795e768a547a418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "controllerJs"));

        
        $__internal_236c5473b749ec73a23c464691b7d2bf0f65723de284cbae6795e768a547a418->leave($__internal_236c5473b749ec73a23c464691b7d2bf0f65723de284cbae6795e768a547a418_prof);

    }

    // line 127
    public function block_actionJs($context, array $blocks = array())
    {
        $__internal_e67804512da4f98fbb9e20757a0766ceb0626b0b1f94d3131d94b29a5b7df3d9 = $this->env->getExtension("native_profiler");
        $__internal_e67804512da4f98fbb9e20757a0766ceb0626b0b1f94d3131d94b29a5b7df3d9->enter($__internal_e67804512da4f98fbb9e20757a0766ceb0626b0b1f94d3131d94b29a5b7df3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actionJs"));

        
        $__internal_e67804512da4f98fbb9e20757a0766ceb0626b0b1f94d3131d94b29a5b7df3d9->leave($__internal_e67804512da4f98fbb9e20757a0766ceb0626b0b1f94d3131d94b29a5b7df3d9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 127,  388 => 126,  377 => 125,  366 => 124,  355 => 94,  344 => 93,  326 => 54,  320 => 53,  309 => 26,  298 => 25,  287 => 24,  276 => 23,  267 => 128,  264 => 127,  261 => 126,  258 => 125,  256 => 124,  250 => 123,  246 => 122,  242 => 121,  237 => 120,  223 => 118,  219 => 117,  195 => 95,  193 => 94,  189 => 93,  180 => 86,  171 => 83,  167 => 81,  163 => 80,  160 => 79,  151 => 76,  147 => 74,  143 => 73,  140 => 72,  131 => 69,  127 => 67,  123 => 66,  113 => 58,  111 => 53,  89 => 34,  80 => 27,  77 => 26,  74 => 25,  71 => 24,  69 => 23,  63 => 20,  57 => 17,  53 => 16,  49 => 15,  33 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="Sitio interno del Gobierno de la Ciudad de Buenos Aires.">*/
/*         <meta name="author" content="Gobierno de la Ciudad de Buenos Aires">*/
/*         <meta http-equiv="Cache-control" content="“no-cache">*/
/*         <meta http-equiv="Cache-control" content="“no-store">*/
/*         <meta http-equiv="Cache-control" content="must-revalidate">*/
/*         <meta http-equiv="Cache-control" content="private">*/
/*         <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">*/
/*         <title>Cotizador</title>*/
/*         <link rel="shortcut icon" type="image/png" href="{{ asset('bastrap3/favicon.png') }}"/>*/
/*         <link rel="stylesheet" href="{{ asset('bastrap3/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('bastrap3/bastrap.css') }}">*/
/*   */
/*         <!--[if lt IE 9]>*/
/*         <script src="{{ asset('bastrap3/ba-modernizr.js') }}"></script>*/
/*         <![endif]-->*/
/* */
/*         {% block applicationCss %}{% endblock %}*/
/*         {% block bundleCss %}{% endblock %}*/
/*         {% block controllerCss %}{% endblock %}*/
/*         {% block actionCss %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/* */
/*         <header class="navbar navbar-primary navbar-top">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-sm-6">*/
/*                         <a class="navbar-brand bac-header" href="{{ url('homepage') }}">Buenos Aires Ciudad</a>*/
/*                     </div>*/
/*                     <div class="col-md-6 col-sm-6">*/
/*                         <h5 class="sub-brand">En todo estás vos</h5>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </header>*/
/* */
/*         <nav class="navbar navbar-default" role="navigation" style="background-color: rgb(0, 0, 0);">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">*/
/*                             <span class="sr-only">Cambiar navegación</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                     {% block listaAcciones %}*/
/*                     <a class="navbar-brand " {% if app.request.getRequestUri matches '{[.]*//* $}' %} style="color: white;" {% endif %} href="{{ url('inicio') }}" title="Cotizador">Cotizador {{ version }}</a>*/
/*                         */
/*                         */
/*                     {% endblock%}*/
/*                     </div>*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/* */
/*         <div class="container">*/
/* */
/*         {% for flashMessage in app.session.flashbag.get('info') %}*/
/*         <div class="alert alert-info">*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             <strong>Info!</strong> {{ flashMessage }}*/
/*         </div>*/
/*         {% endfor %}*/
/*     */
/*         {% for flashMessage in app.session.flashbag.get('success') %}*/
/*             <div class="alert alert-success">*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*                 <strong>Success!</strong> {{ flashMessage }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         {% for flashMessage in app.session.flashbag.get('error') %}*/
/*         <div class="alert alert-danger">*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             <strong>Error!</strong> {{ flashMessage }}*/
/*         </div>*/
/*         {% endfor %}*/
/* */
/*         </div>*/
/* */
/*         <main class="main-container" role="main" style="padding-top:0">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <h3 >{% block pageTitle %}{% endblock %}</h3>*/
/*                         {% block body %}{% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </main>*/
/* */
/*         <footer>*/
/*             <div class="footer">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-md-6 col-sm-6">*/
/*                             */
/*                         </div>*/
/*                         <div class="col-md-6 col-sm-6">*/
/*                             <div class="sub-brand">*/
/*                                 <!-- <p>Dirección General de Gobierno Electrónico<br />*/
/*                                 <span class="text-muted">Ministerio de Modernización</span></p> -->*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
/*         {% javascripts '@AppBundle/Resources/public/js/jquery-1.11.1.min.js' %}*/
/*             <script src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*         <script src="{{ asset('bastrap3/bootstrap.min.js') }}"></script>*/
/*         <script src="{{ asset('bastrap3/ba-modernizr.js') }}"></script>*/
/*         <script> var appBaseUrl = '//{{ app.request.host }}'; </script>*/
/*         <script> var appEnvUrl = '{% if app.environment == "dev" %}/app_dev.php/{%endif%}'; </script>*/
/*         {% block applicationJs %}{% endblock %}*/
/*         {% block bundleJs %}{% endblock %}*/
/*         {% block controllerJs %}{% endblock %}*/
/*         {% block actionJs %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
