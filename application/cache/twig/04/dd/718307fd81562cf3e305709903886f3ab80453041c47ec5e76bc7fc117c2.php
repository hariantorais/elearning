<?php

/* layout-print.html */
class __TwigTemplate_04dd718307fd81562cf3e305709903886f3ab80453041c47ec5e76bc7fc117c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 5
        $this->env->loadTemplate("layout-header.html")->display($context);
        // line 6
        echo "    


<style type=\"text/css\">

    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: grey;
        font: 12pt \"calibri\";
        color: black;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .container {
        width: 210mm;
        min-height: 297mm;
        padding: 0.5in;
        margin: 0.5cm auto;
        border: 0px solid #D3D3D3;
        border-radius: 0px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 0.5in;
        border: 5px red solid;
        height: 297mm;
        outline: 2cm #FFEAEA solid;
    }
    
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }

        div {
     width:200px;
     height: 48px;
   }
   .garis_tepi1 {
     border: 2px solid red;
   }
   .garis_tepi2 {
     border: 10px dotted blue;
   }
    }
        
</style>
    
</head>
<body>
    <div class=\"container\">
        <table width=\"100%\">
            <tr>
                <td>
                    <img src=\"http://smp-ia.sch.id/assets/images/kop.png\" width=\"100%\">            
                </td>
            </tr>
        </table>
            
        <br>
        ";
        // line 87
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "    </div>


</body>

<script type=\"text/javascript\">
  window.print();
</script>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-print.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 87,  130 => 4,  117 => 88,  115 => 87,  32 => 6,  30 => 5,  26 => 4,  21 => 1,);
    }
}
