<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_26410aad620ea948892e85608ebf6de5368a5c3f6ec8ea1b5fcce2f9ec15e576 extends Twig_Template
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
        $__internal_a05c96c33ced3d203b888980a3b7c1614f429dfbe6889c8fbc7cf0a1329ffbfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05c96c33ced3d203b888980a3b7c1614f429dfbe6889c8fbc7cf0a1329ffbfe->enter($__internal_a05c96c33ced3d203b888980a3b7c1614f429dfbe6889c8fbc7cf0a1329ffbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_489e21c599ada713d4f4563bd78c8342d44a317776cdc830f2edca0278db923e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489e21c599ada713d4f4563bd78c8342d44a317776cdc830f2edca0278db923e->enter($__internal_489e21c599ada713d4f4563bd78c8342d44a317776cdc830f2edca0278db923e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a05c96c33ced3d203b888980a3b7c1614f429dfbe6889c8fbc7cf0a1329ffbfe->leave($__internal_a05c96c33ced3d203b888980a3b7c1614f429dfbe6889c8fbc7cf0a1329ffbfe_prof);

        
        $__internal_489e21c599ada713d4f4563bd78c8342d44a317776cdc830f2edca0278db923e->leave($__internal_489e21c599ada713d4f4563bd78c8342d44a317776cdc830f2edca0278db923e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
