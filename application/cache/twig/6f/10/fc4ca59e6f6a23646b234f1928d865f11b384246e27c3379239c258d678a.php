<?php

/* layout-ujian.html */
class __TwigTemplate_6f10fc4ca59e6f6a23646b234f1928d865f11b384246e27c3379239c258d678a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        ";
        // line 4
        $this->env->loadTemplate("layout-header.html")->display($context);
        // line 5
        echo "        <link type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "css/read.css\" rel=\"stylesheet\">
        <link type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "css/theme.css\" rel=\"stylesheet\">
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
        <br><br><br>
        <!--/.wrapper-->
        <div class=\"footer\">
            <div class=\"container\">
                <center>
                    <b>Elemes Assunnah</b> <br>
                    <b class=\"copyright\">";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
        echo "</b><br>
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
        return "layout-ujian.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  81 => 11,  76 => 7,  70 => 27,  67 => 26,  65 => 25,  56 => 19,  47 => 12,  45 => 11,  40 => 8,  38 => 7,  34 => 6,  29 => 5,  27 => 4,  22 => 1,);
    }
}
