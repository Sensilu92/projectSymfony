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

    // line 32
    public function block_contentLeft($context, array $blocks = array())
    {
        // line 33
        echo " 
    ";
        // line 35
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
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "priorite"));
        foreach ($context['_seq'] as $context["_key"] => $context["pr"]) {
            // line 45
            echo "                <OPTION>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pr"), "nom"), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pr'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "            </SELECT> <br /><br />
            <label>Statut : <input type='text'  value=\"à faire\" name='statut' id='statut' size=\"20px\" disabled=\"true\"/> <br /><br />

            <input type='submit' value='Enregistrer' name='enregistrer'/> <br />
                    
        </fieldset>
    </form>
        
    ";
    }

    // line 57
    public function block_contentRight($context, array $blocks = array())
    {
        echo "  
 
        ";
        // line 59
        $context["counter"] = 0;
        echo " 
        
        ";
        // line 61
        if (array_key_exists("userStories", $context)) {
            // line 62
            echo " 
            <table><tr>
            ";
            // line 64
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStories"));
            foreach ($context['_seq'] as $context["_key"] => $context["userStorie"]) {
                // line 65
                echo "
                ";
                // line 67
                echo "                ";
                $context["counter"] = ($this->getContext($context, "counter") + 1);
                // line 68
                echo "
                    ";
                // line 69
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "priorite"));
                foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
                    // line 70
                    echo "                    
                        ";
                    // line 71
                    if (($this->getAttribute($this->getContext($context, "couleur"), "idpriorite") == $this->getAttribute($this->getAttribute($this->getContext($context, "userStorie"), "prioritepriorite"), "idpriorite"))) {
                        // line 72
                        echo "                            <td style=\" width:25%; background-color:";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "couleur"), "couleur"), "html", null, true);
                        echo "\">
                            <a href=\"";
                        // line 73
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStorie"), "idUserStorie"))), "html", null, true);
                        echo "\"><b>#";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "idUserStorie"), "html", null, true);
                        echo "</b></a><br> 
                            <b>Rôle : </b>";
                        // line 74
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "role"), "html", null, true);
                        echo "<br>
                            <b>But : </b> ";
                        // line 75
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "but"), "html", null, true);
                        echo "<br>
                            <b>Action : </b>";
                        // line 76
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "action"), "html", null, true);
                        echo "<br>
                            <b>Statut : </b> ";
                        // line 77
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "userStorie"), "statutstatut"), "intitule"), "html", null, true);
                        echo "<br>
                            <b>Points : </b> ";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "points"), "html", null, true);
                        echo "<br></td>
                            
                            ";
                        // line 80
                        if (($this->getContext($context, "counter") == 4)) {
                            // line 81
                            echo "                                </tr><tr>
                                ";
                            // line 82
                            $context["counter"] = 0;
                            echo "   
                            ";
                        }
                        // line 84
                        echo "                        ";
                    }
                    // line 85
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 86
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStorie'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 87
            echo "            </tr></table>
 
        ";
        }
        // line 90
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
        return array (  264 => 90,  259 => 87,  253 => 86,  247 => 85,  244 => 84,  239 => 82,  236 => 81,  234 => 80,  229 => 78,  225 => 77,  221 => 76,  217 => 75,  213 => 74,  207 => 73,  202 => 72,  200 => 71,  197 => 70,  193 => 69,  190 => 68,  187 => 67,  184 => 65,  180 => 64,  176 => 62,  174 => 61,  169 => 59,  163 => 57,  151 => 47,  142 => 45,  138 => 44,  123 => 35,  120 => 33,  117 => 32,  112 => 29,  107 => 25,  104 => 24,  95 => 22,  90 => 21,  87 => 20,  81 => 19,  75 => 18,  69 => 16,  63 => 14,  60 => 13,  55 => 12,  50 => 11,  48 => 10,  44 => 8,  38 => 5,  31 => 3,);
    }
}
