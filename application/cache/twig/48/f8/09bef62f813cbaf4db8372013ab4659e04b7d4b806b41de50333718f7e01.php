<?php

/* layout-footer-public.html */
class __TwigTemplate_48f809bef62f813cbaf4db8372013ab4659e04b7d4b806b41de50333718f7e01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
var site_url = \"";
        // line 2
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\";
var base_url = \"";
        // line 3
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\";
</script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, base_url("assets/comp/jquery/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url("assets/comp/jquery/jquery-ui-1.10.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script data-pace-options='{ \"ajax\": false }' src=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url("assets/comp/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url("assets/comp/offline/offline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        // line 10
        echo (isset($context["comp_js"]) ? $context["comp_js"] : null);
        echo "
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "scripts/script.js\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "layout-footer-public.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  47 => 9,  43 => 8,  35 => 6,  31 => 5,  26 => 3,  22 => 2,  19 => 1,  113 => 42,  108 => 27,  103 => 6,  92 => 43,  89 => 42,  87 => 41,  78 => 35,  69 => 28,  53 => 18,  49 => 17,  37 => 7,  34 => 6,  28 => 4,  23 => 1,  491 => 227,  485 => 224,  474 => 216,  470 => 215,  461 => 209,  457 => 208,  448 => 202,  444 => 201,  431 => 191,  427 => 190,  418 => 184,  414 => 183,  411 => 182,  398 => 180,  394 => 179,  389 => 176,  376 => 174,  372 => 173,  361 => 165,  357 => 164,  346 => 156,  341 => 154,  332 => 148,  328 => 147,  320 => 142,  315 => 141,  313 => 140,  310 => 139,  304 => 136,  293 => 128,  289 => 127,  280 => 121,  276 => 120,  267 => 114,  263 => 113,  249 => 102,  245 => 101,  235 => 94,  231 => 93,  228 => 92,  215 => 90,  211 => 89,  206 => 86,  193 => 84,  189 => 83,  178 => 75,  174 => 74,  165 => 68,  162 => 67,  149 => 65,  145 => 64,  132 => 54,  128 => 53,  119 => 47,  112 => 43,  102 => 36,  97 => 4,  95 => 34,  90 => 31,  84 => 29,  82 => 28,  79 => 27,  73 => 25,  71 => 24,  67 => 27,  61 => 19,  58 => 18,  56 => 17,  51 => 10,  42 => 8,  39 => 7,  32 => 5,  29 => 3,);
    }
}
