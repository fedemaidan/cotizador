<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_49dd20821e21e6cb8b488681a07aa193d9536fc44a0d2e722323bfdc4f498097 extends Twig_Template
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
        $__internal_5910114f8d5ccffb3c1dc4d14664850606e08e0091f94dc3d58d53e04710ad8e = $this->env->getExtension("native_profiler");
        $__internal_5910114f8d5ccffb3c1dc4d14664850606e08e0091f94dc3d58d53e04710ad8e->enter($__internal_5910114f8d5ccffb3c1dc4d14664850606e08e0091f94dc3d58d53e04710ad8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5910114f8d5ccffb3c1dc4d14664850606e08e0091f94dc3d58d53e04710ad8e->leave($__internal_5910114f8d5ccffb3c1dc4d14664850606e08e0091f94dc3d58d53e04710ad8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
