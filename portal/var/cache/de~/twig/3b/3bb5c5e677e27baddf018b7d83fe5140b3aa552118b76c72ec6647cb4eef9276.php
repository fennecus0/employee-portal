<?php

/* ::main.html.twig */
class __TwigTemplate_50debd43a6d201598b55e8b3a377ae9cce12d4e70ab86bcf643eb5b860eee0f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::main.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'page_header' => array($this, 'block_page_header'),
            'page_center' => array($this, 'block_page_center'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22b883b5531767a09311c198f136eb1f41e6216e12395a723b39258eb2434401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b883b5531767a09311c198f136eb1f41e6216e12395a723b39258eb2434401->enter($__internal_22b883b5531767a09311c198f136eb1f41e6216e12395a723b39258eb2434401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::main.html.twig"));

        $__internal_5c49d36a248de4ed55822a3d3cd0760713a8ffe627dbac8dc0a916ad30908710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c49d36a248de4ed55822a3d3cd0760713a8ffe627dbac8dc0a916ad30908710->enter($__internal_5c49d36a248de4ed55822a3d3cd0760713a8ffe627dbac8dc0a916ad30908710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22b883b5531767a09311c198f136eb1f41e6216e12395a723b39258eb2434401->leave($__internal_22b883b5531767a09311c198f136eb1f41e6216e12395a723b39258eb2434401_prof);

        
        $__internal_5c49d36a248de4ed55822a3d3cd0760713a8ffe627dbac8dc0a916ad30908710->leave($__internal_5c49d36a248de4ed55822a3d3cd0760713a8ffe627dbac8dc0a916ad30908710_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_905d0010e9eb6c24f330a0ded2170219b3b9a6e304c863b7a77a94b7523d4317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905d0010e9eb6c24f330a0ded2170219b3b9a6e304c863b7a77a94b7523d4317->enter($__internal_905d0010e9eb6c24f330a0ded2170219b3b9a6e304c863b7a77a94b7523d4317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dc464b139881963450f769b56b13ad790fa7a7f062ff1ca3e9cca15268aee490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc464b139881963450f769b56b13ad790fa7a7f062ff1ca3e9cca15268aee490->enter($__internal_dc464b139881963450f769b56b13ad790fa7a7f062ff1ca3e9cca15268aee490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<section id=\"wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3>";
        // line 8
        $this->displayBlock('page_header', $context, $blocks);
        echo "</h3>

                <section class=\"page\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">

                            ";
        // line 14
        $this->displayBlock('page_center', $context, $blocks);
        // line 15
        echo "
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_dc464b139881963450f769b56b13ad790fa7a7f062ff1ca3e9cca15268aee490->leave($__internal_dc464b139881963450f769b56b13ad790fa7a7f062ff1ca3e9cca15268aee490_prof);

        
        $__internal_905d0010e9eb6c24f330a0ded2170219b3b9a6e304c863b7a77a94b7523d4317->leave($__internal_905d0010e9eb6c24f330a0ded2170219b3b9a6e304c863b7a77a94b7523d4317_prof);

    }

    // line 8
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_a34cc3b1a3159866d5bb905faeefcb8ed33d2b498e1161ff8e6f88292a662f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34cc3b1a3159866d5bb905faeefcb8ed33d2b498e1161ff8e6f88292a662f9f->enter($__internal_a34cc3b1a3159866d5bb905faeefcb8ed33d2b498e1161ff8e6f88292a662f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_4cc7ce86354559911e478d58465da217f236b3b61a9f5dd20b51a63eaafc1709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc7ce86354559911e478d58465da217f236b3b61a9f5dd20b51a63eaafc1709->enter($__internal_4cc7ce86354559911e478d58465da217f236b3b61a9f5dd20b51a63eaafc1709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo " ";
        
        $__internal_4cc7ce86354559911e478d58465da217f236b3b61a9f5dd20b51a63eaafc1709->leave($__internal_4cc7ce86354559911e478d58465da217f236b3b61a9f5dd20b51a63eaafc1709_prof);

        
        $__internal_a34cc3b1a3159866d5bb905faeefcb8ed33d2b498e1161ff8e6f88292a662f9f->leave($__internal_a34cc3b1a3159866d5bb905faeefcb8ed33d2b498e1161ff8e6f88292a662f9f_prof);

    }

    // line 14
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_9f22f788941d943f8b005f07df54e1341606ae8539dce89660bba4fcfa056818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f22f788941d943f8b005f07df54e1341606ae8539dce89660bba4fcfa056818->enter($__internal_9f22f788941d943f8b005f07df54e1341606ae8539dce89660bba4fcfa056818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        $__internal_58f4d7ad0396eecee3416ead23644e28e216037dfdbbf9d6f81d3caaf14376d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f4d7ad0396eecee3416ead23644e28e216037dfdbbf9d6f81d3caaf14376d2->enter($__internal_58f4d7ad0396eecee3416ead23644e28e216037dfdbbf9d6f81d3caaf14376d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        echo " ";
        
        $__internal_58f4d7ad0396eecee3416ead23644e28e216037dfdbbf9d6f81d3caaf14376d2->leave($__internal_58f4d7ad0396eecee3416ead23644e28e216037dfdbbf9d6f81d3caaf14376d2_prof);

        
        $__internal_9f22f788941d943f8b005f07df54e1341606ae8539dce89660bba4fcfa056818->leave($__internal_9f22f788941d943f8b005f07df54e1341606ae8539dce89660bba4fcfa056818_prof);

    }

    public function getTemplateName()
    {
        return "::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 14,  86 => 8,  68 => 15,  66 => 14,  57 => 8,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
<section id=\"wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3>{% block page_header %} {% endblock page_header %}</h3>

                <section class=\"page\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">

                            {% block page_center %} {% endblock page_center %}

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "::main.html.twig", "/var/www/html/portal/app/Resources/views/main.html.twig");
    }
}
