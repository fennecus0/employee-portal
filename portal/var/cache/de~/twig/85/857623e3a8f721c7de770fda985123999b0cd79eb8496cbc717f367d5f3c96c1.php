<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_d42e87a7ad3f6f413da5daaf70cfb73c60748b60f347b06c0c6be56f0a888b56 extends Twig_Template
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
        $__internal_9f66b279a0acc1eefd78adc8989d3bd1bba0a77c3fafb6f83bea68421eee076c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f66b279a0acc1eefd78adc8989d3bd1bba0a77c3fafb6f83bea68421eee076c->enter($__internal_9f66b279a0acc1eefd78adc8989d3bd1bba0a77c3fafb6f83bea68421eee076c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_00c0d18b31a16c2681bc190c2a08b7e1100eb12e897921ebaff28079ffe34e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c0d18b31a16c2681bc190c2a08b7e1100eb12e897921ebaff28079ffe34e97->enter($__internal_00c0d18b31a16c2681bc190c2a08b7e1100eb12e897921ebaff28079ffe34e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 15
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
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
        
        $__internal_9f66b279a0acc1eefd78adc8989d3bd1bba0a77c3fafb6f83bea68421eee076c->leave($__internal_9f66b279a0acc1eefd78adc8989d3bd1bba0a77c3fafb6f83bea68421eee076c_prof);

        
        $__internal_00c0d18b31a16c2681bc190c2a08b7e1100eb12e897921ebaff28079ffe34e97->leave($__internal_00c0d18b31a16c2681bc190c2a08b7e1100eb12e897921ebaff28079ffe34e97_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
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
</section>", "@FOSUser/Security/login_content.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
