<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_948be1bc977bda0c8326019958b602acdefa8e6feab59406d5802f942a6e59aa extends Twig_Template
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
        $__internal_497782e5dc7f05098eda61be46ded3a5d0947ef50b1d59aa210f54c5501a4772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497782e5dc7f05098eda61be46ded3a5d0947ef50b1d59aa210f54c5501a4772->enter($__internal_497782e5dc7f05098eda61be46ded3a5d0947ef50b1d59aa210f54c5501a4772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d36d8993f89ef22ae551ee7d5170f2cf1fa5cde99e4fb1ee926562428bc2e8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36d8993f89ef22ae551ee7d5170f2cf1fa5cde99e4fb1ee926562428bc2e8dc->enter($__internal_d36d8993f89ef22ae551ee7d5170f2cf1fa5cde99e4fb1ee926562428bc2e8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_497782e5dc7f05098eda61be46ded3a5d0947ef50b1d59aa210f54c5501a4772->leave($__internal_497782e5dc7f05098eda61be46ded3a5d0947ef50b1d59aa210f54c5501a4772_prof);

        
        $__internal_d36d8993f89ef22ae551ee7d5170f2cf1fa5cde99e4fb1ee926562428bc2e8dc->leave($__internal_d36d8993f89ef22ae551ee7d5170f2cf1fa5cde99e4fb1ee926562428bc2e8dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
