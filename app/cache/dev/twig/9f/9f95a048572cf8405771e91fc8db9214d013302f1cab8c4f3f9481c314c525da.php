<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3e69eefff173800841ad5a034ad9b0052ab6be204c64a4014efb09bc6f649ca7 extends Twig_Template
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
        $__internal_fc35a961cff9be87cdc7b2200ae24e2e5b7415fcfbef859ac8ab0f6cda84d222 = $this->env->getExtension("native_profiler");
        $__internal_fc35a961cff9be87cdc7b2200ae24e2e5b7415fcfbef859ac8ab0f6cda84d222->enter($__internal_fc35a961cff9be87cdc7b2200ae24e2e5b7415fcfbef859ac8ab0f6cda84d222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fc35a961cff9be87cdc7b2200ae24e2e5b7415fcfbef859ac8ab0f6cda84d222->leave($__internal_fc35a961cff9be87cdc7b2200ae24e2e5b7415fcfbef859ac8ab0f6cda84d222_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
