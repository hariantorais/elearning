<?php

/* detail_kelompok.html */
class __TwigTemplate_b4914db28efb7e3fb88d6a2aa90c16d2feb823454927183d581a166c0d8b3305 extends Twig_Template
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
        echo "Anggota ";
        echo twig_escape_filter($this->env, (isset($context["nama_kelompok"]) ? $context["nama_kelompok"] : null), "html", null, true);
        echo " - ";
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
        echo " / ";
        echo anchor(("kelompok/detail/" . (isset($context["kelompok_id"]) ? $context["kelompok_id"] : null)), strtoupper((isset($context["nama_kelompok"]) ? $context["nama_kelompok"] : null)));
        echo " / Anggota</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("tugas");
        echo "
        ";
        // line 14
        if (((is_pengajar() == true) || (is_admin() == true))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, site_url(((("kelompok/atur_anggota/" . (isset($context["kelas_id"]) ? $context["kelas_id"] : null)) . "/") . (isset($context["kelompok_id"]) ? $context["kelompok_id"] : null))), "html", null, true);
            echo "\" class=\"btn btn-success\">
            Tambah Anggota
        </a>

        
        <br><br>
        ";
        }
        // line 22
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
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["siswa"]) ? $context["siswa"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["no"] => $context["s"]) {
            // line 34
            echo "                <tr>
                    <td>#";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
                    <td>
                        <span>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nama_siswa"), "html", null, true);
            echo "</span>
                    </td>
                    <td>
                      <span>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nama_kelas"), "html", null, true);
            echo "</span>
                    </td>
                    <td>
                        ";
            // line 43
            if ((is_admin() || is_pengajar())) {
                // line 44
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, site_url(((((("kelompok/keluarkan_anggota/" . (isset($context["kelompok_id"]) ? $context["kelompok_id"] : null)) . "/") . $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "siswa_id")) . "/") . (isset($context["kelas_id"]) ? $context["kelas_id"] : null))), "html", null, true);
                echo "\">Keluarkan</a>
                        ";
            }
            // line 46
            echo "                    </td>
                </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>

        <br>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "detail_kelompok.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 49,  131 => 46,  125 => 44,  123 => 43,  117 => 40,  111 => 37,  106 => 35,  103 => 34,  86 => 33,  73 => 22,  62 => 15,  60 => 14,  56 => 13,  48 => 10,  44 => 8,  41 => 7,  32 => 4,  29 => 3,);
    }
}
