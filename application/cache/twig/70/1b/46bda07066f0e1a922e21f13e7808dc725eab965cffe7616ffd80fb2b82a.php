<?php

/* detail-siswa.html */
class __TwigTemplate_701b46bda07066f0e1a922e21f13e7808dc725eab965cffe7616ffd80fb2b82a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nama"), "html", null, true);
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
        if (is_admin()) {
            // line 11
            echo "        <h3>";
            echo anchor(("siswa/index/" . (isset($context["status_id"]) ? $context["status_id"] : null)), "Data Siswa");
            echo " / Detail Siswa</h3>
        ";
        } else {
            // line 13
            echo "        <h3>";
            echo anchor("siswa/filter", "Filter Siswa");
            echo " / Detail Siswa</h3>
        ";
        }
        // line 15
        echo "    </div>
    <div class=\"module-body\">
        ";
        // line 17
        echo get_flashdata("siswa");
        echo "

        ";
        // line 19
        if (($this->getAttribute((isset($context["siswa_login"]) ? $context["siswa_login"] : null), "id") != get_sess_data("login", "id"))) {
            // line 20
            echo "        <div class=\"row-fluid\">
            <div class=\"span4\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-default btn-sm\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, site_url(("message/to/siswa/" . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id"))), "html", null, true);
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
                <strong>Profil Siswa</strong>
                ";
        // line 33
        if (is_admin()) {
            // line 34
            echo "                <div class=\"btn-group pull-right\" style=\"margin-top:-4px;\">
                    ";
            // line 35
            echo anchor(((("siswa/edit_profile/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")), "Edit Profil", array("class" => "siswa-iframe-4 btn btn-small btn-primary", "title" => "Edit Profil Siswa"));
            echo "
                    ";
            // line 36
            echo anchor(((("siswa/edit_picture/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")), "Edit Foto", array("class" => "siswa-iframe-5 btn btn-small btn-primary", "title" => "Edit Foto Siswa"));
            echo "
                    ";
            // line 37
            if (is_admin()) {
                // line 38
                echo "                    ";
                echo anchor(("login/login_log/" . $this->getAttribute((isset($context["siswa_login"]) ? $context["siswa_login"] : null), "id")), "Login log", array("class" => "btn btn-small btn-default", "title" => "Login log"));
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
                        <th bgcolor=\"#FBFBFB\" width=\"25%\" style=\"border-top: 0px;\">NIS</th>
                        <td style=\"border-top: 0px;\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nis"), "html", null, true);
        echo "</td>
                        <td rowspan=\"5\" width=\"15%\" style=\"border-top: 0px;\">
                            <img style=\"width:113px;\" class=\"img-polaroid\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "foto"), "medium", $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "jenis_kelamin")), "html", null, true);
        echo "\">
                        </td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Nama</th>
                        <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "nama"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Jenis Kelamin</th>
                        <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "jenis_kelamin"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Tahun Masuk</th>
                        <td colspan=\"2\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "tahun_masuk"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Tempat Lahir</th>
                        <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "tempat_lahir"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Tanggal Lahir</th>
                        <td>";
        // line 70
        echo twig_escape_filter($this->env, (((!twig_test_empty($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "tgl_lahir")))) ? (tgl_indo($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "tgl_lahir"))) : ("")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Agama</th>
                        <td colspan=\"2\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "agama"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Alamat</th>
                        <td colspan=\"2\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "alamat"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th bgcolor=\"#FBFBFB\">Status</th>
                        <td colspan=\"2\">
                            ";
        // line 83
        if (($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "status_id") == 0)) {
            // line 84
            echo "                                Pending
                            ";
        } elseif (($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "status_id") == 1)) {
            // line 86
            echo "                                Aktif
                            ";
        } elseif (($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "status_id") == 2)) {
            // line 88
            echo "                                Blocking
                            ";
        } elseif (($this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "status_id") == 3)) {
            // line 90
            echo "                                Alumni
                            ";
        }
        // line 92
        echo "                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class=\"row-fluid\">
            <div class=\"span6\">
                <div class=\"panel panel-default\" id=\"riwayat-kelas\">
                    <div class=\"panel-heading\">
                        <strong>Riwayat Kelas</strong>
                        ";
        // line 103
        if ((is_admin() && ((isset($context["status_id"]) ? $context["status_id"] : null) != 3))) {
            // line 104
            echo "                        <!-- <div class=\"btn-group pull-right\" style=\"margin-top:-4px;\">
                            ";
            // line 105
            echo anchor(((("siswa/moved_class/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")), "Pindah Kelas", array("class" => "siswa-iframe btn btn-small btn-primary", "title" => "Pindah siswa ke Kelas lain"));
            echo "
                        </div> -->
                        ";
        }
        // line 108
        echo "                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th width=\"5%\">No</th>
                                <th>Kelas</th>
                                ";
        // line 115
        if (((isset($context["status_id"]) ? $context["status_id"] : null) != 3)) {
            // line 116
            echo "                                    <th>Aktif</th>
                                ";
        }
        // line 118
        echo "                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["siswa_kelas"]) ? $context["siswa_kelas"] : null), "results"));
        foreach ($context['_seq'] as $context["no"] => $context["v"]) {
            // line 122
            echo "                            <tr>
                                <td>";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["no"]) ? $context["no"] : null), "html", null, true);
            echo ".</td>
                                <td>
                                    ";
            // line 125
            echo twig_escape_filter($this->env, get_row_data("kelas_model", "retrieve", array(0 => $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "kelas_id"), 1 => true), "nama"), "html", null, true);
            echo "
                                </td>
                                ";
            // line 127
            if (((isset($context["status_id"]) ? $context["status_id"] : null) != 3)) {
                // line 128
                echo "                                <td>
                                    ";
                // line 129
                if (($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "aktif") == 1)) {
                    // line 130
                    echo "                                        <i class=\"icon icon-ok\"></i>
                                    ";
                }
                // line 132
                echo "                                </td>
                                ";
            }
            // line 134
            echo "                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            ";
        // line 141
        if (is_admin()) {
            // line 142
            echo "            <div class=\"span6\">
                <div class=\"panel panel-default\" id=\"akun\">
                    <div class=\"panel-heading\">
                        <strong>Akun Login</strong>
                        <div class=\"btn-group pull-right\" style=\"margin-top:-4px;\">
                            ";
            // line 147
            echo anchor(((("siswa/edit_username/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")), "Edit Username", array("class" => "siswa-iframe-2 btn btn-small btn-primary", "title" => "Edit Username Siswa"));
            echo "
                            ";
            // line 148
            echo anchor(((("siswa/edit_password/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : null), "id")), "Edit Password", array("class" => "siswa-iframe-3 btn btn-small btn-primary", "title" => "Edit Password Siswa"));
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
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa_login"]) ? $context["siswa_login"] : null), "username"), "html", null, true);
            echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th bgcolor=\"#FBFBFB\">Password</th>
                                    <td>
                                        ";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa_login"]) ? $context["siswa_login"] : null), "password"), "html", null, true);
            echo "
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            ";
        }
        // line 172
        echo "        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "detail-siswa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 172,  329 => 163,  320 => 157,  308 => 148,  304 => 147,  297 => 142,  295 => 141,  288 => 136,  281 => 134,  277 => 132,  273 => 130,  271 => 129,  268 => 128,  266 => 127,  261 => 125,  256 => 123,  253 => 122,  249 => 121,  244 => 118,  240 => 116,  238 => 115,  229 => 108,  223 => 105,  220 => 104,  218 => 103,  205 => 92,  201 => 90,  197 => 88,  193 => 86,  189 => 84,  187 => 83,  179 => 78,  172 => 74,  165 => 70,  158 => 66,  151 => 62,  144 => 58,  137 => 54,  129 => 49,  124 => 47,  117 => 42,  113 => 40,  107 => 38,  105 => 37,  101 => 36,  97 => 35,  94 => 34,  92 => 33,  86 => 29,  77 => 23,  72 => 20,  70 => 19,  65 => 17,  61 => 15,  55 => 13,  49 => 11,  47 => 10,  43 => 8,  40 => 7,  32 => 4,  29 => 3,);
    }
}
