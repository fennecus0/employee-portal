<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_8407dcdee66b5b68db065d255320d7b35ee8efa084af6d468ed670a890c61ab3 extends Twig_Template
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
            if (($context["error"] ?? null)) {
                // line 14
                echo "                <div class=\"alert alert-danger\">
                    ";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
                echo "
                </div>
            ";
            }
            // line 18
            echo "
            ";
            // line 19
            if (($context["csrf_token"] ?? null)) {
                // line 20
                echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
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
        return array (  86 => 42,  64 => 22,  58 => 20,  56 => 19,  53 => 18,  47 => 15,  44 => 14,  42 => 13,  38 => 12,  33 => 9,  25 => 5,  23 => 4,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login_content.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
