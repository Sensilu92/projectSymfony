<?php

/* SprintBundle:Sprint:assignationUserStoriesVue.html.twig */
class __TwigTemplate_5ef8de66121636d549fd98bb4f12e19c extends Twig_Template
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
        echo "Assignation user stories<br /><br />";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo " 
    <form method=\"post\" action=\"\"> 
        
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
        }
        // line 23
        echo "        </SELECT> 
        <label>Projet : </label><SELECT name='projet'>
            ";
        // line 25
        if (array_key_exists("projet", $context)) {
            // line 26
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 27
                echo "                    ";
                if (array_key_exists("currentProjet", $context)) {
                    // line 28
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "p"), "nom") == $this->getContext($context, "currentProjet"))) {
                        // line 29
                        echo "                            <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 31
                        echo "                            <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 33
                    echo "                     ";
                } else {
                    // line 34
                    echo "                        <OPTION>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                    echo "
                     ";
                }
                // line 36
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 37
            echo "            ";
        }
        // line 38
        echo "        </SELECT>
        
        <input type='submit' value='Charger' name='charger'/> <br /> <br /> 
 
    ";
        // line 42
        $context["counter"] = 0;
        echo " 
        
    ";
        // line 44
        if (array_key_exists("userStories", $context)) {
            // line 45
            echo " 
        <table style=\"border-collapse: collapse; border: solid; text-align: left\"><tr>
           
            <td> User stories </td><td> A assigner à </td><td> Ajouter au sprint </td></tr>
        
            ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStories"));
            foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
                // line 51
                echo "            
                <tr>
                    <td>
                        <b name=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "\" >#";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "</b><br> 
                        <b name=\"fonctionnalite\">Fonctionnalité : </b>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                echo "<br>
                    </td>
                    <td>
                        <SELECT name='dev";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "'>
                            <OPTION name='' value=\"\">
                            ";
                // line 60
                if (array_key_exists("listDev", $context)) {
                    // line 61
                    echo "                                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listDev"));
                    foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                        // line 62
                        echo "                                     ";
                        // line 66
                        echo "                                    <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dev"), "nom"), "html", null, true);
                        echo "
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dev'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 68
                    echo "                            ";
                }
                // line 69
                echo "                        </SELECT> 
                    </td>
                    <td>
                        <input type='checkbox' name='ajout";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "'/>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStory'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 75
            echo " 
            </tr></table><br /> 
        <input type='submit' value='Valider' name='valider'/> <br /> <br /> 
         </form>
    ";
        }
        // line 80
        echo " 
 ";
    }

    public function getTemplateName()
    {
        return "SprintBundle:Sprint:assignationUserStoriesVue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 80,  217 => 75,  202 => 69,  199 => 68,  190 => 66,  188 => 62,  183 => 61,  164 => 54,  148 => 45,  87 => 29,  82 => 27,  77 => 23,  65 => 7,  117 => 33,  110 => 35,  40 => 6,  137 => 31,  112 => 21,  99 => 27,  62 => 5,  113 => 16,  280 => 96,  275 => 93,  269 => 92,  260 => 90,  255 => 88,  252 => 87,  250 => 86,  245 => 84,  241 => 83,  237 => 82,  233 => 81,  229 => 80,  220 => 79,  218 => 78,  211 => 76,  208 => 75,  204 => 74,  195 => 70,  187 => 67,  185 => 66,  174 => 62,  160 => 52,  129 => 53,  124 => 36,  90 => 7,  53 => 15,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 91,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 77,  207 => 72,  198 => 72,  181 => 60,  176 => 58,  170 => 55,  168 => 60,  146 => 44,  142 => 56,  128 => 50,  125 => 26,  107 => 20,  38 => 4,  144 => 53,  141 => 42,  135 => 38,  126 => 36,  109 => 36,  103 => 19,  67 => 7,  61 => 51,  47 => 11,  105 => 29,  93 => 14,  76 => 16,  72 => 8,  68 => 20,  27 => 4,  91 => 20,  84 => 21,  94 => 26,  88 => 23,  79 => 21,  59 => 44,  21 => 2,  44 => 7,  31 => 5,  28 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 73,  196 => 80,  194 => 79,  191 => 69,  189 => 77,  186 => 76,  180 => 64,  172 => 67,  159 => 51,  154 => 59,  147 => 39,  132 => 37,  127 => 37,  121 => 35,  118 => 44,  114 => 44,  104 => 36,  100 => 32,  78 => 23,  75 => 10,  71 => 48,  58 => 14,  34 => 6,  26 => 6,  24 => 1,  25 => 14,  19 => 1,  70 => 18,  63 => 15,  46 => 8,  22 => 2,  163 => 59,  155 => 50,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 34,  115 => 39,  106 => 35,  101 => 32,  96 => 31,  83 => 25,  80 => 7,  74 => 22,  66 => 59,  55 => 13,  52 => 12,  50 => 38,  43 => 34,  41 => 6,  37 => 25,  35 => 22,  32 => 16,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 50,  143 => 54,  138 => 51,  136 => 50,  133 => 55,  130 => 29,  122 => 43,  119 => 42,  116 => 23,  111 => 31,  108 => 13,  102 => 28,  98 => 9,  95 => 34,  92 => 25,  89 => 26,  85 => 22,  81 => 40,  73 => 19,  64 => 16,  60 => 23,  57 => 11,  54 => 10,  51 => 39,  48 => 38,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 3,);
    }
}
