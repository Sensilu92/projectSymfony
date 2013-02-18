<?php

/* blacklogProductBundle:Blacklog:creationProjet.html.twig */
class __TwigTemplate_f9e5f8243c642427aff7d6015a685d6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modele2.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'contentCenter' => array($this, 'block_contentCenter'),
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
        echo "Création projet <br /><br />";
    }

    // line 5
    public function block_contentCenter($context, array $blocks = array())
    {
        // line 6
        echo "
    <form method=\"post\" action=\"e\">
                
        <label>Nom : <input type='text'  name='name' id='name' size=\"20px\" /> <br /><br />
            <label>Client : </label><SELECT name='client'>
            ";
        // line 14
        echo "        </SELECT></br></br>
        <label>Date de début : </label><input type='text'  name='prenomContact' id='prenomContact'/> 
        <label>Date de fin : </label><input type='text'  name='telephoneContact' id='telephoneContacth'/> <br /><br />
        <label>Action : </label><br />
        <textarea rows=\"5\" cols=\"30\" style=\"border:solid 1px black; font-family:tahoma;\"></textarea> <br /><br />
        <input type='submit' value='Créer' name='creer'/>    
   </form>
    

";
    }

    public function getTemplateName()
    {
        return "blacklogProductBundle:Blacklog:creationProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  39 => 6,  36 => 5,  29 => 3,);
    }
}
