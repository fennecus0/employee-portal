<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_614d459a9290d59279471db6a470109583b1eddc9a890b241150bb03f53dc8d1 extends Twig_Template
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
        $__internal_65a352479b38952836c2bbe20cdef2f9a96df20a3b737bc2fc71e3346c5baaa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a352479b38952836c2bbe20cdef2f9a96df20a3b737bc2fc71e3346c5baaa5->enter($__internal_65a352479b38952836c2bbe20cdef2f9a96df20a3b737bc2fc71e3346c5baaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_b5d12b99eb3dcd83cf3031950b3b85b6bf74811eaf97908433c7b21f93182aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d12b99eb3dcd83cf3031950b3b85b6bf74811eaf97908433c7b21f93182aca->enter($__internal_b5d12b99eb3dcd83cf3031950b3b85b6bf74811eaf97908433c7b21f93182aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
<section id=\"homepage\">
    <img src=\"images/logo.png\" alt=\"\" class=\"logo\">
    <h4>Friedrich PICARD Mitarbeiterportal</h4>

    <form id=\"login-form\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 8
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 9
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 15
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
        ";
        }
        // line 17
        echo "
        <div class=\"form-group\">
            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"_username\">
            <span class=\"highlight\"></span><span class=\"bar\"></span>
            <label>Email</label>
        </div>

        <div class=\"form-group\">
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
            <span class=\"highlight\"></span><span class=\"bar\"></span>
            <label>Passwort</label>
        </div>

        <button type=\"submit\" name=\"_submit\" class=\"button buttonBlue\">Anmelden
            <div class=\"ripples buttonRipples\"><span class=\"ripplesCircle\"></span></div>
        </button>
    </form>
</section>";
        
        $__internal_65a352479b38952836c2bbe20cdef2f9a96df20a3b737bc2fc71e3346c5baaa5->leave($__internal_65a352479b38952836c2bbe20cdef2f9a96df20a3b737bc2fc71e3346c5baaa5_prof);

        
        $__internal_b5d12b99eb3dcd83cf3031950b3b85b6bf74811eaf97908433c7b21f93182aca->leave($__internal_b5d12b99eb3dcd83cf3031950b3b85b6bf74811eaf97908433c7b21f93182aca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  52 => 15,  50 => 14,  47 => 13,  41 => 10,  38 => 9,  36 => 8,  32 => 7,  25 => 2,);
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

<section id=\"homepage\">
    <img src=\"images/logo.png\" alt=\"\" class=\"logo\">
    <h4>Friedrich PICARD Mitarbeiterportal</h4>

    <form id=\"login-form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        {% if error %}
            <div class=\"alert alert-danger\">
                {{ error.messageKey|trans(error.messageData, 'security') }}
            </div>
        {% endif %}

        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}

        <div class=\"form-group\">
            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"_username\">
            <span class=\"highlight\"></span><span class=\"bar\"></span>
            <label>Email</label>
        </div>

        <div class=\"form-group\">
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
            <span class=\"highlight\"></span><span class=\"bar\"></span>
            <label>Passwort</label>
        </div>

        <button type=\"submit\" name=\"_submit\" class=\"button buttonBlue\">Anmelden
            <div class=\"ripples buttonRipples\"><span class=\"ripplesCircle\"></span></div>
        </button>
    </form>
</section>", "FOSUserBundle:Security:login_content.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
