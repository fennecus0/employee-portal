<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_f410ae1bd04b4df0d3128ec67e272aaf4f401289f1bd36a5df018e51eefe8bf2 extends Twig_Template
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
        $__internal_286c7451d129a6659c377154eb4d3aebde78afdbae56d7d35e0e0f0bdca277a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286c7451d129a6659c377154eb4d3aebde78afdbae56d7d35e0e0f0bdca277a0->enter($__internal_286c7451d129a6659c377154eb4d3aebde78afdbae56d7d35e0e0f0bdca277a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_cbaa272674ceff315cd7456936a41b1e2826bba6200b0d76cd4f95166918c408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbaa272674ceff315cd7456936a41b1e2826bba6200b0d76cd4f95166918c408->enter($__internal_cbaa272674ceff315cd7456936a41b1e2826bba6200b0d76cd4f95166918c408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_286c7451d129a6659c377154eb4d3aebde78afdbae56d7d35e0e0f0bdca277a0->leave($__internal_286c7451d129a6659c377154eb4d3aebde78afdbae56d7d35e0e0f0bdca277a0_prof);

        
        $__internal_cbaa272674ceff315cd7456936a41b1e2826bba6200b0d76cd4f95166918c408->leave($__internal_cbaa272674ceff315cd7456936a41b1e2826bba6200b0d76cd4f95166918c408_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
