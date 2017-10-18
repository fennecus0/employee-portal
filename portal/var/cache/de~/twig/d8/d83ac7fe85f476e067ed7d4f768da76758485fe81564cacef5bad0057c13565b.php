<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_791afa38623faf50e8500ed13b8c45136fd07a659cc806683d565cc240ec9c78 extends Twig_Template
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
        $__internal_2a0a202c8d10cd23e5fc84de5909f9d23611812d6b7e495b310b0f7657958080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0a202c8d10cd23e5fc84de5909f9d23611812d6b7e495b310b0f7657958080->enter($__internal_2a0a202c8d10cd23e5fc84de5909f9d23611812d6b7e495b310b0f7657958080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_bf37f2b60276cc7a1de5707531fd8cd1c648a87b145864855652a5ebd6ab2cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf37f2b60276cc7a1de5707531fd8cd1c648a87b145864855652a5ebd6ab2cef->enter($__internal_bf37f2b60276cc7a1de5707531fd8cd1c648a87b145864855652a5ebd6ab2cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2a0a202c8d10cd23e5fc84de5909f9d23611812d6b7e495b310b0f7657958080->leave($__internal_2a0a202c8d10cd23e5fc84de5909f9d23611812d6b7e495b310b0f7657958080_prof);

        
        $__internal_bf37f2b60276cc7a1de5707531fd8cd1c648a87b145864855652a5ebd6ab2cef->leave($__internal_bf37f2b60276cc7a1de5707531fd8cd1c648a87b145864855652a5ebd6ab2cef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
