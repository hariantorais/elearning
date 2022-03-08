<?php

/* manajemen-tugas.html */
class __TwigTemplate_7a536c140678820f92a9bd036d430ad0b4a158cc409334292dedc2b448afbbf2 extends Twig_Template
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
        echo "Manajemen Soal Tugas - ";
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
        echo anchor("tugas", "Tugas");
        echo " / Manajemen Soal Ujian</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("tugas");
        echo "

        <div class=\"pull-right\">
                    ";
        // line 16
        echo anchor(((("tugas/edit/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon icon-edit\"></i> Edit", array("class" => "btn btn-default"));
        echo "
                    ";
        // line 17
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 0)) {
            // line 18
            echo "                        ";
            echo anchor(((("tugas/terbitkan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-ok\"></i> Terbitkan", array("class" => "btn btn-success btn-small"));
            echo "
                    ";
        } elseif (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 1)) {
            // line 20
            echo "                        ";
            echo anchor(((("tugas/tutup/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-minus\"></i> Tutup", array("class" => "btn btn-danger btn-small"));
            echo "
                    ";
        }
        // line 22
        echo "              </div>

            
            <b><a title=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel"), "nama"), "html", null, true);
        echo ", ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "tugas_kelas"));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "durasi"), "html", null, true);
        echo " Menit\" class=\"as-link\" data-toggle=\"collapse\" data-target=\"#detail-tugas\"><i class=\"icon-info-sign\" style=\"line-height: 0px;\"></i></a> ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul")), "html", null, true);
        echo "</b>

            <div id=\"detail-tugas\" class=\"collapse\" style=\"margin-top: 5px;\">
              
        </div>
        <br>

        <div class=\"btn-group\">
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, site_url(("tugas/tambah_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary iframe-pertanyaan\" title=\"Tambah Pertanyaan\">Tambah Pertanyaan</a>
         <!--    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, site_url(("tugas/copy_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary iframe-copy-pertanyaan\" title=\"Copy Pertanyaan\">Copy Pertanyaan</a> -->
        </div>
        <br><br>

        <table class=\"table\">
            <tbody>
                ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 41
            echo "                <tr id=\"pertanyaan-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
            echo "\">
                    <td width=\"5%\"><b>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "urutan"), "html", null, true);
            echo ".</b></td>
                    <td>
                        <div class=\"pertanyaan\">
                            <div class=\"btn-group pull-right\" style=\"margin-left:10px;\">
                                ";
            // line 46
            if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) {
                // line 47
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, site_url(((("tugas/tambah_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                echo "\" class=\"btn btn-small btn-default iframe-pilihan\" data-toggle=\"tooltip\" title=\"Tambah Pilihan\"><i class=\"icon-tasks\"></i></a>
                                ";
            }
            // line 49
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, site_url(((("tugas/edit_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-small btn-default iframe-pertanyaan\" data-toggle=\"tooltip\" title=\"Edit Pertanyaan\"><i class=\"icon-edit\"></i></a>
                                <a onclick=\"return confirm('Anda yakin ingin menghapus?')\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, site_url(((((("tugas/hapus_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . enurl_redirect(current_url()))), "html", null, true);
            echo "\" class=\"btn btn-small btn-default\" data-toggle=\"tooltip\" title=\"Hapus Pertanyaan\"><i class=\"icon-trash\"></i></a>
                            </div>

                            ";
            // line 53
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
            echo "
                        </div>

                        ";
            // line 56
            if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) {
                // line 57
                echo "                        <div id=\"pilihan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                            <table class=\"table table-condensed table-striped\">
                                <tbody>
                                    ";
                // line 60
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan"));
                foreach ($context['_seq'] as $context["_key"] => $context["pil"]) {
                    // line 61
                    echo "                                    <tr ";
                    echo ((($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 1)) ? ("class=\"success\"") : (""));
                    echo ">
                                        <td width=\"3%\"><b>(";
                    // line 62
                    echo twig_escape_filter($this->env, get_abjad($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "urutan")), "html", null, true);
                    echo ")</b></td>
                                        <td>
                                            <div class=\"btn-group pull-right\" style=\"margin-left:10px;\">
                                                ";
                    // line 65
                    if (($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 0)) {
                        // line 66
                        echo "                                                    <a href=\"";
                        echo twig_escape_filter($this->env, site_url(((((((("tugas/kunci_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id")) . "/") . enurl_redirect(current_url()))), "html", null, true);
                        echo "\" class=\"btn btn-small btn-default\" data-toggle=\"tooltip\" title=\"Jadikan Kunci\"><i class=\"icon-ok\"></i></a>
                                                ";
                    }
                    // line 68
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, site_url(((((("tugas/edit_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-small btn-default iframe-pilihan\" data-toggle=\"tooltip\" title=\"Edit Pilihan\"><i class=\"icon-edit\"></i></a>
                                                <a onclick=\"return confirm('Anda yakin ingin menghapus?')\" href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, site_url(((((((("tugas/hapus_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id")) . "/") . enurl_redirect(current_url()))), "html", null, true);
                    echo "\" class=\"btn btn-small btn-default\" data-toggle=\"tooltip\" title=\"Hapus Pilihan\"><i class=\"icon-trash\"></i></a>
                                            </div>
                                            ";
                    // line 71
                    echo $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten");
                    echo "

                                            ";
                    // line 73
                    if (($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 1)) {
                        // line 74
                        echo "                                            <b class=\"text-warning\"><i class=\"icon-star\"></i> Kunci Jawaban</b>
                                            ";
                    }
                    // line 76
                    echo "                                        </td>
                                    </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pil'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "                                </tbody>
                            </table>
                        </div>
                        ";
            }
            // line 83
            echo "
                    </td>
                </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            </tbody>
        </table>
        <br>
        ";
        // line 91
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "manajemen-tugas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 91,  237 => 88,  227 => 83,  221 => 79,  213 => 76,  209 => 74,  207 => 73,  202 => 71,  197 => 69,  192 => 68,  186 => 66,  184 => 65,  178 => 62,  173 => 61,  169 => 60,  162 => 57,  160 => 56,  154 => 53,  148 => 50,  143 => 49,  137 => 47,  135 => 46,  128 => 42,  123 => 41,  119 => 40,  110 => 34,  106 => 33,  81 => 25,  76 => 22,  70 => 20,  64 => 18,  62 => 17,  58 => 16,  52 => 13,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
