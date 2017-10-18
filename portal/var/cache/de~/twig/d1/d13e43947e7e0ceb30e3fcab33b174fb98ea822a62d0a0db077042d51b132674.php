<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ab5f3cf56b93a084c26ef6a7d5f55a1a28a2e4d409e5d0f543b96bab1222e559 extends Twig_Template
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
        $__internal_f9ed13546c5ba8cfe71ecd97d36667f3d99ccdc6b143777d77d133e7cae184b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ed13546c5ba8cfe71ecd97d36667f3d99ccdc6b143777d77d133e7cae184b2->enter($__internal_f9ed13546c5ba8cfe71ecd97d36667f3d99ccdc6b143777d77d133e7cae184b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_7f4525786badb6429c20a3f4a46a46a78138e4882148ab9ad06c9ec6d55dca12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4525786badb6429c20a3f4a46a46a78138e4882148ab9ad06c9ec6d55dca12->enter($__internal_7f4525786badb6429c20a3f4a46a46a78138e4882148ab9ad06c9ec6d55dca12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f9ed13546c5ba8cfe71ecd97d36667f3d99ccdc6b143777d77d133e7cae184b2->leave($__internal_f9ed13546c5ba8cfe71ecd97d36667f3d99ccdc6b143777d77d133e7cae184b2_prof);

        
        $__internal_7f4525786badb6429c20a3f4a46a46a78138e4882148ab9ad06c9ec6d55dca12->leave($__internal_7f4525786badb6429c20a3f4a46a46a78138e4882148ab9ad06c9ec6d55dca12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
