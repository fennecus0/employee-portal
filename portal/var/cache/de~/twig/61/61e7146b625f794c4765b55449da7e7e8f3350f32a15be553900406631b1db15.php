<?php

/* ::base.html.twig */
class __TwigTemplate_ab10749fd704db6304b55c69a8616bdc5790338c099aa41cf68b47a1b12a3329 extends Twig_Template
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
        $__internal_0a2ef54c9d980b72aa53d8603740bb1266256813b68937800217e786939b58bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2ef54c9d980b72aa53d8603740bb1266256813b68937800217e786939b58bd->enter($__internal_0a2ef54c9d980b72aa53d8603740bb1266256813b68937800217e786939b58bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_249b3e63943073f605f44bb02d461b586d9ca183afbe1bb09feefe0ddd87f3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249b3e63943073f605f44bb02d461b586d9ca183afbe1bb09feefe0ddd87f3b7->enter($__internal_249b3e63943073f605f44bb02d461b586d9ca183afbe1bb09feefe0ddd87f3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_0a2ef54c9d980b72aa53d8603740bb1266256813b68937800217e786939b58bd->leave($__internal_0a2ef54c9d980b72aa53d8603740bb1266256813b68937800217e786939b58bd_prof);

        
        $__internal_249b3e63943073f605f44bb02d461b586d9ca183afbe1bb09feefe0ddd87f3b7->leave($__internal_249b3e63943073f605f44bb02d461b586d9ca183afbe1bb09feefe0ddd87f3b7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7900323276504894d06bc4f7c5c8f30c2b3cbd065b13ac07c9cff210869bbfb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7900323276504894d06bc4f7c5c8f30c2b3cbd065b13ac07c9cff210869bbfb5->enter($__internal_7900323276504894d06bc4f7c5c8f30c2b3cbd065b13ac07c9cff210869bbfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9011efb491d8e418f1900aa1a50b327ae06b89b962c112b3cc7a77e582e59a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9011efb491d8e418f1900aa1a50b327ae06b89b962c112b3cc7a77e582e59a2->enter($__internal_a9011efb491d8e418f1900aa1a50b327ae06b89b962c112b3cc7a77e582e59a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Picard";
        
        $__internal_a9011efb491d8e418f1900aa1a50b327ae06b89b962c112b3cc7a77e582e59a2->leave($__internal_a9011efb491d8e418f1900aa1a50b327ae06b89b962c112b3cc7a77e582e59a2_prof);

        
        $__internal_7900323276504894d06bc4f7c5c8f30c2b3cbd065b13ac07c9cff210869bbfb5->leave($__internal_7900323276504894d06bc4f7c5c8f30c2b3cbd065b13ac07c9cff210869bbfb5_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd367b72711ba7005bd7a412d354f919421aec6172da8f43f9d3ae080d000a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd367b72711ba7005bd7a412d354f919421aec6172da8f43f9d3ae080d000a13->enter($__internal_dd367b72711ba7005bd7a412d354f919421aec6172da8f43f9d3ae080d000a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_71e36fb52900e7c62b7fbbf3a2e7edff011707fdb61a08438597ec86a726dce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e36fb52900e7c62b7fbbf3a2e7edff011707fdb61a08438597ec86a726dce2->enter($__internal_71e36fb52900e7c62b7fbbf3a2e7edff011707fdb61a08438597ec86a726dce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_71e36fb52900e7c62b7fbbf3a2e7edff011707fdb61a08438597ec86a726dce2->leave($__internal_71e36fb52900e7c62b7fbbf3a2e7edff011707fdb61a08438597ec86a726dce2_prof);

        
        $__internal_dd367b72711ba7005bd7a412d354f919421aec6172da8f43f9d3ae080d000a13->leave($__internal_dd367b72711ba7005bd7a412d354f919421aec6172da8f43f9d3ae080d000a13_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_aa2118c4fd663642a97ea6f5585acb7378ca9a7b1ce0f002ca5803d876ba980b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa2118c4fd663642a97ea6f5585acb7378ca9a7b1ce0f002ca5803d876ba980b->enter($__internal_aa2118c4fd663642a97ea6f5585acb7378ca9a7b1ce0f002ca5803d876ba980b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c84baa6a20573422d8c998ad1b25143693e34bfd5f6567382aa83044222b971a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84baa6a20573422d8c998ad1b25143693e34bfd5f6567382aa83044222b971a->enter($__internal_c84baa6a20573422d8c998ad1b25143693e34bfd5f6567382aa83044222b971a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c84baa6a20573422d8c998ad1b25143693e34bfd5f6567382aa83044222b971a->leave($__internal_c84baa6a20573422d8c998ad1b25143693e34bfd5f6567382aa83044222b971a_prof);

        
        $__internal_aa2118c4fd663642a97ea6f5585acb7378ca9a7b1ce0f002ca5803d876ba980b->leave($__internal_aa2118c4fd663642a97ea6f5585acb7378ca9a7b1ce0f002ca5803d876ba980b_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf16340d50284229c5c9e8b898f417352bd9f35cc5f948e555f76d4d4da92beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf16340d50284229c5c9e8b898f417352bd9f35cc5f948e555f76d4d4da92beb->enter($__internal_bf16340d50284229c5c9e8b898f417352bd9f35cc5f948e555f76d4d4da92beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_49a182ec98600d46519d930283f79be23e6f12b231d4104c7970478cdd8a503c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a182ec98600d46519d930283f79be23e6f12b231d4104c7970478cdd8a503c->enter($__internal_49a182ec98600d46519d930283f79be23e6f12b231d4104c7970478cdd8a503c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_49a182ec98600d46519d930283f79be23e6f12b231d4104c7970478cdd8a503c->leave($__internal_49a182ec98600d46519d930283f79be23e6f12b231d4104c7970478cdd8a503c_prof);

        
        $__internal_bf16340d50284229c5c9e8b898f417352bd9f35cc5f948e555f76d4d4da92beb->leave($__internal_bf16340d50284229c5c9e8b898f417352bd9f35cc5f948e555f76d4d4da92beb_prof);

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
