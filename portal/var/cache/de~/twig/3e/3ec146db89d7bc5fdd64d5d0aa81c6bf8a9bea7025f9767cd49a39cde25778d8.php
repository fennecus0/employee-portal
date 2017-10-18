<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_37239e602a5092ec6f3961e4c88236d14d00e8f7f3311b4e7a4e6ec50a43e743 extends Twig_Template
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
        $__internal_ed262f5be235ff5263c23517a50721799d890864685fa7d4056d96ee0ea4219d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed262f5be235ff5263c23517a50721799d890864685fa7d4056d96ee0ea4219d->enter($__internal_ed262f5be235ff5263c23517a50721799d890864685fa7d4056d96ee0ea4219d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_9071cd34a69dd7be55a60bbc19f917b08dc261604860dd151b41434fb2557cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9071cd34a69dd7be55a60bbc19f917b08dc261604860dd151b41434fb2557cec->enter($__internal_9071cd34a69dd7be55a60bbc19f917b08dc261604860dd151b41434fb2557cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ed262f5be235ff5263c23517a50721799d890864685fa7d4056d96ee0ea4219d->leave($__internal_ed262f5be235ff5263c23517a50721799d890864685fa7d4056d96ee0ea4219d_prof);

        
        $__internal_9071cd34a69dd7be55a60bbc19f917b08dc261604860dd151b41434fb2557cec->leave($__internal_9071cd34a69dd7be55a60bbc19f917b08dc261604860dd151b41434fb2557cec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
