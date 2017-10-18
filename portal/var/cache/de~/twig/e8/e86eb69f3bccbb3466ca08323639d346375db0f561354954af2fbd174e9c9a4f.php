<?php

/* :default:index.html.twig */
class __TwigTemplate_3d0d5a2141172de530e82ad227efc03f260ace6a3be19d3ea80b43cf9034a2ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main-empty.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'page_header' => array($this, 'block_page_header'),
            'page_center' => array($this, 'block_page_center'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main-empty.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc1616facd4924c0619c32c51e277095c8680045b35a13307147a9158370d2d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1616facd4924c0619c32c51e277095c8680045b35a13307147a9158370d2d3->enter($__internal_bc1616facd4924c0619c32c51e277095c8680045b35a13307147a9158370d2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_4026e685b168f2eaafa0cb07c6875d0bd99a25991b660f9d771965f9b01fb493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4026e685b168f2eaafa0cb07c6875d0bd99a25991b660f9d771965f9b01fb493->enter($__internal_4026e685b168f2eaafa0cb07c6875d0bd99a25991b660f9d771965f9b01fb493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc1616facd4924c0619c32c51e277095c8680045b35a13307147a9158370d2d3->leave($__internal_bc1616facd4924c0619c32c51e277095c8680045b35a13307147a9158370d2d3_prof);

        
        $__internal_4026e685b168f2eaafa0cb07c6875d0bd99a25991b660f9d771965f9b01fb493->leave($__internal_4026e685b168f2eaafa0cb07c6875d0bd99a25991b660f9d771965f9b01fb493_prof);

    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_3497cb227e8cb283c2cd6395f59469024a3b5c6c7158bb4e01acc2b2347131e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3497cb227e8cb283c2cd6395f59469024a3b5c6c7158bb4e01acc2b2347131e6->enter($__internal_3497cb227e8cb283c2cd6395f59469024a3b5c6c7158bb4e01acc2b2347131e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_bbdfe2c6d63641d4871b9ecba0cf05cf735be2c7761957ec96d4df1ac753c68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdfe2c6d63641d4871b9ecba0cf05cf735be2c7761957ec96d4df1ac753c68b->enter($__internal_bbdfe2c6d63641d4871b9ecba0cf05cf735be2c7761957ec96d4df1ac753c68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo "Hallo ";
        echo twig_escape_filter($this->env, ($context["names"] ?? $this->getContext($context, "names")), "html", null, true);
        echo " ";
        
        $__internal_bbdfe2c6d63641d4871b9ecba0cf05cf735be2c7761957ec96d4df1ac753c68b->leave($__internal_bbdfe2c6d63641d4871b9ecba0cf05cf735be2c7761957ec96d4df1ac753c68b_prof);

        
        $__internal_3497cb227e8cb283c2cd6395f59469024a3b5c6c7158bb4e01acc2b2347131e6->leave($__internal_3497cb227e8cb283c2cd6395f59469024a3b5c6c7158bb4e01acc2b2347131e6_prof);

    }

    // line 5
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_ebc46971e1c5ed0f09b48c933f04a4a6069964f3d76461d96d7875f066fbcc91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc46971e1c5ed0f09b48c933f04a4a6069964f3d76461d96d7875f066fbcc91->enter($__internal_ebc46971e1c5ed0f09b48c933f04a4a6069964f3d76461d96d7875f066fbcc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        $__internal_fd7881543f8a0560e2e658ba8e2a3be08febf5d947a18ebf26c84cc25451e1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7881543f8a0560e2e658ba8e2a3be08febf5d947a18ebf26c84cc25451e1cc->enter($__internal_fd7881543f8a0560e2e658ba8e2a3be08febf5d947a18ebf26c84cc25451e1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-image\">
                    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dform"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img1.jpg"), "html", null, true);
        echo "\">
                    </a>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title\">Dienstfahrt</span>
                </div>
                <div class=\"card-action\">
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dform"), "html", null, true);
        echo "\">Anmeldung</a>
                </div>
            </div>
        </div>

        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-image\">
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("history"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img2.jpg"), "html", null, true);
        echo "\">
                    </a>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title\">Dienstfahrt Historie</span>
                </div>
                <div class=\"card-action\">
                    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("history"), "html", null, true);
        echo "\">Anschauen</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_fd7881543f8a0560e2e658ba8e2a3be08febf5d947a18ebf26c84cc25451e1cc->leave($__internal_fd7881543f8a0560e2e658ba8e2a3be08febf5d947a18ebf26c84cc25451e1cc_prof);

        
        $__internal_ebc46971e1c5ed0f09b48c933f04a4a6069964f3d76461d96d7875f066fbcc91->leave($__internal_ebc46971e1c5ed0f09b48c933f04a4a6069964f3d76461d96d7875f066fbcc91_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 34,  105 => 27,  101 => 26,  90 => 18,  80 => 11,  76 => 10,  70 => 6,  61 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'main-empty.html.twig' %}

{% block page_header %}Hallo {{ names }} {% endblock page_header %}

{% block page_center %}
    <div class=\"row\">
        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-image\">
                    <a href=\"{{ asset('dform') }}\">
                        <img src=\"{{ asset('images/img1.jpg') }}\">
                    </a>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title\">Dienstfahrt</span>
                </div>
                <div class=\"card-action\">
                    <a href=\"{{ asset('dform') }}\">Anmeldung</a>
                </div>
            </div>
        </div>

        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-image\">
                    <a href=\"{{ asset('history') }}\">
                        <img src=\"{{ asset('images/img2.jpg') }}\">
                    </a>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title\">Dienstfahrt Historie</span>
                </div>
                <div class=\"card-action\">
                    <a href=\"{{ asset('history') }}\">Anschauen</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", ":default:index.html.twig", "/var/www/html/portal/app/Resources/views/default/index.html.twig");
    }
}
