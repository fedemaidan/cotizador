<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f7662655573f090f05c59f212d426f16035aa265cf50e1cd565734fb7f018c3c extends Twig_Template
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
        $__internal_28dc9f485fc4eafd1f427aefdeba46ad902df4518d144dbe4775cce2568e50e3 = $this->env->getExtension("native_profiler");
        $__internal_28dc9f485fc4eafd1f427aefdeba46ad902df4518d144dbe4775cce2568e50e3->enter($__internal_28dc9f485fc4eafd1f427aefdeba46ad902df4518d144dbe4775cce2568e50e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_28dc9f485fc4eafd1f427aefdeba46ad902df4518d144dbe4775cce2568e50e3->leave($__internal_28dc9f485fc4eafd1f427aefdeba46ad902df4518d144dbe4775cce2568e50e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
