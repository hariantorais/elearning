<?php

/* detail-pengajar.html */
class __TwigTemplate_eee55d9c69784dce413c51105b6b30d1f2c87fc9144a5f00a6520f77def28ddd extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "nama"), "html", null, true);
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
        ";
        // line 10
        if ((is_admin() == true)) {
            // line 11
            echo "        <h3>";
            echo anchor(("pengajar/index/" . (isset($context["status_id"]) ? $context["status_id"] : null)), "Data Pengajar");
            echo " / Detail Pengajar</h3>
        ";
        } else {
            // line 13
            echo "        <h3>";
            echo anchor("pengajar/filter", "Filter Pengajar");
            echo " / Detail Pengajar</h3>
        ";
        }
        // line 15
        echo "    </div>
    <div class=\"module-body\">
        ";
        // line 17
        echo get_flashdata("pengajar");
        echo "

        ";
        // line 19
        if (($this->getAttribute((isset($context["pengajar_login"]) ? $context["pengajar_login"] : null), "id") != get_sess_data("login", "id"))) {
            // line 20
            echo "        <div class=\"row-fluid\">
            <div class=\"span4\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-default btn-sm\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, site_url(("message/to/pengajar/" . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon-comments\"></i> Kirim Pesan</a>
                </div>
            </div>
        </div>
        <br>
        ";
        }
        // line 29
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <strong>Profil pengajar ";
        // line 32
        echo ((($this->getAttribute((isset($context["pengajar_login"]) ? $context["pengajar_login"] : null), "is_admin") == 1)) ? ("<label class=\"label label-warning\">Administrator</label>") : (""));
        echo "</strong>
                ";
        // line 33
        if ((is_admin() == true)) {
            // line 34
            echo "                <div class=\"btn-group pull-right\" style=\"margin-top:-4px;\">
                    ";
            // line 35
            echo anchor(((("pengajar/edit_profile/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Profil", array("class" => "pengajar-iframe-4 btn btn-small btn-primary", "title" => "Edit Profil Pengajar"));
            echo "
                    ";
            // line 36
            echo anchor(((("pengajar/edit_picture/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Foto", array("class" => "pengajar-iframe-5 btn btn-small btn-primary", "title" => "Edit Foto Pengajar"));
            echo "
                    ";
            // line 37
            if (is_admin()) {
                // line 38
                echo "                    ";
                echo anchor(("login/login_log/" . $this->getAttribute((isset($context["pengajar_login"]) ? $context["pengajar_login"] : null), "id")), "Login log", array("class" => "btn btn-small btn-default", "title" => "Login log"));
                echo "
                    ";
            }
            // line 40
            echo "                </div>
                ";
        }
        // line 42
        echo "            </div>
            <div class=\"panel-body\">
                <table class=\"table\">
                    <tr>
                        <td>
                            <table class=\"table\">
                                <tr>
                        <th bgcolor=\"#FBFBFB\" width=\"25%\" style=\"border-top: 0px;\">NIP</th>
                        <td style=\"border-top: 0px;\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "nip"), "html", null, true);
        echo "</td>
                        
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Nama</th>
                        <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "nama"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Jenis Kelamin</th>
                        <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "jenis_kelamin"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Tempat Lahir</th>
                        <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "tempat_lahir"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Tanggal Lahir</th>
                        <td>";
        // line 67
        echo twig_escape_filter($this->env, (((!twig_test_empty($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "tgl_lahir")))) ? (tgl_indo($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "tgl_lahir"))) : ("")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Alamat</th>
                        <td colspan=\"2\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "alamat"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Status</th>
                        <td colspan=\"2\">
                            ";
        // line 76
        if (($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "status_id") == 0)) {
            // line 77
            echo "                                Pending
                            ";
        } elseif (($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "status_id") == 1)) {
            // line 79
            echo "                                Aktif
                            ";
        } elseif (($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "status_id") == 2)) {
            // line 81
            echo "                                Blocking
                            ";
        }
        // line 83
        echo "                        </td>
                    </tr>
                            </table>
                        </td>
                        <td width=\"40%\" style=\"border-top: 0px;\">
                            <img style=\"width:100%;\" class=\"img-polaroid\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "foto"), "medium", $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "jenis_kelamin")), "html", null, true);
        echo "\">
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>

        <div class=\"row-fluid\">
            <div class=\"span12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <strong>Jadwal Mengajar</strong>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table\">
                            <thead>
                                <tr bgcolor=\"#fbfbfb\">
                                    <th>HARI</th>
                                    <th>MATAPELAJARAN DAN JAM</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(get_indo_hari());
        foreach ($context['_seq'] as $context["hari_id"] => $context["h"]) {
            // line 112
            echo "                                <tr>
                                    <th width=\"15%\">";
            // line 113
            echo twig_escape_filter($this->env, (isset($context["h"]) ? $context["h"] : null), "html", null, true);
            echo "</th>
                                    <td>
                                        ";
            // line 115
            if ((is_admin() == true)) {
                // line 116
                echo "                                        ";
                echo anchor(((((("pengajar/add_ampuan/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")) . "/") . (isset($context["hari_id"]) ? $context["hari_id"] : null)), "Tambah", array("class" => "pengajar-iframe btn btn-small btn-primary", "title" => ("Tambah jadwal hari " . (isset($context["h"]) ? $context["h"] : null))));
                echo "
                                        ";
            }
            // line 118
            echo "
                                        ";
            // line 119
            $context["retrieve_all_ma"] = get_row_data("pengajar_model", "retrieve_all_ma", array(0 => (isset($context["hari_id"]) ? $context["hari_id"] : null), 1 => $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id"), 2 => null, 3 => ((((is_pengajar() == true) || (is_siswa() == true))) ? (1) : (null))));
            // line 120
            echo "                                        ";
            if ((!twig_test_empty((isset($context["retrieve_all_ma"]) ? $context["retrieve_all_ma"] : null)))) {
                // line 121
                echo "                                        <table style=\"margin-top:10px;\" class=\"table table-condensed\">
                                            ";
                // line 122
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["retrieve_all_ma"]) ? $context["retrieve_all_ma"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ma"]) {
                    // line 123
                    echo "                                                ";
                    $context["mk"] = get_row_data("mapel_model", "retrieve_kelas", array(0 => $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "mapel_kelas_id")));
                    // line 124
                    echo "                                                ";
                    $context["k"] = get_row_data("kelas_model", "retrieve", array(0 => $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "kelas_id")));
                    // line 125
                    echo "                                                ";
                    $context["m"] = get_row_data("mapel_model", "retrieve", array(0 => $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "mapel_id")));
                    // line 126
                    echo "                                                <tr ";
                    echo ((($this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "aktif") == 0)) ? ("class=\"error text-muted\"") : ("class=\"info text-info\""));
                    echo ">
                                                    <td width=\"15%\">";
                    // line 127
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_mulai"), "H:i"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_selesai"), "H:i"), "html", null, true);
                    echo "</td>
                                                    <td>";
                    // line 128
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
                    echo "</td>
                                                    <td width=\"20%\">";
                    // line 129
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
                    echo "</td>

                                                    ";
                    // line 131
                    if ((is_admin() == true)) {
                        // line 132
                        echo "                                                    <td width=\"10%\">
                                                        ";
                        // line 133
                        echo anchor(((((("pengajar/edit_ampuan/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")) . "/") . $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "id")), "<i class=\"icon-edit\"></i> Edit", array("title" => "Edit Jadwal Ajar", "class" => "pengajar-iframe-6"));
                        echo "
                                                    </td>
                                                    ";
                    }
                    // line 136
                    echo "
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ma'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "                                        </table>
                                        ";
            }
            // line 141
            echo "                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['hari_id'], $context['h'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 150
        if ((is_admin() == true)) {
            // line 151
            echo "        <div class=\"row-fluid\">
            <div class=\"span5\">
                <div class=\"panel panel-default\" id=\"akun\">
                    <div class=\"panel-heading\">
                        <strong>Akun Login</strong>
                        <div class=\"btn-group pull-right\" style=\"margin-top:-4px;\">
                            ";
            // line 157
            echo anchor(((("pengajar/edit_username/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Username", array("class" => "pengajar-iframe-2 btn btn-small btn-primary", "title" => "Edit Username pengajar"));
            echo "
                            ";
            // line 158
            echo anchor(((("pengajar/edit_password/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "id")), "Edit Password", array("class" => "pengajar-iframe-3 btn btn-small btn-primary", "title" => "Edit Password pengajar"));
            echo "
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th width=\"30%\" bgcolor=\"#FBFBFB\" style=\"border-top: 0px;\">Username</th>
                                    <td style=\"border-top: 0px;\">
                                        ";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengajar_login"]) ? $context["pengajar_login"] : null), "username"), "html", null, true);
            echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th bgcolor=\"#FBFBFB\">Password</th>
                                    <td>
                                        *********
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 183
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "detail-pengajar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 183,  350 => 167,  338 => 158,  334 => 157,  326 => 151,  324 => 150,  316 => 144,  308 => 141,  304 => 139,  296 => 136,  290 => 133,  287 => 132,  285 => 131,  280 => 129,  276 => 128,  270 => 127,  265 => 126,  262 => 125,  259 => 124,  256 => 123,  252 => 122,  249 => 121,  246 => 120,  244 => 119,  241 => 118,  235 => 116,  233 => 115,  228 => 113,  225 => 112,  221 => 111,  195 => 88,  188 => 83,  184 => 81,  180 => 79,  176 => 77,  174 => 76,  166 => 71,  159 => 67,  152 => 63,  145 => 59,  138 => 55,  130 => 50,  120 => 42,  116 => 40,  110 => 38,  108 => 37,  104 => 36,  100 => 35,  97 => 34,  95 => 33,  91 => 32,  86 => 29,  77 => 23,  72 => 20,  70 => 19,  65 => 17,  61 => 15,  55 => 13,  49 => 11,  47 => 10,  43 => 8,  40 => 7,  32 => 4,  29 => 3,);
    }
}
