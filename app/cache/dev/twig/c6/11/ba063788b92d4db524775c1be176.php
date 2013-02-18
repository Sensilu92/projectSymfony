<?php

/* ::modele2.html.twig */
class __TwigTemplate_c611ba063788b92d4db524775c1be176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'contentCenter' => array($this, 'block_contentCenter'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    
    ";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "    
    <div class=\"menu\">";
        // line 7
        $this->displayBlock('menu', $context, $blocks);
        echo "</menu>
    
    <body>
    ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/css/css.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        echo " LE MENU ";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
    
   <div class=\"center\">";
        // line 13
        $this->displayBlock('contentCenter', $context, $blocks);
        echo " </div>
        

        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "  
      
    ";
    }

    // line 13
    public function block_contentCenter($context, array $blocks = array())
    {
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::modele2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  84 => 13,  78 => 17,  76 => 16,  70 => 13,  66 => 11,  63 => 10,  57 => 7,  50 => 4,  47 => 3,  41 => 20,  33 => 7,  30 => 6,  28 => 3,  24 => 1,  46 => 14,  39 => 10,  36 => 5,  29 => 3,);
    }
}
