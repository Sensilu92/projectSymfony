<?php

/* suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig */
class __TwigTemplate_6d8f3ef96ba91ef1fbe9d3bf8b1144fa extends Twig_Template
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
        echo "Compte rendu d'activité individuel<br /><br />";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
 
<script src = \"http://code.jquery.com/jquery-1.9.1.js\" > </script>
<script src = \"http://code.jquery.com/ui/1.10.1/jquery-ui.js\" > </script>
<link rel = \"stylesheet\" href = \"http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css\" />
<link rel = \"stylesheet\" href = \"/resources/demos/style.css\"/>

    <form method=\"post\" action=\"compte_rendu_dactivite_individuel\"> ";
        // line 13
        echo "
        <table width=\"50%\" height=\"85%\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\"><tr><td>Jours</td><td>Date</td><td>Client</td><td>Tâche</td><td>Statut</td><td>Explications</td></tr>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "            
        <tr>
            <td>
                ";
            // line 19
            if (($this->getContext($context, "i") == 0)) {
                // line 20
                echo "                    LUNDI
                ";
            } elseif (($this->getContext($context, "i") == 1)) {
                // line 22
                echo "                    MARDI
                ";
            } elseif (($this->getContext($context, "i") == 2)) {
                // line 24
                echo "                    MERCREDI
                ";
            } elseif (($this->getContext($context, "i") == 3)) {
                // line 26
                echo "                    JEUDI
                ";
            } else {
                // line 28
                echo "                    VENDREDI
                ";
            }
            // line 30
            echo "            </td>
            <td>
                ";
            // line 33
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", true, true)) {
                // line 34
                echo "                        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "date"), "d/m/Y"), "html", null, true);
                echo "
                    ";
            } else {
                // line 36
                echo "                        ";
                // line 43
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listDate"), $this->getContext($context, "i"), array(), "array"), "html", null, true);
                echo "
                    ";
            }
            // line 45
            echo "                
            </td>
             <td>
                <SELECT name='client";
            // line 48
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "'> 
                    <OPTION name='' value=\"\">
                    ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
            foreach ($context['_seq'] as $context["_key"] => $context["theclient"]) {
                // line 51
                echo "                        ";
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", false, true), "client", array(), "any", true, true)) {
                    // line 52
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "client") == $this->getAttribute($this->getContext($context, "theclient"), "societe"))) {
                        // line 53
                        echo "                                <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "client"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 55
                        echo "                                <OPTION >";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theclient"), "societe"), "html", null, true);
                        echo "
                            ";
                    }
                    // line 57
                    echo "                        ";
                } else {
                    // line 58
                    echo "                            <OPTION >";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theclient"), "societe"), "html", null, true);
                    echo "
                        ";
                }
                // line 60
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theclient'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 61
            echo "                </SELECT>
             </td>
             <td>
                <SELECT name='tache";
            // line 64
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "'> 
                    <OPTION name='' value=\"\">
                    ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tache"));
            foreach ($context['_seq'] as $context["_key"] => $context["thetache"]) {
                // line 67
                echo "                        ";
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", false, true), "tache", array(), "any", true, true)) {
                    // line 68
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "tache") == $this->getAttribute($this->getContext($context, "thetache"), "fonctionnalite"))) {
                        // line 69
                        echo "                                <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "tache"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 71
                        echo "                                <OPTION >";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "thetache"), "fonctionnalite"), "html", null, true);
                        echo "
                            ";
                    }
                    // line 73
                    echo "                        ";
                } else {
                    // line 74
                    echo "                            <OPTION >";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "thetache"), "fonctionnalite"), "html", null, true);
                    echo "
                        ";
                }
                // line 76
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thetache'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 77
            echo "                </SELECT>
             </td>
             <td>
                <SELECT name='statut";
            // line 80
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "'> 
                    <OPTION name='' value=\"\">
                    ";
            // line 82
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "statut"));
            foreach ($context['_seq'] as $context["_key"] => $context["thestatut"]) {
                // line 83
                echo "                        ";
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", false, true), "statut", array(), "any", true, true)) {
                    // line 84
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "statut") == $this->getAttribute($this->getContext($context, "thestatut"), "intitule"))) {
                        // line 85
                        echo "                                <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "statut"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 87
                        echo "                                <OPTION >";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "thestatut"), "intitule"), "html", null, true);
                        echo "
                            ";
                    }
                    // line 89
                    echo "                        ";
                } else {
                    // line 90
                    echo "                            <OPTION >";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "thestatut"), "intitule"), "html", null, true);
                    echo "
                        ";
                }
                // line 92
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thestatut'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 93
            echo "                </SELECT>
             </td>
             <td><textarea name=\"action\" rows=\"2\" cols=\"50\" style=\"border:solid 1px black; font-family:tahoma;\"></textarea></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 98
        echo "            </table><br />

            <input type='submit' value='Enregistrer' name='enregistrer'/> <br />
    </form>
        
    ";
    }

    public function getTemplateName()
    {
        return "suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 98,  244 => 93,  238 => 92,  232 => 90,  214 => 84,  182 => 73,  167 => 68,  296 => 111,  276 => 95,  271 => 93,  266 => 91,  262 => 90,  256 => 89,  253 => 88,  247 => 85,  231 => 80,  226 => 78,  222 => 76,  197 => 77,  193 => 66,  161 => 54,  150 => 61,  86 => 33,  56 => 13,  169 => 58,  97 => 43,  224 => 80,  217 => 85,  202 => 80,  199 => 69,  190 => 66,  188 => 62,  183 => 62,  164 => 67,  148 => 70,  87 => 40,  82 => 30,  77 => 23,  65 => 16,  117 => 51,  110 => 29,  40 => 6,  137 => 31,  112 => 21,  99 => 27,  62 => 20,  113 => 50,  280 => 98,  275 => 93,  269 => 92,  260 => 90,  255 => 88,  252 => 87,  250 => 86,  245 => 84,  241 => 82,  237 => 81,  233 => 81,  229 => 89,  220 => 79,  218 => 78,  211 => 83,  208 => 71,  204 => 74,  195 => 70,  187 => 63,  185 => 74,  174 => 61,  160 => 66,  129 => 55,  124 => 36,  90 => 7,  53 => 12,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 106,  282 => 88,  277 => 86,  267 => 85,  263 => 91,  257 => 81,  251 => 87,  246 => 78,  240 => 77,  234 => 74,  228 => 79,  223 => 87,  219 => 70,  213 => 77,  207 => 82,  198 => 72,  181 => 60,  176 => 71,  170 => 69,  168 => 60,  146 => 44,  142 => 68,  128 => 50,  125 => 35,  107 => 20,  38 => 4,  144 => 60,  141 => 42,  135 => 57,  126 => 36,  109 => 52,  103 => 45,  67 => 31,  61 => 51,  47 => 13,  105 => 51,  93 => 14,  76 => 36,  72 => 8,  68 => 20,  27 => 4,  91 => 20,  84 => 21,  94 => 24,  88 => 23,  79 => 21,  59 => 14,  21 => 2,  44 => 7,  31 => 5,  28 => 4,  225 => 96,  216 => 90,  212 => 72,  205 => 84,  201 => 73,  196 => 80,  194 => 79,  191 => 76,  189 => 77,  186 => 76,  180 => 64,  172 => 77,  159 => 51,  154 => 72,  147 => 39,  132 => 40,  127 => 37,  121 => 35,  118 => 32,  114 => 44,  104 => 36,  100 => 32,  78 => 28,  75 => 10,  71 => 18,  58 => 14,  34 => 6,  26 => 6,  24 => 1,  25 => 14,  19 => 1,  70 => 24,  63 => 15,  46 => 10,  22 => 2,  163 => 75,  155 => 64,  152 => 52,  149 => 48,  145 => 47,  139 => 67,  131 => 65,  123 => 53,  120 => 52,  115 => 39,  106 => 27,  101 => 49,  96 => 31,  83 => 25,  80 => 21,  74 => 26,  66 => 22,  55 => 16,  52 => 12,  50 => 38,  43 => 7,  41 => 6,  37 => 5,  35 => 22,  32 => 16,  29 => 3,  184 => 70,  178 => 71,  171 => 59,  165 => 58,  162 => 57,  157 => 73,  153 => 54,  151 => 50,  143 => 46,  138 => 58,  136 => 41,  133 => 55,  130 => 29,  122 => 43,  119 => 42,  116 => 23,  111 => 31,  108 => 48,  102 => 28,  98 => 9,  95 => 36,  92 => 39,  89 => 34,  85 => 39,  81 => 40,  73 => 19,  64 => 16,  60 => 19,  57 => 11,  54 => 10,  51 => 15,  48 => 9,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 3,);
    }
}
