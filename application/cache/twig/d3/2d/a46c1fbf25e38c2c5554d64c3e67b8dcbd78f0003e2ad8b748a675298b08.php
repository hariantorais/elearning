<?php

/* tambah-mapel-kelas.html */
class __TwigTemplate_d32da46c1fbf25e38c2c5554d64c3e67b8dcbd78f0003e2ad8b748a675298b08 extends Twig_Template
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
        echo "Matapelajaran Kelas - ";
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
        echo anchor((isset($context["uri_back"]) ? $context["uri_back"] : null), "Matapelajaran Kelas");
        echo " / Atur Matapelajaran</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("mapel");
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
        <div class=\"bs-callout bs-callout-info\">
            <b><a class=\"as-link pull-right\" data-toggle=\"collapse\" data-target=\"#form-add-mapel\">Tambah Matapelajaran</a></b>
            Pilih Matapelajaran yang ingin dimasukkan pada <b>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "nama", array(), "array"), "html", null, true);
        echo "</b>

            <div id=\"form-add-mapel\" ";
        // line 23
        if (((isset($context["post_mapel"]) ? $context["post_mapel"] : null) == 0)) {
            echo " class=\"collapse\" ";
        }
        echo ">
                ";
        // line 24
        if ((is_demo_app() == false)) {
            // line 25
            echo "                ";
            echo form_open(((((("kelas/mapel_kelas/add/" . $this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "id", array(), "array")) . "/") . $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "id", array(), "array")) . "/") . enurl_redirect((isset($context["uri_back"]) ? $context["uri_back"] : null))), array("class" => "form-horizontal row-fluid", "style" => "margin-top:20px;"));
            echo "
                ";
        }
        // line 27
        echo "                    <input type=\"hidden\" name=\"add-mapel\" value=\"1\">
                    <div class=\"control-group\">
                        <label class=\"control-label\">Nama <span class=\"text-error\">*</span></label>
                        <div class=\"controls\">
                            <input type=\"text\" name=\"nama\" class=\"span8\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
        echo "\">
                            <br>";
        // line 32
        echo form_error("nama");
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">Deskripsi</label>
                        <div class=\"controls\">
                            <textarea name=\"info\" class=\"span12\" rows=\"5\">";
        // line 38
        echo set_value("info");
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <div class=\"controls\">
                            ";
        // line 43
        if ((is_demo_app() == false)) {
            // line 44
            echo "                            <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
                            ";
        }
        // line 46
        echo "                        </div>
                    </div>
                ";
        // line 48
        if ((is_demo_app() == false)) {
            // line 49
            echo "                ";
            echo form_close();
            echo "
                ";
        }
        // line 51
        echo "            </div>
        </div>
        <br>

        ";
        // line 55
        if ((is_demo_app() == false)) {
            // line 56
            echo "        ";
            echo form_open(((((("kelas/mapel_kelas/add/" . $this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "id", array(), "array")) . "/") . $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "id", array(), "array")) . "/") . enurl_redirect((isset($context["uri_back"]) ? $context["uri_back"] : null))));
            echo "
        ";
        }
        // line 58
        echo "        <table class=\"table table-striped\">
        <tbody>
            <tr>
                <td>
                    <label><input type=\"checkbox\" class=\"checkAll\" style=\"margin-top:-3px;margin-right:5px;\"/> Pilih semua</label>
                </td>
            </tr>
            ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapels"]) ? $context["mapels"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 66
            echo "            ";
            $context["checked"] = get_row_data("mapel_model", "retrieve_kelas", array(0 => null, 1 => $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "id", array(), "array"), 2 => $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")));
            // line 67
            echo "            <tr>
                <td>
                    <label><input class=\"checkbox-mapel\" type=\"checkbox\" name=\"mapel[]\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\" style=\"margin-top:-2px;margin-right:5px;\" ";
            echo ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") != 1)) ? ("disabled") : (""));
            echo " ";
            echo (((twig_test_empty((isset($context["checked"]) ? $context["checked"] : null)) || ($this->getAttribute((isset($context["checked"]) ? $context["checked"] : null), "aktif") == 0))) ? ("") : ("checked"));
            echo "> <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
            echo "</b></label>
                    <small>";
            // line 70
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "info"), "html", null, true));
            echo "</small>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            <tr>
                <td>
                    <label><input type=\"checkbox\" class=\"checkAll\" style=\"margin-top:-3px;margin-right:5px;\"/> Pilih semua</label>
                </td>
            </tr>
        </tbody>
        </table>
        <br>
        ";
        // line 82
        if ((is_demo_app() == false)) {
            // line 83
            echo "        <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
        ";
        }
        // line 85
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["uri_back"]) ? $context["uri_back"] : null), "html", null, true);
        echo "\" class=\"btn btn-default\">Kembali</a>

        ";
        // line 87
        if ((is_demo_app() == false)) {
            // line 88
            echo "        ";
            echo form_close();
            echo "
        ";
        }
        // line 90
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tambah-mapel-kelas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 90,  212 => 88,  210 => 87,  204 => 85,  200 => 83,  198 => 82,  188 => 74,  178 => 70,  168 => 69,  164 => 67,  161 => 66,  157 => 65,  148 => 58,  142 => 56,  140 => 55,  134 => 51,  128 => 49,  126 => 48,  122 => 46,  118 => 44,  116 => 43,  108 => 38,  99 => 32,  95 => 31,  89 => 27,  83 => 25,  81 => 24,  75 => 23,  70 => 21,  65 => 18,  59 => 16,  57 => 15,  52 => 13,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
