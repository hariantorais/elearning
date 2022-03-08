<?php

/* layout-header-public.html */
class __TwigTemplate_0f45dbc2a1d55ab2b1cb706b8e06204e966149ecf552b5393f247c33abc41b95 extends Twig_Template
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
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "css/theme.css\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url("assets/adminlte/dist/css/adminlte.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url("assets/comp/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url("assets/comp/pace/flash.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, base_url("assets/comp/offline/offline-theme-chrome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 10
        echo (isset($context["comp_css"]) ? $context["comp_css"] : null);
        echo "
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["favicon_url"]) ? $context["favicon_url"] : null), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "layout-header-public.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
