<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fec01b4a272337660101ae8dc4fbb30a6b0cd08d2a29e0f76afcb2e443d6d3ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3a86297e884a89ad3496b36b70b98ccb67c8a04a5950f19fc132fefb5fe0378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a86297e884a89ad3496b36b70b98ccb67c8a04a5950f19fc132fefb5fe0378->enter($__internal_e3a86297e884a89ad3496b36b70b98ccb67c8a04a5950f19fc132fefb5fe0378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f81f7b6aaffd385551481e81ae123625acc9bd812af1d163ceaf6b15c4dcf718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81f7b6aaffd385551481e81ae123625acc9bd812af1d163ceaf6b15c4dcf718->enter($__internal_f81f7b6aaffd385551481e81ae123625acc9bd812af1d163ceaf6b15c4dcf718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e3a86297e884a89ad3496b36b70b98ccb67c8a04a5950f19fc132fefb5fe0378->leave($__internal_e3a86297e884a89ad3496b36b70b98ccb67c8a04a5950f19fc132fefb5fe0378_prof);

        
        $__internal_f81f7b6aaffd385551481e81ae123625acc9bd812af1d163ceaf6b15c4dcf718->leave($__internal_f81f7b6aaffd385551481e81ae123625acc9bd812af1d163ceaf6b15c4dcf718_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0149b25ff21c5a4629d9ae9ab11e227c1971d180ad2474e7916642955ae653d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0149b25ff21c5a4629d9ae9ab11e227c1971d180ad2474e7916642955ae653d1->enter($__internal_0149b25ff21c5a4629d9ae9ab11e227c1971d180ad2474e7916642955ae653d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b1e94fe7c55d65513bc663075b21b3426e1b82009c721f376504593eb46c148e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e94fe7c55d65513bc663075b21b3426e1b82009c721f376504593eb46c148e->enter($__internal_b1e94fe7c55d65513bc663075b21b3426e1b82009c721f376504593eb46c148e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b1e94fe7c55d65513bc663075b21b3426e1b82009c721f376504593eb46c148e->leave($__internal_b1e94fe7c55d65513bc663075b21b3426e1b82009c721f376504593eb46c148e_prof);

        
        $__internal_0149b25ff21c5a4629d9ae9ab11e227c1971d180ad2474e7916642955ae653d1->leave($__internal_0149b25ff21c5a4629d9ae9ab11e227c1971d180ad2474e7916642955ae653d1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/portal/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
