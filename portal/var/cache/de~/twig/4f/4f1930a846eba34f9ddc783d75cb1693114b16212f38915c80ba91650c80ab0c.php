<?php

/* ::sidebar-right.html.twig */
class __TwigTemplate_998d532e210f0d28aff326d7b844f58a1b7713bf54f010cc651d1a001c2f659e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::sidebar-right.html.twig", 1);
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
        $__internal_b318ed2ed19de2d0259e210ae6ac32ab54a485b3de5c25bf27773d3703430f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b318ed2ed19de2d0259e210ae6ac32ab54a485b3de5c25bf27773d3703430f38->enter($__internal_b318ed2ed19de2d0259e210ae6ac32ab54a485b3de5c25bf27773d3703430f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sidebar-right.html.twig"));

        $__internal_88edcf7b635ba97663a866775bb71ac4f20c1a0066a906943356e8ba18a57068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88edcf7b635ba97663a866775bb71ac4f20c1a0066a906943356e8ba18a57068->enter($__internal_88edcf7b635ba97663a866775bb71ac4f20c1a0066a906943356e8ba18a57068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sidebar-right.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b318ed2ed19de2d0259e210ae6ac32ab54a485b3de5c25bf27773d3703430f38->leave($__internal_b318ed2ed19de2d0259e210ae6ac32ab54a485b3de5c25bf27773d3703430f38_prof);

        
        $__internal_88edcf7b635ba97663a866775bb71ac4f20c1a0066a906943356e8ba18a57068->leave($__internal_88edcf7b635ba97663a866775bb71ac4f20c1a0066a906943356e8ba18a57068_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_45a75625a036080a94a9edca3ff257e69ec2513fefede0326c94ef865147f4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a75625a036080a94a9edca3ff257e69ec2513fefede0326c94ef865147f4ef->enter($__internal_45a75625a036080a94a9edca3ff257e69ec2513fefede0326c94ef865147f4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2153ec592911c22c8b1d36eb900f4149382d898c89dd4f78c3cccf9b0d0152b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2153ec592911c22c8b1d36eb900f4149382d898c89dd4f78c3cccf9b0d0152b5->enter($__internal_2153ec592911c22c8b1d36eb900f4149382d898c89dd4f78c3cccf9b0d0152b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "history")) {
            // line 20
            echo "                        ";
            if ((($context["posts"] ?? $this->getContext($context, "posts")) != null)) {
                // line 21
                echo "                            <h3>";
                $this->displayBlock('page_header2', $context, $blocks);
                echo "</h3>

                            <div class=\"list-group\">
                                ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, ($context["posts"] ?? $this->getContext($context, "posts"))), 0, 10));
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
        
        $__internal_2153ec592911c22c8b1d36eb900f4149382d898c89dd4f78c3cccf9b0d0152b5->leave($__internal_2153ec592911c22c8b1d36eb900f4149382d898c89dd4f78c3cccf9b0d0152b5_prof);

        
        $__internal_45a75625a036080a94a9edca3ff257e69ec2513fefede0326c94ef865147f4ef->leave($__internal_45a75625a036080a94a9edca3ff257e69ec2513fefede0326c94ef865147f4ef_prof);

    }

    // line 8
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_bc3f961d35131a67623e14d9feb03c91523ba9e5eb75611c23b6951697b6df05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc3f961d35131a67623e14d9feb03c91523ba9e5eb75611c23b6951697b6df05->enter($__internal_bc3f961d35131a67623e14d9feb03c91523ba9e5eb75611c23b6951697b6df05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_bc17b545ebe16a370c554e17eab0b7d9354bd4a3671a83ecd5bcb7de137ae0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc17b545ebe16a370c554e17eab0b7d9354bd4a3671a83ecd5bcb7de137ae0e9->enter($__internal_bc17b545ebe16a370c554e17eab0b7d9354bd4a3671a83ecd5bcb7de137ae0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo " ";
        
        $__internal_bc17b545ebe16a370c554e17eab0b7d9354bd4a3671a83ecd5bcb7de137ae0e9->leave($__internal_bc17b545ebe16a370c554e17eab0b7d9354bd4a3671a83ecd5bcb7de137ae0e9_prof);

        
        $__internal_bc3f961d35131a67623e14d9feb03c91523ba9e5eb75611c23b6951697b6df05->leave($__internal_bc3f961d35131a67623e14d9feb03c91523ba9e5eb75611c23b6951697b6df05_prof);

    }

    // line 12
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_1dda68829f08bd7b3d93feef84d50c149614a6ba7c3bfbef9f3b93aa95d8efd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dda68829f08bd7b3d93feef84d50c149614a6ba7c3bfbef9f3b93aa95d8efd0->enter($__internal_1dda68829f08bd7b3d93feef84d50c149614a6ba7c3bfbef9f3b93aa95d8efd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        $__internal_c29f8a3fe6d74e82dc3ec27078cd631a2ce87b6cf675e2593e4d090499cd1ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29f8a3fe6d74e82dc3ec27078cd631a2ce87b6cf675e2593e4d090499cd1ea6->enter($__internal_c29f8a3fe6d74e82dc3ec27078cd631a2ce87b6cf675e2593e4d090499cd1ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        echo " ";
        
        $__internal_c29f8a3fe6d74e82dc3ec27078cd631a2ce87b6cf675e2593e4d090499cd1ea6->leave($__internal_c29f8a3fe6d74e82dc3ec27078cd631a2ce87b6cf675e2593e4d090499cd1ea6_prof);

        
        $__internal_1dda68829f08bd7b3d93feef84d50c149614a6ba7c3bfbef9f3b93aa95d8efd0->leave($__internal_1dda68829f08bd7b3d93feef84d50c149614a6ba7c3bfbef9f3b93aa95d8efd0_prof);

    }

    // line 21
    public function block_page_header2($context, array $blocks = array())
    {
        $__internal_b92316147c842be846dfe6bc2af799a726c1e572f05032713ff64b9bd12a1818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92316147c842be846dfe6bc2af799a726c1e572f05032713ff64b9bd12a1818->enter($__internal_b92316147c842be846dfe6bc2af799a726c1e572f05032713ff64b9bd12a1818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header2"));

        $__internal_a4bb0318f4d686889b348cf3d500ea5405da0e4a301044061b223b91f5843202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4bb0318f4d686889b348cf3d500ea5405da0e4a301044061b223b91f5843202->enter($__internal_a4bb0318f4d686889b348cf3d500ea5405da0e4a301044061b223b91f5843202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header2"));

        echo " ";
        
        $__internal_a4bb0318f4d686889b348cf3d500ea5405da0e4a301044061b223b91f5843202->leave($__internal_a4bb0318f4d686889b348cf3d500ea5405da0e4a301044061b223b91f5843202_prof);

        
        $__internal_b92316147c842be846dfe6bc2af799a726c1e572f05032713ff64b9bd12a1818->leave($__internal_b92316147c842be846dfe6bc2af799a726c1e572f05032713ff64b9bd12a1818_prof);

    }

    public function getTemplateName()
    {
        return "::sidebar-right.html.twig";
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
{% endblock %}", "::sidebar-right.html.twig", "/var/www/html/portal/app/Resources/views/sidebar-right.html.twig");
    }
}
