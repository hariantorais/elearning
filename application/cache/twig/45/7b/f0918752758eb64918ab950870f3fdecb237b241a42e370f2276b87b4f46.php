<?php

/* diskusi.html */
class __TwigTemplate_457bf0918752758eb64918ab950870f3fdecb237b241a42e370f2276b87b4f46 extends Twig_Template
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
        echo "Diskusi - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"module span6\" style=\"border: 4px solid rgb(72, 172, 230);\">
    <div class=\"module-head\">
      <input type=\"button\" class=\"pull-right\" value=\"Refresh Halaman\" onClick=\"window.location.reload()\" />
        <h3>Forum Diskusi ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["nama_kelompok"]) ? $context["nama_kelompok"] : null), "html", null, true);
        echo "</h3>
    </div>

    <div class=\"module-body\" style=\"background-image: url(";
        // line 14
        echo twig_escape_filter($this->env, base_url("userfiles/images/bg-chat.jpg"), "html", null, true);
        echo "); background-attachment:fixed; display:block; height:400px; overflow:auto;\">

      ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diskusi"]) ? $context["diskusi"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 17
            echo "        ";
            $this->env->loadTemplate("diskusi-pesan.html")->display($context);
            // line 18
            echo "      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "   
    </div>
    <div class=\"module-footer\">
      ";
        // line 22
        echo form_open_multipart("kelompok/kirim_diskusi/", array("class" => "form-horizontal row-fluid"));
        echo "
                <input type=\"hidden\" name=\"kelompok_id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["kelompok_id"]) ? $context["kelompok_id"] : null), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"pengirim_id\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, get_sess_data("user", "id"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"data_terakhir\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["data_terakhir"]) ? $context["data_terakhir"] : null), "html", null, true);
        echo "\">

                <button class=\"btn btn-primary pull-right\">Kirim</button>
                
                <textarea required placeholder=\"ketik sesuatu disini...\" name=\"konten\" id=\"konten\" style=\"height: 50px;width: 80%; resize: none;\">";
        // line 29
        echo set_value("konten");
        echo "</textarea> ";
        echo form_error("konten");
        echo "
                
      ";
        // line 31
        echo form_close();
        echo "
    </div>

       
   
";
    }

    public function getTemplateName()
    {
        return "diskusi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 31,  116 => 29,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  92 => 19,  78 => 18,  75 => 17,  58 => 16,  53 => 14,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
