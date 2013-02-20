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
            'body' => array($this, 'block_body'),
            'contentCenter2' => array($this, 'block_contentCenter2'),
            'menu' => array($this, 'block_menu'),
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

    
    <body>
    ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 30
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

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"center\">";
        $this->displayBlock('contentCenter2', $context, $blocks);
        // line 23
        echo " </div>
        

        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "  
      
    ";
    }

    // line 11
    public function block_contentCenter2($context, array $blocks = array())
    {
        echo "    <div class=\"menu\">
        
        ";
        // line 13
        $this->displayBlock('menu', $context, $blocks);
        // line 17
        echo "    </div>
    
    <div class=\"center1\">";
        // line 19
        $this->displayBlock('contentCenter', $context, $blocks);
        echo "</div> 
    
    <div class=\"left\" >";
        // line 21
        $this->displayBlock('contentLeft', $context, $blocks);
        echo "</div> 
    
    <div class=\"right\">";
        // line 23
        $this->displayBlock('contentRight', $context, $blocks);
        echo " </div>";
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        echo " 
           <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories"), "html", null, true);
        echo "\">User storie</a>
           <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_creation_compte_client"), "html", null, true);
        echo "\">Compte client</a>
        ";
    }

    // line 19
    public function block_contentCenter($context, array $blocks = array())
    {
    }

    // line 21
    public function block_contentLeft($context, array $blocks = array())
    {
    }

    // line 23
    public function block_contentRight($context, array $blocks = array())
    {
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::modele.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 19,  97 => 23,  87 => 19,  69 => 27,  62 => 23,  56 => 10,  49 => 4,  209 => 80,  202 => 75,  195 => 74,  177 => 68,  174 => 67,  166 => 64,  156 => 62,  129 => 53,  113 => 47,  77 => 25,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 70,  176 => 65,  170 => 65,  168 => 60,  146 => 59,  142 => 58,  128 => 50,  125 => 51,  107 => 14,  38 => 6,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 26,  61 => 13,  47 => 11,  105 => 24,  93 => 28,  76 => 16,  72 => 14,  68 => 20,  27 => 1,  91 => 20,  84 => 28,  94 => 39,  88 => 34,  79 => 17,  59 => 11,  21 => 2,  44 => 12,  31 => 3,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 73,  186 => 72,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 26,  127 => 23,  121 => 45,  118 => 48,  114 => 42,  104 => 36,  100 => 34,  78 => 21,  75 => 11,  71 => 21,  58 => 9,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 3,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 60,  145 => 46,  139 => 57,  131 => 51,  123 => 50,  120 => 40,  115 => 39,  106 => 36,  101 => 37,  96 => 21,  83 => 17,  80 => 24,  74 => 23,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 7,  41 => 30,  37 => 8,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 63,  157 => 60,  153 => 54,  151 => 61,  143 => 54,  138 => 51,  136 => 56,  133 => 54,  130 => 47,  122 => 21,  119 => 42,  116 => 35,  111 => 15,  108 => 37,  102 => 13,  98 => 31,  95 => 34,  92 => 21,  89 => 19,  85 => 25,  81 => 13,  73 => 19,  64 => 17,  60 => 14,  57 => 11,  54 => 10,  51 => 12,  48 => 13,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
