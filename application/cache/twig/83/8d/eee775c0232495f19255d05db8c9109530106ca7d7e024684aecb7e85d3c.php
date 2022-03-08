<?php

/* detail-pengumuman.html */
class __TwigTemplate_838deee775c0232495f19255d05db8c9109530106ca7d7e024684aecb7e85d3c extends Twig_Template
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
        echo "Detail Pengumuman - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"module\" style=\"background: white\">
    ";
        // line 9
        if ((is_siswa() == false)) {
            // line 10
            echo "    <div class=\"module-head\">
        <h3>";
            // line 11
            echo anchor("pengumuman", "Pengumuman");
            echo " / Detail Pengumuman</h3>
    </div>

    ";
        }
        // line 15
        echo "
    <div class=\"module-body\">
        ";
        // line 17
        echo get_flashdata("pengumuman");
        echo "

        <div class=\"btn-group pull-right\" style=\"margin-left: 10px;\">
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "allow_action"));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 21
            echo "            ";
            if (((isset($context["a"]) ? $context["a"] : null) == "edit")) {
                // line 22
                echo "            <a class=\"btn btn-default btn-small\" href=\"";
                echo twig_escape_filter($this->env, site_url(("pengumuman/edit/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"Edit\"><i class=\"icon-edit\"></i></a>
            ";
            }
            // line 24
            echo "
            ";
            // line 25
            if (((isset($context["a"]) ? $context["a"] : null) == "delete")) {
                // line 26
                echo "            <a onclick=\"return confirm('Anda yakin ingin menghapus?')\" class=\"btn btn-default btn-small\" href=\"";
                echo twig_escape_filter($this->env, site_url(("pengumuman/delete/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"Hapus\"><i class=\"icon-trash\"></i></a>
            ";
            }
            // line 28
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>

        <b style=\"margin-bottom: 0px; font-size: 20px\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"), "html", null, true);
        echo "</b>
        <small>
        <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
            <li><b>Pembuat : </b>";
        // line 34
        echo anchor($this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pengajar"), "link_profil"), $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pengajar"), "nama"));
        echo "</li>
            <!-- <li><b>Tgl. Tampil : </b>";
        // line 35
        echo twig_escape_filter($this->env, tgl_indo($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tampil")), "html", null, true);
        echo " s/d ";
        echo twig_escape_filter($this->env, tgl_indo($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tgl_tutup")), "html", null, true);
        echo "</li> -->
        </ul>
        </small>
        <hr style=\"margin-top: 5px;margin-bottom: 10px;\">

        ";
        // line 40
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "konten");
        echo "

        <hr>

        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
        echo "\" class=\"btn btn-small btn-primary\">Kembali</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "detail-pengumuman.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  121 => 40,  111 => 35,  107 => 34,  101 => 31,  97 => 29,  91 => 28,  85 => 26,  83 => 25,  80 => 24,  74 => 22,  71 => 21,  67 => 20,  61 => 17,  57 => 15,  50 => 11,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
