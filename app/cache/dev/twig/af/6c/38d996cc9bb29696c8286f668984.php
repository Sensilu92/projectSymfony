<?php

/* blacklogProductBundle:Blacklog:creationUserStoriesTechnique.html.twig */
class __TwigTemplate_af6c38d996cc9bb29696c8286f668984 extends Twig_Template
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

    // line 45
    public function block_title($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion
";
    }

    // line 49
    public function block_emplacement($context, array $blocks = array())
    {
        // line 50
        echo "    User stories technique
";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "  <div class=\"container-fluid\">
     <div class=\"row-fluid\">
       <div class=\"span3 offset1\">
           <form method=\"post\" action=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getContext($context, "idUserStory"), "html", null, true);
        echo "\" class=\"well\">
            <fieldset  ";
        // line 58
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") != "admin")) {
            echo " disabled=\"disabled\" ";
        }
        echo " style=\"height: 350px;\"> <legend>Nouveau détail technique</legend>
                <br><label>Description :</label><br>
                <textarea rows=\"10\" cols=\"50\" name=\"description\"></textarea> <br /><br />
                <input type='submit' value='Ajouter' name='ajoutDetailTechnique'/>
             </fieldset>
        </form>
           </div>
  
  <div class=\"span7\">
       <table><tr>
        ";
        // line 68
        $context["counter"] = 0;
        // line 69
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStoriesTechnique"));
        foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
            // line 70
            echo "
            ";
            // line 71
            $context["counter"] = ($this->getContext($context, "counter") + 1);
            // line 72
            echo "
            <td>#";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "userStorieUserStorie"), "idUserStorie"), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStoriesTechnique"), "html", null, true);
            echo "<br>
                    Fonctionnalité : ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "userStorieUserStorie"), "fonctionnalite"), "html", null, true);
            echo " <br>
                    Description : ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "descriptionTechnique"), "html", null, true);
            echo " <br>
               
           </td >

          ";
            // line 79
            if (($this->getContext($context, "counter") == 4)) {
                // line 80
                echo "            </tr><tr>
            ";
                // line 81
                $context["counter"] = 0;
                echo "   
          ";
            }
            // line 83
            echo "   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStory'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 85
        echo "            </tr></table>
    
      </div></div></div>
    

    
    
    ";
        // line 92
        if (array_key_exists("message", $context)) {
            // line 93
            echo "        <a style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</a>
    ";
        }
        // line 95
        echo "

 ";
    }

    public function getTemplateName()
    {
        return "blacklogProductBundle:Blacklog:creationUserStoriesTechnique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 95,  135 => 93,  133 => 92,  124 => 85,  117 => 83,  112 => 81,  109 => 80,  107 => 79,  100 => 75,  96 => 74,  90 => 73,  87 => 72,  85 => 71,  82 => 70,  77 => 69,  75 => 68,  60 => 58,  56 => 57,  51 => 54,  48 => 53,  43 => 50,  40 => 49,  33 => 46,  30 => 45,);
    }
}
