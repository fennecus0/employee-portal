<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ee4f35ddf6a4d5793eaf0bd2e03e3b843cc5e4338b5c797069826517628e84c9 extends Twig_Template
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
        $__internal_f174b253a39f6aea7bcb4b29bc62eaf18a05818c16bbd548dc8a262cc0a86e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f174b253a39f6aea7bcb4b29bc62eaf18a05818c16bbd548dc8a262cc0a86e4a->enter($__internal_f174b253a39f6aea7bcb4b29bc62eaf18a05818c16bbd548dc8a262cc0a86e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_02c66ca3a38c2e06315a25ce4f655a933a391199602a8f8a341cd5d6b5c86ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c66ca3a38c2e06315a25ce4f655a933a391199602a8f8a341cd5d6b5c86ad0->enter($__internal_02c66ca3a38c2e06315a25ce4f655a933a391199602a8f8a341cd5d6b5c86ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f174b253a39f6aea7bcb4b29bc62eaf18a05818c16bbd548dc8a262cc0a86e4a->leave($__internal_f174b253a39f6aea7bcb4b29bc62eaf18a05818c16bbd548dc8a262cc0a86e4a_prof);

        
        $__internal_02c66ca3a38c2e06315a25ce4f655a933a391199602a8f8a341cd5d6b5c86ad0->leave($__internal_02c66ca3a38c2e06315a25ce4f655a933a391199602a8f8a341cd5d6b5c86ad0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
