<?php

/* SuiviprojetAdministrateurBundle:Admin:accueilVue.html.twig */
class __TwigTemplate_f47c6cb001ef75a602c1c1c8fbdb70a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modele2.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'contentCenter' => array($this, 'block_contentCenter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::modele2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $this->displayParentBlock("menu", $context, $blocks);
        echo "Accueil<br /><br />";
    }

    // line 5
    public function block_contentCenter($context, array $blocks = array())
    {
        echo " 

 ";
    }

    public function getTemplateName()
    {
        return "SuiviprojetAdministrateurBundle:Admin:accueilVue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  29 => 3,);
    }
}
