<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_fd6561d8ecae4c48ac51345beec2c7d675115d509b0b132294459fefe67e8f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d19302c36dbcfe2a7b9cefa9fc8b152acd3d47a8a834cc6be362fe98d109ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d19302c36dbcfe2a7b9cefa9fc8b152acd3d47a8a834cc6be362fe98d109ea6->enter($__internal_6d19302c36dbcfe2a7b9cefa9fc8b152acd3d47a8a834cc6be362fe98d109ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"noindex,nofollow\"/>
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/ico\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\"
          href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\"/>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"//code.jquery.com/jquery-2.2.4.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 18
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "</head>
<body>
    <section id=\"wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <section class=\"page\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">

                                ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
";
        
        $__internal_6d19302c36dbcfe2a7b9cefa9fc8b152acd3d47a8a834cc6be362fe98d109ea6->leave($__internal_6d19302c36dbcfe2a7b9cefa9fc8b152acd3d47a8a834cc6be362fe98d109ea6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e756c39fb5bc177e5a0087fc2802f9e1cfc82c907c202f04d2b3dcc01000b27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e756c39fb5bc177e5a0087fc2802f9e1cfc82c907c202f04d2b3dcc01000b27c->enter($__internal_e756c39fb5bc177e5a0087fc2802f9e1cfc82c907c202f04d2b3dcc01000b27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e756c39fb5bc177e5a0087fc2802f9e1cfc82c907c202f04d2b3dcc01000b27c->leave($__internal_e756c39fb5bc177e5a0087fc2802f9e1cfc82c907c202f04d2b3dcc01000b27c_prof);

    }

    // line 18
    public function block_head($context, array $blocks = array())
    {
        $__internal_523a81272c2458adcc9415440c7e50bd8abfddf83f795680fc297d45780bcc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523a81272c2458adcc9415440c7e50bd8abfddf83f795680fc297d45780bcc65->enter($__internal_523a81272c2458adcc9415440c7e50bd8abfddf83f795680fc297d45780bcc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_523a81272c2458adcc9415440c7e50bd8abfddf83f795680fc297d45780bcc65->leave($__internal_523a81272c2458adcc9415440c7e50bd8abfddf83f795680fc297d45780bcc65_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a27fb9ac2bd9c078ead8760d7dea8eb62984f0a5160dd72d98f325009658e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a27fb9ac2bd9c078ead8760d7dea8eb62984f0a5160dd72d98f325009658e76->enter($__internal_5a27fb9ac2bd9c078ead8760d7dea8eb62984f0a5160dd72d98f325009658e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5a27fb9ac2bd9c078ead8760d7dea8eb62984f0a5160dd72d98f325009658e76->leave($__internal_5a27fb9ac2bd9c078ead8760d7dea8eb62984f0a5160dd72d98f325009658e76_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 29,  106 => 18,  95 => 7,  78 => 30,  76 => 29,  64 => 19,  62 => 18,  58 => 17,  51 => 13,  47 => 12,  41 => 9,  37 => 8,  33 => 7,  25 => 1,);
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
    <meta name=\"robots\" content=\"noindex,nofollow\"/>
    <title>{% block title %}{% endblock %}</title>
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" type=\"image/ico\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/screen.css') }}\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\"
          href=\"{{ asset('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}\"/>
    <script type=\"text/javascript\" src=\"{{ asset('bower_components/moment/min/moment.min.js') }}\"></script>
    <script src=\"//code.jquery.com/jquery-2.2.4.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}\"></script>
    {% block head %}{% endblock %}
</head>
<body>
    <section id=\"wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <section class=\"page\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">

                                {% block body %}{% endblock %}

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/portal/app/Resources/TwigBundle/views/layout.html.twig");
    }
}
