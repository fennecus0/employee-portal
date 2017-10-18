<?php

/* main-empty.html.twig */
class __TwigTemplate_d296d53a0e3df446e5a47c741eaa5da5e5093712c346224a983131b4a35d3b61 extends Twig_Template
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
        $__internal_d03b49f5d32f6db601f34cc324338d026b3993ca468ea3c2a0d6261265b9262a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03b49f5d32f6db601f34cc324338d026b3993ca468ea3c2a0d6261265b9262a->enter($__internal_d03b49f5d32f6db601f34cc324338d026b3993ca468ea3c2a0d6261265b9262a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main-empty.html.twig"));

        $__internal_2504591e3bd7b514b03ada730b6ea8700c97e99c9bc655068b8a16d50f192339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2504591e3bd7b514b03ada730b6ea8700c97e99c9bc655068b8a16d50f192339->enter($__internal_2504591e3bd7b514b03ada730b6ea8700c97e99c9bc655068b8a16d50f192339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main-empty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d03b49f5d32f6db601f34cc324338d026b3993ca468ea3c2a0d6261265b9262a->leave($__internal_d03b49f5d32f6db601f34cc324338d026b3993ca468ea3c2a0d6261265b9262a_prof);

        
        $__internal_2504591e3bd7b514b03ada730b6ea8700c97e99c9bc655068b8a16d50f192339->leave($__internal_2504591e3bd7b514b03ada730b6ea8700c97e99c9bc655068b8a16d50f192339_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_63eab8894f511df14dfefab5abfa68a30d155576b09625a38510d73fe0c4c391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63eab8894f511df14dfefab5abfa68a30d155576b09625a38510d73fe0c4c391->enter($__internal_63eab8894f511df14dfefab5abfa68a30d155576b09625a38510d73fe0c4c391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e87db8b0a72a963160c052671d48c9f5af22830823a85f0b0c8290fcb8e09e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87db8b0a72a963160c052671d48c9f5af22830823a85f0b0c8290fcb8e09e6f->enter($__internal_e87db8b0a72a963160c052671d48c9f5af22830823a85f0b0c8290fcb8e09e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e87db8b0a72a963160c052671d48c9f5af22830823a85f0b0c8290fcb8e09e6f->leave($__internal_e87db8b0a72a963160c052671d48c9f5af22830823a85f0b0c8290fcb8e09e6f_prof);

        
        $__internal_63eab8894f511df14dfefab5abfa68a30d155576b09625a38510d73fe0c4c391->leave($__internal_63eab8894f511df14dfefab5abfa68a30d155576b09625a38510d73fe0c4c391_prof);

    }

    // line 9
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_3831d9aa8dede5deecc40d8f75379cb2aea5b5280137b3bbc2515116553b2470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3831d9aa8dede5deecc40d8f75379cb2aea5b5280137b3bbc2515116553b2470->enter($__internal_3831d9aa8dede5deecc40d8f75379cb2aea5b5280137b3bbc2515116553b2470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_d9270ed9ecfc7dd04bfff26227ca9ed44b5402912b40c7aaca75788f3bb09bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9270ed9ecfc7dd04bfff26227ca9ed44b5402912b40c7aaca75788f3bb09bff->enter($__internal_d9270ed9ecfc7dd04bfff26227ca9ed44b5402912b40c7aaca75788f3bb09bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo " ";
        
        $__internal_d9270ed9ecfc7dd04bfff26227ca9ed44b5402912b40c7aaca75788f3bb09bff->leave($__internal_d9270ed9ecfc7dd04bfff26227ca9ed44b5402912b40c7aaca75788f3bb09bff_prof);

        
        $__internal_3831d9aa8dede5deecc40d8f75379cb2aea5b5280137b3bbc2515116553b2470->leave($__internal_3831d9aa8dede5deecc40d8f75379cb2aea5b5280137b3bbc2515116553b2470_prof);

    }

    // line 12
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_03c8a588d52b428a46109bc123166e59b94a1bbb75333a5b97846116f68c24b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c8a588d52b428a46109bc123166e59b94a1bbb75333a5b97846116f68c24b7->enter($__internal_03c8a588d52b428a46109bc123166e59b94a1bbb75333a5b97846116f68c24b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        $__internal_faec80429e134ec1589ab90613eccd3b4af35f56904f523c25e75edba360b7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faec80429e134ec1589ab90613eccd3b4af35f56904f523c25e75edba360b7ea->enter($__internal_faec80429e134ec1589ab90613eccd3b4af35f56904f523c25e75edba360b7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        echo " ";
        
        $__internal_faec80429e134ec1589ab90613eccd3b4af35f56904f523c25e75edba360b7ea->leave($__internal_faec80429e134ec1589ab90613eccd3b4af35f56904f523c25e75edba360b7ea_prof);

        
        $__internal_03c8a588d52b428a46109bc123166e59b94a1bbb75333a5b97846116f68c24b7->leave($__internal_03c8a588d52b428a46109bc123166e59b94a1bbb75333a5b97846116f68c24b7_prof);

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
