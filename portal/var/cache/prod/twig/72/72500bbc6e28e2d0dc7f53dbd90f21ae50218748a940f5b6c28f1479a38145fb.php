<?php

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_61edefd18ccf68f126eac1ade928bb880ffdafcb0de32c3b6330cc7d3c7d6a6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d360bd887c52c5d7951852cfa688eb8971462d3099179d1dc6b42f7841979355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d360bd887c52c5d7951852cfa688eb8971462d3099179d1dc6b42f7841979355->enter($__internal_d360bd887c52c5d7951852cfa688eb8971462d3099179d1dc6b42f7841979355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d360bd887c52c5d7951852cfa688eb8971462d3099179d1dc6b42f7841979355->leave($__internal_d360bd887c52c5d7951852cfa688eb8971462d3099179d1dc6b42f7841979355_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_df18bfad02f257d327ce7c50e6a853576ee82f2503be6ef84eeeddeb48024ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df18bfad02f257d327ce7c50e6a853576ee82f2503be6ef84eeeddeb48024ba3->enter($__internal_df18bfad02f257d327ce7c50e6a853576ee82f2503be6ef84eeeddeb48024ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <div class=\"page-content\">
        <div class=\"error-block\">
            <div class=\"logo\">
                <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Friedrich PICARD Mitarbeiterportal\">
                </a>
                <p>Friedrich PICARD Mitarbeiterportal</p>
            </div>


            <h1>404</h1>

            <p>Die Seite wurde nicht gefunden.</p>

            <p>Die von Ihnen gesuchte Seite existiert leider nicht oder der Link ist veraltet.</p>

            <p><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/"), "html", null, true);
        echo "\">Zur Startseite</a></p>
        </div>
    </div>
";
        
        $__internal_df18bfad02f257d327ce7c50e6a853576ee82f2503be6ef84eeeddeb48024ba3->leave($__internal_df18bfad02f257d327ce7c50e6a853576ee82f2503be6ef84eeeddeb48024ba3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  44 => 6,  40 => 5,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
    <div class=\"page-content\">
        <div class=\"error-block\">
            <div class=\"logo\">
                <a href=\"{{ asset('/') }}\">
                    <img src=\"{{ asset('images/logo.png') }}\" alt=\"Friedrich PICARD Mitarbeiterportal\">
                </a>
                <p>Friedrich PICARD Mitarbeiterportal</p>
            </div>


            <h1>404</h1>

            <p>Die Seite wurde nicht gefunden.</p>

            <p>Die von Ihnen gesuchte Seite existiert leider nicht oder der Link ist veraltet.</p>

            <p><a href=\"{{ asset('/') }}\">Zur Startseite</a></p>
        </div>
    </div>
{% endblock %}", "@Twig/Exception/exception.html.twig", "/var/www/html/portal/app/Resources/TwigBundle/views/Exception/exception.html.twig");
    }
}
