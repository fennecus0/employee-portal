<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_0d3a9c02ede130009f10177464ccb1e2dbafba8ff61924d39efc51183f56fd16 extends Twig_Template
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
        $__internal_11e021309ab1cb8fd95a6c7fa77c5c1d213969e01b4724a033aaa981c3a50de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e021309ab1cb8fd95a6c7fa77c5c1d213969e01b4724a033aaa981c3a50de2->enter($__internal_11e021309ab1cb8fd95a6c7fa77c5c1d213969e01b4724a033aaa981c3a50de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_676842b334c8b9111c19021025d1dd08286051a2cd969ae19d79ca3ee21c100a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676842b334c8b9111c19021025d1dd08286051a2cd969ae19d79ca3ee21c100a->enter($__internal_676842b334c8b9111c19021025d1dd08286051a2cd969ae19d79ca3ee21c100a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_11e021309ab1cb8fd95a6c7fa77c5c1d213969e01b4724a033aaa981c3a50de2->leave($__internal_11e021309ab1cb8fd95a6c7fa77c5c1d213969e01b4724a033aaa981c3a50de2_prof);

        
        $__internal_676842b334c8b9111c19021025d1dd08286051a2cd969ae19d79ca3ee21c100a->leave($__internal_676842b334c8b9111c19021025d1dd08286051a2cd969ae19d79ca3ee21c100a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
