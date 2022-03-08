<?php

/* layout-public.html */
class __TwigTemplate_e90fa57625215670b6cadf6ca7ed17e0cf12b9d2d310477f3e4d8bec9581a7cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 5
        $this->env->loadTemplate("layout-header.html")->display($context);
        // line 6
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 7
        echo "</head>
<body>

    <!-- <div class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\" style=\"background: #143db4\">
            <div class=\"container\">
                <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".navbar-inverse-collapse\">
                    <i class=\"icon-reorder shaded\"></i>
                </a>

                <a class=\"brand\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\" style=\"color: white\">
                    <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, get_logo_config(), "html", null, true);
        echo "\"> <span class=\"visible-phone brand-txt\">Belajar Online</span><span class=\"visible-desktop visible-tablet brand-txt\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
        echo "</span>
                </a>

            </div>
        </div>
    </div> -->
    <!-- /navbar -->

    <div class=\"wrapper\">
        <div class=\"container\">

            ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "
        </div>
    </div><!--/.wrapper-->

    <div class=\"footer\">
        <div class=\"container\">
            <center>
                    <b class=\"copyright\">";
        // line 37
        echo (isset($context["copyright"]) ? $context["copyright"] : null);
        echo " </b><br>
                    by Harianto Rais
                </center>
        </div>
    </div>

    ";
        // line 43
        $this->env->loadTemplate("layout-footer.html")->display($context);
        // line 44
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 45
        echo "</body>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
    }

    // line 44
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-public.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 44,  110 => 29,  105 => 6,  99 => 4,  94 => 45,  89 => 43,  80 => 37,  69 => 29,  53 => 18,  49 => 17,  37 => 7,  34 => 6,  28 => 4,  23 => 1,  492 => 227,  486 => 224,  475 => 216,  471 => 215,  462 => 209,  458 => 208,  449 => 202,  445 => 201,  432 => 191,  428 => 190,  419 => 184,  415 => 183,  412 => 182,  399 => 180,  395 => 179,  390 => 176,  377 => 174,  373 => 173,  362 => 165,  358 => 164,  347 => 156,  342 => 154,  333 => 148,  329 => 147,  321 => 142,  316 => 141,  314 => 140,  311 => 139,  305 => 136,  294 => 128,  290 => 127,  281 => 121,  277 => 120,  268 => 114,  264 => 113,  250 => 102,  246 => 101,  236 => 94,  232 => 93,  229 => 92,  216 => 90,  212 => 89,  207 => 86,  194 => 84,  190 => 83,  179 => 75,  175 => 74,  166 => 68,  163 => 67,  150 => 65,  146 => 64,  133 => 54,  129 => 53,  120 => 47,  113 => 43,  103 => 36,  98 => 35,  96 => 34,  91 => 44,  85 => 29,  83 => 28,  79 => 26,  73 => 25,  71 => 30,  67 => 22,  61 => 19,  58 => 18,  56 => 17,  51 => 15,  42 => 8,  39 => 7,  32 => 5,  29 => 3,);
    }
}
