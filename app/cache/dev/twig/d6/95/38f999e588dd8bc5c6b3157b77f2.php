<?php

/* SuiviprojetAdministrateurBundle:Admin:creationCompteClient.html.twig */
class __TwigTemplate_d69538f999e588dd8bc5c6b3157b77f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modele.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'contentCenter' => array($this, 'block_contentCenter'),
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
        echo "Création compte client <br /><br />";
    }

    // line 5
    public function block_contentCenter($context, array $blocks = array())
    {
        echo " 

 

    

    <form method=\"post\" action=\"e\">
                
            <label>Client : </label><SELECT name='client'>
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clients"));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 15
            echo "                <OPTION>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "c"), "societe"), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "        </SELECT></br></br>
        <label>Prénom du contact : <input type='text'  name='prenomContact' id='prenomContact' size=\"20px\" /> <br /><br />
        <label>Téléphone du contact : <input type='text'  name='telephoneContact' id='telephoneContacth' size=\"20px\" /> <br /><br />
        <label>Identifiant : <input type='text'  name='identifiant' id='identifiant' size=\"20px\" /> <br /><br />
        <label>Mot de passe : <input type='text'  name='password' id='password' size=\"20px\" /> <br /><br />
        <input type='submit' value='Créer' name='creer'/>    
   </form>
    
 ";
    }

    public function getTemplateName()
    {
        return "SuiviprojetAdministrateurBundle:Admin:creationCompteClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  53 => 15,  49 => 14,  36 => 5,  29 => 3,);
    }
}
