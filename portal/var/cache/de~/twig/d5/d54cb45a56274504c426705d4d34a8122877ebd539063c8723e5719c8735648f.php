<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a2327af94b1df8b0173742588c78864c09f3b9818d0315fe21a421d032b0ff63 extends Twig_Template
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
        $__internal_a1b8f7f32615d3be24a7a001bbc2419abaa6e3b151c869840f9deedf8d1cdf6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b8f7f32615d3be24a7a001bbc2419abaa6e3b151c869840f9deedf8d1cdf6f->enter($__internal_a1b8f7f32615d3be24a7a001bbc2419abaa6e3b151c869840f9deedf8d1cdf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_982860425cb25421cab16eb8ccec39a265416588ae9d718bb55c4fcaa9043754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982860425cb25421cab16eb8ccec39a265416588ae9d718bb55c4fcaa9043754->enter($__internal_982860425cb25421cab16eb8ccec39a265416588ae9d718bb55c4fcaa9043754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a1b8f7f32615d3be24a7a001bbc2419abaa6e3b151c869840f9deedf8d1cdf6f->leave($__internal_a1b8f7f32615d3be24a7a001bbc2419abaa6e3b151c869840f9deedf8d1cdf6f_prof);

        
        $__internal_982860425cb25421cab16eb8ccec39a265416588ae9d718bb55c4fcaa9043754->leave($__internal_982860425cb25421cab16eb8ccec39a265416588ae9d718bb55c4fcaa9043754_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
