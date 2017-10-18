<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a9bc51bc5eb2202774df6178cda3db19daca76dc2f4afa56f947b5ac6d5d7303 extends Twig_Template
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
        $__internal_f7e5dc66dd7a02db98cf8f23158d457b2bf343c1816558f7c92a77093214581a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e5dc66dd7a02db98cf8f23158d457b2bf343c1816558f7c92a77093214581a->enter($__internal_f7e5dc66dd7a02db98cf8f23158d457b2bf343c1816558f7c92a77093214581a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_1b22bb42845569130c0c1d7b322de54954066d11d0732dae4c7e36f4ff01653d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b22bb42845569130c0c1d7b322de54954066d11d0732dae4c7e36f4ff01653d->enter($__internal_1b22bb42845569130c0c1d7b322de54954066d11d0732dae4c7e36f4ff01653d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f7e5dc66dd7a02db98cf8f23158d457b2bf343c1816558f7c92a77093214581a->leave($__internal_f7e5dc66dd7a02db98cf8f23158d457b2bf343c1816558f7c92a77093214581a_prof);

        
        $__internal_1b22bb42845569130c0c1d7b322de54954066d11d0732dae4c7e36f4ff01653d->leave($__internal_1b22bb42845569130c0c1d7b322de54954066d11d0732dae4c7e36f4ff01653d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
