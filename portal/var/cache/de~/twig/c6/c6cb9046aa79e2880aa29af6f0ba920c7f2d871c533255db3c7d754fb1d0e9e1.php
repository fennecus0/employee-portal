<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_610d66c9dfb5406f942bfe3d26e2c3674c315af0712a44f37e0d96203a288e41 extends Twig_Template
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
        $__internal_fe66b4daa106a29306a40e49b5f0eda82d5ce4ca57939b08605a034377ae5fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe66b4daa106a29306a40e49b5f0eda82d5ce4ca57939b08605a034377ae5fe3->enter($__internal_fe66b4daa106a29306a40e49b5f0eda82d5ce4ca57939b08605a034377ae5fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_7e885f2c1f214a06e03738a2e4e8bd1a2c8a4005e1ade0594cc9fcb000082f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e885f2c1f214a06e03738a2e4e8bd1a2c8a4005e1ade0594cc9fcb000082f1f->enter($__internal_7e885f2c1f214a06e03738a2e4e8bd1a2c8a4005e1ade0594cc9fcb000082f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fe66b4daa106a29306a40e49b5f0eda82d5ce4ca57939b08605a034377ae5fe3->leave($__internal_fe66b4daa106a29306a40e49b5f0eda82d5ce4ca57939b08605a034377ae5fe3_prof);

        
        $__internal_7e885f2c1f214a06e03738a2e4e8bd1a2c8a4005e1ade0594cc9fcb000082f1f->leave($__internal_7e885f2c1f214a06e03738a2e4e8bd1a2c8a4005e1ade0594cc9fcb000082f1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
