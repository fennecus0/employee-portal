<?php

/* dform/history.html.twig */
class __TwigTemplate_f97093208c161311fa8f4850b7f5d2852b093b88dafe2df3318873fa1d398c3d extends Twig_Template
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
        $__internal_ae69076a89e1cfc0c1aeea8e703813e20582f8e9e6d5069859ca3367d613d32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae69076a89e1cfc0c1aeea8e703813e20582f8e9e6d5069859ca3367d613d32d->enter($__internal_ae69076a89e1cfc0c1aeea8e703813e20582f8e9e6d5069859ca3367d613d32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dform/history.html.twig"));

        $__internal_2b550a87d7db62a60f4137b16e5140a57881b23d27d77e4c545518fe6f3d3f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b550a87d7db62a60f4137b16e5140a57881b23d27d77e4c545518fe6f3d3f0e->enter($__internal_2b550a87d7db62a60f4137b16e5140a57881b23d27d77e4c545518fe6f3d3f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dform/history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae69076a89e1cfc0c1aeea8e703813e20582f8e9e6d5069859ca3367d613d32d->leave($__internal_ae69076a89e1cfc0c1aeea8e703813e20582f8e9e6d5069859ca3367d613d32d_prof);

        
        $__internal_2b550a87d7db62a60f4137b16e5140a57881b23d27d77e4c545518fe6f3d3f0e->leave($__internal_2b550a87d7db62a60f4137b16e5140a57881b23d27d77e4c545518fe6f3d3f0e_prof);

    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_7455556e50c2702a3b664aca3ab4ba24d03632c247e467a4a2c41ff8284ee6db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7455556e50c2702a3b664aca3ab4ba24d03632c247e467a4a2c41ff8284ee6db->enter($__internal_7455556e50c2702a3b664aca3ab4ba24d03632c247e467a4a2c41ff8284ee6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_d7bd9dbcbe4dde1f18dba0cfc5646c1155fe4e6dadc82120d58798fd7238acd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7bd9dbcbe4dde1f18dba0cfc5646c1155fe4e6dadc82120d58798fd7238acd5->enter($__internal_d7bd9dbcbe4dde1f18dba0cfc5646c1155fe4e6dadc82120d58798fd7238acd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo "Historie";
        
        $__internal_d7bd9dbcbe4dde1f18dba0cfc5646c1155fe4e6dadc82120d58798fd7238acd5->leave($__internal_d7bd9dbcbe4dde1f18dba0cfc5646c1155fe4e6dadc82120d58798fd7238acd5_prof);

        
        $__internal_7455556e50c2702a3b664aca3ab4ba24d03632c247e467a4a2c41ff8284ee6db->leave($__internal_7455556e50c2702a3b664aca3ab4ba24d03632c247e467a4a2c41ff8284ee6db_prof);

    }

    // line 5
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_e9beb09382dfc5f8210b40866f019166da8d7a1987479c8c375daa582e835f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9beb09382dfc5f8210b40866f019166da8d7a1987479c8c375daa582e835f1f->enter($__internal_e9beb09382dfc5f8210b40866f019166da8d7a1987479c8c375daa582e835f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        $__internal_e411257a63fe124bde84dcb383326b1cf9cb22e6f938991e73f5f0f03208293a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e411257a63fe124bde84dcb383326b1cf9cb22e6f938991e73f5f0f03208293a->enter($__internal_e411257a63fe124bde84dcb383326b1cf9cb22e6f938991e73f5f0f03208293a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        echo "
    </div>
";
        
        $__internal_e411257a63fe124bde84dcb383326b1cf9cb22e6f938991e73f5f0f03208293a->leave($__internal_e411257a63fe124bde84dcb383326b1cf9cb22e6f938991e73f5f0f03208293a_prof);

        
        $__internal_e9beb09382dfc5f8210b40866f019166da8d7a1987479c8c375daa582e835f1f->leave($__internal_e9beb09382dfc5f8210b40866f019166da8d7a1987479c8c375daa582e835f1f_prof);

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
        return array (  302 => 101,  298 => 99,  295 => 98,  285 => 93,  277 => 90,  274 => 89,  272 => 88,  269 => 87,  261 => 84,  258 => 83,  255 => 82,  247 => 79,  244 => 78,  242 => 77,  239 => 76,  231 => 73,  228 => 72,  226 => 71,  223 => 70,  215 => 67,  212 => 66,  210 => 65,  207 => 64,  199 => 61,  196 => 60,  194 => 59,  191 => 58,  183 => 55,  180 => 54,  178 => 53,  175 => 52,  167 => 49,  164 => 48,  162 => 47,  159 => 46,  151 => 43,  148 => 42,  146 => 41,  143 => 40,  135 => 37,  132 => 36,  130 => 35,  122 => 32,  111 => 24,  103 => 18,  95 => 16,  93 => 15,  86 => 13,  82 => 11,  78 => 10,  75 => 9,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                            <div class=\"col-sm-2 card-left\">
                                <div class=\"card-time-top\">{{ post.initialDate }} <br> <span>{{ post.initialTime }}</span></div>

                                {% if post.endingDate != null %}
                                    <div class=\"card-time-bottom\">{{ post.endingDate }} <br> <span>{{ post.endingTime }}</span></div>
                                {% endif %}
                            </div>

                            <div class=\"col-sm-10 card-right\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"card-title\">
                                            {{ post.title }}
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
