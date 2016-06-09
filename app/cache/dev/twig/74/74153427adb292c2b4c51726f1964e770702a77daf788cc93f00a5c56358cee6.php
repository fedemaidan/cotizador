<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ee7d92725dc5475867ed65ea6134166f55fe7eed7b241988bb22af4a67e2b0dd extends Twig_Template
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
        $__internal_b92712cd53bdc36cc65e25ed77b4071c896b5f2e5be8422c0e3ceee09df6615c = $this->env->getExtension("native_profiler");
        $__internal_b92712cd53bdc36cc65e25ed77b4071c896b5f2e5be8422c0e3ceee09df6615c->enter($__internal_b92712cd53bdc36cc65e25ed77b4071c896b5f2e5be8422c0e3ceee09df6615c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b92712cd53bdc36cc65e25ed77b4071c896b5f2e5be8422c0e3ceee09df6615c->leave($__internal_b92712cd53bdc36cc65e25ed77b4071c896b5f2e5be8422c0e3ceee09df6615c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
