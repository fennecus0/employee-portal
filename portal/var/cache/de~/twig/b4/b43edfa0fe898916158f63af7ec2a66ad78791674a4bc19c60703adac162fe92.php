<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c55bd935574374a503c1801a8af42bad4aaf2212b5d69706b9513b219ce92e21 extends Twig_Template
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
        $__internal_6a7df6b6aaa0212fee38d78382accd0d1d0308b6cf8a547269ee0a2876fe7917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7df6b6aaa0212fee38d78382accd0d1d0308b6cf8a547269ee0a2876fe7917->enter($__internal_6a7df6b6aaa0212fee38d78382accd0d1d0308b6cf8a547269ee0a2876fe7917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_4065988733b400739a6f612f5d7695d8f986c2ac0a63f4c0c4e5f4ce68a28568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4065988733b400739a6f612f5d7695d8f986c2ac0a63f4c0c4e5f4ce68a28568->enter($__internal_4065988733b400739a6f612f5d7695d8f986c2ac0a63f4c0c4e5f4ce68a28568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6a7df6b6aaa0212fee38d78382accd0d1d0308b6cf8a547269ee0a2876fe7917->leave($__internal_6a7df6b6aaa0212fee38d78382accd0d1d0308b6cf8a547269ee0a2876fe7917_prof);

        
        $__internal_4065988733b400739a6f612f5d7695d8f986c2ac0a63f4c0c4e5f4ce68a28568->leave($__internal_4065988733b400739a6f612f5d7695d8f986c2ac0a63f4c0c4e5f4ce68a28568_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
