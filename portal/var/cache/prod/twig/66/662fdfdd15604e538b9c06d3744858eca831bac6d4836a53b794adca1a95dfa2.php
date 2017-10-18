<?php

/* ::sidebar-left.html.twig */
class __TwigTemplate_3a631d2c49d384188d6cdf01ab534142dee7ab7752f615a3c91437acf688a651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::sidebar-left.html.twig", 1);
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
            <div class=\"col-xs-12 col-sm-8\">
                <h3>";
        // line 8
        $this->displayBlock('page_header', $context, $blocks);
        echo "</h3>

                <section class=\"page\">
                    <div class=\"row\">
                        <div class=\"col-sm-8 col-sm-push-2\">

                            ";
        // line 14
        $this->displayBlock('page_center', $context, $blocks);
        // line 15
        echo "
                        </div>
                    </div>
                </section>
            </div>

            <div class=\"col-xs-12 col-sm-4\">
                <section class=\"sidebar-left\">
                    <h3>History</h3>
                    <div class=\"list-group\">

                        <!--<a href=\"#\" class=\"list-group-item active\">
                            History
                        </a>-->
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">Hannover Messe <span class=\"badge\">12.10.2015</span></a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">Kunde Berlin <span class=\"badge\">05.03.2016</span></a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">Hamburg Messe <span class=\"badge\">07.01.2017</span></a>
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
        return "::sidebar-left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  77 => 8,  50 => 15,  48 => 14,  39 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::sidebar-left.html.twig", "/var/www/html/portal/app/Resources/views/sidebar-left.html.twig");
    }
}
