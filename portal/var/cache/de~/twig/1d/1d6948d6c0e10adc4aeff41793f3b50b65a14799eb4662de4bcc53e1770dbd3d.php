<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ef59430e87c5bc70cdc99abb7d711cf0ff4859717ef18b2b42d1d219b8d0acc3 extends Twig_Template
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
        $__internal_1f0ccd3faec4475cdfb48c490cf639f45f95494f64d2120e30db3aa50ef9d95f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f0ccd3faec4475cdfb48c490cf639f45f95494f64d2120e30db3aa50ef9d95f->enter($__internal_1f0ccd3faec4475cdfb48c490cf639f45f95494f64d2120e30db3aa50ef9d95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_98b9f49b8961789e7b60048bc3feecc53b43d227a18e4ec42a439e582936ffe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b9f49b8961789e7b60048bc3feecc53b43d227a18e4ec42a439e582936ffe5->enter($__internal_98b9f49b8961789e7b60048bc3feecc53b43d227a18e4ec42a439e582936ffe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1f0ccd3faec4475cdfb48c490cf639f45f95494f64d2120e30db3aa50ef9d95f->leave($__internal_1f0ccd3faec4475cdfb48c490cf639f45f95494f64d2120e30db3aa50ef9d95f_prof);

        
        $__internal_98b9f49b8961789e7b60048bc3feecc53b43d227a18e4ec42a439e582936ffe5->leave($__internal_98b9f49b8961789e7b60048bc3feecc53b43d227a18e4ec42a439e582936ffe5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
