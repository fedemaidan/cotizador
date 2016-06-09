<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8f20b37f5db6cb86032b3283a53e33c220ba1a6556ded390057e8763d371da5e extends Twig_Template
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
        $__internal_9d651fb86ba10440fce83c79608fedac294af435c279e6b7c1fec7fa73fc1a9d = $this->env->getExtension("native_profiler");
        $__internal_9d651fb86ba10440fce83c79608fedac294af435c279e6b7c1fec7fa73fc1a9d->enter($__internal_9d651fb86ba10440fce83c79608fedac294af435c279e6b7c1fec7fa73fc1a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9d651fb86ba10440fce83c79608fedac294af435c279e6b7c1fec7fa73fc1a9d->leave($__internal_9d651fb86ba10440fce83c79608fedac294af435c279e6b7c1fec7fa73fc1a9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
