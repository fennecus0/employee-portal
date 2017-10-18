<?php

/* ::sidebar-right.html.twig */
class __TwigTemplate_15e31379e2e60932c3ceff46df1156a04429993cf9f043272a464e15b0e1d3d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::sidebar-right.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") != "history")) {
            // line 20
            echo "                        ";
            if ((($context["posts"] ?? null) != null)) {
                // line 21
                echo "                            <h3>";
                $this->displayBlock('page_header2', $context, $blocks);
                echo "</h3>

                            <div class=\"list-group\">
                                ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, ($context["posts"] ?? null)), 0, 10));
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
    }

    // line 8
    public function block_page_header($context, array $blocks = array())
    {
        echo " ";
    }

    // line 12
    public function block_page_center($context, array $blocks = array())
    {
        echo " ";
    }

    // line 21
    public function block_page_header2($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "::sidebar-right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 21,  108 => 12,  102 => 8,  93 => 30,  90 => 29,  86 => 27,  73 => 25,  69 => 24,  62 => 21,  59 => 20,  57 => 19,  49 => 13,  47 => 12,  40 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::sidebar-right.html.twig", "/var/www/html/portal/app/Resources/views/sidebar-right.html.twig");
    }
}
