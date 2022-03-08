<?php

/* pantau-jawaban-sementara.html */
class __TwigTemplate_56f92139ac84035667c42ceca27b6273030ae5b11b03f239cc5e5155d637885e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-iframe.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-iframe.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h4>Jawaban Sementara</h4>

";
        // line 6
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) {
            // line 7
            echo "
<table class=\"table table-condensed table-striped\">
    <thead>
        <tr>
            <th>Jml soal</th>
            <th>Terjawab</th>
            <th>Kosong</th>
            <th>Benar</th>
            <th>Salah</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, count((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null)), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, count((isset($context["jawaban"]) ? $context["jawaban"] : null)), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, (count((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null)) - count((isset($context["jawaban"]) ? $context["jawaban"] : null))), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["jml_benar"]) ? $context["jml_benar"] : null), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["jml_salah"]) ? $context["jml_salah"] : null), "html", null, true);
            echo "</td>
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
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null));
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
                // line 38
                echo "        <tr id=\"pertanyaan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
            <td style=\"width:30px;\">
                <b>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ".</b>
                <br>
                ";
                // line 42
                if ((get_jawaban((isset($context["jawaban"]) ? $context["jawaban"] : null), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) == get_kunci_pilihan($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan")))) {
                    // line 43
                    echo "                <span class=\"text-error\"><i class=\"icon icon-ok\"></i></span>
                ";
                } else {
                    // line 45
                    echo "                <span class=\"text-error\"><i class=\"icon icon-remove\"></i></span>
                ";
                }
                // line 47
                echo "            </td>
            <td>
                <div class=\"pertanyaan\">
                    ";
                // line 50
                echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
                echo "
                </div>

                <div id=\"pilihan-";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                    <table class=\"table table-condensed table-striped\">
                        <tbody>
                            ";
                // line 56
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan"));
                foreach ($context['_seq'] as $context["_key"] => $context["pil"]) {
                    if ((!twig_test_empty($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten")))) {
                        // line 57
                        echo "                            <tr>
                                <td style=\"width:15px;\"><b>";
                        // line 58
                        echo twig_escape_filter($this->env, get_abjad($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "urutan")), "html", null, true);
                        echo "</b></td>
                                <td>
                                    ";
                        // line 60
                        echo $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten");
                        echo "

                                    <ul class=\"unstyled inline\" style=\"margin-bottom: 0px;margin-left: -5px;\">
                                        ";
                        // line 63
                        if (($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 1)) {
                            // line 64
                            echo "                                            <li><small class=\"text-warning\"><i class=\"icon icon-star\"></i> Kunci Jawaban</small></li>
                                        ";
                        }
                        // line 66
                        echo "                                        ";
                        if ((is_pilih((isset($context["jawaban"]) ? $context["jawaban"] : null), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id")) == true)) {
                            // line 67
                            echo "                                            <li><small class=\"text-success\"><i class=\"icon-hand-up\"></i> Jawaban Siswa</small></li>
                                        ";
                        }
                        // line 69
                        echo "                                    </ul>
                                </td>
                            </tr>
                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pil'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
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
            // line 81
            echo "    </tbody>
</table>

";
        } elseif (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 2)) {
            // line 85
            echo "
<table class=\"table table-condensed table-striped\">
    <thead>
        <tr>
            <th>Jml soal</th>
            <th>Terjawab</th>
            <th>Kosong</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
            // line 96
            echo twig_escape_filter($this->env, count((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null)), "html", null, true);
            echo "</td>
            <td>";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["jml_terjawab"]) ? $context["jml_terjawab"] : null), "html", null, true);
            echo "</td>
            <td>";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["jml_kosong"]) ? $context["jml_kosong"] : null), "html", null, true);
            echo "</td>
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
            // line 111
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null));
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
                // line 112
                echo "        <tr id=\"pertanyaan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
            <td style=\"width:30px;\">
                <b>";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ".</b>
            </td>
            <td>
                <div class=\"pertanyaan\">
                    ";
                // line 118
                echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
                echo "
                </div>

                <b>Jawaban :</b>
                ";
                // line 122
                echo get_jawaban((isset($context["jawaban"]) ? $context["jawaban"] : null), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"));
                echo "
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
            // line 127
            echo "    </tbody>
</table>

";
        }
        // line 131
        echo "
";
    }

    public function getTemplateName()
    {
        return "pantau-jawaban-sementara.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 131,  301 => 127,  282 => 122,  275 => 118,  268 => 114,  262 => 112,  245 => 111,  229 => 98,  225 => 97,  221 => 96,  208 => 85,  202 => 81,  181 => 73,  171 => 69,  167 => 67,  164 => 66,  160 => 64,  158 => 63,  152 => 60,  147 => 58,  144 => 57,  139 => 56,  133 => 53,  127 => 50,  122 => 47,  118 => 45,  114 => 43,  112 => 42,  107 => 40,  101 => 38,  84 => 37,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  37 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
