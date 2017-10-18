<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4c5a057b60d64c87fdd60784b9f81c04e0def3130ac2371ef100062064521656 extends Twig_Template
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
        $__internal_a32c91f9bfb102336295118f8c341a3c31533306f5e7ef63b461db967ff6ba33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32c91f9bfb102336295118f8c341a3c31533306f5e7ef63b461db967ff6ba33->enter($__internal_a32c91f9bfb102336295118f8c341a3c31533306f5e7ef63b461db967ff6ba33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_88ee04ea65db90c4339d982fda977f2df8f5c5c02358280cfc2a7ab8afb8b11e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ee04ea65db90c4339d982fda977f2df8f5c5c02358280cfc2a7ab8afb8b11e->enter($__internal_88ee04ea65db90c4339d982fda977f2df8f5c5c02358280cfc2a7ab8afb8b11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a32c91f9bfb102336295118f8c341a3c31533306f5e7ef63b461db967ff6ba33->leave($__internal_a32c91f9bfb102336295118f8c341a3c31533306f5e7ef63b461db967ff6ba33_prof);

        
        $__internal_88ee04ea65db90c4339d982fda977f2df8f5c5c02358280cfc2a7ab8afb8b11e->leave($__internal_88ee04ea65db90c4339d982fda977f2df8f5c5c02358280cfc2a7ab8afb8b11e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
