<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c544bda79c8fbc73c94d05bc6c39f99274504cb9b978ccdedb8c9ee592799c52 extends Twig_Template
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
        $__internal_c9019c7305e96ca0db38a6bb01163ab1d8e028a404d2f28f8b86ca54a4c6f1ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9019c7305e96ca0db38a6bb01163ab1d8e028a404d2f28f8b86ca54a4c6f1ba->enter($__internal_c9019c7305e96ca0db38a6bb01163ab1d8e028a404d2f28f8b86ca54a4c6f1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_052a07afbd16f3a78c0f68415eb07669a3a14e10ca7b36aab4fd39d14c51d2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052a07afbd16f3a78c0f68415eb07669a3a14e10ca7b36aab4fd39d14c51d2bd->enter($__internal_052a07afbd16f3a78c0f68415eb07669a3a14e10ca7b36aab4fd39d14c51d2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c9019c7305e96ca0db38a6bb01163ab1d8e028a404d2f28f8b86ca54a4c6f1ba->leave($__internal_c9019c7305e96ca0db38a6bb01163ab1d8e028a404d2f28f8b86ca54a4c6f1ba_prof);

        
        $__internal_052a07afbd16f3a78c0f68415eb07669a3a14e10ca7b36aab4fd39d14c51d2bd->leave($__internal_052a07afbd16f3a78c0f68415eb07669a3a14e10ca7b36aab4fd39d14c51d2bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
