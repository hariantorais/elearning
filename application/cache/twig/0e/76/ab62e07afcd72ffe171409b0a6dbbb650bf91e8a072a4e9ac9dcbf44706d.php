<?php

/* list-inbox.html */
class __TwigTemplate_0e76ab62e07afcd72ffe171409b0a6dbbb650bf91e8a072a4e9ac9dcbf44706d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-private.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Pesan - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo " 
<div class=\"module message\">
    <div class=\"module-head\">
        <h3>Pesan</h3>
    </div>
    <div class=\"module-body\">
        <div class=\"module-option clearfix\">
            ";
        // line 15
        echo get_flashdata("msg");
        echo "

            <div class=\"pull-right\">
                <form class=\"form-search\" method=\"get\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, site_url("message/index/"), "html", null, true);
        echo "\">
                    <div class=\"input-append\">
                        <input type=\"text\" class=\"span3 search-query\" placeholder=\"cari pesan...\" name=\"q\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "\">
                        <button type=\"submit\" class=\"btn\"><i class=\"icon-search\"></i></button>
                    </div>
                </form>
            </div>
            <div class=\"pull-left\">
                <a style=\"text-decoration: none\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, site_url("message/create/"), "html", null, true);
        echo "\" class=\"act-btn\">+</a>
            </div>
        </div>
        <div class=\"module-body table\">
            <table class=\"table table-message\">
                <tbody>
                    ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inbox"]) ? $context["inbox"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 33
            echo "                    <tr class=\"";
            echo ((($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "opened") == 0)) ? ("unread") : (""));
            echo " clickable-row\" data-href=\"";
            echo twig_escape_filter($this->env, site_url(((("message/detail/" . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "id")) . "#msg-") . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "id"))), "html", null, true);
            echo "\">
                        <td class=\"cell-author\">
                            <img style=\"height:30px;width:30px; margin-right: 10px;\" class=\"img-polaroid img-circle pull-left\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "profil"), "link_image"), "html", null, true);
            echo "\">
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "profil"), "link_profil"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, character_limiter($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "profil"), "nama"), 23, "..."), "html", null, true);
            echo "</a>
                            <br>
                            ";
            // line 38
            if ((!twig_test_empty($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "timeago")))) {
                // line 39
                echo "                                <time class=\"timeago\" datetime=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "timeago"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "date"), "html", null, true);
                echo "</time>
                            ";
            } else {
                // line 41
                echo "                                <small>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "date"), "html", null, true);
                echo "</small>
                            ";
            }
            // line 43
            echo "                        </td>
                        <td class=\"cell-title hidden-phone hidden-tablet\">
                            <a class=\"pull-right\" style=\"margin-left:10px;\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, site_url((("message/detail/" . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "id")) . "/?confirm=1#confirm")), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                            ";
            // line 46
            if ((!twig_test_empty($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "receiver")))) {
                // line 47
                echo "                            <div>To <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "receiver"), "link_profil"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "receiver"), "nama"), "html", null, true);
                echo "</a></div>
                            ";
            }
            // line 49
            echo "                            ";
            echo character_limiter(strip_tags($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "content")), 80, "...");
            echo "
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
                </tbody>
            </table>
        </div>
        <div class=\"module-foot\">
            ";
        // line 58
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "list-inbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 58,  148 => 53,  137 => 49,  129 => 47,  127 => 46,  123 => 45,  119 => 43,  113 => 41,  105 => 39,  103 => 38,  96 => 36,  92 => 35,  84 => 33,  80 => 32,  71 => 26,  62 => 20,  57 => 18,  51 => 15,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
