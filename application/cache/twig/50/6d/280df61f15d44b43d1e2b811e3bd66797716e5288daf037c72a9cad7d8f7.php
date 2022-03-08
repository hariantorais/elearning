<?php

/* jadwal-mapel.html */
class __TwigTemplate_506d280df61f15d44b43d1e2b811e3bd66797716e5288daf037c72a9cad7d8f7 extends Twig_Template
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
        echo "Profilku - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <strong>Jadwal Matapelajaran</strong>
    </div>
    <div class=\"panel-body\">
        <table class=\"table\">
            <tbody>
                ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_jadwal"]) ? $context["list_jadwal"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["lj"]) {
            // line 16
            echo "                <tr>
                    <td ";
            // line 17
            echo ((((isset($context["key"]) ? $context["key"] : null) == 1)) ? ("style=\"border-top: 0px;\"") : (""));
            echo " width=\"15%\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lj"]) ? $context["lj"] : null), "nama_hari"), "html", null, true);
            echo "</b></td>
                    <td ";
            // line 18
            echo ((((isset($context["key"]) ? $context["key"] : null) == 1)) ? ("style=\"border-top: 0px;\"") : (""));
            echo ">
                        ";
            // line 19
            if ((!twig_test_empty($this->getAttribute((isset($context["lj"]) ? $context["lj"] : null), "jadwal")))) {
                // line 20
                echo "                        <table class=\"table table-condensed\">
                            <tbody>
                                ";
                // line 22
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["lj"]) ? $context["lj"] : null), "jadwal"));
                foreach ($context['_seq'] as $context["_key"] => $context["jd"]) {
                    // line 23
                    echo "                                <tr class=\"success\">
                                    <td width=\"5%\">";
                    // line 24
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "jam_mulai"), "H:i"), "html", null, true);
                    echo "</td>
                                    <td width=\"2%\">-</td>
                                    <td width=\"5%\">";
                    // line 26
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "jam_selesai"), "H:i"), "html", null, true);
                    echo "</td>
                                    <td width=\"30%\"><a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, site_url(("welcome/mapel_sesi/" . $this->getAttribute($this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "mapel"), "id"))), "html", null, true);
                    echo "\" style=\"font-size: 14px;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "mapel"), "nama"), "html", null, true);
                    echo "</a></td>
                                    <td>Pengajar : ";
                    // line 28
                    echo anchor($this->getAttribute($this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "pengajar"), "link_profil"), $this->getAttribute($this->getAttribute((isset($context["jd"]) ? $context["jd"] : null), "pengajar"), "nama"));
                    echo "</td>
                                </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jd'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                            </tbody>
                        </table>
                        ";
            }
            // line 34
            echo "                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['lj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </tbody>
        </table>
    </div>
</div>

<div class=\"module\">
    <div class=\"module-body\">
        ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diskusi"]) ? $context["diskusi"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 45
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "id"), "html", null, true);
            echo "
        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, site_url(((("kelompok/diskusi/" . $this->getAttribute((isset($context["d"]) ? $context["d"] : null), "kelompok_id")) . "#") . (isset($context["data_terakhir"]) ? $context["data_terakhir"] : null))), "html", null, true);
            echo "\">Ruang Diskusi</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "jadwal-mapel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 48,  136 => 46,  131 => 45,  127 => 44,  118 => 37,  110 => 34,  105 => 31,  96 => 28,  90 => 27,  86 => 26,  81 => 24,  78 => 23,  74 => 22,  70 => 20,  68 => 19,  64 => 18,  58 => 17,  55 => 16,  51 => 15,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
