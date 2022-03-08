<?php

/* detail-pesan.html */
class __TwigTemplate_4409d83e7bf14b54192c22f7dbfcdca4c07e33344cb30d5e515e720c695ac3be extends Twig_Template
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
        echo "Detail Percakapan - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"module span6 visible-desktop\" style=\"border: 4px solid rgb(72, 172, 230);\">
    <div class=\"module-head\">
        <div class=\"pull-right\">";
        // line 10
        echo anchor("message", "<i class=\"icon-arrow-left\"></i> Kembali");
        echo "</div>
        <h3>";
        // line 11
        echo twig_escape_filter($this->env, character_limiter((isset($context["receiver_name"]) ? $context["receiver_name"] : null), 20, "..."), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"module-body\" style=\"background-image: url(";
        // line 13
        echo twig_escape_filter($this->env, base_url("userfiles/images/bg-chat.jpg"), "html", null, true);
        echo "); background-attachment:fixed;\">

        ";
        // line 15
        $context["active_msg_id"] = $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "id");
        // line 16
        echo "
        <div class=\"table-responsive\" style=\"border-style: none;\">
        <table id=\"list-msg\" width=\"100%\" >
            <tbody>
                ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["old_related_msg"]) ? $context["old_related_msg"] : null));
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
            // line 21
            echo "                    ";
            $context["item_msg"] = (isset($context["d"]) ? $context["d"] : null);
            // line 22
            echo "                    ";
            $this->env->loadTemplate("detail-pesan-item.html")->display($context);
            // line 23
            echo "                ";
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
        // line 24
        echo "
                ";
        // line 25
        $context["item_msg"] = (isset($context["r"]) ? $context["r"] : null);
        // line 26
        echo "                ";
        $this->env->loadTemplate("detail-pesan-item.html")->display($context);
        // line 27
        echo "
                ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["new_related_msg"]) ? $context["new_related_msg"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 29
            echo "                    ";
            $context["item_msg"] = (isset($context["n"]) ? $context["n"] : null);
            // line 30
            echo "                    ";
            $this->env->loadTemplate("detail-pesan-item.html")->display($context);
            // line 31
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </tbody>
        </table>
        </div>

        <br>
        

    </div>
    <div class=\"module-footer\" style=\"border:0px;\">
        ";
        // line 41
        if (((isset($context["confirm_del_all"]) ? $context["confirm_del_all"] : null) == false)) {
            // line 42
            echo "        <div class=\"msg-active\" style=\"border: 0px;\">
            
            ";
            // line 44
            echo form_open_multipart(("message/create/" . $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "sender_receiver_id")), array("class" => "form-horizontal row-fluid"));
            echo "
                <input type=\"hidden\" name=\"penerima\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["receiver_name"]) ? $context["receiver_name"] : null), "html", null, true);
            echo "\">
                
                <button class=\"btn btn-primary pull-right\">Kirim</button>
                
                <textarea placeholder=\"ketik sesuatu disini...\" name=\"content\" id=\"content\" style=\"height: 50px;width: 80%; resize: none;\">";
            // line 49
            echo set_value("content");
            echo "</textarea> ";
            echo form_error("content");
            echo "
                
            ";
            // line 51
            echo form_close();
            echo "
        </div>
        ";
        }
        // line 54
        echo "
        ";
        // line 55
        if (((isset($context["confirm_del_all"]) ? $context["confirm_del_all"] : null) == true)) {
            // line 56
            echo "        <hr class=\"hr-msg\">
        <div id=\"confirm\" class=\"alert alert-block\" >
            <div class=\"pull-right btn-group\" style=\"margin-top: -5px;\">
                <a class=\"btn btn-danger\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, site_url(("message/del_all/" . $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "id"))), "html", null, true);
            echo "\">Ya hapus</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, site_url("message"), "html", null, true);
            echo "\">Batal</a>
            </div>
            <b>Anda yakin ingin menghapus percakapan ini?</b>
        </div>
        ";
        }
        // line 65
        echo "
        <input type=\"hidden\" id=\"active_msg_id\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "id"), "html", null, true);
        echo "\">
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "detail-pesan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 66,  216 => 65,  208 => 60,  204 => 59,  199 => 56,  197 => 55,  194 => 54,  188 => 51,  181 => 49,  174 => 45,  170 => 44,  166 => 42,  164 => 41,  153 => 32,  139 => 31,  136 => 30,  133 => 29,  116 => 28,  113 => 27,  110 => 26,  108 => 25,  105 => 24,  91 => 23,  88 => 22,  85 => 21,  68 => 20,  62 => 16,  60 => 15,  55 => 13,  50 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
