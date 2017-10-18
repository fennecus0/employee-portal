<?php

/* ::footer.html.twig */
class __TwigTemplate_dd8bb71e521c62dcd9fd4a67cc17e2449a442beb13f48088641095d17297a517 extends Twig_Template
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
        $__internal_4cc865a194650c4ddeacaecb61945a2cdd51558fe01502b6e86896e58e0d0218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc865a194650c4ddeacaecb61945a2cdd51558fe01502b6e86896e58e0d0218->enter($__internal_4cc865a194650c4ddeacaecb61945a2cdd51558fe01502b6e86896e58e0d0218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

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
        
        $__internal_4cc865a194650c4ddeacaecb61945a2cdd51558fe01502b6e86896e58e0d0218->leave($__internal_4cc865a194650c4ddeacaecb61945a2cdd51558fe01502b6e86896e58e0d0218_prof);

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
        return new Twig_Source("{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    <section id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 text-center\">
                    <p>Copyright Friedrich PICARD GmbH & Co. KG</p>
                </div>
            </div>
        </div>
    </section>
{% endif %}", "::footer.html.twig", "/var/www/html/portal/app/Resources/views/footer.html.twig");
    }
}
