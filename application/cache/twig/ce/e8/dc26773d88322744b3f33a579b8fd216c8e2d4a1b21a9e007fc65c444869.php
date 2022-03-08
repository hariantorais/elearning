<?php

/* tambah-tugas.html */
class __TwigTemplate_cee8dc26773d88322744b3f33a579b8fd216c8e2d4a1b21a9e007fc65c444869 extends Twig_Template
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
        echo "Tambah Tugas ";
        echo twig_escape_filter($this->env, (isset($context["type_label"]) ? $context["type_label"] : null), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"module\" >
    <div class=\"module-head\">
        <h3>";
        // line 10
        echo anchor("tugas", "Tugas");
        echo " / Tambah Tugas ";
        echo twig_escape_filter($this->env, (isset($context["type_label"]) ? $context["type_label"] : null), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("tugas");
        echo "

        ";
        // line 15
        echo form_open_multipart(("tugas/add/" . (isset($context["type"]) ? $context["type"] : null)), array("class" => "form-horizontal row-fluid"));
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
                <label class=\"control-label\">Kelas <span class=\"text-error\">*</span></label>
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
                <label class=\"control-label\">Sesi <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"number\" name=\"sesi\" class=\"span3\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, set_value("sesi"), "html", null, true);
        echo "\" required>
                    <br>";
        // line 54
        echo form_error("sesi");
        echo "
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">Info</label>
                <div class=\"controls\">
                    <textarea name=\"info\" id=\"info\" class=\"texteditor\">";
        // line 60
        echo set_value("info");
        echo "</textarea>
                    ";
        // line 61
        echo form_error("info");
        echo "
                </div>
            </div>
            ";
        // line 64
        if (((isset($context["type"]) ? $context["type"] : null) != 1)) {
            // line 65
            echo "            <div class=\"control-group\">
                <label class=\"control-label\">Durasi <span class=\"text-error\">*</span></label>
                <div class=\"controls\">
                    <input type=\"number\" name=\"durasi\" class=\"span3\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, set_value("durasi"), "html", null, true);
            echo "\" placeholder=\"Dalam menit\">
                    <br>";
            // line 69
            echo form_error("durasi");
            echo "
                </div>
            </div>
            ";
        }
        // line 73
        echo "            <div class=\"control-group\">
                <div class=\"controls\">
                    <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
                    <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, site_url("tugas"), "html", null, true);
        echo "\" class=\"btn btn-default\">Kembali</a>
                </div>
            </div>
        ";
        // line 79
        echo form_close();
        echo "

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "tambah-tugas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 79,  193 => 76,  188 => 73,  181 => 69,  177 => 68,  172 => 65,  170 => 64,  164 => 61,  160 => 60,  151 => 54,  147 => 53,  138 => 47,  135 => 46,  121 => 42,  117 => 40,  113 => 39,  103 => 32,  100 => 31,  87 => 29,  83 => 28,  72 => 20,  68 => 19,  61 => 15,  56 => 13,  48 => 10,  44 => 8,  41 => 7,  32 => 4,  29 => 3,);
    }
}
