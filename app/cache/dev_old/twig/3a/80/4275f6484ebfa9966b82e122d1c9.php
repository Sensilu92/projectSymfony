<?php

/* ::creationClientFormulaire.html.twig */
class __TwigTemplate_3a804275f6484ebfa9966b82e122d1c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        echo "Place du formulaire
        
            <form method=\"post\" action=\"e\">
                
                <label>Société : <input type='text'  name='societe' id='societe' size=\"20px\" /> <br /><br />
                <label>Nom du contact : <input type='text'  name='nameContact' id='nameContact' size=\"20px\" /> <br /><br />
                <label>Prénom du contact : <input type='text'  name='prenomContact' id='prenomContact' size=\"20px\" /> <br /><br />
                <label>Téléphone du contact : <input type='text'  name='telephoneContact' id='telephoneContacth' size=\"20px\" /> <br /><br />
                <label>Identifiant : <input type='text'  name='identifiant' id='identifiant' size=\"20px\" /> <br /><br />
                <label>Mot de passe : <input type='text'  name='password' id='password' size=\"20px\" /> <br /><br />
                <input type='submit' value='Créer' name='creer'/>';    
            </form>
        ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::creationClientFormulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  64 => 10,  59 => 6,  53 => 5,  47 => 24,  44 => 23,  42 => 10,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
