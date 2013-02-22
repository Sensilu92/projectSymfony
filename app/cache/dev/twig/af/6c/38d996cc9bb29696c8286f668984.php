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
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method"), "html", null, true);
        echo "
            <fieldset  ";
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") != "admin")) {
            echo " disabled=\"disabled\" ";
        }
        echo " style=\"height: 350px;\"> <legend>Nouveau détail technique</legend>
                <br><label>Description :</label><br>
                <textarea rows=\"10\" cols=\"50\" name=\"description\"></textarea> <br /><br />
                <input type='submit' value='Ajouter' name='ajoutDetailTechnique'/>
             </fieldset>
        </form>
        
    ";
    }

    // line 18
    public function block_contentRight($context, array $blocks = array())
    {
        echo " 
 
        <table><tr>
        ";
        // line 21
        $context["counter"] = 0;
        // line 22
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userStoriesTechnique"));
        foreach ($context['_seq'] as $context["_key"] => $context["userStory"]) {
            // line 23
            echo "
            ";
            // line 24
            $context["counter"] = ($this->getContext($context, "counter") + 1);
            // line 25
            echo "
            <td>#";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "userStorieUserStorie"), "idUserStorie"), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "idUserStoriesTechnique"), "html", null, true);
            echo "<br>
                    Fonctionnalité : ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "userStory"), "userStorieUserStorie"), "fonctionnalite"), "html", null, true);
            echo " <br>
                    Description : ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userStory"), "descriptionTechnique"), "html", null, true);
            echo " <br>
               
           </td >

          ";
            // line 32
            if (($this->getContext($context, "counter") == 4)) {
                // line 33
                echo "            </tr><tr>
            ";
                // line 34
                $context["counter"] = 0;
                echo "   
          ";
            }
            // line 36
            echo "   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userStory'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
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
        return array (  121 => 38,  114 => 36,  109 => 34,  106 => 33,  104 => 32,  97 => 28,  93 => 27,  87 => 26,  84 => 25,  82 => 24,  79 => 23,  74 => 22,  72 => 21,  65 => 18,  51 => 9,  47 => 8,  43 => 7,  40 => 6,  37 => 5,  30 => 3,);
    }
}
