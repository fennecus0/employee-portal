<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_fdeaaf6776a318d263aa8e10b4d5550ee2ec1ee765c44380dac1377d6f57dc8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_97fe937a3e93a91032625053bcea7f47c51eab2f7de5a87cc3db4ec659a8bb4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97fe937a3e93a91032625053bcea7f47c51eab2f7de5a87cc3db4ec659a8bb4e->enter($__internal_97fe937a3e93a91032625053bcea7f47c51eab2f7de5a87cc3db4ec659a8bb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_a1473292c9724802ec7acf0a07dca1931ef1202a998e3f0f1b1243484f089c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1473292c9724802ec7acf0a07dca1931ef1202a998e3f0f1b1243484f089c67->enter($__internal_a1473292c9724802ec7acf0a07dca1931ef1202a998e3f0f1b1243484f089c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97fe937a3e93a91032625053bcea7f47c51eab2f7de5a87cc3db4ec659a8bb4e->leave($__internal_97fe937a3e93a91032625053bcea7f47c51eab2f7de5a87cc3db4ec659a8bb4e_prof);

        
        $__internal_a1473292c9724802ec7acf0a07dca1931ef1202a998e3f0f1b1243484f089c67->leave($__internal_a1473292c9724802ec7acf0a07dca1931ef1202a998e3f0f1b1243484f089c67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b1b7b129ad2cb31d845401ca1866b47df37cfa4eb9495e8909efc0a4388a56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1b7b129ad2cb31d845401ca1866b47df37cfa4eb9495e8909efc0a4388a56d->enter($__internal_2b1b7b129ad2cb31d845401ca1866b47df37cfa4eb9495e8909efc0a4388a56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4da63e32d58696bcb3207a15115a7ee992f2107dbb9847030ca1fefbd84df337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da63e32d58696bcb3207a15115a7ee992f2107dbb9847030ca1fefbd84df337->enter($__internal_4da63e32d58696bcb3207a15115a7ee992f2107dbb9847030ca1fefbd84df337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4da63e32d58696bcb3207a15115a7ee992f2107dbb9847030ca1fefbd84df337->leave($__internal_4da63e32d58696bcb3207a15115a7ee992f2107dbb9847030ca1fefbd84df337_prof);

        
        $__internal_2b1b7b129ad2cb31d845401ca1866b47df37cfa4eb9495e8909efc0a4388a56d->leave($__internal_2b1b7b129ad2cb31d845401ca1866b47df37cfa4eb9495e8909efc0a4388a56d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
