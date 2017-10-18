<?php

/* ::footer.html.twig */
class __TwigTemplate_8f97cdf4bf28c881cfde88cc5702f90eed08d2bd2e9fc5b0c86cd8042d07b88c extends Twig_Template
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
        $__internal_0c41f588d5961fa9c2648949017af32e4f354012e7076e99960837d9d234b67b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c41f588d5961fa9c2648949017af32e4f354012e7076e99960837d9d234b67b->enter($__internal_0c41f588d5961fa9c2648949017af32e4f354012e7076e99960837d9d234b67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

        $__internal_cf81ebfd93128764242932817e75af5da18562da9828db67fbced8829c1d1fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf81ebfd93128764242932817e75af5da18562da9828db67fbced8829c1d1fb2->enter($__internal_cf81ebfd93128764242932817e75af5da18562da9828db67fbced8829c1d1fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

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
        
        $__internal_0c41f588d5961fa9c2648949017af32e4f354012e7076e99960837d9d234b67b->leave($__internal_0c41f588d5961fa9c2648949017af32e4f354012e7076e99960837d9d234b67b_prof);

        
        $__internal_cf81ebfd93128764242932817e75af5da18562da9828db67fbced8829c1d1fb2->leave($__internal_cf81ebfd93128764242932817e75af5da18562da9828db67fbced8829c1d1fb2_prof);

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
