<?php

/* ::modele.html.twig */
class __TwigTemplate_e0dd5780145b7575e3f39285d0f99b63 extends Twig_Template
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
            'contentLeft' => array($this, 'block_contentLeft'),
            'contentRight' => array($this, 'block_contentRight'),
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
        // line 24
        echo "    </body>
</html>";
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
    
    <div class=\"center1\">";
        // line 13
        $this->displayBlock('contentCenter', $context, $blocks);
        echo "</div> 
    
    <div class=\"left\" >";
        // line 15
        $this->displayBlock('contentLeft', $context, $blocks);
        echo "</div> 
    
    <div class=\"right\">";
        // line 17
        $this->displayBlock('contentRight', $context, $blocks);
        echo " </div>
        

        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "  
      
    ";
    }

    // line 13
    public function block_contentCenter($context, array $blocks = array())
    {
    }

    // line 15
    public function block_contentLeft($context, array $blocks = array())
    {
    }

    // line 17
    public function block_contentRight($context, array $blocks = array())
    {
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::modele.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 20,  87 => 20,  40 => 7,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 11,  61 => 27,  47 => 15,  105 => 17,  93 => 28,  76 => 15,  72 => 31,  68 => 30,  27 => 4,  91 => 20,  84 => 28,  94 => 39,  88 => 6,  79 => 17,  59 => 22,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 15,  78 => 21,  75 => 23,  71 => 13,  58 => 7,  34 => 11,  26 => 1,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 32,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 24,  41 => 10,  37 => 6,  35 => 7,  32 => 6,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 31,  95 => 13,  92 => 33,  89 => 21,  85 => 25,  81 => 17,  73 => 19,  64 => 10,  60 => 23,  57 => 11,  54 => 10,  51 => 4,  48 => 3,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
