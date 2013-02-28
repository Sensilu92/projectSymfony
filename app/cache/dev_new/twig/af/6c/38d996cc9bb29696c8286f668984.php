<?php

/* blacklogProductBundle:Blacklog:creationUserStoriesTechnique.html.twig */
class __TwigTemplate_af6c38d996cc9bb29696c8286f668984 extends Twig_Template
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
        echo "Création user stories Tech";
    }

    // line 5
    public function block_contentLeft($context, array $blocks = array())
    {
        // line 6
        echo "            
        <form method=\"post\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "idUserStory"), "html", null, true);
        echo "\">
            <fieldset  ";
        // line 8
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") != "admin")) {
            echo " disabled=\"disabled\" ";
        }
        echo " style=\"height: 350px;\"> <legend>Nouveau détail technique</legend>
                <br><label>Description :</label><br>
                <textarea rows=\"10\" cols=\"50\" name=\"description\"></textarea> <br /><br />
                <input type='submit' value='Ajouter' name='ajoutDetailTechnique'/>
             </fieldset>
        </form>
        
    ";
    }

    // line 17
    public function block_contentRight($context, array $blocks = array())
    {
        echo " 
 
        <table><tr>
        ";
        // line 20
        $context["counter"] = 0;
        // line 21
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStoriesTechnique"));
        foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
            // line 22
            echo "
            ";
            // line 23
            $context["counter"] = ($this->getContext($context, "counter") + 1);
            // line 24
            echo "
            <td>#";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "userStorieUserStorie"), "idUserStorie"), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStoriesTechnique"), "html", null, true);
            echo "<br>
                    Fonctionnalité : ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "userStorieUserStorie"), "fonctionnalite"), "html", null, true);
            echo " <br>
                    Description : ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "descriptionTechnique"), "html", null, true);
            echo " <br>
               
           </td >

          ";
            // line 31
            if (($this->getContext($context, "counter") == 4)) {
                // line 32
                echo "            </tr><tr>
            ";
                // line 33
                $context["counter"] = 0;
                echo "   
          ";
            }
            // line 35
            echo "   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStory'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "            </tr></table>
    
    ";
    }

    public function getTemplateName()
    {
        return "blacklogProductBundle:Blacklog:creationUserStoriesTechnique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  110 => 35,  40 => 6,  137 => 31,  112 => 21,  99 => 18,  62 => 5,  113 => 16,  280 => 96,  275 => 93,  269 => 92,  260 => 90,  255 => 88,  252 => 87,  250 => 86,  245 => 84,  241 => 83,  237 => 82,  233 => 81,  229 => 80,  220 => 79,  218 => 78,  211 => 76,  208 => 75,  204 => 74,  195 => 70,  187 => 67,  185 => 66,  174 => 62,  160 => 52,  129 => 38,  124 => 36,  90 => 7,  53 => 39,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 91,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 77,  207 => 68,  198 => 72,  181 => 66,  176 => 65,  170 => 60,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 26,  107 => 20,  38 => 4,  144 => 53,  141 => 33,  135 => 47,  126 => 45,  109 => 41,  103 => 19,  67 => 7,  61 => 17,  47 => 8,  105 => 33,  93 => 27,  76 => 16,  72 => 8,  68 => 20,  27 => 4,  91 => 20,  84 => 21,  94 => 17,  88 => 6,  79 => 17,  59 => 22,  21 => 2,  44 => 8,  31 => 3,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 73,  196 => 80,  194 => 79,  191 => 69,  189 => 77,  186 => 76,  180 => 64,  172 => 67,  159 => 61,  154 => 59,  147 => 39,  132 => 40,  127 => 37,  121 => 35,  118 => 44,  114 => 42,  104 => 36,  100 => 31,  78 => 23,  75 => 22,  71 => 19,  58 => 14,  34 => 6,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  70 => 21,  63 => 15,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 25,  115 => 39,  106 => 36,  101 => 32,  96 => 21,  83 => 25,  80 => 24,  74 => 16,  66 => 16,  55 => 40,  52 => 15,  50 => 38,  43 => 7,  41 => 8,  37 => 5,  35 => 3,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 50,  143 => 54,  138 => 51,  136 => 50,  133 => 30,  130 => 29,  122 => 43,  119 => 42,  116 => 23,  111 => 27,  108 => 13,  102 => 32,  98 => 9,  95 => 34,  92 => 16,  89 => 26,  85 => 13,  81 => 40,  73 => 12,  64 => 17,  60 => 23,  57 => 11,  54 => 10,  51 => 14,  48 => 12,  45 => 8,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 3,);
    }
}
