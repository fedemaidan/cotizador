<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4ef0d11b4d6f710eb54c7e37ffba220b8f66235eba4c8e8b2901892990389761 extends Twig_Template
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
        $__internal_e15f091a3b93debb41a668269abdbd7453e5fc8c3c288da025a7ddcfeb797b94 = $this->env->getExtension("native_profiler");
        $__internal_e15f091a3b93debb41a668269abdbd7453e5fc8c3c288da025a7ddcfeb797b94->enter($__internal_e15f091a3b93debb41a668269abdbd7453e5fc8c3c288da025a7ddcfeb797b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e15f091a3b93debb41a668269abdbd7453e5fc8c3c288da025a7ddcfeb797b94->leave($__internal_e15f091a3b93debb41a668269abdbd7453e5fc8c3c288da025a7ddcfeb797b94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
