<?php

/* blacklogProductBundle:Blacklog:creationUserStories.html.twig */
class __TwigTemplate_dfac8247c6c8aaeb67c012224cf6bc46 extends Twig_Template
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

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        $this->displayParentBlock("menu", $context, $blocks);
        echo "Création user stories <br /><br />";
    }

    // line 6
    public function block_contentCenter($context, array $blocks = array())
    {
        echo " 

    <form method=\"post\" action=\"creation_user_stories\"> 
                 
        <label>Projet : </label><SELECT name='projet'>
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 12
            echo "        <OPTION>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 14
        echo "        </SELECT>
        <input type='submit' value='Charger' name='charger'/> <br /> 
    </form>
 
 ";
    }

    // line 20
    public function block_contentLeft($context, array $blocks = array())
    {
        // line 21
        echo "            
    ";
        // line 23
        echo "    <form method=\"post\" action=\"creation_user_stories\"> 
    ";
        // line 25
        echo "        <fieldset style=\"border-color: #000000;\"> <legend>Nouvelle fonctionnalité</legend>

            </SELECT></br></br>
            <label>Fonction : <input type='text'  name='fonction' id='fonction' size=\"20px\" /> <br /><br />
            <label>Rôle : </label><input type='text'  name='role' id='fonction' size=\"20px\" /> <br /><br />
            <label>Action : </label><br />
            <textarea rows=\"5\" cols=\"30\" style=\"border:solid 1px black; font-family:tahoma;\"></textarea> <br /><br />
            <label>But : </label><input type='text'  name='but' id='but' size=\"20px\" /> <br /><br />
            <label>Priorité : </label><SELECT name='priorite'>
            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "priorite"));
        foreach ($context['_seq'] as $context["_key"] => $context["pr"]) {
            // line 35
            echo "                <OPTION>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pr"), "nom"), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pr'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "            </SELECT> <br /><br />
            <label>Statut : <input type='text'  value=\"non assigné\" name='statut' id='statut' size=\"20px\" disabled=\"true\"/> <br /><br />

            <input type='submit' value='Enregistrer' name='enregistrer'/> <br />
                    
        </fieldset>
    </form>
        
    ";
    }

    // line 47
    public function block_contentRight($context, array $blocks = array())
    {
        echo "    
        ";
        // line 48
        $context["counter"] = 0;
        echo " 
        
    ";
        // line 50
        if (array_key_exists("userStories", $context)) {
            // line 51
            echo " 
        <table><tr>
        ";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStories"));
            foreach ($context['_seq'] as $context["_key"] => $context["userStorie"]) {
                // line 54
                echo "
        ";
                // line 56
                echo "         ";
                $context["counter"] = ($this->getContext($context, "counter") + 1);
                // line 57
                echo "
            ";
                // line 58
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "priorite"));
                foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
                    // line 59
                    echo "                    
                ";
                    // line 60
                    if (($this->getAttribute($this->getContext($context, "couleur"), "idpriorite") == $this->getAttribute($this->getAttribute($this->getContext($context, "userStorie"), "prioritepriorite"), "idpriorite"))) {
                        // line 61
                        echo "                   <td style=\" width:25%; background-color:";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "couleur"), "couleur"), "html", null, true);
                        echo "\">
                       <a href=\"";
                        // line 62
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStorie"), "idUserStorie"))), "html", null, true);
                        echo "\"><b>#";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "idUserStorie"), "html", null, true);
                        echo "</b></a><br> 
                       <b>Rôle : </b>";
                        // line 63
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "role"), "html", null, true);
                        echo "<br>
                       <b>But : </b> ";
                        // line 64
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "but"), "html", null, true);
                        echo "<br>
                       <b>Action : </b>";
                        // line 65
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "action"), "html", null, true);
                        echo "</td>
                    ";
                        // line 67
                        echo "                    ";
                        if (($this->getContext($context, "counter") == 4)) {
                            // line 68
                            echo "                    </tr>
                    <tr>
                      ";
                            // line 70
                            $context["counter"] = 0;
                            echo "   
                    ";
                        }
                        // line 72
                        echo "                ";
                    }
                    // line 73
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 74
                echo "   
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStorie'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 75
            echo "</tr>
        </table>
 
 
    ";
        }
        // line 80
        echo "
 
       
    ";
    }

    public function getTemplateName()
    {
        return "blacklogProductBundle:Blacklog:creationUserStories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 80,  202 => 75,  195 => 74,  177 => 68,  174 => 67,  166 => 64,  156 => 62,  129 => 53,  113 => 47,  77 => 25,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 70,  176 => 65,  170 => 65,  168 => 60,  146 => 59,  142 => 58,  128 => 50,  125 => 51,  107 => 36,  38 => 6,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 15,  61 => 13,  47 => 11,  105 => 24,  93 => 28,  76 => 16,  72 => 14,  68 => 20,  27 => 4,  91 => 20,  84 => 28,  94 => 39,  88 => 34,  79 => 17,  59 => 22,  21 => 2,  44 => 12,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 73,  186 => 72,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 48,  114 => 42,  104 => 36,  100 => 34,  78 => 21,  75 => 23,  71 => 21,  58 => 9,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 60,  145 => 46,  139 => 57,  131 => 51,  123 => 50,  120 => 40,  115 => 39,  106 => 36,  101 => 37,  96 => 21,  83 => 18,  80 => 24,  74 => 23,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 7,  41 => 7,  37 => 8,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 63,  157 => 60,  153 => 54,  151 => 61,  143 => 54,  138 => 51,  136 => 56,  133 => 54,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 31,  95 => 34,  92 => 35,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 14,  57 => 11,  54 => 10,  51 => 12,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
