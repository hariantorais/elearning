<?php

/* last-login-person.html */
class __TwigTemplate_55c0d3ea061f510045edd794bf2e4755a5c92b34c996fe663ed5da284e7406be extends Twig_Template
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
        echo "<table class=\"table table-striped table-condensed\">
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["last_login_data"]) ? $context["last_login_data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 3
            echo "<tr>
    <td>
        <span class=\"pull-right text-muted\">
        ";
            // line 6
            if ((!twig_test_empty($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "timeago")))) {
                // line 7
                echo "            <time class=\"timeato\" datetime=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "timeago"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "lasttime"), "html", null, true);
                echo "</time>
        ";
            } else {
                // line 9
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "lasttime"), "html", null, true);
                echo "
        ";
            }
            // line 11
            echo "        </span>
        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "user"), "link_profil"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "user"), "nama"), "html", null, true);
            echo "</a>
    </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "last-login-person.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  50 => 12,  47 => 11,  41 => 9,  33 => 7,  31 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
