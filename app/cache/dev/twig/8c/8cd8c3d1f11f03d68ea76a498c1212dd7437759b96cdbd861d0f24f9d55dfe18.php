<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_38846c547e16caf4698c22ab753630a640093822df9de72c4f94068c0977eea2 extends Twig_Template
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
        $__internal_ac4627559b317b7886ea4d25d4af40b95354053a0905f404ed4a68c94cf69402 = $this->env->getExtension("native_profiler");
        $__internal_ac4627559b317b7886ea4d25d4af40b95354053a0905f404ed4a68c94cf69402->enter($__internal_ac4627559b317b7886ea4d25d4af40b95354053a0905f404ed4a68c94cf69402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ac4627559b317b7886ea4d25d4af40b95354053a0905f404ed4a68c94cf69402->leave($__internal_ac4627559b317b7886ea4d25d4af40b95354053a0905f404ed4a68c94cf69402_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
