<?php

/* Pagination/view/twitter_bootstrap_v3_pagination.html.twig */
class __TwigTemplate_9124c40ea003b140f01df93f88b8afc8fbb52bf5e71bd63dc5a80a25dc7e5e5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5db95b57ca209e59b6c8a4b2885a5546432bd4ccb31aac6720dbc1c382433d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db95b57ca209e59b6c8a4b2885a5546432bd4ccb31aac6720dbc1c382433d33->enter($__internal_5db95b57ca209e59b6c8a4b2885a5546432bd4ccb31aac6720dbc1c382433d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Pagination/view/twitter_bootstrap_v3_pagination.html.twig"));

        $__internal_5944da31a982a312e8520ec998675d8feaa56b9dffad0d43f9242abbe14e8579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5944da31a982a312e8520ec998675d8feaa56b9dffad0d43f9242abbe14e8579->enter($__internal_5944da31a982a312e8520ec998675d8feaa56b9dffad0d43f9242abbe14e8579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Pagination/view/twitter_bootstrap_v3_pagination.html.twig"));

        // line 16
        echo "
";
        // line 17
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 18
            echo "    <ul class=\"pagination\">

    ";
            // line 20
            if (array_key_exists("previous", $context)) {
                // line 21
                echo "        <li>
            <a rel=\"prev\" href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></a>
        </li>
    ";
            } else {
                // line 25
                echo "        <li class=\"disabled\">
            <span><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></span>
        </li>
    ";
            }
            // line 29
            echo "
    ";
            // line 30
            if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) > 1)) {
                // line 31
                echo "        <li>
            <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 34
                if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) == 3)) {
                    // line 35
                    echo "            <li>
                <a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif ((                // line 38
(isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) != 2)) {
                    // line 39
                    echo "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 43
                echo "    ";
            }
            // line 44
            echo "
    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 46
                echo "        ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 47
                    echo "            <li>
                <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 51
                    echo "            <li class=\"active\">
                <span>";
                    // line 52
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 55
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
    ";
            // line 58
            if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > (isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")))) {
                // line 59
                echo "        ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 1))) {
                    // line 60
                    echo "            ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 2))) {
                        // line 61
                        echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 65
                        echo "                <li>
                    <a href=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 69
                    echo "        ";
                }
                // line 70
                echo "        <li>
            <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 74
            echo "
    ";
            // line 75
            if (array_key_exists("next", $context)) {
                // line 76
                echo "        <li>
            <a rel=\"next\" href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
        </li>
    ";
            } else {
                // line 80
                echo "        <li class=\"disabled\">
            <span><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span>
        </li>
    ";
            }
            // line 84
            echo "    </ul>
";
        }
        
        $__internal_5db95b57ca209e59b6c8a4b2885a5546432bd4ccb31aac6720dbc1c382433d33->leave($__internal_5db95b57ca209e59b6c8a4b2885a5546432bd4ccb31aac6720dbc1c382433d33_prof);

        
        $__internal_5944da31a982a312e8520ec998675d8feaa56b9dffad0d43f9242abbe14e8579->leave($__internal_5944da31a982a312e8520ec998675d8feaa56b9dffad0d43f9242abbe14e8579_prof);

    }

    public function getTemplateName()
    {
        return "Pagination/view/twitter_bootstrap_v3_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 84,  178 => 80,  172 => 77,  169 => 76,  167 => 75,  164 => 74,  156 => 71,  153 => 70,  150 => 69,  142 => 66,  139 => 65,  133 => 61,  130 => 60,  127 => 59,  125 => 58,  122 => 57,  115 => 55,  109 => 52,  106 => 51,  98 => 48,  95 => 47,  92 => 46,  88 => 45,  85 => 44,  82 => 43,  76 => 39,  74 => 38,  69 => 36,  66 => 35,  64 => 34,  59 => 32,  56 => 31,  54 => 30,  51 => 29,  45 => 25,  39 => 22,  36 => 21,  34 => 20,  30 => 18,  28 => 17,  25 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Twitter Bootstrap v3 Sliding pagination control implementation.
 *
 * View that can be used with the pagination module
 * from the Twitter Bootstrap CSS Toolkit
 * http://getbootstrap.com/components/#pagination
 *
 * @author Pablo Díez <pablodip@gmail.com>
 * @author Jan Sorgalla <jsorgalla@gmail.com>
 * @author Artem Ponomarenko <imenem@inbox.ru>
 * @author Artem Zabelin <artjomzabelin@gmail.com>
 */
#}

{% if pageCount > 1 %}
    <ul class=\"pagination\">

    {% if previous is defined %}
        <li>
            <a rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></a>
        </li>
    {% else %}
        <li class=\"disabled\">
            <span><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></span>
        </li>
    {% endif %}

    {% if startPage > 1 %}
        <li>
            <a href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\">1</a>
        </li>
        {% if startPage == 3 %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): 2})) }}\">2</a>
            </li>
        {% elseif startPage != 2 %}
        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        {% endif %}
    {% endif %}

    {% for page in pagesInRange %}
        {% if page != current %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
            </li>
        {% else %}
            <li class=\"active\">
                <span>{{ page }}</span>
            </li>
        {% endif %}

    {% endfor %}

    {% if pageCount > endPage %}
        {% if pageCount > (endPage + 1) %}
            {% if pageCount > (endPage + 2) %}
                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            {% else %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}\">{{ pageCount -1 }}</a>
                </li>
            {% endif %}
        {% endif %}
        <li>
            <a href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\">{{ pageCount }}</a>
        </li>
    {% endif %}

    {% if next is defined %}
        <li>
            <a rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
        </li>
    {% else %}
        <li class=\"disabled\">
            <span><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span>
        </li>
    {% endif %}
    </ul>
{% endif %}
", "Pagination/view/twitter_bootstrap_v3_pagination.html.twig", "/var/www/html/portal/app/Resources/views/Pagination/view/twitter_bootstrap_v3_pagination.html.twig");
    }
}
