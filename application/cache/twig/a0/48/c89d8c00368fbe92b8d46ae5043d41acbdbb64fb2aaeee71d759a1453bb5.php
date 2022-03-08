<?php

/* register.html */
class __TwigTemplate_a048c89d8c00368fbe92b8d46ae5043d41acbdbb64fb2aaeee71d759a1453bb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-public.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-public.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Register - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
    <div class=\"module span6 offset3\">
            <div class=\"module-head\" style=\"background-color: #143db4\">
                <h3 style=\"color: white\">Register E-Learni</h3>
            </div>

            <div class=\"module-body\">
                ";
        // line 15
        echo get_flashdata("register");
        echo "

                ";
        // line 17
        if ((!twig_test_empty(get_pengaturan("info-registrasi", "value")))) {
            // line 18
            echo "                <div class=\"well well-small\" style=\"box-shadow: none;\">
                    ";
            // line 19
            echo get_pengaturan("info-registrasi", "value");
            echo "
                </div>
                ";
        }
        // line 22
        echo "
               <!--  <ul class=\"nav nav-tabs\">
                    ";
        // line 24
        if ((get_pengaturan("registrasi-siswa", "value") == 1)) {
            // line 25
            echo "                    <li ";
            echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "siswa")) ? ("class=\"active\"") : (""));
            echo "><a href=\"#register-siswa\" data-toggle=\"tab\">Sebagai santri</a></li>
                    ";
        }
        // line 27
        echo "
                    ";
        // line 28
        if ((get_pengaturan("registrasi-pengajar", "value") == 1)) {
            // line 29
            echo "                    <li ";
            echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "pengajar")) ? ("class=\"active\"") : (""));
            echo "><a href=\"#register-pengajar\" data-toggle=\"tab\">Sebagai pengajar</a></li>
                    ";
        }
        // line 31
        echo "                </ul> -->

                
                    <div class=\"tab-pane fade ";
        // line 34
        echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "siswa")) ? ("active") : (""));
        echo " in\" id=\"register-siswa\">
                        ";
        // line 35
        echo form_open_multipart("login/register/siswa", array("class" => "form-horizontal row-fluid"));
        echo "

                            <center><span><b>-- BIODATA --</b></span></center><br>

                            <div class=\"control-group\">
                                <label class=\"control-label\">NISN<span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"nis\" name=\"nis\" class=\"span10\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, set_value("nis"), "html", null, true);
        echo "\">
                                    <input type=\"hidden\" name=\"tahun_masuk\" maxlength=\"4\" value=\"2020\">
                                    <input type=\"hidden\" name=\"kelas_id\" value=\"14\">
                                    <input name=\"agama\" type=\"hidden\" value=\"ISLAM\">
                                    <br>";
        // line 46
        echo form_error("nis");
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Nama <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"nama\" class=\"span10\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
        echo "\">
                                    <br>";
        // line 53
        echo form_error("nama");
        echo "
                                </div>
                            </div>
                           <div class=\"control-group\">
                                <label class=\"control-label\">Jenis Kelamin <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Laki-laki\" ";
        // line 59
        echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Laki-laki"), "html", null, true);
        echo "> Laki-laki</label>
                                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Perempuan\" ";
        // line 60
        echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Perempuan"), "html", null, true);
        echo "> Perempuan</label>
                                    <br>";
        // line 61
        echo form_error("jenis_kelamin");
        echo "
                                </div>
                            </div>

                          
                            <!-- <div class=\"control-group\">
                                <label class=\"control-label\">Kelas <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <select class=\"span3\" name=\"kelas_id\">
                                        <option value=\"\">--pilih--</option>
                                        ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 72
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("kelas_id", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id")), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                    </select>
                                    <br>";
        // line 75
        echo form_error("kelas_id");
        echo "
                                </div>
                            </div> -->
                            <div class=\"control-group\">
                                <label class=\"control-label\">Tempat Lahir</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"tempat_lahir\" class=\"span10\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, set_value("tempat_lahir"), "html", null, true);
        echo "\">
                                    <br>";
        // line 82
        echo form_error("tempat_lahir");
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Tanggal Lahir</label>
                                <div class=\"controls\">
                                    <select class=\"span2\" name=\"tgl_lahir\">
                                        <option value=\"\">Tgl</option>
                                        ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 91
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("tgl_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                    </select>
                                    <select class=\"span4\" name=\"bln_lahir\">
                                        <option value=\"\">Bulan</option>
                                        ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 97
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("bln_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, get_indo_bulan((isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                                    </select>
                                    <input type=\"text\" name=\"thn_lahir\" class=\"span4\" maxlength=\"4\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, set_value("thn_lahir"), "html", null, true);
        echo "\" placeholder=\"Tahun\">
                                    <br>";
        // line 101
        echo form_error("thn_lahir");
        echo "
                                </div>
                            </div>
                            
                            <div class=\"control-group\">
                                <label class=\"control-label\">Alamat</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"alamat\" class=\"span10\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, set_value("alamat"), "html", null, true);
        echo "\">
                                    <br>";
        // line 109
        echo form_error("alamat");
        echo "
                                </div>
                            </div>

                            <hr>

                             <center><span><b>-- BUAT AKUN --</b></span></center><br>

                            <div class=\"control-group\">
                                <label class=\"control-label\">Username <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"username\" name=\"username\" class=\"span10\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\" placeholder=\"alamat email\">
                                    <br>";
        // line 121
        echo form_error("username");
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Password <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"password\" class=\"span10\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, set_value("password"), "html", null, true);
        echo "\">
                                    <br>";
        // line 128
        echo form_error("password");
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Ulangi Password <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"password2\" class=\"span10\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, set_value("password2"), "html", null, true);
        echo "\">
                                    <br>";
        // line 135
        echo form_error("password2");
        echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"controls\">
                                    <button type=\"submit\" class=\"btn btn-success\">Daftar</button>
                                </div>
                            </div>
                        ";
        // line 143
        echo form_close();
        echo "
              
                    

                </div>
            </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 143,  307 => 135,  303 => 134,  294 => 128,  290 => 127,  281 => 121,  277 => 120,  263 => 109,  259 => 108,  249 => 101,  245 => 100,  242 => 99,  229 => 97,  225 => 96,  220 => 93,  207 => 91,  203 => 90,  192 => 82,  188 => 81,  179 => 75,  176 => 74,  163 => 72,  159 => 71,  146 => 61,  142 => 60,  138 => 59,  129 => 53,  125 => 52,  116 => 46,  109 => 42,  99 => 35,  95 => 34,  90 => 31,  84 => 29,  82 => 28,  79 => 27,  73 => 25,  71 => 24,  67 => 22,  61 => 19,  58 => 18,  56 => 17,  51 => 15,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
