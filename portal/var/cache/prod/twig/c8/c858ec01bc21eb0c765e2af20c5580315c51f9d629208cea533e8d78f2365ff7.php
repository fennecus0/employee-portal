<?php

/* dform/history.html.twig1 */
class __TwigTemplate_a34a17cc52e91b1ce336197641bdaa3f52e15e79fc53d961007a699f2544a958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main-empty.html.twig", "dform/history.html.twig1", 1);
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
                            <div class=\"col-sm-2 card-left\">
                                <div class=\"card-time-top\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "initialDate", array()), "html", null, true);
                echo " <br> <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "initialTime", array()), "html", null, true);
                echo "</span></div>

                                ";
                // line 15
                if (($this->getAttribute($context["post"], "endingDate", array()) != null)) {
                    // line 16
                    echo "                                    <div class=\"card-time-bottom\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "endingDate", array()), "html", null, true);
                    echo " <br> <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "endingTime", array()), "html", null, true);
                    echo "</span></div>
                                ";
                }
                // line 18
                echo "                            </div>

                            <div class=\"col-sm-10 card-right\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"card-title\">
                                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-sm-12 content\">
                                        <div class=\"block\">
                                            <h4>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName", array()), "html", null, true);
                echo "</h4>
                                        </div>

                                        ";
                // line 35
                if (($this->getAttribute($context["post"], "firstName1", array()) != null)) {
                    // line 36
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName1", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName1", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 40
                echo "
                                        ";
                // line 41
                if (($this->getAttribute($context["post"], "firstName2", array()) != null)) {
                    // line 42
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName2", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName2", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 46
                echo "
                                        ";
                // line 47
                if (($this->getAttribute($context["post"], "firstName3", array()) != null)) {
                    // line 48
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName3", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName3", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 52
                echo "
                                        ";
                // line 53
                if (($this->getAttribute($context["post"], "firstName4", array()) != null)) {
                    // line 54
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName4", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName4", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 58
                echo "
                                        ";
                // line 59
                if (($this->getAttribute($context["post"], "firstName5", array()) != null)) {
                    // line 60
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName5", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName5", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 64
                echo "
                                        ";
                // line 65
                if (($this->getAttribute($context["post"], "firstName6", array()) != null)) {
                    // line 66
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName6", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName6", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 70
                echo "
                                        ";
                // line 71
                if (($this->getAttribute($context["post"], "firstName7", array()) != null)) {
                    // line 72
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName7", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName7", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 76
                echo "
                                        ";
                // line 77
                if (($this->getAttribute($context["post"], "firstName8", array()) != null)) {
                    // line 78
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName8", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName8", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 82
                echo "                                        ";
                if (($this->getAttribute($context["post"], "firstName9", array()) != null)) {
                    // line 83
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName9", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName9", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 87
                echo "
                                        ";
                // line 88
                if (($this->getAttribute($context["post"], "firstName10", array()) != null)) {
                    // line 89
                    echo "                                            <div class=\"block\">
                                                <h4>";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "firstName10", array()), "html", null, true);
                    echo "<br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lastName10", array()), "html", null, true);
                    echo "</h4>
                                            </div>
                                        ";
                }
                // line 93
                echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                ";
        }
        // line 99
        echo "
    <div class=\"navigation text-center\">
        ";
        // line 101
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["posts"] ?? null));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "dform/history.html.twig1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 101,  268 => 99,  265 => 98,  255 => 93,  247 => 90,  244 => 89,  242 => 88,  239 => 87,  231 => 84,  228 => 83,  225 => 82,  217 => 79,  214 => 78,  212 => 77,  209 => 76,  201 => 73,  198 => 72,  196 => 71,  193 => 70,  185 => 67,  182 => 66,  180 => 65,  177 => 64,  169 => 61,  166 => 60,  164 => 59,  161 => 58,  153 => 55,  150 => 54,  148 => 53,  145 => 52,  137 => 49,  134 => 48,  132 => 47,  129 => 46,  121 => 43,  118 => 42,  116 => 41,  113 => 40,  105 => 37,  102 => 36,  100 => 35,  92 => 32,  81 => 24,  73 => 18,  65 => 16,  63 => 15,  56 => 13,  52 => 11,  48 => 10,  45 => 9,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dform/history.html.twig1", "/var/www/html/portal/app/Resources/views/dform/history.html.twig1");
    }
}
