<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d16b77af71c8e48a194dc74e91dd3dd3390a2c45f0b1fd99848fee3a59e13ede extends Twig_Template
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
        $__internal_cb1090376208496caa05d28558b1883aeb27bab0707b0aa68fe793aa2df3ce79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1090376208496caa05d28558b1883aeb27bab0707b0aa68fe793aa2df3ce79->enter($__internal_cb1090376208496caa05d28558b1883aeb27bab0707b0aa68fe793aa2df3ce79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_0a0869a907956b5d03c00916708b3622a0da0c9fb202b8f608b3d08b5c159eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0869a907956b5d03c00916708b3622a0da0c9fb202b8f608b3d08b5c159eb9->enter($__internal_0a0869a907956b5d03c00916708b3622a0da0c9fb202b8f608b3d08b5c159eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cb1090376208496caa05d28558b1883aeb27bab0707b0aa68fe793aa2df3ce79->leave($__internal_cb1090376208496caa05d28558b1883aeb27bab0707b0aa68fe793aa2df3ce79_prof);

        
        $__internal_0a0869a907956b5d03c00916708b3622a0da0c9fb202b8f608b3d08b5c159eb9->leave($__internal_0a0869a907956b5d03c00916708b3622a0da0c9fb202b8f608b3d08b5c159eb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
