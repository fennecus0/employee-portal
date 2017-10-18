<?php

/* main-empty.html.twig */
class __TwigTemplate_0fa6980fb59717f8e516bd46a26b544e4eb1274c95fd582b99d597cdc64dc7c2 extends Twig_Template
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
        $__internal_212e860e5fff38913c304945126117c67aa2bb165b9d6df0c5aa14e06e97e040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212e860e5fff38913c304945126117c67aa2bb165b9d6df0c5aa14e06e97e040->enter($__internal_212e860e5fff38913c304945126117c67aa2bb165b9d6df0c5aa14e06e97e040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main-empty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_212e860e5fff38913c304945126117c67aa2bb165b9d6df0c5aa14e06e97e040->leave($__internal_212e860e5fff38913c304945126117c67aa2bb165b9d6df0c5aa14e06e97e040_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9ffcd03aeff219d3f88ab1e99e47fa83269f2c1f86856bcb3b9e17bea915cdba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffcd03aeff219d3f88ab1e99e47fa83269f2c1f86856bcb3b9e17bea915cdba->enter($__internal_9ffcd03aeff219d3f88ab1e99e47fa83269f2c1f86856bcb3b9e17bea915cdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9ffcd03aeff219d3f88ab1e99e47fa83269f2c1f86856bcb3b9e17bea915cdba->leave($__internal_9ffcd03aeff219d3f88ab1e99e47fa83269f2c1f86856bcb3b9e17bea915cdba_prof);

    }

    // line 9
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_d540c4a7e25221205a9caa79389e5f3421d78869eed71c89252dbaaa42f70f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d540c4a7e25221205a9caa79389e5f3421d78869eed71c89252dbaaa42f70f88->enter($__internal_d540c4a7e25221205a9caa79389e5f3421d78869eed71c89252dbaaa42f70f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo " ";
        
        $__internal_d540c4a7e25221205a9caa79389e5f3421d78869eed71c89252dbaaa42f70f88->leave($__internal_d540c4a7e25221205a9caa79389e5f3421d78869eed71c89252dbaaa42f70f88_prof);

    }

    // line 12
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_953a5b1dffa4fbc9d0bc393fc8a05531120d52dfc6e5368eef41165e0add931c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953a5b1dffa4fbc9d0bc393fc8a05531120d52dfc6e5368eef41165e0add931c->enter($__internal_953a5b1dffa4fbc9d0bc393fc8a05531120d52dfc6e5368eef41165e0add931c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        echo " ";
        
        $__internal_953a5b1dffa4fbc9d0bc393fc8a05531120d52dfc6e5368eef41165e0add931c->leave($__internal_953a5b1dffa4fbc9d0bc393fc8a05531120d52dfc6e5368eef41165e0add931c_prof);

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
        return array (  84 => 12,  72 => 9,  61 => 13,  59 => 12,  56 => 11,  50 => 9,  48 => 8,  42 => 4,  36 => 3,  11 => 1,);
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
