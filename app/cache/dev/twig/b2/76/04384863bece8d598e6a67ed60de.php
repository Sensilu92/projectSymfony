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
 RAJOUETR LE BOUTON VALIDER
 
    <form method=\"post\" action=\"\"> ";
        // line 10
        echo "                 
        <label>Projet : </label><SELECT name='projet'>
        ";
        // line 12
        if (array_key_exists("id", $context)) {
            // line 13
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 14
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "id"));
                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                    // line 15
                    echo "                    ";
                    if (($this->getAttribute($this->getContext($context, "p"), "idProjet") == $this->getAttribute($this->getContext($context, "t"), "idProjet"))) {
                        // line 16
                        echo "                        <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                        echo "
                             ";
                    } else {
                        // line 18
                        echo "                        <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 20
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 21
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "        ";
        } else {
            // line 23
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 24
                echo "                <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 26
            echo "        ";
        }
        // line 27
        echo "        </SELECT> 
        
        <label>Sprint : </label><SELECT name='sprint'>
        ";
        // line 30
        if (array_key_exists("sprint", $context)) {
            // line 31
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sprint"));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 32
                echo "                <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "idsprint"), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 34
            echo "         ";
        }
        // line 35
        echo "        </SELECT> 
        
        <input type='submit' value='Charger' name='charger'/> <br /> <br /> 
    ";
        // line 39
        echo " 
    ";
        // line 40
        $context["counter"] = 0;
        echo " 
        
    ";
        // line 42
        if (array_key_exists("userStories", $context)) {
            // line 43
            echo " 
        <table style=\"border-collapse: collapse; border: solid\"><tr>
           
            <td> A faire </td><td> En cours </td><td> A valider </td><td> Valider </td></tr>
        
            ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStories"));
            foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
                // line 49
                echo "            
                <tr> ";
                // line 50
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "à  faire"), "html", null, true);
                echo "
                    <td>
                        ";
                // line 52
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "à faire")) {
                    // line 53
                    echo "                            
                           ";
                    // line 55
                    echo "                            <a name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b name=\"fonctionnalite\">Fonctionnalité : </b>";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> Afficher les userstories tech<br>
                        ";
                }
                // line 60
                echo "                      </td>
                      <td>
                        ";
                // line 62
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "en cours")) {
                    // line 63
                    echo "                           
                            <a href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b>Fonctionnalité : </b>";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> <br>
                            <input type='checkbox' name='valider";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "'/>
                        ";
                }
                // line 70
                echo "                       </td>
                        <td>
                        ";
                // line 72
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "à valider")) {
                    // line 73
                    echo "                            
                            <a href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b>Fonctionnalité : </b>";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> <br>
                        ";
                }
                // line 79
                echo "                       </td>
                        <td>
                        ";
                // line 81
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "terminé")) {
                    // line 82
                    echo "                            
                            <a href=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b>Fonctionnalité : </b>";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> <br>
                            <input type='checkbox' name='afaire";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "'/>
                        ";
                }
                // line 89
                echo "                       </td>
 
                    ";
                // line 92
                echo "                </tr>

                ";
                // line 100
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
        // line 105
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
        return array (  292 => 105,  280 => 100,  276 => 92,  272 => 89,  267 => 87,  262 => 85,  258 => 84,  252 => 83,  249 => 82,  247 => 81,  243 => 79,  237 => 76,  233 => 75,  227 => 74,  224 => 73,  222 => 72,  218 => 70,  213 => 68,  208 => 66,  204 => 65,  198 => 64,  195 => 63,  193 => 62,  189 => 60,  183 => 57,  179 => 56,  170 => 55,  167 => 53,  165 => 52,  160 => 50,  157 => 49,  153 => 48,  146 => 43,  144 => 42,  139 => 40,  136 => 39,  131 => 35,  128 => 34,  119 => 32,  114 => 31,  112 => 30,  107 => 27,  104 => 26,  95 => 24,  90 => 23,  87 => 22,  81 => 21,  75 => 20,  69 => 18,  63 => 16,  60 => 15,  55 => 14,  50 => 13,  48 => 12,  44 => 10,  39 => 6,  36 => 5,  29 => 3,);
    }
}
