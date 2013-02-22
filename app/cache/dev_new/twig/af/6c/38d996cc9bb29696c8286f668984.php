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
            <fieldset style=\"height: 350px;\"> <legend>Nouveau détail technique</legend>
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
        return array (  97 => 32,  65 => 21,  56 => 17,  40 => 6,  124 => 29,  86 => 14,  62 => 5,  113 => 25,  53 => 38,  264 => 90,  259 => 87,  253 => 86,  247 => 85,  244 => 84,  239 => 82,  236 => 81,  229 => 78,  221 => 76,  217 => 75,  202 => 72,  200 => 71,  197 => 70,  193 => 69,  190 => 68,  187 => 67,  174 => 61,  169 => 59,  117 => 32,  112 => 37,  90 => 42,  87 => 20,  69 => 16,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 80,  228 => 73,  223 => 71,  219 => 70,  213 => 74,  207 => 73,  198 => 67,  181 => 66,  176 => 62,  170 => 61,  168 => 60,  146 => 58,  142 => 45,  128 => 50,  125 => 44,  107 => 22,  38 => 39,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 46,  67 => 42,  61 => 40,  47 => 9,  105 => 35,  93 => 17,  76 => 16,  72 => 43,  68 => 6,  27 => 4,  91 => 20,  84 => 26,  94 => 39,  88 => 27,  79 => 14,  59 => 22,  21 => 2,  44 => 8,  31 => 3,  28 => 3,  225 => 77,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 64,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 30,  121 => 45,  118 => 26,  114 => 42,  104 => 24,  100 => 33,  78 => 25,  75 => 24,  71 => 19,  58 => 9,  34 => 6,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  70 => 22,  63 => 20,  46 => 42,  22 => 2,  163 => 57,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 38,  131 => 31,  123 => 35,  120 => 33,  115 => 39,  106 => 36,  101 => 32,  96 => 21,  83 => 18,  80 => 46,  74 => 16,  66 => 15,  55 => 39,  52 => 15,  50 => 37,  43 => 7,  41 => 8,  37 => 5,  35 => 38,  32 => 4,  29 => 3,  184 => 65,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 47,  143 => 54,  138 => 44,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 48,  102 => 21,  98 => 44,  95 => 31,  92 => 33,  89 => 19,  85 => 48,  81 => 35,  73 => 23,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 12,  45 => 8,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 3,);
    }
}
