<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_300252f66d90a6775834f7f2ad4c9ec48d05738fb18ecaf7865390555e4be92a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2edaa0f881caf5dfe2f33a401955dbbe9fcb3487169865a37299cc30d55824c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2edaa0f881caf5dfe2f33a401955dbbe9fcb3487169865a37299cc30d55824c->enter($__internal_f2edaa0f881caf5dfe2f33a401955dbbe9fcb3487169865a37299cc30d55824c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2ec5dc9449300b375ed970b49e5ea21c8220c7eab062c7c3fdad9116850f268f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec5dc9449300b375ed970b49e5ea21c8220c7eab062c7c3fdad9116850f268f->enter($__internal_2ec5dc9449300b375ed970b49e5ea21c8220c7eab062c7c3fdad9116850f268f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2edaa0f881caf5dfe2f33a401955dbbe9fcb3487169865a37299cc30d55824c->leave($__internal_f2edaa0f881caf5dfe2f33a401955dbbe9fcb3487169865a37299cc30d55824c_prof);

        
        $__internal_2ec5dc9449300b375ed970b49e5ea21c8220c7eab062c7c3fdad9116850f268f->leave($__internal_2ec5dc9449300b375ed970b49e5ea21c8220c7eab062c7c3fdad9116850f268f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07af4f97a01aa4b811047f7626f4412bcfdb2a381c80e539c123a829cf8b81e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07af4f97a01aa4b811047f7626f4412bcfdb2a381c80e539c123a829cf8b81e5->enter($__internal_07af4f97a01aa4b811047f7626f4412bcfdb2a381c80e539c123a829cf8b81e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4b082d61c04be44719d7a4a2b5af7ce1584f222841f0e9cac421ea2f947cc6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b082d61c04be44719d7a4a2b5af7ce1584f222841f0e9cac421ea2f947cc6f6->enter($__internal_4b082d61c04be44719d7a4a2b5af7ce1584f222841f0e9cac421ea2f947cc6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4b082d61c04be44719d7a4a2b5af7ce1584f222841f0e9cac421ea2f947cc6f6->leave($__internal_4b082d61c04be44719d7a4a2b5af7ce1584f222841f0e9cac421ea2f947cc6f6_prof);

        
        $__internal_07af4f97a01aa4b811047f7626f4412bcfdb2a381c80e539c123a829cf8b81e5->leave($__internal_07af4f97a01aa4b811047f7626f4412bcfdb2a381c80e539c123a829cf8b81e5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
