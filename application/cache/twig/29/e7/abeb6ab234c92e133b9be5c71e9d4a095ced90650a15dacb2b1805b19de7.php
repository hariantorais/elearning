<?php

/* detail-materi.html */
class __TwigTemplate_29e7abeb6ab234c92e133b9be5c71e9d4a095ced90650a15dacb2b1805b19de7 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "judul"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"span6\">
<div class=\"module\">
    <div class=\"module-head\"  style=\"background-color: white\">  
        
        <img style=\"height:45px;width:45px; margin-right: 10px;padding: 0;border: 0;\" class=\"img-polaroid img-circle pull-left\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "pembuat"), "link_foto"), "html", null, true);
        echo "\">
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "pembuat"), "link_profil"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "pembuat"), "nama"), "html", null, true);
        echo "</a>
                menambahkan materi pada <b style=\"color: darkorange;\">sesi #";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "sesi"), "html", null, true);
        echo "</b> mata pelajaran <b style=\"color: darkorange;\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "mapel"), "nama"), "html", null, true);
        echo "</b> <br>
                <time style=\"font-weight: normal;\" class=\"timeago\" datetime=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "tgl_posting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "tgl_posting"), "html", null, true);
        echo "</time>
    </div>
    <div class=\"module-body\" style=\"background-color: white;\">
      <span style=\"color: black; font-size: 20px;\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "judul"), "html", null, true);
        echo "</span>
        <div class=\"wrap-content\" style=\"font-weight: normal;\">
            <div class=\"content\">
                ";
        // line 21
        echo $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "konten");
        echo "
                <div style=\"background-color: rgb(220, 232, 238);border-radius: 3px;padding: 5px 10px 5px 10px;\">
                ";
        // line 23
        if (($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "file") != null)) {
            // line 24
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, site_url(((("welcome/download_materi/" . $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "file")) . "/") . $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "id"))), "html", null, true);
            echo "\" style=\"font-weight: bold;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "file"), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 26
            echo "                <i>Tidak ada file</i>
                ";
        }
        // line 28
        echo "                </div>
            </div>
        </div>
  
        ";
        // line 32
        if ((!array_key_exists("error", $context))) {
            // line 33
            echo "            <hr>
            <div class=\"row-fluid\">
                <div class=\"span12\">
                    <h4>
                        <i class=\"icon-pencil\"></i> Tulis komentar
                        <div class=\"pull-right\" style=\"font-size: 14px;\">";
            // line 38
            echo form_error("komentar");
            echo "</div>
                    </h4>
                    <div class=\"bg-form-komentar\" id=\"form-komentar\">
                        <form method=\"post\" action=\"";
            // line 41
            echo twig_escape_filter($this->env, site_url(("materi/detail/" . $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "id"))), "html", null, true);
            echo "\">
                            <p><textarea class=\"span12 texteditor-komentar\" id=\"komentar\" name=\"komentar\">";
            // line 42
            echo set_value("komentar");
            echo "</textarea></p>
                            <p>
                                <button class=\"btn btn-primary pull-right\" title=\"Kirim komentar\">Kirim komentar</button>
                                <img style=\"border:0px; padding: 1px; width: 35px;height: 35px;\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, get_url_image_session(get_sess_data("user", "foto"), "medium", get_sess_data("user", "jenis_kelamin")), "html", null, true);
            echo "\" style=\"height:30px;width:30px; margin-right:5px;\" class=\"img-circle img-polaroid\">
                                Kamu
                            </p>
                            <div class=\"clear\"></div>
                        </form>
                    </div>
                    <br>

                    ";
            // line 53
            if (($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "jml_komentar") > 0)) {
                // line 54
                echo "                        <h4><i class=\"icon-comments\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "jml_komentar"), "html", null, true);
                echo " Komentar</h4>

                        ";
                // line 56
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "komentar"));
                foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                    // line 57
                    echo "                        <div class=\"komentar\" id=\"komentar-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
                    echo "\">
                            <img style=\"border:0px; padding: 1px; width: 40px;height: 40px;\" src=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "login"), "link_image"), "html", null, true);
                    echo "\" style=\"height:25px;width:25px; margin-left:5px;\" class=\"img-circle img-polaroid\">
                            <a href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "login"), "link_profil"), "html", null, true);
                    echo "\">
                                <b style=\"color: rgb(29, 29, 170);\">
                                    ";
                    // line 61
                    if (($this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "login"), "id") == get_sess_data("user", "id"))) {
                        // line 62
                        echo "                                    Kamu
                                    ";
                    } else {
                        // line 64
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "login"), "nama"), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 66
                    echo "                                </b>
                            </a> 
                                <span>";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "login"), "kelas"), "html", null, true);
                    echo "</span>
                               <small class=\"pull-right\"><time style=\"font-weight: normal;\" class=\"timeago\" datetime=\"";
                    // line 69
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "tgl_posting"), "d F Y H:i:s"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "tgl_posting"), "html", null, true);
                    echo "</time></small>
                                
                                <!-- <small><a href=\"";
                    // line 71
                    echo twig_escape_filter($this->env, site_url(((("materi/detail/" . $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "id")) . "/laporkan/") . $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"))), "html", null, true);
                    echo "\" class=\"text-muted iframe-laporkan\"><i class=\"icon-bug\"></i> laporkan</a></small> -->
                            <br>
                            <span style=\"font-weight: normal;\">";
                    // line 73
                    echo $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "konten");
                    echo "</span style=\"font-weight: normal;\">
                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "
                        <div style=\"font-size:12px;\">
                        ";
                // line 78
                echo $this->getAttribute((isset($context["materi"]) ? $context["materi"] : null), "komentar_pagination");
                echo "
                        </div>
                    ";
            }
            // line 81
            echo "                </div><hr>
            </div>

        ";
        } else {
            // line 85
            echo "            <div class=\"alert alert-danger\">
                <h3>";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</h3>
            </div>
        ";
        }
        // line 89
        echo "          
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "detail-materi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 89,  226 => 86,  223 => 85,  217 => 81,  211 => 78,  207 => 76,  198 => 73,  193 => 71,  186 => 69,  182 => 68,  178 => 66,  172 => 64,  168 => 62,  166 => 61,  161 => 59,  157 => 58,  152 => 57,  148 => 56,  142 => 54,  140 => 53,  129 => 45,  123 => 42,  119 => 41,  113 => 38,  106 => 33,  104 => 32,  98 => 28,  94 => 26,  86 => 24,  84 => 23,  79 => 21,  73 => 18,  65 => 15,  59 => 14,  53 => 13,  49 => 12,  43 => 8,  40 => 7,  32 => 4,  29 => 3,);
    }
}
