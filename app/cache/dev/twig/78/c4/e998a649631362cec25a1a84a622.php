<?php

/* SprintBundle:Sprint:creationSprintVue.html.twig */
class __TwigTemplate_78c4e998a649631362cec25a1a84a622 extends Twig_Template
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

    // line 85
    public function block_title($context, array $blocks = array())
    {
        // line 86
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion
";
    }

    // line 89
    public function block_emplacement($context, array $blocks = array())
    {
        // line 90
        echo "    Création sprint
";
    }

    // line 93
    public function block_content($context, array $blocks = array())
    {
        // line 94
        echo "    
    
    <div class=\"span4 offset1\">
        ";
        // line 97
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") == "admin")) {
            // line 98
            echo "            
            <script src = \"http://code.jquery.com/jquery-1.9.1.js\" > </script>
    <script src = \"http://code.jquery.com/ui/1.10.1/jquery-ui.js\" > </script>
    <link rel = \"stylesheet\" href = \"http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css\" />
    <link rel = \"stylesheet\" href = \"/resources/demos/style.css\"/>
    <form method=\"post\" action=\"\" class=\"well\">
   

        <fieldset ";
            // line 106
            echo "> 
            <legend>Informations sprint</legend>
           
            <label>Nom : </label><input type='text'  name='nom' id='nom'/> <br /><br />
            <label>Nb difficulté max : </label><input type='text'  name='nbDifficulte' id='nbDifficulte'/> <br /><br />
            <label>Début de début : </label><script>
            \$( function () {
                \$(\"#dateD\").datepicker();
            });
         </script>
         <input type = \"text\" name=\"date\" id = \"dateD\" /><br /><br />
         <label>Début de fin : </label><script>
            \$( function () {
                \$(\"#dateF\").datepicker();
            });
         </script>
         <input type = \"text\" name=\"date\" id = \"dateF\" />
                    
        </fieldset><br /><br />
     <input type='submit' value='Créer' name='creer'/> <br />
     ";
        }
        // line 127
        echo "    </div>
    <div class=\"span4 offset2\">
        <div class=\"row well\">
          ";
        // line 131
        echo "       
            <legend>Informations nouvelle équipe</legend>
           
            <label>Nom : </label><input type='text' name='nomEquipe' id='nomEquipe'/> <br /><br />
                    <table>
                        <tr>
                        <td>Développeur</td><td>Ajouter à l'équipe</td>
                    </tr>
                    ";
        // line 139
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "developpeurs"));
        foreach ($context['_seq'] as $context["_key"] => $context["developpeur"]) {
            // line 140
            echo "            
                        <tr>
                            <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "developpeur"), "nom"), "html", null, true);
            echo "</td>
                            <td><input type='checkbox' name='ajouter";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "developpeur"), "iddevelopper"), "html", null, true);
            echo "'/></td>
                        </tr>   
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['developpeur'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 146
        echo "                </table>
                    
        </br></br>
         
         
        </div>
        <div class=\"row well\">
         
            <legend>Sélection équipe existante</legend></br></br>
            
            <SELECT name='equipe'>
                <OPTION name=\"\" value=\"\">
                    ";
        // line 158
        if (array_key_exists("equipes", $context)) {
            // line 159
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "equipes"));
            foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
                // line 160
                echo "                            ";
                if (array_key_exists("currentEquipe", $context)) {
                    // line 161
                    echo "                                ";
                    if (($this->getAttribute($this->getContext($context, "equipe"), "nom") == $this->getAttribute($this->getContext($context, "currentEquipe"), "nom"))) {
                        // line 162
                        echo "                                    <OPTION selected=\"selected\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "equipe"), "nom"), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 164
                        echo "                                    <OPTION>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "equipe"), "nom"), "html", null, true);
                        echo "
                                ";
                    }
                    // line 166
                    echo "                            ";
                } else {
                    // line 167
                    echo "                                <OPTION>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "equipe"), "nom"), "html", null, true);
                    echo "        
                            ";
                }
                // line 169
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipe'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 170
            echo "                    ";
        }
        // line 171
        echo "            </SELECT> 
      </form>
        </div>
    </div>

    
    
    ";
        // line 178
        if (array_key_exists("message", $context)) {
            // line 179
            echo "        <a style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</a>
    ";
        }
        // line 181
        echo "

 ";
    }

    public function getTemplateName()
    {
        return "SprintBundle:Sprint:creationSprintVue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 181,  195 => 179,  193 => 178,  184 => 171,  181 => 170,  175 => 169,  169 => 167,  166 => 166,  160 => 164,  154 => 162,  151 => 161,  148 => 160,  143 => 159,  141 => 158,  127 => 146,  118 => 143,  114 => 142,  110 => 140,  106 => 139,  96 => 131,  91 => 127,  68 => 106,  58 => 98,  56 => 97,  51 => 94,  48 => 93,  43 => 90,  40 => 89,  33 => 86,  30 => 85,);
    }
}
