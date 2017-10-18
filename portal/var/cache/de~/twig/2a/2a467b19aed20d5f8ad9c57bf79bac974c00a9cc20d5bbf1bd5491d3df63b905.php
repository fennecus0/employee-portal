<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5130216e8116c57b19adc99e9c80c7ba09f4a2718b039eb84a344d93d3be8943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e73c8d24fa898b9482928316e69fe5aa6861730301c6e932868e65ae7ec2e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e73c8d24fa898b9482928316e69fe5aa6861730301c6e932868e65ae7ec2e98->enter($__internal_1e73c8d24fa898b9482928316e69fe5aa6861730301c6e932868e65ae7ec2e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ef3561ecd3afc28c0eedfb3941086ad030d67d1270f7094f604d56ffeac95515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3561ecd3afc28c0eedfb3941086ad030d67d1270f7094f604d56ffeac95515->enter($__internal_ef3561ecd3afc28c0eedfb3941086ad030d67d1270f7094f604d56ffeac95515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e73c8d24fa898b9482928316e69fe5aa6861730301c6e932868e65ae7ec2e98->leave($__internal_1e73c8d24fa898b9482928316e69fe5aa6861730301c6e932868e65ae7ec2e98_prof);

        
        $__internal_ef3561ecd3afc28c0eedfb3941086ad030d67d1270f7094f604d56ffeac95515->leave($__internal_ef3561ecd3afc28c0eedfb3941086ad030d67d1270f7094f604d56ffeac95515_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe4c6f97d6d4bdba9978a51ac559adfe29446db5945c1401aa3f422d9890ba41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4c6f97d6d4bdba9978a51ac559adfe29446db5945c1401aa3f422d9890ba41->enter($__internal_fe4c6f97d6d4bdba9978a51ac559adfe29446db5945c1401aa3f422d9890ba41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0bc3c9352fda5d79e50fdd08b344ffbaa222902ef67290ad62ae20197c02b110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc3c9352fda5d79e50fdd08b344ffbaa222902ef67290ad62ae20197c02b110->enter($__internal_0bc3c9352fda5d79e50fdd08b344ffbaa222902ef67290ad62ae20197c02b110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0bc3c9352fda5d79e50fdd08b344ffbaa222902ef67290ad62ae20197c02b110->leave($__internal_0bc3c9352fda5d79e50fdd08b344ffbaa222902ef67290ad62ae20197c02b110_prof);

        
        $__internal_fe4c6f97d6d4bdba9978a51ac559adfe29446db5945c1401aa3f422d9890ba41->leave($__internal_fe4c6f97d6d4bdba9978a51ac559adfe29446db5945c1401aa3f422d9890ba41_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2339c26b7385f576990055736abf7b0900e4ddca1f80eb67c7e139ed8a339852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2339c26b7385f576990055736abf7b0900e4ddca1f80eb67c7e139ed8a339852->enter($__internal_2339c26b7385f576990055736abf7b0900e4ddca1f80eb67c7e139ed8a339852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_52f99a122b9ac9e5beacde6a9e8a91ca29072bbd2a54feebbacb96c0acb65b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f99a122b9ac9e5beacde6a9e8a91ca29072bbd2a54feebbacb96c0acb65b3e->enter($__internal_52f99a122b9ac9e5beacde6a9e8a91ca29072bbd2a54feebbacb96c0acb65b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_52f99a122b9ac9e5beacde6a9e8a91ca29072bbd2a54feebbacb96c0acb65b3e->leave($__internal_52f99a122b9ac9e5beacde6a9e8a91ca29072bbd2a54feebbacb96c0acb65b3e_prof);

        
        $__internal_2339c26b7385f576990055736abf7b0900e4ddca1f80eb67c7e139ed8a339852->leave($__internal_2339c26b7385f576990055736abf7b0900e4ddca1f80eb67c7e139ed8a339852_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ac0f5611be7f4ae582de14d792f7a4392910ff7624886f570e6e49045efdedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac0f5611be7f4ae582de14d792f7a4392910ff7624886f570e6e49045efdedd->enter($__internal_6ac0f5611be7f4ae582de14d792f7a4392910ff7624886f570e6e49045efdedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_11b34e8d435dbd1f7f2aa82575449700927d637376b81a984dad6708d08c26ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b34e8d435dbd1f7f2aa82575449700927d637376b81a984dad6708d08c26ed->enter($__internal_11b34e8d435dbd1f7f2aa82575449700927d637376b81a984dad6708d08c26ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_11b34e8d435dbd1f7f2aa82575449700927d637376b81a984dad6708d08c26ed->leave($__internal_11b34e8d435dbd1f7f2aa82575449700927d637376b81a984dad6708d08c26ed_prof);

        
        $__internal_6ac0f5611be7f4ae582de14d792f7a4392910ff7624886f570e6e49045efdedd->leave($__internal_6ac0f5611be7f4ae582de14d792f7a4392910ff7624886f570e6e49045efdedd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
