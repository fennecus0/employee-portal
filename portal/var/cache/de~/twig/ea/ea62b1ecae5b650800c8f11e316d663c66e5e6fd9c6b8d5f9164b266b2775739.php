<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3b1568f8e374e673c96bab83b508fa3afd379f1eb15987cf37597b6f36263f51 extends Twig_Template
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
        $__internal_07c9fe2d91de2c257b73d916d31c334f234ba1ef213cac09e882bce324e8eb2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c9fe2d91de2c257b73d916d31c334f234ba1ef213cac09e882bce324e8eb2b->enter($__internal_07c9fe2d91de2c257b73d916d31c334f234ba1ef213cac09e882bce324e8eb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2887d41fbdac50edcbc96b3225c0400e626f403cbada7641e1b91ad9c812b2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2887d41fbdac50edcbc96b3225c0400e626f403cbada7641e1b91ad9c812b2d5->enter($__internal_2887d41fbdac50edcbc96b3225c0400e626f403cbada7641e1b91ad9c812b2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_07c9fe2d91de2c257b73d916d31c334f234ba1ef213cac09e882bce324e8eb2b->leave($__internal_07c9fe2d91de2c257b73d916d31c334f234ba1ef213cac09e882bce324e8eb2b_prof);

        
        $__internal_2887d41fbdac50edcbc96b3225c0400e626f403cbada7641e1b91ad9c812b2d5->leave($__internal_2887d41fbdac50edcbc96b3225c0400e626f403cbada7641e1b91ad9c812b2d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
