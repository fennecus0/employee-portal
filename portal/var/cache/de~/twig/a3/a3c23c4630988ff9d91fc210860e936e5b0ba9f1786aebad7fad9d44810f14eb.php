<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4b3c42b5a8d2dfedd6e5eeb12b35685c7f7697b20e240a0868d9e13ce7754cca extends Twig_Template
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
        $__internal_565ab42dcb9c2ae71171cb412165525e7b3a521307778105c9867ba36f9956c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_565ab42dcb9c2ae71171cb412165525e7b3a521307778105c9867ba36f9956c7->enter($__internal_565ab42dcb9c2ae71171cb412165525e7b3a521307778105c9867ba36f9956c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a6f08f895afc658a2c35a393a0dfddde8d6e808ff5b0456c5e0efac7adb770ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f08f895afc658a2c35a393a0dfddde8d6e808ff5b0456c5e0efac7adb770ef->enter($__internal_a6f08f895afc658a2c35a393a0dfddde8d6e808ff5b0456c5e0efac7adb770ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_565ab42dcb9c2ae71171cb412165525e7b3a521307778105c9867ba36f9956c7->leave($__internal_565ab42dcb9c2ae71171cb412165525e7b3a521307778105c9867ba36f9956c7_prof);

        
        $__internal_a6f08f895afc658a2c35a393a0dfddde8d6e808ff5b0456c5e0efac7adb770ef->leave($__internal_a6f08f895afc658a2c35a393a0dfddde8d6e808ff5b0456c5e0efac7adb770ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
