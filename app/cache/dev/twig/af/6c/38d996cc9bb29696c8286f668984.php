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
        echo "Création user stories <br /><br />";
    }

    // line 8
    public function block_contentCenter($context, array $blocks = array())
    {
        echo " 
    <label>Projet : </label><SELECT name='projet'>
    ";
        // line 13
        echo "    </SELECT>
            
    <label>Fonctionnalité : </label><SELECT name='fonctionnalite'>
    ";
        // line 19
        echo "    </SELECT>

        <input type='submit' value='Charger' name='charger'/> 
   ";
    }

    // line 24
    public function block_contentLeft($context, array $blocks = array())
    {
        // line 25
        echo "            
        <form method=\"post\" action=\"e\"> 
            <fieldset style=\"border-color: #000000;\"> <legend>Nouvelle tâches</legend>
                 
                <label>Rôle : </label><input type='text'  name='role' id='fonction' size=\"20px\" /> <br /><br />
                <label>Action : </label><br />
                <textarea rows=\"5\" cols=\"30\" style=\"border:solid 1px black; font-family:tahoma;\"></textarea> <br /><br />
                <label>But : </label><input type='text'  name='but' id='but' size=\"20px\" /> <br /><br />
                <label>Priorité : </label><SELECT name='priorite'>
                ";
        // line 37
        echo "                 </SELECT> <br /><br />
                <label>Statut : <input type='text'  value=\"non assigné\" name='statut' id='statut' size=\"20px\" disabled=\"true\"/> <br /><br />
                <input type='submit' value='Ajouter' name='ajoutTache'/>
                    
             </fieldset>
        </form>
        
    ";
    }

    // line 46
    public function block_contentRight($context, array $blocks = array())
    {
        echo "    
        
        <table border =\"1\" cellspacing =\"0\" align=\"center\" height=\"500px\">
        ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
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
        // line 62
        echo "        </table>
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
        return array (  109 => 62,  92 => 50,  88 => 49,  81 => 46,  70 => 37,  59 => 25,  56 => 24,  49 => 19,  44 => 13,  38 => 8,  31 => 5,);
    }
}
