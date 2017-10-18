<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_785d14ff4eb392a9aeb6f39c5ca4b4fc07592900c6246b3865821c49bc3dc6cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae6207f32f051e877fa3ce688e3ca222fc20ec0086b251153b3e5f9bc8db96d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae6207f32f051e877fa3ce688e3ca222fc20ec0086b251153b3e5f9bc8db96d2->enter($__internal_ae6207f32f051e877fa3ce688e3ca222fc20ec0086b251153b3e5f9bc8db96d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c028d963e2546516fcfd37a801e0cf03aadaf96aa3d4604a00eae4c60f99404a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c028d963e2546516fcfd37a801e0cf03aadaf96aa3d4604a00eae4c60f99404a->enter($__internal_c028d963e2546516fcfd37a801e0cf03aadaf96aa3d4604a00eae4c60f99404a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae6207f32f051e877fa3ce688e3ca222fc20ec0086b251153b3e5f9bc8db96d2->leave($__internal_ae6207f32f051e877fa3ce688e3ca222fc20ec0086b251153b3e5f9bc8db96d2_prof);

        
        $__internal_c028d963e2546516fcfd37a801e0cf03aadaf96aa3d4604a00eae4c60f99404a->leave($__internal_c028d963e2546516fcfd37a801e0cf03aadaf96aa3d4604a00eae4c60f99404a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f48f93e59d8db065dd37e8723ddf123d927bc86a8457f6deba70a7f2846d4352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48f93e59d8db065dd37e8723ddf123d927bc86a8457f6deba70a7f2846d4352->enter($__internal_f48f93e59d8db065dd37e8723ddf123d927bc86a8457f6deba70a7f2846d4352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4a3c4fb93548c81c64a06c0aff8244cc92126378f7f01463264e91306e679678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3c4fb93548c81c64a06c0aff8244cc92126378f7f01463264e91306e679678->enter($__internal_4a3c4fb93548c81c64a06c0aff8244cc92126378f7f01463264e91306e679678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4a3c4fb93548c81c64a06c0aff8244cc92126378f7f01463264e91306e679678->leave($__internal_4a3c4fb93548c81c64a06c0aff8244cc92126378f7f01463264e91306e679678_prof);

        
        $__internal_f48f93e59d8db065dd37e8723ddf123d927bc86a8457f6deba70a7f2846d4352->leave($__internal_f48f93e59d8db065dd37e8723ddf123d927bc86a8457f6deba70a7f2846d4352_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb6fdc017c3ad8885405c44a7472e8dc8545122e6a2cd8a24653f3ae82f91d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb6fdc017c3ad8885405c44a7472e8dc8545122e6a2cd8a24653f3ae82f91d2e->enter($__internal_bb6fdc017c3ad8885405c44a7472e8dc8545122e6a2cd8a24653f3ae82f91d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d7c25a7a0d3b1742b016657759bed7acf3c59ec97612fb1830a7cab8910f184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7c25a7a0d3b1742b016657759bed7acf3c59ec97612fb1830a7cab8910f184->enter($__internal_0d7c25a7a0d3b1742b016657759bed7acf3c59ec97612fb1830a7cab8910f184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_0d7c25a7a0d3b1742b016657759bed7acf3c59ec97612fb1830a7cab8910f184->leave($__internal_0d7c25a7a0d3b1742b016657759bed7acf3c59ec97612fb1830a7cab8910f184_prof);

        
        $__internal_bb6fdc017c3ad8885405c44a7472e8dc8545122e6a2cd8a24653f3ae82f91d2e->leave($__internal_bb6fdc017c3ad8885405c44a7472e8dc8545122e6a2cd8a24653f3ae82f91d2e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
