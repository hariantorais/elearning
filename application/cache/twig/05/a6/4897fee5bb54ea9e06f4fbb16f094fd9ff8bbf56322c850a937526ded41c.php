<?php

/* ujian-online.html */
class __TwigTemplate_05a64897fee5bb54ea9e06f4fbb16f094fd9ff8bbf56322c850a937526ded41c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-ujian.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-ujian.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "judul"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"wrap\" style=\"font-size: 14px\">
    <div class=\"container\">
        <div class=\"row-fluid\">
                
                   ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") != 1)) {
            // line 13
            echo "                    <div class=\"pull-right clock\" data-spy=\"affix\" ><br>
                            <table>
                                <tr class=\"visible-desktop\">
                                    <td align=\"center\">
                                            <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, get_url_image_session(get_sess_data("user", "foto"), "medium", get_sess_data("user", "jenis_kelamin")), "html", null, true);
            echo "\" class=\"nav-avatar img-polaroid img-circle\" style=\"width: 100px; height: 100px\"><br>
                                            <b>";
            // line 18
            echo twig_escape_filter($this->env, strtoupper(nama_panggilan(get_sess_data("user", "nama"))), "html", null, true);
            echo "</b>
                                            <br>
                                            ";
            // line 20
            echo twig_escape_filter($this->env, get_sess_data("user", "nis"), "html", null, true);
            echo "<hr>
                                            
                                    </td>
                                </tr>
                                <tr class=\"hidden-phone\">
                                    <td align=\"center\">Sisa Waktu</td>
                                </tr>
                                <tr>
                                    <td align=\"center\">
                                        
                                        <div class=\"iosl-theme-wrapper countdown\" ";
            // line 30
            echo ((((isset($context["hide_countdown"]) ? $context["hide_countdown"] : null) == 1)) ? ("style=\"display:none;\"") : (""));
            echo ">
                                        <div class=\"visible-phone\" style=\"background: yellow\">
                                        <b class=\"hours\">00</b> : <b class=\"minutes\">00</b>
                                        </div>
                                        <div class=\"visible-desktop visible-tablet\" style=\"background: yellow\">
                                        <b class=\"hours\">00</b> : <b class=\"minutes\">00</b>
                                        </div><hr>
                                        
                                    </td>
                                </tr>
                            </table>
                            
                    </div>
                    ";
        }
        // line 44
        echo "                
            
            <!-- <div class=\"span3\">
                <ul class=\"unstyled inline pull-right user-info\">
                    <li><b>";
        // line 48
        echo twig_escape_filter($this->env, nama_panggilan(get_sess_data("user", "nama")), "html", null, true);
        echo "</b></li>
                    <li><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, get_url_image_session(get_sess_data("user", "foto"), "medium", get_sess_data("user", "jenis_kelamin")), "html", null, true);
        echo "\" </li>
                </ul>
            </div> -->
        </div>
        <br>
        <div class=\"wrap-content\">
            <div class=\"pull-right visible-phone\">";
        // line 55
        echo twig_escape_filter($this->env, strtoupper(nama_panggilan(get_sess_data("user", "nama"))), "html", null, true);
        echo "
                <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, get_url_image_session(get_sess_data("user", "foto"), "medium", get_sess_data("user", "jenis_kelamin")), "html", null, true);
        echo "\" class=\"nav-avatar img-polaroid img-circle\" style=\"width: 30px; height: 30px;\">
            </div><br>
            <div class=\"span2\"></div>
            <div class=\"content span8\">

                <h3 align=\"center\">";
        // line 61
        echo twig_escape_filter($this->env, strtoupper($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "judul")), "html", null, true);
        echo "</h3>
                
                    ";
        // line 63
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") != 1)) {
            // line 64
            echo "                    <div class=\"span8\">
                        <b><i>";
            // line 65
            echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "info");
            echo "</i></b>
                    </div>
                    
                    ";
        } else {
            // line 69
            echo "                    
                        <div class=\"module\">
                            <div class=\"module-head\"><b>Informasi Tugas</b></div>
                            <div class=\"module-body\">
                                <p>";
            // line 73
            echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "info");
            echo "</p>
                            </div>
                        </div>
                    
                        <div class=\"module\">
                            <div class=\"module-head\"><b>Jawaban</b></div>
                            <div class=\"module-body\">
                                ";
            // line 80
            echo form_open_multipart(((("tugas/submit_upload/" . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id")) . "/") . $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unix_id")));
            echo "
                                <input type=\"file\" name=\"userfile\">
                                <hr class=\"hr1\">
                                <div class=\"row-fluid\">
                                    <div class=\"span3\">
                                        <button type=\"submit\" class=\"btn btn-success\">Upload</button>
                                    </div>
                                    <div class=\"span9\">
                                        ";
            // line 88
            echo get_flashdata("upload");
            echo "
                                    </div>
                                </div><br>
                                ";
            // line 91
            echo form_close();
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 95
        echo "                

                ";
        // line 97
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") == 3)) {
            // line 98
            echo "                    <table class=\"table\">
                        <!-- <thead>
                            <tr>
                                <th width=\"5%\">No</th>
                                <th>Pertanyaan ";
            // line 102
            echo ((($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") == 3)) ? (" dan Pilihan") : (""));
            echo "</th>
                            </tr>
                        </thead> -->
                        <tbody>
                            ";
            // line 106
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pertanyaan"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 107
                echo "                            <tr id=\"pertanyaan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                                <td width=\"5%\"><b>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ".</b></td>
                                <td>
                                    <div class=\"pertanyaan\">
                                        ";
                // line 111
                echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
                echo "
                                    </div>

                                    <div id=\"pilihan-";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                                        <table class=\"table table-condensed table-striped\">
                                            <tbody>
                                                ";
                // line 117
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan"));
                foreach ($context['_seq'] as $context["_key"] => $context["pil"]) {
                    if ((!twig_test_empty($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten")))) {
                        // line 118
                        echo "                                                <tr>
                                                    <td style=\"width: 40px\"><label class=\"label-radio\"><input ";
                        // line 119
                        echo ((is_pilih($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "jawaban"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id"))) ? ("checked") : (""));
                        echo " type=\"radio\" name=\"pilihan-";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "urutan"), "html", null, true);
                        echo "\" onclick=\"update_ganda(";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id"), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id"), "html", null, true);
                        echo ")\" class=\"radio\">&nbsp;&nbsp;<b>";
                        echo twig_escape_filter($this->env, get_abjad($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "urutan")), "html", null, true);
                        echo ".</b></label></td>
                                                    <td>
                                                        ";
                        // line 121
                        echo $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten");
                        echo "
                                                    </td>
                                                </tr>
                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pil'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "                                            </tbody>
                                        </table>
                                    </div>
                                    <br><br><br>
                                </td>
                            </tr>

                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                        </tbody>
                    </table>

                    <div class=\"well well-sm\">
                        <p style=\"color: red\">Periksa kembali jawaban antum sebelum mengakhiri ujian ini.</p>
                        <button type=\"button\" class=\"btn btn-sm btn-success\" data-toggle=\"modal\" data-target=\"#selesai-mengerjakan\">
                            Selesai Mengerjakan
                        </button>
                    </div>

                    <div class=\"modal fade\" id=\"selesai-mengerjakan\" tabindex=\"-1\" role=\"dialog\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-body\">
                                    Alhadmulillah. Ana sudah menjawab dengan jujur. <br>
                                    Ana yakin akan mengakhiri ujian ini.
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Nanti dulu</button>
                                    <a class=\"btn btn-primary\" href=\"";
            // line 152
            echo twig_escape_filter($this->env, site_url(((("tugas/finish/" . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id")) . "/") . $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unix_id"))), "html", null, true);
            echo "\" id=\"btn-submit\"> Selesai</a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 158
        echo "

                ";
        // line 160
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") == 2)) {
            // line 161
            echo "                    ";
            echo form_open(((("tugas/submit_essay/" . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id")) . "/") . $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unix_id")), array("id" => "form-essay"));
            echo "
                    <input type=\"hidden\" id=\"str_id\" value=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "str_id"), "html", null, true);
            echo "\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th width=\"5%\">No</th>
                                <th>Pertanyaan ";
            // line 167
            echo ((($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") == 3)) ? (" dan Pilihan") : (""));
            echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 171
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pertanyaan"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 172
                echo "                            <tr id=\"pertanyaan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                                <td><b>";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ".</b></td>
                                <td>
                                    <div class=\"pertanyaan\">
                                        ";
                // line 176
                echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
                echo "
                                    </div>

                                    <textarea name=\"jawaban[";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "]\" id=\"jawaban-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">";
                echo get_jawaban($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "jawaban"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"));
                echo "</textarea>

                                </td>
                            </tr>

                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "                        </tbody>
                    </table>

                    <div class=\"well well-sm\">
                        <p style=\"color: red\">Periksa kembali jawaban anda sebelum mengahiri pengerjaan tugas ini.</p>
                        <button type=\"button\" class=\"btn btn-large btn-primary\" data-toggle=\"modal\" data-target=\"#selesai-mengerjakan\">
                            Selesai Mengerjakan
                        </button>
                    </div>
                    ";
            // line 194
            echo form_close();
            echo "

                    <div class=\"modal fade\" id=\"selesai-mengerjakan\" tabindex=\"-1\" role=\"dialog\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-body\">
                                    Anda yakin ingin mengakhiri pengerjaan tugas ini?
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Nanti dulu</button>
                                    <button type=\"button\" class=\"btn btn-primary\" id=\"btn-submit\">Ya, saya sudah selesai</button>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 210
        echo "
            </div>
            <div class=\"span1\"></div>
        </div>
    </div>
</div>
";
        // line 216
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") != 1)) {
            // line 217
            echo "<input type=\"hidden\" id=\"process-submit\" value=\"0\">
<input type=\"hidden\" id=\"tugas_id\" value=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id"), "html", null, true);
            echo "\">
<input type=\"hidden\" id=\"type_id\" value=\"";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id"), "html", null, true);
            echo "\">
<input type=\"hidden\" id=\"sisa_menit\" value=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sisa_menit"), "html", null, true);
            echo "\">
<input type=\"hidden\" id=\"finish_url\" value=\"";
            // line 221
            echo twig_escape_filter($this->env, site_url(((("tugas/finish/" . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id")) . "/") . $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unix_id"))), "html", null, true);
            echo "\">
<input type=\"hidden\" id=\"siswa_id\" value=\"";
            // line 222
            echo twig_escape_filter($this->env, get_sess_data("user", "id"), "html", null, true);
            echo "\">
";
        }
    }

    public function getTemplateName()
    {
        return "ujian-online.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 222,  469 => 221,  465 => 220,  461 => 219,  457 => 218,  454 => 217,  452 => 216,  444 => 210,  425 => 194,  414 => 185,  390 => 179,  384 => 176,  378 => 173,  373 => 172,  356 => 171,  349 => 167,  341 => 162,  336 => 161,  334 => 160,  330 => 158,  321 => 152,  300 => 133,  279 => 125,  268 => 121,  251 => 119,  248 => 118,  243 => 117,  237 => 114,  231 => 111,  225 => 108,  220 => 107,  203 => 106,  196 => 102,  190 => 98,  188 => 97,  184 => 95,  177 => 91,  171 => 88,  160 => 80,  150 => 73,  144 => 69,  137 => 65,  134 => 64,  132 => 63,  127 => 61,  119 => 56,  115 => 55,  106 => 49,  102 => 48,  96 => 44,  79 => 30,  66 => 20,  61 => 18,  57 => 17,  51 => 13,  49 => 12,  43 => 8,  40 => 7,  32 => 4,  29 => 3,);
    }
}
