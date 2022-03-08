<?php

/* list-materi.html */
class __TwigTemplate_7f857167ed078456c7dacce5699c3c84c4bbedc1d2c03ce6f2834231bba6a50b extends Twig_Template
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
        echo "Materi - ";
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
        ";
        // line 10
        if ((is_siswa() == false)) {
            // line 11
            echo "            <div class=\"btn-group pull-right\" style=\"margin-top:-5px;\">
                ";
            // line 12
            echo anchor("materi/add/tertulis", "<i class=\"icon-pencil\"></i>Materi Tertulis", array("class" => "btn btn-primary"));
            echo "
                ";
            // line 13
            echo anchor("materi/add/file", "<i class=\"icon-file\"></i>Materi File", array("class" => "btn btn-success"));
            echo "
            </div>
        ";
        }
        // line 16
        echo "        <h3>Materi</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 19
        echo get_flashdata("materi");
        echo "

        <div class=\"bs-callout bs-callout-warning\">
            <b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"icon-search\" style=\"line-height: 0px;\"></i> CARI MATERI</a></b>

            <div id=\"form-filter\" class=\"collapse\" style=\"margin-top: 5px;\">
                ";
        // line 25
        echo form_open("materi");
        echo "
                    <table class=\"table table-condensed\">
                        <tr>
                            <th  style=\"border-top: none;\">Mapel</th>
                            <td  style=\"border-top: none;\">
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapel"]) ? $context["mapel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 32
            echo "                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"mapel_id[]\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_checkbox("mapel_id[]", $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "mapel_id"))) && in_array($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "mapel_id")))) ? (true) : (""))), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
            echo "
                                        </label>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 46
            echo "                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"kelas_id[]\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_checkbox("kelas_id[]", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "kelas_id"))) && in_array($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "kelas_id")))) ? (true) : (""))), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "
                                        </label>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>Tipe</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"type[]\" value=\"tertulis\" ";
        // line 61
        echo twig_escape_filter($this->env, set_checkbox("type[]", "tertulis", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("tertulis", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
        echo "> Tertulis
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"type[]\" value=\"file\" ";
        // line 66
        echo twig_escape_filter($this->env, set_checkbox("type[]", "file", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("file", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
        echo "> File
                                        </label>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th width=\"15%\">Judul</th>
                            <td>
                                <input type=\"text\" name=\"judul\" class=\"span4\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, set_value("judul", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "judul")), "html", null, true);
        echo "\">
                            </td>
                        </tr>
                        <tr>
                            <th>Konten</th>
                            <td>
                                <input type=\"text\" name=\"konten\" class=\"span5\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, set_value("konten", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "konten")), "html", null, true);
        echo "\">
                            </td>
                        </tr>
                        ";
        // line 84
        if ((is_admin() == true)) {
            // line 85
            echo "                        <tr>
                            <th>Pembuat</th>
                            <td>
                                <input type=\"text\" name=\"pembuat\" class=\"span4\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, set_value("pembuat", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "pembuat")), "html", null, true);
            echo "\">
                            </td>
                        </tr>
                        ";
        }
        // line 92
        echo "                        <tr>
                            <th>Status</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"publish[]\" value=\"1\" ";
        // line 98
        echo twig_escape_filter($this->env, set_checkbox("publish[]", "1", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish"))) && in_array("1", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish")))) ? (true) : (""))), "html", null, true);
        echo "> Terbit
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"publish[]\" value=\"0\" ";
        // line 103
        echo twig_escape_filter($this->env, set_checkbox("publish[]", "0", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish"))) && in_array("0", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "publish")))) ? (true) : (""))), "html", null, true);
        echo "> Konsep
                                        </label>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

        </div>
        
    </div>
</div>

";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materi"]) ? $context["materi"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["m"]) {
            // line 125
            echo "        <div class=\"module\" style=\"background-color: white;\">
            <div class=\"module-body\">
                ";
            // line 127
            if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "publish") == 0)) {
                // line 128
                echo "                        <strong><a href=\"";
                echo twig_escape_filter($this->env, site_url(("materi/detail/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"))), "html", null, true);
                echo "\" style=\"font-size:15px; font-weight:normal; color: grey\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                echo "</a></strong> (<b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel"), "nama"), "html", null, true);
                echo " </b> <span>Sesi #";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "sesi"), "html", null, true);
                echo "</span>)
                ";
            } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "publish") == 1)) {
                // line 130
                echo "                <strong><a href=\"";
                echo twig_escape_filter($this->env, site_url(("materi/detail/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"))), "html", null, true);
                echo "\" style=\"font-size: 15px;color: green;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                echo "</a></strong> (<b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel"), "nama"), "html", null, true);
                echo " </b> <span>Sesi #";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "sesi"), "html", null, true);
                echo "</span>)
                ";
            }
            // line 131
            echo " <br>

                ";
            // line 133
            if ((is_pengajar() == false)) {
                // line 134
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "link_profil"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "nama"), "html", null, true);
                echo "</a>
                     <time style=\"font-weight: normal;\" class=\"timeago\" datetime=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_posting"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_posting"), "html", null, true);
                echo "</time>,
                ";
            } else {
                // line 137
                echo "                    Update terakhir <time style=\"font-weight: normal;\" class=\"timeago\" datetime=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_posting"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_posting"), "html", null, true);
                echo "</time>,
                ";
            }
            // line 138
            echo " 

                Untuk kelas :    
                ";
            // line 141
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "materi_kelas"));
            foreach ($context['_seq'] as $context["_key"] => $context["mk"]) {
                // line 142
                echo "                     ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "nama"), "html", null, true);
                echo ", &nbsp;
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo " <br>
    
                ";
            // line 145
            if ((is_siswa() == false)) {
                // line 146
                echo "                <div class=\"pull-right\">

                            ";
                // line 148
                if ((!twig_test_empty($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "file")))) {
                    // line 149
                    echo "                                ";
                    $context["url_type"] = "file";
                    // line 150
                    echo "                            ";
                } else {
                    // line 151
                    echo "                                ";
                    $context["url_type"] = "tertulis";
                    // line 152
                    echo "                            ";
                }
                // line 153
                echo "
                            <!--  <li>";
                // line 154
                echo anchor(("materi/detail/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-zoom-in\"></i> Lihat Materi");
                echo "</li> -->

                            ";
                // line 156
                echo anchor(("materi/absen/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<button class=\"btn btn-xs btn-info\"><i class=\"icon-group\"></i> Kehadiran</button>");
                echo "

                            
                                ";
                // line 159
                echo anchor(((((("materi/edit/" . (isset($context["url_type"]) ? $context["url_type"] : null)) . "/") . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<button class=\"btn btn-xs btn-success\" ><i class=\"icon-edit\"></i></button>");
                echo "

                            ";
                // line 161
                if ((is_admin() == true)) {
                    // line 162
                    echo "                                
                                ";
                    // line 163
                    echo anchor(((("materi/delete/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/") . enurl_redirect(current_url())), "<button class=\"btn btn-danger btn-xs\"><i class=\"icon-trash\"></i></button>", array("onclick" => "return confirm('Anda yakin ingin menghapus?')"));
                    echo "
                                
                            ";
                }
                // line 166
                echo "                    </div>
                ";
            }
            // line 168
            echo "
                <i class='icon-comments'></i> ";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "jml_komentar"), "html", null, true);
            echo " Komentar <br>

               


            </div>
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "list-materi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 177,  378 => 169,  375 => 168,  371 => 166,  365 => 163,  362 => 162,  360 => 161,  355 => 159,  349 => 156,  344 => 154,  341 => 153,  338 => 152,  335 => 151,  332 => 150,  329 => 149,  327 => 148,  323 => 146,  321 => 145,  317 => 143,  308 => 142,  304 => 141,  299 => 138,  291 => 137,  284 => 135,  277 => 134,  275 => 133,  271 => 131,  259 => 130,  247 => 128,  245 => 127,  241 => 125,  237 => 124,  213 => 103,  205 => 98,  197 => 92,  190 => 88,  185 => 85,  183 => 84,  177 => 81,  168 => 75,  156 => 66,  148 => 61,  137 => 52,  123 => 48,  119 => 46,  115 => 45,  106 => 38,  92 => 34,  88 => 32,  84 => 31,  75 => 25,  66 => 19,  61 => 16,  55 => 13,  51 => 12,  48 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
