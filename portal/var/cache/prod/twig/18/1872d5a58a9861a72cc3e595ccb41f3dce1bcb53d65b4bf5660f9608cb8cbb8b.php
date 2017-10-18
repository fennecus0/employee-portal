<?php

/* :default:index.html.twig */
class __TwigTemplate_64e5698cd688e41ff12e2c710997935ef8f8883c08008406140cf1a190c468ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main-empty.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'page_header' => array($this, 'block_page_header'),
            'page_center' => array($this, 'block_page_center'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main-empty.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        echo "Hallo ";
        echo twig_escape_filter($this->env, ($context["names"] ?? null), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_page_center($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-image\">
                    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dform"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img1.jpg"), "html", null, true);
        echo "\">
                    </a>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title\">Dienstfahrt</span>
                </div>
                <div class=\"card-action\">
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dform"), "html", null, true);
        echo "\">Anmeldung</a>
                </div>
            </div>
        </div>

        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-image\">
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("history"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img2.jpg"), "html", null, true);
        echo "\">
                    </a>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title\">Dienstfahrt Historie</span>
                </div>
                <div class=\"card-action\">
                    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("history"), "html", null, true);
        echo "\">Anschauen</a>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 34,  75 => 27,  71 => 26,  60 => 18,  50 => 11,  46 => 10,  40 => 6,  37 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "/var/www/html/portal/app/Resources/views/default/index.html.twig");
    }
}
