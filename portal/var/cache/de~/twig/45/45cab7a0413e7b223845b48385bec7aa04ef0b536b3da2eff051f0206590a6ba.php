<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5a59be0563353ffd4684c042921b239382bf4e87a00fbf466ed69e33a1f0f79f extends Twig_Template
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
        $__internal_560e81668cf45de4499ff1acbbe4e29c4ccd6b137030f870248ba604def8861a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560e81668cf45de4499ff1acbbe4e29c4ccd6b137030f870248ba604def8861a->enter($__internal_560e81668cf45de4499ff1acbbe4e29c4ccd6b137030f870248ba604def8861a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_aac235c7f9c1cc96fc4351b6862bd99f47b9f2829313d0de5e295ec8f704ccf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac235c7f9c1cc96fc4351b6862bd99f47b9f2829313d0de5e295ec8f704ccf8->enter($__internal_aac235c7f9c1cc96fc4351b6862bd99f47b9f2829313d0de5e295ec8f704ccf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_560e81668cf45de4499ff1acbbe4e29c4ccd6b137030f870248ba604def8861a->leave($__internal_560e81668cf45de4499ff1acbbe4e29c4ccd6b137030f870248ba604def8861a_prof);

        
        $__internal_aac235c7f9c1cc96fc4351b6862bd99f47b9f2829313d0de5e295ec8f704ccf8->leave($__internal_aac235c7f9c1cc96fc4351b6862bd99f47b9f2829313d0de5e295ec8f704ccf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
