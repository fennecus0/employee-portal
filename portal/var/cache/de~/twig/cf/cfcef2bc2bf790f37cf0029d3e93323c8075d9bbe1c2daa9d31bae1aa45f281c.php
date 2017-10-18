<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_d014dcac5fdd8d8528d9837b5c21683690395f9f12e4dba4b327cfe58b657fdf extends Twig_Template
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
        $__internal_21064210ed8b84c7e9cad0ebcd8b42bbfdc8bf58cf6d21ed2b68024606c9cbb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21064210ed8b84c7e9cad0ebcd8b42bbfdc8bf58cf6d21ed2b68024606c9cbb1->enter($__internal_21064210ed8b84c7e9cad0ebcd8b42bbfdc8bf58cf6d21ed2b68024606c9cbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_aca985a085d5da1bbe0402dc6f1c74ac1b6ab2de69861fddc8f8590625be2c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca985a085d5da1bbe0402dc6f1c74ac1b6ab2de69861fddc8f8590625be2c8b->enter($__internal_aca985a085d5da1bbe0402dc6f1c74ac1b6ab2de69861fddc8f8590625be2c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_21064210ed8b84c7e9cad0ebcd8b42bbfdc8bf58cf6d21ed2b68024606c9cbb1->leave($__internal_21064210ed8b84c7e9cad0ebcd8b42bbfdc8bf58cf6d21ed2b68024606c9cbb1_prof);

        
        $__internal_aca985a085d5da1bbe0402dc6f1c74ac1b6ab2de69861fddc8f8590625be2c8b->leave($__internal_aca985a085d5da1bbe0402dc6f1c74ac1b6ab2de69861fddc8f8590625be2c8b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
