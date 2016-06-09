<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1e798d510257be7d6ebadcabaeec52825bbd388ccfbc6441c27cd12c2abbaf19 extends Twig_Template
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
        $__internal_addfdc440066bb6899917375862eead301bd482d0dfbbcd4ec4fbdc91b4ce30e = $this->env->getExtension("native_profiler");
        $__internal_addfdc440066bb6899917375862eead301bd482d0dfbbcd4ec4fbdc91b4ce30e->enter($__internal_addfdc440066bb6899917375862eead301bd482d0dfbbcd4ec4fbdc91b4ce30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_addfdc440066bb6899917375862eead301bd482d0dfbbcd4ec4fbdc91b4ce30e->leave($__internal_addfdc440066bb6899917375862eead301bd482d0dfbbcd4ec4fbdc91b4ce30e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
