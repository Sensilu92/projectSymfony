<?php

/* suiviProjetDevelopperBundle:Developper:consulteNoticeVue.html.twig */
class __TwigTemplate_c00155cadfbd1c68201b4fead5c903b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'emplacement' => array($this, 'block_emplacement'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Consultation des notices
";
    }

    // line 7
    public function block_emplacement($context, array $blocks = array())
    {
        // line 8
        echo "   Consultation des notices
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "   <div class=\"span4 offset4\">
    ";
        // line 13
        if (array_key_exists("theNotice", $context)) {
            // line 14
            echo "        <html>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "theNotice"), "explication"), "html", null, true);
            echo "</html>
    ";
        }
        // line 16
        echo "       </div> 
    ";
        // line 17
        if (array_key_exists("message", $context)) {
            // line 18
            echo "        <a style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</a>
    ";
        }
        // line 20
        echo "
 ";
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
        return array (  73 => 20,  67 => 18,  65 => 17,  62 => 16,  56 => 14,  54 => 13,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
