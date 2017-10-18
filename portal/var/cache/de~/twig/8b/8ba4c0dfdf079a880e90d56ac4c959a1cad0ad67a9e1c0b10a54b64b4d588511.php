<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_26483063d8a79f52659e0f008c60b8f81ae0da13bf1ff06a0c7d039fd198207e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_f8ad430d5ac51458eb02b1da4f554eaf525815400950c0569fd87ba83c60eea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ad430d5ac51458eb02b1da4f554eaf525815400950c0569fd87ba83c60eea7->enter($__internal_f8ad430d5ac51458eb02b1da4f554eaf525815400950c0569fd87ba83c60eea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_477451f13599084f0b260d42c33a73a84ee05f4b5e2b6cb5236d7d817a987e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477451f13599084f0b260d42c33a73a84ee05f4b5e2b6cb5236d7d817a987e5e->enter($__internal_477451f13599084f0b260d42c33a73a84ee05f4b5e2b6cb5236d7d817a987e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8ad430d5ac51458eb02b1da4f554eaf525815400950c0569fd87ba83c60eea7->leave($__internal_f8ad430d5ac51458eb02b1da4f554eaf525815400950c0569fd87ba83c60eea7_prof);

        
        $__internal_477451f13599084f0b260d42c33a73a84ee05f4b5e2b6cb5236d7d817a987e5e->leave($__internal_477451f13599084f0b260d42c33a73a84ee05f4b5e2b6cb5236d7d817a987e5e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_676c2e912aac16a1909aabe307ff1a95444159ac9239efdc5211944c7cb21f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676c2e912aac16a1909aabe307ff1a95444159ac9239efdc5211944c7cb21f4a->enter($__internal_676c2e912aac16a1909aabe307ff1a95444159ac9239efdc5211944c7cb21f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2070f9ed9cd968f03f7ccb868808e0c318a6bc91315c416185ecda7ce31cfc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2070f9ed9cd968f03f7ccb868808e0c318a6bc91315c416185ecda7ce31cfc43->enter($__internal_2070f9ed9cd968f03f7ccb868808e0c318a6bc91315c416185ecda7ce31cfc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_2070f9ed9cd968f03f7ccb868808e0c318a6bc91315c416185ecda7ce31cfc43->leave($__internal_2070f9ed9cd968f03f7ccb868808e0c318a6bc91315c416185ecda7ce31cfc43_prof);

        
        $__internal_676c2e912aac16a1909aabe307ff1a95444159ac9239efdc5211944c7cb21f4a->leave($__internal_676c2e912aac16a1909aabe307ff1a95444159ac9239efdc5211944c7cb21f4a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
