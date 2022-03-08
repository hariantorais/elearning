<?php

/* print-kartu.html */
class __TwigTemplate_4ad445ec850cc394805479bb587dbe31f0601c8e446fcd83f26f2bbc55ad9675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-print-kartu.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-print-kartu.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        echo " Print Kartu - ";
        // line 2
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    public function block_content($context, array $blocks = array())
    {
        echo " ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["siswa"]) ? $context["siswa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 3
            echo "<div class=\"page\">
    <table border=\"1\" cellspacing=\"0\" width=\"100%\" style=\"font-size: 9pt\">
        <tr>
            <td>
                <table width=\"100%\">
                    <tr>
                        <td border=\"0\">
                            <center>
                                <img
                                    src=\"";
            // line 12
            echo twig_escape_filter($this->env, get_logo_config(), "html", null, true);
            echo "\"
                                    style=\"height: 40px; width: 40px\"
                                />
                            </center>
                        </td>
                        <td width=\"85%\">
                            <center>
                                KARTU PESERTA UJIAN SEKOLAH CBT <br />
                                ";
            // line 20
            echo twig_escape_filter($this->env, strtoupper((isset($context["site_name"]) ? $context["site_name"] : null)), "html", null, true);
            echo " <br />
                                TAHUN PELAJARAN 2020-2021
                            </center>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width=\"100%\">
                    <tr>
                        <td>Nama Peserta</td>
                        <td>:</td>
                        <td><b>";
            // line 34
            echo twig_escape_filter($this->env, strtoupper($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nama")), "html", null, true);
            echo "</b></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><b>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "username"), "html", null, true);
            echo "</b></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><b>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "password"), "html", null, true);
            echo "</b></td>
                    </tr>
                    <tr>
                        <table width=\"100%\">
                            <tr>
                                <td>
                                    <br />
                                    <center>
                                        <img
                                            style=\"
                                                height: 2.8cm;
                                                width: 2.3cm;
                                                margin-right: 20px;
                                            \"
                                            src=\"";
            // line 58
            echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "foto"), "medium", $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "jenis_kelamin")), "html", null, true);
            echo "\"
                                        />
                                    </center>
                                </td>
                                <td colspan=\"2\" style=\"text-align: right\">
                                    <br />

                                    <img
                                        src=\"";
            // line 66
            echo twig_escape_filter($this->env, base_url("userfiles/images/ttd.png"), "html", null, true);
            echo "\"
                                        style=\"width: 150px\"
                                    />
                                </td>
                            </tr>
                        </table>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo " ";
    }

    public function getTemplateName()
    {
        return "print-kartu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 79,  127 => 66,  116 => 58,  99 => 44,  91 => 39,  83 => 34,  66 => 20,  55 => 12,  44 => 3,  33 => 2,  29 => 1,);
    }
}
