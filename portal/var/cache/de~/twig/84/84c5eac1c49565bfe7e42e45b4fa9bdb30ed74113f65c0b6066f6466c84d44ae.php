<?php

/* :dform:index.html.twig */
class __TwigTemplate_0f4af30f440c93e25fc70f626021ff80c68a2e02cdf8a7d0f248fb9953260c63 extends Twig_Template
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
        $__internal_4f173fd7bad345bdb07d34b309e1b3c8f51a8324a966bc61107d17ff2b8e87db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f173fd7bad345bdb07d34b309e1b3c8f51a8324a966bc61107d17ff2b8e87db->enter($__internal_4f173fd7bad345bdb07d34b309e1b3c8f51a8324a966bc61107d17ff2b8e87db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dform:index.html.twig"));

        $__internal_1720ec662181faa8e9d672d1b42097b92fd25e604021cc0fe6b772a9fa27866a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1720ec662181faa8e9d672d1b42097b92fd25e604021cc0fe6b772a9fa27866a->enter($__internal_1720ec662181faa8e9d672d1b42097b92fd25e604021cc0fe6b772a9fa27866a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f173fd7bad345bdb07d34b309e1b3c8f51a8324a966bc61107d17ff2b8e87db->leave($__internal_4f173fd7bad345bdb07d34b309e1b3c8f51a8324a966bc61107d17ff2b8e87db_prof);

        
        $__internal_1720ec662181faa8e9d672d1b42097b92fd25e604021cc0fe6b772a9fa27866a->leave($__internal_1720ec662181faa8e9d672d1b42097b92fd25e604021cc0fe6b772a9fa27866a_prof);

    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_cc6b92d7ecbb4f374ce2a11de5fc57e6a32b64b15f8e6ebef9d789cab5071b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6b92d7ecbb4f374ce2a11de5fc57e6a32b64b15f8e6ebef9d789cab5071b1e->enter($__internal_cc6b92d7ecbb4f374ce2a11de5fc57e6a32b64b15f8e6ebef9d789cab5071b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_5f5d7a42e07413bc8bf5ac708c38fd8edad6ce39048ee56f6063d7235e422a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5d7a42e07413bc8bf5ac708c38fd8edad6ce39048ee56f6063d7235e422a04->enter($__internal_5f5d7a42e07413bc8bf5ac708c38fd8edad6ce39048ee56f6063d7235e422a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo "Anmeldung Dienstfahrt";
        
        $__internal_5f5d7a42e07413bc8bf5ac708c38fd8edad6ce39048ee56f6063d7235e422a04->leave($__internal_5f5d7a42e07413bc8bf5ac708c38fd8edad6ce39048ee56f6063d7235e422a04_prof);

        
        $__internal_cc6b92d7ecbb4f374ce2a11de5fc57e6a32b64b15f8e6ebef9d789cab5071b1e->leave($__internal_cc6b92d7ecbb4f374ce2a11de5fc57e6a32b64b15f8e6ebef9d789cab5071b1e_prof);

    }

    // line 5
    public function block_page_header2($context, array $blocks = array())
    {
        $__internal_57b4fbaae25f10779cba39614a1bbbf649399d0530c222a21aeb40e5524a7d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b4fbaae25f10779cba39614a1bbbf649399d0530c222a21aeb40e5524a7d34->enter($__internal_57b4fbaae25f10779cba39614a1bbbf649399d0530c222a21aeb40e5524a7d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header2"));

        $__internal_fb99dc0205ed353fa3047c3090ea4503b91f7b892071eb9491aaa0cabdbf1da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb99dc0205ed353fa3047c3090ea4503b91f7b892071eb9491aaa0cabdbf1da3->enter($__internal_fb99dc0205ed353fa3047c3090ea4503b91f7b892071eb9491aaa0cabdbf1da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header2"));

        echo "Historie";
        
        $__internal_fb99dc0205ed353fa3047c3090ea4503b91f7b892071eb9491aaa0cabdbf1da3->leave($__internal_fb99dc0205ed353fa3047c3090ea4503b91f7b892071eb9491aaa0cabdbf1da3_prof);

        
        $__internal_57b4fbaae25f10779cba39614a1bbbf649399d0530c222a21aeb40e5524a7d34->leave($__internal_57b4fbaae25f10779cba39614a1bbbf649399d0530c222a21aeb40e5524a7d34_prof);

    }

    // line 7
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_9a85cf0ec5a786a3ee5186c19fa78cd1188d0e9da18b1e499a45c567c3841ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a85cf0ec5a786a3ee5186c19fa78cd1188d0e9da18b1e499a45c567c3841ee9->enter($__internal_9a85cf0ec5a786a3ee5186c19fa78cd1188d0e9da18b1e499a45c567c3841ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        $__internal_886b5852503e08ab881792e946539760770f68c144ae5fe4d67e2d995a34ae38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886b5852503e08ab881792e946539760770f68c144ae5fe4d67e2d995a34ae38->enter($__internal_886b5852503e08ab881792e946539760770f68c144ae5fe4d67e2d995a34ae38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 327
        echo "

";
        
        $__internal_886b5852503e08ab881792e946539760770f68c144ae5fe4d67e2d995a34ae38->leave($__internal_886b5852503e08ab881792e946539760770f68c144ae5fe4d67e2d995a34ae38_prof);

        
        $__internal_9a85cf0ec5a786a3ee5186c19fa78cd1188d0e9da18b1e499a45c567c3841ee9->leave($__internal_9a85cf0ec5a786a3ee5186c19fa78cd1188d0e9da18b1e499a45c567c3841ee9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c0bfd9d09d6b05be3b0b8298209910a553b4b2f7b74a96105e7057eb940a773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0bfd9d09d6b05be3b0b8298209910a553b4b2f7b74a96105e7057eb940a773->enter($__internal_5c0bfd9d09d6b05be3b0b8298209910a553b4b2f7b74a96105e7057eb940a773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcd9e1d5443231d9c6cbaa64ce876a463bfc94721bd38cf37c8cdf9e819737fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd9e1d5443231d9c6cbaa64ce876a463bfc94721bd38cf37c8cdf9e819737fb->enter($__internal_fcd9e1d5443231d9c6cbaa64ce876a463bfc94721bd38cf37c8cdf9e819737fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "        <div class=\"row\">
            <div class=\"col-sm-8 col-sm-push-2\">
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "dForm")));
        echo "

                <div class=\"row\">
                    <div class=\"col-xs-10\">
                        <div class=\"form-group\">
                            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'widget');
        echo "

                            <span class=\"highlight\"></span><span class=\"bar\"></span>
                            <label>Vorname</label>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName1", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName1", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName2", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName2", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName3", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName3", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName4", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName4", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName5", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName5", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName6", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName6", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName7", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName7", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName8", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 191
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName8", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName9", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 210
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName9", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName10", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName10", array()), 'widget');
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
                    <input type=\"checkbox\" class=\"checkbox\"> <span>Ganztätig</span>
                </label>

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-8\">
                        <div class=\"row\" id=\"ddate1\">
                            <div class=\"col-xs-12 date\">
                                <div class=\"form-group\">
                                    ";
        // line 250
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "initialDate", array()), 'widget', array("attr" => array("class" => "form-control")));
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

                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"row\" id=\"dtime1\">
                            <div class=\"col-xs-12 date\">
                                <div class=\"form-group\">
                                    ";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "initialTime", array()), 'widget', array("attr" => array("class" => "form-control")));
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
                    <div class=\"col-xs-12 col-sm-8\">
                        <div class=\"row\" id=\"ddate2\">
                            <div class=\"col-xs-12 date\">
                                <div class=\"form-group\">
                                    ";
        // line 287
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "endingDate", array()), 'widget', array("attr" => array("class" => "form-control")));
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

                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"row\" id=\"dtime2\">
                            <div class=\"col-xs-12 date\">
                                <div class=\"form-group\">
                                    ";
        // line 304
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "endingTime", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    ";
        
        $__internal_fcd9e1d5443231d9c6cbaa64ce876a463bfc94721bd38cf37c8cdf9e819737fb->leave($__internal_fcd9e1d5443231d9c6cbaa64ce876a463bfc94721bd38cf37c8cdf9e819737fb_prof);

        
        $__internal_5c0bfd9d09d6b05be3b0b8298209910a553b4b2f7b74a96105e7057eb940a773->leave($__internal_5c0bfd9d09d6b05be3b0b8298209910a553b4b2f7b74a96105e7057eb940a773_prof);

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
        return array (  513 => 323,  491 => 304,  471 => 287,  449 => 268,  428 => 250,  404 => 229,  396 => 224,  379 => 210,  371 => 205,  354 => 191,  346 => 186,  329 => 172,  321 => 167,  304 => 153,  296 => 148,  279 => 134,  271 => 129,  254 => 115,  246 => 110,  229 => 96,  221 => 91,  204 => 77,  196 => 72,  179 => 58,  171 => 53,  149 => 34,  139 => 27,  126 => 17,  118 => 12,  114 => 10,  105 => 9,  93 => 327,  91 => 9,  88 => 8,  79 => 7,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'sidebar-right.html.twig' %}

{% block page_header %}Anmeldung Dienstfahrt{% endblock page_header %}

{% block page_header2 %}Historie{% endblock page_header2 %}

{% block page_center %}

    {% block body %}
        <div class=\"row\">
            <div class=\"col-sm-8 col-sm-push-2\">
                {{ form_start(form, {'attr': {'id': 'dForm'}}) }}

                <div class=\"row\">
                    <div class=\"col-xs-10\">
                        <div class=\"form-group\">
                            {{ form_widget(form.title) }}

                            <span class=\"highlight\"></span><span class=\"bar\"></span>
                            <label>Grund</label>
                        </div>
                    </div>
                </div>
                <div class=\"row row-flex\">
                    <div class=\"col-xs-10\">
                        <div class=\"form-group\">
                            {{ form_widget(form.firstName) }}

                            <span class=\"highlight\"></span><span class=\"bar\"></span>
                            <label>Vorname</label>
                        </div>

                        <div class=\"form-group\">
                            {{ form_widget(form.lastName) }}

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
                                {{ form_widget(form.firstName1) }}
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                {{ form_widget(form.lastName1) }}
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
                                {{ form_widget(form.firstName2) }}
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                {{ form_widget(form.lastName2) }}
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
                                {{ form_widget(form.firstName3) }}
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                {{ form_widget(form.lastName3) }}
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
                                {{ form_widget(form.firstName4) }}
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                {{ form_widget(form.lastName4) }}
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
                                {{ form_widget(form.firstName5) }}
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                {{ form_widget(form.lastName5) }}
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
                                {{ form_widget(form.firstName6) }}
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                {{ form_widget(form.lastName6) }}
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
                                {{ form_widget(form.firstName7) }}
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                {{ form_widget(form.lastName7) }}
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
                                {{ form_widget(form.firstName8) }}
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                {{ form_widget(form.lastName8) }}
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
                                {{ form_widget(form.firstName9) }}
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                {{ form_widget(form.lastName9) }}
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
                                {{ form_widget(form.firstName10) }}
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                {{ form_widget(form.lastName10) }}
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
                    <input type=\"checkbox\" class=\"checkbox\"> <span>Ganztätig</span>
                </label>

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-8\">
                        <div class=\"row\" id=\"ddate1\">
                            <div class=\"col-xs-12 date\">
                                <div class=\"form-group\">
                                    {{ form_widget(form.initialDate, { 'attr': { 'class': 'form-control' } }) }}

                                    <span class=\"highlight\"></span><span class=\"bar\"></span>

                                    <label>Datum von</label>
                                </div>

                                <span class=\"input-group-addon\">
                                                    <span class=\"fa fa-calendar\"></span>
                                                </span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"row\" id=\"dtime1\">
                            <div class=\"col-xs-12 date\">
                                <div class=\"form-group\">
                                    {{ form_widget(form.initialTime, { 'attr': { 'class': 'form-control' } }) }}

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
                    <div class=\"col-xs-12 col-sm-8\">
                        <div class=\"row\" id=\"ddate2\">
                            <div class=\"col-xs-12 date\">
                                <div class=\"form-group\">
                                    {{ form_widget(form.endingDate, { 'attr': { 'class': 'form-control' } }) }}

                                    <span class=\"highlight\"></span><span class=\"bar\"></span>
                                    <label>Datum bis</label>
                                </div>

                                <span class=\"input-group-addon\">
                                                    <span class=\"fa fa-calendar\"></span>
                                                </span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"row\" id=\"dtime2\">
                            <div class=\"col-xs-12 date\">
                                <div class=\"form-group\">
                                    {{ form_widget(form.endingTime, { 'attr': { 'class': 'form-control' } }) }}

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

                {{ form_end(form) }}
            </div>
        </div>
    {% endblock %}


{% endblock %}", ":dform:index.html.twig", "/var/www/html/portal/app/Resources/views/dform/index.html.twig");
    }
}
