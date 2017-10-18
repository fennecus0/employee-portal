<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1fab4228b00d788d0d8956d6cb4aa76dedf5db7097eb92d4c6630baf857ecdfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c1697d156ee37329680752cf1cafbcc9785a8f89114e4b3a1b4df3081772bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c1697d156ee37329680752cf1cafbcc9785a8f89114e4b3a1b4df3081772bc2->enter($__internal_0c1697d156ee37329680752cf1cafbcc9785a8f89114e4b3a1b4df3081772bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c1697d156ee37329680752cf1cafbcc9785a8f89114e4b3a1b4df3081772bc2->leave($__internal_0c1697d156ee37329680752cf1cafbcc9785a8f89114e4b3a1b4df3081772bc2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8e0cab5e135dad4aba107148a905b1573aa7353dffd7301663a24406c12dc5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0cab5e135dad4aba107148a905b1573aa7353dffd7301663a24406c12dc5e7->enter($__internal_8e0cab5e135dad4aba107148a905b1573aa7353dffd7301663a24406c12dc5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_8e0cab5e135dad4aba107148a905b1573aa7353dffd7301663a24406c12dc5e7->leave($__internal_8e0cab5e135dad4aba107148a905b1573aa7353dffd7301663a24406c12dc5e7_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b663baa380fc33b009efb9572dee8e07974e2b65c8330eca4fb9b63d1f65317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b663baa380fc33b009efb9572dee8e07974e2b65c8330eca4fb9b63d1f65317->enter($__internal_1b663baa380fc33b009efb9572dee8e07974e2b65c8330eca4fb9b63d1f65317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    ";
        
        $__internal_1b663baa380fc33b009efb9572dee8e07974e2b65c8330eca4fb9b63d1f65317->leave($__internal_1b663baa380fc33b009efb9572dee8e07974e2b65c8330eca4fb9b63d1f65317_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 15,  80 => 14,  77 => 13,  74 => 12,  68 => 11,  59 => 8,  54 => 7,  49 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/layout.html.twig", "/var/www/html/portal/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
