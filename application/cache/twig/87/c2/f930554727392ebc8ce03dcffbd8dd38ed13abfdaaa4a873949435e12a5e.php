<?php

/* sidebar-menu.html */
class __TwigTemplate_87c2f930554727392ebc8ce03dcffbd8dd38ed13abfdaaa4a873949435e12a5e extends Twig_Template
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
        echo "
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_menu"]) ? $context["list_menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menus"]) {
            // line 3
            echo "    <ul class=\"widget widget-menu\">
    ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 5
                echo "        <li>";
                echo (isset($context["menu"]) ? $context["menu"] : null);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    </ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "sidebar-menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
