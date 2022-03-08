<?php

/* export-absen.html */
class __TwigTemplate_ab1065e102e8c54a401d8a01e3fd1679a9a8c096fa612e9639122ea7ffc557db extends Twig_Template
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
        echo "<table>
    <thead>
        <tr>
            <th colspan=\"4\">REKAP KEHADIRAN BELAJAR DARING SISWA</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan=\"4\" align=\"center\"><b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "judul"), "html", null, true);
        echo "</b></td>
        </tr>
        <tr>
            <td colspan=\"4\" align=\"center\">Mapel: <b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "mapel"), "nama"), "html", null, true);
        echo "</b>, Guru: <b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "pembuat"), "nama"), "html", null, true);
        echo "</b> </td>
        </tr>
        <tr>
            <td colspan=\"4\" align=\"center\">Tanggal Terbit: <b>";
        // line 15
        echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "tgl_posting")), "html", null, true);
        echo "</b></td>
        </tr>
    </tbody>
</table>
<br>
<table border=\"1\">
    <thead>
        <tr>
            <th>No</th>
            <th>Waktu Masuk</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absen"]) ? $context["absen"] : null));
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
            // line 31
            echo "        <tr>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo ".</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "waktu"), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "siswa_nama"), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "kelas_nama"), "html", null, true);
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
        // line 39
        echo "    </tbody>
</table>



";
    }

    public function getTemplateName()
    {
        return "export-absen.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 39,  93 => 35,  89 => 34,  85 => 33,  81 => 32,  78 => 31,  61 => 30,  43 => 15,  35 => 12,  29 => 9,  19 => 1,);
    }
}
