<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_ddae60567ad30654fd644defa934c4e4cf8a73192a280efa4e74bad5409a7297 extends Twig_Template
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
        $__internal_e7ea682fb738f3f40ed84b26afa217e888657e6ae5200081b9b9d078facee404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ea682fb738f3f40ed84b26afa217e888657e6ae5200081b9b9d078facee404->enter($__internal_e7ea682fb738f3f40ed84b26afa217e888657e6ae5200081b9b9d078facee404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_da6ce5b8fd44648452f8095965a0c15489737b865f7fd3776f3aee029cc74ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6ce5b8fd44648452f8095965a0c15489737b865f7fd3776f3aee029cc74ee0->enter($__internal_da6ce5b8fd44648452f8095965a0c15489737b865f7fd3776f3aee029cc74ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7ea682fb738f3f40ed84b26afa217e888657e6ae5200081b9b9d078facee404->leave($__internal_e7ea682fb738f3f40ed84b26afa217e888657e6ae5200081b9b9d078facee404_prof);

        
        $__internal_da6ce5b8fd44648452f8095965a0c15489737b865f7fd3776f3aee029cc74ee0->leave($__internal_da6ce5b8fd44648452f8095965a0c15489737b865f7fd3776f3aee029cc74ee0_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b98953724ec7504f8630657a441a1fecb88494e6a9cae7b017ffe79d66d8b8f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98953724ec7504f8630657a441a1fecb88494e6a9cae7b017ffe79d66d8b8f2->enter($__internal_b98953724ec7504f8630657a441a1fecb88494e6a9cae7b017ffe79d66d8b8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f1e6df0138b18ffa80661912e7e68e8e80af266dabd6ff061f08d4cbe7500360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e6df0138b18ffa80661912e7e68e8e80af266dabd6ff061f08d4cbe7500360->enter($__internal_f1e6df0138b18ffa80661912e7e68e8e80af266dabd6ff061f08d4cbe7500360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f1e6df0138b18ffa80661912e7e68e8e80af266dabd6ff061f08d4cbe7500360->leave($__internal_f1e6df0138b18ffa80661912e7e68e8e80af266dabd6ff061f08d4cbe7500360_prof);

        
        $__internal_b98953724ec7504f8630657a441a1fecb88494e6a9cae7b017ffe79d66d8b8f2->leave($__internal_b98953724ec7504f8630657a441a1fecb88494e6a9cae7b017ffe79d66d8b8f2_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e06a8ce36619554b2ffcdb16a44dc6b43f090f5036672b337f2fcd775b040f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06a8ce36619554b2ffcdb16a44dc6b43f090f5036672b337f2fcd775b040f07->enter($__internal_e06a8ce36619554b2ffcdb16a44dc6b43f090f5036672b337f2fcd775b040f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9e7e03b0b80662246e63033cf27088fb52fbb88e55d01ccea5d6ca31dc01839b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7e03b0b80662246e63033cf27088fb52fbb88e55d01ccea5d6ca31dc01839b->enter($__internal_9e7e03b0b80662246e63033cf27088fb52fbb88e55d01ccea5d6ca31dc01839b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    ";
        
        $__internal_9e7e03b0b80662246e63033cf27088fb52fbb88e55d01ccea5d6ca31dc01839b->leave($__internal_9e7e03b0b80662246e63033cf27088fb52fbb88e55d01ccea5d6ca31dc01839b_prof);

        
        $__internal_e06a8ce36619554b2ffcdb16a44dc6b43f090f5036672b337f2fcd775b040f07->leave($__internal_e06a8ce36619554b2ffcdb16a44dc6b43f090f5036672b337f2fcd775b040f07_prof);

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
