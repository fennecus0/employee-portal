<?php

/* dform/history.html.twig */
class __TwigTemplate_712d0897f0fd663aeaa438589f4c0186b195423b0d99bee7c14051f7489509b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main-empty.html.twig", "dform/history.html.twig", 1);
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
        $__internal_6af6ff6ba4ec2ae4854d4d9453c1de72d3d7b3237612a3290389469bf926251b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af6ff6ba4ec2ae4854d4d9453c1de72d3d7b3237612a3290389469bf926251b->enter($__internal_6af6ff6ba4ec2ae4854d4d9453c1de72d3d7b3237612a3290389469bf926251b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dform/history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6af6ff6ba4ec2ae4854d4d9453c1de72d3d7b3237612a3290389469bf926251b->leave($__internal_6af6ff6ba4ec2ae4854d4d9453c1de72d3d7b3237612a3290389469bf926251b_prof);

    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_bef5d94e5b1df90fe18747f638de62a193ca4f7b4bf7682c74552ebb8ce2e40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef5d94e5b1df90fe18747f638de62a193ca4f7b4bf7682c74552ebb8ce2e40f->enter($__internal_bef5d94e5b1df90fe18747f638de62a193ca4f7b4bf7682c74552ebb8ce2e40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo "Historie";
        
        $__internal_bef5d94e5b1df90fe18747f638de62a193ca4f7b4bf7682c74552ebb8ce2e40f->leave($__internal_bef5d94e5b1df90fe18747f638de62a193ca4f7b4bf7682c74552ebb8ce2e40f_prof);

    }

    // line 5
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_56e767fbdeb55d26795fbb91da1979e66b31dfe4d64a93ea6f17e986736557c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e767fbdeb55d26795fbb91da1979e66b31dfe4d64a93ea6f17e986736557c9->enter($__internal_56e767fbdeb55d26795fbb91da1979e66b31dfe4d64a93ea6f17e986736557c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        // line 6
        echo "                ";
        if (((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")) == null)) {
            // line 7
            echo "                    <p>Noch keine Daten</p>
                ";
        } else {
            // line 9
            echo "
                    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        echo "
    </div>
";
        
        $__internal_56e767fbdeb55d26795fbb91da1979e66b31dfe4d64a93ea6f17e986736557c9->leave($__internal_56e767fbdeb55d26795fbb91da1979e66b31dfe4d64a93ea6f17e986736557c9_prof);

    }

    public function getTemplateName()
    {
        return "dform/history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 117,  315 => 115,  312 => 114,  302 => 109,  294 => 106,  291 => 105,  289 => 104,  286 => 103,  278 => 100,  275 => 99,  272 => 98,  264 => 95,  261 => 94,  259 => 93,  256 => 92,  248 => 89,  245 => 88,  243 => 87,  240 => 86,  232 => 83,  229 => 82,  227 => 81,  224 => 80,  216 => 77,  213 => 76,  211 => 75,  208 => 74,  200 => 71,  197 => 70,  195 => 69,  192 => 68,  184 => 65,  181 => 64,  179 => 63,  176 => 62,  168 => 59,  165 => 58,  163 => 57,  160 => 56,  152 => 53,  149 => 52,  147 => 51,  139 => 48,  127 => 39,  121 => 38,  116 => 36,  108 => 30,  100 => 28,  98 => 27,  91 => 22,  85 => 20,  83 => 19,  78 => 17,  72 => 14,  67 => 11,  63 => 10,  60 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'main-empty.html.twig' %}

{% block page_header %}Historie{% endblock page_header %}

{% block page_center %}
                {% if posts == null %}
                    <p>Noch keine Daten</p>
                {% else %}

                    {% for post in posts %}
                        <div class=\"page row\">
                            <div class=\"col-sm-2 card-left\">\t
\t\t\t\t\t\t\t\t<div class=\"card-time-top\">
\t\t\t\t\t\t\t\t\t{{ post.initialDate }} <br> 
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{{ post.initialTime }}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% if post.endingDate == null and post.initialTime != post.endingTime %}
\t\t\t\t\t\t\t\t\t\t- {{ post.endingTime }}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% if post.endingDate != null %}
                                    <div class=\"card-time-bottom\">{{ post.endingDate }} <br> <span>{{ post.endingTime }}</span></div>
                                {% endif %}
                            </div>

                            <div class=\"col-sm-10 card-right\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"card-title\">
                                            {{ post.title }}

                                            <form id=\"task_{{ post.id }}\" action=\"{{ path('history') }}\" method=\"post\" class=\"deleteTrip\">
                                                <button type=\"submit\" name=\"delete_trip\" value=\"{{ post.id }}\">stornieren</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-sm-12 content\">
                                        <div class=\"block\">
                                            <h4>{{ post.firstName }} {{ post.lastName }}</h4>
                                        </div>

                                        {% if post.firstName1 != null %}
                                            <div class=\"block\">
                                                <h4>{{ post.firstName1 }}<br> {{ post.lastName1 }}</h4>
                                            </div>
                                        {% endif %}

                                        {% if post.firstName2 != null %}
                                            <div class=\"block\">
                                                <h4>{{ post.firstName2 }}<br> {{ post.lastName2 }}</h4>
                                            </div>
                                        {% endif %}

                                        {% if post.firstName3 != null %}
                                            <div class=\"block\">
                                                <h4>{{ post.firstName3 }}<br> {{ post.lastName3 }}</h4>
                                            </div>
                                        {% endif %}

                                        {% if post.firstName4 != null %}
                                            <div class=\"block\">
                                                <h4>{{ post.firstName4 }}<br> {{ post.lastName4 }}</h4>
                                            </div>
                                        {% endif %}

                                        {% if post.firstName5 != null %}
                                            <div class=\"block\">
                                                <h4>{{ post.firstName5 }}<br> {{ post.lastName5 }}</h4>
                                            </div>
                                        {% endif %}

                                        {% if post.firstName6 != null %}
                                            <div class=\"block\">
                                                <h4>{{ post.firstName6 }}<br> {{ post.lastName6 }}</h4>
                                            </div>
                                        {% endif %}

                                        {% if post.firstName7 != null %}
                                            <div class=\"block\">
                                                <h4>{{ post.firstName7 }}<br> {{ post.lastName7 }}</h4>
                                            </div>
                                        {% endif %}

                                        {% if post.firstName8 != null %}
                                            <div class=\"block\">
                                                <h4>{{ post.firstName8 }}<br> {{ post.lastName8 }}</h4>
                                            </div>
                                        {% endif %}
                                        {% if post.firstName9 != null %}
                                            <div class=\"block\">
                                                <h4>{{ post.firstName9 }}<br> {{ post.lastName9 }}</h4>
                                            </div>
                                        {% endif %}

                                        {% if post.firstName10 != null %}
                                            <div class=\"block\">
                                                <h4>{{ post.firstName10 }}<br> {{ post.lastName10 }}</h4>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                {% endif %}

    <div class=\"navigation text-center\">
        {{ knp_pagination_render(posts) }}
    </div>
{% endblock %}", "dform/history.html.twig", "/var/www/html/portal/app/Resources/views/dform/history.html.twig");
    }
}
