<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_943e7602ec0e3962318067b461f9e01865c5e2c4559a2625b49e10ca3f378ffd extends Twig_Template
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
        $__internal_11d71982218524b140a8622d280e20f12a0778d62088b0e8de91aaa965583328 = $this->env->getExtension("native_profiler");
        $__internal_11d71982218524b140a8622d280e20f12a0778d62088b0e8de91aaa965583328->enter($__internal_11d71982218524b140a8622d280e20f12a0778d62088b0e8de91aaa965583328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_11d71982218524b140a8622d280e20f12a0778d62088b0e8de91aaa965583328->leave($__internal_11d71982218524b140a8622d280e20f12a0778d62088b0e8de91aaa965583328_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
