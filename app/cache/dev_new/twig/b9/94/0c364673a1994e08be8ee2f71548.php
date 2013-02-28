<?php

/* SuiviprojetAdministrateurBundle:Admin:connexionVue.html.twig */
class __TwigTemplate_b9940c364673a1994e08be8ee2f71548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "  
    <div class=\"span4 offset4\">
        <form method=\"POST\" class=\"connexion form-horizontal well\" action=\"\" onsubmit=\"return check('');\">
            <legend>Identification</legend>
   
            <div class=\"control-group\">
                <label class=\"control-label\">Identifiant : </label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"identifiant\" />
                </div>
            </div>
            
            <div class=\"control-group\">
                <label class=\"control-label required\">Mot de passe : </label>
                <div class=\"controls\">
                    <input type=\"password\" name=\"password\" />
                </div>
            </div>
            <div class=\"control-group\">
                <div class=\"controls\">
                    <div class=\"form-buttons\">
                        <input class=\"btn\" type=\"submit\" value=\"Connexion\" name=\"connexion\"/>
                    </div>
                </div>
            </div>
        </form>
    
    ";
        // line 48
        if (array_key_exists("message", $context)) {
            // line 49
            echo "        <a style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</a>
    ";
        }
        // line 51
        echo "    
   </div>
";
    }

    public function getTemplateName()
    {
        return "SuiviprojetAdministrateurBundle:Admin:connexionVue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 7,  117 => 37,  110 => 35,  40 => 6,  137 => 31,  112 => 21,  99 => 18,  62 => 5,  113 => 16,  280 => 96,  275 => 93,  269 => 92,  260 => 90,  255 => 88,  252 => 87,  250 => 86,  245 => 84,  241 => 83,  237 => 82,  233 => 81,  229 => 80,  220 => 79,  218 => 78,  211 => 76,  208 => 75,  204 => 74,  195 => 70,  187 => 67,  185 => 66,  174 => 62,  160 => 52,  129 => 38,  124 => 36,  90 => 7,  53 => 15,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 91,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 77,  207 => 68,  198 => 72,  181 => 66,  176 => 65,  170 => 60,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 26,  107 => 20,  38 => 4,  144 => 53,  141 => 33,  135 => 47,  126 => 45,  109 => 41,  103 => 19,  67 => 7,  61 => 17,  47 => 8,  105 => 33,  93 => 14,  76 => 16,  72 => 8,  68 => 20,  27 => 4,  91 => 20,  84 => 21,  94 => 17,  88 => 9,  79 => 51,  59 => 5,  21 => 2,  44 => 7,  31 => 5,  28 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 73,  196 => 80,  194 => 79,  191 => 69,  189 => 77,  186 => 76,  180 => 64,  172 => 67,  159 => 61,  154 => 59,  147 => 39,  132 => 40,  127 => 37,  121 => 35,  118 => 44,  114 => 42,  104 => 36,  100 => 31,  78 => 23,  75 => 10,  71 => 48,  58 => 14,  34 => 6,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  70 => 8,  63 => 15,  46 => 11,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 25,  115 => 39,  106 => 36,  101 => 32,  96 => 21,  83 => 25,  80 => 7,  74 => 16,  66 => 16,  55 => 40,  52 => 15,  50 => 38,  43 => 7,  41 => 6,  37 => 5,  35 => 3,  32 => 16,  29 => 15,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 50,  143 => 54,  138 => 51,  136 => 50,  133 => 30,  130 => 29,  122 => 43,  119 => 42,  116 => 23,  111 => 27,  108 => 13,  102 => 32,  98 => 9,  95 => 34,  92 => 16,  89 => 26,  85 => 13,  81 => 40,  73 => 49,  64 => 17,  60 => 23,  57 => 11,  54 => 10,  51 => 14,  48 => 12,  45 => 8,  42 => 21,  39 => 20,  36 => 4,  33 => 3,  30 => 3,);
    }
}
