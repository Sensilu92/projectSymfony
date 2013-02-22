<?php

/* SuiviprojetAdministrateurBundle:Admin:connexionVue.html.twig */
class __TwigTemplate_b9940c364673a1994e08be8ee2f71548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modele2.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <form method=\"post\" action=\"\">
        <label>Identifiant : <input type='text'  name='identifiant' id='identifiant' size=\"20px\" /> <br /><br />
        <label>Mot de passe : <input type='password'  name='password' id='password' size=\"20px\" /> <br /><br />
        <input type='submit' value='Connexion' name='connexion'/>    
   </form>

 ";
    }

    public function getTemplateName()
    {
        return "SuiviprojetAdministrateurBundle:Admin:connexionVue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,);
    }
}
