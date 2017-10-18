<?php

/* ::footer.html.twig */
class __TwigTemplate_8a269487528a033f5137cd523bec16cdbcca12990c9273eab24925b1d6dce8ac extends Twig_Template
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
        $__internal_696d7f0bc87a5a2128724a82d053bd2e37f82e1828736919752d7273443d828c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696d7f0bc87a5a2128724a82d053bd2e37f82e1828736919752d7273443d828c->enter($__internal_696d7f0bc87a5a2128724a82d053bd2e37f82e1828736919752d7273443d828c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

        $__internal_e995000c63a3a10cfc8754b9f760a3fd4b064cd253d376f91c39c541dfe2e66d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e995000c63a3a10cfc8754b9f760a3fd4b064cd253d376f91c39c541dfe2e66d->enter($__internal_e995000c63a3a10cfc8754b9f760a3fd4b064cd253d376f91c39c541dfe2e66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

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
        
        $__internal_696d7f0bc87a5a2128724a82d053bd2e37f82e1828736919752d7273443d828c->leave($__internal_696d7f0bc87a5a2128724a82d053bd2e37f82e1828736919752d7273443d828c_prof);

        
        $__internal_e995000c63a3a10cfc8754b9f760a3fd4b064cd253d376f91c39c541dfe2e66d->leave($__internal_e995000c63a3a10cfc8754b9f760a3fd4b064cd253d376f91c39c541dfe2e66d_prof);

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
        return array (  27 => 2,  25 => 1,);
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
