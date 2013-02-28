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
    <script src = \"http://code.jquery.com/jquery-1.9.1.js\" > </script>
<script src = \"http://code.jquery.com/ui/1.10.1/jquery-ui.js\" > </script>
<link rel = \"stylesheet\" href = \"http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css\" />
<link rel = \"stylesheet\" href = \"/resources/demos/style.css\"/>

  <div class=\"container-fluid\">
    <form method=\"post\" action=\"\">
                 
        
         <input type='submit' value='Nouveau cra' name='nouveau'/> <br /><br />
      
          <table width=\"85%\" height=\"85%\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\"><tr><td>Developpeur</td><td>Date de début</td><td>Date de fin</td><td>Détails</td></tr>
            ";
        // line 61
        if (array_key_exists("cra", $context)) {
            // line 62
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cra"));
            foreach ($context['_seq'] as $context["_key"] => $context["theCra"]) {
                // line 63
                echo "                    <tr>
                        <td><a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suivi_projet_developper_cra_individuel", array("idcraHebdomadaire" => $this->getAttribute($this->getContext($context, "theCra"), "idcraHebdomadaire"))), "html", null, true);
                echo "\"><b>Consulter</b></a><br></td>
                        <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "theCra"), "developperdevelopper"), 0, array(), "array"), "nom"), "html", null, true);
                echo "</td>
                        <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "theCra"), "dateDebut"), "d / m / Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "theCra"), "dateFin"), "d / m / Y"), "html", null, true);
                echo "</td>
                        <td><textarea name=\"detail\" rows=\"3\" cols=\"50\" style=\"border:solid 1px black; font-family:tahoma;\"></textarea></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theCra'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 71
            echo "            ";
        }
        // line 72
        echo "         </table><br />
    </form>
     
  </div>


    
    
    ";
        // line 80
        if (array_key_exists("message", $context)) {
            // line 81
            echo "        <a style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</a>
    ";
        }
        // line 83
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
        return array (  119 => 83,  113 => 81,  111 => 80,  101 => 72,  98 => 71,  88 => 67,  84 => 66,  80 => 65,  76 => 64,  73 => 63,  68 => 62,  66 => 61,  51 => 48,  48 => 47,  43 => 44,  40 => 43,  33 => 40,  30 => 39,);
    }
}
