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
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
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
    <div class=\"menu\">";
        // line 7
        $this->displayBlock('menu', $context, $blocks);
        echo "</menu>
    
    <body>
    ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 24
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

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        echo " LE MENU ";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
    
    <div class=\"center1\">";
        // line 13
        $this->displayBlock('contentCenter', $context, $blocks);
        echo "</div> 
    
    <div class=\"left\" >";
        // line 15
        $this->displayBlock('contentLeft', $context, $blocks);
        echo "</div> 
    
    <div class=\"right\">";
        // line 17
        $this->displayBlock('contentRight', $context, $blocks);
        echo " </div>
        

        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "  
      
    ";
    }

    // line 13
    public function block_contentCenter($context, array $blocks = array())
    {
    }

    // line 15
    public function block_contentLeft($context, array $blocks = array())
    {
    }

    // line 17
    public function block_contentRight($context, array $blocks = array())
    {
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::modele.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 20,  105 => 17,  100 => 15,  95 => 13,  89 => 21,  87 => 20,  81 => 17,  76 => 15,  71 => 13,  67 => 11,  64 => 10,  58 => 7,  51 => 4,  48 => 3,  43 => 24,  41 => 10,  35 => 7,  32 => 6,  30 => 3,  26 => 1,);
    }
}
