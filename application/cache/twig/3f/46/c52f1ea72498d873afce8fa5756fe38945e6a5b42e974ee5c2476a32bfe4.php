<?php

/* install-step-1.html */
class __TwigTemplate_3f46c52f1ea72498d873afce8fa5756fe38945e6a5b42e974ee5c2476a32bfe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Install - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
    <div class=\"module span8 offset2\">
            <div class=\"module-head\">
                <span class=\"pull-right\"><b>Step 1 : </b>Konfigurasi config & database</span>
                <h3>Install e-learning</h3>
            </div>

            <div class=\"module-body\">
                ";
        // line 16
        echo (isset($context["error"]) ? $context["error"] : null);
        echo "

<h4>Ikuti langkah - langkah berikut:</h4>

<ol>
    <li>Rename file <b>application/config/database.sample.php</b> menjadi <b>application/config/database.php</b></li>

    ";
        // line 23
        if ((!twig_test_empty((isset($context["error"]) ? $context["error"] : null)))) {
            // line 24
            echo "    <li>
Atur koneksi database pada file <b>application/config/database.php</b>, isi bagian - bagian berikut :<br>
<pre>
\$db['default']['hostname'] = 'localhost';
\$db['default']['username'] = ''; //username user mysql
\$db['default']['password'] = ''; //password user mysql
\$db['default']['database'] = ''; //nama database
\$db['default']['dbprefix'] = 'el_'; //awalan nama tabel
</pre>
    </li>
    ";
        }
        // line 35
        echo "
    <li>
Buka file <b>application/config/config.php</b>, atur base_url, encryption_key dan sess_cookie_name menjadi seperti berikut : <br>
<pre>
\$config['base_url'] = '";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["set_base_url"]) ? $context["set_base_url"] : null), "html", null, true);
        echo "';
\$config['encryption_key'] = '";
        // line 40
        echo twig_escape_filter($this->env, md5(uniqid()), "html", null, true);
        echo "';
\$config['sess_cookie_name'] = 'ci_session_";
        // line 41
        echo twig_escape_filter($this->env, uniqid(), "html", null, true);
        echo "';
</pre>
    </li>
</ol>
<hr>
<button class=\"btn btn-primary\" type=\"button\" onclick=\"location.reload()\">Install</button>
            </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "install-step-1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 41,  87 => 40,  83 => 39,  77 => 35,  64 => 24,  62 => 23,  52 => 16,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
