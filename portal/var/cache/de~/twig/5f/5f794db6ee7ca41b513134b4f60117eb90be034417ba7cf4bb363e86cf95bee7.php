<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_85f16fb6e29574ea8870688ac71707fd8944d1cd84ae57604616f86fa00a9512 extends Twig_Template
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
        $__internal_4126a6625efc110780548d6f0b287aaafa62a97f6d03b7af1c18132b632289e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4126a6625efc110780548d6f0b287aaafa62a97f6d03b7af1c18132b632289e1->enter($__internal_4126a6625efc110780548d6f0b287aaafa62a97f6d03b7af1c18132b632289e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_71ac6ff4c82cb3ba0a0db285dc7d75985a51c35f2fec2569f88ba69a5b79d5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ac6ff4c82cb3ba0a0db285dc7d75985a51c35f2fec2569f88ba69a5b79d5b3->enter($__internal_71ac6ff4c82cb3ba0a0db285dc7d75985a51c35f2fec2569f88ba69a5b79d5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4126a6625efc110780548d6f0b287aaafa62a97f6d03b7af1c18132b632289e1->leave($__internal_4126a6625efc110780548d6f0b287aaafa62a97f6d03b7af1c18132b632289e1_prof);

        
        $__internal_71ac6ff4c82cb3ba0a0db285dc7d75985a51c35f2fec2569f88ba69a5b79d5b3->leave($__internal_71ac6ff4c82cb3ba0a0db285dc7d75985a51c35f2fec2569f88ba69a5b79d5b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
