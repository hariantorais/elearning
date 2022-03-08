<?php

/* daftar-tugas-siswa.html */
class __TwigTemplate_f0a0e6429916cf47fc57ec55dcc7832e0fede61be0ad1959c9be9b6a6867fb5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"btn-controls\">
    <div id=\"show-urgent-info\"></div>

    ";
        // line 7
        if (is_siswa()) {
            // line 8
            echo "    ";
            $context["peraturan"] = get_pengaturan("peraturan-elearning", "value");
            // line 9
            echo "    ";
            if ((!twig_test_empty((isset($context["peraturan"]) ? $context["peraturan"] : null)))) {
                // line 10
                echo "    <div class=\"btn-box-row row-fluid\">
         <div class=\"span12\">
            <div class=\"well well-small well-box\">
                <b>Peraturan e-learning : </b><br>
                ";
                // line 14
                echo (isset($context["peraturan"]) ? $context["peraturan"] : null);
                echo "
            </div>
         </div>
    </div>
    ";
            }
            // line 19
            echo "    

    <div class=\"btn-box-row row-fluid\">
        <div class=\"span6\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-tasks\"></i> Daftar Tugas</b><br><br>
                <table class=\"table table-striped table-condensed\">
                    <tr>
                        <th>Judul</th>
                        <th>Status</th>
                    </tr>
                    ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tugas_terbaru"]) ? $context["tugas_terbaru"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 31
                echo "                    <tr>
                        <td>
                            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, site_url(("tugas?judul=" . urlencode($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                echo " </a> 
                            <!-- (
                            ";
                // line 35
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 1)) {
                    // line 36
                    echo "                            BHS. INDONESIA
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 2)) {
                    // line 38
                    echo "                            BHS. INGGRIS
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 3)) {
                    // line 40
                    echo "                            MATEMATIKA
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 4)) {
                    // line 42
                    echo "                            PENJASKES
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 5)) {
                    // line 44
                    echo "                            PAI
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 6)) {
                    // line 46
                    echo "                            PPKn
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 7)) {
                    // line 48
                    echo "                            IPA
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 8)) {
                    // line 50
                    echo "                            IPS
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 9)) {
                    // line 52
                    echo "                            PRAKARYA
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 10)) {
                    // line 54
                    echo "                            SENI BUDAYA
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 11)) {
                    // line 56
                    echo "                            AQIDAH
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 12)) {
                    // line 58
                    echo "                            FIQIH
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 13)) {
                    // line 60
                    echo "                            BAHASA ARAB
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 14)) {
                    // line 62
                    echo "                            DO'A & DZIKIR
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 15)) {
                    // line 64
                    echo "                            KHOT IMLA'
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 16)) {
                    // line 66
                    echo "                            NAHWU
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 17)) {
                    // line 68
                    echo "                            SHOROF
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel_id") == 19)) {
                    // line 70
                    echo "                            TAJWID
                            ";
                }
                // line 72
                echo "                            ) -->
                            
                        </td>
                        <td align=\"center\">
                        ";
                // line 76
                if ((sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == true)) {
                    // line 77
                    echo "                           <i style=\"color: green\" class=\"icon-ok-sign\"></i>
                        ";
                }
                // line 78
                echo "        

                        ";
                // line 80
                if ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 0) && (sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == false))) {
                    // line 81
                    echo "                       
                        <i style=\"color: red\"><b>X</b></i>
                        
                        ";
                }
                // line 84
                echo "        
                        </td>
  
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                </table>
            </div>
        </div>

        <div class=\"span6\"></div>
    </div>
    ";
        }
        // line 96
        echo "
</div>
<!--/#btn-controls-->
";
    }

    public function getTemplateName()
    {
        return "daftar-tugas-siswa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 96,  194 => 89,  184 => 84,  178 => 81,  176 => 80,  172 => 78,  168 => 77,  166 => 76,  160 => 72,  156 => 70,  152 => 68,  148 => 66,  144 => 64,  140 => 62,  136 => 60,  132 => 58,  128 => 56,  124 => 54,  120 => 52,  116 => 50,  112 => 48,  108 => 46,  104 => 44,  100 => 42,  96 => 40,  92 => 38,  88 => 36,  86 => 35,  79 => 33,  75 => 31,  71 => 30,  58 => 19,  50 => 14,  44 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
