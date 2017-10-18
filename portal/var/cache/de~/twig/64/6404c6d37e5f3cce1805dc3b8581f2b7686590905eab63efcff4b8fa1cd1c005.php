<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2005e443b5377c64c5580ee6c25255f22484c962319c04993850122d345f59d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d5d9c1fa2a16bdad102406aca522d81cb25d7917bc4b51e910e3d1bf8b6ad64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d5d9c1fa2a16bdad102406aca522d81cb25d7917bc4b51e910e3d1bf8b6ad64->enter($__internal_1d5d9c1fa2a16bdad102406aca522d81cb25d7917bc4b51e910e3d1bf8b6ad64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_8309517c0eb8ce3018436f346c9de298f1227f372e92143981252f6298ca6f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8309517c0eb8ce3018436f346c9de298f1227f372e92143981252f6298ca6f01->enter($__internal_8309517c0eb8ce3018436f346c9de298f1227f372e92143981252f6298ca6f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d5d9c1fa2a16bdad102406aca522d81cb25d7917bc4b51e910e3d1bf8b6ad64->leave($__internal_1d5d9c1fa2a16bdad102406aca522d81cb25d7917bc4b51e910e3d1bf8b6ad64_prof);

        
        $__internal_8309517c0eb8ce3018436f346c9de298f1227f372e92143981252f6298ca6f01->leave($__internal_8309517c0eb8ce3018436f346c9de298f1227f372e92143981252f6298ca6f01_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6cc685c9865bcd6fe6e675553d904ad84ee39b5ee7419c45dc53bda81145e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6cc685c9865bcd6fe6e675553d904ad84ee39b5ee7419c45dc53bda81145e4c->enter($__internal_a6cc685c9865bcd6fe6e675553d904ad84ee39b5ee7419c45dc53bda81145e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_65ae0d03339cbff23ee135f84ecd6bc9216485a485920a883075715b494cd233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ae0d03339cbff23ee135f84ecd6bc9216485a485920a883075715b494cd233->enter($__internal_65ae0d03339cbff23ee135f84ecd6bc9216485a485920a883075715b494cd233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_65ae0d03339cbff23ee135f84ecd6bc9216485a485920a883075715b494cd233->leave($__internal_65ae0d03339cbff23ee135f84ecd6bc9216485a485920a883075715b494cd233_prof);

        
        $__internal_a6cc685c9865bcd6fe6e675553d904ad84ee39b5ee7419c45dc53bda81145e4c->leave($__internal_a6cc685c9865bcd6fe6e675553d904ad84ee39b5ee7419c45dc53bda81145e4c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3191216b8344cccc6ec0466b13120e952369e0b37ae80b8f4e0f96276aff0e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3191216b8344cccc6ec0466b13120e952369e0b37ae80b8f4e0f96276aff0e1->enter($__internal_a3191216b8344cccc6ec0466b13120e952369e0b37ae80b8f4e0f96276aff0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a8c7b65cbbd25603078c325fa527561f5a94c5c3f6d502d44f854bc2ba55bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8c7b65cbbd25603078c325fa527561f5a94c5c3f6d502d44f854bc2ba55bb9->enter($__internal_0a8c7b65cbbd25603078c325fa527561f5a94c5c3f6d502d44f854bc2ba55bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0a8c7b65cbbd25603078c325fa527561f5a94c5c3f6d502d44f854bc2ba55bb9->leave($__internal_0a8c7b65cbbd25603078c325fa527561f5a94c5c3f6d502d44f854bc2ba55bb9_prof);

        
        $__internal_a3191216b8344cccc6ec0466b13120e952369e0b37ae80b8f4e0f96276aff0e1->leave($__internal_a3191216b8344cccc6ec0466b13120e952369e0b37ae80b8f4e0f96276aff0e1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e61cf8d917ef39599a8892f0695e616d25636ee007eed23554208dd2e97ce5c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61cf8d917ef39599a8892f0695e616d25636ee007eed23554208dd2e97ce5c8->enter($__internal_e61cf8d917ef39599a8892f0695e616d25636ee007eed23554208dd2e97ce5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6cd7c0d402f350348924b8eade7b141fa27790495581c81b585f1ce9711d0025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd7c0d402f350348924b8eade7b141fa27790495581c81b585f1ce9711d0025->enter($__internal_6cd7c0d402f350348924b8eade7b141fa27790495581c81b585f1ce9711d0025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_6cd7c0d402f350348924b8eade7b141fa27790495581c81b585f1ce9711d0025->leave($__internal_6cd7c0d402f350348924b8eade7b141fa27790495581c81b585f1ce9711d0025_prof);

        
        $__internal_e61cf8d917ef39599a8892f0695e616d25636ee007eed23554208dd2e97ce5c8->leave($__internal_e61cf8d917ef39599a8892f0695e616d25636ee007eed23554208dd2e97ce5c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
