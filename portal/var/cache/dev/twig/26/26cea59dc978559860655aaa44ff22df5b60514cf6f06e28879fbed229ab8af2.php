<?php

/* default/index.html.twig */
class __TwigTemplate_0d1b3b2fe4dd1223d45a4f4196cab39ec4d769cd26aef757d831f7b4563888bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main-empty.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'page_header' => array($this, 'block_page_header'),
            'page_center' => array($this, 'block_page_center'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main-empty.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_382c0daebaef4a958be2465e52f087824eb5e15bc41f5963247ac79cc9745df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382c0daebaef4a958be2465e52f087824eb5e15bc41f5963247ac79cc9745df3->enter($__internal_382c0daebaef4a958be2465e52f087824eb5e15bc41f5963247ac79cc9745df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382c0daebaef4a958be2465e52f087824eb5e15bc41f5963247ac79cc9745df3->leave($__internal_382c0daebaef4a958be2465e52f087824eb5e15bc41f5963247ac79cc9745df3_prof);

    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_618b63b1de50ba6619df69a90d529e45d0a4a911f940e2af184bdd24cadf3593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618b63b1de50ba6619df69a90d529e45d0a4a911f940e2af184bdd24cadf3593->enter($__internal_618b63b1de50ba6619df69a90d529e45d0a4a911f940e2af184bdd24cadf3593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo "Hallo ";
        echo twig_escape_filter($this->env, (isset($context["names"]) ? $context["names"] : null), "html", null, true);
        echo " ";
        
        $__internal_618b63b1de50ba6619df69a90d529e45d0a4a911f940e2af184bdd24cadf3593->leave($__internal_618b63b1de50ba6619df69a90d529e45d0a4a911f940e2af184bdd24cadf3593_prof);

    }

    // line 5
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_c305d0b294fdc550d8c3d6d2875f257d6666cbd01ee9b06c40e55f259998377a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c305d0b294fdc550d8c3d6d2875f257d6666cbd01ee9b06c40e55f259998377a->enter($__internal_c305d0b294fdc550d8c3d6d2875f257d6666cbd01ee9b06c40e55f259998377a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-image\">
                    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dform"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img1.jpg"), "html", null, true);
        echo "\">
                    </a>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title\">Dienstfahrt</span>
                </div>
                <div class=\"card-action\">
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dform"), "html", null, true);
        echo "\">Anmeldung</a>
                </div>
            </div>
        </div>

        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-image\">
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("history"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img2.jpg"), "html", null, true);
        echo "\">
                    </a>
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title\">Dienstfahrt Historie</span>
                </div>
                <div class=\"card-action\">
                    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("history"), "html", null, true);
        echo "\">Anschauen</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c305d0b294fdc550d8c3d6d2875f257d6666cbd01ee9b06c40e55f259998377a->leave($__internal_c305d0b294fdc550d8c3d6d2875f257d6666cbd01ee9b06c40e55f259998377a_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  90 => 27,  86 => 26,  75 => 18,  65 => 11,  61 => 10,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/var/www/html/portal/app/Resources/views/default/index.html.twig");
    }
}
