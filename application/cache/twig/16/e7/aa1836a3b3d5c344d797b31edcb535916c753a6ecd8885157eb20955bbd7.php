<?php

/* list-kelompok.html */
class __TwigTemplate_16e7aa1836a3b3d5c344d797b31edcb535916c753a6ecd8885157eb20955bbd7 extends Twig_Template
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
        echo "Daftar Kelompok - ";
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
        echo anchor("kelompok", "Daftar Kelompok");
        echo "</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("tugas");
        echo "

          ";
        // line 15
        if ((is_admin() || is_pengajar())) {
            // line 16
            echo "          
            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#tambah-kelompok\">
                Tambah Kelompok 
            </button>

            ";
        }
        // line 22
        echo "            
            <div class=\"modal fade\" id=\"tambah-kelompok\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                        <div class=\"modal-header\"><b style=\"font-size: 20px;\">Tambah Kelompok</b></div>
                        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, site_url("kelompok/add"), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\">
                            <input type=\"hidden\" name=\"pengajar_id\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, get_sess_data("user", "id"), "html", null, true);
        echo "\">
                            <div class=\"modal-body\">
                                <div class=\"control-group\">
                                    <div class=\"control-label\">Nama Kelompok</div>
                                    <div class=\"controls\">
                                        <input type=\"text\" placeholder=\"Nama Kelompok\" name=\"kelompok_nama\" class=\"span3\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <div class=\"control-label\">Kelas</div>
                                    <div class=\"controls\">
                                        <select name=\"kelas_id\" id=\"kelas_id\" required class=\"span3\">
                                            <option value=\"\">Pilih Kelas</option>
                                            ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 42
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Batal</button>
                                <button type=\"submit\" class=\"btn btn-primary\">Simpan</button>
                            </div>
                        </form>
                </div>
            </div>
            </div>
        

        <br><br>
        <table class=\"table table-striped datatable\">
            <thead>
                <tr>
                    
                    <th>Nama Kelompok</th>
                    <th>Kelas</th>
                    <th>Pembimbing</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelompok"]) ? $context["kelompok"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 71
            echo "                <tr>
                    <td>
                        <span>";
            // line 73
            echo twig_escape_filter($this->env, strtoupper($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "kelompok_nama")), "html", null, true);
            echo "</span>
                    </td>
                    <td>
                        <span>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama_kelas"), "html", null, true);
            echo "</span>
                    </td>
                    <td>
                        <span>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama_pengajar"), "html", null, true);
            echo "</span>
                    </td>
                    <td>
                      <a class=\"btn btn-primary\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, site_url(("kelompok/detail/" . $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "kelompok_id"))), "html", null, true);
            echo "\" id=\"btn-submit\"><i class='icon-group'></i></a>
                      <a class=\"btn btn-success\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, site_url(("kelompok/diskusi/" . $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "kelompok_id"))), "html", null, true);
            echo "\" id=\"btn-submit\"><i class='icon-comments'></i></a>
                      <!-- <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, site_url(((("kelompok/atur_anggota/" . $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "kelas_id")) . "/") . $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "kelompok_id"))), "html", null, true);
            echo "\" class=\"btn btn-success\">Atur Anggota</a> -->
                      ";
            // line 85
            if ((is_admin() || is_pengajar())) {
                // line 86
                echo "                      <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#hapus-kelompok";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "kelompok_id"), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i>
                       
                    </button>
        
                    <div class=\"modal fade\" id=\"hapus-kelompok";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "kelompok_id"), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                                <form action=\"";
                // line 93
                echo twig_escape_filter($this->env, site_url("kelompok/add"), "html", null, true);
                echo "\" method=\"post\" class=\"form-horizontal\">
                                    <div class=\"modal-body\">
                                        <h3>Apakah anda yakin akan menghapus <b>";
                // line 95
                echo twig_escape_filter($this->env, strtoupper($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "kelompok_nama")), "html", null, true);
                echo "</b></h3>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Batal</button>
                                        <a href=\"";
                // line 99
                echo twig_escape_filter($this->env, site_url(("kelompok/delete/" . $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "kelompok_id"))), "html", null, true);
                echo "\" class=\"btn btn-danger\" >Hapus</a>
                                    </div>
                                </form>
                        </div>
                    </div>
                    </div>
                    ";
            }
            // line 106
            echo "                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "            </tbody>
        </table>

        <br>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "list-kelompok.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 109,  213 => 106,  203 => 99,  196 => 95,  191 => 93,  185 => 90,  177 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  157 => 79,  151 => 76,  145 => 73,  141 => 71,  137 => 70,  109 => 44,  98 => 42,  94 => 41,  78 => 28,  74 => 27,  67 => 22,  59 => 16,  57 => 15,  52 => 13,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
