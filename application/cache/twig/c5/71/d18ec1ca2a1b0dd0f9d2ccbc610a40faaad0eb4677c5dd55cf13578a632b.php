<?php

/* menu-phone.html */
class __TwigTemplate_c571d18ec1ca2a1b0dd0f9d2ccbc610a40faaad0eb4677c5dd55cf13578a632b extends Twig_Template
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
        echo "<div class=\"visible-phone\">
  <table class=\"table\" width=\"100%\">
      <tr>
          <td width=\"25%\" style=\"border-style: none;\">
              <center>
              <a style=\"text-decoration: none;\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, site_url("materi?clear_filter=true"), "html", null, true);
        echo "\">
                  <i style=\"font-size: 30px\" class=\"icon-book\"></i>
                  <p>Materi</p>
              </a>
              </center>
          </td>
          <td width=\"25%\" style=\"border-style: none;\">
              <center>
                <a style=\"text-decoration: none;\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, site_url("tugas?clear_filter=true"), "html", null, true);
        echo "\">
                  <i style=\"font-size: 30px\" class=\"icon-tasks\"></i>
                  <p>Tugas</p>
              </a>
              </center>
          </td>
          <td width=\"25%\" style=\"border-style: none;\">
              <center>
              <a style=\"text-decoration: none;\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, site_url("siswa/index/1"), "html", null, true);
        echo "\">
                  <i style=\"font-size: 30px\" class=\"icon-group\"></i>
                  <p>Siswa</p>
              </a>
              </center>
          </td>
          <td width=\"25%\" style=\"border-style: none;\">
              <center>
               <a style=\"text-decoration: none;\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, site_url("message"), "html", null, true);
        echo "\">
                  <i style=\"font-size: 30px\" class=\"icon-comments\"></i>
                  <!-- <b>";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["jml_pengajar"]) ? $context["jml_pengajar"] : null), "html", null, true);
        echo "</b> -->
                  <p>Pesan<span class=\"menu-count-new-msg2\"></span></p>
              </a>
              </center>
          </td>
      </tr>
  </table>
  </div>";
    }

    public function getTemplateName()
    {
        return "menu-phone.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 32,  59 => 30,  48 => 22,  37 => 14,  26 => 6,  19 => 1,);
    }
}
