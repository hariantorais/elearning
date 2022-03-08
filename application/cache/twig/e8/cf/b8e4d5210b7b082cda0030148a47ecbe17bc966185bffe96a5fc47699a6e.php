<?php

/* top-mobile-menu.html */
class __TwigTemplate_e8cfb8e4d5210b7b082cda0030148a47ecbe17bc966185bffe96a5fc47699a6e extends Twig_Template
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
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 4
                echo "        <span class=\"visible-phone visible-tablet\" style=\"margin-bottom: 15px;\">";
                echo (isset($context["menu"]) ? $context["menu"] : null);
                echo "</span>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "top-mobile-menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
