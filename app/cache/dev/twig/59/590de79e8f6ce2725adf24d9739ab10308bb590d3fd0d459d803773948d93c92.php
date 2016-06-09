<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b4ea67446d0024bcfadfbcbbbf80f36103aeb47ee5e5a7835d609d499cdf775f extends Twig_Template
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
        $__internal_a4cfbe18eb1b700d06c4863dc4ffc82406bef72e76a74da7401e5bfdc3185969 = $this->env->getExtension("native_profiler");
        $__internal_a4cfbe18eb1b700d06c4863dc4ffc82406bef72e76a74da7401e5bfdc3185969->enter($__internal_a4cfbe18eb1b700d06c4863dc4ffc82406bef72e76a74da7401e5bfdc3185969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a4cfbe18eb1b700d06c4863dc4ffc82406bef72e76a74da7401e5bfdc3185969->leave($__internal_a4cfbe18eb1b700d06c4863dc4ffc82406bef72e76a74da7401e5bfdc3185969_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
