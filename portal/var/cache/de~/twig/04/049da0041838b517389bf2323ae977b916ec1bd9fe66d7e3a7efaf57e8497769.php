<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_bdc1696d9ec1b02b404e3d4490c3a459d5ba3f63efe9c46a1c7949f1b57b18b9 extends Twig_Template
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
        $__internal_9f0ccccadfed0abf71e0d93f0308c82b54c6defa24883eb1c6bd71d31adf7ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0ccccadfed0abf71e0d93f0308c82b54c6defa24883eb1c6bd71d31adf7ea7->enter($__internal_9f0ccccadfed0abf71e0d93f0308c82b54c6defa24883eb1c6bd71d31adf7ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.txt.twig"));

        $__internal_9664dbcb6698d27bdd7ea3cf67aa5d6583e8b24f8a0c6f0c1ceadc04de827a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9664dbcb6698d27bdd7ea3cf67aa5d6583e8b24f8a0c6f0c1ceadc04de827a67->enter($__internal_9664dbcb6698d27bdd7ea3cf67aa5d6583e8b24f8a0c6f0c1ceadc04de827a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.txt.twig"));

        // line 1
        if ($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "class", array()) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "type", array())) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute(($context["trace"] ?? null), "file", array(), "any", true, true) && $this->getAttribute(($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
        $__internal_9f0ccccadfed0abf71e0d93f0308c82b54c6defa24883eb1c6bd71d31adf7ea7->leave($__internal_9f0ccccadfed0abf71e0d93f0308c82b54c6defa24883eb1c6bd71d31adf7ea7_prof);

        
        $__internal_9664dbcb6698d27bdd7ea3cf67aa5d6583e8b24f8a0c6f0c1ceadc04de827a67->leave($__internal_9664dbcb6698d27bdd7ea3cf67aa5d6583e8b24f8a0c6f0c1ceadc04de827a67_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "TwigBundle:Exception:trace.txt.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
