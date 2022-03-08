<?php

/* print-nilai.html */
class __TwigTemplate_ad07c48e0e75351b5bfb78dc8935d056a7e64b64939a05142a0f34547c8ad611 extends Twig_Template
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
        echo "    Print nilai - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<b>Nilai ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel"), "nama"), "html", null, true);
        echo "</b>

";
        // line 10
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) {
            // line 11
            echo "<table class=\"table table-bordered table-striped\">
    <thead>
        <tr>
            <th width=\"5%\">No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Kelas</th>
            ";
            // line 18
            if (((isset($context["tampil_jawaban"]) ? $context["tampil_jawaban"] : null) == 1)) {
                // line 19
                echo "            <th>Jawaban (no_soal. kunci:jawaban, ...)</th>
            ";
            }
            // line 21
            echo "            <th>Benar</th>
            <th>Salah</th>
            <th>Kosong</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 28
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
                // line 29
                echo "        <tr>
            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ".</td>
            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nis"), "html", null, true);
                echo "</td>
            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nama"), "html", null, true);
                echo "</td>
            <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "kelas_aktif"), "nama"), "html", null, true);
                echo "</td>
            ";
                // line 34
                if (((isset($context["tampil_jawaban"]) ? $context["tampil_jawaban"] : null) == 1)) {
                    // line 35
                    echo "            <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "tampil_jawaban"), "html", null, true);
                    echo "</td>
            ";
                }
                // line 37
                echo "            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "jml_benar"), "html", null, true);
                echo "</td>
            <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "jml_salah"), "html", null, true);
                echo "</td>
            <td>";
                // line 39
                echo twig_escape_filter($this->env, (((count($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "pertanyaan_id")) != ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "jml_benar") + $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "jml_salah")))) ? (abs((count($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "pertanyaan_id")) - ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "jml_benar") + $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "history"), "value"), "jml_salah"))))) : (0)), "html", null, true);
                echo "</td>
            <td>";
                // line 40
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
            // line 43
            echo "    </tbody>
</table>
";
        }
        // line 46
        echo "
";
        // line 47
        if ((($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 2) || ($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 1))) {
            // line 48
            echo "<table class=\"table table-bordered table-striped\">
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
            // line 59
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
                // line 60
                echo "        <tr>
            <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ".</td>
            <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nis"), "html", null, true);
                echo "</td>
            <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nama"), "html", null, true);
                echo "</td>
            <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "kelas_aktif"), "nama"), "html", null, true);
                echo "</td>
            <td>";
                // line 65
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
            // line 68
            echo "    </tbody>
</table>
";
        }
    }

    public function getTemplateName()
    {
        return "print-nilai.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 68,  209 => 65,  205 => 64,  201 => 63,  197 => 62,  193 => 61,  190 => 60,  173 => 59,  160 => 48,  158 => 47,  155 => 46,  150 => 43,  133 => 40,  129 => 39,  125 => 38,  120 => 37,  114 => 35,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  93 => 29,  76 => 28,  67 => 21,  63 => 19,  61 => 18,  52 => 11,  50 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
