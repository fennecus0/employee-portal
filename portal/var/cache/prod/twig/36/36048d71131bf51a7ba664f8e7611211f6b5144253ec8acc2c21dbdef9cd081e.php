<?php

/* :dform:history.html.twig */
class __TwigTemplate_249222581b88a6883cbcc3176e16d72762492c7d14771113a4e1a87a2ac4bd00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main-empty.html.twig", ":dform:history.html.twig", 1);
        $this->blocks = array(
            'page_header' => array($this, 'block_page_header'),
            'page_center' => array($this, 'block_page_center'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main-empty.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        echo "Historie";
    }

    // line 5
    public function block_page_center($context, array $blocks = array())
    {
        // line 6
        echo "                ";
        if ((($context["posts"] ?? null) == null)) {
            // line 7
            echo "                    <p>Noch keine Daten</p>
                ";
        } else {
            // line 9
            echo "
                    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 11
                echo "                        <div class=\"page row\">
                            <div class=\"col-sm-2 card-left\">\t
\t\t\t\t\t\t\t\t<div class=\"card-time-top\">
\t\t\t\t\t\t\t\t\t";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "initialDate", array()), "html", null, true);
                echo " <br> 
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "initialTime", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 19
                if ((($this->getAttribute($context["post"], "endingDate", array()) == null) && ($this->getAttribute($context["post"], "initialTime", array()) != $this->getAttribute($context["post"], "endingTime", array())))) {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t\t\t- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "endingTime", array()), "html", null, true);
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 27
                if (($this->getAttribute($context["post"], "endingDate", array()) != null)) {
                    // line 28
                    echo "                                    <div class=\"card-time-bottom\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "endingDate", array()), "html", null, true);
                    echo " <br> <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "endingTime", array()), "html", null, true);
                    echo "</span></div>
                                ";
                }
                // line 30
                echo "                            </div>

                            <div class=\"col-sm-10 card-right\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"card-title\">
                                            ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "

                                            <form id=\"task_";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\" action=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("history");
                echo "\" method=\"post\" class=\"deleteTrip\">
                                                <button type=\"submit\" name=\"delete_trip\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\">stornieren</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-sm-12 content\">
                                        <div class=\"block\">
                                            <h4>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName", array()), "html", null, true);
                echo "</h4>
                                        </div>

                                        ";
                // line 51
                if (($this->getAttribute($context["post"], "firstName1", array()) != null)) {
                    // line 52
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName1", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName1", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 56
                echo "
                                        ";
                // line 57
                if (($this->getAttribute($context["post"], "firstName2", array()) != null)) {
                    // line 58
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName2", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName2", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 62
                echo "
                                        ";
                // line 63
                if (($this->getAttribute($context["post"], "firstName3", array()) != null)) {
                    // line 64
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName3", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName3", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 68
                echo "
                                        ";
                // line 69
                if (($this->getAttribute($context["post"], "firstName4", array()) != null)) {
                    // line 70
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName4", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName4", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 74
                echo "
                                        ";
                // line 75
                if (($this->getAttribute($context["post"], "firstName5", array()) != null)) {
                    // line 76
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName5", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName5", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 80
                echo "
                                        ";
                // line 81
                if (($this->getAttribute($context["post"], "firstName6", array()) != null)) {
                    // line 82
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName6", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName6", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 86
                echo "
                                        ";
                // line 87
                if (($this->getAttribute($context["post"], "firstName7", array()) != null)) {
                    // line 88
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName7", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName7", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 92
                echo "
                                        ";
                // line 93
                if (($this->getAttribute($context["post"], "firstName8", array()) != null)) {
                    // line 94
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 95
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName8", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName8", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 98
                echo "                                        ";
                if (($this->getAttribute($context["post"], "firstName9", array()) != null)) {
                    // line 99
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName9", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName9", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 103
                echo "
                                        ";
                // line 104
                if (($this->getAttribute($context["post"], "firstName10", array()) != null)) {
                    // line 105
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName10", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName10", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 109
                echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                ";
        }
        // line 115
        echo "
    <div class=\"navigation text-center\">
        ";
        // line 117
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["posts"] ?? null));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return ":dform:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 117,  300 => 115,  297 => 114,  287 => 109,  279 => 106,  276 => 105,  274 => 104,  271 => 103,  263 => 100,  260 => 99,  257 => 98,  249 => 95,  246 => 94,  244 => 93,  241 => 92,  233 => 89,  230 => 88,  228 => 87,  225 => 86,  217 => 83,  214 => 82,  212 => 81,  209 => 80,  201 => 77,  198 => 76,  196 => 75,  193 => 74,  185 => 71,  182 => 70,  180 => 69,  177 => 68,  169 => 65,  166 => 64,  164 => 63,  161 => 62,  153 => 59,  150 => 58,  148 => 57,  145 => 56,  137 => 53,  134 => 52,  132 => 51,  124 => 48,  112 => 39,  106 => 38,  101 => 36,  93 => 30,  85 => 28,  83 => 27,  76 => 22,  70 => 20,  68 => 19,  63 => 17,  57 => 14,  52 => 11,  48 => 10,  45 => 9,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":dform:history.html.twig", "/var/www/html/portal/app/Resources/views/dform/history.html.twig");
    }
}
