<?php

/* suiviProjetDevelopperBundle:Developper:consulteNoticeVue.html.twig */
class __TwigTemplate_c00155cadfbd1c68201b4fead5c903b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modele2.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
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
        echo "Consultation des notices <br /><br />";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (array_key_exists("theNotice", $context)) {
            // line 7
            echo "        <html>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theNotice"), "explication"), "html", null, true);
            echo "</html>
    ";
        }
        // line 9
        echo " ";
    }

    public function getTemplateName()
    {
        return "suiviProjetDevelopperBundle:Developper:consulteNoticeVue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
