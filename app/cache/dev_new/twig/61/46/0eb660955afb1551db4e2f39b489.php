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
        // line 38
        echo "        
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
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
        // line 13
        $this->displayBlock('menu', $context, $blocks);
        // line 36
        echo "           
        ";
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        echo " 
                <div class=\"menu\">
                        
                    ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") == "admin")) {
            // line 17
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_creation_compte_client"), "html", null, true);
            echo "\">Création compte client</a>
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_creation_projet"), "html", null, true);
            echo "\">Création projet</a>
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint_assignation_user_stories"), "html", null, true);
            echo "\">Assignation user stories</a>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint_creation"), "html", null, true);
            echo "\">Création sprint</a>
                    ";
        }
        // line 21
        echo " 
                        
                        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suivi_projet_developper_creation_notice"), "html", null, true);
        echo "\">Création notice d'utilisation</a>
                   ";
        // line 25
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suivi_projet_developper_cra"), "html", null, true);
        echo "\">CRA</a>
                        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint_tableau_de_bord_sprint"), "html", null, true);
        echo "\">Tableau de bord sprint</a>
                        
                    ";
        // line 29
        echo "                        
                    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories"), "html", null, true);
        echo "\">User storie</a>
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_deconnexion"), "html", null, true);
        echo "\">Deconnexion</a>
                    ";
        // line 33
        echo "                        
                </div> 
            ";
    }

    // line 39
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
        return array (  137 => 31,  112 => 21,  99 => 18,  62 => 5,  113 => 16,  280 => 96,  275 => 93,  269 => 92,  260 => 90,  255 => 88,  252 => 87,  250 => 86,  245 => 84,  241 => 83,  237 => 82,  233 => 81,  229 => 80,  220 => 79,  218 => 78,  211 => 76,  208 => 75,  204 => 74,  195 => 70,  187 => 67,  185 => 66,  174 => 62,  160 => 52,  129 => 38,  124 => 36,  90 => 7,  53 => 39,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 91,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 77,  207 => 68,  198 => 72,  181 => 66,  176 => 65,  170 => 60,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 26,  107 => 20,  38 => 4,  144 => 53,  141 => 33,  135 => 47,  126 => 45,  109 => 41,  103 => 19,  67 => 7,  61 => 5,  47 => 10,  105 => 24,  93 => 23,  76 => 16,  72 => 8,  68 => 6,  27 => 4,  91 => 20,  84 => 21,  94 => 17,  88 => 6,  79 => 17,  59 => 22,  21 => 2,  44 => 8,  31 => 3,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 73,  196 => 80,  194 => 79,  191 => 69,  189 => 77,  186 => 76,  180 => 64,  172 => 67,  159 => 61,  154 => 59,  147 => 39,  132 => 40,  127 => 37,  121 => 35,  118 => 44,  114 => 42,  104 => 36,  100 => 24,  78 => 13,  75 => 9,  71 => 19,  58 => 14,  34 => 6,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  70 => 20,  63 => 15,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 25,  115 => 39,  106 => 36,  101 => 32,  96 => 21,  83 => 18,  80 => 36,  74 => 16,  66 => 16,  55 => 40,  52 => 15,  50 => 38,  43 => 6,  41 => 8,  37 => 8,  35 => 3,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 50,  143 => 54,  138 => 51,  136 => 50,  133 => 30,  130 => 29,  122 => 43,  119 => 42,  116 => 23,  111 => 27,  108 => 13,  102 => 30,  98 => 9,  95 => 34,  92 => 16,  89 => 19,  85 => 13,  81 => 40,  73 => 12,  64 => 17,  60 => 23,  57 => 11,  54 => 10,  51 => 14,  48 => 12,  45 => 8,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 5,);
    }
}
