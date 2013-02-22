<?php

/* ::modeleParent.html.twig */
class __TwigTemplate_61460eb660955afb1551db4e2f39b489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
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
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/css/css.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
      
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "        
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "        
    </body>
    
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony project";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        echo "  
        
            ";
        // line 14
        $this->displayBlock('menu', $context, $blocks);
        // line 35
        echo "           
        ";
    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        echo " 
                <div class=\"menu\">
                    
                    ";
        // line 17
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") == "user")) {
            // line 18
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint_validation_user_stories_sprint"), "html", null, true);
            echo "\">Validation user storie</a>
                        
                    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") == "admin")) {
            // line 21
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_creation_compte_client"), "html", null, true);
            echo "\">Création compte client</a>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_creation_projet"), "html", null, true);
            echo "\">Création projet</a>
                        
                    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") == "dev")) {
            // line 25
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint_tableau_de_bord_sprint"), "html", null, true);
            echo "\">CRA</a>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint_tableau_de_bord_sprint"), "html", null, true);
            echo "\">Tableau de bord sprint</a>
                        
                    ";
        }
        // line 29
        echo "                        
                    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories"), "html", null, true);
        echo "\">User storie</a>
                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_connexion"), "html", null, true);
        echo "\">Deconnexion</a>
                        
                </div> 
            ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::modeleParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 38,  131 => 31,  127 => 30,  124 => 29,  118 => 26,  113 => 25,  107 => 22,  102 => 21,  95 => 18,  93 => 17,  86 => 14,  81 => 35,  79 => 14,  73 => 12,  68 => 6,  62 => 5,  55 => 39,  53 => 38,  50 => 37,  48 => 12,  41 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
