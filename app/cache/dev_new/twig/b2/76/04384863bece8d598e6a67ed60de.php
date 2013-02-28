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
        echo "Tableau de bord<br /><br />";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo " 
    <form method=\"post\" action=\"\"> ";
        // line 8
        echo "        
        <label>Sprint : </label><SELECT name='sprint'>
            ";
        // line 10
        if (array_key_exists("sprint", $context)) {
            // line 11
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sprint"));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 12
                echo "                    ";
                if (array_key_exists("currentSprint", $context)) {
                    // line 13
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "s"), "nom") == $this->getContext($context, "currentSprint"))) {
                        // line 14
                        echo "                            <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nom"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 16
                        echo "                            <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nom"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 18
                    echo "                     ";
                } else {
                    // line 19
                    echo "                        <OPTION>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nom"), "html", null, true);
                    echo "
                     ";
                }
                // line 21
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "            ";
        } else {
            // line 23
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sprint"));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 24
                echo "                    <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nom"), "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 26
            echo "            ";
        }
        // line 27
        echo "        </SELECT> 
        
        <label>Projet : </label><input type='text'  name='projet' id='projet' value=\"";
        // line 29
        if (array_key_exists("projet", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "projet"), 0, array(), "array"), "nom"), "html", null, true);
        }
        echo "\" disabled=\"disabled\"/>
        <input type='submit' value='Charger' name='charger'/> <br /> <br /> 
 
    ";
        // line 32
        $context["counter"] = 0;
        echo " 
        
    ";
        // line 34
        if (array_key_exists("userStories", $context)) {
            // line 35
            echo " 
        <table style=\"border-collapse: collapse; border: solid; text-align: left\"><tr>
           
            <td> Développeur </td><td> A faire </td><td> En cours </td><td> A valider </td><td> Valider </td></tr>
        
            ";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStories"));
            foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
                // line 41
                echo "            
                <tr>
                    <td>
                        <SELECT name='dev'>
                            <OPTION name='' value=\"\">
                            ";
                // line 46
                if (array_key_exists("listDev", $context)) {
                    // line 47
                    echo "                                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listDev"));
                    foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                        // line 48
                        echo "                                     ";
                        // line 52
                        echo "                                    <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dev"), "nom"), "html", null, true);
                        echo "
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dev'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 54
                    echo "                            ";
                }
                // line 55
                echo "                        </SELECT> 
                    </td>
                    <td>
                        ";
                // line 58
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutSprintstatutSprint"), "intitule") == "à faire")) {
                    // line 59
                    echo "                            
                           ";
                    // line 61
                    echo "                            <a name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b name=\"fonctionnalite\">Fonctionnalité : </b>";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> Afficher les userstories tech<br>
                        ";
                }
                // line 66
                echo "                      </td>
                      <td>
                        ";
                // line 68
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutSprintstatutSprint"), "intitule") == "en cours")) {
                    // line 69
                    echo "                           
                            <a href=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b>Fonctionnalité : </b>";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> <br>
                            Changer le statut en \" Valider \"<input type='checkbox' name='valider";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "'/>
                        ";
                }
                // line 76
                echo "                       </td>
                        <td>
                        ";
                // line 78
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutSprintstatutSprint"), "intitule") == "à valider")) {
                    // line 79
                    echo "                            
                            <a href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b>Fonctionnalité : </b>";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> <br>
                        ";
                }
                // line 85
                echo "                       </td>
                        <td>
                        ";
                // line 87
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutSprintstatutSprint"), "intitule") == "terminé")) {
                    // line 88
                    echo "                            
                            <a href=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b>Fonctionnalité : </b>";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> <br>
                            Changer le statut en \" En cours \"<input type='checkbox' name='afaire";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "'/>
                        ";
                }
                // line 95
                echo "                       </td>
 
                    ";
                // line 98
                echo "                </tr>

                ";
                // line 106
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStory'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo " 
            </tr></table><br /> 
        <input type='submit' value='Enregistrer' name='enregistrer'/> <br /> <br /> 
         </form>
    ";
        }
        // line 111
        echo " 
 ";
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
        return array (  296 => 111,  276 => 95,  271 => 93,  266 => 91,  262 => 90,  256 => 89,  253 => 88,  247 => 85,  231 => 80,  226 => 78,  222 => 76,  197 => 68,  193 => 66,  161 => 54,  150 => 48,  86 => 22,  56 => 13,  169 => 58,  97 => 48,  224 => 80,  217 => 74,  202 => 70,  199 => 69,  190 => 66,  188 => 62,  183 => 62,  164 => 55,  148 => 70,  87 => 40,  82 => 27,  77 => 23,  65 => 16,  117 => 33,  110 => 29,  40 => 6,  137 => 31,  112 => 21,  99 => 27,  62 => 5,  113 => 16,  280 => 98,  275 => 93,  269 => 92,  260 => 90,  255 => 88,  252 => 87,  250 => 86,  245 => 84,  241 => 82,  237 => 81,  233 => 81,  229 => 80,  220 => 79,  218 => 78,  211 => 76,  208 => 71,  204 => 74,  195 => 70,  187 => 63,  185 => 66,  174 => 61,  160 => 52,  129 => 64,  124 => 36,  90 => 7,  53 => 12,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 106,  282 => 88,  277 => 86,  267 => 85,  263 => 91,  257 => 81,  251 => 87,  246 => 78,  240 => 77,  234 => 74,  228 => 79,  223 => 71,  219 => 70,  213 => 77,  207 => 72,  198 => 72,  181 => 60,  176 => 58,  170 => 55,  168 => 60,  146 => 44,  142 => 68,  128 => 50,  125 => 35,  107 => 20,  38 => 4,  144 => 53,  141 => 42,  135 => 38,  126 => 36,  109 => 52,  103 => 26,  67 => 7,  61 => 51,  47 => 11,  105 => 51,  93 => 14,  76 => 36,  72 => 8,  68 => 20,  27 => 4,  91 => 20,  84 => 21,  94 => 24,  88 => 23,  79 => 21,  59 => 14,  21 => 2,  44 => 7,  31 => 5,  28 => 4,  225 => 96,  216 => 90,  212 => 72,  205 => 84,  201 => 73,  196 => 80,  194 => 79,  191 => 69,  189 => 77,  186 => 76,  180 => 64,  172 => 77,  159 => 51,  154 => 72,  147 => 39,  132 => 40,  127 => 37,  121 => 35,  118 => 32,  114 => 44,  104 => 36,  100 => 32,  78 => 23,  75 => 10,  71 => 18,  58 => 14,  34 => 6,  26 => 6,  24 => 1,  25 => 14,  19 => 1,  70 => 18,  63 => 15,  46 => 10,  22 => 2,  163 => 75,  155 => 50,  152 => 52,  149 => 48,  145 => 47,  139 => 67,  131 => 65,  123 => 34,  120 => 34,  115 => 39,  106 => 27,  101 => 49,  96 => 31,  83 => 25,  80 => 21,  74 => 19,  66 => 59,  55 => 13,  52 => 12,  50 => 38,  43 => 7,  41 => 6,  37 => 5,  35 => 22,  32 => 16,  29 => 3,  184 => 70,  178 => 71,  171 => 59,  165 => 58,  162 => 57,  157 => 73,  153 => 54,  151 => 50,  143 => 46,  138 => 51,  136 => 41,  133 => 55,  130 => 29,  122 => 43,  119 => 42,  116 => 23,  111 => 31,  108 => 13,  102 => 28,  98 => 9,  95 => 34,  92 => 25,  89 => 23,  85 => 39,  81 => 40,  73 => 19,  64 => 16,  60 => 23,  57 => 11,  54 => 10,  51 => 39,  48 => 11,  45 => 10,  42 => 8,  39 => 6,  36 => 5,  33 => 3,  30 => 3,);
    }
}
