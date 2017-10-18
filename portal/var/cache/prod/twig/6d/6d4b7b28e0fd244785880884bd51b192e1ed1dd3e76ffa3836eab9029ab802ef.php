<?php

/* main-empty.html.twig */
class __TwigTemplate_6cf5de7e70bac47480312691a8e67dd7f0f70b7c6b23c7c5f429e233f019f889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main-empty.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'page_header' => array($this, 'block_page_header'),
            'page_center' => array($this, 'block_page_center'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section id=\"wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
        // line 8
        if ( !twig_test_empty(        $this->renderBlock("page_header", $context, $blocks))) {
            // line 9
            echo "                    <h3>";
            $this->displayBlock('page_header', $context, $blocks);
            echo "</h3>
                    ";
        }
        // line 11
        echo "
                        ";
        // line 12
        $this->displayBlock('page_center', $context, $blocks);
        // line 13
        echo "                </div>
            </div>
        </div>
    </section>
";
    }

    // line 9
    public function block_page_header($context, array $blocks = array())
    {
        echo " ";
    }

    // line 12
    public function block_page_center($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "main-empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  60 => 9,  52 => 13,  50 => 12,  47 => 11,  41 => 9,  39 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main-empty.html.twig", "/var/www/html/portal/app/Resources/views/main-empty.html.twig");
    }
}
