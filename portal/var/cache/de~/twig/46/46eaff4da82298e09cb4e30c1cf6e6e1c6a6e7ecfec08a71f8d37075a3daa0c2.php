<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_92666ab8d844800ce49323c36b4971d68b0c4f40da964c840fed28284027e876 extends Twig_Template
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
        $__internal_4e0d477bae74478c37fce10847e548a1b488cedc89410dcdedcc4f9849b24a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0d477bae74478c37fce10847e548a1b488cedc89410dcdedcc4f9849b24a10->enter($__internal_4e0d477bae74478c37fce10847e548a1b488cedc89410dcdedcc4f9849b24a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_89f64983a165af8fd047fe929cc8c3e664188d1c6d3a5cff4ec76c2b0314922c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f64983a165af8fd047fe929cc8c3e664188d1c6d3a5cff4ec76c2b0314922c->enter($__internal_89f64983a165af8fd047fe929cc8c3e664188d1c6d3a5cff4ec76c2b0314922c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4e0d477bae74478c37fce10847e548a1b488cedc89410dcdedcc4f9849b24a10->leave($__internal_4e0d477bae74478c37fce10847e548a1b488cedc89410dcdedcc4f9849b24a10_prof);

        
        $__internal_89f64983a165af8fd047fe929cc8c3e664188d1c6d3a5cff4ec76c2b0314922c->leave($__internal_89f64983a165af8fd047fe929cc8c3e664188d1c6d3a5cff4ec76c2b0314922c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
