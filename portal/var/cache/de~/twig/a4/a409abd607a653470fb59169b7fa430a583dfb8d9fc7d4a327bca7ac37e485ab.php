<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_6df645fee4db632ed7636283a9c0962d664af559f52067d88daddbb2b7a82567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_fc5edd6cf143366846aaabd720781215c224bea712c8d4ecdb22dc6c1758d859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5edd6cf143366846aaabd720781215c224bea712c8d4ecdb22dc6c1758d859->enter($__internal_fc5edd6cf143366846aaabd720781215c224bea712c8d4ecdb22dc6c1758d859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_519b587c6424a383998c387552fefe5bdd4b4dc8c0d45fb3b6407034f72e4e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519b587c6424a383998c387552fefe5bdd4b4dc8c0d45fb3b6407034f72e4e06->enter($__internal_519b587c6424a383998c387552fefe5bdd4b4dc8c0d45fb3b6407034f72e4e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc5edd6cf143366846aaabd720781215c224bea712c8d4ecdb22dc6c1758d859->leave($__internal_fc5edd6cf143366846aaabd720781215c224bea712c8d4ecdb22dc6c1758d859_prof);

        
        $__internal_519b587c6424a383998c387552fefe5bdd4b4dc8c0d45fb3b6407034f72e4e06->leave($__internal_519b587c6424a383998c387552fefe5bdd4b4dc8c0d45fb3b6407034f72e4e06_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5f45e17a6d9c958d8480e3f8b4303b1205e259586a664acf7683c4c85e99681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f45e17a6d9c958d8480e3f8b4303b1205e259586a664acf7683c4c85e99681->enter($__internal_a5f45e17a6d9c958d8480e3f8b4303b1205e259586a664acf7683c4c85e99681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dcf9c581cd74db21dd22400d0349c4706ddd38890a881605e84cc1dfe144f214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf9c581cd74db21dd22400d0349c4706ddd38890a881605e84cc1dfe144f214->enter($__internal_dcf9c581cd74db21dd22400d0349c4706ddd38890a881605e84cc1dfe144f214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_dcf9c581cd74db21dd22400d0349c4706ddd38890a881605e84cc1dfe144f214->leave($__internal_dcf9c581cd74db21dd22400d0349c4706ddd38890a881605e84cc1dfe144f214_prof);

        
        $__internal_a5f45e17a6d9c958d8480e3f8b4303b1205e259586a664acf7683c4c85e99681->leave($__internal_a5f45e17a6d9c958d8480e3f8b4303b1205e259586a664acf7683c4c85e99681_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
