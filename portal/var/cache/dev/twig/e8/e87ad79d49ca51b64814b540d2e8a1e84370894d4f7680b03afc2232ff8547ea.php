<?php

/* dform/index.html.twig */
class __TwigTemplate_791e80f375922517c9ea5555c5217a24075c8fe566d51bd91f82cef9f0ed8b7b extends Twig_Template
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
        $__internal_5d4f211e82c0212772a8f426cabb97cd926259c7e9c2af28023466f6ee472ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4f211e82c0212772a8f426cabb97cd926259c7e9c2af28023466f6ee472ec9->enter($__internal_5d4f211e82c0212772a8f426cabb97cd926259c7e9c2af28023466f6ee472ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d4f211e82c0212772a8f426cabb97cd926259c7e9c2af28023466f6ee472ec9->leave($__internal_5d4f211e82c0212772a8f426cabb97cd926259c7e9c2af28023466f6ee472ec9_prof);

    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_6516e3e0570e45bab4a47376f904b4894c011b7b4f02b029f965dea83cd28f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6516e3e0570e45bab4a47376f904b4894c011b7b4f02b029f965dea83cd28f62->enter($__internal_6516e3e0570e45bab4a47376f904b4894c011b7b4f02b029f965dea83cd28f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo "Anmeldung Dienstfahrt";
        
        $__internal_6516e3e0570e45bab4a47376f904b4894c011b7b4f02b029f965dea83cd28f62->leave($__internal_6516e3e0570e45bab4a47376f904b4894c011b7b4f02b029f965dea83cd28f62_prof);

    }

    // line 5
    public function block_page_header2($context, array $blocks = array())
    {
        $__internal_eca55f26a2363bbc7f208482f4d74bf5783c898e49b7f4edb2a9db57f75d0f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca55f26a2363bbc7f208482f4d74bf5783c898e49b7f4edb2a9db57f75d0f5e->enter($__internal_eca55f26a2363bbc7f208482f4d74bf5783c898e49b7f4edb2a9db57f75d0f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header2"));

        echo "Historie";
        
        $__internal_eca55f26a2363bbc7f208482f4d74bf5783c898e49b7f4edb2a9db57f75d0f5e->leave($__internal_eca55f26a2363bbc7f208482f4d74bf5783c898e49b7f4edb2a9db57f75d0f5e_prof);

    }

    // line 7
    public function block_page_center($context, array $blocks = array())
    {
        $__internal_46f4f9a623878579a54ab2d8dc57508506171cbda465260b14aeb3ffe420e877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f4f9a623878579a54ab2d8dc57508506171cbda465260b14aeb3ffe420e877->enter($__internal_46f4f9a623878579a54ab2d8dc57508506171cbda465260b14aeb3ffe420e877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_center"));

        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 327
        echo "

";
        
        $__internal_46f4f9a623878579a54ab2d8dc57508506171cbda465260b14aeb3ffe420e877->leave($__internal_46f4f9a623878579a54ab2d8dc57508506171cbda465260b14aeb3ffe420e877_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c6d10bfc2f4de5ac86a423d1571994f4267160d69092478436ddbb964382377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6d10bfc2f4de5ac86a423d1571994f4267160d69092478436ddbb964382377->enter($__internal_6c6d10bfc2f4de5ac86a423d1571994f4267160d69092478436ddbb964382377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "        <div class=\"row\">
            <div class=\"col-sm-8 col-sm-push-2\">
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("id" => "dForm")));
        echo "

                <div class=\"row\">
                    <div class=\"col-xs-10\">
                        <div class=\"form-group\">
                            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName", array()), 'widget');
        echo "

                            <span class=\"highlight\"></span><span class=\"bar\"></span>
                            <label>Vorname</label>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName1", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName1", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName2", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName2", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName3", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName3", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName4", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName4", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName5", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName5", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName6", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName6", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName7", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName7", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName8", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 191
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName8", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName9", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 210
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName9", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName10", array()), 'widget');
        echo "
                                <span class=\"highlight\"></span><span class=\"bar\"></span><label>Vorname</label>
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName10", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "initialDate", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "initialTime", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "endingDate", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "endingTime", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </div>
    ";
        
        $__internal_6c6d10bfc2f4de5ac86a423d1571994f4267160d69092478436ddbb964382377->leave($__internal_6c6d10bfc2f4de5ac86a423d1571994f4267160d69092478436ddbb964382377_prof);

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
        return new Twig_Source("", "dform/index.html.twig", "/var/www/html/portal/app/Resources/views/dform/index.html.twig");
    }
}
