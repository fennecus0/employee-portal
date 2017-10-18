<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_444c7dcf0f76f968e9ab080b05f0c8660c2fedf31e85a6bd034ce3d3a0a80429 extends Twig_Template
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
        $__internal_b01d413989ca7d6c356f6887964e121c648a2dac893f031bde878349c1c6ade7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01d413989ca7d6c356f6887964e121c648a2dac893f031bde878349c1c6ade7->enter($__internal_b01d413989ca7d6c356f6887964e121c648a2dac893f031bde878349c1c6ade7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

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
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
            echo "\" alt=\"\" class=\"logo\">

        ";
            // line 11
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("id" => "registerForm")));
            echo "

        <div class=\"form-group\">
            ";
            // line 14
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            <span class=\"highlight\"></span><span class=\"bar\"></span>
            <label>Email</label>
        </div>

        <div class=\"form-group\">
            ";
            // line 20
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            <span class=\"highlight\"></span><span class=\"bar\"></span>
            <label>Vorname</label>
        </div>

        <div class=\"form-group\">
            ";
            // line 26
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            <span class=\"highlight\"></span><span class=\"bar\"></span>
            <label>Nachname</label>
        </div>

        <div class=\"form-group\">
            ";
            // line 32
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            <span class=\"highlight\"></span><span class=\"bar\"></span>
            <label>Passwort eingeben</label>
        </div>

        <div class=\"form-group\">
            ";
            // line 38
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            <span class=\"highlight\"></span><span class=\"bar\"></span>
            <label>Passwort wiederholen</label>
        </div>

        <button type=\"submit\" class=\"button buttonBlue\">Registrieren
            <div class=\"ripples buttonRipples\"><span class=\"ripplesCircle\"></span></div>
        </button>
        ";
            // line 46
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
            echo "
    ";
        }
        // line 48
        echo "</section>
";
        
        $__internal_b01d413989ca7d6c356f6887964e121c648a2dac893f031bde878349c1c6ade7->leave($__internal_b01d413989ca7d6c356f6887964e121c648a2dac893f031bde878349c1c6ade7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 48,  95 => 46,  84 => 38,  75 => 32,  66 => 26,  57 => 20,  48 => 14,  42 => 11,  36 => 9,  28 => 5,  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Registration/register_content.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
