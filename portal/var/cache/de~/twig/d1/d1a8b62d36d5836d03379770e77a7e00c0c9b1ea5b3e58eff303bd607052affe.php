<?php

/* default/index.html.twig */
class __TwigTemplate_93132ef1bf5f577876b96218b2024c3c16f6e599251c415d5875df9cececec27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main-empty.html.twig", "default/index.html.twig", 1);
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
        $__internal_057bd3bd808addf08a63466adc5bcefae85debb511b8bc9606cd60431a63981b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057bd3bd808addf08a63466adc5bcefae85debb511b8bc9606cd60431a63981b->enter($__internal_057bd3bd808addf08a63466adc5bcefae85debb511b8bc9606cd60431a63981b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_c89681fea497fbe71f3619ab646066ee13898a2c7ad2cd3ff698449b9066d8ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89681fea497fbe71f3619ab646066ee13898a2c7ad2cd3ff698449b9066d8ca->enter($__internal_c89681fea497fbe71f3619ab646066ee13898a2c7ad2cd3ff698449b9066d8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_057bd3bd808addf08a63466adc5bcefae85debb511b8bc9606cd60431a63981b->leave($__internal_057bd3bd808addf08a63466adc5bcefae85debb511b8bc9606cd60431a63981b_prof);

        
        $__internal_c89681fea497fbe71f3619ab646066ee13898a2c7ad2cd3ff698449b9066d8ca->leave($__internal_c89681fea497fbe71f3619ab646066ee13898a2c7ad2cd3ff698449b9066d8ca_prof);

    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_da38d42519031e045fa38ba9a3c2e227377eb1d90dcbd3388ac8346f16246eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da38d42519031e045fa38ba9a3c2e227377eb1d90dcbd3388ac8346f16246eff->enter($__internal_da38d42519031e045fa38ba9a3c2e227377eb1d90dcbd3388ac8346f16246eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_1310872f00eba1c1f6c13946993707bdffcf46ea7111b769d5b8c733d564566d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1310872f00eba1c1f6c13946993707bdffcf46ea7111b769d5b8c733d564566d->enter($__internal_1310872f00eba1c1f6c13946993707bdffcf46ea7111b769d5b8c733d564566d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo "Hallo ";
        echo twig_escape_filter($this->env, (isset($context["names"]) ? $context["names"] : $this->getContext($context, "names")), "html", null, true);
        echo " ";
        
        $__internal_1310872f00eba1c1f6c13946993707bdffcf46ea7111b769d5b8c733d564566d->leave($__internal_1310872f00eba1c1f6c13946993707bdffcf46ea7111b769d5b8c733d564566d_prof);

        
        $__internal_da38d42519031e045fa38ba9a3c2e227377eb1d90dcbd3388ac8346f16246eff->leave($__internal_da38d42519031e045fa38ba9a3c2e227377eb1d90dcbd3388ac8346f16246eff_prof);

    }

    // line 5
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_f5f1ce3df7423bc8d4ee821a2508d0f939fdfe081fb51962b79ed92e1d0a5268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f1ce3df7423bc8d4ee821a2508d0f939fdfe081fb51962b79ed92e1d0a5268->enter($__internal_f5f1ce3df7423bc8d4ee821a2508d0f939fdfe081fb51962b79ed92e1d0a5268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        $__internal_d0fbc6d2dd0c10c37d4960ed5b369caf0ba6d52c74bd4c632afc5868e3d23069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fbc6d2dd0c10c37d4960ed5b369caf0ba6d52c74bd4c632afc5868e3d23069->enter($__internal_d0fbc6d2dd0c10c37d4960ed5b369caf0ba6d52c74bd4c632afc5868e3d23069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

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
        
        $__internal_d0fbc6d2dd0c10c37d4960ed5b369caf0ba6d52c74bd4c632afc5868e3d23069->leave($__internal_d0fbc6d2dd0c10c37d4960ed5b369caf0ba6d52c74bd4c632afc5868e3d23069_prof);

        
        $__internal_f5f1ce3df7423bc8d4ee821a2508d0f939fdfe081fb51962b79ed92e1d0a5268->leave($__internal_f5f1ce3df7423bc8d4ee821a2508d0f939fdfe081fb51962b79ed92e1d0a5268_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
{% endblock %}", "default/index.html.twig", "/var/www/html/portal/app/Resources/views/default/index.html.twig");
    }
}
