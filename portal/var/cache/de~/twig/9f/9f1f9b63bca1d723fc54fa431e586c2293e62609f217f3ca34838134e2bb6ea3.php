<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_129a80406d6e7e7bbab6ded1f756b5647ced62cc324ad38f47a591234798b058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7609dd246c21e6c4607e29f617e62319aa140980f689be109987a7e27fbf8951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7609dd246c21e6c4607e29f617e62319aa140980f689be109987a7e27fbf8951->enter($__internal_7609dd246c21e6c4607e29f617e62319aa140980f689be109987a7e27fbf8951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_62eb4d10575ed8e0ddd1a165b57f774db009e841f1ed48faa44bd5d24112bfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62eb4d10575ed8e0ddd1a165b57f774db009e841f1ed48faa44bd5d24112bfea->enter($__internal_62eb4d10575ed8e0ddd1a165b57f774db009e841f1ed48faa44bd5d24112bfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_7609dd246c21e6c4607e29f617e62319aa140980f689be109987a7e27fbf8951->leave($__internal_7609dd246c21e6c4607e29f617e62319aa140980f689be109987a7e27fbf8951_prof);

        
        $__internal_62eb4d10575ed8e0ddd1a165b57f774db009e841f1ed48faa44bd5d24112bfea->leave($__internal_62eb4d10575ed8e0ddd1a165b57f774db009e841f1ed48faa44bd5d24112bfea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
