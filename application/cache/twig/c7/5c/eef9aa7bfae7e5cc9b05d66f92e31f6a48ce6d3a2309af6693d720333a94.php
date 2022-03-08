<?php

/* login.html */
class __TwigTemplate_c75ceef9aa7bfae7e5cc9b05d66f92e31f6a48ce6d3a2309af6693d720333a94 extends Twig_Template
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
        echo "<html>
<head>


  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Login - ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
        echo "</title>
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["favicon_url"]) ? $context["favicon_url"] : null), "html", null, true);
        echo "\">
  <link type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, base_url("assets/adminlte/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  
  <!-- Font Awesome -->
  <link type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url("assets/adminlte/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  
  <!-- Ionicons -->
  <link type=\"text/css\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel=\"stylesheet\">
 
  <!-- Theme style -->
  <link type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url("assets/adminlte/dist/css/adminlte.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  
  <!-- Google Font: Source Sans Pro -->
  <link type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
  
</head>
<body class=\"hold-transition login-page\" style=\"background: url(http://smp-ia.sch.id/elearning/assets/themes/default/images/bg2.png) #eee; background-attachment: fixed;background-size: cover;background-repeat: no-repeat;\">
<div class=\"login-box\">
  <div class=\"login-logo\">
    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, get_logo_config(), "html", null, true);
        echo "\" width=\"130px\">
    
  </div>
  <!-- /.login-logo -->
  <div class=\"card\">

    <div class=\"card-body login-card-body\">

 <p class=\"login-box-msg\">Silahkan login terlebih dahulu</p>
      ";
        // line 37
        echo get_flashdata("login");
        echo "

      ";
        // line 39
        echo form_open("login", array("autocomplete" => "off", "class" => "form-vertical"));
        echo "
        <div class=\"input-group mb-3\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Username\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, set_value("email"), "html", null, true);
        echo "\" autofocus required=\"\" name=\"email\">
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-user\"></span>
            </div>
          </div>
        </div>
        <div class=\"input-group mb-3\">
          <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\" required=\"\">
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-lock\"></span>
            </div>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-8\"></div>
          
          <div class=\"col-4\">
            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Log In</button>
          </div>
        </div>


    </div>
    <!-- /.login-card-body -->
  </div><br><br>
  <center><small><b>SMP-IA LMS</b><br>
       ";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
        echo "<br>
        <span style=\"color: grey\">by <a href=\"https://facebook.com/hariantorais\">Harianto Rais</a></span>
    </small>
    </center>
</div>
";
        // line 75
        echo form_close();
        echo "
<!-- /.login-box -->

<!-- jQuery -->
<script type=\"text/javascript\">
var site_url = \"";
        // line 80
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\";
var base_url = \"";
        // line 81
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\";
</script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, base_url("assets/comp/jquery/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, base_url("assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 84,  142 => 83,  137 => 81,  133 => 80,  125 => 75,  117 => 70,  85 => 41,  80 => 39,  75 => 37,  63 => 28,  51 => 19,  42 => 13,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
