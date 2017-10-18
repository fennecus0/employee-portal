<?php

/* ::sidebar-left.html.twig */
class __TwigTemplate_02489dda769ab131ff0fe982195cbb0babe3d8fbbfc5c45ba0367275878a49c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::sidebar-left.html.twig", 1);
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
        $__internal_68556fa2cc6f46fc339eccb683f30deb87b922eb96348e38c7df73c50126d6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68556fa2cc6f46fc339eccb683f30deb87b922eb96348e38c7df73c50126d6a4->enter($__internal_68556fa2cc6f46fc339eccb683f30deb87b922eb96348e38c7df73c50126d6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sidebar-left.html.twig"));

        $__internal_f1ed82fe1c13db7c807c79f0ad4659c4ced44938da9ae03db5e0a7bc4efac0f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ed82fe1c13db7c807c79f0ad4659c4ced44938da9ae03db5e0a7bc4efac0f3->enter($__internal_f1ed82fe1c13db7c807c79f0ad4659c4ced44938da9ae03db5e0a7bc4efac0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sidebar-left.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68556fa2cc6f46fc339eccb683f30deb87b922eb96348e38c7df73c50126d6a4->leave($__internal_68556fa2cc6f46fc339eccb683f30deb87b922eb96348e38c7df73c50126d6a4_prof);

        
        $__internal_f1ed82fe1c13db7c807c79f0ad4659c4ced44938da9ae03db5e0a7bc4efac0f3->leave($__internal_f1ed82fe1c13db7c807c79f0ad4659c4ced44938da9ae03db5e0a7bc4efac0f3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0c9be0917e41c77c4aa4379661fb3bdb97e6195a7bb2b5263003b1fb37ecf853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c9be0917e41c77c4aa4379661fb3bdb97e6195a7bb2b5263003b1fb37ecf853->enter($__internal_0c9be0917e41c77c4aa4379661fb3bdb97e6195a7bb2b5263003b1fb37ecf853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b5a41d11a0de927b849c5116b8f6b2621ca539ff3c95afec07d2704933572018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a41d11a0de927b849c5116b8f6b2621ca539ff3c95afec07d2704933572018->enter($__internal_b5a41d11a0de927b849c5116b8f6b2621ca539ff3c95afec07d2704933572018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <div class=\"row\">
                        <div class=\"col-sm-8 col-sm-push-2\">

                            ";
        // line 14
        $this->displayBlock('page_center', $context, $blocks);
        // line 15
        echo "
                        </div>
                    </div>
                </section>
            </div>

            <div class=\"col-xs-12 col-sm-4\">
                <section class=\"sidebar-left\">
                    <h3>History</h3>
                    <div class=\"list-group\">

                        <!--<a href=\"#\" class=\"list-group-item active\">
                            History
                        </a>-->
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">Hannover Messe <span class=\"badge\">12.10.2015</span></a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">Kunde Berlin <span class=\"badge\">05.03.2016</span></a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">Hamburg Messe <span class=\"badge\">07.01.2017</span></a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_b5a41d11a0de927b849c5116b8f6b2621ca539ff3c95afec07d2704933572018->leave($__internal_b5a41d11a0de927b849c5116b8f6b2621ca539ff3c95afec07d2704933572018_prof);

        
        $__internal_0c9be0917e41c77c4aa4379661fb3bdb97e6195a7bb2b5263003b1fb37ecf853->leave($__internal_0c9be0917e41c77c4aa4379661fb3bdb97e6195a7bb2b5263003b1fb37ecf853_prof);

    }

    // line 8
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_a26881bf8ddb0a1c5859f4ca18903f1cca43ffa69f765a16a14414c6ecd8259c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26881bf8ddb0a1c5859f4ca18903f1cca43ffa69f765a16a14414c6ecd8259c->enter($__internal_a26881bf8ddb0a1c5859f4ca18903f1cca43ffa69f765a16a14414c6ecd8259c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_d193cc2ff70e54cfb50d4c14a89bc2e83fbbe6e4951af31d4cab7df982829caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d193cc2ff70e54cfb50d4c14a89bc2e83fbbe6e4951af31d4cab7df982829caf->enter($__internal_d193cc2ff70e54cfb50d4c14a89bc2e83fbbe6e4951af31d4cab7df982829caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo " ";
        
        $__internal_d193cc2ff70e54cfb50d4c14a89bc2e83fbbe6e4951af31d4cab7df982829caf->leave($__internal_d193cc2ff70e54cfb50d4c14a89bc2e83fbbe6e4951af31d4cab7df982829caf_prof);

        
        $__internal_a26881bf8ddb0a1c5859f4ca18903f1cca43ffa69f765a16a14414c6ecd8259c->leave($__internal_a26881bf8ddb0a1c5859f4ca18903f1cca43ffa69f765a16a14414c6ecd8259c_prof);

    }

    // line 14
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_82873887381ac452a54b79ef2af7c9a8e627bf29b7666fccc5945ef51843045a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82873887381ac452a54b79ef2af7c9a8e627bf29b7666fccc5945ef51843045a->enter($__internal_82873887381ac452a54b79ef2af7c9a8e627bf29b7666fccc5945ef51843045a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        $__internal_ffdcbd8e00dd0714dc8bb17f8cd15e1a50a3490ec33c68d98c9bd66ba19a23a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdcbd8e00dd0714dc8bb17f8cd15e1a50a3490ec33c68d98c9bd66ba19a23a2->enter($__internal_ffdcbd8e00dd0714dc8bb17f8cd15e1a50a3490ec33c68d98c9bd66ba19a23a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        echo " ";
        
        $__internal_ffdcbd8e00dd0714dc8bb17f8cd15e1a50a3490ec33c68d98c9bd66ba19a23a2->leave($__internal_ffdcbd8e00dd0714dc8bb17f8cd15e1a50a3490ec33c68d98c9bd66ba19a23a2_prof);

        
        $__internal_82873887381ac452a54b79ef2af7c9a8e627bf29b7666fccc5945ef51843045a->leave($__internal_82873887381ac452a54b79ef2af7c9a8e627bf29b7666fccc5945ef51843045a_prof);

    }

    public function getTemplateName()
    {
        return "::sidebar-left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 14,  101 => 8,  68 => 15,  66 => 14,  57 => 8,  51 => 4,  42 => 3,  11 => 1,);
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
                    <div class=\"row\">
                        <div class=\"col-sm-8 col-sm-push-2\">

                            {% block page_center %} {% endblock page_center %}

                        </div>
                    </div>
                </section>
            </div>

            <div class=\"col-xs-12 col-sm-4\">
                <section class=\"sidebar-left\">
                    <h3>History</h3>
                    <div class=\"list-group\">

                        <!--<a href=\"#\" class=\"list-group-item active\">
                            History
                        </a>-->
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">Hannover Messe <span class=\"badge\">12.10.2015</span></a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">Kunde Berlin <span class=\"badge\">05.03.2016</span></a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">Hamburg Messe <span class=\"badge\">07.01.2017</span></a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "::sidebar-left.html.twig", "/var/www/html/portal/app/Resources/views/sidebar-left.html.twig");
    }
}
