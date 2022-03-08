<?php

/* layout-print-kartu.html */
class __TwigTemplate_556fe1e28a44204194e27d49ed4f0da64dc4967c18aed97f157eb27ffd68c6d9 extends Twig_Template
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
     
</head>
<body>
    
        ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "    
</body>

<script type=\"text/javascript\">
  window.print();
</script>

<style type=\"text/css\">

    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: grey;
        font: 10pt \"tahoma\";
        color: black;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 105mm;
        min-height: 74mm;
        padding: 0.15in;
        margin: 0.1cm auto;
        border: 0px solid #D3D3D3;
        border-radius: 0px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 0.1in;
        border: 5px red solid;
        height: 74mm;
        outline: 0.5cm #FFEAEA solid;
    }
    
    @page {
        size: A7;
        margin: 0;
    }
    @media print {
        html, body {
            width: 105mm;
            height: 74mm;        
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

       
   .garis_tepi1 {
     border: 1px solid red;
   }
   .garis_tepi2 {
     border: 1px dotted blue;
   }

   .card {
        display:grid;
        grid-template-columns: 50% auto;
        padding: 1em 1em;
    }
}
        
</style>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-print-kartu.html";
    }

    public function getDebugInfo()
    {
        return array (  122 => 9,  116 => 4,  36 => 10,  34 => 9,  26 => 4,  21 => 1,);
    }
}
