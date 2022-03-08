<?php

/* list-login-log.html */
class __TwigTemplate_1e4ce535f6ccffc81375678b911fe861079771b2b6824894bac54be53e6d8bf5 extends Twig_Template
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
        echo "Login log - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"module\">
    <div class=\"module-head\">
        <h3>Login log</h3>
    </div>
    <div class=\"module-body\">

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th width=\"20%\">Tgl</th>
                    <th width=\"15%\">IP</th>
                    <th>Agent</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["log"]) ? $context["log"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 24
            echo "                ";
            $context["a"] = json_decode($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "agent"), 1);
            // line 25
            echo "                <tr>
                    <td>
                    ";
            // line 27
            if ((!twig_test_empty($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "timeago")))) {
                // line 28
                echo "                        <time class=\"timeago\" datetime=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "timeago"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "lasttime"), "html", null, true);
                echo "</time>
                    ";
            } else {
                // line 30
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "lasttime"), "html", null, true);
                echo "
                    ";
            }
            // line 32
            echo "                    </td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "ip"), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "agent_string"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </tbody>
        </table>

        <br>
        ";
        // line 41
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "list-login-log.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 41,  102 => 37,  93 => 34,  89 => 33,  86 => 32,  80 => 30,  72 => 28,  70 => 27,  66 => 25,  63 => 24,  59 => 23,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
