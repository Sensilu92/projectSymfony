<?php

/* suiviProjetDevelopperBundle:Developper:creationNoticeVue.html.twig */
class __TwigTemplate_c3665541563a2914ecf07f814a2e1ec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modele.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'contentCenter' => array($this, 'block_contentCenter'),
            'contentLeft' => array($this, 'block_contentLeft'),
            'contentRight' => array($this, 'block_contentRight'),
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

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $this->displayParentBlock("menu", $context, $blocks);
        echo "Création notice <br /><br />";
    }

    // line 5
    public function block_contentCenter($context, array $blocks = array())
    {
        echo " 
    ";
        // line 16
        echo " 
    <form method=\"post\" action=\"\">
                 
        <label>Projet : </label><SELECT name='projet'>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 21
            echo "                ";
            if (array_key_exists("currentProjet", $context)) {
                // line 22
                echo "                    ";
                if (($this->getAttribute($this->getContext($context, "p"), "idprojet") == $this->getAttribute($this->getContext($context, "currentProjet"), "idprojet"))) {
                    // line 23
                    echo "                        <OPTION selected=\"selected\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                    echo "
                     ";
                } else {
                    // line 25
                    echo "                        <OPTION>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                    echo "
                    ";
                }
                // line 27
                echo "                ";
            } else {
                // line 28
                echo "                    <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                echo " 
                ";
            }
            // line 29
            echo "               
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "        </SELECT> 
     
        <input type='submit' value='Charger' name='charger'/> <br /> 
 
 ";
    }

    // line 37
    public function block_contentLeft($context, array $blocks = array())
    {
        // line 38
        echo "        
 ";
        // line 40
        echo "
        <fieldset ";
        // line 41
        echo "> 
            <legend>Nouvelle notice d'utilisation</legend></br></br>
           
            <label>Titre : </label><input type='text'  name='titre' id='titre'/> <br /><br />
            <label>Fonctionnalité : </label><input type='text'  name='fonctionnalite' id='fonctionnalite'/> <br /><br />
            <label>Explications : </label><textarea name=\"detail\" rows=\"5\" cols=\"30\" style=\"border:solid 1px black; font-family:tahoma;\"></textarea> <br /><br />
            <input type='submit' value='Enregistrer' name='enregistrer'/> <br />        
        </fieldset>
    </form>
       ";
        // line 51
        echo "    ";
    }

    // line 53
    public function block_contentRight($context, array $blocks = array())
    {
        // line 54
        echo "    <fieldset> 
        <legend>Liste des notices disponible pour ce projet</legend></br></br>
            <ul>
                ";
        // line 57
        if (array_key_exists("notices", $context)) {
            // line 58
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "notices"));
            foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                // line 59
                echo "                        <li> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suivi_projet_developper_consulte_notice", array("idNotice" => $this->getAttribute($this->getContext($context, "notice"), "idnotice"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "notice"), "fonctionnalite"), "html", null, true);
                echo "</a><br></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 61
            echo "                ";
        }
        // line 62
        echo "            </ul>    
    </fieldset>

    ";
    }

    public function getTemplateName()
    {
        return "suiviProjetDevelopperBundle:Developper:creationNoticeVue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 59,  49 => 20,  254 => 98,  244 => 93,  238 => 92,  232 => 90,  214 => 84,  182 => 73,  167 => 68,  296 => 111,  276 => 95,  271 => 93,  266 => 91,  262 => 90,  256 => 89,  253 => 88,  247 => 85,  231 => 80,  226 => 78,  222 => 76,  197 => 77,  193 => 66,  161 => 54,  150 => 61,  86 => 33,  56 => 22,  169 => 58,  97 => 43,  224 => 80,  217 => 85,  202 => 80,  199 => 69,  190 => 66,  188 => 62,  183 => 62,  164 => 67,  148 => 62,  87 => 31,  82 => 30,  77 => 23,  65 => 25,  117 => 51,  110 => 29,  40 => 6,  137 => 31,  112 => 21,  99 => 27,  62 => 20,  113 => 50,  280 => 98,  275 => 93,  269 => 92,  260 => 90,  255 => 88,  252 => 87,  250 => 86,  245 => 84,  241 => 82,  237 => 81,  233 => 81,  229 => 89,  220 => 79,  218 => 78,  211 => 83,  208 => 71,  204 => 74,  195 => 70,  187 => 63,  185 => 74,  174 => 61,  160 => 66,  129 => 58,  124 => 36,  90 => 7,  53 => 21,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 106,  282 => 88,  277 => 86,  267 => 85,  263 => 91,  257 => 81,  251 => 87,  246 => 78,  240 => 77,  234 => 74,  228 => 79,  223 => 87,  219 => 70,  213 => 77,  207 => 82,  198 => 72,  181 => 60,  176 => 71,  170 => 69,  168 => 60,  146 => 44,  142 => 68,  128 => 50,  125 => 35,  107 => 20,  38 => 5,  144 => 60,  141 => 42,  135 => 57,  126 => 36,  109 => 52,  103 => 45,  67 => 31,  61 => 51,  47 => 13,  105 => 51,  93 => 14,  76 => 36,  72 => 8,  68 => 20,  27 => 4,  91 => 20,  84 => 21,  94 => 24,  88 => 23,  79 => 21,  59 => 23,  21 => 2,  44 => 7,  31 => 3,  28 => 4,  225 => 96,  216 => 90,  212 => 72,  205 => 84,  201 => 73,  196 => 80,  194 => 79,  191 => 76,  189 => 77,  186 => 76,  180 => 64,  172 => 77,  159 => 51,  154 => 72,  147 => 39,  132 => 40,  127 => 57,  121 => 35,  118 => 32,  114 => 44,  104 => 41,  100 => 32,  78 => 28,  75 => 10,  71 => 27,  58 => 14,  34 => 6,  26 => 6,  24 => 1,  25 => 14,  19 => 1,  70 => 24,  63 => 15,  46 => 10,  22 => 2,  163 => 75,  155 => 64,  152 => 52,  149 => 48,  145 => 61,  139 => 67,  131 => 65,  123 => 53,  120 => 52,  115 => 51,  106 => 27,  101 => 40,  96 => 31,  83 => 25,  80 => 29,  74 => 28,  66 => 22,  55 => 16,  52 => 12,  50 => 38,  43 => 16,  41 => 6,  37 => 5,  35 => 22,  32 => 16,  29 => 3,  184 => 70,  178 => 71,  171 => 59,  165 => 58,  162 => 57,  157 => 73,  153 => 54,  151 => 50,  143 => 46,  138 => 58,  136 => 41,  133 => 55,  130 => 29,  122 => 54,  119 => 53,  116 => 23,  111 => 31,  108 => 48,  102 => 28,  98 => 38,  95 => 37,  92 => 39,  89 => 34,  85 => 39,  81 => 40,  73 => 19,  64 => 16,  60 => 19,  57 => 11,  54 => 10,  51 => 15,  48 => 9,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 3,);
    }
}
