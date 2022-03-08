<?php

/* absen_siswa.html */
class __TwigTemplate_cc267488bfa02d79ce79c15da5930fac046c35e1964bd0e82ec8b4dfa7e2dd93 extends Twig_Template
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
        echo "Daftar Hadir Santri ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "judul"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "mapel"), "nama"), "html", null, true);
        echo " - ";
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
        echo " / Kehadiran Santri</h3>
    </div>
    <div class=\"module-body\">
                
                    ";
        // line 14
        if ((!array_key_exists("error", $context))) {
            // line 15
            echo "                
                    <table class=\"table\" width=\"100%\">
                        <tr>
                            <td width=\"30%\">Judul Materi</td>
                            <td width=\"2%\">:</td>
                            <td><b>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "judul"), "html", null, true);
            echo "</b></td>
                        </tr>
                        <tr>
                            <td>Mata Pelajaran</td>
                            <td>:</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "mapel"), "nama"), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <td>Untuk Kelas</td>
                            <td>:</td>
                            <td>
                                ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "materi_kelas"));
            foreach ($context['_seq'] as $context["_key"] => $context["mk"]) {
                // line 32
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "nama"), "html", null, true);
                echo ",
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                            </td>
                        </tr>
                
                        <tr>
                            <td width=\"30%\">Guru</td>
                            <td width=\"2%\">:</td>
                            <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "pembuat"), "link_profil"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "pembuat"), "nama"), "html", null, true);
            echo "</a></td>
                      
                        </tr>
                        <tr>
                            <td>Diposting Pada</td>
                            <td>:</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "tgl_posting")), "html", null, true);
            echo "</td>
                        </tr>
                        
                    </table>
              
                 ";
        }
        // line 51
        echo " <hr>

                 <div>

                    <form method='post' target='_blank' action=\"";
        // line 55
        echo twig_escape_filter($this->env, site_url("materi/excel"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"materi_id\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "id"), "html", null, true);
        echo "\">
                        <button class='btn btn-primary btn-sm'>Export Excel</button>
                    </form>

                 </div><br>
                    
                    <table class=\"table table-striped datatable\" width=\"100%\">
                        <thead>
                        <tr class=\"active\">
                            <th style=\"text-align: center;\"></th>
                            <th style=\"text-align: center;\">Waktu Masuk</th>
                            <th style=\"text-align: center;\">Nama Siswa</th>
                            <th style=\"text-align: center;\">Kelas</th>
                            ";
        // line 69
        if ((is_admin() == true)) {
            // line 70
            echo "                            <th></th>
                            ";
        }
        // line 72
        echo "                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absen"]) ? $context["absen"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 76
            echo "                            <tr>
                                <td></td>
                                <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "waktu"), "html", null, true);
            echo "</td>
                                <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "siswa_nama"), "html", null, true);
            echo "</td>
                                <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "kelas_nama"), "html", null, true);
            echo "</td>

                                ";
            // line 82
            if ((is_admin() == true)) {
                // line 83
                echo "                                <td>
                                    <form method=\"post\" action=\"";
                // line 84
                echo twig_escape_filter($this->env, site_url("materi/hapus_absen"), "html", null, true);
                echo "\">
                                        <input type=\"hidden\" name=\"materi_id\" value=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "id"), "html", null, true);
                echo "\">
                                        <input type=\"hidden\" name=\"absen_id\" value=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"), "html", null, true);
                echo "\">
                                        <button class=\"btn btn-danger\" onclick=\"return confirm('Anda yakin ingin menghapus | ";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "siswa_nama"), "html", null, true);
                echo " | ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "kelas_nama"), "html", null, true);
                echo " ?')\"><i class=\"icon-trash\"></i></button>
                                    </form>
                                </td>
                                ";
            }
            // line 91
            echo "                                
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                        </tbody>
                    </table>
                
                    
                
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "absen_siswa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 94,  208 => 91,  199 => 87,  195 => 86,  191 => 85,  187 => 84,  184 => 83,  182 => 82,  177 => 80,  173 => 79,  169 => 78,  165 => 76,  161 => 75,  156 => 72,  152 => 70,  150 => 69,  134 => 56,  130 => 55,  124 => 51,  115 => 46,  104 => 40,  96 => 34,  87 => 32,  83 => 31,  74 => 25,  66 => 20,  59 => 15,  57 => 14,  50 => 10,  46 => 8,  43 => 7,  32 => 4,  29 => 3,);
    }
}
