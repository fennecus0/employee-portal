<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_fb2f6d8bdee4bd1118ad7db8f9699225afd0ac55b475c7c82a4546dcef37e124 extends Twig_Template
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
        $__internal_761e5a035cff6164226881b0bd86acdca9e004d9887bb6f2796dfe5c2bef0914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761e5a035cff6164226881b0bd86acdca9e004d9887bb6f2796dfe5c2bef0914->enter($__internal_761e5a035cff6164226881b0bd86acdca9e004d9887bb6f2796dfe5c2bef0914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_595452c89513ec19ececa3cbd8a1fad06c8e5092f08fa316954f1ebbfa766c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595452c89513ec19ececa3cbd8a1fad06c8e5092f08fa316954f1ebbfa766c40->enter($__internal_595452c89513ec19ececa3cbd8a1fad06c8e5092f08fa316954f1ebbfa766c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_761e5a035cff6164226881b0bd86acdca9e004d9887bb6f2796dfe5c2bef0914->leave($__internal_761e5a035cff6164226881b0bd86acdca9e004d9887bb6f2796dfe5c2bef0914_prof);

        
        $__internal_595452c89513ec19ececa3cbd8a1fad06c8e5092f08fa316954f1ebbfa766c40->leave($__internal_595452c89513ec19ececa3cbd8a1fad06c8e5092f08fa316954f1ebbfa766c40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
