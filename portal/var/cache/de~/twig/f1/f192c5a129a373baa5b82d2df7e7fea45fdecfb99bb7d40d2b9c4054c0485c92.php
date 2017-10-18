<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_68c5a60169c404e56a028186e85aa9da034ec230eb96866c576e6c83ca7ffca1 extends Twig_Template
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
        $__internal_32eb2f83aecf8d4c58f8e5750d6294776ed97316458b596fe562d8664f8eaa2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32eb2f83aecf8d4c58f8e5750d6294776ed97316458b596fe562d8664f8eaa2b->enter($__internal_32eb2f83aecf8d4c58f8e5750d6294776ed97316458b596fe562d8664f8eaa2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_678ea0b29dc4dec1a8a7d5fb2c0fcabdc7d380509697154464d8b2dc2d177c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678ea0b29dc4dec1a8a7d5fb2c0fcabdc7d380509697154464d8b2dc2d177c09->enter($__internal_678ea0b29dc4dec1a8a7d5fb2c0fcabdc7d380509697154464d8b2dc2d177c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_32eb2f83aecf8d4c58f8e5750d6294776ed97316458b596fe562d8664f8eaa2b->leave($__internal_32eb2f83aecf8d4c58f8e5750d6294776ed97316458b596fe562d8664f8eaa2b_prof);

        
        $__internal_678ea0b29dc4dec1a8a7d5fb2c0fcabdc7d380509697154464d8b2dc2d177c09->leave($__internal_678ea0b29dc4dec1a8a7d5fb2c0fcabdc7d380509697154464d8b2dc2d177c09_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
