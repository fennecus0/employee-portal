<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_08d6b247faeb8f80454d8e55ebb55dc90e8ea687ae50e556f11724414f81cdcd extends Twig_Template
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
        $__internal_eb3c260e0587e3a9aaa8246e08798c6d83959d3016e83cecd8e3dcf4907aba26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3c260e0587e3a9aaa8246e08798c6d83959d3016e83cecd8e3dcf4907aba26->enter($__internal_eb3c260e0587e3a9aaa8246e08798c6d83959d3016e83cecd8e3dcf4907aba26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_7934b11d2501f8578762b5d4ffe6205868201ae5d3b2ada22979c9fad46ddd6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7934b11d2501f8578762b5d4ffe6205868201ae5d3b2ada22979c9fad46ddd6f->enter($__internal_7934b11d2501f8578762b5d4ffe6205868201ae5d3b2ada22979c9fad46ddd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb3c260e0587e3a9aaa8246e08798c6d83959d3016e83cecd8e3dcf4907aba26->leave($__internal_eb3c260e0587e3a9aaa8246e08798c6d83959d3016e83cecd8e3dcf4907aba26_prof);

        
        $__internal_7934b11d2501f8578762b5d4ffe6205868201ae5d3b2ada22979c9fad46ddd6f->leave($__internal_7934b11d2501f8578762b5d4ffe6205868201ae5d3b2ada22979c9fad46ddd6f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0a123676befea67c57f2e801a464251711faa86dd8a3950b033268fc50e62304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a123676befea67c57f2e801a464251711faa86dd8a3950b033268fc50e62304->enter($__internal_0a123676befea67c57f2e801a464251711faa86dd8a3950b033268fc50e62304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2ce2f7b8359244b5fc6db8d7a54e655675b70b7084b0ac0bc3cc19b44fcc3a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce2f7b8359244b5fc6db8d7a54e655675b70b7084b0ac0bc3cc19b44fcc3a25->enter($__internal_2ce2f7b8359244b5fc6db8d7a54e655675b70b7084b0ac0bc3cc19b44fcc3a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        
        $__internal_2ce2f7b8359244b5fc6db8d7a54e655675b70b7084b0ac0bc3cc19b44fcc3a25->leave($__internal_2ce2f7b8359244b5fc6db8d7a54e655675b70b7084b0ac0bc3cc19b44fcc3a25_prof);

        
        $__internal_0a123676befea67c57f2e801a464251711faa86dd8a3950b033268fc50e62304->leave($__internal_0a123676befea67c57f2e801a464251711faa86dd8a3950b033268fc50e62304_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b12f120939def524f1550a4c763caee7c81e9d6dcbc8c6a350e1bc669f7b904b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b12f120939def524f1550a4c763caee7c81e9d6dcbc8c6a350e1bc669f7b904b->enter($__internal_b12f120939def524f1550a4c763caee7c81e9d6dcbc8c6a350e1bc669f7b904b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c29d30312e4a6eac372d527596714b10958de1a052afc7f1f209049ab2408074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29d30312e4a6eac372d527596714b10958de1a052afc7f1f209049ab2408074->enter($__internal_c29d30312e4a6eac372d527596714b10958de1a052afc7f1f209049ab2408074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    ";
        
        $__internal_c29d30312e4a6eac372d527596714b10958de1a052afc7f1f209049ab2408074->leave($__internal_c29d30312e4a6eac372d527596714b10958de1a052afc7f1f209049ab2408074_prof);

        
        $__internal_b12f120939def524f1550a4c763caee7c81e9d6dcbc8c6a350e1bc669f7b904b->leave($__internal_b12f120939def524f1550a4c763caee7c81e9d6dcbc8c6a350e1bc669f7b904b_prof);

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
        return array (  107 => 15,  89 => 14,  86 => 13,  83 => 12,  77 => 11,  68 => 8,  63 => 7,  58 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
