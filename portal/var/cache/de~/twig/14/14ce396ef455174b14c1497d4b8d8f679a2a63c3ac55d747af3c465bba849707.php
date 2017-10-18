<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_84a547fd9f25896f44ae8212b24fa64bebe73c03f1126eac2f4fbc2d586bb0da extends Twig_Template
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
        $__internal_e41fd5bb61cf3026f94d418dfb4cc7c01bdad2fd292f8207bd3da2c0ee2b5702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41fd5bb61cf3026f94d418dfb4cc7c01bdad2fd292f8207bd3da2c0ee2b5702->enter($__internal_e41fd5bb61cf3026f94d418dfb4cc7c01bdad2fd292f8207bd3da2c0ee2b5702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_49b0e25375dba5176ef3b7f12e81f7bce3ee9ef39ff4dcfeae63b3e1ed284009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b0e25375dba5176ef3b7f12e81f7bce3ee9ef39ff4dcfeae63b3e1ed284009->enter($__internal_49b0e25375dba5176ef3b7f12e81f7bce3ee9ef39ff4dcfeae63b3e1ed284009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e41fd5bb61cf3026f94d418dfb4cc7c01bdad2fd292f8207bd3da2c0ee2b5702->leave($__internal_e41fd5bb61cf3026f94d418dfb4cc7c01bdad2fd292f8207bd3da2c0ee2b5702_prof);

        
        $__internal_49b0e25375dba5176ef3b7f12e81f7bce3ee9ef39ff4dcfeae63b3e1ed284009->leave($__internal_49b0e25375dba5176ef3b7f12e81f7bce3ee9ef39ff4dcfeae63b3e1ed284009_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
