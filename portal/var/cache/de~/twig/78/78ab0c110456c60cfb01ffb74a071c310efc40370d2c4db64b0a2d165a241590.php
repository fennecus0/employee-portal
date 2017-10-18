<?php

/* :default:right.html.twig */
class __TwigTemplate_2c85be6941a5de81acb8dbd3afbefa1bee92d82c1fb0f9bfa3aa210183fff2d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sidebar-right.html.twig", ":default:right.html.twig", 1);
        $this->blocks = array(
            'page_right' => array($this, 'block_page_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "sidebar-right.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d13566e64b60bc9e73cc4c182f8d5f0ef673a4bb969059915d7d9bedc31b98d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d13566e64b60bc9e73cc4c182f8d5f0ef673a4bb969059915d7d9bedc31b98d->enter($__internal_8d13566e64b60bc9e73cc4c182f8d5f0ef673a4bb969059915d7d9bedc31b98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:right.html.twig"));

        $__internal_cac4f0153800d45eec97d820af5f5211f6ec921e30b3ada221881777e6de4fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac4f0153800d45eec97d820af5f5211f6ec921e30b3ada221881777e6de4fec->enter($__internal_cac4f0153800d45eec97d820af5f5211f6ec921e30b3ada221881777e6de4fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:right.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d13566e64b60bc9e73cc4c182f8d5f0ef673a4bb969059915d7d9bedc31b98d->leave($__internal_8d13566e64b60bc9e73cc4c182f8d5f0ef673a4bb969059915d7d9bedc31b98d_prof);

        
        $__internal_cac4f0153800d45eec97d820af5f5211f6ec921e30b3ada221881777e6de4fec->leave($__internal_cac4f0153800d45eec97d820af5f5211f6ec921e30b3ada221881777e6de4fec_prof);

    }

    // line 4
    public function block_page_right($context, array $blocks = array())
    {
        $__internal_deed15bce55f193e09a0f7a6c660c71edf2760cecc9df7bb05c9619a7b884bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deed15bce55f193e09a0f7a6c660c71edf2760cecc9df7bb05c9619a7b884bf7->enter($__internal_deed15bce55f193e09a0f7a6c660c71edf2760cecc9df7bb05c9619a7b884bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_right"));

        $__internal_8d44bc4342db82d5ab834e55655daa828f0195524a2e89f67d9289b29ff31d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d44bc4342db82d5ab834e55655daa828f0195524a2e89f67d9289b29ff31d23->enter($__internal_8d44bc4342db82d5ab834e55655daa828f0195524a2e89f67d9289b29ff31d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_right"));

        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter(($context["posts"] ?? $this->getContext($context, "posts")), "id")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <a href=\"#\" class=\"list-group-item list-group-item-action\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "initialDate", array()), "html", null, true);
            echo "</span></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
";
        
        $__internal_8d44bc4342db82d5ab834e55655daa828f0195524a2e89f67d9289b29ff31d23->leave($__internal_8d44bc4342db82d5ab834e55655daa828f0195524a2e89f67d9289b29ff31d23_prof);

        
        $__internal_deed15bce55f193e09a0f7a6c660c71edf2760cecc9df7bb05c9619a7b884bf7->leave($__internal_deed15bce55f193e09a0f7a6c660c71edf2760cecc9df7bb05c9619a7b884bf7_prof);

    }

    public function getTemplateName()
    {
        return ":default:right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  56 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'sidebar-right.html.twig' %}


{% block page_right %}

    {% for post in posts | sort('id') |reverse%}
        <a href=\"#\" class=\"list-group-item list-group-item-action\">{{ post.title }} <span class=\"badge\">{{ post.initialDate }}</span></a>
    {% endfor %}

{% endblock %}", ":default:right.html.twig", "/var/www/html/portal/app/Resources/views/default/right.html.twig");
    }
}
