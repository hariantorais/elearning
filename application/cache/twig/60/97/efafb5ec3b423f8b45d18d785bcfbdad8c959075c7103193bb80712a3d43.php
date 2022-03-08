<?php

/* pantau-ujian.html */
class __TwigTemplate_6097efafb5ec3b423f8b45d18d785bcfbdad8c959075c7103193bb80712a3d43 extends Twig_Template
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
        echo "Pantau Ujian - ";
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
        echo " / ";
        echo anchor(((("tugas/" . ((($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 2)) ? ("koreksi") : ("nilai"))) . "/") . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")), "Lihat Nilai");
        echo " / Pantau Ujian</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("tugas");
        echo "

        <div class=\"bs-callout bs-callout-info\">
            <div class=\"btn-group pull-right\" style=\"margin-top:-5px;\">
                ";
        // line 17
        echo anchor(((("tugas/edit/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon icon-edit\"></i> Edit Tugas", array("class" => "btn btn-default"));
        echo "
                ";
        // line 18
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 0)) {
            // line 19
            echo "                    ";
            echo anchor(((("tugas/terbitkan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-ok\"></i> Terbitkan", array("class" => "btn btn-success btn-small"));
            echo "
                ";
        } elseif (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 1)) {
            // line 21
            echo "                    ";
            echo anchor(((("tugas/tutup/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-minus\"></i> Tutup", array("class" => "btn btn-danger btn-small"));
            echo "
                ";
        }
        // line 23
        echo "            </div>
            <b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#detail-tugas\"><i class=\"icon-info-sign\" style=\"line-height: 0px;\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul")), "html", null, true);
        echo "</a></b>

            <div id=\"detail-tugas\" class=\"collapse\" style=\"margin-top: 5px;\">
                <table class=\"table\">
                    <tr>
                        <th style=\"border-top: none;\" width=\"15%\">Tipe</th>
                        <td style=\"border-top: none;\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_label"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Judul</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Matapelajaran</th>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel"), "nama"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>
                            <ul class=\"unstyled inline\" style=\"margin-left: -5px;margin-bottom: 0px;\">
                                ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "tugas_kelas"));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 45
            echo "                                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Info</th>
                        <td>";
        // line 52
        echo $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "info");
        echo "</td>
                    </tr>
                    <tr>
                        <th>Durasi</th>
                        <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "durasi"), "html", null, true);
        echo " Menit</td>
                    </tr>
                </table>
            </div>

        </div>
        <br>

        <table class=\"table table-striped datatable\">
            <thead>
                <tr>
                    <th>Siswa</th>
                    <th width=\"60%\">Informasi</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["retrieve_all"]) ? $context["retrieve_all"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 73
            echo "                <tr>
                    <td>
                        <img style=\"height:20px;width:20px; margin-right: 10px;\" class=\"img-polaroid img-circle pull-left\" src=\"";
            // line 75
            echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "foto"), "medium", $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "jenis_kelamin")), "html", null, true);
            echo "\">
                        <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, site_url(((("siswa/detail/" . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "status_id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "id"))), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nama"), "html", null, true);
            echo " ";
            echo (((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nis")))) ? ((("<span class=\"text-muted\">(" . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "nis")) . ")</span>")) : (""));
            echo "</b></a>
                        <br> ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "kelas_aktif"), "nama"), "html", null, true);
            echo " <span class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "kelas_aktif"), "id"), "html", null, true);
            echo ")</span>
                    </td>
                    <td>
                        <table class=\"table table-condensed table-bordered\">
                            <tr>
                                <td width=\"20%\">IP</td>
                                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "ip"), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td>Agent</td>
                                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "agent_string"), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td>Mulai</td>
                                <td>";
            // line 91
            echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "mulai")), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td>Selesai</td>
                                <td>";
            // line 95
            echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "selesai")), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td>Sisa waktu</td>
                                <td>";
            // line 99
            echo $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "sisa_menit_string");
            echo "</td>
                            </tr>
                            <tr>
                                <td colspan=\"2\">
                                    <div class=\"btn-group\">
                                        ";
            // line 104
            echo anchor(((("tugas/pantau/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/jawaban_sementara/") . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "id")), "Lihat jawaban sementara", array("class" => "btn btn-small btn-primary iframe-jawaban-sementara"));
            echo "
                                        <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, site_url(((("tugas/pantau/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/reset/") . $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "siswa"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-small btn-default\" onclick=\"return confirm('Anda yakin ingin mengulang proses ujian siswa tersebut?')\" data-toggle=\"tooltip\" title=\"Ulang proses ujian siswa<br>dan anggap belum mengerjakan.\">Reset</a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "            </tbody>
        </table>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "pantau-ujian.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 113,  231 => 105,  227 => 104,  219 => 99,  212 => 95,  205 => 91,  198 => 87,  191 => 83,  180 => 77,  172 => 76,  168 => 75,  164 => 73,  160 => 72,  141 => 56,  134 => 52,  127 => 47,  118 => 45,  114 => 44,  105 => 38,  98 => 34,  91 => 30,  82 => 24,  79 => 23,  73 => 21,  67 => 19,  65 => 18,  61 => 17,  54 => 13,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
