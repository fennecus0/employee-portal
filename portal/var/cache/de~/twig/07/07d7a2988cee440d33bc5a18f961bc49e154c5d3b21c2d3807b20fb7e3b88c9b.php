<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8407182f81320ef0b0b2f40f899ddd977baf5a4089d1c1931f61233db7a1ef7f extends Twig_Template
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
        $__internal_2d49741dcc7c5415041ffeaa7d1265440bcf59c3f58ad88ea397217a6a81854a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d49741dcc7c5415041ffeaa7d1265440bcf59c3f58ad88ea397217a6a81854a->enter($__internal_2d49741dcc7c5415041ffeaa7d1265440bcf59c3f58ad88ea397217a6a81854a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c6741ae456c7b5c8839e3c12e4ba08eea0d8f37b7062c4894905de2256d600a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6741ae456c7b5c8839e3c12e4ba08eea0d8f37b7062c4894905de2256d600a5->enter($__internal_c6741ae456c7b5c8839e3c12e4ba08eea0d8f37b7062c4894905de2256d600a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2d49741dcc7c5415041ffeaa7d1265440bcf59c3f58ad88ea397217a6a81854a->leave($__internal_2d49741dcc7c5415041ffeaa7d1265440bcf59c3f58ad88ea397217a6a81854a_prof);

        
        $__internal_c6741ae456c7b5c8839e3c12e4ba08eea0d8f37b7062c4894905de2256d600a5->leave($__internal_c6741ae456c7b5c8839e3c12e4ba08eea0d8f37b7062c4894905de2256d600a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
