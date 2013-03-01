<?php

/* suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig */
class __TwigTemplate_6d8f3ef96ba91ef1fbe9d3bf8b1144fa extends Twig_Template
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

    // line 145
    public function block_title($context, array $blocks = array())
    {
        // line 146
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion
";
    }

    // line 149
    public function block_emplacement($context, array $blocks = array())
    {
        // line 150
        echo "    Cra
";
    }

    // line 153
    public function block_content($context, array $blocks = array())
    {
        // line 154
        echo "    
<script src = \"http://code.jquery.com/jquery-1.9.1.js\" > </script>
<script src = \"http://code.jquery.com/ui/1.10.1/jquery-ui.js\" > </script>
<link rel = \"stylesheet\" href = \"http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css\" />
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("datepicker/datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"> </script>
<link rel = \"stylesheet\" src =\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("datepicker/datepicker/css/datepicker.css"), "html", null, true);
        echo "\" />
<link rel = \"stylesheet\" href = \"/resources/demos/style.css\"/>

  <div class=\"container-fluid\">
      <form method=\"post\" action=\"\"> ";
        // line 164
        echo "          
         <table width=\"50%\" height=\"85%\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\"><tr><td>Jours</td><td>Date</td><td>Projet</td><td>Client</td><td>Tâche</td><td>Statut</td><td>Explications</td><td>Creer</td></tr>
        ";
        // line 166
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 167
            echo "            
        <tr>
            <td>
                ";
            // line 170
            if (($this->getContext($context, "i") == 0)) {
                // line 171
                echo "                    LUNDI
                ";
            } elseif (($this->getContext($context, "i") == 1)) {
                // line 173
                echo "                    MARDI
                ";
            } elseif (($this->getContext($context, "i") == 2)) {
                // line 175
                echo "                    MERCREDI
                ";
            } elseif (($this->getContext($context, "i") == 3)) {
                // line 177
                echo "                    JEUDI
                ";
            } else {
                // line 179
                echo "                    VENDREDI
                ";
            }
            // line 181
            echo "            </td>
            <td>
                   ";
            // line 183
            if ($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", true, true)) {
                // line 184
                echo "                        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "date"), "d/m/Y"), "html", null, true);
                echo "
                    ";
            } elseif (array_key_exists("listDate", $context)) {
                // line 186
                echo "                      ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listDate"), $this->getContext($context, "i"), array(), "array"), "html", null, true);
                echo "
                    ";
            }
            // line 188
            echo "                
            </td>
            <td>";
            // line 190
            if (array_key_exists("projet", $context)) {
                // line 191
                echo "                <SELECT name='projet";
                echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                echo "'> 
                    <OPTION name='' value=\"\">
                    ";
                // line 193
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
                foreach ($context['_seq'] as $context["_key"] => $context["theprojet"]) {
                    // line 194
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", false, true), "projet", array(), "any", true, true)) {
                        // line 195
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "projet") == $this->getAttribute($this->getContext($context, "theprojet"), "nom"))) {
                            // line 196
                            echo "                                <OPTION selected=\"selected\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "projet"), "html", null, true);
                            echo "
                            ";
                        } else {
                            // line 198
                            echo "                                <OPTION >";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theprojet"), "nom"), "html", null, true);
                            echo "
                            ";
                        }
                        // line 200
                        echo "                        ";
                    } else {
                        // line 201
                        echo "                            <OPTION >";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theprojet"), "nom"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 203
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theprojet'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 204
                echo "                </SELECT>
                    ";
            }
            // line 206
            echo "             </td>
             <td>
                 ";
            // line 208
            if (array_key_exists("client", $context)) {
                // line 209
                echo "                <SELECT name='client";
                echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                echo "'> 
                    <OPTION name='' value=\"\">
                    ";
                // line 211
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["theclient"]) {
                    // line 212
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", false, true), "client", array(), "any", true, true)) {
                        // line 213
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "client") == $this->getAttribute($this->getContext($context, "theclient"), "societe"))) {
                            // line 214
                            echo "                                <OPTION selected=\"selected\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "client"), "html", null, true);
                            echo "
                            ";
                        } else {
                            // line 216
                            echo "                                <OPTION >";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theclient"), "societe"), "html", null, true);
                            echo "
                            ";
                        }
                        // line 218
                        echo "                        ";
                    } else {
                        // line 219
                        echo "                            <OPTION >";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theclient"), "societe"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 221
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theclient'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 222
                echo "                </SELECT>";
            }
            // line 223
            echo "             </td>
             <td>";
            // line 224
            if (array_key_exists("tache", $context)) {
                // line 225
                echo "                <SELECT name='tache";
                echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                echo "'> 
                    <OPTION name='' value=\"\">
                    ";
                // line 227
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tache"));
                foreach ($context['_seq'] as $context["_key"] => $context["thetache"]) {
                    // line 228
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", false, true), "tache", array(), "any", true, true)) {
                        // line 229
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "tache") == $this->getAttribute($this->getContext($context, "thetache"), "fonctionnalite"))) {
                            // line 230
                            echo "                                <OPTION selected=\"selected\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "tache"), "html", null, true);
                            echo "
                            ";
                        } else {
                            // line 232
                            echo "                                <OPTION >";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "thetache"), "fonctionnalite"), "html", null, true);
                            echo "
                            ";
                        }
                        // line 234
                        echo "                        ";
                    } else {
                        // line 235
                        echo "                            <OPTION >";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "thetache"), "fonctionnalite"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 237
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thetache'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 238
                echo "                </SELECT>";
            }
            // line 239
            echo "             </td>
             <td>
                 ";
            // line 241
            if (array_key_exists("statut", $context)) {
                // line 242
                echo "                <SELECT name='statut";
                echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                echo "'> 
                    <OPTION name='' value=\"\">
                    ";
                // line 244
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "statut"));
                foreach ($context['_seq'] as $context["_key"] => $context["thestatut"]) {
                    // line 245
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", false, true), "statut", array(), "any", true, true)) {
                        // line 246
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "statut") == $this->getAttribute($this->getContext($context, "thestatut"), "intitule"))) {
                            // line 247
                            echo "                                <OPTION selected=\"selected\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "statut"), "html", null, true);
                            echo "
                            ";
                        } else {
                            // line 249
                            echo "                                <OPTION >";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "thestatut"), "intitule"), "html", null, true);
                            echo "
                            ";
                        }
                        // line 251
                        echo "                        ";
                    } else {
                        // line 252
                        echo "                            <OPTION >";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "thestatut"), "intitule"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 254
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thestatut'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 255
                echo "                </SELECT>";
            }
            // line 256
            echo "             </td>
             <td><textarea name=\"commentaire";
            // line 257
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "\" rows=\"2\" cols=\"50\" style=\"border:solid 1px black; font-family:tahoma;\">";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", false, true), "commentaire", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "commentaire"), "html", null, true);
            }
            echo "</textarea></td>
             <td><input type='checkbox' name='ajouter";
            // line 258
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "'/></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 261
        echo "            </table><br />
            
            <input type='submit' value='Enregistrer + retour' name='enregistrer'/> <br />
    </form>
     
  </div></div>

</div>
    
    
    ";
        // line 271
        if (array_key_exists("message", $context)) {
            // line 272
            echo "        <a style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</a>
    ";
        }
        // line 274
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 274,  363 => 272,  361 => 271,  349 => 261,  340 => 258,  332 => 257,  329 => 256,  326 => 255,  320 => 254,  314 => 252,  311 => 251,  305 => 249,  299 => 247,  296 => 246,  293 => 245,  289 => 244,  283 => 242,  281 => 241,  277 => 239,  274 => 238,  268 => 237,  262 => 235,  259 => 234,  253 => 232,  247 => 230,  244 => 229,  241 => 228,  237 => 227,  231 => 225,  229 => 224,  226 => 223,  223 => 222,  217 => 221,  211 => 219,  208 => 218,  202 => 216,  196 => 214,  193 => 213,  190 => 212,  186 => 211,  180 => 209,  178 => 208,  174 => 206,  170 => 204,  164 => 203,  158 => 201,  155 => 200,  149 => 198,  143 => 196,  140 => 195,  137 => 194,  133 => 193,  127 => 191,  125 => 190,  121 => 188,  115 => 186,  109 => 184,  107 => 183,  103 => 181,  99 => 179,  95 => 177,  91 => 175,  87 => 173,  83 => 171,  81 => 170,  76 => 167,  72 => 166,  68 => 164,  61 => 159,  57 => 158,  51 => 154,  48 => 153,  43 => 150,  40 => 149,  33 => 146,  30 => 145,);
    }
}
