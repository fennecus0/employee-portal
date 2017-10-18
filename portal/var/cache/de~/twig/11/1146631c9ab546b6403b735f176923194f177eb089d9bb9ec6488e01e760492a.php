<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_2497c4fbd0859c6bc5f750b3b44a4d96d2fed5dbf942dea1cb1688f2d06432a5 extends Twig_Template
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
        $__internal_5c59335debcae6d2eb50b92a4f7d13380b59099614c23bf5e5797479ec21059b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c59335debcae6d2eb50b92a4f7d13380b59099614c23bf5e5797479ec21059b->enter($__internal_5c59335debcae6d2eb50b92a4f7d13380b59099614c23bf5e5797479ec21059b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_94fcd4f58e37bb29c1ae83535b793b47fab23df60f7f29fdf9dad899ec719771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fcd4f58e37bb29c1ae83535b793b47fab23df60f7f29fdf9dad899ec719771->enter($__internal_94fcd4f58e37bb29c1ae83535b793b47fab23df60f7f29fdf9dad899ec719771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_5c59335debcae6d2eb50b92a4f7d13380b59099614c23bf5e5797479ec21059b->leave($__internal_5c59335debcae6d2eb50b92a4f7d13380b59099614c23bf5e5797479ec21059b_prof);

        
        $__internal_94fcd4f58e37bb29c1ae83535b793b47fab23df60f7f29fdf9dad899ec719771->leave($__internal_94fcd4f58e37bb29c1ae83535b793b47fab23df60f7f29fdf9dad899ec719771_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
