<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9feefd0e5f1d54609df5389e2b86fb9f2e0b93ccf48b6fd0834bdc9c7ccc82b1 extends Twig_Template
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
        $__internal_34a8355dac11f1b8d94173b770c99e9d486a83c060a18a2bfcfa1090cde14b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a8355dac11f1b8d94173b770c99e9d486a83c060a18a2bfcfa1090cde14b39->enter($__internal_34a8355dac11f1b8d94173b770c99e9d486a83c060a18a2bfcfa1090cde14b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_50df67c9ff97a5fd5121258320945c46a479e973c14dd544a1754dce213fb394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50df67c9ff97a5fd5121258320945c46a479e973c14dd544a1754dce213fb394->enter($__internal_50df67c9ff97a5fd5121258320945c46a479e973c14dd544a1754dce213fb394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_34a8355dac11f1b8d94173b770c99e9d486a83c060a18a2bfcfa1090cde14b39->leave($__internal_34a8355dac11f1b8d94173b770c99e9d486a83c060a18a2bfcfa1090cde14b39_prof);

        
        $__internal_50df67c9ff97a5fd5121258320945c46a479e973c14dd544a1754dce213fb394->leave($__internal_50df67c9ff97a5fd5121258320945c46a479e973c14dd544a1754dce213fb394_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
