<?php

/* list-tugas.html */
class __TwigTemplate_8ac215a290914e04874404a546e9c3097768976d6925efc804ad62a129b0e746 extends Twig_Template
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
        echo "Tugas - ";
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
        if ((is_siswa() == false)) {
            // line 11
            echo "            <div class=\"btn-group pull-right\">
                    ";
            // line 12
            echo anchor("tugas/add/3", "Quiz", array("class" => "btn btn-success"));
            echo "
                    ";
            // line 13
            echo anchor("tugas/add/2", "Essay", array("class" => "btn btn-primary"));
            echo "
                    ";
            // line 14
            echo anchor("tugas/add/1", "Upload", array("class" => "btn btn-warning"));
            echo "
            </div>
        ";
        }
        // line 17
        echo "        <h3>Tugas</h3>
    </div>
    <div class=\"module-body\"  style=\"background-color: white\">
        ";
        // line 20
        echo get_flashdata("tugas");
        echo "

        ";
        // line 22
        if ((is_siswa() == false)) {
            // line 23
            echo "        <div class=\"bs-callout bs-callout-info\">
            
            <b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"icon-search\" style=\"line-height: 0px;\"></i> CARI TUGAS</a></b>
            

            <div id=\"form-filter\" class=\"collapse\" style=\"margin-top: 5px;\">
                ";
            // line 29
            echo form_open("tugas");
            echo "
                    <table class=\"table table-condensed\">
                        <tr>
                            <th  style=\"border-top: none;\">Mapel</th>
                            <td  style=\"border-top: none;\">
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mapel"]) ? $context["mapel"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 36
                echo "                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"mapel_id[]\" value=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, set_checkbox("mapel_id[]", $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "mapel_id"))) && in_array($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "mapel_id")))) ? (true) : (""))), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
                echo "
                                        </label>
                                    </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                                </ul>
                            </td>
                        </tr>
                        ";
            // line 45
            if ((is_siswa() == false)) {
                // line 46
                echo "                        <tr>
                            <th>Kelas</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    ";
                // line 50
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                    // line 51
                    echo "                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"kelas_id[]\" value=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
                    echo "\" ";
                    echo twig_escape_filter($this->env, set_checkbox("kelas_id[]", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "kelas_id"))) && in_array($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "kelas_id")))) ? (true) : (""))), "html", null, true);
                    echo "> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
                    echo "
                                        </label>
                                    </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                                </ul>
                            </td>
                        </tr>
                        ";
            }
            // line 61
            echo "                        <tr>
                            <th>Tipe</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"type[]\" value=\"3\" ";
            // line 67
            echo twig_escape_filter($this->env, set_checkbox("type[]", "3", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("3", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
            echo "> Ganda
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"type[]\" value=\"2\" ";
            // line 72
            echo twig_escape_filter($this->env, set_checkbox("type[]", "2", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("2", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
            echo "> Essay
                                        </label>
                                    </li>
                                   <!--  <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"type[]\" value=\"1\" ";
            // line 77
            echo twig_escape_filter($this->env, set_checkbox("type[]", "1", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("1", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
            echo "> Upload
                                        </label>
                                    </li> -->
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th width=\"15%\">Judul</th>
                            <td>
                                <input type=\"text\" name=\"judul\" class=\"span4\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, set_value("judul", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "judul")), "html", null, true);
            echo "\">
                            </td>
                        </tr>
                        <tr>
                            <th>Info</th>
                            <td>
                                <input type=\"text\" name=\"info\" class=\"span5\" value=\"";
            // line 92
            echo twig_escape_filter($this->env, set_value("info", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "info")), "html", null, true);
            echo "\">
                            </td>
                        </tr>
                        ";
            // line 95
            if ((is_pengajar() == false)) {
                // line 96
                echo "                        <tr>
                            <th>Pembuat</th>
                            <td>
                                <input type=\"text\" name=\"pembuat\" class=\"span4\" value=\"";
                // line 99
                echo twig_escape_filter($this->env, set_value("pembuat", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "pembuat")), "html", null, true);
                echo "\">
                            </td>
                        </tr>
                        ";
            }
            // line 103
            echo "                        <tr>
                            <th>Status</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"status[]\" value=\"1\" ";
            // line 109
            echo twig_escape_filter($this->env, set_checkbox("status[]", "1", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status"))) && in_array("1", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status")))) ? (true) : (""))), "html", null, true);
            echo "> Terbit
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"status[]\" value=\"0\" ";
            // line 114
            echo twig_escape_filter($this->env, set_checkbox("status[]", "0", (((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status") != "") && in_array("0", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status")))) ? (true) : (""))), "html", null, true);
            echo "> Tutup
                                        </label>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type=\"submit\" class=\"btn btn-info\">Filter</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

        </div>
        ";
        }
        // line 132
        echo "
        <br>

        


        <!-- JIKA SISWA -->
        ";
        // line 139
        if ((is_siswa() == true)) {
            // line 140
            echo "         <table width=\"100%\">
            <tbody>
                ";
            // line 142
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tugas"]) ? $context["tugas"] : null));
            foreach ($context['_seq'] as $context["no"] => $context["m"]) {
                // line 143
                echo "                <tr>

                    <!-- <tr ";
                // line 145
                echo ((((is_siswa() && ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 1)) && (sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == false))) ? ("class=\"success\"") : (""));
                echo "> -->
                   
                    <td>
                        <strong class=\"text-success\" style=\"font-size: 20px\">";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                echo "</strong>
                        <br><!-- Mapel: <b>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel"), "nama"), "html", null, true);
                echo "</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

                        ";
                // line 151
                if ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Ganda") || ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Essay"))) {
                    // line 152
                    echo "                            Durasi: <b>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "durasi"), "html", null, true);
                    echo " Menit</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        ";
                }
                // line 154
                echo "
                        <!-- dibuat oleh : <a href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "link_profil"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "nama"), "html", null, true);
                echo "</a> |-->
                        <!-- ";
                // line 156
                if ((is_siswa() && ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "info") != ""))) {
                    // line 157
                    echo "                        <small>Tipe Tugas :</small>
                        ";
                    // line 158
                    if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Ganda")) {
                        // line 159
                        echo "                            <span><b>Pilihan Ganda</b></span>
                        ";
                    } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Essay")) {
                        // line 161
                        echo "                            <span class=\"label label-info\">Essay</span>
                        ";
                    } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Upload")) {
                        // line 163
                        echo "                            <span class=\"label label-warning\">Upload</span>
                        ";
                    }
                    // line 164
                    echo " -->
                          <!--   <hr style=\"margin-top: 5px;margin-bottom: 5px;border:none;border-bottom: 1px dashed black;\">
                            ";
                    // line 166
                    echo $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "info");
                    echo " -->
                        ";
                }
                // line 168
                echo "                    </td>
                    <td>
                        <div>
                        ";
                // line 171
                if ((is_siswa() == true)) {
                    // line 172
                    echo "                            ";
                    if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 1)) {
                        // line 173
                        echo "                                ";
                        if ((sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == false)) {
                            // line 174
                            echo "                                    <!-- ";
                            echo anchor(("tugas/kerjakan/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-arrow-right\"></i> Kerjakan", array("class" => "btn btn-primary btn-small", "onclick" => "return confirm('Anda yakin ingin memulai mengerjakan tugas ini?')"));
                            echo " -->
                                    <button type=\"button\" class=\"btn btn-small btn-primary\" data-toggle=\"modal\" data-target=\"#mulai-mengerjakan\"><i class=\"icon-arrow-right\"></i>
                                        Kerjakan
                                    </button>

                                    <div class=\"modal fade\" id=\"mulai-mengerjakan\" tabindex=\"-1\" role=\"dialog\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-body\">
                                                <span style=\"font-size: 15pt\">Bismillah... <br>Ana atas nama <b>";
                            // line 183
                            echo twig_escape_filter($this->env, strtoupper(get_sess_data("user", "nama")), "html", null, true);
                            echo "</b> menyatakan, akan berjanji mematuhi tata tertib ujian. Apabila ana terbukti melakukan kecurangan atau melanggar tata tertib ujian, maka ana bersedia dikeluarkan dari ruang ujian.</span>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Tidak Setuju</button>
                                                <a class=\"btn btn-primary\" href=\"";
                            // line 187
                            echo twig_escape_filter($this->env, site_url(("tugas/kerjakan/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"))), "html", null, true);
                            echo "\" id=\"btn-submit\">Setuju, Mulai Mengerjakan.</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
                        }
                        // line 193
                        echo "
                                ";
                        // line 194
                        if ((sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == true)) {
                            // line 195
                            echo "                                    <small><b>Status:</b> <span class=\"label label-info\">Dalam proses pengoreksian</span></small>
                                ";
                        }
                        // line 197
                        echo "                            ";
                    } else {
                        // line 198
                        echo "                                <!-- ";
                        echo anchor(("tugas/nilai/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-flag\"></i> Lihat Nilai", array("class" => "btn btn-info btn-small iframe-lihat-nilai"));
                        echo " -->
                                <span style=\"background-color: darkred;color: white; padding: 2px 5px 2px 5px\">Ujian ini belum aktif</span>
                            ";
                    }
                    // line 201
                    echo "                        ";
                }
                // line 202
                echo "                        </div>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['no'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "            </tbody>
        </table>

        <!-- JIKA ADMIN DAN GURU -->
        ";
        } else {
            // line 211
            echo "        <table class=\"table table-striped datatable\">
            <thead>
                <tr>
                    <th width=\"7%\">ID</th>
                    <th>Informasi Tugas</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 219
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tugas"]) ? $context["tugas"] : null));
            foreach ($context['_seq'] as $context["no"] => $context["m"]) {
                // line 220
                echo "                <tr ";
                echo ((((is_siswa() && ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 1)) && (sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == false))) ? ("class=\"success\"") : (""));
                echo ">
                    <td><b>";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
                echo "</b></td>
                    <td>
                        ";
                // line 223
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 0)) {
                    // line 224
                    echo "                        <strong style=\"color: grey\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                    echo "</strong>

                        <span class=\"badge badge-default\">Ditutup</span>

                        ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 1)) {
                    // line 229
                    echo "                        <strong style=\"color: green\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                    echo "</strong>
                            <span class=\"badge badge-success\">Dibuka</span>
                        ";
                }
                // line 232
                echo "
                        <br><small><b>";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel"), "nama"), "html", null, true);
                echo "</b>

                        ";
                // line 235
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tugas_kelas"));
                foreach ($context['_seq'] as $context["_key"] => $context["mk"]) {
                    // line 236
                    echo "                            , ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "nama"), "html", null, true);
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mk'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 238
                echo "
                        ";
                // line 239
                if ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Ganda") || ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Essay"))) {
                    // line 240
                    echo "                            , durasi: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "durasi"), "html", null, true);
                    echo " Menit
                        ";
                }
                // line 242
                echo "
                       , <b>Pembuat : </b> <a href=\"";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "link_profil"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "nama"), "html", null, true);
                echo "</a>, ";
                echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_buat")), "html", null, true);
                echo "</small>
                        <!-- ";
                // line 244
                if ((is_siswa() && ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "info") != ""))) {
                    // line 245
                    echo "                            <hr style=\"margin-top: 5px;margin-bottom: 5px;border:none;border-bottom: 1px dashed black;\">
                            ";
                    // line 246
                    echo $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "info");
                    echo "
                        ";
                }
                // line 247
                echo " -->

                        ";
                // line 249
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Ganda")) {
                    // line 250
                    echo "                            <span><b style=\"color: green\">Ganda</b></span>
                        ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Essay")) {
                    // line 252
                    echo "                            <span><b style=\"color: blue\">Essay</b></span>
                        ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Upload")) {
                    // line 254
                    echo "                            <span><b style=\"color: orange\">Upload</b></span>
                        ";
                }
                // line 256
                echo "

                    <!--     <hr style=\"border: 1px dashed grey\"> -->

                     ";
                // line 260
                if ((is_siswa() == false)) {
                    // line 261
                    echo "                   
                        
                            <ul class=\"nav\">
                                <li class=\"nav-user dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <b class=\"caret\"></b>
                            </a>
                                
                                <ul class=\"dropdown-menu\">
                                    

                                    ";
                    // line 271
                    if ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Ganda") || ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Essay"))) {
                        // line 272
                        echo "                                        <li>";
                        echo anchor(("tugas/manajemen_soal/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-tasks\"></i> Soal");
                        echo "</li>
                                    ";
                    }
                    // line 274
                    echo "

                                    ";
                    // line 276
                    if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 0)) {
                        // line 277
                        echo "                                        <li>";
                        echo anchor(((("tugas/terbitkan/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-check\"></i> Terbitkan");
                        echo "</li>
                                    ";
                    } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 1)) {
                        // line 279
                        echo "                                        <li>";
                        echo anchor(((("tugas/tutup/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-minus\"></i> Tutup");
                        echo "</li>
                                    ";
                    }
                    // line 281
                    echo "
                                    <li>";
                    // line 282
                    echo anchor(((("tugas/edit/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-edit\"></i> Edit");
                    echo "</li>

                                    ";
                    // line 284
                    if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_id") == 3)) {
                        // line 285
                        echo "                                        <li>";
                        echo anchor(("tugas/nilai/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-flag\"></i> Nilai");
                        echo "</li>
                                    ";
                    } else {
                        // line 287
                        echo "                                        <li>";
                        echo anchor(("tugas/koreksi/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-list\"></i> Koreksi");
                        echo "</li>
                                    ";
                    }
                    // line 289
                    echo "                                    
                                </ul>
                            </li>
                            </ul>
              
                        ";
                }
                // line 295
                echo "

                    </td>

                    
                    
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['no'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "            </tbody>
        </table>
        ";
        }
        // line 306
        echo "       
        <br>
        ";
        // line 308
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "list-tugas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 308,  629 => 306,  624 => 303,  611 => 295,  603 => 289,  597 => 287,  591 => 285,  589 => 284,  584 => 282,  581 => 281,  575 => 279,  569 => 277,  567 => 276,  563 => 274,  557 => 272,  555 => 271,  543 => 261,  541 => 260,  535 => 256,  531 => 254,  527 => 252,  523 => 250,  521 => 249,  517 => 247,  512 => 246,  509 => 245,  507 => 244,  499 => 243,  496 => 242,  490 => 240,  488 => 239,  485 => 238,  476 => 236,  472 => 235,  467 => 233,  464 => 232,  457 => 229,  448 => 224,  446 => 223,  441 => 221,  436 => 220,  432 => 219,  422 => 211,  415 => 206,  406 => 202,  403 => 201,  396 => 198,  393 => 197,  389 => 195,  387 => 194,  384 => 193,  375 => 187,  368 => 183,  355 => 174,  352 => 173,  349 => 172,  347 => 171,  342 => 168,  337 => 166,  333 => 164,  329 => 163,  325 => 161,  321 => 159,  319 => 158,  316 => 157,  314 => 156,  308 => 155,  305 => 154,  299 => 152,  297 => 151,  292 => 149,  288 => 148,  282 => 145,  278 => 143,  274 => 142,  270 => 140,  268 => 139,  259 => 132,  238 => 114,  230 => 109,  222 => 103,  215 => 99,  210 => 96,  208 => 95,  202 => 92,  193 => 86,  181 => 77,  173 => 72,  165 => 67,  157 => 61,  151 => 57,  137 => 53,  133 => 51,  129 => 50,  123 => 46,  121 => 45,  116 => 42,  102 => 38,  98 => 36,  94 => 35,  85 => 29,  77 => 23,  75 => 22,  70 => 20,  65 => 17,  59 => 14,  55 => 13,  51 => 12,  48 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
