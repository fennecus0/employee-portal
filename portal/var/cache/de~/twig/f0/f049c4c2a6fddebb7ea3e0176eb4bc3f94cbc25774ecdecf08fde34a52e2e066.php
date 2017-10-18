<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_30a6cdac11b1ff5e6c5edd182e15078dcaa981aa1667f1b7cf1b67de5db0c203 extends Twig_Template
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
        $__internal_d6defee4e0ca755cd596898d47fc915ac50ef2ab6f325c5089bfcca705746df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6defee4e0ca755cd596898d47fc915ac50ef2ab6f325c5089bfcca705746df9->enter($__internal_d6defee4e0ca755cd596898d47fc915ac50ef2ab6f325c5089bfcca705746df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_9dff0f46dd66f7f1275b5bc017597b3d6f896db99b4e7b3d7bc89cf7c19189a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dff0f46dd66f7f1275b5bc017597b3d6f896db99b4e7b3d7bc89cf7c19189a2->enter($__internal_9dff0f46dd66f7f1275b5bc017597b3d6f896db99b4e7b3d7bc89cf7c19189a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d6defee4e0ca755cd596898d47fc915ac50ef2ab6f325c5089bfcca705746df9->leave($__internal_d6defee4e0ca755cd596898d47fc915ac50ef2ab6f325c5089bfcca705746df9_prof);

        
        $__internal_9dff0f46dd66f7f1275b5bc017597b3d6f896db99b4e7b3d7bc89cf7c19189a2->leave($__internal_9dff0f46dd66f7f1275b5bc017597b3d6f896db99b4e7b3d7bc89cf7c19189a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
