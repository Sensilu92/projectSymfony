<?php

/* ::modele.html.twig */
class __TwigTemplate_e0dd5780145b7575e3f39285d0f99b63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modeleParent.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'contentCenter2' => array($this, 'block_contentCenter2'),
            'menu' => array($this, 'block_menu'),
            'contentCenter' => array($this, 'block_contentCenter'),
            'contentLeft' => array($this, 'block_contentLeft'),
            'contentRight' => array($this, 'block_contentRight'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::modeleParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "       
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "           
        ";
        // line 7
        $this->displayBlock('contentCenter2', $context, $blocks);
        // line 13
        echo " 
        

        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "  
      
    ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $this->displayParentBlock("stylesheets", $context, $blocks);
    }

    // line 7
    public function block_contentCenter2($context, array $blocks = array())
    {
        echo "<div class=\"center\">    ";
        $this->displayBlock('menu', $context, $blocks);
        // line 8
        echo "    
    <div class=\"center1\">";
        // line 9
        $this->displayBlock('contentCenter', $context, $blocks);
        echo "</div> 
    
    <div class=\"left\" >";
        // line 11
        $this->displayBlock('contentLeft', $context, $blocks);
        echo "</div> 
    
    <div class=\"right\">";
        // line 13
        $this->displayBlock('contentRight', $context, $blocks);
        echo " </div></div>";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo " ";
    }

    // line 9
    public function block_contentCenter($context, array $blocks = array())
    {
    }

    // line 11
    public function block_contentLeft($context, array $blocks = array())
    {
    }

    // line 13
    public function block_contentRight($context, array $blocks = array())
    {
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::modele.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 16,  108 => 13,  103 => 11,  98 => 9,  90 => 7,  85 => 13,  80 => 11,  75 => 9,  72 => 8,  67 => 7,  61 => 5,  55 => 17,  53 => 16,  48 => 13,  46 => 7,  43 => 6,  41 => 5,  38 => 4,  35 => 3,);
    }
}
