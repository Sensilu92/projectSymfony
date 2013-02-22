<?php

/* SuiviprojetAdministrateurBundle:Admin:creationCompteClient.html.twig */
class __TwigTemplate_d69538f999e588dd8bc5c6b3157b77f2 extends Twig_Template
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
        echo "Création compte client <br /><br />";
    }

    // line 5
    public function block_contentCenter($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"well\">
        <form method=\"post\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <input type=\"submit\" class=\"btn btn-primary\" />
        </form>
    </div>
 
 ";
    }

    public function getTemplateName()
    {
        return "SuiviprojetAdministrateurBundle:Admin:creationCompteClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  43 => 8,  39 => 6,  36 => 5,  29 => 3,);
    }
}
