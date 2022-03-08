<?php

/* detail-pesan-item.html */
class __TwigTemplate_976345361c2f193345c60e1fd2a8914d863205eb10d442d473797aee2c9070e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<tr id=\"msg-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "id"), "html", null, true);
        echo "\">
    <td class=\"msg-user ";
        // line 2
        echo ((((isset($context["msg_flag_new"]) ? $context["msg_flag_new"] : null) == 1)) ? ("msg-flag-new") : (""));
        echo "\">
       
    <div class=\"media stream ";
        // line 4
        if (($this->getAttribute($this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "profil"), "id") == get_sess_data("user", "id"))) {
            echo " pull-right ";
        }
        echo "\" style=\"box-shadow: 1px 1px 1px rgba(0,0,0,0.3);background-color: ";
        if (($this->getAttribute($this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "profil"), "id") == get_sess_data("user", "id"))) {
            echo " rgb(220, 238, 199) ";
        } else {
            echo " white ";
        }
        echo ";width: 45%;border-radius: 10px;padding: 8px;margin-bottom:5px;\">
        
            <img style=\"border:0px; padding:0px; width:50px; height:50px\" class=\"img-msg-user img-polaroid img-circle pull-left visible-desktop\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "profil"), "link_image"), "html", null, true);
        echo "\">
        
        <div class=\"media-body\">
            <div class=\"stream-headline\">
                <h5 class=\"stream-author\">
                    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "profil"), "link_profil"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, character_limiter($this->getAttribute($this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "profil"), "nama"), 20, "..."), "html", null, true);
        echo "</a>                    
                </h5>
                <div class=\"stream-text\" style=\"color:black\">
                    ";
        // line 14
        echo $this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "content");
        echo "
                </div>
                <div class=\"pull-right\">
                    <small>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "date"), "html", null, true);
        echo "</small>
                    ";
        // line 18
        if ((get_sess_data("user", "id") == 1)) {
            // line 19
            echo "                    <a style=\"margin-left:10px;\" href=\"";
            echo twig_escape_filter($this->env, site_url(((("message/del/" . $this->getAttribute((isset($context["item_msg"]) ? $context["item_msg"] : null), "id")) . "/") . (isset($context["active_msg_id"]) ? $context["active_msg_id"] : null))), "html", null, true);
            echo "\" onclick=\"return confirm('Anda yakin ingin menghapus?')\"><i class=\"icon-trash\"></i></a>
                    ";
        }
        // line 21
        echo "                </div>
            </div><!--/.stream-headline-->
            
        </div>
        
    </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "detail-pesan-item.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  70 => 19,  64 => 17,  58 => 14,  24 => 2,  19 => 1,  219 => 66,  216 => 65,  208 => 60,  204 => 59,  199 => 56,  197 => 55,  194 => 54,  188 => 51,  181 => 49,  174 => 45,  170 => 44,  166 => 42,  164 => 41,  153 => 32,  139 => 31,  136 => 30,  133 => 29,  116 => 28,  113 => 27,  110 => 26,  108 => 25,  105 => 24,  91 => 23,  88 => 22,  85 => 21,  68 => 18,  62 => 16,  60 => 15,  55 => 13,  50 => 11,  46 => 10,  42 => 6,  39 => 7,  32 => 4,  29 => 4,);
    }
}
