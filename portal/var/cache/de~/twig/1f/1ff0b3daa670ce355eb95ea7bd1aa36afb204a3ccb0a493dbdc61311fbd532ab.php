<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d222541505548f112aba8b3caccaa9b8273fda3813692e8c378cf3990cc4950e extends Twig_Template
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
        $__internal_83f14f4d4147a22cfc964e157bbf0071d5f062670c8ca606625ae534239cdf7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f14f4d4147a22cfc964e157bbf0071d5f062670c8ca606625ae534239cdf7c->enter($__internal_83f14f4d4147a22cfc964e157bbf0071d5f062670c8ca606625ae534239cdf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4d705290268c2eca6464a38fdd6fe6726e380d9279ca74a9407a335059f04f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d705290268c2eca6464a38fdd6fe6726e380d9279ca74a9407a335059f04f72->enter($__internal_4d705290268c2eca6464a38fdd6fe6726e380d9279ca74a9407a335059f04f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_83f14f4d4147a22cfc964e157bbf0071d5f062670c8ca606625ae534239cdf7c->leave($__internal_83f14f4d4147a22cfc964e157bbf0071d5f062670c8ca606625ae534239cdf7c_prof);

        
        $__internal_4d705290268c2eca6464a38fdd6fe6726e380d9279ca74a9407a335059f04f72->leave($__internal_4d705290268c2eca6464a38fdd6fe6726e380d9279ca74a9407a335059f04f72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
