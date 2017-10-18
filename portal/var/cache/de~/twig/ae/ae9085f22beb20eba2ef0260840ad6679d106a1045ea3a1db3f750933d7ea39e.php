<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7ce38211b1dc5ca0e4905562c0a052eb284bacb80f49071c7d6548583aa7f100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a038ebc6b9b817208eb4793ee7517989a8d0f037b148a8407f62e342caf17242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a038ebc6b9b817208eb4793ee7517989a8d0f037b148a8407f62e342caf17242->enter($__internal_a038ebc6b9b817208eb4793ee7517989a8d0f037b148a8407f62e342caf17242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_1b21be0ea21365a8f9acc990d4b854a24a9369f09e64a05b9e5469bc934aa085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b21be0ea21365a8f9acc990d4b854a24a9369f09e64a05b9e5469bc934aa085->enter($__internal_1b21be0ea21365a8f9acc990d4b854a24a9369f09e64a05b9e5469bc934aa085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a038ebc6b9b817208eb4793ee7517989a8d0f037b148a8407f62e342caf17242->leave($__internal_a038ebc6b9b817208eb4793ee7517989a8d0f037b148a8407f62e342caf17242_prof);

        
        $__internal_1b21be0ea21365a8f9acc990d4b854a24a9369f09e64a05b9e5469bc934aa085->leave($__internal_1b21be0ea21365a8f9acc990d4b854a24a9369f09e64a05b9e5469bc934aa085_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb318c7fe5420d636bec3945429cd8ac716dbca99c390fd2e94ab6d0035d8061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb318c7fe5420d636bec3945429cd8ac716dbca99c390fd2e94ab6d0035d8061->enter($__internal_cb318c7fe5420d636bec3945429cd8ac716dbca99c390fd2e94ab6d0035d8061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_61609fae27f912bfdd40284c62250d1390f284c2ca147a060452af95b9f5a358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61609fae27f912bfdd40284c62250d1390f284c2ca147a060452af95b9f5a358->enter($__internal_61609fae27f912bfdd40284c62250d1390f284c2ca147a060452af95b9f5a358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_61609fae27f912bfdd40284c62250d1390f284c2ca147a060452af95b9f5a358->leave($__internal_61609fae27f912bfdd40284c62250d1390f284c2ca147a060452af95b9f5a358_prof);

        
        $__internal_cb318c7fe5420d636bec3945429cd8ac716dbca99c390fd2e94ab6d0035d8061->leave($__internal_cb318c7fe5420d636bec3945429cd8ac716dbca99c390fd2e94ab6d0035d8061_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
