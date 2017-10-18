<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_310d6c380d1fe728050281400958572b262c341929a5c4578f554bf8880413ca extends Twig_Template
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
        $__internal_3805b410f78dd45d08e05d4d29b4eccbc6f63359cf9338a04e3eaebef72a4b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3805b410f78dd45d08e05d4d29b4eccbc6f63359cf9338a04e3eaebef72a4b61->enter($__internal_3805b410f78dd45d08e05d4d29b4eccbc6f63359cf9338a04e3eaebef72a4b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_6f2ec8caa15b6ea37dd9fdeab5e02733f88bfda008e2f9e38aac863dbed88361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2ec8caa15b6ea37dd9fdeab5e02733f88bfda008e2f9e38aac863dbed88361->enter($__internal_6f2ec8caa15b6ea37dd9fdeab5e02733f88bfda008e2f9e38aac863dbed88361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_3805b410f78dd45d08e05d4d29b4eccbc6f63359cf9338a04e3eaebef72a4b61->leave($__internal_3805b410f78dd45d08e05d4d29b4eccbc6f63359cf9338a04e3eaebef72a4b61_prof);

        
        $__internal_6f2ec8caa15b6ea37dd9fdeab5e02733f88bfda008e2f9e38aac863dbed88361->leave($__internal_6f2ec8caa15b6ea37dd9fdeab5e02733f88bfda008e2f9e38aac863dbed88361_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
