<?php

/* blacklogProductBundle:Blacklog:creationUserStoriesTechnique.html.twig */
class __TwigTemplate_af6c38d996cc9bb29696c8286f668984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<div >
    Création user stories <br /><br />
    
    <label>Projet : </label><SELECT name='projet'>
    ";
        // line 13
        echo "    </SELECT>
            
    <label>Fonctionnalité : </label><SELECT name='fonctionnalite'>
    ";
        // line 19
        echo "    </SELECT>

        <input type='submit' value='Charger' name='charger'/> 
</div>
    

    <div class=\"LeftPart\" Style=\"position:relative; float:left; text-align:center; background-color:#99EEFF; width:512px;\">
            
        <form method=\"post\" action=\"e\"> 
            <fieldset> <legend>Nouvelle tâches</legend>
                 
                <label>Rôle : <input type='text'  name='role' id='fonction' size=\"20px\" /> <br /><br />
                <label>Action : <input type='text'  name='action' id='action' size=\"20px\" /> <br /><br />
                <label>But : <input type='text'  name='but' id='but' size=\"20px\" /> <br /><br />
                <label>Priorité : </label><SELECT name='priorite'>
                ";
        // line 37
        echo "                 </SELECT>
                <label>Statut : <input type='text'  value=\"non assigné\" name='statut' id='statut' size=\"20px\" disabled=\"true\"/> <br /><br />
                <input type='submit' value='Ajouter' name='ajoutTache'/>
                    
             </fieldset>
        </form>
</div>

<div class=\"RightPart\" style=\"position:relative; float:right; text-align:center; background-color:#99EEFF; width:512px;height:610px;\">
   <!-- background-color:#99EEFF; -->
         
   <table border =\"1\" cellspacing =\"0\" >


<tr><td><a href=\"index.php?page=evenements&intitule='.\$unEvenement['Intitule_Evenements'].'\"></a></td>
<td>Cellule 1</td>
<td>Cellule 2</td >
<td>Cellule 3</td></tr>



           </div>
    
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
        return array (  60 => 37,  43 => 19,  38 => 13,  31 => 5,  28 => 4,);
    }
}
