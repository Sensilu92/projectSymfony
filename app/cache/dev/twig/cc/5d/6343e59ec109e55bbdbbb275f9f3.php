<?php

/* ::base.html.twig */
class __TwigTemplate_cc5d6343e59ec109e55bbdbbb275f9f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_top' => array($this, 'block_body_top'),
            'm' => array($this, 'block_m'),
            'emplacement' => array($this, 'block_emplacement'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        echo "
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset=\"UTF-8\" />
        
        <title>
            ";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        // line 25
        echo "        </title>
        
        ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "        
        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "            
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>            
    
    <body>
        ";
        // line 49
        echo "        ";
        $this->displayBlock('body_top', $context, $blocks);
        // line 83
        echo "
    
                       
          ";
        // line 86
        $this->displayBlock('m', $context, $blocks);
        // line 95
        echo "          
                        
        
        ";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "    </body>
    
</html>

";
    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
        // line 23
        echo "                Symfony project 
            ";
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "            ";
        // line 29
        echo "       ";
        // line 31
        echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
           ";
        // line 33
        echo "        ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "           ";
        // line 41
        echo "        ";
    }

    // line 49
    public function block_body_top($context, array $blocks = array())
    {
        // line 50
        echo "            <nav class=\"navbar navbar-static-top\">
                <div class=\"navbar-inner\">
                    <div class=\"container\">
                        <ul class=\"nav\">
                            ";
        // line 54
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "role"), "method") == "admin")) {
            // line 55
            echo "                                ";
            // line 62
            echo "                                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_creation_compte_client"), "html", null, true);
            echo "\">Création compte client</a></li>
                                    <li><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_creation_projet"), "html", null, true);
            echo "\">Création projet</a></li>
                                    <li><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint_assignation_user_stories"), "html", null, true);
            echo "\">Assignation user stories</a></li>
                                    <li><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint_creation"), "html", null, true);
            echo "\">Création sprint</a></li>
                                  
                                
                                <li class=\"divider-vertical\"></li>
                            ";
        }
        // line 70
        echo "                            <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suivi_projet_developper_creation_notice"), "html", null, true);
        echo "\">Création notice d'utilisation</a></li>
                            ";
        // line 72
        echo "                            <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suivi_projet_developper_cra"), "html", null, true);
        echo "\">CRA</a></li>
                            <li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint_tableau_de_bord_sprint"), "html", null, true);
        echo "\">Tableau de bord sprint</a></li>
                            ";
        // line 75
        echo "                            <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories"), "html", null, true);
        echo "\">User storie</a></li>
                            <li><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_deconnexion"), "html", null, true);
        echo "\">Deconnexion</a></li>
                            ";
        // line 78
        echo "                        </ul>
                    </div>
                 </div>
            </nav>                    
        ";
    }

    // line 86
    public function block_m($context, array $blocks = array())
    {
        // line 87
        echo "            <div class=\"container-fluid\">
                <div class=\"row-fluid\">
                        <div class=\"page-header\">
    
                    ";
        // line 91
        $this->displayBlock('emplacement', $context, $blocks);
        // line 93
        echo "                    </div></div>
            </div>
        ";
    }

    // line 91
    public function block_emplacement($context, array $blocks = array())
    {
        // line 92
        echo "                    ";
    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        // line 99
        echo "            <div class=\"container-fluid\">
                <div class=\"row-fluid\">
                    ";
        // line 101
        $this->displayBlock('content', $context, $blocks);
        // line 102
        echo "                </div>
            </div>
        ";
    }

    // line 101
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 101,  216 => 102,  214 => 101,  210 => 99,  207 => 98,  203 => 92,  200 => 91,  194 => 93,  192 => 91,  186 => 87,  183 => 86,  175 => 78,  171 => 76,  166 => 75,  162 => 73,  157 => 72,  152 => 70,  144 => 65,  140 => 64,  136 => 63,  131 => 62,  129 => 55,  127 => 54,  121 => 50,  118 => 49,  114 => 41,  112 => 36,  109 => 35,  105 => 33,  100 => 31,  98 => 29,  96 => 28,  93 => 27,  88 => 23,  85 => 22,  77 => 105,  75 => 98,  70 => 95,  68 => 86,  63 => 83,  60 => 49,  53 => 43,  50 => 42,  48 => 35,  45 => 34,  43 => 27,  39 => 25,  37 => 22,  27 => 14,);
    }
}
