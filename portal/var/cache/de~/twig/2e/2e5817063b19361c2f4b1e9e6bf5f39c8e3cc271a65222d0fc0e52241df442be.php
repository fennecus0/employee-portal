<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_1e9cc1103ba4da191575cacad3b54bf1217738f83b65ca4b2df33a862df73d48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_a26a90807ed942fc6b741c982b4901ea22d5c68db91f3f5a3eaff677633f91c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26a90807ed942fc6b741c982b4901ea22d5c68db91f3f5a3eaff677633f91c9->enter($__internal_a26a90807ed942fc6b741c982b4901ea22d5c68db91f3f5a3eaff677633f91c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_65b907f78fa8ba148e803c220da82ba1974a0873563f5b4be83bd2ac107f939b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b907f78fa8ba148e803c220da82ba1974a0873563f5b4be83bd2ac107f939b->enter($__internal_65b907f78fa8ba148e803c220da82ba1974a0873563f5b4be83bd2ac107f939b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a26a90807ed942fc6b741c982b4901ea22d5c68db91f3f5a3eaff677633f91c9->leave($__internal_a26a90807ed942fc6b741c982b4901ea22d5c68db91f3f5a3eaff677633f91c9_prof);

        
        $__internal_65b907f78fa8ba148e803c220da82ba1974a0873563f5b4be83bd2ac107f939b->leave($__internal_65b907f78fa8ba148e803c220da82ba1974a0873563f5b4be83bd2ac107f939b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be9207e6c43570eb0068fdcbbf756118b9390e084325ac27fbaa9361df00e1aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9207e6c43570eb0068fdcbbf756118b9390e084325ac27fbaa9361df00e1aa->enter($__internal_be9207e6c43570eb0068fdcbbf756118b9390e084325ac27fbaa9361df00e1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9ec8745f37972deb64884accc162f3a393bf58efbd076c37cea06bcfc5484597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec8745f37972deb64884accc162f3a393bf58efbd076c37cea06bcfc5484597->enter($__internal_9ec8745f37972deb64884accc162f3a393bf58efbd076c37cea06bcfc5484597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9ec8745f37972deb64884accc162f3a393bf58efbd076c37cea06bcfc5484597->leave($__internal_9ec8745f37972deb64884accc162f3a393bf58efbd076c37cea06bcfc5484597_prof);

        
        $__internal_be9207e6c43570eb0068fdcbbf756118b9390e084325ac27fbaa9361df00e1aa->leave($__internal_be9207e6c43570eb0068fdcbbf756118b9390e084325ac27fbaa9361df00e1aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
