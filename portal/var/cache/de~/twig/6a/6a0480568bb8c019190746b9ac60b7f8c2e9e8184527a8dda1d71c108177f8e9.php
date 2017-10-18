<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_0c3af27c2c4735fd3fbcc1b4da287335e2eea8ec8d940aa5a8064e953eb34844 extends Twig_Template
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
        $__internal_e2e12fb2881ed6cfa95dcea1fe82f7689cd2b547ab75e4a9c432b7db2aa97e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e12fb2881ed6cfa95dcea1fe82f7689cd2b547ab75e4a9c432b7db2aa97e5a->enter($__internal_e2e12fb2881ed6cfa95dcea1fe82f7689cd2b547ab75e4a9c432b7db2aa97e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_0cbbc4472155b9587199ffc5ee9b88b554c08b7ef4d1c4aa280141bd43b0577b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbbc4472155b9587199ffc5ee9b88b554c08b7ef4d1c4aa280141bd43b0577b->enter($__internal_0cbbc4472155b9587199ffc5ee9b88b554c08b7ef4d1c4aa280141bd43b0577b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e2e12fb2881ed6cfa95dcea1fe82f7689cd2b547ab75e4a9c432b7db2aa97e5a->leave($__internal_e2e12fb2881ed6cfa95dcea1fe82f7689cd2b547ab75e4a9c432b7db2aa97e5a_prof);

        
        $__internal_0cbbc4472155b9587199ffc5ee9b88b554c08b7ef4d1c4aa280141bd43b0577b->leave($__internal_0cbbc4472155b9587199ffc5ee9b88b554c08b7ef4d1c4aa280141bd43b0577b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
