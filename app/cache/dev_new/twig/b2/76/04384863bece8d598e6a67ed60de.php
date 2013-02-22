<?php

/* SprintBundle:Sprint:tableauDeBordSprintVue.html.twig */
class __TwigTemplate_b27604384863bece8d598e6a67ed60de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modele2.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'contentCenter' => array($this, 'block_contentCenter'),
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

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        $this->displayParentBlock("menu", $context, $blocks);
        echo "Tableau de bord<br /><br />";
    }

    // line 6
    public function block_contentCenter($context, array $blocks = array())
    {
        echo " 
 METTRE LES SOUS TACHES
    <form method=\"post\" action=\"\"> ";
        // line 9
        echo "                 
        <label>Projet : </label><SELECT name='projet'>
        ";
        // line 11
        if (array_key_exists("id", $context)) {
            // line 12
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 13
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "id"));
                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                    // line 14
                    echo "                    ";
                    if (($this->getAttribute($this->getContext($context, "p"), "idProjet") == $this->getAttribute($this->getContext($context, "t"), "idProjet"))) {
                        // line 15
                        echo "                        <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                        echo "
                             ";
                    } else {
                        // line 17
                        echo "                        <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 19
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 20
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 21
            echo "        ";
        } else {
            // line 22
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 23
                echo "                <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 25
            echo "        ";
        }
        // line 26
        echo "        </SELECT> 
        
        <label>Sprint : </label><SELECT name='sprint'>
        ";
        // line 29
        if (array_key_exists("sprint", $context)) {
            // line 30
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sprint"));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 31
                echo "                <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "idsprint"), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 33
            echo "         ";
        }
        // line 34
        echo "        </SELECT> 
        
        <input type='submit' value='Charger' name='charger'/> <br /> <br /> 
    </form>
        
       
 
        ";
        // line 41
        $context["counter"] = 0;
        echo " 
        
        ";
        // line 43
        if (array_key_exists("sprintTab", $context)) {
            // line 44
            echo " 
        <table style=\"border: solid;
    border-width: 1px;\"><tr>
            ";
            // line 48
            echo "                             <td> Tâches </td><td> A faire </td><td> En cours </td><td> A valider </td><td> Valider </td></tr>
                ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "sprintTab"), "getUserStorieUserStorie", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
                // line 50
                echo "
            <tr>
                <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                echo "</td>
                ";
                // line 58
                echo "                
                <td>
                    <input ";
                // line 60
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "à faire")) {
                    echo " checked=\"checked\" ";
                }
                echo " type=\"checkbox\" name=\"question[";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "]\" disabled=\"disabled\"/>  
                </td>
                <td>
                    <input ";
                // line 63
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "en cours")) {
                    echo " checked=\"checked\" ";
                }
                echo " type=\"checkbox\" name=\"question[";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "]\" disabled=\"disabled\"/>  
                </td>
                <td>
                    <input ";
                // line 66
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "à valider")) {
                    echo " checked=\"checked\" ";
                }
                echo " type=\"checkbox\" name=\"question[";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "]\" disabled=\"disabled\"/>  
                </td>
                <td>
                    <input ";
                // line 69
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "terminé")) {
                    echo " checked=\"checked\" ";
                }
                echo " type=\"checkbox\" name=\"question[";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "]\" disabled=\"disabled\"/>  
                </td>
            </tr>


                ";
                // line 75
                echo "                ";
                $context["counter"] = ($this->getContext($context, "counter") + 1);
                // line 76
                echo "
                            
                            ";
                // line 78
                if (($this->getContext($context, "counter") == 4)) {
                    // line 79
                    echo "                                </tr><tr>
                                ";
                    // line 80
                    $context["counter"] = 0;
                    echo "   
                            ";
                }
                // line 82
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStory'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 83
            echo "                                         ";
            // line 84
            echo "            </tr></table>
 
        ";
        }
        // line 87
        echo " ";
    }

    public function getTemplateName()
    {
        return "SprintBundle:Sprint:tableauDeBordSprintVue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 87,  220 => 79,  218 => 78,  214 => 76,  211 => 75,  199 => 69,  179 => 63,  161 => 52,  150 => 48,  129 => 34,  110 => 29,  82 => 9,  77 => 15,  97 => 32,  65 => 21,  56 => 17,  40 => 6,  124 => 29,  86 => 14,  62 => 5,  113 => 25,  53 => 13,  264 => 90,  259 => 87,  253 => 86,  247 => 85,  244 => 84,  239 => 82,  236 => 84,  229 => 78,  221 => 76,  217 => 75,  202 => 72,  200 => 71,  197 => 70,  193 => 69,  190 => 68,  187 => 67,  174 => 61,  169 => 60,  117 => 31,  112 => 30,  90 => 42,  87 => 20,  69 => 11,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 83,  228 => 82,  223 => 80,  219 => 70,  213 => 74,  207 => 73,  198 => 67,  181 => 66,  176 => 62,  170 => 61,  168 => 60,  146 => 58,  142 => 45,  128 => 50,  125 => 44,  107 => 22,  38 => 39,  144 => 53,  141 => 51,  135 => 47,  126 => 33,  109 => 41,  103 => 46,  67 => 17,  61 => 15,  47 => 9,  105 => 26,  93 => 23,  76 => 16,  72 => 43,  68 => 6,  27 => 4,  91 => 20,  84 => 26,  94 => 39,  88 => 22,  79 => 20,  59 => 22,  21 => 2,  44 => 9,  31 => 5,  28 => 4,  225 => 77,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 66,  186 => 76,  180 => 64,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 30,  121 => 45,  118 => 26,  114 => 42,  104 => 24,  100 => 33,  78 => 25,  75 => 14,  71 => 19,  58 => 14,  34 => 6,  26 => 7,  24 => 1,  25 => 3,  19 => 1,  70 => 22,  63 => 20,  46 => 11,  22 => 2,  163 => 57,  155 => 58,  152 => 49,  149 => 48,  145 => 44,  139 => 38,  131 => 31,  123 => 35,  120 => 33,  115 => 39,  106 => 36,  101 => 32,  96 => 21,  83 => 18,  80 => 46,  74 => 16,  66 => 15,  55 => 39,  52 => 15,  50 => 37,  43 => 8,  41 => 8,  37 => 5,  35 => 38,  32 => 4,  29 => 4,  184 => 65,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 50,  153 => 49,  151 => 47,  143 => 43,  138 => 41,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 48,  102 => 25,  98 => 44,  95 => 31,  92 => 33,  89 => 19,  85 => 21,  81 => 35,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 6,  51 => 5,  48 => 12,  45 => 8,  42 => 9,  39 => 6,  36 => 6,  33 => 3,  30 => 8,);
    }
}
