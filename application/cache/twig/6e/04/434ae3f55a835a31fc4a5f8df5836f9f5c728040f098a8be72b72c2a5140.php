<?php

/* tambah-anggota.html */
class __TwigTemplate_6e04434ae3f55a835a31fc4a5f8df5836f9f5c728040f098a8be72b72c2a5140 extends Twig_Template
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
        echo "Daftar Kelompok - ";
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
        echo "/ Anggota Kelompok</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("tugas");
        echo "

        <br>

        <a class=\"btn btn-primary\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(("kelompok/add_anggota/" . (isset($context["kelas_id"]) ? $context["kelas_id"] : null))), "html", null, true);
        echo "\" id=\"btn-submit\">Tambah Anggota </a>
        
           
        <br><br>
        <table class=\"table table-striped datatable\">
            <thead>
                <tr>
                    
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["siswa"]) ? $context["siswa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 32
            echo "                <tr>
                    <td>
                        <span>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nama_siswa"), "html", null, true);
            echo "</span>
                    </td>
                    <td>
                      <span>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nama_kelas"), "html", null, true);
            echo "</span>
                    </td>
                    <td>
                      <a href=\"\" class=\"btn btn-xs btn-danger\">Keluarkan</a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>

        <br>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tambah-anggota.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 44,  90 => 37,  84 => 34,  80 => 32,  76 => 31,  59 => 17,  52 => 13,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
