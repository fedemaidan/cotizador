<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0fd39d2fd94faeb70a74fee941721a0b59c5be41255377428614337cfbd7bb40 extends Twig_Template
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
        $__internal_69bfee50934b1f2d05c99d3af7d1ce936f4b1c56e689e10e44ed171a366c38a1 = $this->env->getExtension("native_profiler");
        $__internal_69bfee50934b1f2d05c99d3af7d1ce936f4b1c56e689e10e44ed171a366c38a1->enter($__internal_69bfee50934b1f2d05c99d3af7d1ce936f4b1c56e689e10e44ed171a366c38a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_69bfee50934b1f2d05c99d3af7d1ce936f4b1c56e689e10e44ed171a366c38a1->leave($__internal_69bfee50934b1f2d05c99d3af7d1ce936f4b1c56e689e10e44ed171a366c38a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
