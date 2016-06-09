<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_4e125438f3f970ef1f4f1d329ad9206c8dc6f94414c4d12b527a598206ea9a4f extends Twig_Template
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
        $__internal_9c559674bdde927e037ab7aa5d2d71607f1f85e8caebee84fdd39f0f81340533 = $this->env->getExtension("native_profiler");
        $__internal_9c559674bdde927e037ab7aa5d2d71607f1f85e8caebee84fdd39f0f81340533->enter($__internal_9c559674bdde927e037ab7aa5d2d71607f1f85e8caebee84fdd39f0f81340533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9c559674bdde927e037ab7aa5d2d71607f1f85e8caebee84fdd39f0f81340533->leave($__internal_9c559674bdde927e037ab7aa5d2d71607f1f85e8caebee84fdd39f0f81340533_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
