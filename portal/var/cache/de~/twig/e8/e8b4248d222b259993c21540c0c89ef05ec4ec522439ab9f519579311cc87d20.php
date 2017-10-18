<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9270686d9079e6bdaf70e60189c98eb59e11ec8c97a10180bf1ece232933cbcd extends Twig_Template
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
        $__internal_68d26c63fb404ddb1c8430c7a960d0a36052d56d13186295aaf4d3cd28c54143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d26c63fb404ddb1c8430c7a960d0a36052d56d13186295aaf4d3cd28c54143->enter($__internal_68d26c63fb404ddb1c8430c7a960d0a36052d56d13186295aaf4d3cd28c54143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2a9941038f635d011702b687ef100e9faa86b8f1cac20550533e7c884a7ef93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9941038f635d011702b687ef100e9faa86b8f1cac20550533e7c884a7ef93e->enter($__internal_2a9941038f635d011702b687ef100e9faa86b8f1cac20550533e7c884a7ef93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_68d26c63fb404ddb1c8430c7a960d0a36052d56d13186295aaf4d3cd28c54143->leave($__internal_68d26c63fb404ddb1c8430c7a960d0a36052d56d13186295aaf4d3cd28c54143_prof);

        
        $__internal_2a9941038f635d011702b687ef100e9faa86b8f1cac20550533e7c884a7ef93e->leave($__internal_2a9941038f635d011702b687ef100e9faa86b8f1cac20550533e7c884a7ef93e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
