<?php

/* diskusi-pesan.html */
class __TwigTemplate_aa35a710337e7c80a56a50d12813c95ee88b75c758a938ab0938352d79cf0381 extends Twig_Template
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
        // line 3
        if ((is_siswa() == false)) {
            // line 4
            echo "         <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "diskusi_id"), "html", null, true);
            echo "\" style=\"margin-bottom: 10px; background-color: ";
            echo ((($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "pengajar_id") == get_sess_data("user", "id"))) ? ("rgb(193, 248, 207)") : ("white"));
            echo "; width: 70%; padding: 5px;\" class=\"";
            echo ((($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "pengajar_id") == get_sess_data("user", "id"))) ? ("pull-right") : ("pull-left"));
            echo "\" >
          
       ";
        }
        // line 7
        echo "
       ";
        // line 8
        if ((is_siswa() == true)) {
            // line 9
            echo "         <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "diskusi_id"), "html", null, true);
            echo "\" style=\"margin-bottom: 10px; background-color: ";
            echo ((($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "siswa_id") == get_sess_data("user", "id"))) ? ("rgb(193, 248, 207)") : ("white"));
            echo "; width: 70%; padding: 5px;\" class=\"";
            echo ((($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "siswa_id") == get_sess_data("user", "id"))) ? ("pull-right") : ("pull-left"));
            echo "\"  >
          
       ";
        }
        // line 12
        echo "
       ";
        // line 13
        if (($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "pengajar_id") == 0)) {
            // line 14
            echo "       <img style=\"height:40px;width:40px; margin-right: 10px; padding: 0px;border: 0px;\" class=\"img-polaroid img-circle ";
            echo ((($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "siswa_id") == get_sess_data("user", "id"))) ? ("pull-right") : ("pull-left"));
            echo "\" src=\"";
            echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "siswa_foto"), "medium", $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "siswa_jk")), "html", null, true);
            echo "\">
       ";
        }
        // line 16
        echo "
       ";
        // line 17
        if (($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "pengajar_id") > 0)) {
            // line 18
            echo "       <img style=\"height:40px;width:40px; margin-right: 10px; padding: 0px;border: 0px;\" class=\"img-polaroid img-circle ";
            echo ((($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "pengajar_id") == get_sess_data("user", "id"))) ? ("pull-right") : ("pull-left"));
            echo "\" src=\"";
            echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "pengajar_foto"), "medium", $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "pengajar_jk")), "html", null, true);
            echo "\">
       ";
        }
        // line 20
        echo "
       <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, site_url(("siswa/detail/" . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "siswa_id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "nama_siswa"), "html", null, true);
        echo "</a>
       <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, site_url(("pengajar/detail/" . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "pengajar_id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "nama_pengajar"), "html", null, true);
        echo "</a>
         <br>
           <span style=\"color: black;\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "konten"), "html", null, true);
        echo "</span> <br>
           <span class=\"pull-right\" style=\"font-weight: normal;\">";
        // line 25
        echo twig_escape_filter($this->env, format_datetime($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "date")), "html", null, true);
        echo "</span>
       </div>
       


  ";
    }

    public function getTemplateName()
    {
        return "diskusi-pesan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  94 => 24,  87 => 22,  81 => 21,  78 => 20,  70 => 18,  68 => 17,  65 => 16,  57 => 14,  55 => 13,  52 => 12,  41 => 9,  39 => 8,  36 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }
}
