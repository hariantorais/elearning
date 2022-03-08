<?php

/* pengaturan.html */
class __TwigTemplate_8f9d7c6785edc4eca16ab1544d48104c49727a1d4b532f8759711570632a9508 extends Twig_Template
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
        echo "Pengaturan - ";
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
        <h3>Pengaturan</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("pengaturan");
        echo "

        ";
        // line 15
        if (is_demo_app()) {
            // line 16
            echo "            ";
            echo get_alert("warning", get_demo_msg());
            echo "
        ";
        }
        // line 18
        echo "
        ";
        // line 19
        echo form_open_multipart("welcome/pengaturan", array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"control-group\">
                <label class=\"control-label\">Logo sekolah</label>
                <div class=\"controls\">
                    ";
        // line 23
        $context["logo_sekolah"] = get_pengaturan("logo-sekolah", "value");
        // line 24
        echo "                    ";
        if (twig_test_empty((isset($context["logo_sekolah"]) ? $context["logo_sekolah"] : null))) {
            // line 25
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["logo_url_medium"]) ? $context["logo_url_medium"] : null), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 27
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, site_url("welcome/pengaturan/?delete-img=5"), "html", null, true);
            echo "\" onclick=\"return confirm('Anda yakin ingin menghapus?')\" class=\"pull-right\" title=\"Hapus logo\"><i class=\"icon-trash\"></i></a>
                        <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, get_url_image((isset($context["logo_sekolah"]) ? $context["logo_sekolah"] : null)), "html", null, true);
            echo "\" style=\"max-width: 120px;\">
                    ";
        }
        // line 30
        echo "                    <br>Ganti logo <small>(Ukuran terbaik 120 x 122 pixel)</small><br>
                    <input type=\"file\" name=\"logo-sekolah\">
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Nama sekolah <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"nama-sekolah\" class=\"span8\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, set_value("nama-sekolah", get_pengaturan("nama-sekolah", "value")), "html", null, true);
        echo "\">
                    <br>";
        // line 38
        echo form_error("nama-sekolah");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Alamat sekolah <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"alamat\" class=\"span8\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, set_value("alamat", get_pengaturan("alamat", "value")), "html", null, true);
        echo "\">
                    <br>";
        // line 45
        echo form_error("alamat");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Telpon</label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"telp\" class=\"span5\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, set_value("telp", get_pengaturan("telp", "value")), "html", null, true);
        echo "\">
                    <br>";
        // line 52
        echo form_error("telp");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Registrasi siswa</label>
                <div class=\"controls\">
                    <label class=\"radio inline\">
                        <input type=\"radio\" name=\"registrasi-siswa\" value=\"1\" ";
        // line 59
        echo twig_escape_filter($this->env, set_radio("registrasi-siswa", "1", (((get_pengaturan("registrasi-siswa", "value") == "1")) ? (true) : (""))), "html", null, true);
        echo "> Tampilkan
                    </label>
                    <label class=\"radio inline\">
                        <input type=\"radio\" name=\"registrasi-siswa\" value=\"0\" ";
        // line 62
        echo twig_escape_filter($this->env, set_radio("registrasi-siswa", "0", (((get_pengaturan("registrasi-siswa", "value") == "0")) ? (true) : (""))), "html", null, true);
        echo "> Sembunyikan
                    </label>
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Status registrasi siswa</label>
                <div class=\"controls\">
                    <label class=\"radio inline\">
                        <input type=\"radio\" name=\"status-registrasi-siswa\" value=\"0\" ";
        // line 70
        echo twig_escape_filter($this->env, set_radio("status-registrasi-siswa", "0", ((in_array(get_pengaturan("status-registrasi-siswa", "value"), array(0 => "", 1 => "0"))) ? (true) : (""))), "html", null, true);
        echo "> Pending
                    </label>
                    <label class=\"radio inline\">
                        <input type=\"radio\" name=\"status-registrasi-siswa\" value=\"1\" ";
        // line 73
        echo twig_escape_filter($this->env, set_radio("status-registrasi-siswa", "1", (((get_pengaturan("status-registrasi-siswa", "value") == "1")) ? (true) : (""))), "html", null, true);
        echo "> Aktif
                    </label>
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Registrasi pengajar</label>
                <div class=\"controls\">
                    <label class=\"radio inline\">
                        <input type=\"radio\" name=\"registrasi-pengajar\" value=\"1\" ";
        // line 81
        echo twig_escape_filter($this->env, set_radio("registrasi-pengajar", "1", (((get_pengaturan("registrasi-pengajar", "value") == "1")) ? (true) : (""))), "html", null, true);
        echo "> Tampilkan
                    </label>
                    <label class=\"radio inline\">
                        <input type=\"radio\" name=\"registrasi-pengajar\" value=\"0\" ";
        // line 84
        echo twig_escape_filter($this->env, set_radio("registrasi-pengajar", "0", (((get_pengaturan("registrasi-pengajar", "value") == "0")) ? (true) : (""))), "html", null, true);
        echo "> Sembunyikan
                    </label>
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Status registrasi pengajar</label>
                <div class=\"controls\">
                    <label class=\"radio inline\">
                        <input type=\"radio\" name=\"status-registrasi-pengajar\" value=\"0\" ";
        // line 92
        echo twig_escape_filter($this->env, set_radio("status-registrasi-pengajar", "0", ((in_array(get_pengaturan("status-registrasi-pengajar", "value"), array(0 => "", 1 => "0"))) ? (true) : (""))), "html", null, true);
        echo "> Pending
                    </label>
                    <label class=\"radio inline\">
                        <input type=\"radio\" name=\"status-registrasi-pengajar\" value=\"1\" ";
        // line 95
        echo twig_escape_filter($this->env, set_radio("status-registrasi-pengajar", "1", (((get_pengaturan("status-registrasi-pengajar", "value") == "1")) ? (true) : (""))), "html", null, true);
        echo "> Aktif
                    </label>
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Info Registrasi</label>
                <div class=\"controls\">
                    <textarea name=\"info-registrasi\" class=\"texteditor\" style=\"width:100%; height:300px;\">";
        // line 102
        echo set_value("info-registrasi", get_pengaturan("info-registrasi", "value"));
        echo "</textarea>
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Peraturan E-learning</label>
                <div class=\"controls\">
                    <textarea name=\"peraturan-elearning\" class=\"texteditor\" style=\"width:100%; height:300px;\">";
        // line 108
        echo set_value("peraturan-elearning", get_pengaturan("peraturan-elearning", "value"));
        echo "</textarea>
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Email server</label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"email-server\" class=\"span5\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, set_value("email-server", get_pengaturan("email-server", "value")), "html", null, true);
        echo "\">
                    <br>";
        // line 115
        echo form_error("email-server");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">SMTP host</label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"smtp-host\" class=\"span5\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, set_value("smtp-host", get_pengaturan("smtp-host", "value")), "html", null, true);
        echo "\">
                    <br>";
        // line 122
        echo form_error("smtp-host");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">SMTP username</label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"smtp-username\" class=\"span5\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, set_value("smtp-username", get_pengaturan("smtp-username", "value")), "html", null, true);
        echo "\">
                    <br>";
        // line 129
        echo form_error("smtp-username");
        echo "
                </div>
            </div>
            ";
        // line 132
        if ((is_demo_app() == false)) {
            // line 133
            echo "            <div class=\"control-group\">
                <label class=\"control-label\">SMTP password</label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"smtp-pass\" class=\"span5\" value=\"";
            // line 136
            echo twig_escape_filter($this->env, set_value("smtp-pass", get_pengaturan("smtp-pass", "value")), "html", null, true);
            echo "\">
                    <br>";
            // line 137
            echo form_error("smtp-pass");
            echo "
                </div>
            </div>
            ";
        }
        // line 141
        echo "            <div class=\"control-group\">
                <label class=\"control-label\">SMTP port</label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"smtp-port\" class=\"span5\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, set_value("smtp-port", get_pengaturan("smtp-port", "value")), "html", null, true);
        echo "\">
                    <br>";
        // line 145
        echo form_error("smtp-port");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Edit username siswa</label>
                <div class=\"controls\">
                    <label class=\"radio inline\">
                        <input type=\"radio\" name=\"edit-username-siswa\" value=\"1\" ";
        // line 152
        echo twig_escape_filter($this->env, set_radio("edit-username-siswa", "1", ((in_array(get_pengaturan("edit-username-siswa", "value"), array(0 => "", 1 => "1"))) ? (true) : (""))), "html", null, true);
        echo "> Siswa dapat mengganti username
                    </label>
                    <label class=\"radio inline\">
                        <input type=\"radio\" name=\"edit-username-siswa\" value=\"0\" ";
        // line 155
        echo twig_escape_filter($this->env, set_radio("edit-username-siswa", "0", (((get_pengaturan("edit-username-siswa", "value") == "0")) ? (true) : (""))), "html", null, true);
        echo "> Siswa tidak dapat mengganti username
                    </label>
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Edit foto siswa</label>
                <div class=\"controls\">
                    <label class=\"radio inline\">
                        <input type=\"radio\" name=\"edit-foto-siswa\" value=\"1\" ";
        // line 163
        echo twig_escape_filter($this->env, set_radio("edit-foto-siswa", "1", ((in_array(get_pengaturan("edit-foto-siswa", "value"), array(0 => "", 1 => "1"))) ? (true) : (""))), "html", null, true);
        echo "> Siswa dapat mengganti foto
                    </label>
                    <label class=\"radio inline\">
                        <input type=\"radio\" name=\"edit-foto-siswa\" value=\"0\" ";
        // line 166
        echo twig_escape_filter($this->env, set_radio("edit-foto-siswa", "0", (((get_pengaturan("edit-foto-siswa", "value") == "0")) ? (true) : (""))), "html", null, true);
        echo "> Siswa tidak dapat mengganti foto
                    </label>
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Slider halaman login</label>
                <div class=\"controls\" style=\"background-color: #FBFBFB; padding: 10px;border-radius: 5px;\">
                    <table class=\"table table-condensed\">
                        <tr>
                            <td style=\"border-top: none;\">
                                <div class=\"row-fluid\">
                                    <div class=\"span2\" style=\"margin-bottom: 10px;\">
                                        Gambar 1
                                    </div>
                                    <div class=\"span10\">
                                        ";
        // line 181
        if (get_pengaturan("img-slide-1", "value")) {
            // line 182
            echo "                                        <a href=\"";
            echo twig_escape_filter($this->env, site_url("welcome/pengaturan/?delete-img=1"), "html", null, true);
            echo "\" class=\"pull-right\" title=\"Hapus gambar\"><i class=\"icon-trash\"></i></a>
                                        <img src=\"";
            // line 183
            echo twig_escape_filter($this->env, get_url_image(get_pengaturan("img-slide-1", "value")), "html", null, true);
            echo "\" class=\"img-polaroid\" style=\"max-height: 150px;margin-bottom:10px;\">
                                        <br>Ganti gambar :
                                        ";
        }
        // line 186
        echo "                                        <input type=\"file\" name=\"img-slide-1\">
                                    </div>
                                </div>
                                <div class=\"row-fluid\" style=\"margin-bottom: 10px;margin-top: 10px;\">
                                    <div class=\"span2\">
                                        Info gambar 1
                                    </div>
                                    <div class=\"span10\">
                                        <textarea name=\"info-slide-1\" class=\"span12\" placeholder=\"text atau html\">";
        // line 194
        echo set_value("info-slide-1", get_pengaturan("info-slide-1", "value"));
        echo "</textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style=\"border-top:1px dashed #fbfbfb;\">
                                <div class=\"row-fluid\">
                                    <div class=\"span2\" style=\"margin-bottom: 10px;\">
                                        Gambar 2
                                    </div>
                                    <div class=\"span10\">
                                        ";
        // line 206
        if (get_pengaturan("img-slide-2", "value")) {
            // line 207
            echo "                                        <a href=\"";
            echo twig_escape_filter($this->env, site_url("welcome/pengaturan/?delete-img=2"), "html", null, true);
            echo "\" class=\"pull-right\" title=\"Hapus gambar\"><i class=\"icon-trash\"></i></a>
                                        <img src=\"";
            // line 208
            echo twig_escape_filter($this->env, get_url_image(get_pengaturan("img-slide-2", "value")), "html", null, true);
            echo "\" class=\"img-polaroid\" style=\"max-height: 150px;margin-bottom:10px;\">
                                        <br>Ganti gambar :
                                        ";
        }
        // line 211
        echo "                                        <input type=\"file\" name=\"img-slide-2\">
                                    </div>
                                </div>
                                <div class=\"row-fluid\" style=\"margin-bottom: 10px;margin-top: 10px;\">
                                    <div class=\"span2\">
                                        Info gambar 2
                                    </div>
                                    <div class=\"span10\">
                                        <textarea name=\"info-slide-2\" class=\"span12\" placeholder=\"text atau html\">";
        // line 219
        echo set_value("info-slide-2", get_pengaturan("info-slide-2", "value"));
        echo "</textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style=\"border-top:1px dashed #fbfbfb;\">
                                <div class=\"row-fluid\">
                                    <div class=\"span2\" style=\"margin-bottom: 10px;\">
                                        Gambar 3
                                    </div>
                                    <div class=\"span10\">
                                        ";
        // line 231
        if (get_pengaturan("img-slide-3", "value")) {
            // line 232
            echo "                                        <a href=\"";
            echo twig_escape_filter($this->env, site_url("welcome/pengaturan/?delete-img=3"), "html", null, true);
            echo "\" class=\"pull-right\" title=\"Hapus gambar\"><i class=\"icon-trash\"></i></a>
                                        <img src=\"";
            // line 233
            echo twig_escape_filter($this->env, get_url_image(get_pengaturan("img-slide-3", "value")), "html", null, true);
            echo "\" class=\"img-polaroid\" style=\"max-height: 150px;margin-bottom:10px;\">
                                        <br>Ganti gambar :
                                        ";
        }
        // line 236
        echo "                                        <input type=\"file\" name=\"img-slide-3\">
                                    </div>
                                </div>
                                <div class=\"row-fluid\" style=\"margin-bottom: 10px;margin-top: 10px;\">
                                    <div class=\"span2\">
                                        Info gambar 3
                                    </div>
                                    <div class=\"span10\">
                                        <textarea name=\"info-slide-3\" class=\"span12\" placeholder=\"text atau html\">";
        // line 244
        echo set_value("info-slide-3", get_pengaturan("info-slide-3", "value"));
        echo "</textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style=\"border-top:1px dashed #fbfbfb;\">
                                <div class=\"row-fluid\">
                                    <div class=\"span2\" style=\"margin-bottom: 10px;\">
                                        Gambar 4
                                    </div>
                                    <div class=\"span10\">
                                        ";
        // line 256
        if (get_pengaturan("img-slide-4", "value")) {
            // line 257
            echo "                                        <a href=\"";
            echo twig_escape_filter($this->env, site_url("welcome/pengaturan/?delete-img=4"), "html", null, true);
            echo "\" class=\"pull-right\" title=\"Hapus gambar\"><i class=\"icon-trash\"></i></a>
                                        <img src=\"";
            // line 258
            echo twig_escape_filter($this->env, get_url_image(get_pengaturan("img-slide-4", "value")), "html", null, true);
            echo "\" class=\"img-polaroid\" style=\"max-height: 150px;margin-bottom:10px;\">
                                        <br>Ganti gambar :
                                        ";
        }
        // line 261
        echo "                                        <input type=\"file\" name=\"img-slide-4\">
                                    </div>
                                </div>
                                <div class=\"row-fluid\" style=\"margin-bottom: 10px;margin-top: 10px;\">
                                    <div class=\"span2\">
                                        Info gambar 4
                                    </div>
                                    <div class=\"span10\">
                                        <textarea name=\"info-slide-4\" class=\"span12\" placeholder=\"text atau html\">";
        // line 269
        echo set_value("info-slide-4", get_pengaturan("info-slide-4", "value"));
        echo "</textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            ";
        // line 278
        if ((is_demo_app() == false)) {
            // line 279
            echo "            <div class=\"control-group\">
                <div class=\"controls\">
                    <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                </div>
            </div>
            ";
        }
        // line 285
        echo "        ";
        echo form_close();
        echo "

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "pengaturan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 285,  492 => 279,  490 => 278,  478 => 269,  468 => 261,  462 => 258,  457 => 257,  455 => 256,  440 => 244,  430 => 236,  424 => 233,  419 => 232,  417 => 231,  402 => 219,  392 => 211,  386 => 208,  381 => 207,  379 => 206,  364 => 194,  354 => 186,  348 => 183,  343 => 182,  341 => 181,  323 => 166,  317 => 163,  306 => 155,  300 => 152,  290 => 145,  286 => 144,  281 => 141,  274 => 137,  270 => 136,  265 => 133,  263 => 132,  257 => 129,  253 => 128,  244 => 122,  240 => 121,  231 => 115,  227 => 114,  218 => 108,  209 => 102,  199 => 95,  193 => 92,  182 => 84,  176 => 81,  165 => 73,  159 => 70,  148 => 62,  142 => 59,  132 => 52,  128 => 51,  119 => 45,  115 => 44,  106 => 38,  102 => 37,  93 => 30,  88 => 28,  83 => 27,  77 => 25,  74 => 24,  72 => 23,  65 => 19,  62 => 18,  56 => 16,  54 => 15,  49 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
