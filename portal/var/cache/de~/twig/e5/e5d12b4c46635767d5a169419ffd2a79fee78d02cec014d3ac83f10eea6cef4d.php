<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_eb0dc6c0d7d5b6e4fb668fba69822341325a9d0adb0134ed4e8e820e289172bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1228aec9e850ad80da96abddb96ba57ba7df508e67a43758130855013c8bd7b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1228aec9e850ad80da96abddb96ba57ba7df508e67a43758130855013c8bd7b8->enter($__internal_1228aec9e850ad80da96abddb96ba57ba7df508e67a43758130855013c8bd7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_3d52f9325c3d0ac008714be252c41a185cccf24e9bf377f40aec6ae9965f1125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d52f9325c3d0ac008714be252c41a185cccf24e9bf377f40aec6ae9965f1125->enter($__internal_3d52f9325c3d0ac008714be252c41a185cccf24e9bf377f40aec6ae9965f1125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1228aec9e850ad80da96abddb96ba57ba7df508e67a43758130855013c8bd7b8->leave($__internal_1228aec9e850ad80da96abddb96ba57ba7df508e67a43758130855013c8bd7b8_prof);

        
        $__internal_3d52f9325c3d0ac008714be252c41a185cccf24e9bf377f40aec6ae9965f1125->leave($__internal_3d52f9325c3d0ac008714be252c41a185cccf24e9bf377f40aec6ae9965f1125_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8dca2452817eb1e2f17aa5242a8d044788bf6dbd3491028206b3f6a340d97004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dca2452817eb1e2f17aa5242a8d044788bf6dbd3491028206b3f6a340d97004->enter($__internal_8dca2452817eb1e2f17aa5242a8d044788bf6dbd3491028206b3f6a340d97004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ece8f4047b9ba8f50e9ef140e0d9b81baaf68f39c62a64e7f6513a5c0384cf6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece8f4047b9ba8f50e9ef140e0d9b81baaf68f39c62a64e7f6513a5c0384cf6b->enter($__internal_ece8f4047b9ba8f50e9ef140e0d9b81baaf68f39c62a64e7f6513a5c0384cf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ece8f4047b9ba8f50e9ef140e0d9b81baaf68f39c62a64e7f6513a5c0384cf6b->leave($__internal_ece8f4047b9ba8f50e9ef140e0d9b81baaf68f39c62a64e7f6513a5c0384cf6b_prof);

        
        $__internal_8dca2452817eb1e2f17aa5242a8d044788bf6dbd3491028206b3f6a340d97004->leave($__internal_8dca2452817eb1e2f17aa5242a8d044788bf6dbd3491028206b3f6a340d97004_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
