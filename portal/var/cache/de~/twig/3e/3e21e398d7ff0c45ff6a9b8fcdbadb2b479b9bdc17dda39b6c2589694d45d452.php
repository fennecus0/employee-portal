<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_0562b943e503234b7274dafe310a656db976f8bd1fa556029b95da4d4c4ff295 extends Twig_Template
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
        $__internal_7e5858d7955a019aa9083ca53bc896b68f8f1e8d1a5df6e3bd8ab38bfe02f07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5858d7955a019aa9083ca53bc896b68f8f1e8d1a5df6e3bd8ab38bfe02f07d->enter($__internal_7e5858d7955a019aa9083ca53bc896b68f8f1e8d1a5df6e3bd8ab38bfe02f07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_8088f128689b1c2a05f5173299cee07d110c2a4aa266906d6659c2e0d6f7cedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8088f128689b1c2a05f5173299cee07d110c2a4aa266906d6659c2e0d6f7cedc->enter($__internal_8088f128689b1c2a05f5173299cee07d110c2a4aa266906d6659c2e0d6f7cedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_7e5858d7955a019aa9083ca53bc896b68f8f1e8d1a5df6e3bd8ab38bfe02f07d->leave($__internal_7e5858d7955a019aa9083ca53bc896b68f8f1e8d1a5df6e3bd8ab38bfe02f07d_prof);

        
        $__internal_8088f128689b1c2a05f5173299cee07d110c2a4aa266906d6659c2e0d6f7cedc->leave($__internal_8088f128689b1c2a05f5173299cee07d110c2a4aa266906d6659c2e0d6f7cedc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Profile:edit_content.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
