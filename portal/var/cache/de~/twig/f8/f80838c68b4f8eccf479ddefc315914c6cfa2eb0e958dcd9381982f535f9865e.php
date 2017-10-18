<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_458b34e341f7916714da046d9b2c1265e5e71aa9c5ea7baaaae5f57f21675d60 extends Twig_Template
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
        $__internal_c04b1addedc28181594d42d1ee224d6332e65976f475013ac26355e29b31257b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04b1addedc28181594d42d1ee224d6332e65976f475013ac26355e29b31257b->enter($__internal_c04b1addedc28181594d42d1ee224d6332e65976f475013ac26355e29b31257b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_885b3a0d9e1f2e73c996257e3d8303f8e7e2a8a78846e9048cf272d78779bc34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885b3a0d9e1f2e73c996257e3d8303f8e7e2a8a78846e9048cf272d78779bc34->enter($__internal_885b3a0d9e1f2e73c996257e3d8303f8e7e2a8a78846e9048cf272d78779bc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c04b1addedc28181594d42d1ee224d6332e65976f475013ac26355e29b31257b->leave($__internal_c04b1addedc28181594d42d1ee224d6332e65976f475013ac26355e29b31257b_prof);

        
        $__internal_885b3a0d9e1f2e73c996257e3d8303f8e7e2a8a78846e9048cf272d78779bc34->leave($__internal_885b3a0d9e1f2e73c996257e3d8303f8e7e2a8a78846e9048cf272d78779bc34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
