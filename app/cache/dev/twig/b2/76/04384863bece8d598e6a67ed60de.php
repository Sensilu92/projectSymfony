<?php

/* SprintBundle:Sprint:tableauDeBordSprintVue.html.twig */
class __TwigTemplate_b27604384863bece8d598e6a67ed60de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'emplacement' => array($this, 'block_emplacement'),
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

    // line 119
    public function block_title($context, array $blocks = array())
    {
        // line 120
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tableau de bord
";
    }

    // line 123
    public function block_emplacement($context, array $blocks = array())
    {
        // line 124
        echo "    Tableau de bord
";
    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        // line 128
        echo "    
        <div class=\"row-fluid\">
            <form method=\"post\" action=\"\"> ";
        // line 131
        echo "        
        <label>Sprint : </label><SELECT name='sprint'>
            ";
        // line 133
        if (array_key_exists("sprint", $context)) {
            // line 134
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sprint"));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 135
                echo "                    ";
                if (array_key_exists("currentSprint", $context)) {
                    // line 136
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "s"), "nom") == $this->getContext($context, "currentSprint"))) {
                        // line 137
                        echo "                            <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nom"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 139
                        echo "                            <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nom"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 141
                    echo "                     ";
                } else {
                    // line 142
                    echo "                        <OPTION>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nom"), "html", null, true);
                    echo "
                     ";
                }
                // line 144
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 145
            echo "            ";
        } else {
            // line 146
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sprint"));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 147
                echo "                    <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "nom"), "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 149
            echo "            ";
        }
        // line 150
        echo "        </SELECT> 
        
        <label>Projet : </label><input type='text'  name='projet' id='projet' value=\"";
        // line 152
        if (array_key_exists("projet", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "projet"), 0, array(), "array"), "nom"), "html", null, true);
        }
        echo "\" disabled=\"disabled\"/>
        <input type='submit' value='Charger' name='charger'/> <br /> <br /> 
 
        
        </div>
            
    <div class=\"row-fluid \">
        <div class=\" span9 offset1\">
         ";
        // line 160
        $context["counter"] = 0;
        echo " 
        
    ";
        // line 162
        if (array_key_exists("userStories", $context)) {
            // line 163
            echo " 
        <table style=\"border: solid; text-align: left;\"><tr>
           
            <td> Développeur </td><td> A faire </td><td> En cours </td><td> A valider </td><td> Valider </td></tr>
        
            ";
            // line 168
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStories"));
            foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
                // line 169
                echo "            
                <tr>
                    <td>
                        <SELECT name='dev'>
                            <OPTION name='' value=\"\">
                            ";
                // line 174
                if (array_key_exists("listDev", $context)) {
                    // line 175
                    echo "                                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listDev"));
                    foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                        // line 176
                        echo "                                     ";
                        // line 180
                        echo "                                    <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dev"), "nom"), "html", null, true);
                        echo "
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dev'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 182
                    echo "                            ";
                }
                // line 183
                echo "                        </SELECT> 
                    </td>
                    <td>
                        ";
                // line 186
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutSprintstatutSprint"), "intitule") == "à faire")) {
                    // line 187
                    echo "                            
                           ";
                    // line 189
                    echo "                            <a name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b name=\"fonctionnalite\">Fonctionnalité : </b>";
                    // line 190
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 191
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> Afficher les userstories tech<br>
                        ";
                }
                // line 194
                echo "                      </td>
                      <td>
                        ";
                // line 196
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutSprintstatutSprint"), "intitule") == "en cours")) {
                    // line 197
                    echo "                           
                            <a href=\"";
                    // line 198
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b>Fonctionnalité : </b>";
                    // line 199
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 200
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> <br>
                            Changer le statut en \" Valider \"<input type='checkbox' name='valider";
                    // line 202
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "'/>
                        ";
                }
                // line 204
                echo "                       </td>
                        <td>
                        ";
                // line 206
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutSprintstatutSprint"), "intitule") == "à valider")) {
                    // line 207
                    echo "                            
                            <a href=\"";
                    // line 208
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b>Fonctionnalité : </b>";
                    // line 209
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 210
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> <br>
                        ";
                }
                // line 213
                echo "                       </td>
                        <td>
                        ";
                // line 215
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "statutSprintstatutSprint"), "intitule") == "terminé")) {
                    // line 216
                    echo "                            
                            <a href=\"";
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories_technique", array("idUserStorie" => $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"))), "html", null, true);
                    echo "\"><b>#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "</b></a><br> 
                            <b>Fonctionnalité : </b>";
                    // line 218
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                    echo "<br>
                            <b>Action : </b>";
                    // line 219
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "action"), "html", null, true);
                    echo "<br>
                            <b>DétailTechnique : </b> <br>
                            Changer le statut en \" En cours \"<input type='checkbox' name='afaire";
                    // line 221
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStorie"), "html", null, true);
                    echo "'/>
                        ";
                }
                // line 223
                echo "                       </td>
 
                    ";
                // line 226
                echo "                </tr>

                ";
                // line 234
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStory'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo " 
            </tr></table><br /> 
          ";
        }
        // line 236
        echo "</div>
        </div>
            
    <div class=\"row-fluid\">
        
       
            
        <input type='submit' value='Enregistrer' name='enregistrer'/> <br /> <br /> 
         </form>
  
            
    </div>
    
    
    ";
        // line 250
        if (array_key_exists("message", $context)) {
            // line 251
            echo "        <a style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</a>
    ";
        }
        // line 253
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
        return array (  336 => 253,  330 => 251,  328 => 250,  312 => 236,  302 => 234,  298 => 226,  294 => 223,  289 => 221,  284 => 219,  280 => 218,  274 => 217,  271 => 216,  269 => 215,  265 => 213,  259 => 210,  255 => 209,  249 => 208,  246 => 207,  244 => 206,  240 => 204,  235 => 202,  230 => 200,  226 => 199,  220 => 198,  217 => 197,  215 => 196,  211 => 194,  205 => 191,  201 => 190,  192 => 189,  189 => 187,  187 => 186,  182 => 183,  179 => 182,  170 => 180,  168 => 176,  163 => 175,  161 => 174,  154 => 169,  150 => 168,  143 => 163,  141 => 162,  136 => 160,  123 => 152,  119 => 150,  116 => 149,  107 => 147,  102 => 146,  99 => 145,  93 => 144,  87 => 142,  84 => 141,  78 => 139,  72 => 137,  69 => 136,  66 => 135,  61 => 134,  59 => 133,  55 => 131,  51 => 128,  48 => 127,  43 => 124,  40 => 123,  33 => 120,  30 => 119,);
    }
}
