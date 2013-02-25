<?php

/* suiviProjetDevelopperBundle:Developper:craIndividuel.html.twig */
class __TwigTemplate_6d8f3ef96ba91ef1fbe9d3bf8b1144fa extends Twig_Template
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
        echo "Compte rendu d'activité individuel<br /><br />";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
 
<script src = \"http://code.jquery.com/jquery-1.9.1.js\" > </script>
<script src = \"http://code.jquery.com/ui/1.10.1/jquery-ui.js\" > </script>
<link rel = \"stylesheet\" href = \"http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css\" />
<link rel = \"stylesheet\" href = \"/resources/demos/style.css\"/>

    <form method=\"post\" action=\"\"> ";
        // line 13
        echo "                 
       ";
        // line 32
        echo "        
        <table width=\"50%\" height=\"85%\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\"><tr><td>Jours</td><td>Date</td><td>Projet</td><td>Client</td><td>Tâche</td><td>Statut</td><td>Explications</td></tr>
        
        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            echo "            
        <tr>
            <td>
                ";
            // line 39
            if (($this->getContext($context, "i") == 0)) {
                // line 40
                echo "                    LUNDI
                ";
            } elseif (($this->getContext($context, "i") == 1)) {
                // line 42
                echo "                    MARDI
                ";
            } elseif (($this->getContext($context, "i") == 2)) {
                // line 44
                echo "                    MERCREDI
                ";
            } elseif (($this->getContext($context, "i") == 3)) {
                // line 46
                echo "                    JEUDI
                ";
            } else {
                // line 48
                echo "                    VENDREDI
                ";
            }
            // line 50
            echo "            </td>
            <td>
                <script>
                    \$( function () {
                        \$(\"#datepicker";
            // line 54
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "\").datepicker();
                    });
                </script>
                ";
            // line 57
            $context["date"] = "1985/01/02";
            // line 58
            echo "                <input type=\"datetime\" name=\"date";
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "\" id = \"datepicker";
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "\"/>
            </td>
             <td>
                <SELECT name='projet";
            // line 61
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "'> 
                        <OPTION name='' value=\"\">
                    ";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projet"));
            foreach ($context['_seq'] as $context["_key"] => $context["theProjet"]) {
                // line 64
                echo "                        <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theProjet"), "nom"), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theProjet'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 66
            echo "             </SELECT>
             </td>
             <td>
                <SELECT name='client";
            // line 69
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "'>
                    <OPTION name='' value=\"\">
                    ";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clients"));
            foreach ($context['_seq'] as $context["_key"] => $context["clt"]) {
                // line 72
                echo "                        <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "clt"), "societe"), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clt'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 74
            echo "                </SELECT>
             </td>
             <td>
                <SELECT name='tache";
            // line 77
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "'>
                    <OPTION name='' value=\"\">
                    ";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStories"));
            foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
                // line 80
                echo "                        <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "fonctionnalite"), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStory'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 82
            echo "                </SELECT>
             </td>
             <td>
                <SELECT name='statut";
            // line 85
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "'>
                    <OPTION name='' value=\"\">
                    ";
            // line 87
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "statuts"));
            foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
                // line 88
                echo "                        <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "statut"), "intitule"), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statut'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 90
            echo "                </SELECT>
             </td>
             <td><textarea name=\"action\" rows=\"2\" cols=\"50\" style=\"border:solid 1px black; font-family:tahoma;\"></textarea></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 95
        echo "            </table><br />

            <input type='submit' value='Enregistrer' name='enregistrer'/> <br />
    </form>
        
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
        return array (  206 => 95,  196 => 90,  187 => 88,  183 => 87,  178 => 85,  173 => 82,  164 => 80,  160 => 79,  155 => 77,  150 => 74,  141 => 72,  137 => 71,  132 => 69,  127 => 66,  118 => 64,  114 => 63,  109 => 61,  100 => 58,  98 => 57,  92 => 54,  86 => 50,  82 => 48,  78 => 46,  74 => 44,  70 => 42,  66 => 40,  64 => 39,  59 => 36,  55 => 35,  50 => 32,  47 => 13,  36 => 5,  29 => 3,);
    }
}
