<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_aed64b3a4593888e7d43f7b2efb0e5b5ff0aac6a54bc831f3f9f3ca71d4fccd0 extends Twig_Template
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
        $__internal_cfe51c45d763ac855aed6c423ed6680a6d0b424c90a4fccf93fdab11a0c4fb54 = $this->env->getExtension("native_profiler");
        $__internal_cfe51c45d763ac855aed6c423ed6680a6d0b424c90a4fccf93fdab11a0c4fb54->enter($__internal_cfe51c45d763ac855aed6c423ed6680a6d0b424c90a4fccf93fdab11a0c4fb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cfe51c45d763ac855aed6c423ed6680a6d0b424c90a4fccf93fdab11a0c4fb54->leave($__internal_cfe51c45d763ac855aed6c423ed6680a6d0b424c90a4fccf93fdab11a0c4fb54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
