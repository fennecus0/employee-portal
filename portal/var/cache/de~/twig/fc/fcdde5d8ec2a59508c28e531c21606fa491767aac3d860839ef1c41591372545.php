<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_021b37f907bbbc7bbf2d2c915c832bc9f1037dab525c4040089db4459c4e3983 extends Twig_Template
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
        $__internal_a78b1b72cc4f1acfd9b12de4360433978809cbf32bb0d0dc6da31dad59b13b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78b1b72cc4f1acfd9b12de4360433978809cbf32bb0d0dc6da31dad59b13b86->enter($__internal_a78b1b72cc4f1acfd9b12de4360433978809cbf32bb0d0dc6da31dad59b13b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2def6d3acba12ea6fb1166f04c42d680df3b7237c50acb3fb516a7071a2bda77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2def6d3acba12ea6fb1166f04c42d680df3b7237c50acb3fb516a7071a2bda77->enter($__internal_2def6d3acba12ea6fb1166f04c42d680df3b7237c50acb3fb516a7071a2bda77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a78b1b72cc4f1acfd9b12de4360433978809cbf32bb0d0dc6da31dad59b13b86->leave($__internal_a78b1b72cc4f1acfd9b12de4360433978809cbf32bb0d0dc6da31dad59b13b86_prof);

        
        $__internal_2def6d3acba12ea6fb1166f04c42d680df3b7237c50acb3fb516a7071a2bda77->leave($__internal_2def6d3acba12ea6fb1166f04c42d680df3b7237c50acb3fb516a7071a2bda77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
