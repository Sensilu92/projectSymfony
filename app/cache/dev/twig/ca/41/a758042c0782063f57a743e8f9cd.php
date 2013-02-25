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
                 
        ";
        // line 21
        echo "         
          <table width=\"85%\" height=\"85%\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\"><tr><td>Developpeur</td><td>Date</td>";
        // line 22
        echo "<td>Client</td><td>Tâche</td><td>Statut</td><td>Détails</td></tr>
         ";
        // line 23
        if (array_key_exists("cra", $context)) {
            // line 24
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cra"));
            foreach ($context['_seq'] as $context["_key"] => $context["theCra"]) {
                // line 25
                echo "            
                <tr>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "theCra"), "developperdevelopper"), 0, array(), "array"), "nom"), "html", null, true);
                echo "</td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "theCra"), "date"), "d / m / Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theCra"), "client"), "html", null, true);
                echo "</td>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theCra"), "tache"), "html", null, true);
                echo "</td>
                    <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theCra"), "statut"), "html", null, true);
                echo "</td>
                    <td><textarea name=\"detail\" rows=\"3\" cols=\"50\" style=\"border:solid 1px black; font-family:tahoma;\"></textarea></td>
                </tr>
                
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theCra'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 36
            echo "         ";
        }
        // line 37
        echo "            </table><br />
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
        return array (  96 => 37,  93 => 36,  82 => 31,  78 => 30,  74 => 29,  70 => 28,  66 => 27,  62 => 25,  57 => 24,  55 => 23,  52 => 22,  49 => 21,  36 => 5,  29 => 3,);
    }
}
