<?php

/* ::topnav.html.twig */
class __TwigTemplate_23fec78469e99c2f471ad05cbeb47d9f6562ae61467e45e0f0af706e9f455249 extends Twig_Template
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
        $__internal_9199f0f83dfea1cc806a41f3adf0d42a3f76e04530253c60e1bb3783ad665cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9199f0f83dfea1cc806a41f3adf0d42a3f76e04530253c60e1bb3783ad665cba->enter($__internal_9199f0f83dfea1cc806a41f3adf0d42a3f76e04530253c60e1bb3783ad665cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::topnav.html.twig"));

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
            echo "\" alt=\"Friedrich PICARD Mitarbeiterportal\">
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
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == "dform")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dform"), "html", null, true);
            echo "\">Dienstfahrt</a></li>
                        <li ";
            // line 18
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == "history")) {
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
        
        $__internal_9199f0f83dfea1cc806a41f3adf0d42a3f76e04530253c60e1bb3783ad665cba->leave($__internal_9199f0f83dfea1cc806a41f3adf0d42a3f76e04530253c60e1bb3783ad665cba_prof);

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
        return array (  82 => 35,  76 => 33,  68 => 29,  66 => 28,  63 => 27,  55 => 18,  47 => 17,  33 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::topnav.html.twig", "/var/www/html/portal/app/Resources/views/topnav.html.twig");
    }
}
