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
    ";
        // line 37
        echo " 
    ";
        // line 38
        $context["counter"] = 0;
        echo " 
        
    ";
        // line 40
        if (array_key_exists("userStories", $context)) {
            // line 41
            echo " 
        <table style=\"border-collapse: collapse; border: solid; text-align: left\"><tr>
           
            <td> A faire </td><td> En cours </td><td> A valider </td><td> Valider </td></tr>
        
            ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStories"));
            foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
                // line 47
                echo "            
                <tr>
                    <td>
                        ";
                // line 50
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "à faire")) {
                    // line 51
                    echo "                            
                           ";
                    // line 53
                    echo "                            <a name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b name=\"fonctionnalite\">Fonctionnalité : </b>";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> Afficher les userstories tech<br>
                        ";
                }
                // line 58
                echo "                      </td>
                      <td>
                        ";
                // line 60
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "en cours")) {
                    // line 61
                    echo "                           
                            <a href=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b>Fonctionnalité : </b>";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> <br>
                            Changer le statut en \" Valider \"<input type='checkbox' name='valider";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "'/>
                        ";
                }
                // line 68
                echo "                       </td>
                        <td>
                        ";
                // line 70
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "à valider")) {
                    // line 71
                    echo "                            
                            <a href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b>Fonctionnalité : </b>";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> <br>
                        ";
                }
                // line 77
                echo "                       </td>
                        <td>
                        ";
                // line 79
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutstatut"), "intitule") == "terminé")) {
                    // line 80
                    echo "                            
                            <a href=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b>Fonctionnalité : </b>";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> <br>
                            Changer le statut en \" En cours \"<input type='checkbox' name='afaire";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "'/>
                        ";
                }
                // line 87
                echo "                       </td>
 
                    ";
                // line 90
                echo "                </tr>

                ";
                // line 98
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
        // line 103
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
        return array (  287 => 103,  275 => 98,  271 => 90,  267 => 87,  262 => 85,  257 => 83,  253 => 82,  247 => 81,  244 => 80,  242 => 79,  238 => 77,  232 => 74,  228 => 73,  222 => 72,  219 => 71,  217 => 70,  213 => 68,  208 => 66,  203 => 64,  199 => 63,  193 => 62,  190 => 61,  188 => 60,  184 => 58,  178 => 55,  174 => 54,  165 => 53,  162 => 51,  160 => 50,  155 => 47,  151 => 46,  144 => 41,  142 => 40,  137 => 38,  134 => 37,  129 => 33,  126 => 32,  117 => 30,  112 => 29,  110 => 28,  105 => 25,  102 => 24,  93 => 22,  88 => 21,  85 => 20,  79 => 19,  73 => 18,  67 => 16,  61 => 14,  58 => 13,  53 => 12,  48 => 11,  46 => 10,  42 => 8,  39 => 6,  36 => 5,  29 => 3,);
    }
}
