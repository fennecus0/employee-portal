<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_7286b821f2705af97011fe3a9b5671e7a43db123df03552f79052961b404f2d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f14e4192ed5536f25c16de6780896ca6e770847bfc2eaebcc5fd9a1153dcd78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f14e4192ed5536f25c16de6780896ca6e770847bfc2eaebcc5fd9a1153dcd78e->enter($__internal_f14e4192ed5536f25c16de6780896ca6e770847bfc2eaebcc5fd9a1153dcd78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f14e4192ed5536f25c16de6780896ca6e770847bfc2eaebcc5fd9a1153dcd78e->leave($__internal_f14e4192ed5536f25c16de6780896ca6e770847bfc2eaebcc5fd9a1153dcd78e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_362020421a117fab2184254b7862981059a60cd7aa2230ebb5f4130c69f36ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362020421a117fab2184254b7862981059a60cd7aa2230ebb5f4130c69f36ec1->enter($__internal_362020421a117fab2184254b7862981059a60cd7aa2230ebb5f4130c69f36ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Page not found</h1>

    ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "        sfhbfdnhdgnjfgnj
    ";
        }
        // line 10
        echo "
    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">return to the homepage</a>.
    </p>
";
        
        $__internal_362020421a117fab2184254b7862981059a60cd7aa2230ebb5f4130c69f36ec1->leave($__internal_362020421a117fab2184254b7862981059a60cd7aa2230ebb5f4130c69f36ec1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  50 => 10,  46 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.html.twig", "/var/www/html/portal/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
