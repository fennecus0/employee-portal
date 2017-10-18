<?php

/* ::main.html.twig */
class __TwigTemplate_104fee803409bac41dbcb454dcc3c62787ce65bc891a36e62040e7ce1923ac8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::main.html.twig", 1);
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
        echo "<section id=\"wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3>";
        // line 8
        $this->displayBlock('page_header', $context, $blocks);
        echo "</h3>

                <section class=\"page\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">

                            ";
        // line 14
        $this->displayBlock('page_center', $context, $blocks);
        // line 15
        echo "
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 8
    public function block_page_header($context, array $blocks = array())
    {
        echo " ";
    }

    // line 14
    public function block_page_center($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  62 => 8,  50 => 15,  48 => 14,  39 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::main.html.twig", "/var/www/html/portal/app/Resources/views/main.html.twig");
    }
}
