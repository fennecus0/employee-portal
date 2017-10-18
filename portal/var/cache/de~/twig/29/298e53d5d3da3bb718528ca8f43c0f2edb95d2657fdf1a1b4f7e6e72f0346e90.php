<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c0a6a2978f876ff90858b9f50eb57f7654e459108f5504f3483d24a433e9d62d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_628c95972c37729d4819a0ba4bda43ac72a561053425f211d013556475504c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628c95972c37729d4819a0ba4bda43ac72a561053425f211d013556475504c49->enter($__internal_628c95972c37729d4819a0ba4bda43ac72a561053425f211d013556475504c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_dc89e0997bd9f69a1ed4c61507f5340294bc01a429aea349b9a3681cb070efbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc89e0997bd9f69a1ed4c61507f5340294bc01a429aea349b9a3681cb070efbe->enter($__internal_dc89e0997bd9f69a1ed4c61507f5340294bc01a429aea349b9a3681cb070efbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_628c95972c37729d4819a0ba4bda43ac72a561053425f211d013556475504c49->leave($__internal_628c95972c37729d4819a0ba4bda43ac72a561053425f211d013556475504c49_prof);

        
        $__internal_dc89e0997bd9f69a1ed4c61507f5340294bc01a429aea349b9a3681cb070efbe->leave($__internal_dc89e0997bd9f69a1ed4c61507f5340294bc01a429aea349b9a3681cb070efbe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_698a4e129ea876be193a447ea1f75d79df3a8f3e6838be2d23bac8e311a33841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698a4e129ea876be193a447ea1f75d79df3a8f3e6838be2d23bac8e311a33841->enter($__internal_698a4e129ea876be193a447ea1f75d79df3a8f3e6838be2d23bac8e311a33841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_88094e9b7be4189b0677852b223d244141bc2ac49cdc4c736620a4d7c75ad573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88094e9b7be4189b0677852b223d244141bc2ac49cdc4c736620a4d7c75ad573->enter($__internal_88094e9b7be4189b0677852b223d244141bc2ac49cdc4c736620a4d7c75ad573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_88094e9b7be4189b0677852b223d244141bc2ac49cdc4c736620a4d7c75ad573->leave($__internal_88094e9b7be4189b0677852b223d244141bc2ac49cdc4c736620a4d7c75ad573_prof);

        
        $__internal_698a4e129ea876be193a447ea1f75d79df3a8f3e6838be2d23bac8e311a33841->leave($__internal_698a4e129ea876be193a447ea1f75d79df3a8f3e6838be2d23bac8e311a33841_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
