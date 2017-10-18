<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_da7692cc12846f6aeb0cd8f040f244c6d013e594b89c6f9fe65e8e45fa0cc50c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_beb05386b2f27927f1788df82ab57d1471cfe2e5953871eb475632c438658c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb05386b2f27927f1788df82ab57d1471cfe2e5953871eb475632c438658c92->enter($__internal_beb05386b2f27927f1788df82ab57d1471cfe2e5953871eb475632c438658c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_fbe48f93ebcc50d52c9a9b33ad78e7b6476bb64a86e844a1a57ea973dd0429c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe48f93ebcc50d52c9a9b33ad78e7b6476bb64a86e844a1a57ea973dd0429c7->enter($__internal_fbe48f93ebcc50d52c9a9b33ad78e7b6476bb64a86e844a1a57ea973dd0429c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_beb05386b2f27927f1788df82ab57d1471cfe2e5953871eb475632c438658c92->leave($__internal_beb05386b2f27927f1788df82ab57d1471cfe2e5953871eb475632c438658c92_prof);

        
        $__internal_fbe48f93ebcc50d52c9a9b33ad78e7b6476bb64a86e844a1a57ea973dd0429c7->leave($__internal_fbe48f93ebcc50d52c9a9b33ad78e7b6476bb64a86e844a1a57ea973dd0429c7_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0b8772fbab2e9e8513565d9df88801697a516935dcc1c8419d949b474b35f1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8772fbab2e9e8513565d9df88801697a516935dcc1c8419d949b474b35f1a2->enter($__internal_0b8772fbab2e9e8513565d9df88801697a516935dcc1c8419d949b474b35f1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_551e8dfda5dc08f1e89d56c2a3a8a3ee1174245b68815e750f515fa2f2f0d804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551e8dfda5dc08f1e89d56c2a3a8a3ee1174245b68815e750f515fa2f2f0d804->enter($__internal_551e8dfda5dc08f1e89d56c2a3a8a3ee1174245b68815e750f515fa2f2f0d804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_551e8dfda5dc08f1e89d56c2a3a8a3ee1174245b68815e750f515fa2f2f0d804->leave($__internal_551e8dfda5dc08f1e89d56c2a3a8a3ee1174245b68815e750f515fa2f2f0d804_prof);

        
        $__internal_0b8772fbab2e9e8513565d9df88801697a516935dcc1c8419d949b474b35f1a2->leave($__internal_0b8772fbab2e9e8513565d9df88801697a516935dcc1c8419d949b474b35f1a2_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28fff15eb7115e90a507e97e198dc1c312421374f67531dbd75eaf506ae0e5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fff15eb7115e90a507e97e198dc1c312421374f67531dbd75eaf506ae0e5dc->enter($__internal_28fff15eb7115e90a507e97e198dc1c312421374f67531dbd75eaf506ae0e5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9525aa38c570be05694f4e5816354b35fe85622d4fda4fd14b703c05040df5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9525aa38c570be05694f4e5816354b35fe85622d4fda4fd14b703c05040df5fa->enter($__internal_9525aa38c570be05694f4e5816354b35fe85622d4fda4fd14b703c05040df5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9525aa38c570be05694f4e5816354b35fe85622d4fda4fd14b703c05040df5fa->leave($__internal_9525aa38c570be05694f4e5816354b35fe85622d4fda4fd14b703c05040df5fa_prof);

        
        $__internal_28fff15eb7115e90a507e97e198dc1c312421374f67531dbd75eaf506ae0e5dc->leave($__internal_28fff15eb7115e90a507e97e198dc1c312421374f67531dbd75eaf506ae0e5dc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
