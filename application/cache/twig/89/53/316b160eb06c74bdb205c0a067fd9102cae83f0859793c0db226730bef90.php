<?php

/* atur-anggota.html */
class __TwigTemplate_8953316b160eb06c74bdb205c0a067fd9102cae83f0859793c0db226730bef90 extends Twig_Template
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
        echo "Tambah Anggota - ";
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
        <h3>";
        // line 10
        echo anchor("kelompok", "Kelompok");
        echo " / Tambah Anggota</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("tugas");
        echo "

        <table class=\"table table-striped datatable\">
            <thead>
                <tr> 
                    <th></th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["siswa"]) ? $context["siswa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 26
            echo "                ";
            if ((ada_kelompok($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "siswa_id")) == false)) {
                // line 27
                echo "                <tr>
                    <td>
                        <span>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nama_siswa"), "html", null, true);
                echo "</span>
                    </td>
                    <td>
                      <span>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nama_kelas"), "html", null, true);
                echo "</span>
                    </td>
                    <td>
                        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, site_url(((((("kelompok/update_kelompok_anggota/" . (isset($context["kelompok_id"]) ? $context["kelompok_id"] : null)) . "/") . $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "siswa_id")) . "/") . $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "kelas_id"))), "html", null, true);
                echo "\">Tambahkan</a>
                    </td>
                </tr>
                ";
            }
            // line 39
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
        </table>

        <br>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "atur-anggota.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 40,  97 => 39,  90 => 35,  84 => 32,  78 => 29,  74 => 27,  71 => 26,  67 => 25,  52 => 13,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
