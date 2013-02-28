<?php

/* blacklogProductBundle:Blacklog:creationUserStories.html.twig */
class __TwigTemplate_dfac8247c6c8aaeb67c012224cf6bc46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 105
    public function block_title($context, array $blocks = array())
    {
        // line 106
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion
";
    }

    // line 110
    public function block_content($context, array $blocks = array())
    {
        // line 111
        echo "  <div class=\"container-fluid\">
     <div class=\"row-fluid\">
       <div class=\"span2 offset3\">
       ";
        // line 115
        echo "               <form method=\"post\" action=\"\" > ";
        // line 116
        echo "             
        <label>Projet : </label></div>
            <div class=\"span3\"> <SELECT name='projet'>
           ";
        // line 120
        echo "        ";
        if (array_key_exists("id", $context)) {
            // line 121
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 122
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "id"));
                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                    // line 123
                    echo "                    ";
                    if (($this->getAttribute($this->getContext($context, "p"), "idProjet") == $this->getAttribute($this->getContext($context, "t"), "idProjet"))) {
                        // line 124
                        echo "                        <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                        echo "
                             ";
                    } else {
                        // line 126
                        echo "                        <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 128
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 129
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 130
            echo "        ";
        } else {
            // line 131
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo "              
                <OPTION>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nom"), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 134
            echo "        ";
        }
        // line 135
        echo "                </SELECT> </div>
     
             <div class=\"span2\"> <input type='submit' value='Charger' name='charger'/> <br /> </div>
     
           </div>
     </div>
   </div>
    

        
 <div class=\"container-fluid\">
    <div class=\"row-fluid\"> 
  <div class=\"span4 offset1\">
      ";
        // line 148
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") == "user")) {
            // line 149
            echo "
        <form method=\"post\" action=\"creation_user_stories\" class=\"well\"> 
            <fieldset ";
            // line 151
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") != "user")) {
                echo " disabled=\"disabled\" ";
            }
            echo "> 
                <legend>Nouvelle fonctionnalité</legend></br></br>
               
             <label>Fonction : </label><input type='text'  name='fonction' id='fonction'/> 
            <label>Rôle : </label><input type='text'  name='role' id='role' size=\"20px\" /> 
            <label>Action : </label><br />
            <textarea name=\"action\" style=\"border:solid 1px black; font-family:tahoma;\"></textarea>
            <label>But : </label><input type='text'  name='but' id='but'/> <br /><br />
            <label>Priorité : </label><SELECT name='priorite'>
            ";
            // line 160
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "priorite"));
            foreach ($context['_seq'] as $context["_key"] => $context["pr"]) {
                // line 161
                echo "                <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pr"), "nom"), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pr'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 163
            echo "            </SELECT> 
            <label>Statut : <input type='text'  value=\"non assigné\" name='statut' id='statut' disabled=\"true\"/> <br /><br />

            <input type='submit' value='Enregistrer' name='enregistrer'/> <br />
                    
        </fieldset>
        </form>
        ";
        }
        // line 171
        echo "  </div>
    
  <div class=\"span7\"> 
 
        ";
        // line 175
        $context["counter"] = 0;
        echo " 
        
        ";
        // line 177
        if (array_key_exists("userStories", $context)) {
            // line 178
            echo " 
            <table><tr>
            ";
            // line 180
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStories"));
            foreach ($context['_seq'] as $context["_key"] => $context["userStorie"]) {
                // line 181
                echo "
                ";
                // line 183
                echo "               ";
                $context["counter"] = ($this->getContext($context, "counter") + 1);
                // line 184
                echo "
                    ";
                // line 185
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "priorite"));
                foreach ($context['_seq'] as $context["_key"] => $context["couleur"]) {
                    // line 186
                    echo "                    
                        ";
                    // line 187
                    if (($this->getAttribute($this->getContext($context, "couleur"), "idpriorite") == $this->getAttribute($this->getAttribute($this->getContext($context, "userStorie"), "prioritepriorite"), "idpriorite"))) {
                        // line 188
                        echo "                            <td style=\" width:25%; background-color:";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "couleur"), "couleur"), "html", null, true);
                        echo "\">
                            ";
                        // line 189
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") != "user")) {
                            // line 190
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStorie"), "idUserStorie"))), "html", null, true);
                            echo "\">";
                        }
                        echo "<b>#";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "idUserStorie"), "html", null, true);
                        echo "</b></a><br> 
                            <b>Rôle : </b>";
                        // line 191
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "role"), "html", null, true);
                        echo "<br>
                            <b>But : </b> ";
                        // line 192
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "but"), "html", null, true);
                        echo "<br>
                            <b>Action : </b>";
                        // line 193
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "action"), "html", null, true);
                        echo "<br>
                            <b>Statut : </b> ";
                        // line 194
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "userStorie"), "statutBacklogstatutBacklog"), "intitule"), "html", null, true);
                        echo "<br>
                            <b>Points : </b> ";
                        // line 195
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStorie"), "points"), "html", null, true);
                        echo "<br></td>
                            
                            ";
                        // line 197
                        if (($this->getContext($context, "counter") == 4)) {
                            // line 198
                            echo "                                </tr><tr>
                                ";
                            // line 199
                            $context["counter"] = 0;
                            echo "   
                            ";
                        }
                        // line 201
                        echo "                        ";
                    }
                    // line 202
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couleur'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 203
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStorie'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 204
            echo "            </tr></table>
 
        ";
        }
        // line 207
        echo "     
  </div></div></div>


    
    
    ";
        // line 213
        if (array_key_exists("message", $context)) {
            // line 214
            echo "        <a style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</a>
    ";
        }
        // line 216
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
        return array (  295 => 216,  289 => 214,  287 => 213,  279 => 207,  274 => 204,  268 => 203,  262 => 202,  259 => 201,  254 => 199,  251 => 198,  249 => 197,  244 => 195,  240 => 194,  236 => 193,  232 => 192,  228 => 191,  219 => 190,  217 => 189,  212 => 188,  210 => 187,  207 => 186,  203 => 185,  200 => 184,  197 => 183,  194 => 181,  190 => 180,  186 => 178,  184 => 177,  179 => 175,  173 => 171,  163 => 163,  154 => 161,  150 => 160,  136 => 151,  132 => 149,  130 => 148,  115 => 135,  112 => 134,  104 => 132,  97 => 131,  94 => 130,  88 => 129,  82 => 128,  76 => 126,  70 => 124,  67 => 123,  62 => 122,  57 => 121,  54 => 120,  49 => 116,  47 => 115,  42 => 111,  39 => 110,  32 => 106,  29 => 105,);
    }
}
