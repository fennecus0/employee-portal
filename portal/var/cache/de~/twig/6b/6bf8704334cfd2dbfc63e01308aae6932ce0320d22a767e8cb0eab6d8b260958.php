<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c88abd5defe208b16b0bbf890170c572537d76673fa69ecc7469a06d3ff0c17f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_44706fbc14a6ad3c38875c7b5cfc020811d1af45278051e41005a99a109b167a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44706fbc14a6ad3c38875c7b5cfc020811d1af45278051e41005a99a109b167a->enter($__internal_44706fbc14a6ad3c38875c7b5cfc020811d1af45278051e41005a99a109b167a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9b8ea0878b408ed20702c1f17f25c48b121a74235f551ce5db5b7726f9a47063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8ea0878b408ed20702c1f17f25c48b121a74235f551ce5db5b7726f9a47063->enter($__internal_9b8ea0878b408ed20702c1f17f25c48b121a74235f551ce5db5b7726f9a47063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44706fbc14a6ad3c38875c7b5cfc020811d1af45278051e41005a99a109b167a->leave($__internal_44706fbc14a6ad3c38875c7b5cfc020811d1af45278051e41005a99a109b167a_prof);

        
        $__internal_9b8ea0878b408ed20702c1f17f25c48b121a74235f551ce5db5b7726f9a47063->leave($__internal_9b8ea0878b408ed20702c1f17f25c48b121a74235f551ce5db5b7726f9a47063_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ff47be21e2e5fdc19c8dd1a9e1209507ed2f8a9329a1526965e16c7d84ee8a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff47be21e2e5fdc19c8dd1a9e1209507ed2f8a9329a1526965e16c7d84ee8a0->enter($__internal_8ff47be21e2e5fdc19c8dd1a9e1209507ed2f8a9329a1526965e16c7d84ee8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8047dd32fecb40aa4cd3a447d7e55e297ed1a9cbfb6b5d0fb1a242c77b6d52c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8047dd32fecb40aa4cd3a447d7e55e297ed1a9cbfb6b5d0fb1a242c77b6d52c7->enter($__internal_8047dd32fecb40aa4cd3a447d7e55e297ed1a9cbfb6b5d0fb1a242c77b6d52c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8047dd32fecb40aa4cd3a447d7e55e297ed1a9cbfb6b5d0fb1a242c77b6d52c7->leave($__internal_8047dd32fecb40aa4cd3a447d7e55e297ed1a9cbfb6b5d0fb1a242c77b6d52c7_prof);

        
        $__internal_8ff47be21e2e5fdc19c8dd1a9e1209507ed2f8a9329a1526965e16c7d84ee8a0->leave($__internal_8ff47be21e2e5fdc19c8dd1a9e1209507ed2f8a9329a1526965e16c7d84ee8a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_970b5e9e4e2cd89f49d21756039f671257578554d570bd0d1f0cc437c11aad69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970b5e9e4e2cd89f49d21756039f671257578554d570bd0d1f0cc437c11aad69->enter($__internal_970b5e9e4e2cd89f49d21756039f671257578554d570bd0d1f0cc437c11aad69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2c4af8fb6c7586604ec501aedb3d449773de09090e730af14be36a93cf2a9346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4af8fb6c7586604ec501aedb3d449773de09090e730af14be36a93cf2a9346->enter($__internal_2c4af8fb6c7586604ec501aedb3d449773de09090e730af14be36a93cf2a9346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c4af8fb6c7586604ec501aedb3d449773de09090e730af14be36a93cf2a9346->leave($__internal_2c4af8fb6c7586604ec501aedb3d449773de09090e730af14be36a93cf2a9346_prof);

        
        $__internal_970b5e9e4e2cd89f49d21756039f671257578554d570bd0d1f0cc437c11aad69->leave($__internal_970b5e9e4e2cd89f49d21756039f671257578554d570bd0d1f0cc437c11aad69_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ec539b04afccad7386bb83f6e9c5dc22516e5e38d8e6c3c1d4776bc4fb8bdd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec539b04afccad7386bb83f6e9c5dc22516e5e38d8e6c3c1d4776bc4fb8bdd7->enter($__internal_4ec539b04afccad7386bb83f6e9c5dc22516e5e38d8e6c3c1d4776bc4fb8bdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9dcf63049271ba3841ec8d7e978d0f518f38b0580a546edca16e806a7c134cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dcf63049271ba3841ec8d7e978d0f518f38b0580a546edca16e806a7c134cab->enter($__internal_9dcf63049271ba3841ec8d7e978d0f518f38b0580a546edca16e806a7c134cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9dcf63049271ba3841ec8d7e978d0f518f38b0580a546edca16e806a7c134cab->leave($__internal_9dcf63049271ba3841ec8d7e978d0f518f38b0580a546edca16e806a7c134cab_prof);

        
        $__internal_4ec539b04afccad7386bb83f6e9c5dc22516e5e38d8e6c3c1d4776bc4fb8bdd7->leave($__internal_4ec539b04afccad7386bb83f6e9c5dc22516e5e38d8e6c3c1d4776bc4fb8bdd7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
