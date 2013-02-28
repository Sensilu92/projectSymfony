<?php

/* SuiviprojetAdministrateurBundle:Admin:creationProjet.html.twig */
class __TwigTemplate_2658a30dddb797eab08b9a57f2833c48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modele2.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::modele2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $this->displayParentBlock("menu", $context, $blocks);
        echo "Ajout projet<br /><br />";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
<div class=\"well\">
    <form method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" />
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "SuiviprojetAdministrateurBundle:Admin:creationProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  82 => 27,  77 => 23,  65 => 7,  117 => 45,  110 => 35,  40 => 6,  137 => 31,  112 => 21,  99 => 18,  62 => 5,  113 => 16,  280 => 96,  275 => 93,  269 => 92,  260 => 90,  255 => 88,  252 => 87,  250 => 86,  245 => 84,  241 => 83,  237 => 82,  233 => 81,  229 => 80,  220 => 79,  218 => 78,  211 => 76,  208 => 75,  204 => 74,  195 => 70,  187 => 67,  185 => 66,  174 => 62,  160 => 52,  129 => 53,  124 => 36,  90 => 7,  53 => 15,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 91,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 77,  207 => 68,  198 => 72,  181 => 66,  176 => 65,  170 => 60,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 26,  107 => 20,  38 => 4,  144 => 53,  141 => 55,  135 => 56,  126 => 52,  109 => 36,  103 => 19,  67 => 7,  61 => 51,  47 => 7,  105 => 33,  93 => 14,  76 => 16,  72 => 8,  68 => 20,  27 => 4,  91 => 20,  84 => 21,  94 => 17,  88 => 9,  79 => 51,  59 => 44,  21 => 2,  44 => 7,  31 => 5,  28 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 73,  196 => 80,  194 => 79,  191 => 69,  189 => 77,  186 => 76,  180 => 64,  172 => 67,  159 => 61,  154 => 59,  147 => 39,  132 => 40,  127 => 37,  121 => 35,  118 => 44,  114 => 44,  104 => 36,  100 => 32,  78 => 23,  75 => 10,  71 => 48,  58 => 14,  34 => 6,  26 => 6,  24 => 1,  25 => 14,  19 => 1,  70 => 8,  63 => 15,  46 => 8,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 25,  115 => 39,  106 => 35,  101 => 32,  96 => 31,  83 => 25,  80 => 7,  74 => 22,  66 => 59,  55 => 40,  52 => 15,  50 => 38,  43 => 34,  41 => 6,  37 => 25,  35 => 22,  32 => 16,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 50,  143 => 54,  138 => 51,  136 => 50,  133 => 55,  130 => 29,  122 => 43,  119 => 42,  116 => 23,  111 => 27,  108 => 13,  102 => 32,  98 => 9,  95 => 34,  92 => 30,  89 => 26,  85 => 28,  81 => 40,  73 => 49,  64 => 52,  60 => 23,  57 => 11,  54 => 10,  51 => 39,  48 => 38,  45 => 8,  42 => 7,  39 => 20,  36 => 5,  33 => 3,  30 => 3,);
    }
}
