<?php

/* ::creationClientFormulaire.html.twig */
class __TwigTemplate_3a804275f6484ebfa9966b82e122d1c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        echo "Place du formulaire
        
            <form method=\"post\" action=\"e\">
                
                <label>Société : <input type='text'  name='societe' id='societe' size=\"20px\" /> <br /><br />
                <label>Nom du contact : <input type='text'  name='nameContact' id='nameContact' size=\"20px\" /> <br /><br />
                <label>Prénom du contact : <input type='text'  name='prenomContact' id='prenomContact' size=\"20px\" /> <br /><br />
                <label>Téléphone du contact : <input type='text'  name='telephoneContact' id='telephoneContacth' size=\"20px\" /> <br /><br />
                <label>Identifiant : <input type='text'  name='identifiant' id='identifiant' size=\"20px\" /> <br /><br />
                <label>Mot de passe : <input type='text'  name='password' id='password' size=\"20px\" /> <br /><br />
                <input type='submit' value='Créer' name='creer'/>';    
            </form>
        ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::creationClientFormulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  53 => 5,  23 => 1,  56 => 24,  49 => 19,  110 => 20,  87 => 20,  40 => 7,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 8,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 62,  103 => 37,  67 => 11,  61 => 27,  47 => 24,  105 => 17,  93 => 28,  76 => 15,  72 => 31,  68 => 30,  27 => 4,  91 => 20,  84 => 28,  94 => 39,  88 => 49,  79 => 17,  59 => 6,  21 => 2,  44 => 23,  31 => 5,  28 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 15,  78 => 21,  75 => 23,  71 => 13,  58 => 7,  34 => 11,  26 => 1,  24 => 3,  25 => 3,  19 => 1,  70 => 37,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 32,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 24,  41 => 10,  37 => 6,  35 => 7,  32 => 6,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 31,  95 => 13,  92 => 50,  89 => 21,  85 => 25,  81 => 46,  73 => 19,  64 => 10,  60 => 23,  57 => 11,  54 => 10,  51 => 4,  48 => 3,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 3,);
    }
}
