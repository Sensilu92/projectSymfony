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

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "       
            ";
        // line 40
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "           
";
        // line 42
        $this->displayBlock('contentCenter2', $context, $blocks);
        // line 48
        echo " 
        

        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "  
      
    ";
    }

    // line 40
    public function block_stylesheets($context, array $blocks = array())
    {
        $this->displayParentBlock("stylesheets", $context, $blocks);
    }

    // line 42
    public function block_contentCenter2($context, array $blocks = array())
    {
        echo "<div class=\"center\">    ";
        $this->displayBlock('menu', $context, $blocks);
        // line 43
        echo "    
    <div class=\"center1\">";
        // line 44
        $this->displayBlock('contentCenter', $context, $blocks);
        echo "</div> 
    
    <div class=\"left\" >";
        // line 46
        $this->displayBlock('contentLeft', $context, $blocks);
        echo "</div> 
    
    <div class=\"right\">";
        // line 48
        $this->displayBlock('contentRight', $context, $blocks);
        echo " </div></div>";
    }

    // line 42
    public function block_menu($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo " ";
    }

    // line 44
    public function block_contentCenter($context, array $blocks = array())
    {
    }

    // line 46
    public function block_contentLeft($context, array $blocks = array())
    {
    }

    // line 48
    public function block_contentRight($context, array $blocks = array())
    {
    }

    // line 51
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
        return array (  113 => 51,  108 => 48,  103 => 46,  98 => 44,  90 => 42,  85 => 48,  80 => 46,  75 => 44,  72 => 43,  67 => 42,  61 => 40,  55 => 52,  53 => 51,  48 => 48,  46 => 42,  43 => 41,  41 => 40,  38 => 39,  35 => 38,);
    }
}
