<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_304acf9d02dc552da024cd341e4d51c0d1021443e3e559d81604023883226191 extends Twig_Template
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
        $__internal_1f484d9bdebe36a5de18ca4d7afeb8d41e80a4a3e6af276775dd3279b4fa9692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f484d9bdebe36a5de18ca4d7afeb8d41e80a4a3e6af276775dd3279b4fa9692->enter($__internal_1f484d9bdebe36a5de18ca4d7afeb8d41e80a4a3e6af276775dd3279b4fa9692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b504642b68b1b6d37d3b1450e370b4607bba48499aa2a4af6e363166dcb2e5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b504642b68b1b6d37d3b1450e370b4607bba48499aa2a4af6e363166dcb2e5f3->enter($__internal_b504642b68b1b6d37d3b1450e370b4607bba48499aa2a4af6e363166dcb2e5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1f484d9bdebe36a5de18ca4d7afeb8d41e80a4a3e6af276775dd3279b4fa9692->leave($__internal_1f484d9bdebe36a5de18ca4d7afeb8d41e80a4a3e6af276775dd3279b4fa9692_prof);

        
        $__internal_b504642b68b1b6d37d3b1450e370b4607bba48499aa2a4af6e363166dcb2e5f3->leave($__internal_b504642b68b1b6d37d3b1450e370b4607bba48499aa2a4af6e363166dcb2e5f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
