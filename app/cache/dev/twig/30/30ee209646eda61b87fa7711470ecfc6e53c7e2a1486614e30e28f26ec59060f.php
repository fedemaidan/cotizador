<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_7800581118159ec0dcaa557f27b799b48608b828a7fa72330a1e66dfdc6a6518 extends Twig_Template
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
        $__internal_442829850f5014ee85c37f709f3dae6748874c73466b5a7f30e319a182d6b981 = $this->env->getExtension("native_profiler");
        $__internal_442829850f5014ee85c37f709f3dae6748874c73466b5a7f30e319a182d6b981->enter($__internal_442829850f5014ee85c37f709f3dae6748874c73466b5a7f30e319a182d6b981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_442829850f5014ee85c37f709f3dae6748874c73466b5a7f30e319a182d6b981->leave($__internal_442829850f5014ee85c37f709f3dae6748874c73466b5a7f30e319a182d6b981_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
