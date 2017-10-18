<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d413a2b57535ed81c8489b330bbd01e91faa7bda9093defda5245eb2811ed045 extends Twig_Template
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
        $__internal_66d0dcaa7c0008b667437ad4795f9deae1d6c52a58fbb22f336d97af10527c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d0dcaa7c0008b667437ad4795f9deae1d6c52a58fbb22f336d97af10527c85->enter($__internal_66d0dcaa7c0008b667437ad4795f9deae1d6c52a58fbb22f336d97af10527c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_baa5f8646c201205ab4dda1b7f582a2646fdf449d8b2e8e2a3bb8435b4fd0a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa5f8646c201205ab4dda1b7f582a2646fdf449d8b2e8e2a3bb8435b4fd0a21->enter($__internal_baa5f8646c201205ab4dda1b7f582a2646fdf449d8b2e8e2a3bb8435b4fd0a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_66d0dcaa7c0008b667437ad4795f9deae1d6c52a58fbb22f336d97af10527c85->leave($__internal_66d0dcaa7c0008b667437ad4795f9deae1d6c52a58fbb22f336d97af10527c85_prof);

        
        $__internal_baa5f8646c201205ab4dda1b7f582a2646fdf449d8b2e8e2a3bb8435b4fd0a21->leave($__internal_baa5f8646c201205ab4dda1b7f582a2646fdf449d8b2e8e2a3bb8435b4fd0a21_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
