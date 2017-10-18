<?php

/* ::topnav.html.twig */
class __TwigTemplate_6d9e337077e3cbcf81728f69b8c709f9198f8910fa9fe2983fc403eeb2e906d7 extends Twig_Template
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
        $__internal_d2458ece028e637ce702ef5f6fb3e041cf74ec07bcb544467dafb1f937accb46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2458ece028e637ce702ef5f6fb3e041cf74ec07bcb544467dafb1f937accb46->enter($__internal_d2458ece028e637ce702ef5f6fb3e041cf74ec07bcb544467dafb1f937accb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::topnav.html.twig"));

        $__internal_77727dc67d5eead3497d65a2f5ece1e39595b3c7513fdd04c86b3bac5f56cdb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77727dc67d5eead3497d65a2f5ece1e39595b3c7513fdd04c86b3bac5f56cdb8->enter($__internal_77727dc67d5eead3497d65a2f5ece1e39595b3c7513fdd04c86b3bac5f56cdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::topnav.html.twig"));

        // line 1
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 2
            echo "    <nav class=\"navbar navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/"), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
            echo "\" alt=\"\">
                </a>

                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#hauptMenu\">
                    <span class=\"icon-bar top-bar\"></span>
                    <span class=\"icon-bar middle-bar\"></span>
                    <span class=\"icon-bar bottom-bar\"></span>
                </button>

                <div class=\"collapse navbar-collapse navbarCollapse\" id=\"hauptMenu\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li ";
            // line 17
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "dform")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dform"), "html", null, true);
            echo "\">Dienstfahrt</a></li>
                        <li ";
            // line 18
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "history")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("history"), "html", null, true);
            echo "\">Historie</a></li>
                        ";
            // line 27
            echo "                        <li>
                            ";
            // line 28
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 29
                echo "                                <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
                                    Abmelden
                                </a>
                            ";
            } else {
                // line 33
                echo "                                <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">Abmelden</a>
                            ";
            }
            // line 35
            echo "                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
";
        }
        
        $__internal_d2458ece028e637ce702ef5f6fb3e041cf74ec07bcb544467dafb1f937accb46->leave($__internal_d2458ece028e637ce702ef5f6fb3e041cf74ec07bcb544467dafb1f937accb46_prof);

        
        $__internal_77727dc67d5eead3497d65a2f5ece1e39595b3c7513fdd04c86b3bac5f56cdb8->leave($__internal_77727dc67d5eead3497d65a2f5ece1e39595b3c7513fdd04c86b3bac5f56cdb8_prof);

    }

    public function getTemplateName()
    {
        return "::topnav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 35,  79 => 33,  71 => 29,  69 => 28,  66 => 27,  58 => 18,  50 => 17,  36 => 6,  32 => 5,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    <nav class=\"navbar navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"{{ asset('/') }}\">
                    <img src=\"{{ asset('images/logo.png') }}\" alt=\"\">
                </a>

                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#hauptMenu\">
                    <span class=\"icon-bar top-bar\"></span>
                    <span class=\"icon-bar middle-bar\"></span>
                    <span class=\"icon-bar bottom-bar\"></span>
                </button>

                <div class=\"collapse navbar-collapse navbarCollapse\" id=\"hauptMenu\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li {% if app.request.get('_route') == 'dform' %} class=\"active\" {% endif %}><a href=\"{{ asset('dform') }}\">Dienstfahrt</a></li>
                        <li {% if app.request.get('_route') == 'history' %} class=\"active\" {% endif %}><a href=\"{{ asset('history') }}\">Historie</a></li>
                        {#<li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Mein Konto
                                <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Settings</a></li>
                                <li><a href=\"#\">History</a></li>
                            </ul>
                        </li>#}
                        <li>
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                    Abmelden
                                </a>
                            {% else %}
                                <a href=\"{{ path('fos_user_security_login') }}\">Abmelden</a>
                            {% endif %}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
{% endif %}", "::topnav.html.twig", "/var/www/html/portal/app/Resources/views/topnav.html.twig");
    }
}
