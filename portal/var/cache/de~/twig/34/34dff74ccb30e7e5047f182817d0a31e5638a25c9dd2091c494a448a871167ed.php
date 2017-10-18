<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_223f3686a7c0f88e472c3abbe050f530bf98cc1bdb7138e43910941e4623b193 extends Twig_Template
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
        $__internal_6d4c3373648ea35b360c6effd09c8ae0c6ec561ba1beed95d210f0079302671d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4c3373648ea35b360c6effd09c8ae0c6ec561ba1beed95d210f0079302671d->enter($__internal_6d4c3373648ea35b360c6effd09c8ae0c6ec561ba1beed95d210f0079302671d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_64a5c6fdeb1d9aa4e0f05e1e27056ff0ae9713dcc347671b9714829e82ea0e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a5c6fdeb1d9aa4e0f05e1e27056ff0ae9713dcc347671b9714829e82ea0e7d->enter($__internal_64a5c6fdeb1d9aa4e0f05e1e27056ff0ae9713dcc347671b9714829e82ea0e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6d4c3373648ea35b360c6effd09c8ae0c6ec561ba1beed95d210f0079302671d->leave($__internal_6d4c3373648ea35b360c6effd09c8ae0c6ec561ba1beed95d210f0079302671d_prof);

        
        $__internal_64a5c6fdeb1d9aa4e0f05e1e27056ff0ae9713dcc347671b9714829e82ea0e7d->leave($__internal_64a5c6fdeb1d9aa4e0f05e1e27056ff0ae9713dcc347671b9714829e82ea0e7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
