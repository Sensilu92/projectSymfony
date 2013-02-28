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

    // line 112
    public function block_title($context, array $blocks = array())
    {
        // line 113
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion
";
    }

    // line 116
    public function block_emplacement($context, array $blocks = array())
    {
        // line 117
        echo "    Cra
";
    }

    // line 120
    public function block_content($context, array $blocks = array())
    {
        // line 121
        echo "    
    <script src = \"http://code.jquery.com/jquery-1.9.1.js\" > </script>
<script src = \"http://code.jquery.com/ui/1.10.1/jquery-ui.js\" > </script>
<link rel = \"stylesheet\" href = \"http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css\" />
<link rel = \"stylesheet\" href = \"/resources/demos/style.css\"/>

  <div class=\"container-fluid\">
      <form method=\"post\" action=\"\"> ";
        // line 129
        echo "
           <label>Début de début: </label><script>
            \$( function () {
                \$(\"#dateD\").datepicker();
            });
         </script>
         <input class=\"datetime\" type=\"datetime\" name=\"dateD\" id =\"dateD\" />
           <label>Début de fin: </label><script>
                    \$('.datepicker').datepicker()";
        // line 138
        echo ";
            });
         </script>
         <input type=\"datetime\" name=\"dateF\" id=\"dateF\" />
         <input type='submit' value='Générer cra journalier' name='generer'/> <br />
          
          <table width=\"50%\" height=\"85%\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\"><tr><td>Jours</td><td>Date</td><td>Projet</td><td>Client</td><td>Tâche</td><td>Statut</td><td>Explications</td></tr>
        ";
        // line 145
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 146
            echo "            
        <tr>
            <td>
                ";
            // line 149
            if (($this->getContext($context, "i") == 0)) {
                // line 150
                echo "                    LUNDI
                ";
            } elseif (($this->getContext($context, "i") == 1)) {
                // line 152
                echo "                    MARDI
                ";
            } elseif (($this->getContext($context, "i") == 2)) {
                // line 154
                echo "                    MERCREDI
                ";
            } elseif (($this->getContext($context, "i") == 3)) {
                // line 156
                echo "                    JEUDI
                ";
            } else {
                // line 158
                echo "                    VENDREDI
                ";
            }
            // line 160
            echo "            </td>
            <td>
                ";
            // line 163
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", true, true)) {
                // line 164
                echo "                        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "date"), "d/m/Y"), "html", null, true);
                echo "
                    ";
            } elseif (array_key_exists("listDate", $context)) {
                // line 166
                echo "                      ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listDate"), $this->getContext($context, "i"), array(), "array"), "html", null, true);
                echo "
                    ";
            }
            // line 168
            echo "                
            </td>
            <td>";
            // line 170
            if (array_key_exists("projet", $context)) {
                // line 171
                echo "                <SELECT name='projet";
                echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                echo "'> 
                    <OPTION name='' value=\"\">
                    ";
                // line 173
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
                foreach ($context['_seq'] as $context["_key"] => $context["theprojet"]) {
                    // line 174
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", false, true), "projet", array(), "any", true, true)) {
                        // line 175
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "projet") == $this->getAttribute($this->getContext($context, "theprojet"), "nom"))) {
                            // line 176
                            echo "                                <OPTION selected=\"selected\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "projet"), "html", null, true);
                            echo "
                            ";
                        } else {
                            // line 178
                            echo "                                <OPTION >";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theprojet"), "nom"), "html", null, true);
                            echo "
                            ";
                        }
                        // line 180
                        echo "                        ";
                    } else {
                        // line 181
                        echo "                            <OPTION >";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theprojet"), "nom"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 183
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theprojet'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 184
                echo "                </SELECT>
                    ";
            }
            // line 186
            echo "             </td>
             <td>
                 ";
            // line 188
            if (array_key_exists("client", $context)) {
                // line 189
                echo "                <SELECT name='client";
                echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                echo "'> 
                    <OPTION name='' value=\"\">
                    ";
                // line 191
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "client"));
                foreach ($context['_seq'] as $context["_key"] => $context["theclient"]) {
                    // line 192
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", false, true), "client", array(), "any", true, true)) {
                        // line 193
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "client") == $this->getAttribute($this->getContext($context, "theclient"), "societe"))) {
                            // line 194
                            echo "                                <OPTION selected=\"selected\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "client"), "html", null, true);
                            echo "
                            ";
                        } else {
                            // line 196
                            echo "                                <OPTION >";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theclient"), "societe"), "html", null, true);
                            echo "
                            ";
                        }
                        // line 198
                        echo "                        ";
                    } else {
                        // line 199
                        echo "                            <OPTION >";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theclient"), "societe"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 201
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theclient'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 202
                echo "                </SELECT>";
            }
            // line 203
            echo "             </td>
             <td>";
            // line 204
            if (array_key_exists("tache", $context)) {
                // line 205
                echo "                <SELECT name='tache";
                echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                echo "'> 
                    <OPTION name='' value=\"\">
                    ";
                // line 207
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tache"));
                foreach ($context['_seq'] as $context["_key"] => $context["thetache"]) {
                    // line 208
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", false, true), "tache", array(), "any", true, true)) {
                        // line 209
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "tache") == $this->getAttribute($this->getContext($context, "thetache"), "fonctionnalite"))) {
                            // line 210
                            echo "                                <OPTION selected=\"selected\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "tache"), "html", null, true);
                            echo "
                            ";
                        } else {
                            // line 212
                            echo "                                <OPTION >";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "thetache"), "fonctionnalite"), "html", null, true);
                            echo "
                            ";
                        }
                        // line 214
                        echo "                        ";
                    } else {
                        // line 215
                        echo "                            <OPTION >";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "thetache"), "fonctionnalite"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 217
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thetache'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 218
                echo "                </SELECT>";
            }
            // line 219
            echo "             </td>
             <td>
                 ";
            // line 221
            if (array_key_exists("statut", $context)) {
                // line 222
                echo "                <SELECT name='statut";
                echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                echo "'> 
                    <OPTION name='' value=\"\">
                    ";
                // line 224
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "statut"));
                foreach ($context['_seq'] as $context["_key"] => $context["thestatut"]) {
                    // line 225
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier", true), $this->getContext($context, "i"), array(), "array", false, true), "statut", array(), "any", true, true)) {
                        // line 226
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "statut") == $this->getAttribute($this->getContext($context, "thestatut"), "intitule"))) {
                            // line 227
                            echo "                                <OPTION selected=\"selected\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craJournalier"), $this->getContext($context, "i"), array(), "array"), "statut"), "html", null, true);
                            echo "
                            ";
                        } else {
                            // line 229
                            echo "                                <OPTION >";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "thestatut"), "intitule"), "html", null, true);
                            echo "
                            ";
                        }
                        // line 231
                        echo "                        ";
                    } else {
                        // line 232
                        echo "                            <OPTION >";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "thestatut"), "intitule"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 234
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thestatut'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 235
                echo "                </SELECT>";
            }
            // line 236
            echo "             </td>
             <td><textarea name=\"action\" rows=\"2\" cols=\"50\" style=\"border:solid 1px black; font-family:tahoma;\"></textarea></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 240
        echo "            </table><br />

            <input type='submit' value='Créer' name='creer'/> <br />
            <input type='submit' value='Enregistrer les modifications' name='modifier'/> <br />
    </form>
     
  </div></div>


    
    
    ";
        // line 251
        if (array_key_exists("message", $context)) {
            // line 252
            echo "        <a style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</a>
    ";
        }
        // line 254
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
        return array (  367 => 254,  361 => 252,  359 => 251,  346 => 240,  337 => 236,  334 => 235,  328 => 234,  322 => 232,  319 => 231,  313 => 229,  307 => 227,  304 => 226,  301 => 225,  297 => 224,  291 => 222,  289 => 221,  285 => 219,  282 => 218,  276 => 217,  270 => 215,  267 => 214,  261 => 212,  255 => 210,  252 => 209,  249 => 208,  245 => 207,  239 => 205,  237 => 204,  234 => 203,  231 => 202,  225 => 201,  219 => 199,  216 => 198,  210 => 196,  204 => 194,  201 => 193,  198 => 192,  194 => 191,  188 => 189,  186 => 188,  182 => 186,  178 => 184,  172 => 183,  166 => 181,  163 => 180,  157 => 178,  151 => 176,  148 => 175,  145 => 174,  141 => 173,  135 => 171,  133 => 170,  129 => 168,  123 => 166,  117 => 164,  114 => 163,  110 => 160,  106 => 158,  102 => 156,  98 => 154,  94 => 152,  90 => 150,  88 => 149,  83 => 146,  79 => 145,  70 => 138,  60 => 129,  51 => 121,  48 => 120,  43 => 117,  40 => 116,  33 => 113,  30 => 112,);
    }
}
