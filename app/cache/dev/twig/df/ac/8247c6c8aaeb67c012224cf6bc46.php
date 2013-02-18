<?php

/* blacklogProductBundle:Blacklog:creationUserStories.html.twig */
class __TwigTemplate_dfac8247c6c8aaeb67c012224cf6bc46 extends Twig_Template
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

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        $this->displayParentBlock("menu", $context, $blocks);
        echo "Création user stories <br /><br />";
    }

    // line 6
    public function block_contentLeft($context, array $blocks = array())
    {
        // line 7
        echo "            
    <form method=\"post\" action=\"e\"> 
        <fieldset style=\"border-color: #000000;\"> <legend>Nouvelle fonctionnalité</legend>
                 
            <label>Projet : </label><SELECT name='projet'>
            ";
        // line 15
        echo "            </SELECT></br></br>
            <label>Fonction : <input type='text'  name='fonction' id='fonction' size=\"20px\" /> <br /><br />

            <input type='submit' value='Enregistrer' name='enregistrer'/>    <br />
            <input type='submit' value='Ajouter des tâches' name='ajoutTache'/>  <br />
            <input type='submit' value='Ajouter des fonctions' name='ajoutFonction'/> <br /> 
                    
        </fieldset>
    </form>
        
    ";
    }

    // line 27
    public function block_contentRight($context, array $blocks = array())
    {
        echo "    
        
        <table border =\"1\" cellspacing =\"0\" align=\"center\" height=\"500px\">
        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 31
            echo "
            <tr><td>
            <table><tr><td style=\"background-color:#FF0000\"># <br> 
                                                    Rôle : <br>
                                                    But : <br>
                                                    Action :</td>
            </table></td>
                <td style=\"background-color:#FFFFFF\">Cellule 2</td >
                
            </tr>  
   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "        </table>
    ";
    }

    public function getTemplateName()
    {
        return "blacklogProductBundle:Blacklog:creationUserStories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 43,  72 => 31,  68 => 30,  61 => 27,  47 => 15,  40 => 7,  37 => 6,  30 => 4,);
    }
}
