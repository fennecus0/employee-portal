<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_d28b6d06804c56d2c56a4ad07fe970f283b0ce772c014826eaa59daa6469e902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_133c92957e3f25d9d1077c6621850b41bf6edd9d3b3d0ebda7617a892b931cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133c92957e3f25d9d1077c6621850b41bf6edd9d3b3d0ebda7617a892b931cea->enter($__internal_133c92957e3f25d9d1077c6621850b41bf6edd9d3b3d0ebda7617a892b931cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_49a748bc6b2e4a1eebfbd080294feded857c86d3f916b2fcb9bd150a654ccf74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a748bc6b2e4a1eebfbd080294feded857c86d3f916b2fcb9bd150a654ccf74->enter($__internal_49a748bc6b2e4a1eebfbd080294feded857c86d3f916b2fcb9bd150a654ccf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_133c92957e3f25d9d1077c6621850b41bf6edd9d3b3d0ebda7617a892b931cea->leave($__internal_133c92957e3f25d9d1077c6621850b41bf6edd9d3b3d0ebda7617a892b931cea_prof);

        
        $__internal_49a748bc6b2e4a1eebfbd080294feded857c86d3f916b2fcb9bd150a654ccf74->leave($__internal_49a748bc6b2e4a1eebfbd080294feded857c86d3f916b2fcb9bd150a654ccf74_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_472bf678812101b33ed4bc2fff6ae3409e5601a218dfcd281123b6fd2e578fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472bf678812101b33ed4bc2fff6ae3409e5601a218dfcd281123b6fd2e578fd8->enter($__internal_472bf678812101b33ed4bc2fff6ae3409e5601a218dfcd281123b6fd2e578fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8c06eae023f798577e4c7ba0f9d8eb4743742d4d67c690d779426a6a34ff2e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c06eae023f798577e4c7ba0f9d8eb4743742d4d67c690d779426a6a34ff2e0f->enter($__internal_8c06eae023f798577e4c7ba0f9d8eb4743742d4d67c690d779426a6a34ff2e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_8c06eae023f798577e4c7ba0f9d8eb4743742d4d67c690d779426a6a34ff2e0f->leave($__internal_8c06eae023f798577e4c7ba0f9d8eb4743742d4d67c690d779426a6a34ff2e0f_prof);

        
        $__internal_472bf678812101b33ed4bc2fff6ae3409e5601a218dfcd281123b6fd2e578fd8->leave($__internal_472bf678812101b33ed4bc2fff6ae3409e5601a218dfcd281123b6fd2e578fd8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
