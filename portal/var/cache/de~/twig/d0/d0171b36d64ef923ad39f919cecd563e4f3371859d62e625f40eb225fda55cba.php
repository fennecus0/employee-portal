<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_74e5815962cb897727be75f9745fb73b34c5797abe5466edd90d54831695f99a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f4454fde2848a033186f9a9e31ea47352993b736b8bac883c4638ffd7827bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4454fde2848a033186f9a9e31ea47352993b736b8bac883c4638ffd7827bde->enter($__internal_6f4454fde2848a033186f9a9e31ea47352993b736b8bac883c4638ffd7827bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_622d6884f00a759f039b4405493aa0f67f96fbc3f8b125f30a8ddf4d704bdea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622d6884f00a759f039b4405493aa0f67f96fbc3f8b125f30a8ddf4d704bdea3->enter($__internal_622d6884f00a759f039b4405493aa0f67f96fbc3f8b125f30a8ddf4d704bdea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f4454fde2848a033186f9a9e31ea47352993b736b8bac883c4638ffd7827bde->leave($__internal_6f4454fde2848a033186f9a9e31ea47352993b736b8bac883c4638ffd7827bde_prof);

        
        $__internal_622d6884f00a759f039b4405493aa0f67f96fbc3f8b125f30a8ddf4d704bdea3->leave($__internal_622d6884f00a759f039b4405493aa0f67f96fbc3f8b125f30a8ddf4d704bdea3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fec82bb74115d0ecf39abf2d1017afec043cce1e59cf4ffe057733152dd9512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fec82bb74115d0ecf39abf2d1017afec043cce1e59cf4ffe057733152dd9512->enter($__internal_5fec82bb74115d0ecf39abf2d1017afec043cce1e59cf4ffe057733152dd9512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e6964f977244dd1e84ae8685175569ec8e8642f6dc60a8a56d5528c131fe5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6964f977244dd1e84ae8685175569ec8e8642f6dc60a8a56d5528c131fe5b1->enter($__internal_6e6964f977244dd1e84ae8685175569ec8e8642f6dc60a8a56d5528c131fe5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6e6964f977244dd1e84ae8685175569ec8e8642f6dc60a8a56d5528c131fe5b1->leave($__internal_6e6964f977244dd1e84ae8685175569ec8e8642f6dc60a8a56d5528c131fe5b1_prof);

        
        $__internal_5fec82bb74115d0ecf39abf2d1017afec043cce1e59cf4ffe057733152dd9512->leave($__internal_5fec82bb74115d0ecf39abf2d1017afec043cce1e59cf4ffe057733152dd9512_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_419522a3f08a30a1065dc65fa8bff51c8f2dce39f2225609329f5f2efb28cb67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_419522a3f08a30a1065dc65fa8bff51c8f2dce39f2225609329f5f2efb28cb67->enter($__internal_419522a3f08a30a1065dc65fa8bff51c8f2dce39f2225609329f5f2efb28cb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3992629d314d30489c399ad42cb0de995bac9558979978168f0b669d8e85c519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3992629d314d30489c399ad42cb0de995bac9558979978168f0b669d8e85c519->enter($__internal_3992629d314d30489c399ad42cb0de995bac9558979978168f0b669d8e85c519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3992629d314d30489c399ad42cb0de995bac9558979978168f0b669d8e85c519->leave($__internal_3992629d314d30489c399ad42cb0de995bac9558979978168f0b669d8e85c519_prof);

        
        $__internal_419522a3f08a30a1065dc65fa8bff51c8f2dce39f2225609329f5f2efb28cb67->leave($__internal_419522a3f08a30a1065dc65fa8bff51c8f2dce39f2225609329f5f2efb28cb67_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
