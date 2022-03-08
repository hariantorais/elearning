<?php

/* tambah-siswa.html */
class __TwigTemplate_426c358e7d386fc844c94ce079b0163bd292963be77b91bcb637ecc8d3d56d9e extends Twig_Template
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
        echo "Tambah Siswa - ";
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
        echo anchor(("siswa/index/" . (isset($context["status_id"]) ? $context["status_id"] : null)), "Data Siswa");
        echo " / Tambah Siswa</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("siswa");
        echo "

        ";
        // line 15
        echo form_open_multipart(("siswa/add/" . (isset($context["status_id"]) ? $context["status_id"] : null)), array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"control-group\">
                <label class=\"control-label\">NIS <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"text\" id=\"nis\" name=\"nis\" class=\"span4\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, set_value("nis"), "html", null, true);
        echo "\">
                    <br>";
        // line 20
        echo form_error("nis");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Nama <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"nama\" class=\"span8\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
        echo "\">
                    <br>";
        // line 27
        echo form_error("nama");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Jenis Kelamin <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Laki-laki\" ";
        // line 33
        echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Laki-laki"), "html", null, true);
        echo "> Laki-laki</label>
                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Perempuan\" ";
        // line 34
        echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Perempuan"), "html", null, true);
        echo "> Perempuan</label>
                    <br>";
        // line 35
        echo form_error("jenis_kelamin");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Tahun Masuk <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"tahun_masuk\" class=\"span2\" maxlength=\"4\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, set_value("tahun_masuk"), "html", null, true);
        echo "\">
                    <br>";
        // line 42
        echo form_error("tahun_masuk");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Kelas <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <select class=\"span3\" name=\"kelas_id\">
                        ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 50
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("kelas_id", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id")), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </select>
                    <br>";
        // line 53
        echo form_error("kelas_id");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Tempat Lahir</label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"tempat_lahir\" class=\"span5\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, set_value("tempat_lahir"), "html", null, true);
        echo "\">
                    <br>";
        // line 60
        echo form_error("tempat_lahir");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Tanggal Lahir</label>
                <div class=\"controls\">
                    <select class=\"span2\" style=\"width: 10%;\" name=\"tgl_lahir\">
                        <option value=\"\">Tgl</option>
                        ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 69
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("tgl_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                    </select>
                    <select class=\"span2\" style=\"width: 17%;\" name=\"bln_lahir\">
                        <option value=\"\">Bulan</option>
                        ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 75
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("bln_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, get_indo_bulan((isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    </select>
                    <input type=\"text\" name=\"thn_lahir\" class=\"span2\" maxlength=\"4\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, set_value("thn_lahir"), "html", null, true);
        echo "\" placeholder=\"Tahun\">
                    <br>";
        // line 79
        echo form_error("thn_lahir");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Agama</label>
                <div class=\"controls\">
                    <select name=\"agama\" class=\"span2\">
                        <option value=\"\">--pilih--</option>
                        <option value=\"ISLAM\" ";
        // line 87
        echo twig_escape_filter($this->env, set_select("agama", "ISLAM"), "html", null, true);
        echo ">ISLAM</option>
                        <option value=\"KRISTEN\" ";
        // line 88
        echo twig_escape_filter($this->env, set_select("agama", "KRISTEN"), "html", null, true);
        echo ">KRISTEN</option>
                        <option value=\"KATOLIK\" ";
        // line 89
        echo twig_escape_filter($this->env, set_select("agama", "KATOLIK"), "html", null, true);
        echo ">KATOLIK</option>
                        <option value=\"HINDU\" ";
        // line 90
        echo twig_escape_filter($this->env, set_select("agama", "HINDU"), "html", null, true);
        echo ">HINDU</option>
                        <option value=\"BUDHA\" ";
        // line 91
        echo twig_escape_filter($this->env, set_select("agama", "BUDHA"), "html", null, true);
        echo ">BUDHA</option>
                    </select>
                    <br>";
        // line 93
        echo form_error("agama");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Alamat</label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"alamat\" class=\"span8\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, set_value("alamat"), "html", null, true);
        echo "\">
                    <br>";
        // line 100
        echo form_error("alamat");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Foto</label>
                <div class=\"controls\">
                    <input type=\"file\" name=\"userfile\">
                    ";
        // line 107
        echo (((!twig_test_empty((isset($context["error_upload"]) ? $context["error_upload"] : null)))) ? ((isset($context["error_upload"]) ? $context["error_upload"] : null)) : (""));
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Username <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"text\" id=\"username\" name=\"username\" class=\"span5\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\" placeholder=\"example@example.sch.id\">

                    <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"default_username\" id=\"default_username\" onclick=\"username_default()\" value=\"1\" ";
        // line 115
        echo twig_escape_filter($this->env, set_checkbox("default_username", "1"), "html", null, true);
        echo "> Gunakan default username</label>
                    <br>";
        // line 116
        echo form_error("username");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Password <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"password\" name=\"password\" class=\"span5\" value=\"";
        // line 122
        echo twig_escape_filter($this->env, set_value("password"), "html", null, true);
        echo "\">
                    <br>";
        // line 123
        echo form_error("password");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Ulangi Password <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"password\" name=\"password2\" class=\"span5\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, set_value("password2"), "html", null, true);
        echo "\">
                    <br>";
        // line 130
        echo form_error("password2");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <div class=\"controls\">
                    <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
                    <a href=\"";
        // line 136
        echo twig_escape_filter($this->env, site_url(("siswa/index/" . (isset($context["status_id"]) ? $context["status_id"] : null))), "html", null, true);
        echo "\" class=\"btn\">Batal</a>
                </div>
            </div>
        ";
        // line 139
        echo form_close();
        echo "

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tambah-siswa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 139,  319 => 136,  310 => 130,  306 => 129,  297 => 123,  293 => 122,  284 => 116,  280 => 115,  275 => 113,  266 => 107,  256 => 100,  252 => 99,  243 => 93,  238 => 91,  234 => 90,  230 => 89,  226 => 88,  222 => 87,  211 => 79,  207 => 78,  204 => 77,  191 => 75,  187 => 74,  182 => 71,  169 => 69,  165 => 68,  154 => 60,  150 => 59,  141 => 53,  138 => 52,  125 => 50,  121 => 49,  111 => 42,  107 => 41,  98 => 35,  94 => 34,  90 => 33,  81 => 27,  77 => 26,  68 => 20,  64 => 19,  57 => 15,  52 => 13,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
