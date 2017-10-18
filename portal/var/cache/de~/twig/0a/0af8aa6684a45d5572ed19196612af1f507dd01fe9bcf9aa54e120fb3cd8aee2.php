<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0b23a6dbd020cb4be78bfaad7c47790e6ee602216b643130d255c400a2ad6ff5 extends Twig_Template
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
        $__internal_3cc6d020907019bd8ecda18364bd1f5e837f4c687fbb3099315091383dddd307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc6d020907019bd8ecda18364bd1f5e837f4c687fbb3099315091383dddd307->enter($__internal_3cc6d020907019bd8ecda18364bd1f5e837f4c687fbb3099315091383dddd307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_30f03952ee59e2adedaf72795ac352f2badf9391984b1187bd0dc1d63d5de469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f03952ee59e2adedaf72795ac352f2badf9391984b1187bd0dc1d63d5de469->enter($__internal_30f03952ee59e2adedaf72795ac352f2badf9391984b1187bd0dc1d63d5de469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3cc6d020907019bd8ecda18364bd1f5e837f4c687fbb3099315091383dddd307->leave($__internal_3cc6d020907019bd8ecda18364bd1f5e837f4c687fbb3099315091383dddd307_prof);

        
        $__internal_30f03952ee59e2adedaf72795ac352f2badf9391984b1187bd0dc1d63d5de469->leave($__internal_30f03952ee59e2adedaf72795ac352f2badf9391984b1187bd0dc1d63d5de469_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
