<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_be319822eb881a936c4c9ba8d7579e05021a38c4a1417bb9b61874229dfa5be8 extends Twig_Template
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
        $__internal_08d079fa7f197c873f9cb5ec74bfe3df61d635a62a7dd19c8ab4f25769deb010 = $this->env->getExtension("native_profiler");
        $__internal_08d079fa7f197c873f9cb5ec74bfe3df61d635a62a7dd19c8ab4f25769deb010->enter($__internal_08d079fa7f197c873f9cb5ec74bfe3df61d635a62a7dd19c8ab4f25769deb010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_08d079fa7f197c873f9cb5ec74bfe3df61d635a62a7dd19c8ab4f25769deb010->leave($__internal_08d079fa7f197c873f9cb5ec74bfe3df61d635a62a7dd19c8ab4f25769deb010_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
