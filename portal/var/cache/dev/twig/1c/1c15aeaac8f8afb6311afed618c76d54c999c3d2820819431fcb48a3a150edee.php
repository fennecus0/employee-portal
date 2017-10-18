<?php

/* main-empty.html.twig */
class __TwigTemplate_34f284827b010a412704a6c7a3081447ed44fc8f4d6b45250c02f9745946603e extends Twig_Template
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
        $__internal_61f1bde461c3bc35f576da3625771b1143c2e72197a698f6e3642bab9c00dd33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f1bde461c3bc35f576da3625771b1143c2e72197a698f6e3642bab9c00dd33->enter($__internal_61f1bde461c3bc35f576da3625771b1143c2e72197a698f6e3642bab9c00dd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main-empty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61f1bde461c3bc35f576da3625771b1143c2e72197a698f6e3642bab9c00dd33->leave($__internal_61f1bde461c3bc35f576da3625771b1143c2e72197a698f6e3642bab9c00dd33_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_72bbf9da745b0562a1b83cf55beabad7ae0c25749f2a7e1c831171372e3d2f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72bbf9da745b0562a1b83cf55beabad7ae0c25749f2a7e1c831171372e3d2f16->enter($__internal_72bbf9da745b0562a1b83cf55beabad7ae0c25749f2a7e1c831171372e3d2f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_72bbf9da745b0562a1b83cf55beabad7ae0c25749f2a7e1c831171372e3d2f16->leave($__internal_72bbf9da745b0562a1b83cf55beabad7ae0c25749f2a7e1c831171372e3d2f16_prof);

    }

    // line 9
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_bd4e8ca71c8bc7e44ccbb878c96d3db2f57ed1150d9149cf59aa991e49138729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd4e8ca71c8bc7e44ccbb878c96d3db2f57ed1150d9149cf59aa991e49138729->enter($__internal_bd4e8ca71c8bc7e44ccbb878c96d3db2f57ed1150d9149cf59aa991e49138729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo " ";
        
        $__internal_bd4e8ca71c8bc7e44ccbb878c96d3db2f57ed1150d9149cf59aa991e49138729->leave($__internal_bd4e8ca71c8bc7e44ccbb878c96d3db2f57ed1150d9149cf59aa991e49138729_prof);

    }

    // line 12
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_aa9dd94cd95736692b419be1b9b1395dba303452d11c4c8cdaedf2aaca0384fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9dd94cd95736692b419be1b9b1395dba303452d11c4c8cdaedf2aaca0384fb->enter($__internal_aa9dd94cd95736692b419be1b9b1395dba303452d11c4c8cdaedf2aaca0384fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        echo " ";
        
        $__internal_aa9dd94cd95736692b419be1b9b1395dba303452d11c4c8cdaedf2aaca0384fb->leave($__internal_aa9dd94cd95736692b419be1b9b1395dba303452d11c4c8cdaedf2aaca0384fb_prof);

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
        return array (  84 => 12,  72 => 9,  61 => 13,  59 => 12,  56 => 11,  50 => 9,  48 => 8,  42 => 4,  36 => 3,  11 => 1,);
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
