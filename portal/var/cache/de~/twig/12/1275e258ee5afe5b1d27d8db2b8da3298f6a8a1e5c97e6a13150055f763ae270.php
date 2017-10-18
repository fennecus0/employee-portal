<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_005b61d7843e05a781f41803d997d39c9fe0447898d432abfd17e3b015e54e75 extends Twig_Template
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
        $__internal_b739a8122e7113f534eb9c9dd8474543968bb83d1e30071d95ada3c59ca9e3aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b739a8122e7113f534eb9c9dd8474543968bb83d1e30071d95ada3c59ca9e3aa->enter($__internal_b739a8122e7113f534eb9c9dd8474543968bb83d1e30071d95ada3c59ca9e3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c7889a6b96d0d10d58e045842a46b04bc7a7cd4d87a6eb44c621ec25f4e91069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7889a6b96d0d10d58e045842a46b04bc7a7cd4d87a6eb44c621ec25f4e91069->enter($__internal_c7889a6b96d0d10d58e045842a46b04bc7a7cd4d87a6eb44c621ec25f4e91069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b739a8122e7113f534eb9c9dd8474543968bb83d1e30071d95ada3c59ca9e3aa->leave($__internal_b739a8122e7113f534eb9c9dd8474543968bb83d1e30071d95ada3c59ca9e3aa_prof);

        
        $__internal_c7889a6b96d0d10d58e045842a46b04bc7a7cd4d87a6eb44c621ec25f4e91069->leave($__internal_c7889a6b96d0d10d58e045842a46b04bc7a7cd4d87a6eb44c621ec25f4e91069_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
