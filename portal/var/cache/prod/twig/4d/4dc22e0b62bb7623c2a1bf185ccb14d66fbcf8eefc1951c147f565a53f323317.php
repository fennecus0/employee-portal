<?php

/* sidebar-right.html.twig */
class __TwigTemplate_b117f926630589597b1edf9e8330bf31f4bc7cce31df20eb04254cce4513984d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sidebar-right.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'page_header' => array($this, 'block_page_header'),
            'page_center' => array($this, 'block_page_center'),
            'page_header2' => array($this, 'block_page_header2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef6462f597a62de37e872ecd60cc23947a8d4307fb1e3c01c06db3f24a2bcb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6462f597a62de37e872ecd60cc23947a8d4307fb1e3c01c06db3f24a2bcb44->enter($__internal_ef6462f597a62de37e872ecd60cc23947a8d4307fb1e3c01c06db3f24a2bcb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar-right.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef6462f597a62de37e872ecd60cc23947a8d4307fb1e3c01c06db3f24a2bcb44->leave($__internal_ef6462f597a62de37e872ecd60cc23947a8d4307fb1e3c01c06db3f24a2bcb44_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_726d5891e0e6cffe5123bba3fc18f39b7e14173904f8911aee5abe9fc4cb6f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726d5891e0e6cffe5123bba3fc18f39b7e14173904f8911aee5abe9fc4cb6f66->enter($__internal_726d5891e0e6cffe5123bba3fc18f39b7e14173904f8911aee5abe9fc4cb6f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<section id=\"wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-8\">
                <h3>";
        // line 8
        $this->displayBlock('page_header', $context, $blocks);
        echo "</h3>

                <section class=\"page\">

                    ";
        // line 12
        $this->displayBlock('page_center', $context, $blocks);
        // line 13
        echo "
                </section>
            </div>

            <div class=\"col-xs-12 col-sm-4\">
                <section class=\"sidebar-left\">
                    ";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "history")) {
            // line 20
            echo "                        ";
            if (((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")) != null)) {
                // line 21
                echo "                            <h3>";
                $this->displayBlock('page_header2', $context, $blocks);
                echo "</h3>

                            <div class=\"list-group\">
                                ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))), 0, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 25
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("history"), "html", null, true);
                    echo "\" class=\"list-group-item list-group-item-action\">";
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["post"], "title", array()), 0, 35), "html", null, true);
                    echo " <span class=\"badge\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "initialDate", array()), "html", null, true);
                    echo "</span></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                            </div>
                        ";
            }
            // line 29
            echo "                    ";
        }
        // line 30
        echo "                </section>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_726d5891e0e6cffe5123bba3fc18f39b7e14173904f8911aee5abe9fc4cb6f66->leave($__internal_726d5891e0e6cffe5123bba3fc18f39b7e14173904f8911aee5abe9fc4cb6f66_prof);

    }

    // line 8
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_635979d72eabae3293b8c90fe958b96464e741e8290d04ba118c20e0b0bf8969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635979d72eabae3293b8c90fe958b96464e741e8290d04ba118c20e0b0bf8969->enter($__internal_635979d72eabae3293b8c90fe958b96464e741e8290d04ba118c20e0b0bf8969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo " ";
        
        $__internal_635979d72eabae3293b8c90fe958b96464e741e8290d04ba118c20e0b0bf8969->leave($__internal_635979d72eabae3293b8c90fe958b96464e741e8290d04ba118c20e0b0bf8969_prof);

    }

    // line 12
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_dc1601bbd6936ad2a1b7882670db03f18feece4d12173997d5c24de1bf974a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1601bbd6936ad2a1b7882670db03f18feece4d12173997d5c24de1bf974a17->enter($__internal_dc1601bbd6936ad2a1b7882670db03f18feece4d12173997d5c24de1bf974a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        echo " ";
        
        $__internal_dc1601bbd6936ad2a1b7882670db03f18feece4d12173997d5c24de1bf974a17->leave($__internal_dc1601bbd6936ad2a1b7882670db03f18feece4d12173997d5c24de1bf974a17_prof);

    }

    // line 21
    public function block_page_header2($context, array $blocks = array())
    {
        $__internal_df8f89c15eca3e028e4d37436b40601b06c25c6b77bd39a6ac4dbef543168a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8f89c15eca3e028e4d37436b40601b06c25c6b77bd39a6ac4dbef543168a36->enter($__internal_df8f89c15eca3e028e4d37436b40601b06c25c6b77bd39a6ac4dbef543168a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header2"));

        echo " ";
        
        $__internal_df8f89c15eca3e028e4d37436b40601b06c25c6b77bd39a6ac4dbef543168a36->leave($__internal_df8f89c15eca3e028e4d37436b40601b06c25c6b77bd39a6ac4dbef543168a36_prof);

    }

    public function getTemplateName()
    {
        return "sidebar-right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 21,  126 => 12,  114 => 8,  102 => 30,  99 => 29,  95 => 27,  82 => 25,  78 => 24,  71 => 21,  68 => 20,  66 => 19,  58 => 13,  56 => 12,  49 => 8,  43 => 4,  37 => 3,  11 => 1,);
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
            <div class=\"col-xs-12 col-sm-8\">
                <h3>{% block page_header %} {% endblock page_header %}</h3>

                <section class=\"page\">

                    {% block page_center %} {% endblock page_center %}

                </section>
            </div>

            <div class=\"col-xs-12 col-sm-4\">
                <section class=\"sidebar-left\">
                    {% if app.request.get('_route') != 'history' %}
                        {% if posts != null %}
                            <h3>{% block page_header2 %} {% endblock page_header2 %}</h3>

                            <div class=\"list-group\">
                                {% for post in posts | reverse |slice(0, 10) %}
                                    <a href=\"{{ asset('history') }}\" class=\"list-group-item list-group-item-action\">{{ post.title | slice(0, 35)}} <span class=\"badge\">{{ post.initialDate }}</span></a>
                                {% endfor %}
                            </div>
                        {% endif %}
                    {% endif %}
                </section>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "sidebar-right.html.twig", "/var/www/html/portal/app/Resources/views/sidebar-right.html.twig");
    }
}
