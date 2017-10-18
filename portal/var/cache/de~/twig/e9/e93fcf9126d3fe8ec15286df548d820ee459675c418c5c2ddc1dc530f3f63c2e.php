<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_095109af4519edf6659096eab07ba59826ed508b0584fcb52a6ec0d6f118ee6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_4891e4db4a1572e2dccd706ffa73676098d25c9c2392250e1ba09f4bc7f13d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4891e4db4a1572e2dccd706ffa73676098d25c9c2392250e1ba09f4bc7f13d3a->enter($__internal_4891e4db4a1572e2dccd706ffa73676098d25c9c2392250e1ba09f4bc7f13d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_b34a93910290433d7b8581a1d10a5957341ec721a0fbdb3b0e40f900325817f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34a93910290433d7b8581a1d10a5957341ec721a0fbdb3b0e40f900325817f6->enter($__internal_b34a93910290433d7b8581a1d10a5957341ec721a0fbdb3b0e40f900325817f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4891e4db4a1572e2dccd706ffa73676098d25c9c2392250e1ba09f4bc7f13d3a->leave($__internal_4891e4db4a1572e2dccd706ffa73676098d25c9c2392250e1ba09f4bc7f13d3a_prof);

        
        $__internal_b34a93910290433d7b8581a1d10a5957341ec721a0fbdb3b0e40f900325817f6->leave($__internal_b34a93910290433d7b8581a1d10a5957341ec721a0fbdb3b0e40f900325817f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cf17d9969c8f64883823bbfa3c36fcac118c207dd3af56ad9d826405eba8388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf17d9969c8f64883823bbfa3c36fcac118c207dd3af56ad9d826405eba8388->enter($__internal_8cf17d9969c8f64883823bbfa3c36fcac118c207dd3af56ad9d826405eba8388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2559fed2c041f1b5607762e554c1167b0e286cdd0c80d26462b91155e1caeb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2559fed2c041f1b5607762e554c1167b0e286cdd0c80d26462b91155e1caeb09->enter($__internal_2559fed2c041f1b5607762e554c1167b0e286cdd0c80d26462b91155e1caeb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2559fed2c041f1b5607762e554c1167b0e286cdd0c80d26462b91155e1caeb09->leave($__internal_2559fed2c041f1b5607762e554c1167b0e286cdd0c80d26462b91155e1caeb09_prof);

        
        $__internal_8cf17d9969c8f64883823bbfa3c36fcac118c207dd3af56ad9d826405eba8388->leave($__internal_8cf17d9969c8f64883823bbfa3c36fcac118c207dd3af56ad9d826405eba8388_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
