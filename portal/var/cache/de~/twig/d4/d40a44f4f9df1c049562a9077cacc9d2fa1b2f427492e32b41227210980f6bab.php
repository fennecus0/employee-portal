<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a0eabbf08d2ed1ed2aa3e0d8c923e3e15ed475eef7c635487618f9e55e2994dd extends Twig_Template
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
        $__internal_1932af15d35b58c7202a1aba1f63b7757cac85ffaeda3074a049d88a6f375087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1932af15d35b58c7202a1aba1f63b7757cac85ffaeda3074a049d88a6f375087->enter($__internal_1932af15d35b58c7202a1aba1f63b7757cac85ffaeda3074a049d88a6f375087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_fc992fdfe5d4344fc1f9c574ebf463100fb03aac240de4bae94cd557504df612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc992fdfe5d4344fc1f9c574ebf463100fb03aac240de4bae94cd557504df612->enter($__internal_fc992fdfe5d4344fc1f9c574ebf463100fb03aac240de4bae94cd557504df612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1932af15d35b58c7202a1aba1f63b7757cac85ffaeda3074a049d88a6f375087->leave($__internal_1932af15d35b58c7202a1aba1f63b7757cac85ffaeda3074a049d88a6f375087_prof);

        
        $__internal_fc992fdfe5d4344fc1f9c574ebf463100fb03aac240de4bae94cd557504df612->leave($__internal_fc992fdfe5d4344fc1f9c574ebf463100fb03aac240de4bae94cd557504df612_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
