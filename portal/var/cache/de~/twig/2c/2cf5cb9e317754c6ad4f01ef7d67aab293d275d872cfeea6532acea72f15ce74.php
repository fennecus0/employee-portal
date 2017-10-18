<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e18839ca4bdf0e6b48ab45b1c1fe90fd397fad81e3d61f2de76d0a07c2386aee extends Twig_Template
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
        $__internal_9725f58ea45ba92775ba8e5cc5dc8b314730bbd68ccc810b2c3becac7f6ab5f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9725f58ea45ba92775ba8e5cc5dc8b314730bbd68ccc810b2c3becac7f6ab5f9->enter($__internal_9725f58ea45ba92775ba8e5cc5dc8b314730bbd68ccc810b2c3becac7f6ab5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_aff680f2991e457daddfd741761af1c71bb8278e77a3356e6ef1d4d0721a1f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff680f2991e457daddfd741761af1c71bb8278e77a3356e6ef1d4d0721a1f67->enter($__internal_aff680f2991e457daddfd741761af1c71bb8278e77a3356e6ef1d4d0721a1f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9725f58ea45ba92775ba8e5cc5dc8b314730bbd68ccc810b2c3becac7f6ab5f9->leave($__internal_9725f58ea45ba92775ba8e5cc5dc8b314730bbd68ccc810b2c3becac7f6ab5f9_prof);

        
        $__internal_aff680f2991e457daddfd741761af1c71bb8278e77a3356e6ef1d4d0721a1f67->leave($__internal_aff680f2991e457daddfd741761af1c71bb8278e77a3356e6ef1d4d0721a1f67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
