<?php

/* list-sesi.html */
class __TwigTemplate_de1221a3f334ecc819d187e3cb127d12e7dbfe54982e0595450b161c1d41300c extends Twig_Template
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
        echo "Sesi - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"module span8\">
  <div class=\"module-body\" style=\"background-color: rgb(255, 255, 255);\">
    <b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mapel"]) ? $context["mapel"] : null), "nama"), "html", null, true);
        echo "</b>
  </div>
</div>
<!-- JIKA SISWA -->
";
        // line 14
        if ((is_siswa() == true)) {
            // line 15
            echo "
<div class=\"span5\">
  ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mapel_sesi"]) ? $context["mapel_sesi"] : null));
            foreach ($context['_seq'] as $context["no"] => $context["m"]) {
                // line 18
                echo "<div class=\"module\">
    <div class=\"module-head\"  style=\"background-color: white\">  
        
        <img style=\"height:45px;width:45px; margin-right: 10px;padding: 0;border: 0;\" class=\"img-polaroid img-circle pull-left\" src=\"";
                // line 21
                echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "foto"), "medium", $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "jenis_kelamin")), "html", null, true);
                echo "\">
        <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, site_url(((("pengajar/detail/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pengajar_id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
                echo "</a>
                menambahkan materi pada <b style=\"color: darkorange;\">sesi #";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "sesi"), "html", null, true);
                echo "</b> mata pelajaran <b style=\"color: darkorange;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mapel"]) ? $context["mapel"] : null), "nama"), "html", null, true);
                echo "</b> <br>
                <time style=\"font-weight: normal;\" class=\"timeago\" datetime=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_posting"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_posting"), "html", null, true);
                echo "</time>
    </div>
    <div class=\"module-body\" style=\"background-color: white;\">
      <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, site_url(("materi/detail/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"))), "html", null, true);
                echo "\" style=\"font-size: 20px;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                echo "</a>
      
      </div>
    </div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['no'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "</div>


<div class=\"span3\">
  <h4>Tugas belum dikerjakan</h4>
    ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tugas_terbaru"]) ? $context["tugas_terbaru"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 39
                echo "        ";
                if ((sudah_ngerjakan($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "tugas_id"), get_sess_data("user", "id")) == false)) {
                    // line 40
                    echo "        <div class=\"module\">
          <div class=\"module-header\" style=\"padding: 5px;background-color: rgb(222, 239, 240);\">
            Tugas  - <span>Sesi #";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "sesi"), "html", null, true);
                    echo "</span> ";
                    if (($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "type_id") == 3)) {
                        echo " <b style=\"color: rgb(255, 255, 255);background-color: rgb(235, 148, 90);padding: 3px;border-radius: 2px;\">Quiz</b> ";
                    }
                    // line 43
                    echo "          </div>
          <div class=\"module-body\" style=\"background-color: white;\">
          ";
                    // line 45
                    if ((($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "tampil_siswa") == 1) && ($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "aktif") == 1))) {
                        // line 46
                        echo "          <b>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "judul"), "html", null, true);
                        echo "</b>
          
          <a style=\"text-decoration: none;\" type=\"button\" class=\"pull-right\" data-toggle=\"modal\" data-target=\"#mulai-mengerjakan";
                        // line 48
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "tugas_id"), "html", null, true);
                        echo "\"><i class=\"icon-arrow-right\"></i>
            Kerjakan
          </a>

          <div class=\"modal fade\" id=\"mulai-mengerjakan";
                        // line 52
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "tugas_id"), "html", null, true);
                        echo "\" tabindex=\"-1\" role=\"dialog\">
          <div class=\"modal-dialog\" role=\"document\">
              <div class=\"modal-content\">
                  <div class=\"modal-body\">
                      <span style=\"font-size: 15px;\">Apakah antum siap mengerjakan tugas ini ";
                        // line 56
                        echo twig_escape_filter($this->env, strtoupper(get_sess_data("user", "nama")), "html", null, true);
                        echo " ?</span>
                  </div>
                  <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Belum</button>
                      <a class=\"btn btn-primary\" href=\"";
                        // line 60
                        echo twig_escape_filter($this->env, site_url(("tugas/kerjakan/" . $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "tugas_id"))), "html", null, true);
                        echo "\" id=\"btn-submit\">Siap</a>
                  </div>
              </div>
          </div>
          </div>
          
          ";
                    } else {
                        // line 67
                        echo "            <span style=\"color: black;\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "judul"), "html", null, true);
                        echo "</span>
            <div class=\"pull-right\">
              <span> <i> Tugas berakhir</i></span>
            </div>
          ";
                    }
                    // line 72
                    echo "          </div>
        </div>
        ";
                }
                // line 75
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "
      <h4>Tugas selesai</h4>
      ";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tugas_selesai"]) ? $context["tugas_selesai"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 79
                echo "        ";
                if ((sudah_ngerjakan($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "tugas_id"), get_sess_data("user", "id")) == true)) {
                    // line 80
                    echo "        <div class=\"module\">
          <div class=\"module-header\" style=\"padding: 5px; background-color: rgb(222, 239, 240);\">
            Tugas  - <span>Sesi #";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "sesi"), "html", null, true);
                    echo "</span>
          </div>
          <div class=\"module-body\" style=\"background-color: white;\">
          <span style=\"color: black;\">";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "judul"), "html", null, true);
                    echo " </span>
          <div class=\"pull-right\">
            ";
                    // line 87
                    if (($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "nilai") < 60)) {
                        // line 88
                        echo "              <span style=\"background-color: rgb(223, 25, 42);padding: 5px;border-radius: 5px;color: white;\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "nilai"), "html", null, true);
                        echo "</span>
              ";
                    } else {
                        // line 89
                        echo "  
              <span style=\"background-color: rgb(106, 156, 230);padding: 5px;border-radius: 5px;color: white;\">";
                        // line 90
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "nilai"), "html", null, true);
                        echo "</span>
            ";
                    }
                    // line 92
                    echo "          </div>
          </div>
        </div>
        ";
                }
                // line 96
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "</div>
";
        }
        // line 99
        echo "
";
        // line 100
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "list-sesi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 100,  251 => 99,  247 => 97,  241 => 96,  235 => 92,  230 => 90,  227 => 89,  221 => 88,  219 => 87,  214 => 85,  208 => 82,  204 => 80,  201 => 79,  197 => 78,  193 => 76,  187 => 75,  182 => 72,  173 => 67,  163 => 60,  156 => 56,  149 => 52,  142 => 48,  136 => 46,  134 => 45,  130 => 43,  124 => 42,  120 => 40,  117 => 39,  113 => 38,  106 => 33,  92 => 27,  84 => 24,  78 => 23,  72 => 22,  68 => 21,  63 => 18,  59 => 17,  55 => 15,  53 => 14,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
