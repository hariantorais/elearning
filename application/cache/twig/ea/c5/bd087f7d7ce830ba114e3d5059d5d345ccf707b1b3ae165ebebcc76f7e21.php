<?php

/* welcome.html */
class __TwigTemplate_eac5bd087f7d7ce830ba114e3d5059d5d345ccf707b1b3ae165ebebcc76f7e21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

<div class=\"btn-controls\">
    <div id=\"show-urgent-info\"></div>

    
        <div class=\"span8\">
            <div class=\"visible-desktop alert\"><h4>Assalamu'alaikum. Selamat Datang ";
        // line 11
        echo twig_escape_filter($this->env, get_sess_data("user", "nama"), "html", null, true);
        echo ".</h4></div>
            <table class=\"visible-phone visible-tablet\" width=\"100%\">
                <tr>
                    <td><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, get_url_image_session(get_sess_data("user", "foto"), "medium", get_sess_data("user", "jenis_kelamin")), "html", null, true);
        echo "\" class=\"nav-avatar-welcome img-polaroid\" />
                    </td>
                    <td width=\"70%\">
                                <b style=\"color: black;\">";
        // line 17
        echo twig_escape_filter($this->env, get_sess_data("user", "nama"), "html", null, true);
        echo "</b> <br>
                                ";
        // line 18
        if (is_siswa()) {
            echo "                                
                                Kelas ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pengguna"]) ? $context["pengguna"] : null), "nama_kelas"), "html", null, true);
            echo "
                                ";
        }
        // line 21
        echo "                                ";
        if (is_pengajar()) {
            echo "                                
                                Pengajar
                                ";
        }
        // line 24
        echo "                                ";
        if (is_admin()) {
            echo "                                
                                Pengajar | <span class=\"badge badge-warning\">Administrator</span>
                                ";
        }
        // line 27
        echo "                   
                        ";
        // line 28
        if (is_admin()) {
            // line 29
            echo "                        ";
            echo anchor(((("pengajar/detail/" . get_sess_data("user", "status_id")) . "/") . get_sess_data("user", "id")), "<i style=\"font-size: 16px; color: grey\" class=\"icon-edit\"></i>", array("title" => "Detail Profil"));
            echo "
                        ";
        }
        // line 31
        echo "
                        ";
        // line 32
        if (is_pengajar()) {
            // line 33
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, site_url("login/pp"), "html", null, true);
            echo "\" style=\"text-decoration: none;\"><i style=\"font-size: 16px; color: grey\" class=\"icon-edit\"></i></a>
                        ";
        }
        // line 35
        echo "
                        ";
        // line 36
        if (is_siswa()) {
            // line 37
            echo "                        <!-- ";
            echo anchor("login/pp", "<i style=\"font-size: 16px; color: grey\" class=\"icon-edit\"></i>");
            echo " -->
                        ";
        }
        // line 39
        echo "                    </td>
                </tr>
            </table>
            <div class=\"visible-tablet visible-phone\">
                <br><br>
            </div>
            <li class=\"nav-user dropdown visible-phone\">
                <ul class=\"dropdown-menu\">
                    ";
        // line 47
        if (is_admin()) {
            // line 48
            echo "                    <li>";
            echo anchor(((("pengajar/detail/" . get_sess_data("user", "status_id")) . "/") . get_sess_data("user", "id")), "Detail Profil", array("title" => "Detail Profil"));
            echo "</li>
                    ";
        }
        // line 50
        echo "
                    ";
        // line 51
        if (is_pengajar()) {
            // line 52
            echo "                    <li>";
            echo anchor("login/pp", "Profil & Akun Login");
            echo "</li>
                    ";
        }
        // line 54
        echo "
                    ";
        // line 55
        if (is_siswa()) {
            // line 56
            echo "                    <li>";
            echo anchor("login/pp", "Profil & Akun Login");
            echo "</li>
                    ";
        }
        // line 58
        echo "
                    <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, site_url(("login/login_log/" . get_sess_data("login", "id"))), "html", null, true);
        echo "\">Login log</a></li>
                    <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, site_url("login/logout"), "html", null, true);
        echo "\">Logout</a></li>
                </ul>
            </li>
            
        </div>
    

    ";
        // line 67
        if (is_admin()) {
            // line 68
            echo "    ";
            if (((isset($context["count_mapel_kelas"]) ? $context["count_mapel_kelas"] : null) == 0)) {
                // line 69
                echo "    <div class=\"well well-large well-box\" style=\"border:2px solid #29b7d3;\">
        <b><i class=\"icon-wrench\"></i> Atur data berikut supaya aplikasi e-learing dapat berjalan dengan baik:</b>
        <table class=\"table table-hover\" style=\"margin-top:10px;\">
            <tr>
                <td width=\"30%\">
                    <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, site_url("mapel"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-book\"></i> Manajemen Matapelajaran</b></a>
                </td>
                <td>
                    Input semua Matapelajaran yang ada di sekolah
                </td>
            </tr>
            <tr>
                <td width=\"30%\">
                    <a href=\"";
                // line 82
                echo twig_escape_filter($this->env, site_url("kelas"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-tasks\"></i> Manajemen Kelas</b></a>
                </td>
                <td>
                    Input semua Kelas yang ada di sekolah
                </td>
            </tr>
            <tr>
                <td width=\"30%\">
                    <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, site_url("kelas/mapel_kelas"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-paste\"></i> Matapelajaran Kelas</b></a>
                </td>
                <td>
                    Atur Matapelajaran pada tiap-tiap Kelas
                </td>
            </tr>
        </table>
    </div>
    ";
            }
            // line 99
            echo "    
    ";
            // line 100
            $this->env->loadTemplate("menu-phone.html")->display($context);
            // line 101
            echo "
    <div class=\"span5\">
        ";
            // line 103
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 104
                echo "        <div class=\"module\" style=\"background-color: white;\">
            <div class=\"module-head\"  style=\"background-color: white\">  
                <img style=\"height:45px;width:45px; margin-right: 10px;padding: 0;border: 0;\" class=\"img-polaroid img-circle pull-left\" src=\"";
                // line 106
                echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "foto"), "medium", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "jenis_kelamin")), "html", null, true);
                echo "\">
                <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, site_url(((("pengajar/detail/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pengajar_id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "nama"), "html", null, true);
                echo "</a>
                        menambahkan pengumuman <br>
                        <time style=\"font-weight: normal;\" class=\"timeago\" datetime=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tampil"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tampil"), "html", null, true);
                echo "</time>
            </div>
            <div class=\"module-body\">
                <h4>";
                // line 112
                echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul");
                echo "</h4>
                <div class=\"wrap-content\" style=\"font-weight: normal;\">
                    <div style=\"padding: 20px; background-color: rgb(238, 238, 238); border-radius: 5px;\">
                    ";
                // line 115
                echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "konten");
                echo "
                    </div>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "    </div>
    <div class=\"span3\">
        <div class=\"module\">
            <div class=\"module-head\" style=\"background-color: white\">
                <span class=\"badge\" style=\"background-color: salmon; color: white\"><i class=\"icon-signin\"></i> Riwayat Login User</span>
            </div>
            <div class=\"module-body\">
                <div style=\"font-weight: normal;\" id=\"show-last-login-list\"></div>
            </div>
          </div>
    </div>
    ";
        }
        // line 133
        echo "
    ";
        // line 134
        if (is_pengajar()) {
            // line 135
            echo "    ";
            $context["peraturan"] = get_pengaturan("peraturan-elearning", "value");
            // line 136
            echo "    ";
            if ((!twig_test_empty((isset($context["peraturan"]) ? $context["peraturan"] : null)))) {
                // line 137
                echo "    <div class=\"btn-box-row row-fluid\">
         <div class=\"span12\">
            <div class=\"well well-small well-box\">
                <b>Peraturan e-learning : </b><br>
                ";
                // line 141
                echo (isset($context["peraturan"]) ? $context["peraturan"] : null);
                echo "
            </div>
         </div>
    </div>
    ";
            }
            // line 146
            echo "
    ";
            // line 147
            $this->env->loadTemplate("menu-phone.html")->display($context);
            // line 148
            echo "
    
        <div class=\"span5\">
            ";
            // line 151
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 152
                echo "            <div class=\"module\" style=\"background-color: white;\">
                <div class=\"module-head\"  style=\"background-color: white\">  
                    <img style=\"height:45px;width:45px; margin-right: 10px;padding: 0;border: 0;\" class=\"img-polaroid img-circle pull-left\" src=\"";
                // line 154
                echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "foto"), "medium", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "jenis_kelamin")), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 155
                echo twig_escape_filter($this->env, site_url(((("pengajar/detail/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pengajar_id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "nama"), "html", null, true);
                echo "</a>
                            menambahkan pengumuman <br>
                            <time style=\"font-weight: normal;\" class=\"timeago\" datetime=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tampil"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tampil"), "html", null, true);
                echo "</time>
                </div>
                <div class=\"module-body\">
                    <h4>";
                // line 160
                echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul");
                echo "</h4>
                    <div class=\"wrap-content\" style=\"font-weight: normal;\">
                        <div style=\"padding: 20px; background-color: rgb(238, 238, 238); border-radius: 5px;\">
                        ";
                // line 163
                echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "konten");
                echo "
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "        </div>
    
    ";
        }
        // line 172
        echo "
    ";
        // line 173
        if (is_siswa()) {
            // line 174
            echo "    ";
            $context["peraturan"] = get_pengaturan("peraturan-elearning", "value");
            // line 175
            echo "    ";
            if ((!twig_test_empty((isset($context["peraturan"]) ? $context["peraturan"] : null)))) {
                // line 176
                echo "    <div class=\"btn-box-row row-fluid\">
         <div class=\"span12\">
            <div class=\"well well-small well-box\">
                <b>Peraturan e-learning : </b><br>
                ";
                // line 180
                echo (isset($context["peraturan"]) ? $context["peraturan"] : null);
                echo "
            </div>
         </div>
    </div>
    ";
            }
            // line 184
            echo " 

    <div class=\"visible-phone\">
        <table class=\"table\" width=\"100%\">
            <tr>
                <td width=\"25%\" style=\"border-style: none;\">
                    <center>
                    <a style=\"text-decoration: none;\" href=\"";
            // line 191
            echo twig_escape_filter($this->env, site_url("siswa/jadwal_mapel"), "html", null, true);
            echo "\">
                        <i style=\"font-size: 30px\" class=\"icon-book\"></i>
                        <p>Mapel</p>
                    </a>
                    </center>
                </td>
                
                <td width=\"25%\" style=\"border-style: none;\">
                    <center>
                    <a style=\"text-decoration: none;\" href=\"";
            // line 200
            echo twig_escape_filter($this->env, site_url("kelompok"), "html", null, true);
            echo "\">
                        <i style=\"font-size: 30px\" class=\"icon-comments\"></i>
                        <p>Ruang Diskusi</p>
                    </a>
                    </center>
                </td>
                <td width=\"25%\" style=\"border-style: none;\">
                    <center>
                     <a style=\"text-decoration: none;\" href=\"";
            // line 208
            echo twig_escape_filter($this->env, site_url("login/logout"), "html", null, true);
            echo "\">
                        <i style=\"font-size: 30px\" class=\"icon-signout\"></i>
                        <!-- <b>";
            // line 210
            echo twig_escape_filter($this->env, (isset($context["jml_pengajar"]) ? $context["jml_pengajar"] : null), "html", null, true);
            echo "</b> -->
                        <p>Logout</p>
                    </a>
                    </center>
                </td>
            </tr>
        </table>
        </div>

        <div class=\"span5\">
            <div class=\"module\">
                <div class=\"module-head\" style=\"background-color: white\">
                    <h3>Tugas belum dikerjakan</h3>
                </div>
                <div class=\"module-body\" style=\"background-color: white\">
                    <table class=\"table table-striped table-condensed\">

                    ";
            // line 227
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tugas_terbaru"]) ? $context["tugas_terbaru"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 228
                echo "                    ";
                if ((sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == false)) {
                    // line 229
                    echo "                    <tr>
                        <td>
                            <b>";
                    // line 231
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                    echo "</b>
                            <button type=\"button\" class=\"btn btn-xs btn-primary pull-right\" data-toggle=\"modal\" data-target=\"#mulai-mengerjakan";
                    // line 232
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
                    echo "\"><i class=\"icon-arrow-right\"></i>
                                        Kerjakan
                            </button>

                            <div class=\"modal fade\" id=\"mulai-mengerjakan";
                    // line 236
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-body\">
                                        <!-- <span style=\"font-size: 15pt\">Bismillah... <br>Ana atas nama <b>";
                    // line 240
                    echo twig_escape_filter($this->env, strtoupper(get_sess_data("user", "nama")), "html", null, true);
                    echo "</b> menyatakan, akan berjanji mematuhi tata tertib ujian. Apabila ana terbukti melakukan kecurangan atau melanggar tata tertib ujian, maka ana bersedia dikeluarkan dari ruang ujian.</span> -->
                                        <span style=\"font-size: 15px;\">Apakah antum siap mengerjakan tugas ini ";
                    // line 241
                    echo twig_escape_filter($this->env, strtoupper(get_sess_data("user", "nama")), "html", null, true);
                    echo " ?</span>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Belum</button>
                                        <a class=\"btn btn-primary\" href=\"";
                    // line 245
                    echo twig_escape_filter($this->env, site_url(("tugas/kerjakan/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"))), "html", null, true);
                    echo "\" id=\"btn-submit\">Siap</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                    ";
                }
                // line 253
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            echo "                    </table>
                </div>
            </div>
            
            
                ";
            // line 259
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 260
                echo "                <div class=\"module\" style=\"background-color: white;\">
                    <div class=\"module-head\"  style=\"background-color: white;\">  
                        <img style=\"height:45px;width:45px; margin-right: 10px;padding: 0;border: 0;\" class=\"img-polaroid img-circle pull-left\" src=\"";
                // line 262
                echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "foto"), "medium", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "jenis_kelamin")), "html", null, true);
                echo "\">
                        <a href=\"";
                // line 263
                echo twig_escape_filter($this->env, site_url(((("pengajar/detail/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pengajar_id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "nama"), "html", null, true);
                echo "</a>
                                menambahkan pengumuman <br>
                                <time style=\"font-weight: normal;\" class=\"timeago\" datetime=\"";
                // line 265
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tampil"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tampil"), "html", null, true);
                echo "</time>
                    </div>
                    <div class=\"module-body\">
                        <h4>";
                // line 268
                echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul");
                echo "</h4>
                        <div class=\"wrap-content\" style=\"font-weight: normal;\">
                            <div style=\"padding: 20px; background-color: rgb(248, 247, 247); border-radius: 5px;\">
                            ";
                // line 271
                echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "konten");
                echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            echo "            
        
        </div>

          <div class=\"span3\">
            <div class=\"module\">
                <div class=\"module-head\">
                    <h3>Matapelajaran</h3>
                </div>
                <div class=\"module-body\">
                    ";
            // line 287
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mapels"]) ? $context["mapels"] : null));
            foreach ($context['_seq'] as $context["no"] => $context["v"]) {
                // line 288
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, site_url(("welcome/mapel_sesi/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
                echo "\" style=\"font-size: 14px;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nama"), "html", null, true);
                echo "</a>
                            <br><small>";
                // line 289
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "info"), "html", null, true));
                echo "</small>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['no'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 291
            echo "                </div>
            </div>
              <!-- <div class=\"module\">
                <div class=\"module-head\" style=\"background-color: white; font-size: 15px\">
                    Pengumuman
                </div>
                <div class=\"module-body\" style=\"padding: 0\">
                    <table class=\"table table-striped table-condensed\">
                        ";
            // line 299
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 300
                echo "                        <tr>
                            <td style=\"padding-left: 15px\">";
                // line 301
                echo anchor(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"));
                echo "</td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 304
            echo "                    </table>
                </div>
            </div> -->
          </div>


    ";
        }
        // line 311
        echo "
    

    
</div>

";
    }

    public function getTemplateName()
    {
        return "welcome.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 311,  616 => 304,  607 => 301,  604 => 300,  600 => 299,  590 => 291,  582 => 289,  575 => 288,  571 => 287,  559 => 277,  547 => 271,  541 => 268,  533 => 265,  526 => 263,  522 => 262,  518 => 260,  514 => 259,  507 => 254,  501 => 253,  490 => 245,  483 => 241,  479 => 240,  472 => 236,  465 => 232,  461 => 231,  457 => 229,  454 => 228,  450 => 227,  430 => 210,  425 => 208,  414 => 200,  402 => 191,  393 => 184,  385 => 180,  379 => 176,  376 => 175,  373 => 174,  371 => 173,  368 => 172,  363 => 169,  351 => 163,  345 => 160,  337 => 157,  330 => 155,  326 => 154,  322 => 152,  318 => 151,  313 => 148,  311 => 147,  308 => 146,  300 => 141,  294 => 137,  291 => 136,  288 => 135,  286 => 134,  283 => 133,  269 => 121,  257 => 115,  251 => 112,  243 => 109,  236 => 107,  232 => 106,  228 => 104,  224 => 103,  220 => 101,  218 => 100,  215 => 99,  203 => 90,  192 => 82,  181 => 74,  174 => 69,  171 => 68,  169 => 67,  159 => 60,  155 => 59,  152 => 58,  146 => 56,  144 => 55,  141 => 54,  135 => 52,  133 => 51,  130 => 50,  124 => 48,  122 => 47,  112 => 39,  106 => 37,  104 => 36,  101 => 35,  95 => 33,  93 => 32,  90 => 31,  84 => 29,  82 => 28,  79 => 27,  72 => 24,  65 => 21,  60 => 19,  56 => 18,  52 => 17,  46 => 14,  40 => 11,  31 => 4,  28 => 3,);
    }
}
