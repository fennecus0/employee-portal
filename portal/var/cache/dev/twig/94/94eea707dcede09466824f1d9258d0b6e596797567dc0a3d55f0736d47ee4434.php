<?php

/* sidebar-right.html.twig */
class __TwigTemplate_055421d64f7ffaeb8a801301ba95bfd4644596dc07fe1f4163d0eb38bd9ed467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sidebar-right.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'page_header' => array($this, 'block_page_header'),
            'page_center' => array($this, 'block_page_center'),
            'page_header2' => array($this, 'block_page_header2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11a1c77e9c86c1053aa88cec21d52db26379cf4f93c54bec07c92ffec7040903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a1c77e9c86c1053aa88cec21d52db26379cf4f93c54bec07c92ffec7040903->enter($__internal_11a1c77e9c86c1053aa88cec21d52db26379cf4f93c54bec07c92ffec7040903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar-right.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11a1c77e9c86c1053aa88cec21d52db26379cf4f93c54bec07c92ffec7040903->leave($__internal_11a1c77e9c86c1053aa88cec21d52db26379cf4f93c54bec07c92ffec7040903_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_866b3183c1acdf325ba32447ac5011a7f6a693433fd1b87f0d1be12e43d9dbb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866b3183c1acdf325ba32447ac5011a7f6a693433fd1b87f0d1be12e43d9dbb9->enter($__internal_866b3183c1acdf325ba32447ac5011a7f6a693433fd1b87f0d1be12e43d9dbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<section id=\"wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-8\">
                <h3>";
        // line 8
        $this->displayBlock('page_header', $context, $blocks);
        echo "</h3>

                <section class=\"page\">

                    ";
        // line 12
        $this->displayBlock('page_center', $context, $blocks);
        // line 13
        echo "
                </section>
            </div>

            <div class=\"col-xs-12 col-sm-4\">
                <section class=\"sidebar-left\">
                    ";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") != "history")) {
            // line 20
            echo "                        ";
            if (((isset($context["posts"]) ? $context["posts"] : null) != null)) {
                // line 21
                echo "                            <h3>";
                $this->displayBlock('page_header2', $context, $blocks);
                echo "</h3>

                            <div class=\"list-group\">
                                ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, (isset($context["posts"]) ? $context["posts"] : null)), 0, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 25
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("history"), "html", null, true);
                    echo "\" class=\"list-group-item list-group-item-action\">";
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["post"], "title", array()), 0, 35), "html", null, true);
                    echo " <span class=\"badge\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "initialDate", array()), "html", null, true);
                    echo "</span></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                            </div>
                        ";
            }
            // line 29
            echo "                    ";
        }
        // line 30
        echo "                </section>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_866b3183c1acdf325ba32447ac5011a7f6a693433fd1b87f0d1be12e43d9dbb9->leave($__internal_866b3183c1acdf325ba32447ac5011a7f6a693433fd1b87f0d1be12e43d9dbb9_prof);

    }

    // line 8
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_fc643c0e1c091d28f4ca1ebf08eb2131c38eabff87eeba3627504b28006aba83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc643c0e1c091d28f4ca1ebf08eb2131c38eabff87eeba3627504b28006aba83->enter($__internal_fc643c0e1c091d28f4ca1ebf08eb2131c38eabff87eeba3627504b28006aba83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo " ";
        
        $__internal_fc643c0e1c091d28f4ca1ebf08eb2131c38eabff87eeba3627504b28006aba83->leave($__internal_fc643c0e1c091d28f4ca1ebf08eb2131c38eabff87eeba3627504b28006aba83_prof);

    }

    // line 12
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_3b2a6dc53b808f895d6706f2838e72ad2aa69464333284dde5aeec2e76edc361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2a6dc53b808f895d6706f2838e72ad2aa69464333284dde5aeec2e76edc361->enter($__internal_3b2a6dc53b808f895d6706f2838e72ad2aa69464333284dde5aeec2e76edc361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        echo " ";
        
        $__internal_3b2a6dc53b808f895d6706f2838e72ad2aa69464333284dde5aeec2e76edc361->leave($__internal_3b2a6dc53b808f895d6706f2838e72ad2aa69464333284dde5aeec2e76edc361_prof);

    }

    // line 21
    public function block_page_header2($context, array $blocks = array())
    {
        $__internal_0e48286a193bfb5e8c7b16f491a2d040ba2b7b8e7781c1f767a74ca5afcf758d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e48286a193bfb5e8c7b16f491a2d040ba2b7b8e7781c1f767a74ca5afcf758d->enter($__internal_0e48286a193bfb5e8c7b16f491a2d040ba2b7b8e7781c1f767a74ca5afcf758d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header2"));

        echo " ";
        
        $__internal_0e48286a193bfb5e8c7b16f491a2d040ba2b7b8e7781c1f767a74ca5afcf758d->leave($__internal_0e48286a193bfb5e8c7b16f491a2d040ba2b7b8e7781c1f767a74ca5afcf758d_prof);

    }

    public function getTemplateName()
    {
        return "sidebar-right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 21,  126 => 12,  114 => 8,  102 => 30,  99 => 29,  95 => 27,  82 => 25,  78 => 24,  71 => 21,  68 => 20,  66 => 19,  58 => 13,  56 => 12,  49 => 8,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sidebar-right.html.twig", "/var/www/html/portal/app/Resources/views/sidebar-right.html.twig");
    }
}
