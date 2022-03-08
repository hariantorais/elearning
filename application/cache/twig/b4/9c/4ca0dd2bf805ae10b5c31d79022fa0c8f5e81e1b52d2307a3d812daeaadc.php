<?php

/* tambah-materi.html */
class __TwigTemplate_b49c4ca0dd2bf805ae10b5c31d79022fa0c8f5e81e1b52d2307a3d812daeaadc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
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
        echo "Tambah Materi - ";
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
        echo anchor("materi", "Materi");
        echo " / Tambah Materi</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("materi");
        echo "

        ";
        // line 15
        echo form_open_multipart(((("materi/add/" . (isset($context["type"]) ? $context["type"] : null)) . "/") . (isset($context["preview_id"]) ? $context["preview_id"] : null)), array("class" => "form-horizontal row-fluid", "id" => "form-materi"));
        echo "
            <div class=\"control-group\">
                <label class=\"control-label\">Judul <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"judul\" class=\"span12\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, set_value("judul"), "html", null, true);
        echo "\">
                    <br>";
        // line 20
        echo form_error("judul");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Matapelajaran <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <select name=\"mapel_id\">
                        <option value=\"\">--pilih--</option>
                        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapel"]) ? $context["mapel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 29
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("mapel_id", $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </select>
                    <br>";
        // line 32
        echo form_error("mapel_id");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Untuk Kelas <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                        ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 40
            echo "                        <li>
                            <label class=\"checkbox inline\">
                                <input type=\"checkbox\" name=\"kelas_id[]\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_checkbox("kelas_id[]", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id")), "html", null, true);
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
        // line 46
        echo "                    </ul>
                    ";
        // line 47
        echo form_error("kelas_id[]");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Sesi</label>
                <div class=\"controls\">
                    <input type=\"number\" name=\"sesi\" class=\"form-control\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, set_value("sesi"), "html", null, true);
        echo "\">
                </div>
                ";
        // line 55
        echo form_error("sesi");
        echo "
            </div>
            ";
        // line 57
        if (((isset($context["type"]) ? $context["type"] : null) == "tertulis")) {
            // line 58
            echo "            <div class=\"control-group\">
                <label class=\"control-label\">Konten <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <textarea name=\"konten\" id=\"konten\" class=\"texteditor\" >";
            // line 61
            echo set_value("konten");
            echo "</textarea>
                    ";
            // line 62
            echo form_error("konten");
            echo "
                </div>
            </div>
            ";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "file")) {
            // line 66
            echo "            <div class=\"control-group\">
                <label class=\"control-label\">Konten <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <textarea name=\"konten\" id=\"konten\" class=\"texteditor\">";
            // line 69
            echo set_value("konten");
            echo "</textarea>
                    ";
            // line 70
            echo form_error("konten");
            echo "
                </div>
                <label class=\"control-label\">File <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"file\" name=\"userfile\">
                    <div class=\"well well-small\">File yang diizinkan: <br>.doc, .zip, .rar, .txt, .docx, .xls, .xlsx, .pdf, .tar, .gz, .jpg, .jpeg, .JPG, .JPEG, .png, .ppt, .pptx</div>
                    ";
            // line 76
            echo (((!twig_test_empty((isset($context["error_upload"]) ? $context["error_upload"] : null)))) ? ((isset($context["error_upload"]) ? $context["error_upload"] : null)) : (""));
            echo "
                </div>
            </div>
            ";
        }
        // line 80
        echo "            <div class=\"control-group\">
                <div class=\"controls\">
                    ";
        // line 82
        if (((isset($context["type"]) ? $context["type"] : null) == "tertulis")) {
            // line 83
            echo "                        <button type=\"submit\" name=\"status\" value=\"preview\" class=\"btn btn-info\">Preview</button>
                        <button type=\"submit\" name=\"status\" value=\"draft\" class=\"btn btn-primary\">Simpan Saja</button>
                        <button type=\"submit\" name=\"status\" value=\"publish\" class=\"btn btn-success\">Simpan & Terbitkan</button>
                        <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, site_url("materi"), "html", null, true);
            echo "\" class=\"btn btn-default\"
                            ";
            // line 87
            if (twig_test_empty((isset($context["preview_id"]) ? $context["preview_id"] : null))) {
                // line 88
                echo "                            onclick=\"return confirm('Materi belum disimpan, anda yakin ingin kembali tanpa menyimpan?')\"
                            ";
            }
            // line 90
            echo "                        >Kembali</a>
                    ";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "file")) {
            // line 92
            echo "                        <button type=\"submit\" name=\"status\" value=\"draft\" class=\"btn btn-primary\">Simpan Saja</button>
                        <button type=\"submit\" name=\"status\" value=\"publish\" class=\"btn btn-success\">Simpan & Terbitkan</button>
                        <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, site_url("materi"), "html", null, true);
            echo "\" class=\"btn btn-default\">Kembali</a>
                    ";
        }
        // line 96
        echo "                </div>
            </div>
        ";
        // line 98
        echo form_close();
        echo "

    </div>
</div>
";
    }

    // line 104
    public function block_js($context, array $blocks = array())
    {
        // line 105
        echo "    ";
        if ((!twig_test_empty((isset($context["preview_id"]) ? $context["preview_id"] : null)))) {
            // line 106
            echo "    <script type=\"text/javascript\">
        window.open(site_url + '/materi/detail/";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["preview_id"]) ? $context["preview_id"] : null), "html", null, true);
            echo "', '_tab');
    </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "tambah-materi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 107,  250 => 106,  247 => 105,  244 => 104,  235 => 98,  231 => 96,  226 => 94,  222 => 92,  218 => 90,  214 => 88,  212 => 87,  208 => 86,  203 => 83,  201 => 82,  197 => 80,  190 => 76,  181 => 70,  177 => 69,  172 => 66,  165 => 62,  161 => 61,  156 => 58,  154 => 57,  149 => 55,  144 => 53,  135 => 47,  132 => 46,  118 => 42,  114 => 40,  110 => 39,  100 => 32,  97 => 31,  84 => 29,  80 => 28,  69 => 20,  65 => 19,  58 => 15,  53 => 13,  47 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
