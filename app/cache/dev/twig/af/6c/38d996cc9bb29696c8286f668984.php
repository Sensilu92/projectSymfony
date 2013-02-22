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

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $this->displayParentBlock("menu", $context, $blocks);
        echo "Création user stories Tech";
    }

    // line 5
    public function block_contentLeft($context, array $blocks = array())
    {
        // line 6
        echo "            
        <form method=\"post\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "idUserStory"), "html", null, true);
        echo "\"> 
            <fieldset style=\"height: 350px;\"> <legend>Nouveau détail technique</legend>
                <br><label>Description :</label><br>
                <textarea rows=\"10\" cols=\"50\" name=\"description\"></textarea> <br /><br />
                <input type='submit' value='Ajouter' name='ajoutDetailTechnique'/>
             </fieldset>
        </form>
        
    ";
    }

    // line 17
    public function block_contentRight($context, array $blocks = array())
    {
        echo " 
 
        <table><tr>
        ";
        // line 20
        $context["counter"] = 0;
        // line 21
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStoriesTechnique"));
        foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
            // line 22
            echo "
            ";
            // line 23
            $context["counter"] = ($this->getContext($context, "counter") + 1);
            // line 24
            echo "
            <td>#";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "userStorieUserStorie"), "idUserStorie"), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStoriesTechnique"), "html", null, true);
            echo "<br>
                    Fonctionnalité : ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "userStorieUserStorie"), "fonctionnalite"), "html", null, true);
            echo " <br>
                    Description : ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "descriptionTechnique"), "html", null, true);
            echo " <br>
               
           </td >

          ";
            // line 31
            if (($this->getContext($context, "counter") == 4)) {
                // line 32
                echo "            </tr><tr>
            ";
                // line 33
                $context["counter"] = 0;
                echo "   
          ";
            }
            // line 35
            echo "   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStory'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "            </tr></table>
    
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
        return array (  112 => 37,  105 => 35,  100 => 33,  97 => 32,  95 => 31,  88 => 27,  84 => 26,  78 => 25,  75 => 24,  73 => 23,  70 => 22,  65 => 21,  63 => 20,  56 => 17,  43 => 7,  40 => 6,  37 => 5,  30 => 3,);
    }
}
