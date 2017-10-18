<?php

/* :Pagination/view:sortable_link.html.twig */
class __TwigTemplate_5b1ee1ad1b6ae8d02330248dfed35a0a02e958067a0af14eff38c71293136be8 extends Twig_Template
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
        $__internal_464540c58e5a7faa3103d2276eac65c4daf32f9748980df3f4baa25ed9caac8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_464540c58e5a7faa3103d2276eac65c4daf32f9748980df3f4baa25ed9caac8d->enter($__internal_464540c58e5a7faa3103d2276eac65c4daf32f9748980df3f4baa25ed9caac8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Pagination/view:sortable_link.html.twig"));

        $__internal_2bcd0896fc5f374e04f68063c497e2ca7037b951876dc2c17eacffd8198bdb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcd0896fc5f374e04f68063c497e2ca7037b951876dc2c17eacffd8198bdb97->enter($__internal_2bcd0896fc5f374e04f68063c497e2ca7037b951876dc2c17eacffd8198bdb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Pagination/view:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_464540c58e5a7faa3103d2276eac65c4daf32f9748980df3f4baa25ed9caac8d->leave($__internal_464540c58e5a7faa3103d2276eac65c4daf32f9748980df3f4baa25ed9caac8d_prof);

        
        $__internal_2bcd0896fc5f374e04f68063c497e2ca7037b951876dc2c17eacffd8198bdb97->leave($__internal_2bcd0896fc5f374e04f68063c497e2ca7037b951876dc2c17eacffd8198bdb97_prof);

    }

    public function getTemplateName()
    {
        return ":Pagination/view:sortable_link.html.twig";
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
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", ":Pagination/view:sortable_link.html.twig", "/var/www/html/portal/app/Resources/views/Pagination/view/sortable_link.html.twig");
    }
}
