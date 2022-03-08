<?php

/* hapus-data.html */
class __TwigTemplate_cdf249de0f7a96c14ec810af50afcdf897746733a9ef3e735294385f94008e84 extends Twig_Template
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
        echo "Hapus Data - ";
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
        <h3>Hapus Data</h3>
    </div>
    <div class=\"module-body\">
        <p><b>Note:</b> Data yang sudah dihapus tidak dapat dikembalikan lagi.</p>

        ";
        // line 15
        echo get_flashdata("hapus_data");
        echo "

        ";
        // line 17
        if (is_demo_app()) {
            // line 18
            echo "            ";
            echo get_alert("warning", get_demo_msg());
            echo "
        ";
        }
        // line 20
        echo "
        <form class=\"form-search\" method=\"post\" action=\"";
        // line 21
        echo twig_escape_filter($this->env, site_url("welcome/hapus_data/siswa"), "html", null, true);
        echo "\">
            <div class=\"input-append\">
                <input type=\"text\" class=\"span7\" placeholder=\"Siswa ID, pisah dengan koma jika lebih dari satu.\" name=\"siswa_id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, set_value("siswa_id"), "html", null, true);
        echo "\">
                <button type=\"submit\" class=\"btn btn-primary\">Hapus siswa</button>
            </div>
            <br>";
        // line 26
        echo form_error("siswa_id");
        echo "
        </form>
        <br>
        <form class=\"form-search\" method=\"post\" action=\"";
        // line 29
        echo twig_escape_filter($this->env, site_url("welcome/hapus_data/pengajar"), "html", null, true);
        echo "\">
            <div class=\"input-append\">
                <input type=\"text\" class=\"span7\" placeholder=\"Pengajar ID, pisah dengan koma jika lebih dari satu.\" name=\"pengajar_id\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, set_value("pengajar_id"), "html", null, true);
        echo "\">
                <button type=\"submit\" class=\"btn btn-primary\">Hapus pengajar</button>
            </div>
            <br>";
        // line 34
        echo form_error("pengajar_id");
        echo "
        </form>
        <br>
        <form class=\"form-search\" method=\"post\" action=\"";
        // line 37
        echo twig_escape_filter($this->env, site_url("welcome/hapus_data/tugas"), "html", null, true);
        echo "\">
            <div class=\"input-append\">
                <input type=\"text\" class=\"span7\" placeholder=\"Tugas ID, pisah dengan koma jika lebih dari satu.\" name=\"tugas_id\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, set_value("tugas_id"), "html", null, true);
        echo "\">
                <button type=\"submit\" class=\"btn btn-primary\">Hapus tugas</button>
            </div>
            <br>";
        // line 42
        echo form_error("tugas_id");
        echo "
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "hapus-data.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  106 => 39,  101 => 37,  95 => 34,  89 => 31,  84 => 29,  78 => 26,  72 => 23,  67 => 21,  64 => 20,  58 => 18,  56 => 17,  51 => 15,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
