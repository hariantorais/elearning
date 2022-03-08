<?php

/* layout-footer.html */
class __TwigTemplate_7a25c528a66c4a92a5303c593807b878208ca3ddfc874f844ed7273987a3481b extends Twig_Template
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
        echo "<script type=\"text/javascript\">
var site_url = \"";
        // line 2
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\";
var base_url = \"";
        // line 3
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\";
</script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, base_url("assets/comp/jquery/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url("assets/comp/jquery/jquery-ui-1.10.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script data-pace-options='{ \"ajax\": false }' src=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url("assets/comp/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url("assets/comp/offline/offline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, base_url("assets/comp/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, base_url("assets/comp/sweetalert2/sweetalert2.min.css"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

";
        // line 12
        echo (isset($context["comp_js"]) ? $context["comp_js"] : null);
        echo "
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base_url_theme"]) ? $context["base_url_theme"] : null), "html", null, true);
        echo "scripts/script.js\" type=\"text/javascript\"></script>

<script>
  \$(document).ready(function() {
    \$('.table-absen').DataTable( {
        scrollY: '350',
        scorllX: true,
        \"pageLength\": 50,

        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ],

       
         }

    } );

    function kerjakan_tugas (){
    swal(\"STOP\", \"Anda tidak memiliki ijin\",\"error\")
    }
</script>

";
    }

    public function getTemplateName()
    {
        return "layout-footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  56 => 12,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
