<?php

/* sidebar-right.html.twig */
class __TwigTemplate_459f41e71d4c8260bf0726f5a879d551e05603bb54878d151f31f2c5fc75efd7 extends Twig_Template
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
        $__internal_c7eb5767efb5a6e41dd0c5f5fa0082c66a35d855b7ad83611a757a33294a1e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7eb5767efb5a6e41dd0c5f5fa0082c66a35d855b7ad83611a757a33294a1e9b->enter($__internal_c7eb5767efb5a6e41dd0c5f5fa0082c66a35d855b7ad83611a757a33294a1e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar-right.html.twig"));

        $__internal_293d85513a097a945473c1f639b98e2d232b615db76312546fdc9fdcab72efb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293d85513a097a945473c1f639b98e2d232b615db76312546fdc9fdcab72efb9->enter($__internal_293d85513a097a945473c1f639b98e2d232b615db76312546fdc9fdcab72efb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar-right.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7eb5767efb5a6e41dd0c5f5fa0082c66a35d855b7ad83611a757a33294a1e9b->leave($__internal_c7eb5767efb5a6e41dd0c5f5fa0082c66a35d855b7ad83611a757a33294a1e9b_prof);

        
        $__internal_293d85513a097a945473c1f639b98e2d232b615db76312546fdc9fdcab72efb9->leave($__internal_293d85513a097a945473c1f639b98e2d232b615db76312546fdc9fdcab72efb9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9dfb6cfc173b758788ce308499708c843c3755f3d41d46c8910b318a43a00df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dfb6cfc173b758788ce308499708c843c3755f3d41d46c8910b318a43a00df8->enter($__internal_9dfb6cfc173b758788ce308499708c843c3755f3d41d46c8910b318a43a00df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d01cc5fa659eb88978219493c91dd842807164264922d22a265fa10588de59fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01cc5fa659eb88978219493c91dd842807164264922d22a265fa10588de59fe->enter($__internal_d01cc5fa659eb88978219493c91dd842807164264922d22a265fa10588de59fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_d01cc5fa659eb88978219493c91dd842807164264922d22a265fa10588de59fe->leave($__internal_d01cc5fa659eb88978219493c91dd842807164264922d22a265fa10588de59fe_prof);

        
        $__internal_9dfb6cfc173b758788ce308499708c843c3755f3d41d46c8910b318a43a00df8->leave($__internal_9dfb6cfc173b758788ce308499708c843c3755f3d41d46c8910b318a43a00df8_prof);

    }

    // line 8
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_36c43b8ca8ebfaf6b4913a100bf911fa88e09c35e8f7fe301fb223ab19718008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c43b8ca8ebfaf6b4913a100bf911fa88e09c35e8f7fe301fb223ab19718008->enter($__internal_36c43b8ca8ebfaf6b4913a100bf911fa88e09c35e8f7fe301fb223ab19718008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_0f9edec0f5da381c547ec8e97149be62be89ee22e00f9f32a4862ee28743aa34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9edec0f5da381c547ec8e97149be62be89ee22e00f9f32a4862ee28743aa34->enter($__internal_0f9edec0f5da381c547ec8e97149be62be89ee22e00f9f32a4862ee28743aa34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo " ";
        
        $__internal_0f9edec0f5da381c547ec8e97149be62be89ee22e00f9f32a4862ee28743aa34->leave($__internal_0f9edec0f5da381c547ec8e97149be62be89ee22e00f9f32a4862ee28743aa34_prof);

        
        $__internal_36c43b8ca8ebfaf6b4913a100bf911fa88e09c35e8f7fe301fb223ab19718008->leave($__internal_36c43b8ca8ebfaf6b4913a100bf911fa88e09c35e8f7fe301fb223ab19718008_prof);

    }

    // line 12
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_df86a2018502d7276310d02f969800fd5fb352b95fe9b9685138ab3be234f8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df86a2018502d7276310d02f969800fd5fb352b95fe9b9685138ab3be234f8eb->enter($__internal_df86a2018502d7276310d02f969800fd5fb352b95fe9b9685138ab3be234f8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        $__internal_d6e4c9731fa2a528212292b0aa8626859c953747148f89012f0f2d449a9df1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e4c9731fa2a528212292b0aa8626859c953747148f89012f0f2d449a9df1b0->enter($__internal_d6e4c9731fa2a528212292b0aa8626859c953747148f89012f0f2d449a9df1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        echo " ";
        
        $__internal_d6e4c9731fa2a528212292b0aa8626859c953747148f89012f0f2d449a9df1b0->leave($__internal_d6e4c9731fa2a528212292b0aa8626859c953747148f89012f0f2d449a9df1b0_prof);

        
        $__internal_df86a2018502d7276310d02f969800fd5fb352b95fe9b9685138ab3be234f8eb->leave($__internal_df86a2018502d7276310d02f969800fd5fb352b95fe9b9685138ab3be234f8eb_prof);

    }

    // line 21
    public function block_page_header2($context, array $blocks = array())
    {
        $__internal_bc90c5c92b30aa85f2b45db5ee05df208b1293504a1b8211a2c41ca46d46727d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc90c5c92b30aa85f2b45db5ee05df208b1293504a1b8211a2c41ca46d46727d->enter($__internal_bc90c5c92b30aa85f2b45db5ee05df208b1293504a1b8211a2c41ca46d46727d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header2"));

        $__internal_1ce8a9a58de6fb2c384553e9b4eaca3022711b77e56a5d53ab95dbdbd3cf7f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce8a9a58de6fb2c384553e9b4eaca3022711b77e56a5d53ab95dbdbd3cf7f8b->enter($__internal_1ce8a9a58de6fb2c384553e9b4eaca3022711b77e56a5d53ab95dbdbd3cf7f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header2"));

        echo " ";
        
        $__internal_1ce8a9a58de6fb2c384553e9b4eaca3022711b77e56a5d53ab95dbdbd3cf7f8b->leave($__internal_1ce8a9a58de6fb2c384553e9b4eaca3022711b77e56a5d53ab95dbdbd3cf7f8b_prof);

        
        $__internal_bc90c5c92b30aa85f2b45db5ee05df208b1293504a1b8211a2c41ca46d46727d->leave($__internal_bc90c5c92b30aa85f2b45db5ee05df208b1293504a1b8211a2c41ca46d46727d_prof);

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
        return array (  162 => 21,  144 => 12,  126 => 8,  111 => 30,  108 => 29,  104 => 27,  91 => 25,  87 => 24,  80 => 21,  77 => 20,  75 => 19,  67 => 13,  65 => 12,  58 => 8,  52 => 4,  43 => 3,  11 => 1,);
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
