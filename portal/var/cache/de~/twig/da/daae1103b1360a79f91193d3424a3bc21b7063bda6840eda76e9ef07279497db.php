<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a8788f6d341f015fd8261ebc50f09f304ed7af557f7f337639761266d5451162 extends Twig_Template
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
        $__internal_961267af7850a6d14b8dfd27e27c843235dfc3a05275f3ff7cc23cbd00196ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_961267af7850a6d14b8dfd27e27c843235dfc3a05275f3ff7cc23cbd00196ddd->enter($__internal_961267af7850a6d14b8dfd27e27c843235dfc3a05275f3ff7cc23cbd00196ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_162298dca24d38b17f3fd26ef7ab5374a85206e4013ef81206229d081ac841b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162298dca24d38b17f3fd26ef7ab5374a85206e4013ef81206229d081ac841b5->enter($__internal_162298dca24d38b17f3fd26ef7ab5374a85206e4013ef81206229d081ac841b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_961267af7850a6d14b8dfd27e27c843235dfc3a05275f3ff7cc23cbd00196ddd->leave($__internal_961267af7850a6d14b8dfd27e27c843235dfc3a05275f3ff7cc23cbd00196ddd_prof);

        
        $__internal_162298dca24d38b17f3fd26ef7ab5374a85206e4013ef81206229d081ac841b5->leave($__internal_162298dca24d38b17f3fd26ef7ab5374a85206e4013ef81206229d081ac841b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
