<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a67f5b12df6b914b99880833876e607a4753c8970dfe40bd930a4d646533ada6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_22943ff685edd28b29cc5d853997271d4538f24aff7e893bd0b9cb4f569ce0ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22943ff685edd28b29cc5d853997271d4538f24aff7e893bd0b9cb4f569ce0ef->enter($__internal_22943ff685edd28b29cc5d853997271d4538f24aff7e893bd0b9cb4f569ce0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_06aa18b62da281df0c371911d14acd7b941fc9309edbf5fc8f2eb0217b18b5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06aa18b62da281df0c371911d14acd7b941fc9309edbf5fc8f2eb0217b18b5c6->enter($__internal_06aa18b62da281df0c371911d14acd7b941fc9309edbf5fc8f2eb0217b18b5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22943ff685edd28b29cc5d853997271d4538f24aff7e893bd0b9cb4f569ce0ef->leave($__internal_22943ff685edd28b29cc5d853997271d4538f24aff7e893bd0b9cb4f569ce0ef_prof);

        
        $__internal_06aa18b62da281df0c371911d14acd7b941fc9309edbf5fc8f2eb0217b18b5c6->leave($__internal_06aa18b62da281df0c371911d14acd7b941fc9309edbf5fc8f2eb0217b18b5c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ff0a1e25a5f44fdcc008fb72430549f715ca0a08e59eb788e3fadc712cb14b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff0a1e25a5f44fdcc008fb72430549f715ca0a08e59eb788e3fadc712cb14b9->enter($__internal_7ff0a1e25a5f44fdcc008fb72430549f715ca0a08e59eb788e3fadc712cb14b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ced0f4b961dd03251ab12753ef95a0d9237e19b1b1443cf6ce0eb5b85320132b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced0f4b961dd03251ab12753ef95a0d9237e19b1b1443cf6ce0eb5b85320132b->enter($__internal_ced0f4b961dd03251ab12753ef95a0d9237e19b1b1443cf6ce0eb5b85320132b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ced0f4b961dd03251ab12753ef95a0d9237e19b1b1443cf6ce0eb5b85320132b->leave($__internal_ced0f4b961dd03251ab12753ef95a0d9237e19b1b1443cf6ce0eb5b85320132b_prof);

        
        $__internal_7ff0a1e25a5f44fdcc008fb72430549f715ca0a08e59eb788e3fadc712cb14b9->leave($__internal_7ff0a1e25a5f44fdcc008fb72430549f715ca0a08e59eb788e3fadc712cb14b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
