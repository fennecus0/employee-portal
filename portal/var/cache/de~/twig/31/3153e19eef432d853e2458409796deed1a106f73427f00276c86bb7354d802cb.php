<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_78a3b60d69e8882fc51b25960d85e93ad8803e9cb39ebddb980e9e9b6284a090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_cb81d5e87b6e02f66f4723bf2d6c639d98633628c4a150d82d8ca6e36774900a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb81d5e87b6e02f66f4723bf2d6c639d98633628c4a150d82d8ca6e36774900a->enter($__internal_cb81d5e87b6e02f66f4723bf2d6c639d98633628c4a150d82d8ca6e36774900a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_448b7b4157044a62cb7500158eb16114066a94f652ff6fe5c9d32964a885a122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448b7b4157044a62cb7500158eb16114066a94f652ff6fe5c9d32964a885a122->enter($__internal_448b7b4157044a62cb7500158eb16114066a94f652ff6fe5c9d32964a885a122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb81d5e87b6e02f66f4723bf2d6c639d98633628c4a150d82d8ca6e36774900a->leave($__internal_cb81d5e87b6e02f66f4723bf2d6c639d98633628c4a150d82d8ca6e36774900a_prof);

        
        $__internal_448b7b4157044a62cb7500158eb16114066a94f652ff6fe5c9d32964a885a122->leave($__internal_448b7b4157044a62cb7500158eb16114066a94f652ff6fe5c9d32964a885a122_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c10c62562885efba8320cfabb197f3e5e6cf21eaf91f94e7738138bc12c47ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c10c62562885efba8320cfabb197f3e5e6cf21eaf91f94e7738138bc12c47ad->enter($__internal_1c10c62562885efba8320cfabb197f3e5e6cf21eaf91f94e7738138bc12c47ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1ec65f74cb221104b09fc6d0c1e31c07d2f9eec5680cb6cfe23dff0a25e96d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec65f74cb221104b09fc6d0c1e31c07d2f9eec5680cb6cfe23dff0a25e96d89->enter($__internal_1ec65f74cb221104b09fc6d0c1e31c07d2f9eec5680cb6cfe23dff0a25e96d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1ec65f74cb221104b09fc6d0c1e31c07d2f9eec5680cb6cfe23dff0a25e96d89->leave($__internal_1ec65f74cb221104b09fc6d0c1e31c07d2f9eec5680cb6cfe23dff0a25e96d89_prof);

        
        $__internal_1c10c62562885efba8320cfabb197f3e5e6cf21eaf91f94e7738138bc12c47ad->leave($__internal_1c10c62562885efba8320cfabb197f3e5e6cf21eaf91f94e7738138bc12c47ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
