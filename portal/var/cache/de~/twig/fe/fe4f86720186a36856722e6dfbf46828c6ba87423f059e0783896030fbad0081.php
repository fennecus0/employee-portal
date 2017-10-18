<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_f86568d3d1c71668a906b42ca965d1a16cbd7cd86924e8bcde49fbb376b51cac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_1d9e2c9ad27c8e5cb6d31cc27d33cf2a2ce8389d3a6ee039f50ad38efada6217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9e2c9ad27c8e5cb6d31cc27d33cf2a2ce8389d3a6ee039f50ad38efada6217->enter($__internal_1d9e2c9ad27c8e5cb6d31cc27d33cf2a2ce8389d3a6ee039f50ad38efada6217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_3aebd3df020ffb9df8ef3ce567e77da321e9a7e2f869e899f373544299ee79b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aebd3df020ffb9df8ef3ce567e77da321e9a7e2f869e899f373544299ee79b2->enter($__internal_3aebd3df020ffb9df8ef3ce567e77da321e9a7e2f869e899f373544299ee79b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d9e2c9ad27c8e5cb6d31cc27d33cf2a2ce8389d3a6ee039f50ad38efada6217->leave($__internal_1d9e2c9ad27c8e5cb6d31cc27d33cf2a2ce8389d3a6ee039f50ad38efada6217_prof);

        
        $__internal_3aebd3df020ffb9df8ef3ce567e77da321e9a7e2f869e899f373544299ee79b2->leave($__internal_3aebd3df020ffb9df8ef3ce567e77da321e9a7e2f869e899f373544299ee79b2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20ed44f7152504ebd281351fdc43abe16350522ce6c75f9e662053817919a279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ed44f7152504ebd281351fdc43abe16350522ce6c75f9e662053817919a279->enter($__internal_20ed44f7152504ebd281351fdc43abe16350522ce6c75f9e662053817919a279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8245007af36e013b93592ce44867eb61a775e97267034c245a9168f63bae1fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8245007af36e013b93592ce44867eb61a775e97267034c245a9168f63bae1fc7->enter($__internal_8245007af36e013b93592ce44867eb61a775e97267034c245a9168f63bae1fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8245007af36e013b93592ce44867eb61a775e97267034c245a9168f63bae1fc7->leave($__internal_8245007af36e013b93592ce44867eb61a775e97267034c245a9168f63bae1fc7_prof);

        
        $__internal_20ed44f7152504ebd281351fdc43abe16350522ce6c75f9e662053817919a279->leave($__internal_20ed44f7152504ebd281351fdc43abe16350522ce6c75f9e662053817919a279_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
