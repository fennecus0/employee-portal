<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_bde599a19445709fbcf6a32c35bdc1e6dd25564d2d616a8628b32d9fac0d6e5e extends Twig_Template
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
        $__internal_d8667115fdd21fd1497a8fa54a99f64cb41f633cf213916fb8f4efa827c266d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8667115fdd21fd1497a8fa54a99f64cb41f633cf213916fb8f4efa827c266d6->enter($__internal_d8667115fdd21fd1497a8fa54a99f64cb41f633cf213916fb8f4efa827c266d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_61cb311d1a86fc31db357b72a38c9ec1b37fe2cf3a0ff9b817b2b5ba6ceedf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cb311d1a86fc31db357b72a38c9ec1b37fe2cf3a0ff9b817b2b5ba6ceedf00->enter($__internal_61cb311d1a86fc31db357b72a38c9ec1b37fe2cf3a0ff9b817b2b5ba6ceedf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_d8667115fdd21fd1497a8fa54a99f64cb41f633cf213916fb8f4efa827c266d6->leave($__internal_d8667115fdd21fd1497a8fa54a99f64cb41f633cf213916fb8f4efa827c266d6_prof);

        
        $__internal_61cb311d1a86fc31db357b72a38c9ec1b37fe2cf3a0ff9b817b2b5ba6ceedf00->leave($__internal_61cb311d1a86fc31db357b72a38c9ec1b37fe2cf3a0ff9b817b2b5ba6ceedf00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
