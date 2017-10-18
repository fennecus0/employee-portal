<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a6d566503deaa0b971fe28bb1474cc7ef3ced513c602fe439eb4d03d2111bf3f extends Twig_Template
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
        $__internal_cd2f4eb50c26349de3c87cdaeaffd2ee3fde0259939786aa2ca83372533f4767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2f4eb50c26349de3c87cdaeaffd2ee3fde0259939786aa2ca83372533f4767->enter($__internal_cd2f4eb50c26349de3c87cdaeaffd2ee3fde0259939786aa2ca83372533f4767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e193c29348df743ba90f7a744a7c5d8f0f7e25510bdb19c7909799e26e6a7df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e193c29348df743ba90f7a744a7c5d8f0f7e25510bdb19c7909799e26e6a7df9->enter($__internal_e193c29348df743ba90f7a744a7c5d8f0f7e25510bdb19c7909799e26e6a7df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_cd2f4eb50c26349de3c87cdaeaffd2ee3fde0259939786aa2ca83372533f4767->leave($__internal_cd2f4eb50c26349de3c87cdaeaffd2ee3fde0259939786aa2ca83372533f4767_prof);

        
        $__internal_e193c29348df743ba90f7a744a7c5d8f0f7e25510bdb19c7909799e26e6a7df9->leave($__internal_e193c29348df743ba90f7a744a7c5d8f0f7e25510bdb19c7909799e26e6a7df9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
