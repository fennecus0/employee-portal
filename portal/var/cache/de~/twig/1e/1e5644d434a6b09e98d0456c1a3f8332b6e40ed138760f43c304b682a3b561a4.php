<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_3c27b1b5c3fdda8564e584d4c48f4f24ead2bf2c62b1c5a7e0ca9b5148f5b2fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68507f1232c866bdb284d0d2157097a026ad6df8d57a0bd09d2e2e2f3a4195d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68507f1232c866bdb284d0d2157097a026ad6df8d57a0bd09d2e2e2f3a4195d9->enter($__internal_68507f1232c866bdb284d0d2157097a026ad6df8d57a0bd09d2e2e2f3a4195d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_50da75195bbddda1dcbece03c615cc8b5729dad16599a573970a63e074276f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50da75195bbddda1dcbece03c615cc8b5729dad16599a573970a63e074276f5e->enter($__internal_50da75195bbddda1dcbece03c615cc8b5729dad16599a573970a63e074276f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_68507f1232c866bdb284d0d2157097a026ad6df8d57a0bd09d2e2e2f3a4195d9->leave($__internal_68507f1232c866bdb284d0d2157097a026ad6df8d57a0bd09d2e2e2f3a4195d9_prof);

        
        $__internal_50da75195bbddda1dcbece03c615cc8b5729dad16599a573970a63e074276f5e->leave($__internal_50da75195bbddda1dcbece03c615cc8b5729dad16599a573970a63e074276f5e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_df5b779858292ffdda5793910f532eb63775834dbe1c1be352e8a2cec6d13cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5b779858292ffdda5793910f532eb63775834dbe1c1be352e8a2cec6d13cef->enter($__internal_df5b779858292ffdda5793910f532eb63775834dbe1c1be352e8a2cec6d13cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1cec1f809e3de392b00ea4a77c2ba04c9882957df46097532f3bf2254475d947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cec1f809e3de392b00ea4a77c2ba04c9882957df46097532f3bf2254475d947->enter($__internal_1cec1f809e3de392b00ea4a77c2ba04c9882957df46097532f3bf2254475d947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_1cec1f809e3de392b00ea4a77c2ba04c9882957df46097532f3bf2254475d947->leave($__internal_1cec1f809e3de392b00ea4a77c2ba04c9882957df46097532f3bf2254475d947_prof);

        
        $__internal_df5b779858292ffdda5793910f532eb63775834dbe1c1be352e8a2cec6d13cef->leave($__internal_df5b779858292ffdda5793910f532eb63775834dbe1c1be352e8a2cec6d13cef_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_94238d3b2b3ce063435239cea1ff6b5d777b5c680f86bf018e84513572626f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94238d3b2b3ce063435239cea1ff6b5d777b5c680f86bf018e84513572626f23->enter($__internal_94238d3b2b3ce063435239cea1ff6b5d777b5c680f86bf018e84513572626f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f54f7e51a2ea083e8431ff3288b6b396e42edd2700d2c99b02ca7916c57242fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54f7e51a2ea083e8431ff3288b6b396e42edd2700d2c99b02ca7916c57242fa->enter($__internal_f54f7e51a2ea083e8431ff3288b6b396e42edd2700d2c99b02ca7916c57242fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f54f7e51a2ea083e8431ff3288b6b396e42edd2700d2c99b02ca7916c57242fa->leave($__internal_f54f7e51a2ea083e8431ff3288b6b396e42edd2700d2c99b02ca7916c57242fa_prof);

        
        $__internal_94238d3b2b3ce063435239cea1ff6b5d777b5c680f86bf018e84513572626f23->leave($__internal_94238d3b2b3ce063435239cea1ff6b5d777b5c680f86bf018e84513572626f23_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4ee64e2fee8374496ba70c90a51b1c17dd828d43f179075f74a779d45da1eb16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee64e2fee8374496ba70c90a51b1c17dd828d43f179075f74a779d45da1eb16->enter($__internal_4ee64e2fee8374496ba70c90a51b1c17dd828d43f179075f74a779d45da1eb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_57653c7c830e829eedc36b9f32a5c5800b81009bf91cc0af1af4472d21fc534f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57653c7c830e829eedc36b9f32a5c5800b81009bf91cc0af1af4472d21fc534f->enter($__internal_57653c7c830e829eedc36b9f32a5c5800b81009bf91cc0af1af4472d21fc534f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_57653c7c830e829eedc36b9f32a5c5800b81009bf91cc0af1af4472d21fc534f->leave($__internal_57653c7c830e829eedc36b9f32a5c5800b81009bf91cc0af1af4472d21fc534f_prof);

        
        $__internal_4ee64e2fee8374496ba70c90a51b1c17dd828d43f179075f74a779d45da1eb16->leave($__internal_4ee64e2fee8374496ba70c90a51b1c17dd828d43f179075f74a779d45da1eb16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
