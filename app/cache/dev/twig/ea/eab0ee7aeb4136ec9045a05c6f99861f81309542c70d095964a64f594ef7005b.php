<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d3bcc9415d473dcc221862022f1f0aea0f743a8633bab2dc444ace362bb3abb5 extends Twig_Template
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
        $__internal_80a9f6b6e648a1f422d90af8376f21ae10314dd067caa83bcda6c50fa819442d = $this->env->getExtension("native_profiler");
        $__internal_80a9f6b6e648a1f422d90af8376f21ae10314dd067caa83bcda6c50fa819442d->enter($__internal_80a9f6b6e648a1f422d90af8376f21ae10314dd067caa83bcda6c50fa819442d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_80a9f6b6e648a1f422d90af8376f21ae10314dd067caa83bcda6c50fa819442d->leave($__internal_80a9f6b6e648a1f422d90af8376f21ae10314dd067caa83bcda6c50fa819442d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
