<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_e91486bcfccea02780061bb75b00a838cbfbbf14a52c2019e0e6fbe6a343cde7 extends Twig_Template
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
        $__internal_26e29e72de535bdef44ebc6266621756ea96ca301a2aaa890a829a8e0f8cfbae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e29e72de535bdef44ebc6266621756ea96ca301a2aaa890a829a8e0f8cfbae->enter($__internal_26e29e72de535bdef44ebc6266621756ea96ca301a2aaa890a829a8e0f8cfbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ba0f2b8bf6252a3dbb272d96aff870a0d2313bfe19ef25406dfd0dd547b9381d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0f2b8bf6252a3dbb272d96aff870a0d2313bfe19ef25406dfd0dd547b9381d->enter($__internal_ba0f2b8bf6252a3dbb272d96aff870a0d2313bfe19ef25406dfd0dd547b9381d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_26e29e72de535bdef44ebc6266621756ea96ca301a2aaa890a829a8e0f8cfbae->leave($__internal_26e29e72de535bdef44ebc6266621756ea96ca301a2aaa890a829a8e0f8cfbae_prof);

        
        $__internal_ba0f2b8bf6252a3dbb272d96aff870a0d2313bfe19ef25406dfd0dd547b9381d->leave($__internal_ba0f2b8bf6252a3dbb272d96aff870a0d2313bfe19ef25406dfd0dd547b9381d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
