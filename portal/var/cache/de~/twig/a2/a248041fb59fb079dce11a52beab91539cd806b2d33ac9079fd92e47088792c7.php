<?php

/* ::base.html.twig */
class __TwigTemplate_f6fbd7e638bee5252d9747c2a5d97dbca1976e1d1b4a822f955d8352be996cea extends Twig_Template
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
        $__internal_9b39459559e1cf18aadc44db1d3693ee67374d6759bbf9f2ae58743617545c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b39459559e1cf18aadc44db1d3693ee67374d6759bbf9f2ae58743617545c47->enter($__internal_9b39459559e1cf18aadc44db1d3693ee67374d6759bbf9f2ae58743617545c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_27c6ce5270f5139186a96278bbeb5a0ec80cb4cd893fd9804883442985340e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c6ce5270f5139186a96278bbeb5a0ec80cb4cd893fd9804883442985340e83->enter($__internal_27c6ce5270f5139186a96278bbeb5a0ec80cb4cd893fd9804883442985340e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
    ";
        // line 19
        $this->loadTemplate("::topnav.html.twig", "::base.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "
    ";
        // line 23
        $this->loadTemplate("::footer.html.twig", "::base.html.twig", 23)->display($context);
        // line 24
        echo "
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "</body>
</html>";
        
        $__internal_9b39459559e1cf18aadc44db1d3693ee67374d6759bbf9f2ae58743617545c47->leave($__internal_9b39459559e1cf18aadc44db1d3693ee67374d6759bbf9f2ae58743617545c47_prof);

        
        $__internal_27c6ce5270f5139186a96278bbeb5a0ec80cb4cd893fd9804883442985340e83->leave($__internal_27c6ce5270f5139186a96278bbeb5a0ec80cb4cd893fd9804883442985340e83_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d49c844457bdd1eb0fa89f971c86145e2a34db24d6b4d74a95e76b90d96ca90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49c844457bdd1eb0fa89f971c86145e2a34db24d6b4d74a95e76b90d96ca90b->enter($__internal_d49c844457bdd1eb0fa89f971c86145e2a34db24d6b4d74a95e76b90d96ca90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12b169efe1937ab9b93e376931955914ee405660740df50914264233c9f71d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b169efe1937ab9b93e376931955914ee405660740df50914264233c9f71d2c->enter($__internal_12b169efe1937ab9b93e376931955914ee405660740df50914264233c9f71d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Picard";
        
        $__internal_12b169efe1937ab9b93e376931955914ee405660740df50914264233c9f71d2c->leave($__internal_12b169efe1937ab9b93e376931955914ee405660740df50914264233c9f71d2c_prof);

        
        $__internal_d49c844457bdd1eb0fa89f971c86145e2a34db24d6b4d74a95e76b90d96ca90b->leave($__internal_d49c844457bdd1eb0fa89f971c86145e2a34db24d6b4d74a95e76b90d96ca90b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b236944d7cf32fd1bf7d7210f13109338dda676c9250c39d1edffc1d1e9157ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b236944d7cf32fd1bf7d7210f13109338dda676c9250c39d1edffc1d1e9157ea->enter($__internal_b236944d7cf32fd1bf7d7210f13109338dda676c9250c39d1edffc1d1e9157ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9ddb7456ab10c1d4ae011b1972838ee4f4f20f28644bac0fa54aff5e23a8a0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ddb7456ab10c1d4ae011b1972838ee4f4f20f28644bac0fa54aff5e23a8a0a9->enter($__internal_9ddb7456ab10c1d4ae011b1972838ee4f4f20f28644bac0fa54aff5e23a8a0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//code.jquery.com/jquery-2.2.4.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_9ddb7456ab10c1d4ae011b1972838ee4f4f20f28644bac0fa54aff5e23a8a0a9->leave($__internal_9ddb7456ab10c1d4ae011b1972838ee4f4f20f28644bac0fa54aff5e23a8a0a9_prof);

        
        $__internal_b236944d7cf32fd1bf7d7210f13109338dda676c9250c39d1edffc1d1e9157ea->leave($__internal_b236944d7cf32fd1bf7d7210f13109338dda676c9250c39d1edffc1d1e9157ea_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_cfeb8e49089edd01b862f4502a356a46f949d21e4b5af2be2ab2801bb15c7634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfeb8e49089edd01b862f4502a356a46f949d21e4b5af2be2ab2801bb15c7634->enter($__internal_cfeb8e49089edd01b862f4502a356a46f949d21e4b5af2be2ab2801bb15c7634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f6c350f4fee5c1391b80f6defbbb70a4ad9f0212c5f3e17cee6a0d7f341c8c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c350f4fee5c1391b80f6defbbb70a4ad9f0212c5f3e17cee6a0d7f341c8c8c->enter($__internal_f6c350f4fee5c1391b80f6defbbb70a4ad9f0212c5f3e17cee6a0d7f341c8c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f6c350f4fee5c1391b80f6defbbb70a4ad9f0212c5f3e17cee6a0d7f341c8c8c->leave($__internal_f6c350f4fee5c1391b80f6defbbb70a4ad9f0212c5f3e17cee6a0d7f341c8c8c_prof);

        
        $__internal_cfeb8e49089edd01b862f4502a356a46f949d21e4b5af2be2ab2801bb15c7634->leave($__internal_cfeb8e49089edd01b862f4502a356a46f949d21e4b5af2be2ab2801bb15c7634_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c588b4bef1cbf8a2c9db0c7bc8e77ea632a556fff5771e0077cc432da7a5da2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c588b4bef1cbf8a2c9db0c7bc8e77ea632a556fff5771e0077cc432da7a5da2a->enter($__internal_c588b4bef1cbf8a2c9db0c7bc8e77ea632a556fff5771e0077cc432da7a5da2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c51e76f7e161e48f92f44749fcc71293313ba11226fd1634d53360e6bd781a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51e76f7e161e48f92f44749fcc71293313ba11226fd1634d53360e6bd781a5f->enter($__internal_c51e76f7e161e48f92f44749fcc71293313ba11226fd1634d53360e6bd781a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c51e76f7e161e48f92f44749fcc71293313ba11226fd1634d53360e6bd781a5f->leave($__internal_c51e76f7e161e48f92f44749fcc71293313ba11226fd1634d53360e6bd781a5f_prof);

        
        $__internal_c588b4bef1cbf8a2c9db0c7bc8e77ea632a556fff5771e0077cc432da7a5da2a->leave($__internal_c588b4bef1cbf8a2c9db0c7bc8e77ea632a556fff5771e0077cc432da7a5da2a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 26,  149 => 25,  132 => 21,  120 => 14,  114 => 11,  110 => 10,  104 => 8,  95 => 7,  77 => 6,  66 => 28,  64 => 25,  61 => 24,  59 => 23,  56 => 22,  54 => 21,  51 => 20,  49 => 19,  42 => 16,  40 => 7,  36 => 6,  29 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('css/screen.css') }}\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}\" />
        <script type=\"text/javascript\" src=\"{{ asset('bower_components/moment/min/moment.min.js') }}\"></script>
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
</html>", "::base.html.twig", "/var/www/html/portal/app/Resources/views/base.html.twig");
    }
}
