<?php

/* layout-detail-materi.html */
class __TwigTemplate_ba5c575a2893b698a30632e392e0810c43fb044010ca8c78e712a8bd22ba4bae extends Twig_Template
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
        echo "        <link type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "css/read.css\" rel=\"stylesheet\">
        ";
        // line 7
        $this->displayBlock('css', $context, $blocks);
        // line 8
        echo "    </head>
    <body>

        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "
        <br><br>
        <!--/.wrapper-->
        <div class=\"footer\">
            <div class=\"container\">
                <center>
                    <b>Media Belajar Online</b></br>
                    <b class=\"copyright\">";
        // line 19
        echo (isset($context["copyright"]) ? $context["copyright"] : null);
        echo " </b></br>
                    by Harianto Rais
                </center>
            </div>
        </div>

        ";
        // line 25
        $this->env->loadTemplate("layout-footer.html")->display($context);
        // line 26
        echo "        ";
        $this->displayBlock('js', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    // line 26
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-detail-materi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  88 => 11,  83 => 7,  77 => 4,  71 => 27,  68 => 26,  66 => 25,  57 => 19,  48 => 12,  46 => 11,  41 => 8,  39 => 7,  34 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }
}
