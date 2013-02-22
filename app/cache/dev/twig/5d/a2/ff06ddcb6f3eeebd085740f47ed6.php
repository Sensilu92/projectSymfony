<?php

/* SuiviprojetAdministrateurBundle:Admin:createProjet.html.twig */
class __TwigTemplate_5da2ff06ddcb6f3eeebd085740f47ed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

<h3>Ajout projet</h3>
 
<div class=\"well\">
    <form method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" />
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "SuiviprojetAdministrateurBundle:Admin:createProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 8,  26 => 7,  19 => 2,);
    }
}
