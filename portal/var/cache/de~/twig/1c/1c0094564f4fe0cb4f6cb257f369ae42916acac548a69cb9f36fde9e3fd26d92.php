<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_288a0d0f5710306349640249252d49b7f53ab1bfaedb62154f26682ac82e30f1 extends Twig_Template
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
        $__internal_32d236812303a45a736b6f9d76eef05291b85f5d81dac06d848f796795e347e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d236812303a45a736b6f9d76eef05291b85f5d81dac06d848f796795e347e7->enter($__internal_32d236812303a45a736b6f9d76eef05291b85f5d81dac06d848f796795e347e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_324c8a44270622ebc4a6cbb18f4f51f265b99cd542af40ca87843075fccfe40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324c8a44270622ebc4a6cbb18f4f51f265b99cd542af40ca87843075fccfe40c->enter($__internal_324c8a44270622ebc4a6cbb18f4f51f265b99cd542af40ca87843075fccfe40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_32d236812303a45a736b6f9d76eef05291b85f5d81dac06d848f796795e347e7->leave($__internal_32d236812303a45a736b6f9d76eef05291b85f5d81dac06d848f796795e347e7_prof);

        
        $__internal_324c8a44270622ebc4a6cbb18f4f51f265b99cd542af40ca87843075fccfe40c->leave($__internal_324c8a44270622ebc4a6cbb18f4f51f265b99cd542af40ca87843075fccfe40c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ee9f13536619899d588f4c7f222b3b6c6340e45e3c67ea5fe283278f218b603b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9f13536619899d588f4c7f222b3b6c6340e45e3c67ea5fe283278f218b603b->enter($__internal_ee9f13536619899d588f4c7f222b3b6c6340e45e3c67ea5fe283278f218b603b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a0f87973ed31648fa710b732320d516a41e8ceea9d1182debe7fcfa3518df4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f87973ed31648fa710b732320d516a41e8ceea9d1182debe7fcfa3518df4e5->enter($__internal_a0f87973ed31648fa710b732320d516a41e8ceea9d1182debe7fcfa3518df4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_a0f87973ed31648fa710b732320d516a41e8ceea9d1182debe7fcfa3518df4e5->leave($__internal_a0f87973ed31648fa710b732320d516a41e8ceea9d1182debe7fcfa3518df4e5_prof);

        
        $__internal_ee9f13536619899d588f4c7f222b3b6c6340e45e3c67ea5fe283278f218b603b->leave($__internal_ee9f13536619899d588f4c7f222b3b6c6340e45e3c67ea5fe283278f218b603b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_65862d6c8c5c451a386809b98b774693982ab689cbc60cc478533087e1c6f509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65862d6c8c5c451a386809b98b774693982ab689cbc60cc478533087e1c6f509->enter($__internal_65862d6c8c5c451a386809b98b774693982ab689cbc60cc478533087e1c6f509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d04b4eb87c110ead407c2799d641ce0a0502a8c96b9752e305d1478c4ee51ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04b4eb87c110ead407c2799d641ce0a0502a8c96b9752e305d1478c4ee51ca4->enter($__internal_d04b4eb87c110ead407c2799d641ce0a0502a8c96b9752e305d1478c4ee51ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d04b4eb87c110ead407c2799d641ce0a0502a8c96b9752e305d1478c4ee51ca4->leave($__internal_d04b4eb87c110ead407c2799d641ce0a0502a8c96b9752e305d1478c4ee51ca4_prof);

        
        $__internal_65862d6c8c5c451a386809b98b774693982ab689cbc60cc478533087e1c6f509->leave($__internal_65862d6c8c5c451a386809b98b774693982ab689cbc60cc478533087e1c6f509_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_400db87ec04e45fd3d1b29b869fdbe4be49abf176953b2973264b73123a0fdda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400db87ec04e45fd3d1b29b869fdbe4be49abf176953b2973264b73123a0fdda->enter($__internal_400db87ec04e45fd3d1b29b869fdbe4be49abf176953b2973264b73123a0fdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_218e3728e5252651ab340dbf895a745a36d6e6858dbfaf2595ac009f0beda8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218e3728e5252651ab340dbf895a745a36d6e6858dbfaf2595ac009f0beda8b1->enter($__internal_218e3728e5252651ab340dbf895a745a36d6e6858dbfaf2595ac009f0beda8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_218e3728e5252651ab340dbf895a745a36d6e6858dbfaf2595ac009f0beda8b1->leave($__internal_218e3728e5252651ab340dbf895a745a36d6e6858dbfaf2595ac009f0beda8b1_prof);

        
        $__internal_400db87ec04e45fd3d1b29b869fdbe4be49abf176953b2973264b73123a0fdda->leave($__internal_400db87ec04e45fd3d1b29b869fdbe4be49abf176953b2973264b73123a0fdda_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
