<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_99372b5396f41719db1a0916b9c2db012551c1fee8cfd08868eb26d2f6318414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4a654be09358d4a35f8037fb095cfb78a55538bd5aad11cde9e97c604b48a0a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a654be09358d4a35f8037fb095cfb78a55538bd5aad11cde9e97c604b48a0a7->enter($__internal_4a654be09358d4a35f8037fb095cfb78a55538bd5aad11cde9e97c604b48a0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_e6aaf5b7293c99a6606cca8f46b94ae88e304acfc662997c0138375f4ee886de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6aaf5b7293c99a6606cca8f46b94ae88e304acfc662997c0138375f4ee886de->enter($__internal_e6aaf5b7293c99a6606cca8f46b94ae88e304acfc662997c0138375f4ee886de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a654be09358d4a35f8037fb095cfb78a55538bd5aad11cde9e97c604b48a0a7->leave($__internal_4a654be09358d4a35f8037fb095cfb78a55538bd5aad11cde9e97c604b48a0a7_prof);

        
        $__internal_e6aaf5b7293c99a6606cca8f46b94ae88e304acfc662997c0138375f4ee886de->leave($__internal_e6aaf5b7293c99a6606cca8f46b94ae88e304acfc662997c0138375f4ee886de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e53de0abacca18242d3a90ddc7396950e6de71696c10549a5b5b217d019e080a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e53de0abacca18242d3a90ddc7396950e6de71696c10549a5b5b217d019e080a->enter($__internal_e53de0abacca18242d3a90ddc7396950e6de71696c10549a5b5b217d019e080a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9d4d8b857dc771a75e585701222681dea5a84e25e6af1fa0c08188b933036379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4d8b857dc771a75e585701222681dea5a84e25e6af1fa0c08188b933036379->enter($__internal_9d4d8b857dc771a75e585701222681dea5a84e25e6af1fa0c08188b933036379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9d4d8b857dc771a75e585701222681dea5a84e25e6af1fa0c08188b933036379->leave($__internal_9d4d8b857dc771a75e585701222681dea5a84e25e6af1fa0c08188b933036379_prof);

        
        $__internal_e53de0abacca18242d3a90ddc7396950e6de71696c10549a5b5b217d019e080a->leave($__internal_e53de0abacca18242d3a90ddc7396950e6de71696c10549a5b5b217d019e080a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
