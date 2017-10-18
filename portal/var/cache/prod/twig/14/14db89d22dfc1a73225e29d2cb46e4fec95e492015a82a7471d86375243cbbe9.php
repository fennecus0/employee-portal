<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_05032e352e9fcaf05343c60cf4ea199f2d5bba4709d07bb32d770ae42b3fa9cf extends Twig_Template
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
        $__internal_a76d48da6e6e8258d87bc977582d70536f7c2ceb05bfee9480cad82e8bcb3c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76d48da6e6e8258d87bc977582d70536f7c2ceb05bfee9480cad82e8bcb3c4f->enter($__internal_a76d48da6e6e8258d87bc977582d70536f7c2ceb05bfee9480cad82e8bcb3c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a76d48da6e6e8258d87bc977582d70536f7c2ceb05bfee9480cad82e8bcb3c4f->leave($__internal_a76d48da6e6e8258d87bc977582d70536f7c2ceb05bfee9480cad82e8bcb3c4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73526546c18dbea05ba829394fe7b6ffe5a59fb4dcb9f71d78d9ab147b85283b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73526546c18dbea05ba829394fe7b6ffe5a59fb4dcb9f71d78d9ab147b85283b->enter($__internal_73526546c18dbea05ba829394fe7b6ffe5a59fb4dcb9f71d78d9ab147b85283b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_73526546c18dbea05ba829394fe7b6ffe5a59fb4dcb9f71d78d9ab147b85283b->leave($__internal_73526546c18dbea05ba829394fe7b6ffe5a59fb4dcb9f71d78d9ab147b85283b_prof);

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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
