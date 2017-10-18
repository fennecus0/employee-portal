<?php

/* base.html.twig */
class __TwigTemplate_c6d5e8950acc32e19fe073f9bfd0bfe56208be19124a6e637583d42848bd0bdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_046250fdec258803dd1e01da766ca961ac59fa78c7f9d2fb10685f07209f6b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046250fdec258803dd1e01da766ca961ac59fa78c7f9d2fb10685f07209f6b60->enter($__internal_046250fdec258803dd1e01da766ca961ac59fa78c7f9d2fb10685f07209f6b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
    ";
        // line 21
        $this->loadTemplate("::topnav.html.twig", "base.html.twig", 21)->display($context);
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->loadTemplate("::footer.html.twig", "base.html.twig", 25)->display($context);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "</body>
</html>";
        
        $__internal_046250fdec258803dd1e01da766ca961ac59fa78c7f9d2fb10685f07209f6b60->leave($__internal_046250fdec258803dd1e01da766ca961ac59fa78c7f9d2fb10685f07209f6b60_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e48fc82adaedd0fec14ff2b659878bed7dd28a909dc83d1c8a72d0bd676f8a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48fc82adaedd0fec14ff2b659878bed7dd28a909dc83d1c8a72d0bd676f8a0f->enter($__internal_e48fc82adaedd0fec14ff2b659878bed7dd28a909dc83d1c8a72d0bd676f8a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Picard";
        
        $__internal_e48fc82adaedd0fec14ff2b659878bed7dd28a909dc83d1c8a72d0bd676f8a0f->leave($__internal_e48fc82adaedd0fec14ff2b659878bed7dd28a909dc83d1c8a72d0bd676f8a0f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b85500f5e8605ebd1839776c3fff02e7046bd3c7311287ed9c276ebb6603b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b85500f5e8605ebd1839776c3fff02e7046bd3c7311287ed9c276ebb6603b53->enter($__internal_0b85500f5e8605ebd1839776c3fff02e7046bd3c7311287ed9c276ebb6603b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/ico\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/moment/locale/de.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//code.jquery.com/jquery-2.2.4.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_0b85500f5e8605ebd1839776c3fff02e7046bd3c7311287ed9c276ebb6603b53->leave($__internal_0b85500f5e8605ebd1839776c3fff02e7046bd3c7311287ed9c276ebb6603b53_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_09bec445dd1777969ab9327a790ea6f8d50be4623ab402b3d96f458558695f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09bec445dd1777969ab9327a790ea6f8d50be4623ab402b3d96f458558695f4b->enter($__internal_09bec445dd1777969ab9327a790ea6f8d50be4623ab402b3d96f458558695f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_09bec445dd1777969ab9327a790ea6f8d50be4623ab402b3d96f458558695f4b->leave($__internal_09bec445dd1777969ab9327a790ea6f8d50be4623ab402b3d96f458558695f4b_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be407d19dfd1e8b51b520bf7eb476cadada878964f7ca3b2451ab48b1764a105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be407d19dfd1e8b51b520bf7eb476cadada878964f7ca3b2451ab48b1764a105->enter($__internal_be407d19dfd1e8b51b520bf7eb476cadada878964f7ca3b2451ab48b1764a105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_be407d19dfd1e8b51b520bf7eb476cadada878964f7ca3b2451ab48b1764a105->leave($__internal_be407d19dfd1e8b51b520bf7eb476cadada878964f7ca3b2451ab48b1764a105_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 28,  133 => 27,  122 => 23,  113 => 16,  107 => 13,  103 => 12,  99 => 11,  94 => 9,  89 => 8,  83 => 7,  71 => 6,  63 => 30,  61 => 27,  58 => 26,  56 => 25,  53 => 24,  51 => 23,  48 => 22,  46 => 21,  39 => 18,  37 => 7,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Picard{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" type=\"image/ico\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/screen.css') }}\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}\" />
        <script type=\"text/javascript\" src=\"{{ asset('bower_components/moment/min/moment.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bower_components/moment/locale/de.js') }}\"></script>
        <script src=\"//code.jquery.com/jquery-2.2.4.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}\"></script>
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body>
    {% include '::topnav.html.twig' %}

    {% block content %}{% endblock %}

    {% include '::footer.html.twig' %}

        {% block javascripts %}
            <script src=\"{{ asset('js/app.js') }}\"></script>
        {% endblock %}
</body>
</html>", "base.html.twig", "/var/www/html/portal/app/Resources/views/base.html.twig");
    }
}
