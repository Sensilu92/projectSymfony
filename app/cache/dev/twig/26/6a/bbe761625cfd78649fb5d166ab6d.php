<?php

/* ::menu.html.twig */
class __TwigTemplate_266abbe761625cfd78649fb5d166ab6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>

    <menu style=\"background-color:#FF0000; width:1000px; height:50px;\">";
        // line 3
        $this->displayBlock('menu', $context, $blocks);
        echo "</menu>
    <body style=\"background-color:#000000; width:1000px; height:50px;\" >
        ";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 9
        echo "    </body>
</html>
";
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "            LE MENU
        ";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  50 => 6,  47 => 5,  42 => 3,  36 => 9,  33 => 8,  31 => 5,  26 => 3,  22 => 1,);
    }
}
