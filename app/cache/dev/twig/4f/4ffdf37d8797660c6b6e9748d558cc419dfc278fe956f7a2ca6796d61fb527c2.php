<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_617834d9d0151f6f4e3699d7516e20c3952950e04555d12cbf265f7a1a505713 extends Twig_Template
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
        $__internal_0c648efe459a8332c0dfd931596052b27d80161fb5fade1392f1e5d008109497 = $this->env->getExtension("native_profiler");
        $__internal_0c648efe459a8332c0dfd931596052b27d80161fb5fade1392f1e5d008109497->enter($__internal_0c648efe459a8332c0dfd931596052b27d80161fb5fade1392f1e5d008109497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0c648efe459a8332c0dfd931596052b27d80161fb5fade1392f1e5d008109497->leave($__internal_0c648efe459a8332c0dfd931596052b27d80161fb5fade1392f1e5d008109497_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
