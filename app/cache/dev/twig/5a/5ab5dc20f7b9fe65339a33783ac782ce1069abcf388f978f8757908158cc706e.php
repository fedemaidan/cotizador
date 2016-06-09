<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e5414dec976c3421eb20ff8c7f8ebfaa0eaf66eff15070a77396f72d5b5e751d extends Twig_Template
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
        $__internal_7591fe06261f21dcbb6d877d09d978af4118107a922203d28f6c1cc01be77f03 = $this->env->getExtension("native_profiler");
        $__internal_7591fe06261f21dcbb6d877d09d978af4118107a922203d28f6c1cc01be77f03->enter($__internal_7591fe06261f21dcbb6d877d09d978af4118107a922203d28f6c1cc01be77f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7591fe06261f21dcbb6d877d09d978af4118107a922203d28f6c1cc01be77f03->leave($__internal_7591fe06261f21dcbb6d877d09d978af4118107a922203d28f6c1cc01be77f03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
