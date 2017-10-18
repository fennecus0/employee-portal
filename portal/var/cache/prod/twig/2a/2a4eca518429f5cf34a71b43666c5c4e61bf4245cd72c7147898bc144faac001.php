<?php

/* default/index.html.twig */
class __TwigTemplate_ef802aa02d1d01f6c17d57e295882e466466a9ce05fa01986ca0cae17ae9a250 extends Twig_Template
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
        $__internal_8cd8b5f5708ac8bbdea67802b2f21e5e2bcc771bb1e990312dd4d205c524579b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd8b5f5708ac8bbdea67802b2f21e5e2bcc771bb1e990312dd4d205c524579b->enter($__internal_8cd8b5f5708ac8bbdea67802b2f21e5e2bcc771bb1e990312dd4d205c524579b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cd8b5f5708ac8bbdea67802b2f21e5e2bcc771bb1e990312dd4d205c524579b->leave($__internal_8cd8b5f5708ac8bbdea67802b2f21e5e2bcc771bb1e990312dd4d205c524579b_prof);

    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_084151dcc28da418bb79f7489950b92c9ae18f727a98c9715ef7a628f116cfff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084151dcc28da418bb79f7489950b92c9ae18f727a98c9715ef7a628f116cfff->enter($__internal_084151dcc28da418bb79f7489950b92c9ae18f727a98c9715ef7a628f116cfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo "Hallo ";
        echo twig_escape_filter($this->env, (isset($context["names"]) ? $context["names"] : $this->getContext($context, "names")), "html", null, true);
        echo " ";
        
        $__internal_084151dcc28da418bb79f7489950b92c9ae18f727a98c9715ef7a628f116cfff->leave($__internal_084151dcc28da418bb79f7489950b92c9ae18f727a98c9715ef7a628f116cfff_prof);

    }

    // line 5
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_8e4d3ab69935ad4158aef5141ebfa8f7baaad4de3f51a9b699f28130adeeb0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4d3ab69935ad4158aef5141ebfa8f7baaad4de3f51a9b699f28130adeeb0f7->enter($__internal_8e4d3ab69935ad4158aef5141ebfa8f7baaad4de3f51a9b699f28130adeeb0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

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
        
        $__internal_8e4d3ab69935ad4158aef5141ebfa8f7baaad4de3f51a9b699f28130adeeb0f7->leave($__internal_8e4d3ab69935ad4158aef5141ebfa8f7baaad4de3f51a9b699f28130adeeb0f7_prof);

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
        return array (  100 => 34,  90 => 27,  86 => 26,  75 => 18,  65 => 11,  61 => 10,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
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
