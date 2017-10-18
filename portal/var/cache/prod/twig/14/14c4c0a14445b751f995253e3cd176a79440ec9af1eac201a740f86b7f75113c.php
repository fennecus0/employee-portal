<?php

/* dform/index.html.twig */
class __TwigTemplate_88579a4ae5c94cafb9bddd9ae87a64ce3ae398ee70c1bc0418745d3b27adde89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sidebar-right.html.twig", "dform/index.html.twig", 1);
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
        $__internal_cc5a9cf267dc8d7b6d252f3c03da0949c32d2f22cf448a38e7147f571e1553ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5a9cf267dc8d7b6d252f3c03da0949c32d2f22cf448a38e7147f571e1553ba->enter($__internal_cc5a9cf267dc8d7b6d252f3c03da0949c32d2f22cf448a38e7147f571e1553ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc5a9cf267dc8d7b6d252f3c03da0949c32d2f22cf448a38e7147f571e1553ba->leave($__internal_cc5a9cf267dc8d7b6d252f3c03da0949c32d2f22cf448a38e7147f571e1553ba_prof);

    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_f767ef746a001bf0f972b0e60ad89245ad1a93f1ce036af205a4a209ae3de5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f767ef746a001bf0f972b0e60ad89245ad1a93f1ce036af205a4a209ae3de5cb->enter($__internal_f767ef746a001bf0f972b0e60ad89245ad1a93f1ce036af205a4a209ae3de5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo "Anmeldung Dienstfahrt";
        
        $__internal_f767ef746a001bf0f972b0e60ad89245ad1a93f1ce036af205a4a209ae3de5cb->leave($__internal_f767ef746a001bf0f972b0e60ad89245ad1a93f1ce036af205a4a209ae3de5cb_prof);

    }

    // line 5
    public function block_page_header2($context, array $blocks = array())
    {
        $__internal_146a615b63e6914781516b080f4f997c128ecc695cc9f3fb0931fe07d5571a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146a615b63e6914781516b080f4f997c128ecc695cc9f3fb0931fe07d5571a79->enter($__internal_146a615b63e6914781516b080f4f997c128ecc695cc9f3fb0931fe07d5571a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header2"));

        echo "Historie";
        
        $__internal_146a615b63e6914781516b080f4f997c128ecc695cc9f3fb0931fe07d5571a79->leave($__internal_146a615b63e6914781516b080f4f997c128ecc695cc9f3fb0931fe07d5571a79_prof);

    }

    // line 7
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_8fd5c31d3eec65ebbc30169a50b46a2e51e843b84e5a220046a4c384a0a445c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd5c31d3eec65ebbc30169a50b46a2e51e843b84e5a220046a4c384a0a445c8->enter($__internal_8fd5c31d3eec65ebbc30169a50b46a2e51e843b84e5a220046a4c384a0a445c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 327
        echo "

";
        
        $__internal_8fd5c31d3eec65ebbc30169a50b46a2e51e843b84e5a220046a4c384a0a445c8->leave($__internal_8fd5c31d3eec65ebbc30169a50b46a2e51e843b84e5a220046a4c384a0a445c8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d974854b4c238db929f0d0ecd6d361aa09777450c2adde9e5c18edb2b544c81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d974854b4c238db929f0d0ecd6d361aa09777450c2adde9e5c18edb2b544c81c->enter($__internal_d974854b4c238db929f0d0ecd6d361aa09777450c2adde9e5c18edb2b544c81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "        <div class=\"row\">
            <div class=\"col-sm-8 col-sm-push-2\">
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "dForm")));
        echo "

                <div class=\"row\">
                    <div class=\"col-xs-10\">
                        <div class=\"form-group\">
                            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget');
        echo "

                            <span class=\"highlight\"></span><span class=\"bar\"></span>
                            <label>Vorname</label>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName1", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName1", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName2", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName2", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName3", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName3", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName4", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName4", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName5", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName5", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName6", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName6", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName7", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName7", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName8", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 191
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName8", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName9", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 210
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName9", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName10", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName10", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "initialDate", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "initialTime", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endingDate", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endingTime", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    ";
        
        $__internal_d974854b4c238db929f0d0ecd6d361aa09777450c2adde9e5c18edb2b544c81c->leave($__internal_d974854b4c238db929f0d0ecd6d361aa09777450c2adde9e5c18edb2b544c81c_prof);

    }

    public function getTemplateName()
    {
        return "dform/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 323,  464 => 304,  444 => 287,  422 => 268,  401 => 250,  377 => 229,  369 => 224,  352 => 210,  344 => 205,  327 => 191,  319 => 186,  302 => 172,  294 => 167,  277 => 153,  269 => 148,  252 => 134,  244 => 129,  227 => 115,  219 => 110,  202 => 96,  194 => 91,  177 => 77,  169 => 72,  152 => 58,  144 => 53,  122 => 34,  112 => 27,  99 => 17,  91 => 12,  87 => 10,  81 => 9,  72 => 327,  70 => 9,  67 => 8,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
                    <input type=\"checkbox\" class=\"checkbox\"> <span>Ganztägig</span>
                </label>

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-8\">
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

                    <div class=\"col-xs-12 col-sm-12 col-md-4\">
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
                    <div class=\"col-xs-12 col-sm-12 col-md-8\">
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

                    <div class=\"col-xs-12 col-sm-12 col-md-4\">
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


{% endblock %}", "dform/index.html.twig", "/var/www/html/portal/app/Resources/views/dform/index.html.twig");
    }
}
