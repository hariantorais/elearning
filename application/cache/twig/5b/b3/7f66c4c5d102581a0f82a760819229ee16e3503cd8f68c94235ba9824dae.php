<?php

/* print-materi.html */
class __TwigTemplate_5bb37f66c4c5d102581a0f82a760819229ee16e3503cd8f68c94235ba9824dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-print.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-print.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Print materi - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "judul"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<table width=\"100%\">
    <tr>
        <td width=\"20%\">Judul Materi</td>
        <td>:</td>
        <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "judul"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Mata Pelajaran</td>
        <td>:</td>
        <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "mapel"), "nama"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td>Guru</td>
        <td>:</td>
        <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "pembuat"), "nama"), "html", null, true);
        echo "</td>
    </tr>
</table>

<hr>

        ";
        // line 29
        echo $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "konten");
        echo "

";
    }

    public function getTemplateName()
    {
        return "print-materi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 29,  65 => 23,  57 => 18,  49 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
