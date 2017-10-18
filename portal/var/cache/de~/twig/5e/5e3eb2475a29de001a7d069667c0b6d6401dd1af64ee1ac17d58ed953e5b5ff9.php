<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c7185f2d0952e928dd626199f744dcd38bc70e7ccc01a17e0e38773ba32d4bad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_15729e2524e26d293aaf161456c1dd1a81af4ff0b22a888fe0718fdf50119bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15729e2524e26d293aaf161456c1dd1a81af4ff0b22a888fe0718fdf50119bad->enter($__internal_15729e2524e26d293aaf161456c1dd1a81af4ff0b22a888fe0718fdf50119bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_f7d7ee3156dea0ab563ac44fd3e1dc445e409e71dec49c5dd64f2e6cc94a16bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d7ee3156dea0ab563ac44fd3e1dc445e409e71dec49c5dd64f2e6cc94a16bc->enter($__internal_f7d7ee3156dea0ab563ac44fd3e1dc445e409e71dec49c5dd64f2e6cc94a16bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15729e2524e26d293aaf161456c1dd1a81af4ff0b22a888fe0718fdf50119bad->leave($__internal_15729e2524e26d293aaf161456c1dd1a81af4ff0b22a888fe0718fdf50119bad_prof);

        
        $__internal_f7d7ee3156dea0ab563ac44fd3e1dc445e409e71dec49c5dd64f2e6cc94a16bc->leave($__internal_f7d7ee3156dea0ab563ac44fd3e1dc445e409e71dec49c5dd64f2e6cc94a16bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7446343f2cc10225fae26847ef5cf27a2d7ef83599725a449db128bc10b90c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7446343f2cc10225fae26847ef5cf27a2d7ef83599725a449db128bc10b90c47->enter($__internal_7446343f2cc10225fae26847ef5cf27a2d7ef83599725a449db128bc10b90c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_46bbb17f6b1aaf0fb5043a96402be19cf8f258a4c0be1dd62fe0d933e115572f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bbb17f6b1aaf0fb5043a96402be19cf8f258a4c0be1dd62fe0d933e115572f->enter($__internal_46bbb17f6b1aaf0fb5043a96402be19cf8f258a4c0be1dd62fe0d933e115572f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_46bbb17f6b1aaf0fb5043a96402be19cf8f258a4c0be1dd62fe0d933e115572f->leave($__internal_46bbb17f6b1aaf0fb5043a96402be19cf8f258a4c0be1dd62fe0d933e115572f_prof);

        
        $__internal_7446343f2cc10225fae26847ef5cf27a2d7ef83599725a449db128bc10b90c47->leave($__internal_7446343f2cc10225fae26847ef5cf27a2d7ef83599725a449db128bc10b90c47_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
