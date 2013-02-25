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

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $this->displayParentBlock("menu", $context, $blocks);
        echo "Création user stories <br /><br />";
    }

    // line 5
    public function block_contentCenter($context, array $blocks = array())
    {
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
     
        <input type='submit' value='Charger' name='charger'/> <br /> 
    ";
        // line 29
        echo " 
 ";
    }

    // line 33
    public function block_contentLeft($context, array $blocks = array())
    {
        // line 34
        echo "        
 ";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") == "user")) {
            // line 36
            echo "
    ";
            // line 38
            echo "        <fieldset ";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") != "user")) {
                echo " disabled=\"disabled\" ";
            }
            echo "> 
            <legend>Nouvelle fonctionnalité</legend></br></br>
           
            <label>Fonction : <input type='text'  name='fonction' id='fonction' size=\"20px\" /> <br /><br />
            <label>Rôle : </label><input type='text'  name='role' id='role' size=\"20px\" /> <br /><br />
            <label>Action : </label><br />
            <textarea name=\"action\" rows=\"5\" cols=\"30\" style=\"border:solid 1px black; font-family:tahoma;\"></textarea> <br /><br />
            <label>But : </label><input type='text'  name='but' id='but' size=\"20px\" /> <br /><br />
            <label>Priorité : </label><SELECT name='priorite'>
            ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "priorite"));
            foreach ($context['_seq'] as $context["_key"] => $context["pr"]) {
                // line 48
                echo "                <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pr"), "nom"), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pr'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 50
            echo "            </SELECT> <br /><br />
            <label>Statut : <input type='text'  value=\"à faire\" name='statut' id='statut' size=\"20px\" disabled=\"true\"/> <br /><br />

            <input type='submit' value='Enregistrer' name='enregistrer'/> <br />
                    
        </fieldset>
    </form>
        ";
        }
        // line 58
        echo "    ";
    }

    // line 60
    public function block_contentRight($context, array $blocks = array())
    {
        echo "  
 
        ";
        // line 62
        $context["counter"] = 0;
        echo " 
        
        ";
        // line 64
        if (array_key_exists("userStories", $context)) {
            // line 65
            echo " 
            <table><tr>
            ";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStories"));
            foreach ($context['_seq'] as $context["_key"] => $context["userStorie"]) {
                // line 68
                echo "
                ";
                // line 70
                echo "                ";
                $context["counter"] = ($this->getContext($context, "counter") + 1);
                // line 71
                echo "
                    ";
                // line 72
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "priorite"));
                foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
                    // line 73
                    echo "                    
                        ";
                    // line 74
                    if (($this->getAttribute($this->getContext($context, "couleur"), "idpriorite") == $this->getAttribute($this->getAttribute($this->getContext($context, "userStorie"), "prioritepriorite"), "idpriorite"))) {
                        // line 75
                        echo "                            <td style=\" width:25%; background-color:";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "couleur"), "couleur"), "html", null, true);
                        echo "\">
                            ";
                        // line 76
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") != "user")) {
                            // line 77
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStorie"), "idUserStorie"))), "html", null, true);
                            echo "\">";
                        }
                        echo "<b>#";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "idUserStorie"), "html", null, true);
                        echo "</b></a><br> 
                            <b>Rôle : </b>";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "role"), "html", null, true);
                        echo "<br>
                            <b>But : </b> ";
                        // line 79
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "but"), "html", null, true);
                        echo "<br>
                            <b>Action : </b>";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "action"), "html", null, true);
                        echo "<br>
                            <b>Statut : </b> ";
                        // line 81
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "userStorie"), "statutstatut"), "intitule"), "html", null, true);
                        echo "<br>
                            <b>Points : </b> ";
                        // line 82
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "points"), "html", null, true);
                        echo "<br></td>
                            
                            ";
                        // line 84
                        if (($this->getContext($context, "counter") == 4)) {
                            // line 85
                            echo "                                </tr><tr>
                                ";
                            // line 86
                            $context["counter"] = 0;
                            echo "   
                            ";
                        }
                        // line 88
                        echo "                        ";
                    }
                    // line 89
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 90
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStorie'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 91
            echo "            </tr></table>
 
        ";
        }
        // line 94
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
        return array (  276 => 94,  271 => 91,  265 => 90,  259 => 89,  256 => 88,  251 => 86,  248 => 85,  246 => 84,  241 => 82,  237 => 81,  233 => 80,  229 => 79,  225 => 78,  216 => 77,  214 => 76,  209 => 75,  207 => 74,  204 => 73,  200 => 72,  197 => 71,  194 => 70,  191 => 68,  187 => 67,  183 => 65,  181 => 64,  176 => 62,  170 => 60,  166 => 58,  156 => 50,  147 => 48,  143 => 47,  128 => 38,  125 => 36,  123 => 35,  120 => 34,  117 => 33,  112 => 29,  107 => 25,  104 => 24,  95 => 22,  90 => 21,  87 => 20,  81 => 19,  75 => 18,  69 => 16,  63 => 14,  60 => 13,  55 => 12,  50 => 11,  48 => 10,  44 => 8,  38 => 5,  31 => 3,);
    }
}
