<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_318a7f30e5ad7bbdcb2b7c22aaa0fbf7e14eebd9f750797a9087ba60d748e60f extends Twig_Template
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
        $__internal_bf2caa4f2af3a5094560138ee6ffe53280702ee57ad37d4e6b467a9be07221ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf2caa4f2af3a5094560138ee6ffe53280702ee57ad37d4e6b467a9be07221ec->enter($__internal_bf2caa4f2af3a5094560138ee6ffe53280702ee57ad37d4e6b467a9be07221ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f176c1fa180cbdc58de7b3394502be90b25e123ff8eb9787567baa21e3edf4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f176c1fa180cbdc58de7b3394502be90b25e123ff8eb9787567baa21e3edf4e4->enter($__internal_f176c1fa180cbdc58de7b3394502be90b25e123ff8eb9787567baa21e3edf4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_bf2caa4f2af3a5094560138ee6ffe53280702ee57ad37d4e6b467a9be07221ec->leave($__internal_bf2caa4f2af3a5094560138ee6ffe53280702ee57ad37d4e6b467a9be07221ec_prof);

        
        $__internal_f176c1fa180cbdc58de7b3394502be90b25e123ff8eb9787567baa21e3edf4e4->leave($__internal_f176c1fa180cbdc58de7b3394502be90b25e123ff8eb9787567baa21e3edf4e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
