<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4599ef4616fecb268dbde7d72f920a250ea7a5034ea14446b01a274ba428ab31 extends Twig_Template
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
        $__internal_46dd3de10480b04d3c7e08a03629d3197da2d21ce26f07c317550a54360607b6 = $this->env->getExtension("native_profiler");
        $__internal_46dd3de10480b04d3c7e08a03629d3197da2d21ce26f07c317550a54360607b6->enter($__internal_46dd3de10480b04d3c7e08a03629d3197da2d21ce26f07c317550a54360607b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_46dd3de10480b04d3c7e08a03629d3197da2d21ce26f07c317550a54360607b6->leave($__internal_46dd3de10480b04d3c7e08a03629d3197da2d21ce26f07c317550a54360607b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
