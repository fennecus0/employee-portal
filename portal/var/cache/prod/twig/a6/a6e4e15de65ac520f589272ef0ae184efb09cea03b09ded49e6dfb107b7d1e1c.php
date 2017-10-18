<?php

/* :dform:index.html.twig */
class __TwigTemplate_1ce15056d9960268348642ec6ff38c9a20f005ea19132f11eabf261b3d7f8ed7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sidebar-right.html.twig", ":dform:index.html.twig", 1);
        $this->blocks = array(
            'page_header' => array($this, 'block_page_header'),
            'page_header2' => array($this, 'block_page_header2'),
            'page_center' => array($this, 'block_page_center'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "sidebar-right.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        echo "Anmeldung Dienstfahrt";
    }

    // line 5
    public function block_page_header2($context, array $blocks = array())
    {
        echo "Historie";
    }

    // line 7
    public function block_page_center($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 327
        echo "

";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "        <div class=\"row\">
            <div class=\"col-sm-8 col-sm-push-2\">
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "dForm")));
        echo "

                <div class=\"row\">
                    <div class=\"col-xs-10\">
                        <div class=\"form-group\">
                            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'widget');
        echo "

                            <span class=\"highlight\"></span><span class=\"bar\"></span>
                            <label>Grund</label>
                        </div>
                    </div>
                </div>
                <div class=\"row row-flex\">
                    <div class=\"col-xs-10\">
                        <div class=\"form-group\">
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'widget');
        echo "

                            <span class=\"highlight\"></span><span class=\"bar\"></span>
                            <label>Vorname</label>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'widget');
        echo "

                            <span class=\"highlight\"></span><span class=\"bar\"></span>
                            <label>Nachname</label>
                        </div>
                    </div>

                    <div class=\"col-xs-2 col-flex align-center\">
                        <button type=\"button\" class=\"button addButton\">
                            <span>&#43;</span>
                            <div class=\"ripples\"><span class=\"ripplesCircle\"></span></div>
                        </button>
                    </div>
                </div>

                <div class=\"newName\">
                    <div class=\"row row-flex disabled\">
                        <div class=\"col-xs-10\">
                            <div class=\"form-group\">
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName1", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName1", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Nachname</label>
                            </div>
                        </div>
                        <div class=\"col-xs-2 col-flex align-center\">
                            <button type=\"button\" class=\"button removeButton\"><span>&#8211;</span>
                                <div class=\"ripples\"><span class=\"ripplesCircle\"></span></div>
                            </button>
                        </div>
                    </div>

                    <div class=\"row row-flex disabled\">
                        <div class=\"col-xs-10\">
                            <div class=\"form-group\">
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName2", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName2", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Nachname</label>
                            </div>
                        </div>
                        <div class=\"col-xs-2 col-flex align-center\">
                            <button type=\"button\" class=\"button removeButton\"><span>&#8211;</span>
                                <div class=\"ripples\"><span class=\"ripplesCircle\"></span></div>
                            </button>
                        </div>
                    </div>

                    <div class=\"row row-flex disabled\">
                        <div class=\"col-xs-10\">
                            <div class=\"form-group\">
                                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName3", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName3", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Nachname</label>
                            </div>
                        </div>
                        <div class=\"col-xs-2 col-flex align-center\">
                            <button type=\"button\" class=\"button removeButton\"><span>&#8211;</span>
                                <div class=\"ripples\"><span class=\"ripplesCircle\"></span></div>
                            </button>
                        </div>
                    </div>

                    <div class=\"row row-flex disabled\">
                        <div class=\"col-xs-10\">
                            <div class=\"form-group\">
                                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName4", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName4", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Nachname</label>
                            </div>
                        </div>
                        <div class=\"col-xs-2 col-flex align-center\">
                            <button type=\"button\" class=\"button removeButton\"><span>&#8211;</span>
                                <div class=\"ripples\"><span class=\"ripplesCircle\"></span></div>
                            </button>
                        </div>
                    </div>

                    <div class=\"row row-flex disabled\">
                        <div class=\"col-xs-10\">
                            <div class=\"form-group\">
                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName5", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName5", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Nachname</label>
                            </div>
                        </div>
                        <div class=\"col-xs-2 col-flex align-center\">
                            <button type=\"button\" class=\"button removeButton\"><span>&#8211;</span>
                                <div class=\"ripples\"><span class=\"ripplesCircle\"></span></div>
                            </button>
                        </div>
                    </div>

                    <div class=\"row row-flex disabled\">
                        <div class=\"col-xs-10\">
                            <div class=\"form-group\">
                                ";
        // line 148
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName6", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName6", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Nachname</label>
                            </div>
                        </div>
                        <div class=\"col-xs-2 col-flex align-center\">
                            <button type=\"button\" class=\"button removeButton\"><span>&#8211;</span>
                                <div class=\"ripples\"><span class=\"ripplesCircle\"></span></div>
                            </button>
                        </div>
                    </div>

                    <div class=\"row row-flex disabled\">
                        <div class=\"col-xs-10\">
                            <div class=\"form-group\">
                                ";
        // line 167
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName7", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName7", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Nachname</label>
                            </div>
                        </div>
                        <div class=\"col-xs-2 col-flex align-center\">
                            <button type=\"button\" class=\"button removeButton\"><span>&#8211;</span>
                                <div class=\"ripples\"><span class=\"ripplesCircle\"></span></div>
                            </button>
                        </div>
                    </div>

                    <div class=\"row row-flex disabled\">
                        <div class=\"col-xs-10\">
                            <div class=\"form-group\">
                                ";
        // line 186
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName8", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 191
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName8", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Nachname</label>
                            </div>
                        </div>
                        <div class=\"col-xs-2 col-flex align-center\">
                            <button type=\"button\" class=\"button removeButton\"><span>&#8211;</span>
                                <div class=\"ripples\"><span class=\"ripplesCircle\"></span></div>
                            </button>
                        </div>
                    </div>

                    <div class=\"row row-flex disabled\">
                        <div class=\"col-xs-10\">
                            <div class=\"form-group\">
                                ";
        // line 205
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName9", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 210
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName9", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Nachname</label>
                            </div>
                        </div>
                        <div class=\"col-xs-2 col-flex align-center\">
                            <button type=\"button\" class=\"button removeButton\"><span>&#8211;</span>
                                <div class=\"ripples\"><span class=\"ripplesCircle\"></span></div>
                            </button>
                        </div>
                    </div>

                    <div class=\"row row-flex disabled\">
                        <div class=\"col-xs-10\">
                            <div class=\"form-group\">
                                ";
        // line 224
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName10", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName10", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Nachname</label>
                            </div>
                        </div>
                        <div class=\"col-xs-2 col-flex align-center\">
                            <button type=\"button\" class=\"button removeButton\"><span>&#8211;</span>
                                <div class=\"ripples\"><span class=\"ripplesCircle\"></span></div>
                            </button>
                        </div>
                    </div>
                </div>

                <label class=\"label--checkbox\">
                    <input type=\"checkbox\" class=\"checkbox\"> <span>Ganztägig</span>
                </label>

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-8\">
                        <div class=\"row\" id=\"ddate1\">
                            <div class=\"col-xs-12 date\">
                                <div class=\"form-group\">
                                    ";
        // line 250
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "initialDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                    <span class=\"highlight\"></span><span class=\"bar\"></span>

                                    <label>Datum von</label>
                                </div>

                                <span class=\"input-group-addon\">
                                                    <span class=\"fa fa-calendar\"></span>
                                                </span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xs-12 col-sm-12 col-md-4\">
                        <div class=\"row\" id=\"dtime1\">
                            <div class=\"col-xs-12 date\">
                                <div class=\"form-group\">
                                    ";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "initialTime", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                    <span class=\"highlight\"></span><span class=\"bar\"></span>
                                    <label>Uhrzeit</label>
                                </div>

                                <span class=\"input-group-addon\">
                                                    <span class=\"fa fa-calendar\"></span>
                                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-8\">
                        <div class=\"row\" id=\"ddate2\">
                            <div class=\"col-xs-12 date\">
                                <div class=\"form-group\">
                                    ";
        // line 287
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "endingDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                    <span class=\"highlight\"></span><span class=\"bar\"></span>
                                    <label>Datum bis</label>
                                </div>

                                <span class=\"input-group-addon\">
                                                    <span class=\"fa fa-calendar\"></span>
                                                </span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xs-12 col-sm-12 col-md-4\">
                        <div class=\"row\" id=\"dtime2\">
                            <div class=\"col-xs-12 date\">
                                <div class=\"form-group\">
                                    ";
        // line 304
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "endingTime", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                    <span class=\"highlight\"></span><span class=\"bar\"></span>
                                    <label>Uhrzeit</label>
                                </div>

                                <span class=\"input-group-addon\">
                                                        <span class=\"fa fa-calendar\"></span>
                                                    </span>
                            </div>
                        </div>
                    </div>
                </div>


                <button type=\"submit\" class=\"button buttonBlue\">Senden
                    <div class=\"ripples buttonRipples\"><span class=\"ripplesCircle\"></span></div>
                </button>

                ";
        // line 323
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return ":dform:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 323,  437 => 304,  417 => 287,  395 => 268,  374 => 250,  350 => 229,  342 => 224,  325 => 210,  317 => 205,  300 => 191,  292 => 186,  275 => 172,  267 => 167,  250 => 153,  242 => 148,  225 => 134,  217 => 129,  200 => 115,  192 => 110,  175 => 96,  167 => 91,  150 => 77,  142 => 72,  125 => 58,  117 => 53,  95 => 34,  85 => 27,  72 => 17,  64 => 12,  60 => 10,  57 => 9,  51 => 327,  49 => 9,  46 => 8,  43 => 7,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":dform:index.html.twig", "/var/www/html/portal/app/Resources/views/dform/index.html.twig");
    }
}
