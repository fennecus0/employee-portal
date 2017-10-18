<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_081aaeceb4c6efde9c54ed1a72e2d35fa526d3e84080a1150cfd05837630ad30 extends Twig_Template
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
        $__internal_43cef21b422db6c78c6c84ed62e256a175872815813232f9f7bae36a5174f478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43cef21b422db6c78c6c84ed62e256a175872815813232f9f7bae36a5174f478->enter($__internal_43cef21b422db6c78c6c84ed62e256a175872815813232f9f7bae36a5174f478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_82766d9f6439e3d5d96079f70b09be28855ceda78b6644ca76f3622cfcd92156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82766d9f6439e3d5d96079f70b09be28855ceda78b6644ca76f3622cfcd92156->enter($__internal_82766d9f6439e3d5d96079f70b09be28855ceda78b6644ca76f3622cfcd92156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_43cef21b422db6c78c6c84ed62e256a175872815813232f9f7bae36a5174f478->leave($__internal_43cef21b422db6c78c6c84ed62e256a175872815813232f9f7bae36a5174f478_prof);

        
        $__internal_82766d9f6439e3d5d96079f70b09be28855ceda78b6644ca76f3622cfcd92156->leave($__internal_82766d9f6439e3d5d96079f70b09be28855ceda78b6644ca76f3622cfcd92156_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
