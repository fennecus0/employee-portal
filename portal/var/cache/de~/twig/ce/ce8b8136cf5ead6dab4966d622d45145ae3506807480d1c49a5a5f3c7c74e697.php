<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_97fa03303844b8827c2bf3f22f84ca147a152d4caf912b3864656365770257fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0adc6b2fa0b5348797aeb2ad094106009fcc65d55cdff331adaef997878e73da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0adc6b2fa0b5348797aeb2ad094106009fcc65d55cdff331adaef997878e73da->enter($__internal_0adc6b2fa0b5348797aeb2ad094106009fcc65d55cdff331adaef997878e73da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_295f61d1baad76a27f0147b111631213113ba76a1b92c9e39642b63d7a4d8562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295f61d1baad76a27f0147b111631213113ba76a1b92c9e39642b63d7a4d8562->enter($__internal_295f61d1baad76a27f0147b111631213113ba76a1b92c9e39642b63d7a4d8562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0adc6b2fa0b5348797aeb2ad094106009fcc65d55cdff331adaef997878e73da->leave($__internal_0adc6b2fa0b5348797aeb2ad094106009fcc65d55cdff331adaef997878e73da_prof);

        
        $__internal_295f61d1baad76a27f0147b111631213113ba76a1b92c9e39642b63d7a4d8562->leave($__internal_295f61d1baad76a27f0147b111631213113ba76a1b92c9e39642b63d7a4d8562_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e98be0b55fb1ce81b7b6391d272a4694936a769836fb5104af9ec3dcf0474a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98be0b55fb1ce81b7b6391d272a4694936a769836fb5104af9ec3dcf0474a94->enter($__internal_e98be0b55fb1ce81b7b6391d272a4694936a769836fb5104af9ec3dcf0474a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5f6d7ca67847ecf87ba44000d7b6953241413ebae91466d1950db18eb6eeef21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6d7ca67847ecf87ba44000d7b6953241413ebae91466d1950db18eb6eeef21->enter($__internal_5f6d7ca67847ecf87ba44000d7b6953241413ebae91466d1950db18eb6eeef21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_5f6d7ca67847ecf87ba44000d7b6953241413ebae91466d1950db18eb6eeef21->leave($__internal_5f6d7ca67847ecf87ba44000d7b6953241413ebae91466d1950db18eb6eeef21_prof);

        
        $__internal_e98be0b55fb1ce81b7b6391d272a4694936a769836fb5104af9ec3dcf0474a94->leave($__internal_e98be0b55fb1ce81b7b6391d272a4694936a769836fb5104af9ec3dcf0474a94_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
