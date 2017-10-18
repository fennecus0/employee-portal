<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5a64c8c591b80d5ef7f88fbd2049717c25c287f6916ebeaf869bc1b66fc6deda extends Twig_Template
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
        $__internal_fa35cf0040a3209c57ab062060e5345563c96a9d69f0f1ca22b7ebea0a1df4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa35cf0040a3209c57ab062060e5345563c96a9d69f0f1ca22b7ebea0a1df4f1->enter($__internal_fa35cf0040a3209c57ab062060e5345563c96a9d69f0f1ca22b7ebea0a1df4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_85173b836826af60a93a23037a521cbd3994d2cd4c9684a3e591365aa5242a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85173b836826af60a93a23037a521cbd3994d2cd4c9684a3e591365aa5242a00->enter($__internal_85173b836826af60a93a23037a521cbd3994d2cd4c9684a3e591365aa5242a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_fa35cf0040a3209c57ab062060e5345563c96a9d69f0f1ca22b7ebea0a1df4f1->leave($__internal_fa35cf0040a3209c57ab062060e5345563c96a9d69f0f1ca22b7ebea0a1df4f1_prof);

        
        $__internal_85173b836826af60a93a23037a521cbd3994d2cd4c9684a3e591365aa5242a00->leave($__internal_85173b836826af60a93a23037a521cbd3994d2cd4c9684a3e591365aa5242a00_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
