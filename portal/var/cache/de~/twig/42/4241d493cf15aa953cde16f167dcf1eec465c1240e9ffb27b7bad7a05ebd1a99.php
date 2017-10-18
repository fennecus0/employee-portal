<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_e70072b7569cd81ccb792b5a31081f18cef43e0596c00868c8598a7c4a0e9af7 extends Twig_Template
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
        $__internal_4b1ed79b7792e5280a284a50023a24ea23830e6af4fb49610de4515a9d687af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1ed79b7792e5280a284a50023a24ea23830e6af4fb49610de4515a9d687af2->enter($__internal_4b1ed79b7792e5280a284a50023a24ea23830e6af4fb49610de4515a9d687af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_068d511e2ab6b19fe40ec2477bc010ebd7bf3a947e8d746a7f4e1c97d3cd6a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068d511e2ab6b19fe40ec2477bc010ebd7bf3a947e8d746a7f4e1c97d3cd6a5c->enter($__internal_068d511e2ab6b19fe40ec2477bc010ebd7bf3a947e8d746a7f4e1c97d3cd6a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_4b1ed79b7792e5280a284a50023a24ea23830e6af4fb49610de4515a9d687af2->leave($__internal_4b1ed79b7792e5280a284a50023a24ea23830e6af4fb49610de4515a9d687af2_prof);

        
        $__internal_068d511e2ab6b19fe40ec2477bc010ebd7bf3a947e8d746a7f4e1c97d3cd6a5c->leave($__internal_068d511e2ab6b19fe40ec2477bc010ebd7bf3a947e8d746a7f4e1c97d3cd6a5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
