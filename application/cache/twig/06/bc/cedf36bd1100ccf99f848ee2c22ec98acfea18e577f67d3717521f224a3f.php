<?php

/* detail-jawaban-essay.html */
class __TwigTemplate_06bccedf36bd1100ccf99f848ee2c22ec98acfea18e577f67d3717521f224a3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["set_layout"]) ? $context["set_layout"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((isset($context["mode"]) ? $context["mode"] : null) == "print")) {
            // line 2
            $context["set_layout"] = "layout-print.html";
        } else {
            // line 4
            $context["set_layout"] = "layout-iframe.html";
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        if (twig_test_empty((isset($context["mode"]) ? $context["mode"] : null))) {
            // line 10
            echo "    <a class=\"btn btn-primary pull-right btn-xs\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, site_url((((("tugas/detail_jawaban/" . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")) . "/") . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "?mode=print")), "html", null, true);
            echo "\">Print</a>
";
        }
        // line 12
        echo "
";
        // line 13
        if (((isset($context["sudah_dikoreksi"]) ? $context["sudah_dikoreksi"] : null) == false)) {
            // line 14
            echo "    <h4>Koreksi Jawaban</h4>
";
        } else {
            // line 16
            echo "    <h4>Detail Jawaban</h4>
";
        }
        // line 18
        echo "
";
        // line 19
        if (((isset($context["mode"]) ? $context["mode"] : null) == "print")) {
            // line 20
            echo "<table class=\"table table-condensed table-striped\">
    <tbody>
        <tr>
            <td><b>Nis</b></td>
            <td>: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nis"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td><b>Nama</b></td>
            <td>: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nama"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td><b>Kelas</b></td>
            <td>: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "kelas_aktif"), "nama"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td><b>Tugas</b></td>
            <td>: ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
            echo "</td>
        </tr>
    </tbody>
</table>
<br>
";
        }
        // line 42
        echo "
<table class=\"table table-condensed table-striped\">
    <thead>
        <tr>
            <th>Tgl Mengerjakan</th>
            <th>Tgl Selesai</th>
            <th>Lama Pengerjaan</th>
            ";
        // line 49
        if (((isset($context["sudah_dikoreksi"]) ? $context["sudah_dikoreksi"] : null) == true)) {
            // line 50
            echo "            <th>Nilai</th>
            ";
        }
        // line 52
        echo "        </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
        // line 56
        echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "mulai")), "html", null, true);
        echo "</td>
            <td>";
        // line 57
        echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "tgl_submit")), "html", null, true);
        echo "</td>
            <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "total_waktu"), "html", null, true);
        echo "</td>
            ";
        // line 59
        if (((isset($context["sudah_dikoreksi"]) ? $context["sudah_dikoreksi"] : null) == true)) {
            // line 60
            echo "            <th>";
            echo twig_escape_filter($this->env, round($this->getAttribute((isset($context["nilai"]) ? $context["nilai"] : null), "nilai"), 2), "html", null, true);
            echo "</th>
            ";
        }
        // line 62
        echo "        </tr>
    </tbody>
</table>
<br>

<table class=\"table table-condensed table-striped\">
    <thead>
        <tr>
            <th>IP</th>
            <th>Agent</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "ip"), "html", null, true);
        echo "</td>
            <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "agent_string"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>
<br>

";
        // line 83
        echo form_open(((("tugas/detail_jawaban/" . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")) . "/") . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")));
        echo "
<table class=\"table table-condensed\">
    <thead>
        <tr>
            <th colspan=\"2\">List Jawaban</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "pertanyaan"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 92
            echo "        <tr id=\"pertanyaan-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
            echo "\">
            <td style=\"width:30px;\">
                <b>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo ".</b>
            </td>
            <td>
                <div class=\"pertanyaan\">
                    ";
            // line 98
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
            echo "
                </div>

                <b>Jawaban :</b>
                ";
            // line 102
            echo get_jawaban($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jawaban"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"));
            echo "

                <p><b>Nilai :</b></p>
                ";
            // line 105
            if (((isset($context["mode"]) ? $context["mode"] : null) == "print")) {
                // line 106
                echo "                    <b>";
                echo twig_escape_filter($this->env, get_jawaban($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "nilai"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), "html", null, true);
                echo "</b>
                ";
            } else {
                // line 108
                echo "                    <input type=\"text\" name=\"nilai[";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "]\" style=\"width:50px;\" value=\"";
                echo twig_escape_filter($this->env, get_jawaban($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "nilai"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), "html", null, true);
                echo "\">
                ";
            }
            // line 110
            echo "            </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "    </tbody>
</table>
<hr>
";
        // line 117
        if (((isset($context["sudah_dikoreksi"]) ? $context["sudah_dikoreksi"] : null) == false)) {
            // line 118
            echo "<button class=\"btn btn-primary\" type=\"submit\">Simpan Nilai</button>
";
        } else {
            // line 120
            echo "<button class=\"btn btn-primary\" type=\"submit\">Update Nilai</button>
";
        }
        // line 122
        echo "</form>

";
    }

    public function getTemplateName()
    {
        return "detail-jawaban-essay.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 122,  267 => 120,  263 => 118,  261 => 117,  256 => 114,  239 => 110,  231 => 108,  225 => 106,  223 => 105,  217 => 102,  210 => 98,  203 => 94,  197 => 92,  180 => 91,  169 => 83,  160 => 77,  156 => 76,  140 => 62,  134 => 60,  132 => 59,  128 => 58,  124 => 57,  120 => 56,  114 => 52,  110 => 50,  108 => 49,  99 => 42,  90 => 36,  83 => 32,  76 => 28,  69 => 24,  63 => 20,  61 => 19,  58 => 18,  54 => 16,  50 => 14,  48 => 13,  45 => 12,  39 => 10,  37 => 9,  34 => 8,  28 => 4,  25 => 2,  23 => 1,);
    }
}
