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
            'content' => array($this, 'block_content'),
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
        // line 11
        echo " 
        

        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "  
      </div>
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
     <div class=\"contentCenter\"> ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "
</div>";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo " ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
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
        return array (  93 => 14,  88 => 9,  80 => 7,  75 => 10,  73 => 9,  70 => 8,  65 => 7,  59 => 5,  53 => 15,  51 => 14,  46 => 11,  44 => 7,  41 => 6,  39 => 5,  36 => 4,  33 => 3,);
    }
}
