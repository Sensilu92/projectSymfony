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
        // line 36
        echo "        
        ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
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
        // line 34
        echo "           
        ";
    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        echo " 
                <div class=\"menu\">
                        
                    ";
        // line 18
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_creation_compte_client"), "html", null, true);
        echo "\">Création compte client</a>
                        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_creation_projet"), "html", null, true);
        echo "\">Création projet</a>
                        
                   ";
        // line 22
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suivi_projet_developper_cra"), "html", null, true);
        echo "\">CRA</a>
                        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suivi_projet_developper_cra_individuel"), "html", null, true);
        echo "\">CRA individuel</a>
                        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint_tableau_de_bord_sprint"), "html", null, true);
        echo "\">Tableau de bord sprint</a>
                        
                    ";
        // line 27
        echo "                        
                    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories"), "html", null, true);
        echo "\">User storie</a>
                    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_deconnexion"), "html", null, true);
        echo "\">Deconnexion</a>
                    ";
        // line 31
        echo "                        
                </div> 
            ";
    }

    // line 37
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
        return array (  134 => 37,  128 => 31,  124 => 29,  120 => 28,  117 => 27,  112 => 24,  108 => 23,  103 => 22,  98 => 19,  93 => 18,  86 => 14,  81 => 34,  79 => 14,  73 => 12,  68 => 6,  62 => 5,  55 => 38,  53 => 37,  50 => 36,  48 => 12,  41 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
