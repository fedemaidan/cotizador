<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a97bd2d718802ec0de2897b643a8264f9592e54829ed765da376703112d11dcc extends Twig_Template
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
        $__internal_ba063965aa8d2e742e1834bbfa53f2c7766c3b04c9f50192bd26b3127245fe05 = $this->env->getExtension("native_profiler");
        $__internal_ba063965aa8d2e742e1834bbfa53f2c7766c3b04c9f50192bd26b3127245fe05->enter($__internal_ba063965aa8d2e742e1834bbfa53f2c7766c3b04c9f50192bd26b3127245fe05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ba063965aa8d2e742e1834bbfa53f2c7766c3b04c9f50192bd26b3127245fe05->leave($__internal_ba063965aa8d2e742e1834bbfa53f2c7766c3b04c9f50192bd26b3127245fe05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
