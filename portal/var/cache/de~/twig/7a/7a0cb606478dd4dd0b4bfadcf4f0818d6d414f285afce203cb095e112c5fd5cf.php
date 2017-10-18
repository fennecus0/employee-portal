<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_7f0c2eefbe807edffda83588733470d616a9a5f4267f56c91b2f66cfb2e2c1dd extends Twig_Template
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
        $__internal_50b51161c5494da0d2129165331c816f7c20e2a34e0ff41007e6e89205b9a7b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b51161c5494da0d2129165331c816f7c20e2a34e0ff41007e6e89205b9a7b5->enter($__internal_50b51161c5494da0d2129165331c816f7c20e2a34e0ff41007e6e89205b9a7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_7a486491d97d325d1659de720efc9907c1b10ddc72173eb85c2e25c8394c40c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a486491d97d325d1659de720efc9907c1b10ddc72173eb85c2e25c8394c40c5->enter($__internal_7a486491d97d325d1659de720efc9907c1b10ddc72173eb85c2e25c8394c40c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<section id=\"homepage\">
    <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo\">

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("id" => "registerForm")));
        echo "

    <div class=\"form-group\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        <span class=\"highlight\"></span><span class=\"bar\"></span>
        <label>Email</label>
    </div>

    <div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        <span class=\"highlight\"></span><span class=\"bar\"></span>
        <label>Vorname</label>
    </div>

    <div class=\"form-group\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        <span class=\"highlight\"></span><span class=\"bar\"></span>
        <label>Nachname</label>
    </div>

    <div class=\"form-group\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        <span class=\"highlight\"></span><span class=\"bar\"></span>
        <label>Passwort eingeben</label>
    </div>

    <div class=\"form-group\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        <span class=\"highlight\"></span><span class=\"bar\"></span>
        <label>Passwort wiederholen</label>
    </div>

    <button type=\"submit\" class=\"button buttonBlue\">Registrieren
        <div class=\"ripples buttonRipples\"><span class=\"ripplesCircle\"></span></div>
    </button>
    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</section>
";
        
        $__internal_50b51161c5494da0d2129165331c816f7c20e2a34e0ff41007e6e89205b9a7b5->leave($__internal_50b51161c5494da0d2129165331c816f7c20e2a34e0ff41007e6e89205b9a7b5_prof);

        
        $__internal_7a486491d97d325d1659de720efc9907c1b10ddc72173eb85c2e25c8394c40c5->leave($__internal_7a486491d97d325d1659de720efc9907c1b10ddc72173eb85c2e25c8394c40c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 41,  76 => 33,  67 => 27,  58 => 21,  49 => 15,  40 => 9,  34 => 6,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<section id=\"homepage\">
    <img src=\"{{ asset('images/logo.png') }}\" alt=\"\" class=\"logo\">

    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'id': 'registerForm'}}) }}

    <div class=\"form-group\">
        {{ form_widget(form.email, { 'attr': { 'class': 'form-control' } }) }}
        <span class=\"highlight\"></span><span class=\"bar\"></span>
        <label>Email</label>
    </div>

    <div class=\"form-group\">
        {{ form_widget(form.firstname, { 'attr': { 'class': 'form-control' } }) }}
        <span class=\"highlight\"></span><span class=\"bar\"></span>
        <label>Vorname</label>
    </div>

    <div class=\"form-group\">
        {{ form_widget(form.lastname, { 'attr': { 'class': 'form-control' } }) }}
        <span class=\"highlight\"></span><span class=\"bar\"></span>
        <label>Nachname</label>
    </div>

    <div class=\"form-group\">
        {{ form_widget(form.plainPassword.first, { 'attr': { 'class': 'form-control' } }) }}
        <span class=\"highlight\"></span><span class=\"bar\"></span>
        <label>Passwort eingeben</label>
    </div>

    <div class=\"form-group\">
        {{ form_widget(form.plainPassword.second, { 'attr': { 'class': 'form-control' } }) }}
        <span class=\"highlight\"></span><span class=\"bar\"></span>
        <label>Passwort wiederholen</label>
    </div>

    <button type=\"submit\" class=\"button buttonBlue\">Registrieren
        <div class=\"ripples buttonRipples\"><span class=\"ripplesCircle\"></span></div>
    </button>
    {{ form_end(form) }}
</section>
", "FOSUserBundle:Registration:register_content.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
