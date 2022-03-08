<?php

/* detail-jawaban-ganda.html */
class __TwigTemplate_5e63717e47f71e2fed73b42dfafbc7c4b6dca9a2b679b6e87b7127ae9a6b3492 extends Twig_Template
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
        echo "<h4>Detail Jawaban</h4>

";
        // line 14
        if (((isset($context["mode"]) ? $context["mode"] : null) == "print")) {
            // line 15
            echo "<table class=\"table table-condensed table-striped\">
    <tbody>
        <tr>
            <td><b>Nis</b></td>
            <td>: ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nis"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td><b>Nama</b></td>
            <td>: ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nama"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td><b>Kelas</b></td>
            <td>: ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "kelas_aktif"), "nama"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td><b>Tugas</b></td>
            <td>: ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
            echo "</td>
        </tr>
    </tbody>
</table>
<br>
";
        }
        // line 37
        echo "
<table class=\"table table-condensed table-striped\">
    <thead>
        <tr>
            <th>Tgl Mengerjakan</th>
            <th>Tgl Selesai</th>
            <th>Lama Pengerjaan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
        // line 48
        echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "mulai")), "html", null, true);
        echo "</td>
            <td>";
        // line 49
        echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "tgl_submit")), "html", null, true);
        echo "</td>
            <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "total_waktu"), "html", null, true);
        echo "</td>
        </tr>
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
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "ip"), "html", null, true);
        echo "</td>
            <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "agent_string"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>
<br>

<table class=\"table table-condensed table-striped\">
    <thead>
        <tr>
            <th>Jml soal</th>
            <th>Jml benar</th>
            <th>Jml salah</th>
            <th>Jml kosong</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
        // line 84
        echo twig_escape_filter($this->env, count($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "pertanyaan")), "html", null, true);
        echo "</td>
            <td>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jml_benar"), "html", null, true);
        echo "</td>
            <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jml_salah"), "html", null, true);
        echo "</td>
            <td>";
        // line 87
        echo twig_escape_filter($this->env, (((count($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "pertanyaan")) != ($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jml_benar") + $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jml_salah")))) ? ((count($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "pertanyaan")) - ($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jml_benar") + $this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jml_salah")))) : (0)), "html", null, true);
        echo "</td>
            <td><b>";
        // line 88
        echo twig_escape_filter($this->env, round($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "nilai"), 2), "html", null, true);
        echo "</b></td>
        </tr>
    </tbody>
</table>
<br>

<table class=\"table table-condensed\">
    <thead>
        <tr>
            <th colspan=\"2\">List Jawaban</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 101
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
            // line 102
            echo "        <tr id=\"pertanyaan-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
            echo "\">
            <td style=\"width:30px;\">
                <b>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo ".</b>
                <br>
                ";
            // line 106
            if ((get_jawaban($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jawaban"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) == get_kunci_pilihan($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan")))) {
                // line 107
                echo "                <span class=\"text-error\"><i class=\"icon icon-ok\"></i></span>
                ";
            } else {
                // line 109
                echo "                <span class=\"text-error\"><i class=\"icon icon-remove\"></i></span>
                ";
            }
            // line 111
            echo "            </td>
            <td>
                <div class=\"pertanyaan\">
                    ";
            // line 114
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
            echo "
                </div>

                <div id=\"pilihan-";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
            echo "\">
                    <table class=\"table table-condensed table-striped\">
                        <tbody>
                            ";
            // line 120
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan"));
            foreach ($context['_seq'] as $context["_key"] => $context["pil"]) {
                if ((!twig_test_empty($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten")))) {
                    // line 121
                    echo "                            <tr>
                                <td style=\"width:15px;\"><b>";
                    // line 122
                    echo twig_escape_filter($this->env, get_abjad($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "urutan")), "html", null, true);
                    echo "</b></td>
                                <td>
                                    ";
                    // line 124
                    echo $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten");
                    echo "

                                    <ul class=\"unstyled inline\" style=\"margin-bottom: 0px;margin-left: -5px;\">
                                        ";
                    // line 127
                    if (($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 1)) {
                        // line 128
                        echo "                                            <li><small class=\"text-warning\"><i class=\"icon icon-star\"></i> Kunci Jawaban</small></li>
                                        ";
                    }
                    // line 130
                    echo "                                        ";
                    if ((is_pilih($this->getAttribute((isset($context["history"]) ? $context["history"] : null), "jawaban"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id")) == true)) {
                        // line 131
                        echo "                                            <li><small class=\"text-success\"><i class=\"icon-hand-up\"></i> Jawaban Siswa</small></li>
                                        ";
                    }
                    // line 133
                    echo "                                    </ul>
                                </td>
                            </tr>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pil'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                        </tbody>
                    </table>
                </div>

            </td>
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
        // line 145
        echo "    </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "detail-jawaban-ganda.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 145,  280 => 137,  270 => 133,  266 => 131,  263 => 130,  259 => 128,  257 => 127,  251 => 124,  246 => 122,  243 => 121,  238 => 120,  232 => 117,  226 => 114,  221 => 111,  217 => 109,  213 => 107,  211 => 106,  206 => 104,  200 => 102,  183 => 101,  167 => 88,  163 => 87,  159 => 86,  155 => 85,  151 => 84,  130 => 66,  126 => 65,  108 => 50,  104 => 49,  100 => 48,  87 => 37,  78 => 31,  71 => 27,  64 => 23,  57 => 19,  51 => 15,  49 => 14,  45 => 12,  39 => 10,  37 => 9,  34 => 8,  28 => 4,  25 => 2,  23 => 1,);
    }
}
