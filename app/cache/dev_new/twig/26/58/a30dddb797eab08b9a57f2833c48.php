<?php

/* SuiviprojetAdministrateurBundle:Admin:creationProjet.html.twig */
class __TwigTemplate_2658a30dddb797eab08b9a57f2833c48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modele.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::modele.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    Création projet

    <form method=\"post\" action=\"e\">
                
        <label>Nom : <input type='text'  name='name' id='name' size=\"20px\" /> <br /><br />
            <label>Client : </label><SELECT name='client'>
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 13
            echo "                <OPTION>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "c"), "identifiantconnection"), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "        </SELECT></br></br>
        <label>Date de début : </label><input type='text'  name='prenomContact' id='prenomContact'/> 
        <label>Date de fin : </label><input type='text'  name='telephoneContact' id='telephoneContacth'/> <br /><br />
        <label>Action : </label><br />
        <textarea rows=\"5\" cols=\"30\" style=\"border:solid 1px black; font-family:tahoma;\"></textarea> <br /><br />
        <input type='submit' value='Créer' name='creer'/>    
   </form>
    
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
        return array (  40 => 12,  53 => 15,  23 => 1,  82 => 23,  117 => 19,  97 => 23,  87 => 19,  69 => 26,  62 => 17,  56 => 10,  49 => 14,  209 => 80,  202 => 75,  195 => 74,  177 => 68,  174 => 67,  166 => 64,  156 => 62,  129 => 53,  113 => 43,  77 => 25,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 70,  176 => 65,  170 => 65,  168 => 60,  146 => 59,  142 => 58,  128 => 50,  125 => 51,  107 => 14,  38 => 7,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 26,  61 => 13,  47 => 24,  105 => 24,  93 => 28,  76 => 28,  72 => 14,  68 => 20,  27 => 1,  91 => 33,  84 => 28,  94 => 39,  88 => 34,  79 => 30,  59 => 6,  21 => 2,  44 => 13,  31 => 5,  28 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 73,  186 => 72,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 26,  127 => 23,  121 => 45,  118 => 48,  114 => 42,  104 => 39,  100 => 34,  78 => 21,  75 => 11,  71 => 27,  58 => 9,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 11,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 60,  145 => 46,  139 => 57,  131 => 51,  123 => 50,  120 => 40,  115 => 39,  106 => 36,  101 => 37,  96 => 21,  83 => 17,  80 => 24,  74 => 23,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 7,  41 => 30,  37 => 8,  35 => 7,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 63,  157 => 60,  153 => 54,  151 => 61,  143 => 54,  138 => 51,  136 => 56,  133 => 54,  130 => 47,  122 => 47,  119 => 42,  116 => 35,  111 => 15,  108 => 41,  102 => 38,  98 => 31,  95 => 34,  92 => 21,  89 => 19,  85 => 32,  81 => 13,  73 => 19,  64 => 10,  60 => 14,  57 => 11,  54 => 10,  51 => 12,  48 => 13,  45 => 8,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
