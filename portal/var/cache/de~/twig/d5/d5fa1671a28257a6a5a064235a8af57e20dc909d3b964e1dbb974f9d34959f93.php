<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_78474f150e222739ce8ff0a252dbdabcb7180224b87ad9709ac33a97047896be extends Twig_Template
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
        $__internal_5a4e85aa66a266f6af2a124ddbc7e6247a92ed7426722e94e488d3f83d33c135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4e85aa66a266f6af2a124ddbc7e6247a92ed7426722e94e488d3f83d33c135->enter($__internal_5a4e85aa66a266f6af2a124ddbc7e6247a92ed7426722e94e488d3f83d33c135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_b3bf05752912a8edc00594346f2dfa011e437bc98c904c87b9465fd1d2135fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bf05752912a8edc00594346f2dfa011e437bc98c904c87b9465fd1d2135fb7->enter($__internal_b3bf05752912a8edc00594346f2dfa011e437bc98c904c87b9465fd1d2135fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5a4e85aa66a266f6af2a124ddbc7e6247a92ed7426722e94e488d3f83d33c135->leave($__internal_5a4e85aa66a266f6af2a124ddbc7e6247a92ed7426722e94e488d3f83d33c135_prof);

        
        $__internal_b3bf05752912a8edc00594346f2dfa011e437bc98c904c87b9465fd1d2135fb7->leave($__internal_b3bf05752912a8edc00594346f2dfa011e437bc98c904c87b9465fd1d2135fb7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
