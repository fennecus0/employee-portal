<?php

/* ::base.html.twig */
class __TwigTemplate_b31c50c0f126c7dc9477be5e8e1eafac327e9b76df1c3e2cf100c982b5ce4c86 extends Twig_Template
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
        $__internal_34d260cb5cd488c1c6abfd484ab23fd23a5c9f1a2f0eea7b263acb147fa03779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d260cb5cd488c1c6abfd484ab23fd23a5c9f1a2f0eea7b263acb147fa03779->enter($__internal_34d260cb5cd488c1c6abfd484ab23fd23a5c9f1a2f0eea7b263acb147fa03779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        $this->loadTemplate("::topnav.html.twig", "::base.html.twig", 21)->display($context);
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->loadTemplate("::footer.html.twig", "::base.html.twig", 25)->display($context);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "</body>
</html>";
        
        $__internal_34d260cb5cd488c1c6abfd484ab23fd23a5c9f1a2f0eea7b263acb147fa03779->leave($__internal_34d260cb5cd488c1c6abfd484ab23fd23a5c9f1a2f0eea7b263acb147fa03779_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ba5236be41063326fe920d3653e017bcfd7e4e623d8724c539611bffb9ec789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba5236be41063326fe920d3653e017bcfd7e4e623d8724c539611bffb9ec789->enter($__internal_7ba5236be41063326fe920d3653e017bcfd7e4e623d8724c539611bffb9ec789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Picard";
        
        $__internal_7ba5236be41063326fe920d3653e017bcfd7e4e623d8724c539611bffb9ec789->leave($__internal_7ba5236be41063326fe920d3653e017bcfd7e4e623d8724c539611bffb9ec789_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed9a8259de3c87c913a27da7669bf64113f024d1c54d58a13fff08ddcad3add6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9a8259de3c87c913a27da7669bf64113f024d1c54d58a13fff08ddcad3add6->enter($__internal_ed9a8259de3c87c913a27da7669bf64113f024d1c54d58a13fff08ddcad3add6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ed9a8259de3c87c913a27da7669bf64113f024d1c54d58a13fff08ddcad3add6->leave($__internal_ed9a8259de3c87c913a27da7669bf64113f024d1c54d58a13fff08ddcad3add6_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_17e777c8366a73013e7bbf50e37991c26164c99dd8003304bee7d2e29ecb9b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e777c8366a73013e7bbf50e37991c26164c99dd8003304bee7d2e29ecb9b3a->enter($__internal_17e777c8366a73013e7bbf50e37991c26164c99dd8003304bee7d2e29ecb9b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_17e777c8366a73013e7bbf50e37991c26164c99dd8003304bee7d2e29ecb9b3a->leave($__internal_17e777c8366a73013e7bbf50e37991c26164c99dd8003304bee7d2e29ecb9b3a_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7394d4f4125614369b07a58e986373b8c4ebbea77d0bf2695e16d812acc58c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7394d4f4125614369b07a58e986373b8c4ebbea77d0bf2695e16d812acc58c17->enter($__internal_7394d4f4125614369b07a58e986373b8c4ebbea77d0bf2695e16d812acc58c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_7394d4f4125614369b07a58e986373b8c4ebbea77d0bf2695e16d812acc58c17->leave($__internal_7394d4f4125614369b07a58e986373b8c4ebbea77d0bf2695e16d812acc58c17_prof);

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
        return new Twig_Source("", "::base.html.twig", "/var/www/html/portal/app/Resources/views/base.html.twig");
    }
}
