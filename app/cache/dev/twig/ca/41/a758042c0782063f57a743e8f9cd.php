<?php

/* suiviProjetDevelopperBundle:Developper:cra.html.twig */
class __TwigTemplate_ca41a758042c0782063f57a743e8f9cd extends Twig_Template
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
        echo "CRA<br /><br />";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
 
<script src = \"http://code.jquery.com/jquery-1.9.1.js\" > </script>
<script src = \"http://code.jquery.com/ui/1.10.1/jquery-ui.js\" > </script>
<link rel = \"stylesheet\" href = \"http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css\" />
<link rel = \"stylesheet\" href = \"/resources/demos/style.css\"/>

    <form method=\"post\" action=\"\">
                 
        <label>Début de début: </label><script>
            \$( function () {
                \$(\"#datepicker\").datepicker();
            });
         </script>
         <input type = \"text\" name=\"date\" id = \"datepicker\" />
         ";
        // line 26
        echo "         <input type='submit' value='Nouveau cra' name='nouveau'/> <br /><br />
      
          <table width=\"85%\" height=\"85%\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\"><tr><td></td><td>Developpeur</td><td>Date de début</td><td>Date de fin</td><td>Détails</td></tr>
            ";
        // line 29
        if (array_key_exists("cra", $context)) {
            // line 30
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cra"));
            foreach ($context['_seq'] as $context["_key"] => $context["theCra"]) {
                // line 31
                echo "                    <tr>
                        <td><a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suivi_projet_developper_cra_individuel", array("idcraHebdomadaire" => $this->getAttribute($this->getContext($context, "theCra"), "idcraHebdomadaire"))), "html", null, true);
                echo "\"><b>Consulter</b></a><br></td>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "theCra"), "developperdevelopper"), 0, array(), "array"), "nom"), "html", null, true);
                echo "</td>
                        <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "theCra"), "dateDebut"), "d / m / Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "theCra"), "dateFin"), "d / m / Y"), "html", null, true);
                echo "</td>
                        <td><textarea name=\"detail\" rows=\"3\" cols=\"50\" style=\"border:solid 1px black; font-family:tahoma;\"></textarea></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theCra'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 39
            echo "            ";
        }
        // line 40
        echo "         </table><br />
    </form>

";
    }

    public function getTemplateName()
    {
        return "suiviProjetDevelopperBundle:Developper:cra.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 40,  92 => 39,  82 => 35,  78 => 34,  74 => 33,  70 => 32,  67 => 31,  62 => 30,  60 => 29,  55 => 26,  36 => 5,  29 => 3,);
    }
}
