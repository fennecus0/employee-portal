<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_7ff8f9cc8c35deb1846cd9ec7c88ff0a0501bfac1544e71215b785062f0f957f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fa15d17e7ff0f3af46904cdceee233b2f40ee4d7b8eddc4ad9cb9e8b1a8e39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa15d17e7ff0f3af46904cdceee233b2f40ee4d7b8eddc4ad9cb9e8b1a8e39c->enter($__internal_6fa15d17e7ff0f3af46904cdceee233b2f40ee4d7b8eddc4ad9cb9e8b1a8e39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fa15d17e7ff0f3af46904cdceee233b2f40ee4d7b8eddc4ad9cb9e8b1a8e39c->leave($__internal_6fa15d17e7ff0f3af46904cdceee233b2f40ee4d7b8eddc4ad9cb9e8b1a8e39c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_36eefb12c1d235ac79408360ef4dbea2109a5f98eedde108ec440ea3431503c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36eefb12c1d235ac79408360ef4dbea2109a5f98eedde108ec440ea3431503c5->enter($__internal_36eefb12c1d235ac79408360ef4dbea2109a5f98eedde108ec440ea3431503c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_36eefb12c1d235ac79408360ef4dbea2109a5f98eedde108ec440ea3431503c5->leave($__internal_36eefb12c1d235ac79408360ef4dbea2109a5f98eedde108ec440ea3431503c5_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee0f36fbd4b471d1af2ec27a63ac9354d65ede5547ceeac8eb53955168dff644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0f36fbd4b471d1af2ec27a63ac9354d65ede5547ceeac8eb53955168dff644->enter($__internal_ee0f36fbd4b471d1af2ec27a63ac9354d65ede5547ceeac8eb53955168dff644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    ";
        
        $__internal_ee0f36fbd4b471d1af2ec27a63ac9354d65ede5547ceeac8eb53955168dff644->leave($__internal_ee0f36fbd4b471d1af2ec27a63ac9354d65ede5547ceeac8eb53955168dff644_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 15,  80 => 14,  77 => 13,  74 => 12,  68 => 11,  59 => 8,  54 => 7,  49 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block content %}
    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    {% block fos_user_content %}
    {% endblock fos_user_content %}
{% endblock %}", "@FOSUser/layout.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
