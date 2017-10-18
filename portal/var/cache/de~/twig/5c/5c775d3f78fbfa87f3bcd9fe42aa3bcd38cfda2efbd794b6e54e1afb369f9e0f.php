<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_833de277a74de20f6e99a034f7f6a6255cf0168325b84224927de89ea05f8e80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_9aca3c19a3c3a94e7aa0a62137f0c95c791c153164e692d43f60f1de653ca802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aca3c19a3c3a94e7aa0a62137f0c95c791c153164e692d43f60f1de653ca802->enter($__internal_9aca3c19a3c3a94e7aa0a62137f0c95c791c153164e692d43f60f1de653ca802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8d54831e7cacaaddd826c28eb046b12cff39993f8d411baa7a4a0177786755ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d54831e7cacaaddd826c28eb046b12cff39993f8d411baa7a4a0177786755ae->enter($__internal_8d54831e7cacaaddd826c28eb046b12cff39993f8d411baa7a4a0177786755ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aca3c19a3c3a94e7aa0a62137f0c95c791c153164e692d43f60f1de653ca802->leave($__internal_9aca3c19a3c3a94e7aa0a62137f0c95c791c153164e692d43f60f1de653ca802_prof);

        
        $__internal_8d54831e7cacaaddd826c28eb046b12cff39993f8d411baa7a4a0177786755ae->leave($__internal_8d54831e7cacaaddd826c28eb046b12cff39993f8d411baa7a4a0177786755ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76f8da14373e5bc0231dfd62f1a9d7c7e9769e66ef23f8584bcfaa97d0c1d272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f8da14373e5bc0231dfd62f1a9d7c7e9769e66ef23f8584bcfaa97d0c1d272->enter($__internal_76f8da14373e5bc0231dfd62f1a9d7c7e9769e66ef23f8584bcfaa97d0c1d272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a6c21c7d26b71567c41e4c1fb60ccbeff4dc1fd994237f610887144443c08983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c21c7d26b71567c41e4c1fb60ccbeff4dc1fd994237f610887144443c08983->enter($__internal_a6c21c7d26b71567c41e4c1fb60ccbeff4dc1fd994237f610887144443c08983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a6c21c7d26b71567c41e4c1fb60ccbeff4dc1fd994237f610887144443c08983->leave($__internal_a6c21c7d26b71567c41e4c1fb60ccbeff4dc1fd994237f610887144443c08983_prof);

        
        $__internal_76f8da14373e5bc0231dfd62f1a9d7c7e9769e66ef23f8584bcfaa97d0c1d272->leave($__internal_76f8da14373e5bc0231dfd62f1a9d7c7e9769e66ef23f8584bcfaa97d0c1d272_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c214f5f0c0bec9583ac90f74ab73ead199111e37eac82b41d365365a7146cc02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c214f5f0c0bec9583ac90f74ab73ead199111e37eac82b41d365365a7146cc02->enter($__internal_c214f5f0c0bec9583ac90f74ab73ead199111e37eac82b41d365365a7146cc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1bf7ba7f8cf1a9538dec09fc755de577a1d38773ce9a128193d530ef6a6b4af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf7ba7f8cf1a9538dec09fc755de577a1d38773ce9a128193d530ef6a6b4af0->enter($__internal_1bf7ba7f8cf1a9538dec09fc755de577a1d38773ce9a128193d530ef6a6b4af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1bf7ba7f8cf1a9538dec09fc755de577a1d38773ce9a128193d530ef6a6b4af0->leave($__internal_1bf7ba7f8cf1a9538dec09fc755de577a1d38773ce9a128193d530ef6a6b4af0_prof);

        
        $__internal_c214f5f0c0bec9583ac90f74ab73ead199111e37eac82b41d365365a7146cc02->leave($__internal_c214f5f0c0bec9583ac90f74ab73ead199111e37eac82b41d365365a7146cc02_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f40ad56d0d16a019ac3fe87d5bc18c100b3b1e138b30fe1f2831f6007234560b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40ad56d0d16a019ac3fe87d5bc18c100b3b1e138b30fe1f2831f6007234560b->enter($__internal_f40ad56d0d16a019ac3fe87d5bc18c100b3b1e138b30fe1f2831f6007234560b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df411b69aa08534de644bed5944c9ce351a59ac368bf60c950bfcbd2df4f18c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df411b69aa08534de644bed5944c9ce351a59ac368bf60c950bfcbd2df4f18c7->enter($__internal_df411b69aa08534de644bed5944c9ce351a59ac368bf60c950bfcbd2df4f18c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_df411b69aa08534de644bed5944c9ce351a59ac368bf60c950bfcbd2df4f18c7->leave($__internal_df411b69aa08534de644bed5944c9ce351a59ac368bf60c950bfcbd2df4f18c7_prof);

        
        $__internal_f40ad56d0d16a019ac3fe87d5bc18c100b3b1e138b30fe1f2831f6007234560b->leave($__internal_f40ad56d0d16a019ac3fe87d5bc18c100b3b1e138b30fe1f2831f6007234560b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
