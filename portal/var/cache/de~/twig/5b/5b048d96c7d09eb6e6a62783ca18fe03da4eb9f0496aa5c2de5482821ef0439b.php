<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_f55a776b697381db94dd8945c06cad846dcda47c8deb0461f0ab719a81c66e48 extends Twig_Template
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
        $__internal_12672a5e11ddbe8484e708cf529e86678e7da3a07b2d9d9dc99d957cebab63e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12672a5e11ddbe8484e708cf529e86678e7da3a07b2d9d9dc99d957cebab63e6->enter($__internal_12672a5e11ddbe8484e708cf529e86678e7da3a07b2d9d9dc99d957cebab63e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        $__internal_018bde61c9fa4c0df0043b3f543884f0ee04cfadc9d7a29c77dccf948b25cc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018bde61c9fa4c0df0043b3f543884f0ee04cfadc9d7a29c77dccf948b25cc3c->enter($__internal_018bde61c9fa4c0df0043b3f543884f0ee04cfadc9d7a29c77dccf948b25cc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => ($context["group_name"] ?? $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_12672a5e11ddbe8484e708cf529e86678e7da3a07b2d9d9dc99d957cebab63e6->leave($__internal_12672a5e11ddbe8484e708cf529e86678e7da3a07b2d9d9dc99d957cebab63e6_prof);

        
        $__internal_018bde61c9fa4c0df0043b3f543884f0ee04cfadc9d7a29c77dccf948b25cc3c->leave($__internal_018bde61c9fa4c0df0043b3f543884f0ee04cfadc9d7a29c77dccf948b25cc3c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:edit_content.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/Group/edit_content.html.twig");
    }
}
