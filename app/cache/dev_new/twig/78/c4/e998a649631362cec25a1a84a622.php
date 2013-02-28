<?php

/* SprintBundle:Sprint:creationSprintVue.html.twig */
class __TwigTemplate_78c4e998a649631362cec25a1a84a622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modele.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
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
        echo "Création sprint <br /><br />";
    }

    // line 5
    public function block_contentLeft($context, array $blocks = array())
    {
        // line 6
        echo "     ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") == "admin")) {
            // line 7
            echo "    <script src = \"http://code.jquery.com/jquery-1.9.1.js\" > </script>
    <script src = \"http://code.jquery.com/ui/1.10.1/jquery-ui.js\" > </script>
    <link rel = \"stylesheet\" href = \"http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css\" />
    <link rel = \"stylesheet\" href = \"/resources/demos/style.css\"/>

    <form method=\"post\" action=\"\">
   

        <fieldset ";
            // line 15
            echo "> 
            <legend>Informations sprint</legend></br></br>
           
            <label>Nom : </label><input type='text'  name='nom' id='nom'/> <br /><br />
            <label>Nb difficulté max : </label><input type='text'  name='nbDifficulte' id='nbDifficulte'/> <br /><br />
            <label>Début de début : </label><script>
            \$( function () {
                \$(\"#dateD\").datepicker();
            });
         </script>
         <input type = \"text\" name=\"date\" id = \"dateD\" /><br /><br />
         <label>Début de fin : </label><script>
            \$( function () {
                \$(\"#dateF\").datepicker();
            });
         </script>
         <input type = \"text\" name=\"date\" id = \"dateF\" />
                    
        </fieldset><br /><br />
     <input type='submit' value='Créer' name='creer'/> <br />
     ";
        }
        // line 36
        echo "    ";
    }

    // line 38
    public function block_contentRight($context, array $blocks = array())
    {
        echo "  
  ";
        // line 39
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") == "admin")) {
            // line 40
            echo "       <fieldset> 
            <legend>Informations nouvelle équipe</legend></br></br>
           
                <label>Nom : <input type='text' name='nomEquipe' id='nomEquipe'/> <br /><br />
                <table>
                    <tr>
                        <td>Développeur</td><td>Ajouter à l'équipe</td>
                    </tr>
                    ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "developpeurs"));
            foreach ($context['_seq'] as $context["_key"] => $context["developpeur"]) {
                // line 49
                echo "            
                        <tr>
                            <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "developpeur"), "nom"), "html", null, true);
                echo "</td>
                            <td><input type='checkbox' name='ajouter";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "developpeur"), "iddevelopper"), "html", null, true);
                echo "'/></td>
                        </tr>   
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['developpeur'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 55
            echo "                </table>
                    
        </fieldset></br></br>
         
         <fieldset> 
            <legend>Sélection équipe existante</legend></br></br>
            
            <SELECT name='equipe'>
                <OPTION name=\"\" value=\"\">
                    ";
            // line 64
            if (array_key_exists("equipes", $context)) {
                // line 65
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "equipes"));
                foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
                    // line 66
                    echo "                            ";
                    if (array_key_exists("currentEquipe", $context)) {
                        // line 67
                        echo "                                ";
                        if (($this->getAttribute($this->getContext($context, "equipe"), "nom") == $this->getAttribute($this->getContext($context, "currentEquipe"), "nom"))) {
                            // line 68
                            echo "                                    <OPTION selected=\"selected\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "equipe"), "nom"), "html", null, true);
                            echo "
                                ";
                        } else {
                            // line 70
                            echo "                                    <OPTION>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "equipe"), "nom"), "html", null, true);
                            echo "
                                ";
                        }
                        // line 72
                        echo "                            ";
                    } else {
                        // line 73
                        echo "                                <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "equipe"), "nom"), "html", null, true);
                        echo "        
                            ";
                    }
                    // line 75
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipe'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 76
                echo "                    ";
            }
            // line 77
            echo "            </SELECT> 
        </fieldset> </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SprintBundle:Sprint:creationSprintVue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 76,  97 => 48,  224 => 80,  217 => 75,  202 => 69,  199 => 68,  190 => 66,  188 => 62,  183 => 61,  164 => 54,  148 => 70,  87 => 40,  82 => 27,  77 => 23,  65 => 7,  117 => 33,  110 => 35,  40 => 6,  137 => 31,  112 => 21,  99 => 27,  62 => 5,  113 => 16,  280 => 96,  275 => 93,  269 => 92,  260 => 90,  255 => 88,  252 => 87,  250 => 86,  245 => 84,  241 => 83,  237 => 82,  233 => 81,  229 => 80,  220 => 79,  218 => 78,  211 => 76,  208 => 75,  204 => 74,  195 => 70,  187 => 67,  185 => 66,  174 => 62,  160 => 52,  129 => 64,  124 => 36,  90 => 7,  53 => 15,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 91,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 77,  207 => 72,  198 => 72,  181 => 60,  176 => 58,  170 => 55,  168 => 60,  146 => 44,  142 => 68,  128 => 50,  125 => 26,  107 => 20,  38 => 4,  144 => 53,  141 => 42,  135 => 38,  126 => 36,  109 => 52,  103 => 19,  67 => 7,  61 => 51,  47 => 11,  105 => 51,  93 => 14,  76 => 36,  72 => 8,  68 => 20,  27 => 4,  91 => 20,  84 => 21,  94 => 26,  88 => 23,  79 => 21,  59 => 44,  21 => 2,  44 => 7,  31 => 5,  28 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 73,  196 => 80,  194 => 79,  191 => 69,  189 => 77,  186 => 76,  180 => 64,  172 => 77,  159 => 51,  154 => 72,  147 => 39,  132 => 37,  127 => 37,  121 => 35,  118 => 55,  114 => 44,  104 => 36,  100 => 32,  78 => 23,  75 => 10,  71 => 48,  58 => 14,  34 => 6,  26 => 6,  24 => 1,  25 => 14,  19 => 1,  70 => 18,  63 => 15,  46 => 8,  22 => 2,  163 => 75,  155 => 50,  152 => 49,  149 => 48,  145 => 46,  139 => 67,  131 => 65,  123 => 41,  120 => 34,  115 => 39,  106 => 35,  101 => 49,  96 => 31,  83 => 25,  80 => 38,  74 => 22,  66 => 59,  55 => 13,  52 => 12,  50 => 38,  43 => 7,  41 => 6,  37 => 5,  35 => 22,  32 => 16,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 73,  153 => 54,  151 => 50,  143 => 54,  138 => 51,  136 => 66,  133 => 55,  130 => 29,  122 => 43,  119 => 42,  116 => 23,  111 => 31,  108 => 13,  102 => 28,  98 => 9,  95 => 34,  92 => 25,  89 => 26,  85 => 39,  81 => 40,  73 => 19,  64 => 16,  60 => 23,  57 => 11,  54 => 10,  51 => 39,  48 => 38,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 3,);
    }
}
