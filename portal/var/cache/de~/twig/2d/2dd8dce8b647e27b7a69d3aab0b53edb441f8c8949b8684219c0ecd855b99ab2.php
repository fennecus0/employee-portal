<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_fb87ba1df5712ecde42cd04d7a232e80d08524c0f2f58172a50671e710964f5a extends Twig_Template
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
        $__internal_02c179d105782e118264e6c0130bddadc339727073dc08d30558394caa16bb1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c179d105782e118264e6c0130bddadc339727073dc08d30558394caa16bb1a->enter($__internal_02c179d105782e118264e6c0130bddadc339727073dc08d30558394caa16bb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_664be0a9f8d7e984890cfead20cb9472d139383e40c81222828d8c3301aa5a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664be0a9f8d7e984890cfead20cb9472d139383e40c81222828d8c3301aa5a76->enter($__internal_664be0a9f8d7e984890cfead20cb9472d139383e40c81222828d8c3301aa5a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_02c179d105782e118264e6c0130bddadc339727073dc08d30558394caa16bb1a->leave($__internal_02c179d105782e118264e6c0130bddadc339727073dc08d30558394caa16bb1a_prof);

        
        $__internal_664be0a9f8d7e984890cfead20cb9472d139383e40c81222828d8c3301aa5a76->leave($__internal_664be0a9f8d7e984890cfead20cb9472d139383e40c81222828d8c3301aa5a76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
