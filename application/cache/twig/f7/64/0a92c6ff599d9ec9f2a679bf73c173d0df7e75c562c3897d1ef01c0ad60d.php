<?php

/* edit-pengajar-picture.html */
class __TwigTemplate_f7640a92c6ff599d9ec9f2a679bf73c173d0df7e75c562c3897d1ef01c0ad60d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-iframe.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-iframe.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h4>Edit Foto</h4>
";
        // line 5
        echo get_flashdata("edit");
        echo "

";
        // line 7
        if ((is_demo_app() && ($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "is_admin") == true))) {
            // line 8
            echo "    ";
            echo get_alert("warning", get_demo_msg());
            echo "
";
        }
        // line 10
        echo "
";
        // line 11
        echo form_open_multipart(((("pengajar/edit_picture/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . (isset($context["pengajar_id"]) ? $context["pengajar_id"] : null)));
        echo "
<table class=\"table table-striped\">
    <tbody>
        <tr>
            <td>
                <img class=\"img-polaroid\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "foto"), "medium", $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "jenis_kelamin")), "html", null, true);
        echo "\">
            </td>
            <td>
                <input type=\"file\" name=\"userfile\" class=\"btn btn-small\" style=\"max-width:190px;\">
                ";
        // line 20
        echo (((!twig_test_empty((isset($context["error_upload"]) ? $context["error_upload"] : null)))) ? ((isset($context["error_upload"]) ? $context["error_upload"] : null)) : (""));
        echo "
            </td>
        <tr>
        ";
        // line 23
        if (((is_demo_app() == false) || ($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "is_admin") == false))) {
            // line 24
            echo "        <tr>
            <td colspan=\"2\">
                ";
            // line 26
            if (($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "foto") != "")) {
                // line 27
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, site_url(((("pengajar/delete_foto/" . (isset($context["pengajar_id"]) ? $context["pengajar_id"] : null)) . "/") . enurl_redirect(current_url()))), "html", null, true);
                echo "\" onclick=\"return confirm('Anda yakin ingin menghapus foto?')\" class=\"pull-right btn btn-default\"><i class=\"icon-trash\"></i> Hapus foto</a>
                ";
            }
            // line 29
            echo "                <button type=\"submit\" class=\"btn btn-primary\">Update</button>
            </td>
        </tr>
        ";
        }
        // line 33
        echo "    </tbody>
</table>
";
        // line 35
        echo form_close();
        echo "
";
    }

    public function getTemplateName()
    {
        return "edit-pengajar-picture.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  91 => 33,  85 => 29,  79 => 27,  77 => 26,  73 => 24,  71 => 23,  65 => 20,  58 => 16,  50 => 11,  47 => 10,  41 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
