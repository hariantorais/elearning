<?php

/* edit-kelas.html */
class __TwigTemplate_0410b18943fbab5aac2b10ae65165d7955236ae6d4912fac9e991bb53bb3d277 extends Twig_Template
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
        echo "Manajemen Kelas - ";
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
        <h3>Manajemen Kelas</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("kelas");
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
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                Edit Kelas
            </div>
            <div class=\"panel-body\">
                ";
        // line 24
        echo form_open(("kelas/edit/" . $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "id")), array("class" => "form-horizontal row-fluid"));
        echo "
                    <div class=\"control-group\">
                        <label class=\"control-label\">Nama Kelas <span class=\"text-error\">*</span></label>
                        <div class=\"controls\">
                            <input type=\"text\" name=\"nama\" class=\"span5\" placeholder=\"Nama Kelas\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, set_value("nama", $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "nama")), "html", null, true);
        echo "\">
                            ";
        // line 29
        echo form_error("nama");
        echo "
                        </div>
                    </div>
                    ";
        // line 32
        if ((!(null === $this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "parent_id")))) {
            // line 33
            echo "                    <div class=\"control-group\">
                        <label class=\"control-label\">Status</label>
                        <div class=\"controls\">
                            <label class=\"checkbox inline\">
                                <input type=\"checkbox\" value=\"1\" name=\"status\" ";
            // line 37
            echo twig_escape_filter($this->env, set_checkbox("status", "1", ((($this->getAttribute((isset($context["kelas"]) ? $context["kelas"] : null), "aktif") == 1)) ? (true) : (false))), "html", null, true);
            echo ">
                                Aktif
                            </label>
                        </div>
                    </div>
                    ";
        }
        // line 43
        echo "                    <div class=\"control-group\">
                        <div class=\"controls\">
                            ";
        // line 45
        if ((is_demo_app() == false)) {
            // line 46
            echo "                            <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
                            ";
        }
        // line 48
        echo "                            <a href=\"";
        echo twig_escape_filter($this->env, site_url("kelas"), "html", null, true);
        echo "\" class=\"btn\">Batal</a>
                        </div>
                    </div>
                ";
        // line 51
        echo form_close();
        echo "
            </div>
        </div>

        <p><b>NB:</b> Kelas tidak dapat dihapus namun dapat diubah menjadi tidak aktif.</p>

        ";
        // line 57
        echo (isset($context["kelas_hirarki"]) ? $context["kelas_hirarki"] : null);
        echo "

        <br>
        <div id=\"response_update\"></div>
        <button class=\"btn btn-primary\" id=\"update-hirarki\">Update Hirarki</button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "edit-kelas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 57,  121 => 51,  114 => 48,  110 => 46,  108 => 45,  104 => 43,  95 => 37,  89 => 33,  87 => 32,  81 => 29,  77 => 28,  70 => 24,  62 => 18,  56 => 16,  54 => 15,  49 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
