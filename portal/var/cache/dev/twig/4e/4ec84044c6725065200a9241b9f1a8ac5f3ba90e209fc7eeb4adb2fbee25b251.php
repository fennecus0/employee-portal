<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_52da1a6c0613dec44544542bd867cdbb923a374d08e35e1b2d6ab96f9b5527ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_ac42c959705edfcc8e8c0ce081562daec2e84462d5cf49fe4cc5a81ee2281ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac42c959705edfcc8e8c0ce081562daec2e84462d5cf49fe4cc5a81ee2281ed4->enter($__internal_ac42c959705edfcc8e8c0ce081562daec2e84462d5cf49fe4cc5a81ee2281ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac42c959705edfcc8e8c0ce081562daec2e84462d5cf49fe4cc5a81ee2281ed4->leave($__internal_ac42c959705edfcc8e8c0ce081562daec2e84462d5cf49fe4cc5a81ee2281ed4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbfe7bc16b3321583dfdcbd59d42a486d55768696c029553e86003ff9481c94c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbfe7bc16b3321583dfdcbd59d42a486d55768696c029553e86003ff9481c94c->enter($__internal_dbfe7bc16b3321583dfdcbd59d42a486d55768696c029553e86003ff9481c94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_dbfe7bc16b3321583dfdcbd59d42a486d55768696c029553e86003ff9481c94c->leave($__internal_dbfe7bc16b3321583dfdcbd59d42a486d55768696c029553e86003ff9481c94c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
        return new Twig_Source("", "@FOSUser/Registration/register.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
