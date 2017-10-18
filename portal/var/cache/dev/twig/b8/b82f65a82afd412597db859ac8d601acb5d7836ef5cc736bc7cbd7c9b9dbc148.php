<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_cda9c36b47d9d30b174968fb20594784111d3eee02bfb08a33437613c34bb149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_80589c6a608999210412eeb900403fd51a705254ff797dd34af638b7f0679da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80589c6a608999210412eeb900403fd51a705254ff797dd34af638b7f0679da4->enter($__internal_80589c6a608999210412eeb900403fd51a705254ff797dd34af638b7f0679da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80589c6a608999210412eeb900403fd51a705254ff797dd34af638b7f0679da4->leave($__internal_80589c6a608999210412eeb900403fd51a705254ff797dd34af638b7f0679da4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c88b73fc58884bba201d7ca710b5c4c11fbcaf0fd5894087d0d9cf6b9d2758ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88b73fc58884bba201d7ca710b5c4c11fbcaf0fd5894087d0d9cf6b9d2758ff->enter($__internal_c88b73fc58884bba201d7ca710b5c4c11fbcaf0fd5894087d0d9cf6b9d2758ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c88b73fc58884bba201d7ca710b5c4c11fbcaf0fd5894087d0d9cf6b9d2758ff->leave($__internal_c88b73fc58884bba201d7ca710b5c4c11fbcaf0fd5894087d0d9cf6b9d2758ff_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
