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

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $this->displayParentBlock("menu", $context, $blocks);
        echo "Tableau de bord<br /><br />";
    }

    // line 5
    public function block_contentCenter($context, array $blocks = array())
    {
        echo " 
 METTRE LES SOUS TACHES
    <form method=\"post\" action=\"\"> ";
        // line 8
        echo "                 
        <label>Projet : </label><SELECT name='projet'>
        ";
        // line 10
        if (array_key_exists("id", $context)) {
            // line 11
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 12
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "id"));
                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                    // line 13
                    echo "                    ";
                    if (($this->getAttribute($this->getContext($context, "p"), "idProjet") == $this->getAttribute($this->getContext($context, "t"), "idProjet"))) {
                        // line 14
                        echo "                        <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                        echo "
                             ";
                    } else {
                        // line 16
                        echo "                        <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 18
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 19
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 20
            echo "        ";
        } else {
            // line 21
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 22
                echo "                <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 24
            echo "        ";
        }
        // line 25
        echo "        </SELECT> 
        
        <label>Sprint : </label><SELECT name='sprint'>
        ";
        // line 28
        if (array_key_exists("sprint", $context)) {
            // line 29
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sprint"));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 30
                echo "                <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "idsprint"), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 32
            echo "         ";
        }
        // line 33
        echo "        </SELECT> 
        
        <input type='submit' value='Charger' name='charger'/> <br /> <br /> 
    </form>
        
       
 
        ";
        // line 40
        $context["counter"] = 0;
        echo " 
        
        ";
        // line 42
        if (array_key_exists("sprintTab", $context)) {
            // line 43
            echo " 
        <table style=\"border: solid;
    border-width: 1px;\"><tr>
            ";
            // line 47
            echo "                             <td> Tâches </td><td> A faire </td><td> En cours </td><td> A valider </td><td> Valider </td></tr>
                ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "sprintTab"), "getUserStorieUserStorie", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
                // line 49
                echo "
            <tr>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                echo "</td>
                ";
                // line 57
                echo "                
                <td>
                    <input ";
                // line 59
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "à faire")) {
                    echo " checked=\"checked\" ";
                }
                echo " type=\"checkbox\" name=\"question[";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "]\" disabled=\"disabled\"/>  
                </td>
                <td>
                    <input ";
                // line 62
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "en cours")) {
                    echo " checked=\"checked\" ";
                }
                echo " type=\"checkbox\" name=\"question[";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "]\" disabled=\"disabled\"/>  
                </td>
                <td>
                    <input ";
                // line 65
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "à valider")) {
                    echo " checked=\"checked\" ";
                }
                echo " type=\"checkbox\" name=\"question[";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "]\" disabled=\"disabled\"/>  
                </td>
                <td>
                    <input ";
                // line 68
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "terminé")) {
                    echo " checked=\"checked\" ";
                }
                echo " type=\"checkbox\" name=\"question[";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                echo "]\" disabled=\"disabled\"/>  
                </td>
            </tr>


                ";
                // line 74
                echo "                ";
                $context["counter"] = ($this->getContext($context, "counter") + 1);
                // line 75
                echo "
                            
                            ";
                // line 77
                if (($this->getContext($context, "counter") == 4)) {
                    // line 78
                    echo "                                </tr><tr>
                                ";
                    // line 79
                    $context["counter"] = 0;
                    echo "   
                            ";
                }
                // line 81
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStory'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 82
            echo "                                         ";
            // line 83
            echo "            </tr></table>
 
        ";
        }
        // line 86
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
        return array (  241 => 86,  236 => 83,  234 => 82,  228 => 81,  223 => 79,  220 => 78,  218 => 77,  214 => 75,  211 => 74,  199 => 68,  189 => 65,  179 => 62,  169 => 59,  165 => 57,  161 => 51,  157 => 49,  153 => 48,  150 => 47,  145 => 43,  143 => 42,  138 => 40,  129 => 33,  126 => 32,  117 => 30,  112 => 29,  110 => 28,  105 => 25,  102 => 24,  93 => 22,  88 => 21,  85 => 20,  79 => 19,  73 => 18,  67 => 16,  61 => 14,  58 => 13,  53 => 12,  48 => 11,  46 => 10,  42 => 8,  36 => 5,  29 => 3,);
    }
}
