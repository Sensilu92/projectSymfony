<?php

/* SuiviprojetAdministrateurBundle:Admin:creationCompteClient.html.twig */
class __TwigTemplate_d69538f999e588dd8bc5c6b3157b77f2 extends Twig_Template
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
    Création compte client

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
        <label>Prénom du contact : <input type='text'  name='prenomContact' id='prenomContact' size=\"20px\" /> <br /><br />
        <label>Téléphone du contact : <input type='text'  name='telephoneContact' id='telephoneContacth' size=\"20px\" /> <br /><br />
        <label>Identifiant : <input type='text'  name='identifiant' id='identifiant' size=\"20px\" /> <br /><br />
        <label>Mot de passe : <input type='text'  name='password' id='password' size=\"20px\" /> <br /><br />
        <input type='submit' value='Créer' name='creer'/>    
   </form>
    
 ";
    }

    public function getTemplateName()
    {
        return "SuiviprojetAdministrateurBundle:Admin:creationCompteClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  53 => 15,  23 => 1,  56 => 24,  49 => 19,  110 => 20,  87 => 20,  40 => 12,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 8,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 62,  103 => 37,  67 => 11,  61 => 27,  47 => 24,  105 => 17,  93 => 28,  76 => 15,  72 => 31,  68 => 30,  27 => 4,  91 => 20,  84 => 28,  94 => 39,  88 => 49,  79 => 17,  59 => 6,  21 => 2,  44 => 13,  31 => 5,  28 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 15,  78 => 21,  75 => 23,  71 => 13,  58 => 7,  34 => 11,  26 => 1,  24 => 3,  25 => 3,  19 => 1,  70 => 37,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 32,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 24,  41 => 10,  37 => 6,  35 => 7,  32 => 6,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 31,  95 => 13,  92 => 50,  89 => 21,  85 => 25,  81 => 46,  73 => 19,  64 => 10,  60 => 23,  57 => 11,  54 => 10,  51 => 4,  48 => 3,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 3,);
    }
}
