<?php

/* blacklogProductBundle:Blacklog:creationUserStoriesTechnique.html.twig */
class __TwigTemplate_af6c38d996cc9bb29696c8286f668984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modele.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'contentCenter' => array($this, 'block_contentCenter'),
            'contentLeft' => array($this, 'block_contentLeft'),
            'contentRight' => array($this, 'block_contentRight'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::modele.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $this->displayParentBlock("menu", $context, $blocks);
        echo "Création user stories";
    }

    // line 7
    public function block_contentCenter($context, array $blocks = array())
    {
        echo " 

   ";
    }

    // line 11
    public function block_contentLeft($context, array $blocks = array())
    {
        // line 12
        echo "            
        <form method=\"post\" action=\"e\"> 
            <fieldset style=\"border-color: #000000;\"> <legend>Nouveau détail techniques</legend>
                <label>Description technique :</label><br>
                <textarea rows=\"5\" cols=\"30\" name=\"description\"></textarea> <br /><br />
                <input type='submit' value='Ajouter' name='ajoutTache'/>  
             </fieldset>
        </form>
        
    ";
    }

    // line 23
    public function block_contentRight($context, array $blocks = array())
    {
        echo " 
 
        <table><tr>
        ";
        // line 26
        $context["counter"] = 0;
        // line 27
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStoriesTechnique"));
        foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
            // line 28
            echo "
        ";
            // line 30
            echo "         ";
            $context["counter"] = ($this->getContext($context, "counter") + 1);
            // line 31
            echo "
           <td>#";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "userStorieUserStorie"), "idUserStorie"), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStoriesTechnique"), "html", null, true);
            echo "<br>
                    Fonctionnalité : ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "userStorieUserStorie"), "fonctionnalite"), "html", null, true);
            echo " <br>
                    Description : ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "descriptionTechnique"), "html", null, true);
            echo " <br>
               
           </td >

          ";
            // line 38
            if (($this->getContext($context, "counter") == 4)) {
                // line 39
                echo "            </tr>
            <tr>
            ";
                // line 41
                $context["counter"] = 0;
                echo "   
          ";
            }
            // line 43
            echo "              
          
   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStory'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "                </tr>
        </table>
    
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
        return array (  122 => 47,  113 => 43,  108 => 41,  104 => 39,  102 => 38,  95 => 34,  91 => 33,  85 => 32,  82 => 31,  79 => 30,  76 => 28,  71 => 27,  69 => 26,  62 => 23,  49 => 12,  46 => 11,  38 => 7,  31 => 5,);
    }
}
