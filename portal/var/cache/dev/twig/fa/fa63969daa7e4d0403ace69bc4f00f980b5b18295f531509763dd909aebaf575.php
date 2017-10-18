<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_0dfde43f61258feb28f2055cbef76b48c422df2b6c9b17d2d87962168062dcce extends Twig_Template
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
        $__internal_601313078fec09c6700b560d5d803cdeac0d659e7feb941934f31d94d7dcea94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601313078fec09c6700b560d5d803cdeac0d659e7feb941934f31d94d7dcea94->enter($__internal_601313078fec09c6700b560d5d803cdeac0d659e7feb941934f31d94d7dcea94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
<section id=\"homepage\">
    ";
        // line 4
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"button buttonBlue\">
            Abmelden
        </a>
    ";
        } else {
            // line 9
            echo "        <img src=\"images/logo.png\" alt=\"\" class=\"logo\">
        <h4>Friedrich PICARD Mitarbeiterportal</h4>

        <form id=\"login-form\" action=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
            ";
            // line 13
            if ((isset($context["error"]) ? $context["error"] : null)) {
                // line 14
                echo "                <div class=\"alert alert-danger\">
                    ";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
                echo "
                </div>
            ";
            }
            // line 18
            echo "
            ";
            // line 19
            if ((isset($context["csrf_token"]) ? $context["csrf_token"] : null)) {
                // line 20
                echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
                echo "\" />
            ";
            }
            // line 22
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

        <a href=\"mailto:vm@picard.de?subject=Registrierung&amp;body=Vorname:%0D%0A%0D%0ANachname:%0D%0A%0D%0AEmail-Adresse:%0D%0A%0D%0APasswort:\">Registrierung</a>
    ";
        }
        // line 42
        echo "</section>";
        
        $__internal_601313078fec09c6700b560d5d803cdeac0d659e7feb941934f31d94d7dcea94->leave($__internal_601313078fec09c6700b560d5d803cdeac0d659e7feb941934f31d94d7dcea94_prof);

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
        return array (  89 => 42,  67 => 22,  61 => 20,  59 => 19,  56 => 18,  50 => 15,  47 => 14,  45 => 13,  41 => 12,  36 => 9,  28 => 5,  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login_content.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
