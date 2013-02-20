<?php

/* ::modele.html.twig */
class __TwigTemplate_e0dd5780145b7575e3f39285d0f99b63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'contentCenter2' => array($this, 'block_contentCenter2'),
            'menu' => array($this, 'block_menu'),
            'contentCenter' => array($this, 'block_contentCenter'),
            'contentLeft' => array($this, 'block_contentLeft'),
            'contentRight' => array($this, 'block_contentRight'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    
    ";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "    

    
    <body>
    ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "    </body>
</html>";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/css/css.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"center\">";
        $this->displayBlock('contentCenter2', $context, $blocks);
        // line 23
        echo " </div>
        

        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "  
      
    ";
    }

    // line 11
    public function block_contentCenter2($context, array $blocks = array())
    {
        echo "    <div class=\"menu\">
        
        ";
        // line 13
        $this->displayBlock('menu', $context, $blocks);
        // line 17
        echo "    </div>
    
    <div class=\"center1\">";
        // line 19
        $this->displayBlock('contentCenter', $context, $blocks);
        echo "</div> 
    
    <div class=\"left\" >";
        // line 21
        $this->displayBlock('contentLeft', $context, $blocks);
        echo "</div> 
    
    <div class=\"right\">";
        // line 23
        $this->displayBlock('contentRight', $context, $blocks);
        echo " </div>";
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        echo " 
           <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories"), "html", null, true);
        echo "\">User storie</a>
           <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_creation_compte_client"), "html", null, true);
        echo "\">Compte client</a>
        ";
    }

    // line 19
    public function block_contentCenter($context, array $blocks = array())
    {
    }

    // line 21
    public function block_contentLeft($context, array $blocks = array())
    {
    }

    // line 23
    public function block_contentRight($context, array $blocks = array())
    {
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::modele.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 26,  127 => 23,  122 => 21,  117 => 19,  111 => 15,  107 => 14,  102 => 13,  97 => 23,  92 => 21,  87 => 19,  83 => 17,  81 => 13,  75 => 11,  69 => 27,  67 => 26,  62 => 23,  59 => 11,  56 => 10,  49 => 4,  46 => 3,  41 => 30,  39 => 10,  33 => 6,  31 => 3,  27 => 1,);
    }
}
