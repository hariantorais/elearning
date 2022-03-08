<?php

/* diskusi-pesan.php */
class __TwigTemplate_3095aef7c9fa1e3de85e184bf41ce3f4c4035712d43b0e2dad32974450dbf18e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
   ";
        // line 2
        if (($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "konten") == "membuat forum diskusi")) {
            // line 3
            echo "     <center><span style=\"background-color: rgb(209, 253, 209); padding: 5px; border-radius: 5px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "nama_pengajar"), "html", null, true);
            echo " telah ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "konten"), "html", null, true);
            echo " pada ";
            echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "date")), "html", null, true);
            echo "</span></center>  <br>
   ";
        } else {
            // line 5
            echo "       ";
            if ((is_siswa() == false)) {
                // line 6
                echo "         <div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "diskusi_id"), "html", null, true);
                echo "\" style=\"margin-bottom: 10px; background-color: white; width: 60%; padding: 5px;\" ";
                echo ((($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "pengajar_id") == get_sess_data("user", "id"))) ? ("class=\"pull-right\"") : ("class=\"pull-left\""));
                echo "  >
       ";
            }
            // line 8
            echo "
       ";
            // line 9
            if ((is_siswa() == true)) {
                // line 10
                echo "         <div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "diskusi_id"), "html", null, true);
                echo "\" style=\"margin-bottom: 10px; background-color: white; width: 60%; padding: 5px;\" ";
                echo ((($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "siswa_id") == get_sess_data("user", "id"))) ? ("class=\"pull-right\"") : ("class=\"pull-left\""));
                echo " >
       ";
            }
            // line 12
            echo "

       <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, site_url(("siswa/detail/" . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "siswa_id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "nama_siswa"), "html", null, true);
            echo "</a>
       <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, site_url(("pengajar/detail/" . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "pengajar_id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "nama_pengajar"), "html", null, true);
            echo "</a>
         <br>
           ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "konten"), "html", null, true);
            echo "
           <span class=\"pull-right\" style=\"font-weight: normal;\">";
            // line 18
            echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "date")), "html", null, true);
            echo "</span>
       </div>
       
   ";
        }
        // line 22
        echo "   

  ";
    }

    public function getTemplateName()
    {
        return "diskusi-pesan.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  68 => 15,  62 => 14,  50 => 10,  48 => 9,  45 => 8,  37 => 6,  34 => 5,  24 => 3,  22 => 2,  19 => 1,  129 => 36,  122 => 34,  115 => 30,  111 => 29,  107 => 28,  103 => 27,  98 => 24,  81 => 20,  79 => 18,  75 => 17,  58 => 12,  53 => 14,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
