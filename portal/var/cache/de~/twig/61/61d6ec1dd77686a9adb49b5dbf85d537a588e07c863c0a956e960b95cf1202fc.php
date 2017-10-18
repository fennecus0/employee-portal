<?php

/* ::topnav.html.twig */
class __TwigTemplate_d7ace7a4d3f0b1c1e14b44664513e2b06e692506a0810ddab818461617b1c3e6 extends Twig_Template
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
        $__internal_466cd534328c19d5b9ccdb7e4734472f2a344c52743d077366e3cfc29689f760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466cd534328c19d5b9ccdb7e4734472f2a344c52743d077366e3cfc29689f760->enter($__internal_466cd534328c19d5b9ccdb7e4734472f2a344c52743d077366e3cfc29689f760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::topnav.html.twig"));

        $__internal_8d81276e9ea5e93c9ef5c926bf10fe5986787d59d2565b066cd064a8d96ae697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d81276e9ea5e93c9ef5c926bf10fe5986787d59d2565b066cd064a8d96ae697->enter($__internal_8d81276e9ea5e93c9ef5c926bf10fe5986787d59d2565b066cd064a8d96ae697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::topnav.html.twig"));

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
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "dform")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dform"), "html", null, true);
            echo "\">Dienstfahrt</a></li>
                        <li ";
            // line 18
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "history")) {
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
        
        $__internal_466cd534328c19d5b9ccdb7e4734472f2a344c52743d077366e3cfc29689f760->leave($__internal_466cd534328c19d5b9ccdb7e4734472f2a344c52743d077366e3cfc29689f760_prof);

        
        $__internal_8d81276e9ea5e93c9ef5c926bf10fe5986787d59d2565b066cd064a8d96ae697->leave($__internal_8d81276e9ea5e93c9ef5c926bf10fe5986787d59d2565b066cd064a8d96ae697_prof);

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
