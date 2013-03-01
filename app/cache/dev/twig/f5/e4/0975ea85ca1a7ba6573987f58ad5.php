<?php

/* suiviProjetDevelopperBundle:Developper:craHebdomadaire.html.twig */
class __TwigTemplate_f5e40975ea85ca1a7ba6573987f58ad5 extends Twig_Template
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

    // line 39
    public function block_title($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion
";
    }

    // line 43
    public function block_emplacement($context, array $blocks = array())
    {
        // line 44
        echo "    Cra hebdo
";
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        // line 48
        echo "    
<script src = \"http://code.jquery.com/jquery-1.9.1.js\"> </script>
<script src = \"http://code.jquery.com/ui/1.10.1/jquery-ui.js\"> </script>
<link rel = \"stylesheet\" href = \"http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css\"/>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("datepicker/datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"> </script>
<link rel = \"stylesheet\" src =\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("datepicker/datepicker/css/datepicker.css"), "html", null, true);
        echo "\" />
<link rel = \"stylesheet\" href = \"/resources/demos/style.css\"/>

  <div class=\"container-fluid\">
    <form method=\"post\" action=\"\">
        
        <label>Début de début: </label><script>
            \$( function () {
                \$(\"#dateD\").datepicker();
            });
         </script>
         <input type=\"datetime\" name=\"dateD\" id =\"dateD\" />
           <label>Début de fin: </label><script>
                    \$( function () {
                \$(\"#dateF\").datepicker()
            });
         </script>
         <input type=\"datetime\" name=\"dateF\" id =\"dateF\" />
         ";
        // line 71
        if (array_key_exists("developpeurs", $context)) {
            // line 72
            echo "                <SELECT name='dev'> 
                    <OPTION name='' value=\"\">
                    ";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "developpeurs"));
            foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                // line 75
                echo "                        <OPTION>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dev"), "nom"), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dev'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 77
            echo "                </SELECT>
         ";
        }
        // line 79
        echo "         
         <input type='submit' value='Nouveau cra hebdo' name='nouveau'/> <br /><br />
      
         <table width=\"85%\" height=\"85%\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\"><tr><td>Consulter</td><td>Developpeur</td><td>Date de début</td><td>Date de fin</td><td>Détails</td></tr>
            ";
        // line 83
        if (array_key_exists("cra", $context)) {
            // line 84
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cra"));
            foreach ($context['_seq'] as $context["_key"] => $context["theCra"]) {
                // line 85
                echo "                    <tr>
                        <td><a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suivi_projet_developper_cra_individuel", array("idcraHebdomadaire" => $this->getAttribute($this->getContext($context, "theCra"), "idcraHebdomadaire"))), "html", null, true);
                echo "\"><b>Consulter</b></a><br></td>
                        <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "theCra"), "developperdevelopper"), 0, array(), "array"), "nom"), "html", null, true);
                echo "</td>
                        <td>";
                // line 88
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "theCra"), "dateDebut"), "d / m / Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "theCra"), "dateFin"), "d / m / Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theCra"), "commentaire"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theCra'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 93
            echo "            ";
        }
        // line 94
        echo "         </table><br />
    </form>
     
  </div>


    
    
    ";
        // line 102
        if (array_key_exists("message", $context)) {
            // line 103
            echo "        <a style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</a>
    ";
        }
        // line 105
        echo "

 ";
    }

    public function getTemplateName()
    {
        return "suiviProjetDevelopperBundle:Developper:craHebdomadaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 105,  161 => 103,  159 => 102,  149 => 94,  146 => 93,  137 => 90,  133 => 89,  129 => 88,  125 => 87,  121 => 86,  118 => 85,  113 => 84,  111 => 83,  105 => 79,  101 => 77,  92 => 75,  88 => 74,  84 => 72,  82 => 71,  61 => 53,  57 => 52,  51 => 48,  48 => 47,  43 => 44,  40 => 43,  33 => 40,  30 => 39,);
    }
}
