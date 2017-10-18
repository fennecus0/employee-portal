<?php

/* main-empty.html.twig */
class __TwigTemplate_9404df5c3cfd969ab8418e57da23b16c1845f92480cce4356a31185c4323369d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main-empty.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'page_header' => array($this, 'block_page_header'),
            'page_center' => array($this, 'block_page_center'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91f334d22397a371ac6e56b5312b40ece650797d39a22c71dc2e4f77079c78a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f334d22397a371ac6e56b5312b40ece650797d39a22c71dc2e4f77079c78a3->enter($__internal_91f334d22397a371ac6e56b5312b40ece650797d39a22c71dc2e4f77079c78a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main-empty.html.twig"));

        $__internal_edfae560e440d8dc7f8732f1c00e67eae2eef8711a493c0db5de419873dbaccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edfae560e440d8dc7f8732f1c00e67eae2eef8711a493c0db5de419873dbaccc->enter($__internal_edfae560e440d8dc7f8732f1c00e67eae2eef8711a493c0db5de419873dbaccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main-empty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91f334d22397a371ac6e56b5312b40ece650797d39a22c71dc2e4f77079c78a3->leave($__internal_91f334d22397a371ac6e56b5312b40ece650797d39a22c71dc2e4f77079c78a3_prof);

        
        $__internal_edfae560e440d8dc7f8732f1c00e67eae2eef8711a493c0db5de419873dbaccc->leave($__internal_edfae560e440d8dc7f8732f1c00e67eae2eef8711a493c0db5de419873dbaccc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a9a02d4375cfe2613294dab941fbd7915bd407e8a34147404bc0e30d91876bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a02d4375cfe2613294dab941fbd7915bd407e8a34147404bc0e30d91876bd7->enter($__internal_a9a02d4375cfe2613294dab941fbd7915bd407e8a34147404bc0e30d91876bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_39833585384a696c38c86ca0cfaf32a3079371627ea8583c5691eb9495031e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39833585384a696c38c86ca0cfaf32a3079371627ea8583c5691eb9495031e93->enter($__internal_39833585384a696c38c86ca0cfaf32a3079371627ea8583c5691eb9495031e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <section id=\"wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
        // line 8
        if ( !twig_test_empty(        $this->renderBlock("page_header", $context, $blocks))) {
            // line 9
            echo "                    <h3>";
            $this->displayBlock('page_header', $context, $blocks);
            echo "</h3>
                    ";
        }
        // line 11
        echo "
                        ";
        // line 12
        $this->displayBlock('page_center', $context, $blocks);
        // line 13
        echo "                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_39833585384a696c38c86ca0cfaf32a3079371627ea8583c5691eb9495031e93->leave($__internal_39833585384a696c38c86ca0cfaf32a3079371627ea8583c5691eb9495031e93_prof);

        
        $__internal_a9a02d4375cfe2613294dab941fbd7915bd407e8a34147404bc0e30d91876bd7->leave($__internal_a9a02d4375cfe2613294dab941fbd7915bd407e8a34147404bc0e30d91876bd7_prof);

    }

    // line 9
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_31ddd77a414ebec992afb95d929f555435a6f62afafac77253367511b212ca4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ddd77a414ebec992afb95d929f555435a6f62afafac77253367511b212ca4a->enter($__internal_31ddd77a414ebec992afb95d929f555435a6f62afafac77253367511b212ca4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_30c3d94f8145d0e0e94de2106482a37ce424c5b139f821ef595b4e14f4ce66c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c3d94f8145d0e0e94de2106482a37ce424c5b139f821ef595b4e14f4ce66c8->enter($__internal_30c3d94f8145d0e0e94de2106482a37ce424c5b139f821ef595b4e14f4ce66c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo " ";
        
        $__internal_30c3d94f8145d0e0e94de2106482a37ce424c5b139f821ef595b4e14f4ce66c8->leave($__internal_30c3d94f8145d0e0e94de2106482a37ce424c5b139f821ef595b4e14f4ce66c8_prof);

        
        $__internal_31ddd77a414ebec992afb95d929f555435a6f62afafac77253367511b212ca4a->leave($__internal_31ddd77a414ebec992afb95d929f555435a6f62afafac77253367511b212ca4a_prof);

    }

    // line 12
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_0fd09863ac0ec253abcb094a58aecbfdff4db5a0e024c9bb433b158315f722a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd09863ac0ec253abcb094a58aecbfdff4db5a0e024c9bb433b158315f722a6->enter($__internal_0fd09863ac0ec253abcb094a58aecbfdff4db5a0e024c9bb433b158315f722a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        $__internal_443e7aa3313fe1cb7265c2e2d1ab98aaf10aee252e574ea44bb9a1d254207433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443e7aa3313fe1cb7265c2e2d1ab98aaf10aee252e574ea44bb9a1d254207433->enter($__internal_443e7aa3313fe1cb7265c2e2d1ab98aaf10aee252e574ea44bb9a1d254207433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        echo " ";
        
        $__internal_443e7aa3313fe1cb7265c2e2d1ab98aaf10aee252e574ea44bb9a1d254207433->leave($__internal_443e7aa3313fe1cb7265c2e2d1ab98aaf10aee252e574ea44bb9a1d254207433_prof);

        
        $__internal_0fd09863ac0ec253abcb094a58aecbfdff4db5a0e024c9bb433b158315f722a6->leave($__internal_0fd09863ac0ec253abcb094a58aecbfdff4db5a0e024c9bb433b158315f722a6_prof);

    }

    public function getTemplateName()
    {
        return "main-empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 12,  84 => 9,  70 => 13,  68 => 12,  65 => 11,  59 => 9,  57 => 8,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
    <section id=\"wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    {% if block('page_header') is not empty %}
                    <h3>{% block page_header %} {% endblock page_header %}</h3>
                    {% endif %}

                        {% block page_center %} {% endblock page_center %}
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "main-empty.html.twig", "/var/www/html/portal/app/Resources/views/main-empty.html.twig");
    }
}
