<?php

/* edit-pengumuman.html */
class __TwigTemplate_c28f9bacf4e1c4e5280a6c6f37c80a261e6ca2a27ff728faf00d3a3422fa1f01 extends Twig_Template
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
        echo "Edit Pengumuman - ";
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
        echo anchor("pengumuman", "Pengumuman");
        echo " / Edit Pengumuman</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("pengumuman");
        echo "

        ";
        // line 15
        echo form_open_multipart(("pengumuman/edit/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), array("class" => "form-horizontal row-fluid"));
        echo "
            <div class=\"control-group\">
                <label class=\"control-label\">Judul <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"judul\" class=\"span12\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, set_value("judul", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul")), "html", null, true);
        echo "\">
                    <br>";
        // line 20
        echo form_error("judul");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Tgl. Tampil <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"tgl_tampil\" class=\"span4\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, set_value("tgl_tampil", (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tampil") . " s/d ") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tutup"))), "html", null, true);
        echo "\" id=\"pengumuman-tgl-tampil\">
                    <br>";
        // line 27
        echo form_error("tgl_tampil");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Konten <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <textarea name=\"konten\" id=\"konten\" class=\"texteditor\">";
        // line 33
        echo set_value("konten", $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "konten"));
        echo "</textarea>
                    ";
        // line 34
        echo form_error("konten");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Tampil Disiswa</label>
                <div class=\"controls\">
                    <label class=\"radio inline\"><input type=\"radio\" name=\"tampil_siswa\" value=\"1\" ";
        // line 40
        echo twig_escape_filter($this->env, set_radio("tampil_siswa", "1", ((($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tampil_siswa") == 1)) ? (true) : (""))), "html", null, true);
        echo "> Ya</label>
                    <label class=\"radio inline\"><input type=\"radio\" name=\"tampil_siswa\" value=\"0\" ";
        // line 41
        echo twig_escape_filter($this->env, set_radio("tampil_siswa", "0", ((($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tampil_siswa") == 0)) ? (true) : (""))), "html", null, true);
        echo "> Tidak</label>
                    <br>";
        // line 42
        echo form_error("tampil_siswa");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Tampil Dipengajar</label>
                <div class=\"controls\">
                    <label class=\"radio inline\"><input type=\"radio\" name=\"tampil_pengajar\" value=\"1\" ";
        // line 48
        echo twig_escape_filter($this->env, set_radio("tampil_pengajar", "1", ((($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tampil_pengajar") == 1)) ? (true) : (""))), "html", null, true);
        echo "> Ya</label>
                    <label class=\"radio inline\"><input type=\"radio\" name=\"tampil_pengajar\" value=\"0\" ";
        // line 49
        echo twig_escape_filter($this->env, set_radio("tampil_pengajar", "0", ((($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tampil_pengajar") == 0)) ? (true) : (""))), "html", null, true);
        echo "> Tidak</label>
                    <br>";
        // line 50
        echo form_error("tampil_pengajar");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <div class=\"controls\">
                    <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, site_url("pengumuman"), "html", null, true);
        echo "\" class=\"btn btn-default\">Kembali</a>
                </div>
            </div>
        ";
        // line 59
        echo form_close();
        echo "

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "edit-pengumuman.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 59,  137 => 56,  128 => 50,  124 => 49,  120 => 48,  111 => 42,  107 => 41,  103 => 40,  94 => 34,  90 => 33,  81 => 27,  77 => 26,  68 => 20,  64 => 19,  57 => 15,  52 => 13,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
