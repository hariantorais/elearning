<?php

/* sesi_materi.html */
class __TwigTemplate_1f3257c90feb231b62180d8df86e24450f46a56dcec5621b6212e3b16d46ae9a extends Twig_Template
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
        echo "Sesi - ";
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
        <h3>Materi</h3>
    </div>
    <div class=\"module-body\"  style=\"background-color: white\">
        <!-- JIKA SISWA -->
        ";
        // line 14
        if ((is_siswa() == true)) {
            // line 15
            echo "          <table width=\"100%\">
            <tbody>
                
                  <tr>
                      <td>
                          <span class=\"text-success\" style=\"font-size: 20px\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "judul"), "html", null, true);
            echo "</span>
                      </td>
                  </tr>
                
            </tbody>
          </table>
        ";
        }
        // line 27
        echo "        <br>
        ";
        // line 28
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sesi_materi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  69 => 27,  59 => 20,  52 => 15,  50 => 14,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
