<?php

/* layout-redirect.html */
class __TwigTemplate_e4a35ae1236d952e6ebed6c7c58f4d1c19ae20d339b5fb870010078a75634568 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "css/theme.css\" rel=\"stylesheet\">
        <link type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, base_url("assets/comp/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["favicon_url"]) ? $context["favicon_url"] : null), "html", null, true);
        echo "\">

    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url("assets/comp/jquery/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        // line 19
        $this->displayBlock('js', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    // line 19
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-redirect.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  80 => 16,  74 => 6,  68 => 20,  66 => 19,  62 => 18,  59 => 17,  57 => 16,  45 => 10,  37 => 8,  29 => 6,  22 => 1,  58 => 19,  53 => 16,  50 => 12,  41 => 9,  38 => 7,  33 => 7,  30 => 3,);
    }
}
