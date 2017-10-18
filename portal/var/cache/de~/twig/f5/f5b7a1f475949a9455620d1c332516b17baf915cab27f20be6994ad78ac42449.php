<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_540498de989de081db3e23b42734bf9fb8a0bc42f491376d604c39101eb0de77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9110c004631c026ff7438063a35ccca28bb1b34b302720960ead45e152001ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9110c004631c026ff7438063a35ccca28bb1b34b302720960ead45e152001ae->enter($__internal_a9110c004631c026ff7438063a35ccca28bb1b34b302720960ead45e152001ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_f2ccb562514e62fb96b382fd3a9968126d4c000ad3137fee7736cf93c82d00b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ccb562514e62fb96b382fd3a9968126d4c000ad3137fee7736cf93c82d00b2->enter($__internal_f2ccb562514e62fb96b382fd3a9968126d4c000ad3137fee7736cf93c82d00b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9110c004631c026ff7438063a35ccca28bb1b34b302720960ead45e152001ae->leave($__internal_a9110c004631c026ff7438063a35ccca28bb1b34b302720960ead45e152001ae_prof);

        
        $__internal_f2ccb562514e62fb96b382fd3a9968126d4c000ad3137fee7736cf93c82d00b2->leave($__internal_f2ccb562514e62fb96b382fd3a9968126d4c000ad3137fee7736cf93c82d00b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c0b7e8d08522533e8144630af90db61764c484c5119341ba0412247bc2d56e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b7e8d08522533e8144630af90db61764c484c5119341ba0412247bc2d56e82->enter($__internal_c0b7e8d08522533e8144630af90db61764c484c5119341ba0412247bc2d56e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d331c609fcfbf63a0548e975757317f0c4ad9bee5cef7266db918d91e1d3b24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d331c609fcfbf63a0548e975757317f0c4ad9bee5cef7266db918d91e1d3b24f->enter($__internal_d331c609fcfbf63a0548e975757317f0c4ad9bee5cef7266db918d91e1d3b24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d331c609fcfbf63a0548e975757317f0c4ad9bee5cef7266db918d91e1d3b24f->leave($__internal_d331c609fcfbf63a0548e975757317f0c4ad9bee5cef7266db918d91e1d3b24f_prof);

        
        $__internal_c0b7e8d08522533e8144630af90db61764c484c5119341ba0412247bc2d56e82->leave($__internal_c0b7e8d08522533e8144630af90db61764c484c5119341ba0412247bc2d56e82_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_002f11233feaab1b4c9bb1bdada8aa0ea302dd73543b328f73987428ef49f069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_002f11233feaab1b4c9bb1bdada8aa0ea302dd73543b328f73987428ef49f069->enter($__internal_002f11233feaab1b4c9bb1bdada8aa0ea302dd73543b328f73987428ef49f069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_18cb2b8ccf43452b3393ad8c064117b5288eda654fe25eb86a084b8bb4685b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cb2b8ccf43452b3393ad8c064117b5288eda654fe25eb86a084b8bb4685b49->enter($__internal_18cb2b8ccf43452b3393ad8c064117b5288eda654fe25eb86a084b8bb4685b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_18cb2b8ccf43452b3393ad8c064117b5288eda654fe25eb86a084b8bb4685b49->leave($__internal_18cb2b8ccf43452b3393ad8c064117b5288eda654fe25eb86a084b8bb4685b49_prof);

        
        $__internal_002f11233feaab1b4c9bb1bdada8aa0ea302dd73543b328f73987428ef49f069->leave($__internal_002f11233feaab1b4c9bb1bdada8aa0ea302dd73543b328f73987428ef49f069_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90ecf8039c56207e3b10bc0df6ffa85d53007c8170d0fbafcc2a02a2a87221e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ecf8039c56207e3b10bc0df6ffa85d53007c8170d0fbafcc2a02a2a87221e8->enter($__internal_90ecf8039c56207e3b10bc0df6ffa85d53007c8170d0fbafcc2a02a2a87221e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_54cc3ecef843ff85819714cde96dd7c5416ec1cc649b31294f7c37110928b569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cc3ecef843ff85819714cde96dd7c5416ec1cc649b31294f7c37110928b569->enter($__internal_54cc3ecef843ff85819714cde96dd7c5416ec1cc649b31294f7c37110928b569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_54cc3ecef843ff85819714cde96dd7c5416ec1cc649b31294f7c37110928b569->leave($__internal_54cc3ecef843ff85819714cde96dd7c5416ec1cc649b31294f7c37110928b569_prof);

        
        $__internal_90ecf8039c56207e3b10bc0df6ffa85d53007c8170d0fbafcc2a02a2a87221e8->leave($__internal_90ecf8039c56207e3b10bc0df6ffa85d53007c8170d0fbafcc2a02a2a87221e8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
