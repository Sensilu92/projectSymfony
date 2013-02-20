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
        return array (  209 => 80,  202 => 75,  195 => 74,  189 => 73,  186 => 72,  181 => 70,  177 => 68,  174 => 67,  170 => 65,  166 => 64,  162 => 63,  156 => 62,  151 => 61,  149 => 60,  146 => 59,  142 => 58,  139 => 57,  136 => 56,  133 => 54,  129 => 53,  125 => 51,  123 => 50,  118 => 48,  113 => 47,  101 => 37,  92 => 35,  88 => 34,  77 => 25,  74 => 23,  71 => 21,  68 => 20,  60 => 14,  51 => 12,  47 => 11,  38 => 6,  31 => 4,);
    }
}
