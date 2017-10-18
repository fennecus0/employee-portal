<?php

/* ::footer.html.twig */
class __TwigTemplate_7eae599f00df733b479425b47deb9eeeedada85199210becb744ac1de8d2fa1a extends Twig_Template
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
        $__internal_53a97015d966c034fbee50fda55df39755ae4200aa12ecf922591fd6b51cedd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a97015d966c034fbee50fda55df39755ae4200aa12ecf922591fd6b51cedd8->enter($__internal_53a97015d966c034fbee50fda55df39755ae4200aa12ecf922591fd6b51cedd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

        // line 1
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 2
            echo "    <section id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 text-center\">
                    <p>Copyright Friedrich PICARD GmbH & Co. KG</p>
                </div>
            </div>
        </div>
    </section>
";
        }
        
        $__internal_53a97015d966c034fbee50fda55df39755ae4200aa12ecf922591fd6b51cedd8->leave($__internal_53a97015d966c034fbee50fda55df39755ae4200aa12ecf922591fd6b51cedd8_prof);

    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::footer.html.twig", "/var/www/html/portal/app/Resources/views/footer.html.twig");
    }
}
