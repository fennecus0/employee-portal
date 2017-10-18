<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bae5fdefc0880133f5b0fea3187e86134c3024b6527560b0ee7f7cd0a783802e extends Twig_Template
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
        $__internal_1bc789a2a56e134278fc9cd37c4874587e996b9a74ecc59ed82bbe5265f5db99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc789a2a56e134278fc9cd37c4874587e996b9a74ecc59ed82bbe5265f5db99->enter($__internal_1bc789a2a56e134278fc9cd37c4874587e996b9a74ecc59ed82bbe5265f5db99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d6387daba0c7b420734fa94126a1d8f33cf77cd854a73255895452af34d2a085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6387daba0c7b420734fa94126a1d8f33cf77cd854a73255895452af34d2a085->enter($__internal_d6387daba0c7b420734fa94126a1d8f33cf77cd854a73255895452af34d2a085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1bc789a2a56e134278fc9cd37c4874587e996b9a74ecc59ed82bbe5265f5db99->leave($__internal_1bc789a2a56e134278fc9cd37c4874587e996b9a74ecc59ed82bbe5265f5db99_prof);

        
        $__internal_d6387daba0c7b420734fa94126a1d8f33cf77cd854a73255895452af34d2a085->leave($__internal_d6387daba0c7b420734fa94126a1d8f33cf77cd854a73255895452af34d2a085_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
