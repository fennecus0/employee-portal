<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_bee236285d2f5aeee3cdabf23dc45cbe3bc154f372de5d1a5881d69f9068a6ee extends Twig_Template
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
        $__internal_a8f703108d6ec105713df37f2696018615086d0960291195ea9777bf2d20614d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f703108d6ec105713df37f2696018615086d0960291195ea9777bf2d20614d->enter($__internal_a8f703108d6ec105713df37f2696018615086d0960291195ea9777bf2d20614d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_dbd04231d51b807ccda4220afb339ab90c1b883df1d562f76274a34bdb9bb6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd04231d51b807ccda4220afb339ab90c1b883df1d562f76274a34bdb9bb6ec->enter($__internal_dbd04231d51b807ccda4220afb339ab90c1b883df1d562f76274a34bdb9bb6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a8f703108d6ec105713df37f2696018615086d0960291195ea9777bf2d20614d->leave($__internal_a8f703108d6ec105713df37f2696018615086d0960291195ea9777bf2d20614d_prof);

        
        $__internal_dbd04231d51b807ccda4220afb339ab90c1b883df1d562f76274a34bdb9bb6ec->leave($__internal_dbd04231d51b807ccda4220afb339ab90c1b883df1d562f76274a34bdb9bb6ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
