<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_0cc8de5ffdade9124bd4d0568143f0901b1e57c95413b5a36712d7803bf4e37c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"page-content\">
        <div class=\"error-block\">
            <div class=\"logo\">
                <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Friedrich PICARD Mitarbeiterportal\">
                </a>
                <p>Friedrich PICARD Mitarbeiterportal</p>
            </div>


            <h1>404</h1>

            <p>Die Seite wurde nicht gefunden.</p>

            <p>Die von Ihnen gesuchte Seite existiert leider nicht oder der Link ist veraltet.</p>

            <p><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/"), "html", null, true);
        echo "\">Zur Startseite</a></p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  35 => 6,  31 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:exception.html.twig", "/var/www/html/portal/app/Resources/TwigBundle/views/Exception/exception.html.twig");
    }
}
