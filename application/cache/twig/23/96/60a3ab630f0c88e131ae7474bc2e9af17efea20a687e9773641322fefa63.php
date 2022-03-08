<?php

/* export-excel-nilai.html */
class __TwigTemplate_239660a3ab630f0c88e131ae7474bc2e9af17efea20a687e9773641322fefa63 extends Twig_Template
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
        echo "<p><b>Nilai ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel"), "nama"), "html", null, true);
        echo "</b></p>

";
        // line 3
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) {
            // line 4
            echo "<table border=\"1\">
    <thead>
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Kelas</th>
            ";
            // line 11
            if (((isset($context["tampil_jawaban"]) ? $context["tampil_jawaban"] : null) == 1)) {
                // line 12
                echo "            <th>Jawaban (no_soal. kunci:jawaban, ...)</th>
            ";
            }
            // line 14
            echo "            <th>Benar</th>
            <th>Salah</th>
            <th>Kosong</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data_nilai"]) ? $context["data_nilai"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 22
                echo "        <tr>
            <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ".</td>
            <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nis"), "html", null, true);
                echo "</td>
            <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nama"), "html", null, true);
                echo "</td>
            <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "kelas_aktif"), "nama"), "html", null, true);
                echo "</td>
            ";
                // line 27
                if (((isset($context["tampil_jawaban"]) ? $context["tampil_jawaban"] : null) == 1)) {
                    // line 28
                    echo "            <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "tampil_jawaban"), "html", null, true);
                    echo "</td>
            ";
                }
                // line 30
                echo "            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "jml_benar"), "html", null, true);
                echo "</td>
            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "jml_salah"), "html", null, true);
                echo "</td>
            <td>";
                // line 32
                echo twig_escape_filter($this->env, (((count($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "pertanyaan_id")) != ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "jml_benar") + $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "jml_salah")))) ? ((count($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "pertanyaan_id")) - ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "jml_benar") + $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "jml_salah")))) : (0)), "html", null, true);
                echo "</td>
            <td>";
                // line 33
                echo twig_escape_filter($this->env, round($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "nilai"), 2), "html", null, true);
                echo "</td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    </tbody>
</table>
";
        }
        // line 39
        echo "
";
        // line 40
        if ((($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 2) || ($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 1))) {
            // line 41
            echo "<table border=\"1\">
    <thead>
        <tr>
            <th width=\"5%\">No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data_siswa"]) ? $context["data_siswa"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 53
                echo "        <tr>
            <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ".</td>
            <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nis"), "html", null, true);
                echo "</td>
            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nama"), "html", null, true);
                echo "</td>
            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "kelas_aktif"), "nama"), "html", null, true);
                echo "</td>
            <td>";
                // line 58
                echo twig_escape_filter($this->env, round($this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nilai"), "nilai"), 2), "html", null, true);
                echo "</td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    </tbody>
</table>
";
        }
    }

    public function getTemplateName()
    {
        return "export-excel-nilai.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 61,  186 => 58,  182 => 57,  178 => 56,  174 => 55,  170 => 54,  167 => 53,  150 => 52,  137 => 41,  135 => 40,  132 => 39,  127 => 36,  110 => 33,  106 => 32,  102 => 31,  97 => 30,  91 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  70 => 22,  53 => 21,  44 => 14,  40 => 12,  38 => 11,  29 => 4,  27 => 3,  19 => 1,);
    }
}
