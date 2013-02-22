<?php

/* ::modeleParent.html.twig */
class __TwigTemplate_61460eb660955afb1551db4e2f39b489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/css/css.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
      
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "        
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "        
    </body>
    
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony project";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        echo "  
        
            ";
        // line 14
        $this->displayBlock('menu', $context, $blocks);
        // line 35
        echo "           
        ";
    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        echo " 
                <div class=\"menu\">
                    
                    ";
        // line 17
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") == "user")) {
            // line 18
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint_validation_user_stories_sprint"), "html", null, true);
            echo "\">Validation user storie</a>
                        
                    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") == "admin")) {
            // line 21
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_creation_compte_client"), "html", null, true);
            echo "\">Création compte client</a>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_creation_projet"), "html", null, true);
            echo "\">Création projet</a>
                        
                    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") == "dev")) {
            // line 25
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint_tableau_de_bord_sprint"), "html", null, true);
            echo "\">CRA</a>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint_tableau_de_bord_sprint"), "html", null, true);
            echo "\">Tableau de bord sprint</a>
                        
                    ";
        }
        // line 29
        echo "                        
                    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories"), "html", null, true);
        echo "\">User storie</a>
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_connexion"), "html", null, true);
        echo "\">Deconnexion</a>
                        
                </div> 
            ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::modeleParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 29,  86 => 14,  62 => 5,  113 => 25,  53 => 38,  264 => 90,  259 => 87,  253 => 86,  247 => 85,  244 => 84,  239 => 82,  236 => 81,  229 => 78,  221 => 76,  217 => 75,  202 => 72,  200 => 71,  197 => 70,  193 => 69,  190 => 68,  187 => 67,  174 => 61,  169 => 59,  117 => 32,  112 => 29,  90 => 42,  87 => 20,  69 => 16,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 80,  228 => 73,  223 => 71,  219 => 70,  213 => 74,  207 => 73,  198 => 67,  181 => 66,  176 => 62,  170 => 61,  168 => 60,  146 => 58,  142 => 45,  128 => 50,  125 => 44,  107 => 22,  38 => 39,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 46,  67 => 42,  61 => 40,  47 => 9,  105 => 24,  93 => 17,  76 => 16,  72 => 43,  68 => 6,  27 => 4,  91 => 20,  84 => 28,  94 => 39,  88 => 6,  79 => 14,  59 => 22,  21 => 2,  44 => 8,  31 => 3,  28 => 3,  225 => 77,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 64,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 30,  121 => 45,  118 => 26,  114 => 42,  104 => 24,  100 => 34,  78 => 21,  75 => 44,  71 => 19,  58 => 9,  34 => 6,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  70 => 20,  63 => 14,  46 => 42,  22 => 2,  163 => 57,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 38,  131 => 31,  123 => 35,  120 => 33,  115 => 39,  106 => 36,  101 => 32,  96 => 21,  83 => 18,  80 => 46,  74 => 16,  66 => 15,  55 => 39,  52 => 15,  50 => 37,  43 => 41,  41 => 8,  37 => 8,  35 => 38,  32 => 4,  29 => 3,  184 => 65,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 47,  143 => 54,  138 => 44,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 48,  102 => 21,  98 => 44,  95 => 18,  92 => 33,  89 => 19,  85 => 48,  81 => 35,  73 => 12,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 12,  45 => 8,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 5,);
    }
}
