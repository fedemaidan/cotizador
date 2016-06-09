<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_af75d2b620101508a6b2db03456d955a5da9bebabbe5df9c433a2b35a1d7744a extends Twig_Template
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
        $__internal_e0c4d982c137e60ae658a26099d8994230a68ebdd4f20bba7ad4a17ee95dd4ba = $this->env->getExtension("native_profiler");
        $__internal_e0c4d982c137e60ae658a26099d8994230a68ebdd4f20bba7ad4a17ee95dd4ba->enter($__internal_e0c4d982c137e60ae658a26099d8994230a68ebdd4f20bba7ad4a17ee95dd4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e0c4d982c137e60ae658a26099d8994230a68ebdd4f20bba7ad4a17ee95dd4ba->leave($__internal_e0c4d982c137e60ae658a26099d8994230a68ebdd4f20bba7ad4a17ee95dd4ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
