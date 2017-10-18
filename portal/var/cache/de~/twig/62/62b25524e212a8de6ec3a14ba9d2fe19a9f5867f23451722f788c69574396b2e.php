<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_22f3b89784da0bd35ff6481c277c7c0eaee4e0380c822ed177e7f29a3a98fa6f extends Twig_Template
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
        $__internal_04e664e7dbcc6e17e5e00a63b9b3603dda6d3c72a38f2e9d150a324338f2cc63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e664e7dbcc6e17e5e00a63b9b3603dda6d3c72a38f2e9d150a324338f2cc63->enter($__internal_04e664e7dbcc6e17e5e00a63b9b3603dda6d3c72a38f2e9d150a324338f2cc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_c717a1d751da9491831d3c00ec2af25d19da0b2428ec82510d45dfd4bf3dd239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c717a1d751da9491831d3c00ec2af25d19da0b2428ec82510d45dfd4bf3dd239->enter($__internal_c717a1d751da9491831d3c00ec2af25d19da0b2428ec82510d45dfd4bf3dd239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_04e664e7dbcc6e17e5e00a63b9b3603dda6d3c72a38f2e9d150a324338f2cc63->leave($__internal_04e664e7dbcc6e17e5e00a63b9b3603dda6d3c72a38f2e9d150a324338f2cc63_prof);

        
        $__internal_c717a1d751da9491831d3c00ec2af25d19da0b2428ec82510d45dfd4bf3dd239->leave($__internal_c717a1d751da9491831d3c00ec2af25d19da0b2428ec82510d45dfd4bf3dd239_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
