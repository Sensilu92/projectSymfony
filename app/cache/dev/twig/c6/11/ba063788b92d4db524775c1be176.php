<?php

/* ::modele2.html.twig */
class __TwigTemplate_c611ba063788b92d4db524775c1be176 extends Twig_Template
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
        // line 8
        echo "        
<div class=\"center\">";
        // line 9
        $this->displayBlock('contentCenter2', $context, $blocks);
        // line 16
        echo " 
    ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/css/css.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 9
    public function block_contentCenter2($context, array $blocks = array())
    {
        echo "   ";
        $this->displayBlock('menu', $context, $blocks);
        echo " 
    
    <div class=\"center1\">";
        // line 11
        $this->displayBlock('contentCenter', $context, $blocks);
        echo "</div>
        

        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "  
      ";
    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        $this->displayParentBlock("menu", $context, $blocks);
    }

    // line 11
    public function block_contentCenter($context, array $blocks = array())
    {
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::modele2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 14,  88 => 11,  82 => 9,  77 => 15,  75 => 14,  69 => 11,  61 => 9,  54 => 6,  51 => 5,  46 => 16,  44 => 9,  41 => 8,  39 => 5,  36 => 4,  33 => 3,);
    }
}
