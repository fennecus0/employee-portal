<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_5bc1b692f76b4b7f3a5d4412173518e863ab3899bb4f2173d91ce63cc6426403 extends Twig_Template
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
        $__internal_91f2b98d3259271a56b727c331a83101045c0e512c70b334afe8747f7c121700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f2b98d3259271a56b727c331a83101045c0e512c70b334afe8747f7c121700->enter($__internal_91f2b98d3259271a56b727c331a83101045c0e512c70b334afe8747f7c121700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_fa4c55d2faf5bdf7104c7613dc01e4189f21f6d5b0606b57896f094dd0ad6d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4c55d2faf5bdf7104c7613dc01e4189f21f6d5b0606b57896f094dd0ad6d50->enter($__internal_fa4c55d2faf5bdf7104c7613dc01e4189f21f6d5b0606b57896f094dd0ad6d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_91f2b98d3259271a56b727c331a83101045c0e512c70b334afe8747f7c121700->leave($__internal_91f2b98d3259271a56b727c331a83101045c0e512c70b334afe8747f7c121700_prof);

        
        $__internal_fa4c55d2faf5bdf7104c7613dc01e4189f21f6d5b0606b57896f094dd0ad6d50->leave($__internal_fa4c55d2faf5bdf7104c7613dc01e4189f21f6d5b0606b57896f094dd0ad6d50_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
